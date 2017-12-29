<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Mdl_profil extends CI_Model{
    
    public function __construct(){
        parent::__construct();    
        $this->load->model('Mdl_query');
        $this->load->library('upload');
       
    }
    
    public function UpdateInline()
    {
        //UPDATE users SET ".$_POST['name']."='".$_POST['value']."' WHERE id=".$_POST['pk']
        $sys_no     = $this->session->userdata('sys_no');
        $data       = array(
                $this->input->post('name')          => $this->input->post('value'),
        );
        
        $where      = array(
                    'no' => $this->input->post('pk'),
                );  

        $this->db->Update('regis_penjahit',$data,$where); 
    }
    
    public function Updatechecked()
    {
        
        
        $val    = implode(",",$this->input->post('value'));
        
       //cho $val;
        $data   = array(
              $this->input->post('name')        => $val
            );

        $where = array(
                        'no' => $this->input->post('pk'),
                    );  

        $this->db->Update('regis_penjahit',$data,$where); 
        
        
    }
    
    /*9*/
    
    public function UpdatePhoto()
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
        
       //cho $val;
        $data   = array(
              'foto'        => $foto
            );

        $where = array(
                        'no' => $sys_no,
                    );  

        $this->db->Update('users',$data,$where); 
        
        redirect('profil');
    }
    
    /*9*/
    
    
}