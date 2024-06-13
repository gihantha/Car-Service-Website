<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("users/Usermodel");
	}
	public function index()
	{
		$this->load->view('login');
	}

	function userlogin(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = '';
		$pass = '';

		$result= $this->Usermodel->get_user($username);

		foreach($result as $row):

			$user = $row->user_name;
			$pass = $row->password;

		endforeach;

		if($username==$user && $password==$pass){
			
			$message = array("status"=>"success", "message"=>"http://localhost/myservice/home");

		} else {
			$message = array("status"=>"error", "message"=>"User Name or Password is Invalid ");
		}
	
		echo json_encode($message);
	
	}
}
