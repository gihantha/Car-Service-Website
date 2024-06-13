<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	function userlogin(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$message = array("success"=>"success", "message"=>"user name : $username");
	
		echo json_encode($message);
	
	}
}
