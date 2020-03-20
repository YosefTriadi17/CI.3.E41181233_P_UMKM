<?php 

class Home extends CI_Controller{
	//untuk extend Admin dari CI Controler

	function __construct(){ //method construct
    parent::__construct(); //agar dijalankan pertama kali
		$this->load->model('m_login'); //load data di m login

	}

	function index(){ 
        $this->header(); //panggil function di halaman yang sama
        $this->content(); //panggil function di halaman yang sama
        $this->footer(); //panggil function di halaman yang sama
    }
    
    function header(){ 
		$this->load->view('v_header'); //tampilkan header
    }
    function footer(){ 
		$this->load->view('v_footer'); //tampilkan footer
    }
    function content(){ 
        $data['database'] = $this->db->get('daftar_umkm'); //database
		    $this->load->view('v_content', $data); //tampilkan konten
	}
}