<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Mdl_pemesanan extends CI_Model{
    
    public function __construct(){
        parent::__construct();    
        $this->load->model('Mdl_query');
        $this->load->library('upload');
       
    }
    
    public function GetPenjahit()
    {
        
        $res= $this->db->query(" SELECT 
                                rating.member, 
                                AVG(rating.rating) as nilai_member,
                                users.`user`,users.foto,users.nama,
                                regis_penjahit.moto,regis_penjahit.jasa
                                 FROM
                                 rating,users,regis_penjahit
                                WHERE 
                                users.`no` = rating.member 
                                AND
                                users.`level` = '3'
                                GROUP BY member 
                                ORDER BY nilai_member DESC ");
        
        
             
        return  $res->result();
        
    }
    
    
    public function GetKategori($member)
    {
        
        $res= $this->db->query(" SELECT DISTINCT kode_kategori from jasa_kustom where id_penjahit = '$member' ");
        
        
             
        return  $res->result();
        
    }
    
    public function GetJasaJahit($penjahit)
    {
        
        $query= $this->db->query(" SELECT * from jasa_kustom where id_penjahit = '$penjahit' ");
        
        
             
        $res = $query->num_rows();
        return $res ;
        
    }
    
    public function DataJasa($limit,$offset,$penjahit){
        if($offset == null)
        {
            $where = $limit;
        }
        else
        {
            $where = $limit.",".$offset;
        }
        
        
        $query = $this->db->query("
            SELECT *
             FROM
             jasa_kustom
            WHERE 
            id_penjahit = '$penjahit'
            ORDER BY no DESC
            LIMIT $where
        ");
        
        
        return $query->result();
	}
    
    public function temp_custom()
    {
        
        $sys_no                     = $this->session->userdata('sys_no');
        $config['upload_path']      = './assets/images/';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']	        = '1000000';
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
        
        $this->db->Insert('temp_jahit_kustom',$data);
        redirect('temp');
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