<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('GetKomoditi'))
{
	 function GetGambar($jenis)
    {
         $ci =& get_instance();
        $res = $ci->db->query("
            SELECT * 
            from users where no = '$jenis'
           "
        );
            
             
         $hasil =  $res->result_array();
      // $aa = $ci->db->last_query();
        $foto =  $hasil[0]['foto'];
         
         
     }
    
}

if ( ! function_exists('GetKab'))
{
	 function GetKab($kode)
    {
         $ci =& get_instance();
        $res = $ci->db->query("
            SELECT *
            from kabupaten
            WHERE no='$kode'"
        
       );
             
         $hasil =  $res->result_array();
        
        return $hasil[0]['kab'];
     }
    
}


if ( ! function_exists('GetKec'))
{
	 function GetKec($kode)
    {
         $ci =& get_instance();
        $res = $ci->db->query("
            SELECT *
            from kecamatan
            WHERE no='$kode'"
        
       );
             
         $hasil =  $res->result_array();
        
        return $hasil[0]['kec'];
     }
    
}

