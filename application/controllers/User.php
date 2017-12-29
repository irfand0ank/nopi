<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
        parent::__construct();    
        $this->load->model('Mdl_login');
        $this->load->model('Mdl_user');
        $this->load->model('Mdl_query');
        $this->Mdl_login->is_logged_in();   
       
    }
    
	public function index()
	{
        $data['main'] = 'user/user';
        $data['title'] = 'Management User'; 
        $table = 'users';
        $data['result'] =$this->Mdl_query->GetDataUser($table);
		$this->load->view('include/template',$data);
	}
    
    
    public function tambah()
    {
        $data['main'] = 'user/tambah';
        $data['title'] = 'Management User'; 
        
		$this->load->view('include/template',$data);
    }
    
    
    public function ubah()
    {
        $table = 'users';
        $no = $this->uri->segment(3);
        $edit = $this->Mdl_query->GetDataWhere($no,$table);
       // echo $this->db->last_query();
        $data = array(
                'no' => $edit[0]['no'],
                'user' => $edit[0]['user'],
                'nama' => $edit[0]['nama'],
                'level' => $edit[0]['level'],
        );
        
        $data['main'] = 'user/ubah';
        $data['title'] = 'Management User'; 
        
		$this->load->view('include/template',$data);
    }
    
    
    public function insert()
    {
       $this->Mdl_user->simpan();
        
    }
    
    public function edit()
    {
       $this->Mdl_user->ubah();
        
    }
    
    public function delete()
    {
        $no = $this->uri->segment(3);
        $table = 'users';
        $this->Mdl_query->delete($no,$table);
        redirect('user'); 
    }
}