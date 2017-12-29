<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Mdl_member extends CI_Model{
    
    public function __construct(){
        parent::__construct();    
        $this->load->model('Mdl_query');
        $this->load->library('upload');
       
    }
    
    
    
    public function CekPenjahit($nama)
    {
        
        $res=$this->db->query("  SELECT * FROM penjahit WHERE nama LIKE '%$nama%'order by no desc  ");
             
         return $res->result();
    }
    
    public function RegisJahit()
    {
        $sys_no  = $this->session->userdata('sys_no');
        
        /*regis penjahit di table regis jahit*/
        $data = array(
            'id_users'          => $sys_no,
            'id_penjahit'       => $this->input->post('jahit_id'),
            'jenis_rek'         => $this->input->post('jenis_rek'),
            'nomor_rek'         => $this->input->post('nomor_rek'),
        );
        
        $this->db->Insert('regis_penjahit',$data);
        
        
        /*update level user di table user*/
        $data = array(
            'level'          => '3',
        );
        
        $where = array(
                    'no' => $sys_no,
                );  

        $this->db->Update('users',$data,$where);
        
        redirect('beranda');
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