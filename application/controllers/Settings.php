<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model("users/Usermodel");

		

	}

	public function index()
	{
		$this->load->view('user');
	}

    function user_profile(){
        $this->load->view('user_profile');
    }
}
