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
			$userid = $row->user_id;

		endforeach;

		if($username==$user && password_verify($password, $pass)){
			
			$login_data = array(
				'user_id' => $userid,
				'user_name' => $user
			); 

			$this->session->set_userdata('loged_user', $login_data);

			$message = array("status"=>"success", "message"=> base_url() ."services");

		} else {
			$message = array("status"=>"error", "message"=>"User Name or Password is Invalid ");
		}
	
		echo json_encode($message);
	
	} 


	function userlogout(){
		
		if ($this->session->userdata['loged_user']!=null || $this->session->userdata['loged_user']!=''){
			
				$login_data = array(
					'user_id' =>'',
					'user_name' =>''
				);

				$this->session->unset_userdata($login_data);
				$this->session->sess_destroy();
			redirect(base_url('Login'));
		
		}
	}
}
