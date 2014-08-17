<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signin extends CI_Controller {
	
	public function index()
	{
		$this->header('Delivery - signin');
		$this->load->view('v_signin');
		$this->footer();
	}
	
	public function siginin()
	{
		$this->header('Delivery - signin');
		$this->load->view('v_signin');
		$this->footer();
	}
	
	public function validate(){
		$this->load->library('form_validation');
		$this->load->helper('email');
		
		if (valid_email($this->input->post('useremail'))){
			$this->form_validation->set_rules('useremail','','required|trim|xss_clean|valid_email|callback_by_email');
			$this->form_validation->set_message('required', 'Email/password invalid');
			$this->form_validation->set_message('valid_email', 'Email/password invalid');
			$login_type='email';
			
		}else{
		    $this->form_validation->set_rules('useremail','','required|trim|xss_clean|callback_by_username');
			$this->form_validation->set_message('required', 'Username/password invalid');
			$login_type='username';
		}
		
		if($this->form_validation->run()){
			$select=$this->input->post('useremail');
			$this->load->model('m_signin');
			$data=array();
			$dataset1 = $this->m_signin->login_userdata_1($login_type,$select);
			foreach ($dataset1 as $info) {
				$data['username'] = $info->username; 
				$data['email'] = $info->email;	
				$data['name'] = $info->name;	
				$data['company_id'] = $info->company_id;	
			}
			$dataset2 = $this->m_signin->login_userdata_2($data['company_id']);
			foreach ($dataset2 as $info){
				$data['company_name'] = $info->company_name;	
			}
			$this->session->set_userdata($data);
			redirect('home');
		}else{
			$this->header('Delivery - asdasd');
			$this->load->view('v_signin');
			$this->footer();
		}
		
	}
	
	function by_email() 
	{
		$this->load->model('m_signin');
		if($this->m_signin->can_log_in('email')){
			return true;
		}
		else{
			$this->form_validation->set_message('by_email','Email/password invalid');
			return false;
		}
	}
	
	function by_username() 
	{
		$this->load->model('m_signin');
		if($this->m_signin->can_log_in('username')){
			return true;
		}
		else{
			$this->form_validation->set_message('by_username','Username/password invalid');
			return false;
		}
	}
	
	public function signout(){
		$this->session->sess_destroy();
		redirect('signin');
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
