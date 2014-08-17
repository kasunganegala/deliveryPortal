<?php

class M_signin extends CI_Model {
	
	public function can_log_in($type){
		$password = md5($this->input->post('password'));
		if($type=='email'){
			$email = $this->input->post('useremail');
			$query = "SELECT * FROM delivery_users WHERE email = '{$email}' AND password = '{$password}' ";
		}
		if($type=='username'){
			$username = $this->input->post('useremail');
			$query = "SELECT * FROM delivery_users WHERE username = '{$username}' AND password = '{$password}'";
		}		
		$result = $this->db->query($query);
		if($result->num_rows() == 1){return true;}
		else{return false;}
	}
	
	public function login_userdata_1($type,$select){
		if($type=='email'){
			$query = "SELECT CONCAT(first_name, ' ', last_name) AS name, username, email,company_id FROM delivery_users WHERE email = '$select' ";
		}
		if($type=='username'){
			$query = "SELECT CONCAT(first_name, ' ', last_name) AS name, username, email ,company_id FROM delivery_users WHERE username = '$select'";
		}
		$result = $this->db->query($query);
		return $result->result();
	}

	public function login_userdata_2($companyid){
		$query = "SELECT  company_name FROM delivery_user_details WHERE id = '$companyid'";
		$result = $this->db->query($query);
		return $result->result();
	}
	
}