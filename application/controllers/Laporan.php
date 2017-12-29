<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct(){
        parent::__construct();    
        $this->load->model('Mdl_login');
        $this->load->model('Mdl_query');
        $this->load->model('Mdl_laporan');
        $this->Mdl_login->is_logged_in();   
        $this->Mdl_login->is_logged_in(); 
       
    }
    
	public function index()
	{
        $data['main'] = 'laporan';
        $data['title'] = 'laporan'; 
		$this->load->view('include/template',$data);
	}
    
     
}
