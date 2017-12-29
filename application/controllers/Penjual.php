<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjual extends CI_Controller {

    
	public function __construct(){
        parent::__construct(); 
        $this->load->model('Mdl_login');
        $this->load->model('Mdl_penjual');
        $this->load->model('Mdl_query');
        $this->Mdl_login->is_logged_in(); 
    }
    
	public function index()
	{
        $data['main']       = 'penjual/index';
        $data['title']      = 'Penjual Kain'; 
        $data['jahit_act']  = 'active';
        $data['url_modul']  = $this->uri->segment(1);
        $data['result']     = $this->Mdl_query->GetData('kain');
        
        
		$this->load->view('include/template',$data);
	}
    
    
    public function tambah()
    {
        $data['main']           = 'disperindag/tambah';
        $data['title']          = 'Tambah Data'; 
        $data['jahit_act']      = 'active';
        $data['url_modul']      = $this->uri->segment(1);
		$this->load->view('include/template',$data);
    } 
   
    public function ubah()
    {
        
        $no               = $this->uri->segment(3);
        $edit             = $this->Mdl_query->GetWhereArr('penjahit','no',$no);
        $data['url_modul']  = $this->uri->segment(1);
        
        $data = array(
                'no'        => $edit[0]['no'],
                'nama'      => $edit[0]['nama'],
                'kec'       => $edit[0]['kecamatan'],
                'kel'       => $edit[0]['kelurahan'],
                'alamat'    => $edit[0]['alamat'],
                'jenis'     => $edit[0]['jenis_usaha']
        );
        
        
        $data['main']           = 'disperindag/ubah';
        $data['title']          = 'Ubah Data'; 
        $data['jahit_act']      = 'active';
        
		$this->load->view('include/template',$data);
    } 
    
    
    public function simpan()
    {
        $this->Mdl_disperindag->simpan();
    }
    
    public function edit()
    {
        $this->Mdl_disperindag->ubah();
    }
    
    
    public function upload()
    {
        $data['main']   = 'disperindag/upload';
        $data['title']  = ' '; 
        
		$this->load->view('include/template',$data);
    }
    
    public function do_upload(){
		$config['upload_path']    = './assets/uploads/';
        $config['allowed_types']  = 'xlsx|xls';
		
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        
		if ( ! $this->upload->do_upload('upload')){
			$error       = array('error' => $this->upload->display_errors());
            print_r ($error);
		}
		else{
			$data        = array('upload_data' => $this->upload->data());
            $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
            $filename   = $upload_data['file_name'];
            $this->Mdl_disperindag->upload_data($filename);
            unlink('./assets/uploads/'.$filename);
            redirect('disperindag');
		}
	}
    
     public function delete()
    {
        $no = $this->uri->segment(3);
        $table = 'penjahit';
        $this->Mdl_query->delete($no,$table);
        redirect('disperindag'); 
    }
    
}
