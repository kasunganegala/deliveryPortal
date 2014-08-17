<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Company extends CI_Controller {
	
	public function index()
	{
		
	}
	
	public function by_id($companyid=null){
		if($companyid==null){
			show_404();
		}else{
			$data['company_details'] = $this->get_company_details($companyid);
		}
	}
	
	private function get_company_details($companyid){
		$this->load->model('m_company');
		return $this->m_company->get_details($companyid);
	}
}