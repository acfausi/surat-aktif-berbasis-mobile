<?php 

class LoginModel extends CI_Model{

	function cek_login($where){
		return $this->db->get_where('admin',$where);
	}

}

?>