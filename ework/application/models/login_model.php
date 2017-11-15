<?php 

class Login_model extends CI_Model{


	function getuser($username, $password){
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));
		$query = $this->db->get('akun');
		if ($query->row()) {
			# code...
			return true;
		}
		return false;
	}

	function register($datas) {
		$this->db->insert('akun', $datas);
	}
}

 ?>