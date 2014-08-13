<?php

class M_signin extends CI_Model {
	
	public function can_log_in($type){
		$password = md5($this->input->post('password'));
		if($type=='email'){
			$email = $this->input->post('useremail');
			$query = "SELECT * FROM users WHERE email = '$email' AND password = '$password' AND usertype='d'";
		}
		if($type=='username'){
			$username = $this->input->post('useremail');
			$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password' AND usertype='d'";
		}		
		$result = $this->db->query($query);
		if($result->num_rows() == 1){return true;}
		else{return false;}
	}
	
}