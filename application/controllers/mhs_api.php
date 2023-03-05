<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mhs_api extends CI_Controller {

	public function index()
	{
		$data = $this->db->get('mahasiswa')->result_array();

		foreach ($data as $get){
			$array['mahasiswa'][] = [
				'error' => "false",
				'id_mhs' => $get ['id_mhs'],
				'nim' => $get ['nim'],
				'nama' => $get ['nama'],
				'alamat' => $get ['alamat'],
				'tetala' => $get ['tetala'],
				'jurusan' => $get ['jurusan'],
				'angkatan' => $get ['angkatan'],
				'semester' => $get ['semester'],
				'nomer_surat' => $get ['nomer_surat'],
				'email' => $get ['email']
			];
		}
		echo json_encode($array);
	}

	public function tambah_mhs(){
		$nomor = $this->Mahasiswa_model->nomor();
		$nourut = $nomor;
        $kodeSurat = $nourut + 1;
		$data =[
			'nim' => $_POST['nim'],
			'nama' => $_POST['nama'],
			'alamat' => $_POST['alamat'],
			'tetala' => $_POST['tetala'],
			'jurusan' => $_POST['jurusan'],
			'angkatan' => $_POST['angkatan'],
			'semester' => $_POST['semester'],
			'email'=>$_POST['email'],
			'nomer_surat'=> $kodeSurat
		];

		 $this->db->insert('mahasiswa', $data);
		if ($input) {

			echo json_encode (['error'=>'false']);
			
		}
	}
}

/* End of file mhs_api.php */
/* Location: ./application/controllers/mhs_api.php */?>