<?php

class M_company extends CI_Model {
	
	public function get_basic_details($companyid){
		if($this->company_exists($companyid)){
			$query = "SELECT * FROM delivery_user_details WHERE id = '{$companyid}'";
			$result = $this->db->query($query);
			return  $result->result();
		}else{
			return false;
		}
	}
	
	public function get_address_details($companyid){
		if($this->company_exists($companyid)){
			$query = "SELECT address_line_1,address_line_2,identity_name FROM delivery_address WHERE company_id = '{$companyid}'";
			$result = $this->db->query($query);
			return  $result->result();
		}else{
			return false;
		}
	}
	
	public function get_contact_details($companyid){
		if($this->company_exists($companyid)){
			$query = "SELECT contact_number,identity_name FROM delivery_contact_numbers WHERE company_id = '{$companyid}'";
			$result = $this->db->query($query);
			return  $result->result();
		}else{
			return false;
		}
	}
	
	public function get_email_details($companyid){
		if($this->company_exists($companyid)){
			$query = "SELECT email,identity_name FROM delivery_email WHERE company_id = '{$companyid}'";
			$result = $this->db->query($query);
			return  $result->result();
		}else{
			return false;
		}
	}
	
	private function company_exists($companyid){
		$query = "SELECT * FROM delivery_user_details WHERE id = '{$companyid}'";
		$result = $this->db->query($query);
		if($result->num_rows() == 1){return true;}
		else{return false;}
	}
}