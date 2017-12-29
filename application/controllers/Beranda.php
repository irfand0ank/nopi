<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct(){
        parent::__construct(); 
        $this->load->model('Mdl_login');
        $this->load->model('Mdl_beranda');
        $this->load->model('Mdl_query');
    }
    
	public function index()
	{
        $data['main']           = 'beranda';
        $data['title']          = 'Beranda'; 
        $data['beranda_act']    = 'current';
        
        
        
		$this->load->view('include/template',$data);
	}
    
   
    
    function logout(){
        $this->session->sess_destroy();
		redirect('login');
    }   
}
