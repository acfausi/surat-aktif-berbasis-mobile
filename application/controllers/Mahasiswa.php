<?php 

class Mahasiswa extends CI_Controller{

	public function __construct()
	{
			parent::__construct();
			
			$this->load->model('Mahasiswa_model');
			$this->load->library('form_validation');  
	}

	public function index()
	{
		$data['judul'] = 'Data Mahasiswa';

		$data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
		
		
			$this->load->view('templetes/header',$data);
			$this->load->view('templetes/sidebar');	
			$this->load->view('mahasiswa/index',$data);
			$this->load->view('templetes/footer');	
		//var_dump($data);

	}

	public function hapus ($id_mhs){
			$this->Mahasiswa_model->HapusMhs($id_mhs);
			redirect('mahasiswa');
	}
	
	public function detail ($id_mhs){

			$data['get'] = $this->Mahasiswa_model->detailMahasiswa($id_mhs)->row_array();

			$this->load->view('mahasiswa/detail', $data);



	}

 
 
/*	public function detail ($nomer_surat){
  
			$data['kode'] = $this->Mahasiswa_model->kode_pemohon(); 
			$this->load->view('mahasiswa/detail',$data);
			$this->load->model('kode_pemohon');
 
}*/
 

}
