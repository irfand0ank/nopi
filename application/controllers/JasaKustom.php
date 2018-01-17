<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JasaKustom extends CI_Controller {

	public function __construct(){
        parent::__construct(); 
        
        $this->load->model('Mdl_login');
        $this->load->model('Mdl_JasaKustom');
        $this->load->model('Mdl_query');
        $this->Mdl_login->is_logged_in(); 
        
        $this->akun   = $this->session->userdata('sys_no');
        
    }
    
	public function index()
	{
        $data['main']           = 'JasaKustom/JasaKustom';
        $data['title']          = 'Data Jasa Jahit'; 
        $data['jasa_act']       = 'current';
        $data['jasa_act2']      = 'active';
        $data['kustom_act']     = 'current';
        $data['url_modul']      = $this->uri->segment(1);
        
        $data['result']         = $this->Mdl_query->GetDataWhere('jasa_kustom','id_penjahit',$this->akun);
        
        
       // echo $this->db->last_query();
		$this->load->view('include/template',$data);
	}
    
    
    public function tambah()
    {
        $data['main']           = 'JasaKustom/tambah';
        $data['title']          = 'Tambah Data Jasa Jahit'; 
        $data['jasa_act']       = 'current';
        $data['url_modul']      = $this->uri->segment(1);
        
        $jasa                   = $this->Mdl_JasaKustom->ReadJasa($this->akun);    
        
        
        $data['result']         = $this->Mdl_query->ReadNotKategori($jasa);
        
       
		$this->load->view('include/template',$data);
    }
    
    public function ubah()
    {
        
        $data['url_modul']      = $this->uri->segment(1);
        $data['no']             = $this->uri->segment(3);
        
        $edit                   = $this->Mdl_query->GetWhereArr('jasa_kustom','no',$data['no']);
        
        $jasa                   =  $this->Mdl_query->GetJasa($edit[0]['kode_kategori']);
        
        $data = array(
                'no'            => $edit[0]['no'],
                'kategori'      => $jasa[0]['kategori'],
                'harga'         => $edit[0]['harga'],
                'harga_jahit'   => $edit[0]['harga_jahit'],
                'waktu'         => $edit[0]['waktu'],
                'keterangan'    => $edit[0]['keterangan']
        );
        
        
        $data['main']           = 'JasaKustom/ubah';
        $data['title']          = 'Ubah Data Jasa Jahit'; 
        $data['jasa_act']       = 'current';
        
		$this->load->view('include/template',$data);
    }
    
    
    public function simpan()
    {
         $this->Mdl_JasaKustom->simpan();
    }
    
    public function edit()
    {
         $this->Mdl_JasaKustom->ubah();
    }
    
    
    
    
     public function delete()
    {
        $no = $this->uri->segment(3);
        $table = 'jasa_kustom';
        $this->Mdl_query->delete($no,$table);
        redirect('JasaKustom'); 
    }
}
