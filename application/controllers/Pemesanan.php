<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller {

	public function __construct(){
        parent::__construct(); 
        $this->load->model('Mdl_login');
        $this->load->model('Mdl_pemesanan');
        $this->load->model('Mdl_query');
        /*$this->Mdl_login->is_logged_in(); */
    }
    
	public function penjahit()
	{
        $data['main']               = 'pemesanan/penjahit';
        $data['title']              = 'List Penjahit'; 
        $data['pemesanan_act']      = 'current';
        
        $config['base_url']         = base_url()."".$data['main'] ;
        $config['total_rows']       = $this->Mdl_query->GetTotalRows('3');
        $config['per_page']         = 6;
        $config['num_links']        = 2;
        $config['uri_segment']      = 3;
       
        $config['full_tag_open']    = "<ul class='pagination'>";
        $config['full_tag_close']   = "</ul>";
        $config['num_tag_open']     = '<li>';
        $config['num_tag_close']    = '</li>';
        $config['cur_tag_open']     = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close']    = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open']    = "<li>";
        $config['next_tagl_close']  = "</li>";
        $config['prev_tag_open']    = "<li>";
        $config['prev_tagl_close']  = "</li>";
        $config['first_tag_open']   = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open']    = "<li>";
        $config['last_tagl_close']  = "</li>";
        
        $config['first_link']       = '<<Pertama';
        $config['last_link']        = 'Terakhir>>';
        $config['next_link']        = '>>';
        $config['prev_link']        = '<<';
        
        
        $this->pagination->initialize($config);
 
        $from                       = $this->uri->segment(3);
        // konfigurasi model dan view untuk menampilkan data
        $data['penjahit']           = $this->Mdl_query->DataPages('3',$config['per_page'],$from);
         //echo $this->db->last_query();
		$this->load->view('include/template',$data);
	}
    
   
    public function detail_penjahit()
	{
        $data['main']               = 'pemesanan/detail_penjahit';
        $data['title']              = 'Detail Jasa Jahit'; 
        
        $penjahit                   =  $this->uri->segment(3);
        
        $config['base_url']         = base_url()."".$data['main']."/".$penjahit ;
        $config['total_rows']       = $this->Mdl_pemesanan->GetJasaJahit($penjahit);
        $config['per_page']         = 6;
        $config['num_links']        = 2;
        $config['uri_segment']      = 4;
       
        $config['full_tag_open']    = "<ul class='pagination'>";
        $config['full_tag_close']   = "</ul>";
        $config['num_tag_open']     = '<li>';
        $config['num_tag_close']    = '</li>';
        $config['cur_tag_open']     = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close']    = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open']    = "<li>";
        $config['next_tagl_close']  = "</li>";
        $config['prev_tag_open']    = "<li>";
        $config['prev_tagl_close']  = "</li>";
        $config['first_tag_open']   = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open']    = "<li>";
        $config['last_tagl_close']  = "</li>";
        
        $config['first_link']       = '<<Pertama';
        $config['last_link']        = 'Terakhir>>';
        $config['next_link']        = '>>';
        $config['prev_link']        = '<<';
        
        
        $this->pagination->initialize($config);
 
        $from                       = $this->uri->segment(4);
        // konfigurasi model dan view untuk menampilkan data
        $data['penjahit']           = $this->Mdl_pemesanan->DataJasa($config['per_page'],$from,$penjahit);
         //echo $this->db->last_query();
		$this->load->view('include/template',$data);
	}
    
    
    
    public function pesan_jahit()
    {
        $data['main']               = 'pemesanan/pesan_jahit';
        $data['title']              = 'Order Jahit'; 
        
        $data['no']                 =  $this->uri->segment(3);
        $data['kode_pesanan']       = rand();
        $data['result']             = $this->Mdl_query->GetWhereArr('jasa_jahit','no',$data['no']);
        $data['profil']             = $this->Mdl_query->GetWhereArr('users','no',$data['no']);
        $this->load->view('include/template',$data);
    }
    
    
    function logout(){
        $this->session->sess_destroy();
		redirect('login');
    }   
}
