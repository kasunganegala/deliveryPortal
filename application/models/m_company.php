<?php

class M_company extends CI_Model {
	
	public function get_details($companyid){
		if($this->company_exists($companyid)){
			$query = "SELECT * FROM delivery_user_details WHERE email = '$companyid'";
			return  $this->db->query($query);
		}else{
			return false;
		}
	}
	
	private function company_exists($companyid){
		$query = "SELECT * FROM delivery_user_details WHERE email = '$companyid'";
		$result = $this->db->query($query);
		if($result->num_rows() == 1){return true;}
		else{return false;}
	}
}