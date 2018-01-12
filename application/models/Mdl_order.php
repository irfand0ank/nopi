<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Mdl_order extends CI_Model{
    
    public function __construct(){
        parent::__construct();    
        $this->load->model('Mdl_query');
        $this->load->library('upload');
       
    }
    
    public function TerimaOrder()
    {
        $mulai          = tgl_sql($this->input->post('waktu_mulai'));
        $selesai        = tgl_sql($this->input->post('waktu_selesai'));
        $no             = $this->input->post('no');
        
        $data = array(
            'mulai'         => $mulai,
            'selesai'       => $selesai,
            'setuju_jahit'  => 'W',
        );
        
        $where = array(
                    'no'   => $no,
                );  

        $this->db->Update('pesanan',$data,$where);
        
        redirect('order');
        
    }
    
    
    
    
    public function ReadOrder($akun,$setuju_jahit)
    {
        $data = array(
            'baca'          => 'T',
        );
        
        $where = array(
                    'id_penjahit'   => $akun,
                    'setuju_jahit'  => $setuju_jahit,
                );  

        $this->db->Update('pesanan',$data,$where);
    }
    
    
    
    public function GetDataPesanan($akun,$setuju_jahit)
    {
        if(is_null($setuju_jahit))
        {
            $res = $this->db->query("SELECT * FROM pesanan WHERE baca = 'T' and id_penjahit ='$akun' and setuju_jahit is null  or setuju_jahit = 'w'  order by no desc");
        }
        else
        {
            $res = $this->db->query("SELECT * FROM pesanan WHERE baca = 'T' and id_penjahit ='$akun' and setuju_jahit='$setuju_jahit' order by no desc");
        }
        
        
        
        return $res->result();
    }
    
    /*public function GetProgress($akun)
    {
        $res = $this->db->query("SELECT * FROM pesanan WHERE  setuju_jahit = 'T' and id_penjahit ='$akun' order by no desc");
        
        return $res->result();
    }*/
    
    public function GetRiwayat($akun)
    {
        $res = $this->db->query("SELECT * FROM pesanan WHERE  finish = 'T' and id_penjahit ='$akun' order by no desc");
        
        return $res->result();
    }
    
    
    public function CountOrder($akun,$jahit)
    {
        if($jahit == null)
        {
            $res = $this->db->query("SELECT * FROM pesanan WHERE baca = 'F' and id_penjahit ='$akun' and setuju_jahit is null");
        }
        else
        {
            $res = $this->db->query("SELECT * FROM pesanan WHERE baca = 'F' and id_penjahit ='$akun' and setuju_jahit ='$jahit'");
        }
            
        return $res->num_rows();
    }
    
    public function simpan()
    {
        
        $data = array(
            'kategori'          => $this->input->post('kategori'),
        );
        
        $this->db->Insert('kategori',$data);
         redirect('kategori');
    }
    
    
    public function ubah()
    {
        $data = array(
            'kategori'          => $this->input->post('kategori'),
        );
        
        $where = array(
                    'no' => $this->input->post('no'),
                );  

        $this->db->Update('kategori',$data,$where); 
        
     redirect('kategori');
    }
    
    
}