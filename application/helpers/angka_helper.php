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

if ( ! function_exists('nilai_akhir'))
{
	function nilai_akhir($pilgan,$esay)
	{
        $nilai = ($pilgan + $esay)/2;
        if ($nilai <= 55) {
               return $nilai.' / E';
            } else if ($nilai >= 55 && $nilai <= 59) {
               return $nilai.' / D';
            } else if ($nilai >= 60 && $nilai <= 64) {
               return $nilai.' / C-';
            }else if ($nilai >= 65 && $nilai <= 69) {
               return $nilai.' / C';
            } else if ($nilai >= 70 && $nilai <= 74) {
               return $nilai.' / C+';
            }else if ($nilai >= 75 && $nilai <= 79) {
               return $nilai.' / B-';
            } else if ($nilai >= 80 && $nilai <= 84) {
               return $nilai.' / B';
            } else if ($nilai >= 85 && $nilai <= 89) {
               return $nilai.' / B+';
            } else if ($nilai >= 90 && $nilai <= 94) {
               return $nilai.' / A-';
            } else if ($nilai >= 95 && $nilai <= 100) {
               return $nilai.' / A';
            }
	}
}
