<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

    
	public function __construct(){
        parent::__construct(); 
        $this->load->model('Mdl_login');
        $this->load->model('Mdl_profil');
        $this->load->model('Mdl_query');
        $this->Mdl_login->is_logged_in(); 
    }
    
	public function index()
	{
        
        $data['sys_no']     = $this->session->userdata('sys_no');

        $sys_level  = $this->Mdl_query->CekLevelUser($data['sys_no']);
        
        switch($sys_level)
        {
            case"1":
                $data['main']       = 'profil/index';
            break;
            
            case"2":
                $data['main']       = 'profil/index';
            break;
            
            case"3":
                $data['main']       = 'profil/penjahit';
                $data['jasa']       = $this->Mdl_query->GetData('kategori');
                $data['info']       = $this->Mdl_query->GetWhereArr('regis_penjahit','id_users',$data['sys_no']);
                $data['profil']     = $this->Mdl_query->GetWhereArr('users','no',$data['sys_no']);
            break;
            
            case"4":
                $data['main']       = 'profil/penjual';
            break;
            
            case"5":
                $data['main']       = 'profil/index';
            break;
            
                
        }
        
        
        $data['title']          = 'Beranda'; 
        $data['profil_act']     = 'current';
        $data['url_modul']      = $this->uri->segment(1);
        
        
		$this->load->view('include/template',$data);
	}
    
    
    public function UpdateInline()
    {
        $this->Mdl_profil->UpdateInline();
    } 
    
    public function Updatechecked()
    {
       $this->Mdl_profil->Updatechecked();
    } 
    
    public function update_photo()
    {
       $this->Mdl_profil->UpdatePhoto();
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
