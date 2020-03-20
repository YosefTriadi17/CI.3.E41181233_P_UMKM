<?php 

class Home extends CI_Controller{
	//untuk extend Admin dari CI Controler

	function __construct(){ //method construct
    parent::__construct(); //agar dijalankan pertama kali
		$this->load->model('m_login'); //load data di m login

	}

	function index(){ //method index
        // $this->load->view('v_admin'); 
        $this->header();
        $this->content();
        $this->footer();
    }
    
    function header(){ 
		$this->load->view('v_header'); 
    }
    function footer(){ 
		$this->load->view('v_footer'); 
    }
    function content(){ 
        $data['database'] = $this->db->get('daftar_umkm');
		$this->load->view('v_content', $data); 
	}
}