<?php 

class Crud extends CI_Controller{
	//untuk extend crud dari CI Controler

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data'); //meload data dari model m data
	}

	function register(){
		$username = $this->input->post('username'); 
		$password = $this->input->post('password');
 
		$data = array( //data yang didapat diubah ke array
			'USERNAME' => $username,
			'PASSWORD' => md5($password)
			);
		$this->m_data->input_data($data,'admin'); //data dikirim ke m data dan dimasukkan ke tabel user
		redirect('home'); //kembali tampilkan halaman crud
	}

	function tambah(){
		$this->load->view('v_input'); //menampilkan view v input
	}

	function tambah_aksi(){
		$nama = $this->input->post('nama'); 
		$jenis = $this->input->post('jenis');
		$omset = $this->input->post('omset');
		$pemilik = $this->input->post('pemilik'); //ambil data pekerjaan
 
		$data = array( //data yang didapat diubah ke array
			'NAMA_USAHA' => $nama,
			'JENIS' => $jenis,
			'OMSET' => $omset,
			'PEMILIK' => $pemilik
			);
		$this->m_data->input_data($data,'daftar_umkm'); //data dikirim ke m data dan dimasukkan ke tabel user
		redirect('home#sumber'); //kembali tampilkan halaman crud
	}

	function hapus($id){
		$where = array('ID_UMKM' => $id); //ubah data yang telah ditangkap di variabel $id ke id
		$this->m_data->hapus_data($where,'daftar_umkm'); //data dikirim ke m data dan hapus data di tabel user
		redirect('home#sumber'); //kembali tampilkan halaman crud
	}

	function edit($id){
		$where = array('ID_UMKM' => $id); //ubah data yang telah ditangkap di variabel $id ke id
		$data['daftar_umkm'] = $this->m_data->edit_data($where,'daftar_umkm')->result(); //tangkap data dari database
		$this->load->view('v_edit',$data); //tampilkan view v edit
	}

	function update(){
		$id = $this->input->post('id'); //tangkap data id
		$nama = $this->input->post('nama'); //tangkap data nama
		$jenis = $this->input->post('jenis'); //tangkap data alamat
		$omset = $this->input->post('omset'); //tangkap data pekerjaan
		$pemilik = $this->input->post('pemilik');
	
		$data = array( //ubah data ke array
			'NAMA_USAHA' => $nama,
			'JENIS' => $jenis,
			'OMSET' => $omset,
			'PEMILIK' => $pemilik
		);
	
		$where = array(
			'ID_UMKM' => $id
		);
	
		$this->m_data->update_data($where,$data,'daftar_umkm'); //kirim data ke m data dan update database
		redirect('home#sumber'); //kembali tampilkan halaman crud
	}
}