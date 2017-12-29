<?php

class Mdl_user extends CI_Model {

    public function simpan()
    {
        $pass = md5(12345);
        $barang = array(
            'nama' => $this->input->post('nama'),
            'user' => $this->input->post('user'),
            'level' => $this->input->post('level'),
            'pass' => $pass,
        );

        $this->db->Insert('users',$barang);
        
        redirect('user');
    }
    
    public function ubah()
    {
        
        $barang = array(
                    'nama' => $this->input->post('nama'),
                    'user' => $this->input->post('user'),
                    'level' => $this->input->post('level'),
                );  
        $where = array(
                    'no' => $this->input->post('no'),
                );  

        $this->db->Update('users',$barang,$where); 
        
         redirect('user');
    }
    
}