<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Mdl_pemesanan extends CI_Model{
    
    public function __construct(){
        parent::__construct();    
        $this->load->model('Mdl_query');
        $this->load->library('upload');
       
    }
    
    public function KategoriJson()
    {
        header("Content-Type: application/json");
        
        $res= $this->db->query(" SELECT * from kategori ");
        
        
             
         $tes = $res->result();
        
         $return_arr = [];
          foreach($tes as $line)
          {
              $groups[]=['value'=>$line->no,'text'=>$line->kategori];
          }
        
        echo json_encode($groups,JSON_UNESCAPED_UNICODE);
       
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