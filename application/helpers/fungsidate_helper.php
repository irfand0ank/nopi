<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('tgl_indo'))
{
	function tgl_indo($tgl)
	{
		$ubah = gmdate($tgl, time()+60*60*8);
		$pecah = explode("-",$ubah);
		$tanggal = $pecah[2];
		$bulan = bulan($pecah[1]);
		$tahun = $pecah[0];
		return $tanggal.' '.$bulan.' '.$tahun;
	}
}

if ( ! function_exists('tgl_sql'))
{
	function tgl_sql($tgl)
	{
		$pecah = explode("/",$tgl);
        
		return $pecah[2].'-'.$pecah[1].'-'.$pecah[0];
	}
}


if ( ! function_exists('bulan'))
{
	function get_bulan($bulan)
	{
        $pecah = explode("-",$bulan);
        $bln = $pecah[1];
		switch ($bln)
		{
			case 1:
				return "Januari";
				break;
			case 2:
				return "Februari";
				break;
			case 3:
				return "Maret";
				break;
			case 4:
				return "April";
				break;
			case 5:
				return "Mei";
				break;
			case 6:
				return "Juni";
				break;
			case 7:
				return "Juli";
				break;
			case 8:
				return "Agustus";
				break;
			case 9:
				return "September";
				break;
			case 10:
				return "Oktober";
				break;
			case 11:
				return "November";
				break;
			case 12:
				return "Desember";
				break;
		}
	}
}

if ( ! function_exists('bulan'))
{
	function bulan($bln)
	{
		switch ($bln)
		{
			case 1:
				return "Januari";
				break;
			case 2:
				return "Februari";
				break;
			case 3:
				return "Maret";
				break;
			case 4:
				return "April";
				break;
			case 5:
				return "Mei";
				break;
			case 6:
				return "Juni";
				break;
			case 7:
				return "Juli";
				break;
			case 8:
				return "Agustus";
				break;
			case 9:
				return "September";
				break;
			case 10:
				return "Oktober";
				break;
			case 11:
				return "November";
				break;
			case 12:
				return "Desember";
				break;
		}
	}
}

if ( ! function_exists('nama_hari'))
{
	function nama_hari($tanggal)
	{
		$ubah = gmdate($tanggal, time()+60*60*8);
		$pecah = explode("-",$ubah);
		$tgl = $pecah[2];
		$bln = $pecah[1];
		$thn = $pecah[0];

		$nama = date("l", mktime(0,0,0,$bln,$tgl,$thn));
		$nama_hari = "";
		if($nama=="Sunday") {$nama_hari="Minggu";}
		else if($nama=="Monday") {$nama_hari="Senin";}
		else if($nama=="Tuesday") {$nama_hari="Selasa";}
		else if($nama=="Wednesday") {$nama_hari="Rabu";}
		else if($nama=="Thursday") {$nama_hari="Kamis";}
		else if($nama=="Friday") {$nama_hari="Jumat";}
		else if($nama=="Saturday") {$nama_hari="Sabtu";}
		return $nama_hari;
	}
}

if ( ! function_exists('hitung_mundur'))
{
	function hitung_mundur($wkt)
	{
		$waktu=array(	365*24*60*60	=> "tahun",
						30*24*60*60		=> "bulan",
						7*24*60*60		=> "minggu",
						24*60*60		=> "hari",
						60*60			=> "jam",
						60				=> "menit",
						1				=> "detik");

		$hitung = strtotime(gmdate ("Y-m-d H:i:s", time () +60 * 60 * 8))-$wkt;
		$hasil = array();
		if($hitung<5)
		{
			$hasil = 'kurang dari 5 detik yang lalu';
		}
		else
		{
			$stop = 0;
			foreach($waktu as $periode => $satuan)
			{
				if($stop>=6 || ($stop>0 && $periode<60)) break;
				$bagi = floor($hitung/$periode);
				if($bagi > 0)
				{
					$hasil[] = $bagi.' '.$satuan;
					$hitung -= $bagi*$periode;
					$stop++;
				}
				else if($stop>0) $stop++;
			}
			$hasil=implode(' ',$hasil).' yang lalu';
		}
		return $hasil;
	}
}

if ( ! function_exists('selisih_bulan'))
{
	function selisih_bulan($day,$wkt)
	{
		//today = date("Y-m-d"); // 2012-01-30
    
        //$aa = 10;
        $next_month = date("Y-m-d", strtotime("$day +$wkt month"));
    
		return $next_month;
	}
}

if ( ! function_exists('waktu_perawatan'))
{
	function waktu_perawatan($date1,$date2)
	{
		//$date = date("Y-m-d");

        $timeStart = strtotime("$date1");
        $timeEnd = strtotime("$date2");


        // Menambah bulan ini + semua bulan pada tahun sebelumnya
        $numBulan = 1 + (date("Y",$timeEnd)-date("Y",$timeStart))*12;

        $waktu_a = date("m",$timeStart);
        $waktu_e = date("m",$timeEnd);

        // menghitung selisih bulan
        $numBulan += $waktu_e-$waktu_a;

        //echo $numBulan;
    
		return $numBulan;
	}
}


if ( ! function_exists('durasi_waktu'))
{
	function durasi_waktu($waktu,$jam,$durasi)
	{
		//$date = date("Y-m-d");
        
        $split      = explode('-',$waktu);
        
        $date2      = date_create($split[2]."-".$split[1]."-".$split[0]." ".$jam);
        
        $range_time = date_add($date2, date_interval_create_from_date_string(($durasi)." minutes"));

        $durasi     = date_format($date2, 'Y-m-d H:i:s');
        
    
		return $durasi;
	}
}



if ( ! function_exists('selisih_hari'))
{
	function selisih_hari($waktu1,$waktu2)
	{
		//$date = date("Y-m-d");
        $awal       = strtotime($waktu1);
        $akhir      = strtotime($waktu2); // Waktu sekarang
        $diff       = $akhir - $awal;
       
        $jarak      = floor($diff / (60 * 60 * 24)); // Jarak anda dalam hitungan hari
        
        /*$split      = explode('-',$waktu);
        
        $date2      = date_create($split[2]."-".$split[1]."-".$split[0]." ".$jam);
        
        $range_time = date_add($date2, date_interval_create_from_date_string(($durasi)." minutes"));

        $durasi     = date_format($date2, 'Y-m-d H:i:s');*/
        
    
		return $jarak;
	}
}



