<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct(){
        parent::__construct(); 
        $this->load->model('Mdl_login');
        $this->load->model('Mdl_member');
        $this->load->model('Mdl_query');
        $this->Mdl_login->is_logged_in(); 
    }
    
	public function index()
	{
        $data['main']           = 'member/member';
        $data['title']          = 'Member'; 
        
        
        
		$this->load->view('include/template',$data);
	}
    
    
    
    public function penjual()
	{
        $data['main']           = 'member/penjual';
        $data['title']          = 'Member'; 
        
        
        
		$this->load->view('include/template',$data);
	}
    
    
    public function penjahit()
	{
        
        $data['main']           = 'member/penjahit';
        $data['title']          = 'Member'; 
        
        
        
		$this->load->view('include/template',$data);
	}
    
    
    public function cek_penjahit()
	{
        $nama                   =  $this->input->post('cek_nama');
        if(empty($nama) )
        {
             redirect('member/penjahit');
        }
        else
        {
            $data['result']         = $this->Mdl_member->CekPenjahit($nama);
        }
        
        
        $data['main']           = 'member/penjahit';
        $data['title']          = 'Member'; 
        
        //echo $this->db->last_query();
        
		$this->load->view('include/template',$data);
	}
    
    public function daftar_jahit()
	{
        $data['jahit_id']       =  $this->uri->segment(3);
        
        //echo $id;
        $data['main']           = 'member/daftar_jahit';
        $data['title']          = 'Member'; 
        
        //echo $this->db->last_query();
        
		$this->load->view('include/template',$data);
	}
    
    
    public function regis_jahit()
	{
        $this->Mdl_member->RegisJahit();
	}
    
    
    
    
    
    function logout(){
        $this->session->sess_destroy();
		redirect('login');
    }   
}
