<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

    
	public function __construct(){
        parent::__construct(); 
        $this->load->model('Mdl_login');
        $this->load->model('Mdl_kategori');
        $this->load->model('Mdl_query');
        $this->Mdl_login->is_logged_in(); 
    }
    
	public function index()
	{
        $data['main']       = 'kategori/index';
        $data['title']      = 'kategori Jahit'; 
        $data['jahit_act']  = 'active';
        $data['url_modul']  = $this->uri->segment(1);
        $data['result']     =$this->Mdl_query->GetData('kategori');
        
        
		$this->load->view('include/template',$data);
	}
    
    
    public function tambah()
    {
        $data['main']           = 'kategori/tambah';
        $data['title']          = 'Tambah Data'; 
        $data['jahit_act']      = 'active';
        $data['url_modul']      = $this->uri->segment(1);
		$this->load->view('include/template',$data);
    } 
   
    public function ubah()
    {
        
        $no                 = $this->uri->segment(3);
        $edit               = $this->Mdl_query->GetWhereArr('kategori','no',$no);
        $data['url_modul']  = $this->uri->segment(1);
        
        $data = array(
                'no'        => $edit[0]['no'],
                'kategori'      => $edit[0]['kategori'],
        );
        
        
        $data['main']           = 'kategori/ubah';
        $data['title']          = 'Ubah Data'; 
        $data['jahit_act']      = 'active';
        
		$this->load->view('include/template',$data);
    } 
    
    public function KategoriJson()
    {
        
        
        $edit               = $this->Mdl_kategori->KategoriJson();
        
       
    } 
    
    
    public function simpan()
    {
        $this->Mdl_kategori->simpan();
    }
    
    public function edit()
    {
        $this->Mdl_kategori->ubah();
    }
    
     public function delete()
    {
        $no = $this->uri->segment(3);
        $table = 'kategori';
        $this->Mdl_query->delete($no,$table);
        redirect('kategori'); 
    }
    
}
