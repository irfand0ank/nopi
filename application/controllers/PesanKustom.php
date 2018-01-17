<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PesanKustom extends CI_Controller {

	public function __construct(){
        parent::__construct(); 
        $this->load->model('Mdl_login');
        $this->load->model('Mdl_pesankustom');
        $this->load->model('Mdl_query');
        /*$this->Mdl_login->is_logged_in(); */
    }
    
	public function index()
	{
        $data['main']               = 'PesanKustom/kategori';
        $data['title']              = 'List Penjahit'; 
        $data['pemesanan_act']      = 'current';
        $data['pemesanan_act2']     = 'active';
        $data['kustom_act']         = 'current';
        
        $data['result']             = $this->Mdl_query->GetDataOrder("kategori","kategori","asc");
        
		$this->load->view('include/template',$data);
	}
    
   public function penjahit()
	{
        $kategori                   = $this->uri->segment(3);
       
        $data['main']               = 'PesanKustom/penjahit';
        $data['title']              = 'List Penjahit'; 
        $data['pemesanan_act']      = 'current';
        $data['pemesanan_act2']     = 'active';
        $data['kustom_act']         = 'current';
        
        $config['base_url']         = base_url()."".$data['main']."/".$kategori;
        $config['total_rows']       = $this->Mdl_pesankustom->GetTotalPenjahit($kategori);
        
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
        $data['penjahit']           = $this->Mdl_pesankustom->GetPagesPenjahit($kategori,$config['per_page'],$from);
        
        
         //echo $this->db->last_query();
		$this->load->view('include/template',$data);
	}
    
    
    public function detail_pesan()
    {
        $data['main']               = 'pesankustom/pesan';
        $data['title']              = 'Jahit Kustom';
        $data['pemesanan_act']      = 'current';
        $data['pemesanan_act2']     = 'active';
        $data['kustom_act']         = 'current';
        
        
        $data['no']                 = $this->uri->segment(3);
        
        $data['result']             = $this->Mdl_query->GetWhereArr('jasa_kustom','no',$data['no']);
        
        $data['profil']             = $this->Mdl_query->GetWhereArr('users','no',$data['result'][0]['id_penjahit'] );
        
        //echo $this->db->last_query();
        $this->load->view('include/template',$data);
    }
    
    
    public function temp_custom()
    {
        $this->Mdl_pesankustom->temp_custom();
    }
    
    
    
    function jumlah_bayar()
    {
        $data = $this->input->post();
        
        $hasil = ($data['xs']+$data['s']+$data['m']+$data['l']+$data['xl']) * $data['harga'];
        
        $bayar = rupiah($hasil);
        echo json_encode(array('bayar' => $bayar));
        
        
    }
    
    function harga_jahit()
    {
        $jenis = $this->uri->segment(3);
        
         $data = $this->input->post();
        
        $result  = $this->Mdl_query->GetWhereArr('jasa_kustom','no',$data['id_kustom']);
        
        if($jenis == '2')
        {
            $bayar = $result[0]['harga'];
        }
        else
        {
            $bayar = $result[0]['harga_jahit'];
        }
        echo json_encode(array('harga' => $bayar));
        
        
    }
    
    function logout(){
        $this->session->sess_destroy();
		redirect('login');
    }   
}
