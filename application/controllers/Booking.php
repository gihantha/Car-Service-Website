<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Booking extends CI_Controller
{

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
		$this->load->view('booking');
	}

	function booking_appointment_form()
	{
		$this->load->view('booking_appointment_form');
	}

	function dashboard_booking_appointments()
	{
		$data['appointments'] = $this->Usermodel->get_all_appointments();
		$this->load->view('dashboard_booking_appointments', $data);
	}
	//47.37

	function add_booking_appointment()
	{
		$name = $this->input->post('name');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$service_name = $this->input->post('service_name');
		$date = $this->input->post('date');
		$time = $this->input->post('time');
		$vehicle_make = $this->input->post('vehicle_make');
		$model = $this->input->post('model');
		$year = $this->input->post('year');
		$license_plate = $this->input->post('license_plate');
		$comments = $this->input->post('comments');

		$this->db->trans_start();

		//update the responding columns in the data base
		$booking_appointment = array(
			'name'=> $name,
			'phone'=> $phone,
			'email'=> $email,
			'service_name'=> $service_name,
			'date'=> $date,
			'time'=> $time,
			'vehicle_make'=> $vehicle_make,
			'model'=> $model,
			'year'=> $year,
			'license_plate'=> $license_plate,
			'comments'=> $comments

		);
		$this->db->insert('booking_appointments', $booking_appointment);

		//How to check wether the transaction (updated to the db ) is successfully done
		$this->db->trans_complete();
		if($this->db->trans_status()==False){
			$message = array("status"=>"error", "message"=>"Error");
		}else{
			$message = array("status"=>"success", "message"=>"Profile updated");
		}


		echo json_encode($message);
	}
}
