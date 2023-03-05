<?php

class Mahasiswa_model extends CI_model {

	public function getAllMahasiswa()
	{
		return $this->db->get('mahasiswa')->result_array();
		
	}

	public function HapusMhs($id_mhs)
	{

		$this->db->where('id_mhs', $id_mhs);
		$this->db->delete('mahasiswa');

	}

	public function detailMahasiswa($id_mhs)
	{
		return  $this->db->get_where('mahasiswa', ['id_mhs' => $id_mhs]);
	}

	public function nomor()
	{
		$query = $this->db->query("SELECT MAX(nomer_surat) as nomorsurat from mahasiswa");
        $hasil = $query->row();
        return $hasil->nomorsurat;
	}
}

