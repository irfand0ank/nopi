<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Mdl_JasaKustom extends CI_Model{
    
    public function __construct(){
        parent::__construct();    
        $this->load->model('Mdl_query');
        $this->load->library('upload');
       
    }
    
    public function ReadJasa($akun)
    {
        $res = $this->db->query("SELECT * FROM jasa_jahit WHERE  id_penjahit = '$akun' ");
        
        $hasil =  $res->result();
        
        $kategori = "";
        foreach($hasil as $json)
        {
            
           $kategori .=  $json->kode_kategori.",";
            
        }
       
        return substr($kategori, 0, -1);
    }
    
    public function simpan()
    {
        $jasa               =  $this->input->post('jasa');
        $harga              =  str_replace( ',', '.',str_replace( ' ', '',$this->input->post('harga')));
        $waktu              =  $this->input->post('waktu');
        $keterangan         =  $this->input->post('keterangan');
        $penjahit           = $this->session->userdata('sys_no');
        
        
        $data = array(
            'kode_kategori'  => $jasa,
            'id_penjahit'    => $penjahit,
            'harga'          => $harga,
            'waktu'          => $waktu,
            'keterangan'     => $keterangan,
        );
        
        $this->db->Insert('jasa_jahit',$data);
        redirect('jasa');
    }
    
    public function ubah()
    {
        //$harga              =  str_replace( ',', '.',$this->input->post('harga'));
        $harga              =  str_replace( ',', '.',str_replace( ' ', '',$this->input->post('harga')));
        $waktu              =  $this->input->post('waktu');
        $keterangan         =  $this->input->post('keterangan');
        $no                 = $this->input->post('no');
        
        echo $harga;
        $data = array(
            'harga'          => $harga,
            'waktu'          => $waktu,
            'keterangan'     => $keterangan,
        );
        
        $where = array(
                    'no' => $this->input->post('no'),
                );  

        $this->db->Update('jasa_jahit',$data,$where); 
        redirect('jasa');
    }
    
    
    
}