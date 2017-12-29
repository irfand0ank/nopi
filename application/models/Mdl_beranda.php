<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Mdl_beranda extends CI_Model{
    
     
    public function GetKondisi($kondisi)
     {
         $res=$this->db->query("
            SELECT * 
            from cari_kondisi
            where kondisi='$kondisi' ORDER BY kode_unit ASC
            "
        );
             
         return $res;
     }
    
    public function GetTotal($table)
     {
         $res=$this->db->query("
            SELECT * 
            from $table
            ORDER BY kode_unit ASC
            "
        );
             
         return $res;
     }
    
    
    
    public function GetPerawatan($perawatan)
     {
         $res=$this->db->query("
           SELECT * FROM cari_kondisi 
           WHERE tgl_perawatan BETWEEN CURDATE() and '$perawatan' ORDER BY kode_unit ASC
            "
        );
             
         return $res;
     }
    
    
}
    
    
    
