<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Mdl_JasaModel extends CI_Model{
    
    public function __construct(){
        parent::__construct();    
        $this->load->model('Mdl_query');
        $this->load->library('upload');
       
    }
    
    public function ReadJasa($akun)
    {
        $res = $this->db->query("SELECT * FROM jasa_model WHERE  id_penjahit = '$akun' ");
        
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
        $sys_no                     = $this->session->userdata('sys_no');
        $config['upload_path']      = './assets/images/';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']	        = '1000000';
        $nmfile                     = "file_".time();
        $config['file_name']        = $nmfile;
        
        $this->upload->initialize($config);
       if($this->upload->do_upload('foto'))
       {
           
           $foto=$this->upload->file_name;
       }
        
        
        $harga              =  str_replace( ',', '.',str_replace( ' ', '',$this->input->post('harga')));
        $harga_jahit        =  str_replace( ',', '.',str_replace( ' ', '',$this->input->post('harga_jahit')));
        $nama               =  $this->input->post('nama');
        $waktu              =  $this->input->post('waktu');
        $keterangan         =  $this->input->post('keterangan');
        $penjahit           =   $sys_no;
        
        
        $data = array(
            'foto'           => $foto,
            'nama'           => $nama,
            'id_penjahit'    => $penjahit,
            'harga'          => $harga,
            'harga_jahit'    => $harga_jahit,
            'waktu'          => $waktu,
            'keterangan'     => $keterangan,
        );
        
        $this->db->Insert('jasa_model',$data);
        redirect('JasaModel');
    }
    
    public function ubah()
    {   
        $sys_no                     = $this->session->userdata('sys_no');
        $config['upload_path']      = './assets/images/';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']	        = '1000000';
        $nmfile                     = "file_".time();
        $config['file_name']        = $nmfile;
        
        $this->upload->initialize($config);
       if($this->upload->do_upload('foto'))
       {
           
           $foto=$this->upload->file_name;
       }
        else
        {
            $foto = $this->input->post('foto1');
        }
        
        //$harga              =  str_replace( ',', '.',$this->input->post('harga'));
        $harga              =  str_replace( ',', '.',str_replace( ' ', '',$this->input->post('harga')));
        $harga_jahit        =  str_replace( ',', '.',str_replace( ' ', '',$this->input->post('harga_jahit')));
        $waktu              =  $this->input->post('waktu');
        $keterangan         =  $this->input->post('keterangan');
        $no                 =  $this->input->post('no');
        $nama               =  $this->input->post('nama');
        
        
        echo $harga;
        $data = array(
            'foto'           => $foto,
            'nama'           => $nama,
            'harga'          => $harga,
            'harga_jahit'    => $harga_jahit,
            'waktu'          => $waktu,
            'keterangan'     => $keterangan,
        );
        
        $where = array(
                    'no' => $this->input->post('no'),
                );  

        $this->db->Update('jasa_model',$data,$where); 
        redirect('JasaModel');
    }
    
    
    
}