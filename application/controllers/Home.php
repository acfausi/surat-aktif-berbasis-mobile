<?php 

class Home extends CI_Controller{
	public function index($nama=''){
		

		$data['judul'] = 'Halaman Home';
		$data['nama'] = $nama;
		
		$this->load->view('templetes/header',$data);
		$this->load->view('templetes/sidebar');	
		$this->load->view('home/index',$data);
		$this->load->view('templetes/footer');

	}
} 
	?>