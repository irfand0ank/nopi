<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Temp extends CI_Controller {

    
	public function __construct(){
        parent::__construct(); 
        $this->load->model('Mdl_login');
        $this->load->model('Mdl_temp');
        $this->load->model('Mdl_query');
        $this->Mdl_login->is_logged_in(); 
        
        $this->akun   = $this->session->userdata('sys_no');
    }
    
	public function index()
	{
        $data['main']       = 'temp/temp';
        $data['title']      = 'Pesanan Anda'; 
        $data['temp_act']   = 'current';
        $data['url_modul']  = $this->uri->segment(1);
        //$data['result']     = $this->Mdl_query->GetData('kain');
        
        $data['kustom']     = $this->Mdl_query->GetDataWhere('temp_kustom','id_user',$this->akun);
        $data['model']      = $this->Mdl_query->GetDataWhere('temp_model','id_user',$this->akun);
        $data['kain']       = $this->Mdl_query->GetDataWhere('temp_kain','id_user',$this->akun);
        
		$this->load->view('include/template',$data);
	}
    
    
    public function detail_kustom()
    {
        $data['main']           = 'temp/detail_kustom';
        $data['title']          = 'Pesanan Anda'; 
        $data['temp_act']       = 'current';
        
        $data['kd_kustom']      = $this->uri->segment(3);
        
        $data['kustom']         = $this->Mdl_query->GetWhereArr('temp_kustom','no',$data['kd_kustom'] );
        
        $data['result']         = $this->Mdl_query->GetWhereArr('jasa_kustom','no',$data['kustom'][0]['id_kustom'] );
        
        $data['kategori']       = $this->Mdl_query->GetWhereArr('kategori','no',$data['result'][0]['kode_kategori'] );
        
        $data['profil']         = $this->Mdl_query->GetWhereArr('users','no',$data['result'][0]['id_penjahit'] );
        
        
        
        $this->load->view('include/template',$data);
    }
    
    public function detail_model()
    {
        
    }
    
    public function total_order()
    {
        $data = $this->Mdl_temp->TotalOrder($this->akun);
        echo $data;
    }
    
     public function delete()
    {
        $no = $this->uri->segment(3);
        $table = 'penjahit';
        $this->Mdl_query->delete($no,$table);
        redirect('disperindag'); 
    }
    
}
