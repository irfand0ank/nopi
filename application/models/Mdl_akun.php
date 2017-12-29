<?php

class Mdl_akun extends CI_Model {

    public function __construct(){
        parent::__construct();    
        $this->load->model('Mdl_query');
       
    }
    
    public function ganti()
    {
        $passlama = md5($this->input->post('passlama'));
        $passbaru = md5($this->input->post('passbaru'));
        $id = $this->input->post('id');
        
        $pass =$this->Mdl_query->GetPass('users');
        
        $data_pass = $pass[0]['pass'];
        echo $passlama."<br>";
        echo $data_pass."<br>";
        if($passlama == $data_pass)
        {
           $akun = array(
                    'pass' => $passbaru
           );  
            $where = array(
                'id' => $this->input->post('id'),
            );  

            $this->db->Update('users',$akun,$where); 
            
             $this->session->info = 'Password Berhasil diganti';
            redirect('akun');
        }
        else
        {
            $this->session->info = 'Password lama tidak sama';
            redirect('akun');
        }
        
        
        
    }
    
    
    
}