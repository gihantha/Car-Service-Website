<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

	public function __construct()
	 {
		parent::__construct();

		$this->load->model("users/Usermodel");



		if ($this->session->userdata['loged_user']==null || $this->session->userdata['loged_user']==''){
			
			redirect(base_url(Login));
		
		}
	 }
	public function index()
	{
		$user_id  = $this->session->userdata['loged_user']['user_id'];
		
		echo "user id:".$user_id;
		$this->load->view('services');
	}
}
