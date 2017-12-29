<?php 

    $this->load->model('Mdl_query');


    $sys_no     = $this->session->userdata('sys_no');
    $sys_nama   = $this->session->userdata('sys_nama');
    
    if(isset($sys_no))
    {
        $sys_level = $this->Mdl_query->CekLevelUser($sys_no);
    }

    include "header.php" ; 

    include "sidebar.php"; 

    $this->load->view($main) ; 

    include'footer.php';
?>            