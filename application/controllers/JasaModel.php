<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JasaModel extends CI_Controller {

	public function __construct(){
        parent::__construct(); 
        
        $this->load->model('Mdl_login');
        $this->load->model('Mdl_JasaModel');
        $this->load->model('Mdl_query');
        $this->Mdl_login->is_logged_in(); 
        
        $this->akun   = $this->session->userdata('sys_no');
        
    }
    
	public function index()
	{
        $data['main']           = 'JasaModel/JasaModel';
        $data['title']          = 'Data Jasa Jahit'; 
        $data['jasa_act']       = 'current';
        $data['jasa_act2']      = 'active';
        $data['model_act']      = 'current';
        $data['url_modul']      = $this->uri->segment(1);
        
        $data['result']         = $this->Mdl_query->GetDataWhere('jasa_model','id_penjahit',$this->akun);
        
        
       // echo $this->db->last_query();
		$this->load->view('include/template',$data);
	}
    
    
    public function tambah()
    {
        $data['main']           = 'JasaModel/tambah';
        $data['title']          = 'Tambah Data Jasa Jahit'; 
        $data['jasa_act']       = 'current';
        $data['jasa_act2']      = 'active';
        $data['model_act']      = 'current';
        $data['url_modul']      = $this->uri->segment(1);
        
        /*$jasa                   = $this->Mdl_JasaModel->ReadJasa($this->akun);    
        
        
        $data['result']         = $this->Mdl_query->ReadNotKategori($jasa);*/
        
       
		$this->load->view('include/template',$data);
    }
    
    public function ubah()
    {
        
        $data['url_modul']      = $this->uri->segment(1);
        $data['no']             = $this->uri->segment(3);
        
        $edit                   = $this->Mdl_query->GetWhereArr('jasa_model','no',$data['no']);
        
        
        $data = array(
                'no'            => $edit[0]['no'],
                'nama'          => $edit[0]['nama'],
                'foto'          => $edit[0]['foto'],
                'harga'         => $edit[0]['harga'],
                'harga_jahit'   => $edit[0]['harga_jahit'],
                'waktu'         => $edit[0]['waktu'],
                'keterangan'    => $edit[0]['keterangan']
        );
        
        
        $data['main']           = 'JasaModel/ubah';
        $data['title']          = 'Ubah Data Jasa Jahit'; 
        $data['jasa_act']       = 'current';
        $data['jasa_act2']      = 'active';
        $data['model_act']      = 'current';
        
		$this->load->view('include/template',$data);
    }
    
    
    public function simpan()
    {
         $this->Mdl_JasaModel->simpan();
    }
    
    public function edit()
    {
         $this->Mdl_JasaModel->ubah();
    }
    
    
    
    
     public function delete()
    {
        $no = $this->uri->segment(3);
        $table = 'jasa_model';
        $this->Mdl_query->delete($no,$table);
        redirect('JasaModel'); 
    }
}
