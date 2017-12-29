<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function __construct(){
        parent::__construct(); 
        
        $this->load->model('Mdl_login');
        $this->load->model('Mdl_order');
        $this->load->model('Mdl_query');
        $this->Mdl_login->is_logged_in(); 
        
        $this->akun   = $this->session->userdata('sys_no');
        
    }
    
	public function index()
	{
        $data['main']           = 'order/order';
        $data['title']          = 'Data Orderan Jahit'; 
        $data['orderan_act']    = 'current';
        $data['url_modul']      = $this->uri->segment(1);
        
        $this->Mdl_order->ReadOrder($this->akun,null);
        $data['result']         = $this->Mdl_order->GetDataPesanan($this->akun,null);
        
        
		$this->load->view('include/template',$data);
	}
    
    
    public function new_order()
    {
        $data   = $this->Mdl_order->CountOrder($this->akun,null);
        echo $data;
        #echo $this->db->last_query(); 
    }
    
    public function ready_order()
    {
        $data   = $this->Mdl_order->CountOrder($this->akun,'T');
        echo $data;
        #echo $this->db->last_query(); 
    }
    
    public function cancel_order()
    {
        $data   = $this->Mdl_order->CountOrder($this->akun,'F');
        echo $data;
        #echo $this->db->last_query(); 
    }
    
    
    public function progress()
	{
        $data['main']           = 'order/progress';
        $data['title']          = 'On-Progress Orderan'; 
        $data['progress_act']   = 'current';
        $data['url_modul']      = $this->uri->segment(1);
        
        $this->Mdl_order->ReadOrder($this->akun,'T');
        $data['result']         = $this->Mdl_order->GetDataPesanan($this->akun,'T');
        
        
		$this->load->view('include/template',$data);
	}
    
    
    public function riwayat()
	{
        $data['main']           = 'order/riwayat';
        $data['title']          = 'Riwayat Orderan'; 
        $data['riwayat_act']    = 'current';
        $data['url_modul']      = $this->uri->segment(1);
        
        //$this->Mdl_order->ReadOrder($this->akun);
        $data['result']         = $this->Mdl_order->GetRiwayat($this->akun);
        
        
		$this->load->view('include/template',$data);
	}
    
   public function tolak()
	{
        $data['main']           = 'order/tolak';
        $data['title']          = 'Orderan Batal'; 
        $data['cancel_act']     = 'current';
        $data['url_modul']      = $this->uri->segment(1);
        
        //$this->Mdl_order->ReadOrder($this->akun);
        $this->Mdl_order->ReadOrder($this->akun,'F');
        $data['result']         = $this->Mdl_order->GetDataPesanan($this->akun,'F');
        
        
		$this->load->view('include/template',$data);
	}
    
    
    
}
