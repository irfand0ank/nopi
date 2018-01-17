<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Mdl_temp extends CI_Model{
    
    public function __construct(){
        parent::__construct();    
        $this->load->model('Mdl_query');
        $this->load->library('upload');
       
    }
    
    
    public function TotalOrder($akun)
    {
        
            $res    = $this->db->query("SELECT * FROM temp_kustom WHERE  id_user ='$akun' ");
            $res2   = $this->db->query("SELECT * FROM temp_model WHERE  id_user ='$akun' ");
            $res3   = $this->db->query("SELECT * FROM temp_kain WHERE  id_user ='$akun' ");
       
        $hasil1 = $res->num_rows();
        $hasil2 = $res2->num_rows();
        $hasil3 = $res3->num_rows();
            
        $total = $hasil1 + $hasil2 + $hasil3;
        return $total;
    }
}
    