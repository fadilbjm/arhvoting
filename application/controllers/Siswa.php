<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

    public function index()
    {
        $data['data'] = $this->m_arh->getSiswa();
        $this->load->view('siswa/s_home', $data);
        
    }

}

/* End of file Siswa.php */
