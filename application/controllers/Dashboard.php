<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	
	public function index()
	{
		$this->load->view('dashboard');
	}

	function dashboard_services()
	{
		

		$this->load->view('dashboard_services');
	}

	function dashboard_services_add()
	{
		

		$this->load->view('dashboard_services_add');
	}
	function dashboard_appointments()
	{
		

		$this->load->view('dashboard_appointments');
	}
	


	function dashboard_customermgt()
	{
		

		$this->load->view('dashboard_customermgt');
	}

	function dashboard_customermgt_add()
	{
		

		$this->load->view('dashboard_customermgt_add');
	}

	

	// function services_add()
	// {
		

	// 	$this->load->view('services_add');
	// }
}
