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
        
        $res= $this->db->query(" SELECT DISTINCT kode_kategori from jasa_jahit where id_penjahit = '$member' ");
        
        
             
        return  $res->result();
        
    }
    
    public function GetJasaJahit($penjahit)
    {
        
        $query= $this->db->query(" SELECT * from jasa_jahit where id_penjahit = '$penjahit' ");
        
        
             
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
             jasa_jahit
            WHERE 
            id_penjahit = '$penjahit'
            ORDER BY no DESC
            LIMIT $where
        ");
        
        
        return $query->result();
	}
    
    public function simpan()
    {
        
        $data = array(
            'kategori'          => $this->input->post('kategori'),
        );
        
        $this->db->Insert('kategori',$data);
         redirect('kategori');
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