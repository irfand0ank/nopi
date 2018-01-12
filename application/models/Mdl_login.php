<?php

class Mdl_login extends CI_Model {

	public function register()
    {
        $username   = $this->input->post('user');
        $nama       = $this->input->post('nama');
        $waktu      = date("Y-m-d");
        $password   = md5($this->input->post('pass'));
        
        $barang = array(
            'nama'          => $nama,
            'user'          => $username,
            'pass'          => $password,
            'waktu'         => $waktu,
            'level'         => '5'
        );
        
        /*
        $level 
            1   => admin,
            2   => disperindag
            3   => penjahit
            4   => penjual kain
            5   => pelanggan biasa
        */
        
        $this->db->Insert('users',$barang);
        
        $this->session->set_flashdata('pesan', '
                            <div class="alert alert-success alert-dismissable">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                <h4>Berhasil </h4>
                                <p>Anda berhasil Dibuat.</p>
                            </div>
                            ');
        redirect('login');
    }
    
    
    function verify()
    {
           
        $query  = $this->db
                    ->where('user',$this->input->post('user'))
                    ->where('pass',md5($this->input->post('pass')))
                    ->get('users');
        $log    = $query->num_rows(); 
        if($log > 0)
        {
            foreach($query->result() as $row)
            {
                $user   = $row->user;   
                $nama   = $row->nama;
                $no     = $row->no;
                $pass   = $row->pass;
                $level  = $row->level;
            }

            $data = array(
                'sys_user'      => $user,
                'sys_nama'      => $nama,
                'sys_no'        => $no,
                'sys_level'     => $level,
                'sys_pass'      => $pass,
                'is_logged_in'  => true
            );                                       
            $this->session->set_userdata($data);
            return true;   
        }
        else
        {
            redirect('login?error');  
        }
                     
	}
    
    function is_logged_in(){
		$sys_user = $this->session->userdata('sys_user');
		if(!$sys_user){
			redirect('beranda');
		}        
		return true;
	}
}
?>