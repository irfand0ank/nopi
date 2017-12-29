<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
        parent::__construct();  
        $this->load->model('Mdl_login');
        $is_logged_in = $this->session->userdata('is_logged_in');
		if($is_logged_in){
			//redirect('beranda');
		}
    }
    public function index()
	{
        
        $data['main'] = 'login';
        $data['title'] = 'Halaman Login';        
		$this->load->view('login', $data);
	}
    
    function aut()
	{
		$user   = $this->input->post('user');
        $pass   = $this->input->post('pass');
        $level  = $this->input->post('level');
        
        $this->load->model('Mdl_login');
        $verify = $this->Mdl_login->verify();
        if($verify){   
            redirect('beranda');
           // echo $this->db->last_query(); 
        }else{
            redirect('login?login=error'); 
        }                 
        
	}
    
    
    public function regis()
	{
        
        $data['main'] = 'regis';
        $data['title'] = 'Halaman Register';  
        
		$this->load->view('regis', $data);
	}
    
    public function register()
	{
        
        $this->Mdl_login->register();
	}
    
    
}
