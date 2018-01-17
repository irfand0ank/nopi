<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Mdl_pesanmodel extends CI_Model{
    
    public function __construct(){
        parent::__construct();    
        $this->load->model('Mdl_query');
        $this->load->library('upload');
       
    }
    
    public function GetPagesModel($limit,$offset){
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
            users.`user`,users.waktu,
            jasa_model.harga,jasa_model.waktu as waktu_kerja,jasa_model.keterangan,jasa_model.no as no_model,jasa_model.foto,jasa_model.nama
             FROM
             rating,users,regis_penjahit,jasa_model
            WHERE 
            users.`no` = rating.member 
            AND
            users.`no` = jasa_model.id_penjahit 
            AND
            regis_penjahit.id_users = users.`no`
            
            GROUP BY  no_model  
            ORDER BY nilai_member DESC
            
            LIMIT $where
        ");
       
            return $query->result(); 
       
	}
    
    public function GetTotalModel(){
        
        $query = $this->db->query("
            SELECT 
            rating.member, 
            AVG(rating.rating) as nilai_member,
            users.`user`,users.nama,users.waktu,
            jasa_model.harga,jasa_model.waktu as waktu_kerja,jasa_model.keterangan,jasa_model.no as no_model,jasa_model.foto
             FROM
             rating,users,regis_penjahit,jasa_model
            WHERE 
            users.`no` = rating.member 
            AND
            users.`no` = jasa_model.id_penjahit 
            AND
            regis_penjahit.id_users = users.`no`
            
            GROUP BY  no_model  
            ORDER BY nilai_member DESC
             
           
        ");
       
            return $query->num_rows(); 
        
       
	}
    
    public function temp_model()
    {
        
        $sys_no         = $this->session->userdata('sys_no');
       
        
        $xs             = $this->input->post('ekstra_small');
        $s              = $this->input->post('small');
        $m              = $this->input->post('medium');
        $l              = $this->input->post('large');
        $xl             = $this->input->post('esktra_larga');
        $harga          = $this->input->post('harga');
        
        $bayar          = ($xs+$s+$m+$l+$xl) * $harga;
        
        $data = array(
            'id_user'               => $sys_no,
            'id_model'              => $this->input->post('id_model'),
            'xs'                    => $xs,
            's'                     => $s,
            'm'                     => $m,
            'l'                     => $l,
            'xl'                    => $xl,
            'bayar'                 => $bayar,
            'catatan'               => $this->input->post('catatan'),
        );
        
        $this->db->Insert('temp_model',$data);
        redirect('pesanmodel');
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
