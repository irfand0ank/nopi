<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('angka_persen'))
{
	function persen($angka)
	{
		return $angka.' %';
	}
}

if ( ! function_exists('rupiah'))
{
	function rupiah($angka)
	{
		return "Rp.".number_format($angka,2,",",".");
	}
}
if ( ! function_exists('format_sql'))
{
	function format_sql($angka)
	{
		return  number_format($angka,2,',','.');
	}
}



if ( ! function_exists('rating'))
{
	function rating($nilai)
	{
        if ($nilai == 5) 
        {
            return '<i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i>';
        }
        else if ($nilai >= 4 && $nilai <= 5) 
        {
            return '<i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star"></i>';
        } 
        else if ($nilai >= 3 && $nilai <= 4) 
        {
            return '<i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star "></i> <i class="fa fa-star"></i>';
        }
        else if ($nilai >= 2 && $nilai <= 3) 
        {
            return '<i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star "></i> <i class="fa fa-star "></i> <i class="fa fa-star "></i>';
        } 
        else  
        {
            return '<i class="fa fa-star text-warning"></i> <i class="fa fa-star "></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star "></i>';
        }
	}
}

