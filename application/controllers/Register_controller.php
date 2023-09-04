<?php
class Register_controller extends CI_Controller
{
	public function __construct()
	{
	parent::__construct();
	$this->load->database();
	$this->load->helper('url');
	$this->load->model('Register_model'); ///load model
	}

	public function index()
	{

		if($this->input->post('register'))
		{
		$firstname=$this->input->post('firstname');
		$lastname=$this->input->post('lastname');
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$confirmpassword=$this->input->post('confirmpassword');

		$this->Register_model->insert_data($firstname,$lastname,$email,$password,$confirmpassword);

	}else{
	$this->load->view('registration_view');
	}
	}
	
}
?>