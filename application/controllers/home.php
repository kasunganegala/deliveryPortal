<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function index()
	{
		if($this->session->userdata('username')){
			$this->header('Delivery - signin');
			$this->load->view('v_home');
			$this->footer();
		}else{
			redirect('signin');
		}
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