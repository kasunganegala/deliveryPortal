<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signup extends CI_Controller {
	
	public function index()
	{
		$this->header('Delivery - signin');
		$this->load->view('v_signup');
		$this->footer();
	}
	
	function header($tile){
		$data['title']=$tile;
		if($this->session->userdata('username')){
			if($this->session->userdata('usertype')=='a'){
				$this->load->view('header_admin',$data);
			}else{
				$this->load->view('header_loggedin',$data);
			}
		}else{
			$this->load->view('header_not_loggedin',$data);
		}
	}
	
	public function footer()
	{
		$this->load->view('footer');
		
	}
	
}