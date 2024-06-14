<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

	public function __construct()
	 {
		parent::__construct();

		$this->load->model("users/Usermodel");



		if ($this->session->userdata['loged_user']==null || $this->session->userdata['loged_user']==''){
			
			redirect(base_url('Login'));
		
		}
	 }

	public function index()
	{
		$this->load->view('user');
	}

    function user_profile(){


		$user_id  = $this->session->userdata['loged_user']['user_id'];
		//When we need to pass the data to the model 
		//retrieves user data from the database
		$result= $this->Usermodel->get_user_profile($user_id);

		//When we need to pass the data to the view
		// Prepare data to be passed to the view
		$data['profiledata'] = $result;

		// Load the view and pass the data
        $this->load->view('user_profile',$data);
    }
}
