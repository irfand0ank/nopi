<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jasa extends CI_Controller {

	public function __construct(){
        parent::__construct(); 
        
        $this->load->model('Mdl_login');
        $this->load->model('Mdl_jasa');
        $this->load->model('Mdl_query');
        $this->Mdl_login->is_logged_in(); 
        
        $this->akun   = $this->session->userdata('sys_no');
        
    }
    
	public function index()
	{
        $data['main']           = 'jasa/jasa';
        $data['title']          = 'Data Jasa Jahit'; 
        $data['jasa_act']       = 'current';
        $data['url_modul']      = $this->uri->segment(1);
        
        $data['result']         = $this->Mdl_query->GetDataWhere('jasa_jahit','id_penjahit',$this->akun);
        
        
       // echo $this->db->last_query();
		$this->load->view('include/template',$data);
	}
    
    
    public function tambah()
    {
        $data['main']           = 'jasa/tambah';
        $data['title']          = 'Tambah Data Jasa Jahit'; 
        $data['jasa_act']       = 'current';
        $data['url_modul']      = $this->uri->segment(1);
        
        $jasa                   = $this->Mdl_jasa->ReadJasa($this->akun);    
        
        
        $data['result']         = $this->Mdl_query->ReadNotKategori($jasa);
        
       
		$this->load->view('include/template',$data);
    }
    
    public function ubah()
    {
        
        $data['url_modul']      = $this->uri->segment(1);
        $data['no']             = $this->uri->segment(3);
        
        $edit                   = $this->Mdl_query->GetWhereArr('jasa_jahit','no',$data['no']);
        
        $jasa                   =  $this->Mdl_query->GetJasa($edit[0]['kode_kategori']);
        
        $data = array(
                'no'            => $edit[0]['no'],
                'kategori'      => $jasa[0]['kategori'],
                'harga'         => $edit[0]['harga'],
                'waktu'         => $edit[0]['waktu'],
                'keterangan'    => $edit[0]['keterangan']
        );
        
        
        $data['main']           = 'jasa/ubah';
        $data['title']          = 'Ubah Data Jasa Jahit'; 
        $data['jasa_act']       = 'current';
        
		$this->load->view('include/template',$data);
    }
    
    
    public function simpan()
    {
         $this->Mdl_jasa->simpan();
    }
    
    public function edit()
    {
         $this->Mdl_jasa->ubah();
    }
    
    
    
    
     public function delete()
    {
        $no = $this->uri->segment(3);
        $table = 'jasa_jahit';
        $this->Mdl_query->delete($no,$table);
        redirect('jasa'); 
    }
}
