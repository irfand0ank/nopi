<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Mdl_query extends CI_Model{
    
    
     public function GetData($table)
     {
         $res=$this->db->query("
            SELECT * 
            from $table
            order
             by no desc
           "
        );
             
         return $res->result();
     }
    
    public function GetDataWhere($table,$field,$no)
    {
        $res=$this->db->query("
            SELECT *
            from $table
            WHERE $field='$no'
            order by no desc
            "
        
       );
             
         return $res->result();
     }
    
    public function GetWhereArr($table,$field,$no)
    {
        $res=$this->db->query("
            SELECT *
            from $table
            WHERE $field='$no'
            order by no desc
            "
        
       );
             
         return $res->result_array();
     }
    
    
    public function GetPemesan($no)
    {
        $res=$this->db->query("
            SELECT *
            from users
            WHERE no='$no'
            "
        
       );
             
         return $res->result_array();
     }
    
    public function GetJasa($no)
    {
        $res=$this->db->query("
            SELECT *
            from kategori
            WHERE no='$no'
            "
        
       );
             
         return $res->result_array();
     }
    
    
    
    public function GetLogArr($user)
    {
        $query =    $this->db->query(" Select * From users Where user ='$user'");
                 
        $res = $query->num_rows();
        return $res ;
     }
    
    public function CekLevelUser($user)
    {
        $query =    $this->db->query(" Select * From users Where no ='$user'");
                 
        $res = $query->result_array();
        
        $level = $res[0]['level'];
        
        return $level ;
     }
    
    public function DataPages($level,$limit,$offset){
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
            regis_penjahit.moto,regis_penjahit.jasa
             FROM
             rating,users,regis_penjahit,jasa_jahit
            WHERE 
            users.`no` = rating.member 
            AND
            users.`no` = jasa_jahit.id_penjahit 
            AND
            regis_penjahit.id_users = users.`no`
            AND
            users.`level` = '$level'
            GROUP BY member 
            ORDER BY nilai_member DESC
            LIMIT $where
        ");
        
        
        return $query->result();
	}
    
    public function GetTotalRows($level)
    {
        $query =    $this->db->query(" SELECT 
                    rating.member, 
                    AVG(rating.rating) as nilai_member,
                    users.`user`,users.foto,users.nama,users.waktu,
                    regis_penjahit.moto,regis_penjahit.jasa
                     FROM
                     rating,users,regis_penjahit,jasa_jahit
                    WHERE 
                    users.`no` = rating.member 
                    AND
                    users.`no` = jasa_jahit.id_penjahit 
                    AND
                    regis_penjahit.id_users = users.`no`
                    AND
                    users.`level` = '$level'
                    GROUP BY member 
                    ORDER BY nilai_member DESC");
                 
        $res = $query->num_rows();
        return $res ;
    }
    
    public function ReadKategori($kode)
    {
        
        
        $query =    $this->db->query(" Select * From kategori where no in ($kode)");
                 
       return $res = $query->result();
    }
    
    
    public function ReadNotKategori($kode)
    {
        if($kode == null)
        {
            $query =    $this->db->query(" Select * From kategori ");
        }
        else
        {
            $query =    $this->db->query(" Select * From kategori where no not in ($kode)");

        }
            
        
                 
       return $res = $query->result();
    }
    
    
    
    
    public function GetDataUser($table)
     {
         $res=$this->db->query("
            SELECT * 
            from $table
            order by level asc"
        );
             
         return $res->result();
     }
    public function GetPass($table)
     {
         $res=$this->db->query("
            SELECT pass 
            from $table"
        );
             
         return $res->result_array();
     }
    
    
    
    
    public function Delete($no,$table){
         
         $where = array(
                    'no' => $no
                );  
        $this->db->delete("$table", $where); // Kode ini digunakan untuk menghapus record yang sudah ada
    }
    
    
    
    
    
}
