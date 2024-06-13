<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

	public function index()
	{
		$this->load->view('booking');
	}

	function booking_appointment_form()
	{
		$this->load->view('booking_appointment_form');
	}
}
