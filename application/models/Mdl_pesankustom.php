<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Mdl_pesankustom extends CI_Model{
    
    public function __construct(){
        parent::__construct();    
        $this->load->model('Mdl_query');
        $this->load->library('upload');
       
    }
    
    public function GetPagesPenjahit($kategori,$limit,$offset){
        if($offset == null)
        {
            $where = $limit;
        }
        else
        {
            $where = $limit.",".$offset;
        }
        
        
        $query = $this->db->query("
            SELECT 
            rating.member, 
            AVG(rating.rating) as nilai_member,
            users.`user`,users.foto,users.nama,users.waktu,
            jasa_kustom.harga,jasa_kustom.waktu as waktu_kerja,jasa_kustom.keterangan,jasa_kustom.kode_kategori, jasa_kustom.keterangan, jasa_kustom.no as no_kustom
             FROM
             rating,users,regis_penjahit,jasa_kustom
            WHERE 
            users.`no` = rating.member 
            AND
            users.`no` = jasa_kustom.id_penjahit 
            AND
            regis_penjahit.id_users = users.`no`
            AND
            jasa_kustom.kode_kategori = '$kategori'
            GROUP BY member  
            ORDER BY nilai_member DESC
            LIMIT $where
        ");
       
            return $query->result(); 
        
       
	}
    
    public function GetTotalPenjahit($kategori){
        
        $query = $this->db->query("
            SELECT 
            rating.member, 
            AVG(rating.rating) as nilai_member,
            users.`user`,users.foto,users.nama,users.waktu,
            jasa_kustom.harga,jasa_kustom.waktu as waktu_kerja,jasa_kustom.keterangan,jasa_kustom.kode_kategori
             FROM
             rating,users,regis_penjahit,jasa_kustom
            WHERE 
            users.`no` = rating.member 
            AND
            users.`no` = jasa_kustom.id_penjahit 
            AND
            regis_penjahit.id_users = users.`no`
            AND
            jasa_kustom.kode_kategori = '$kategori'
            GROUP BY member ORDER BY nilai_member 
           
        ");
       
            return $query->num_rows(); 
        
       
	}
    
    public function temp_custom()
    {
        
        $sys_no                     = $this->session->userdata('sys_no');
        $config['upload_path']      = './assets/images/';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']	        = '3000000';
        $nmfile                     = "file_".time();
        $config['file_name']        = $nmfile;
        
        $this->upload->initialize($config);
       if($this->upload->do_upload('foto'))
       {
           
           $foto=$this->upload->file_name;
       }
        
        $xs             = $this->input->post('ekstra_small');
        $s              = $this->input->post('small');
        $m              = $this->input->post('medium');
        $l              = $this->input->post('large');
        $xl             = $this->input->post('esktra_larga');
        $harga          = $this->input->post('harga');
        
        $bayar          = ($xs+$s+$m+$l+$xl) * $harga;
        
        $data = array(
            'id_user'               => $sys_no,
            'id_kustom'             => $this->input->post('id_kustom'),
            'xs'                    => $xs,
            's'                     => $s,
            'm'                     => $m,
            'l'                     => $l,
            'xl'                    => $xl,
            'bayar'                 => $bayar,
            'catatan'               => $this->input->post('catatan'),
            'foto'                  => $foto,
        );
        
        $this->db->Insert('temp_kustom',$data);
        //echo $this->db->last_query();
       redirect('pesankustom');
    }
    
    
    public function ubah()
    {
        $data = array(
            'kategori'          => $this->input->post('kategori'),
        );
        
        $where = array(
                    'no' => $this->input->post('no'),
                );  

        $this->db->Update('kategori',$data,$where); 
        
     redirect('kategori');
    }
    
    
}
