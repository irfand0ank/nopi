<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Mdl_disperindag extends CI_Model{
    
    public function __construct(){
        parent::__construct();    
        $this->load->model('Mdl_query');
        $this->load->library('upload');
       
    }
    
    public function simpan()
    {
        
        $data = array(
            'nama'          => $this->input->post('nama'),
            'kecamatan'     => $this->input->post('kec'),
            'kelurahan'     => $this->input->post('kel'),
            'alamat'        => $this->input->post('alamat'),
            'jenis_usaha'   => $this->input->post('jenis')
        );
        
        $this->db->Insert('penjahit',$data);
         redirect('disperindag');
    }
    
    
    public function ubah()
    {
        $data = array(
            'nama'          => $this->input->post('nama'),
            'kecamatan'     => $this->input->post('kec'),
            'kelurahan'     => $this->input->post('kel'),
            'alamat'        => $this->input->post('alamat'),
            'jenis_usaha'   => $this->input->post('jenis')
        );
        
        $where = array(
                    'no' => $this->input->post('no'),
                );  

        $this->db->Update('penjahit',$data,$where); 
        
     redirect('disperindag');
    }
    
    public function upload_data($filename){
        ini_set('memory_limit', '-1');
        $inputFileName = './assets/uploads/'.$filename;
        try {
        $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
        } catch(Exception $e) {
        die('Error loading file :' . $e->getMessage());
        }

        $worksheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
        $numRows = count($worksheet);

        for ($i=3; $i < ($numRows+1) ; $i++) { 
            /*pilihan untuk field upload*/
	        $ins = array(
	        		"nama"           => $worksheet[$i]["B"],
	        		"kecamatan"      => $worksheet[$i]["C"],
	        		"kelurahan"      => $worksheet[$i]["D"],
	        		"alamat"         => $worksheet[$i]["E"],
	        		"jenis_usaha"    => $worksheet[$i]["F"],
	        	   );

	        $this->db->insert('penjahit', $ins);
	    }
    }
    
    
}