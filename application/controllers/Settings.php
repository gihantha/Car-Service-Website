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

	function updateprofile(){

		$user_id  = $this->session->userdata['loged_user']['user_id'];

		//Checkiing whether the data input from user_profile.php profile update data is passed to controller
		$phone = $this->input->post('phone');
		$address = $this->input->post('address');

		//How to check wether the transaction (updated to the db ) is successfully done
		$this->db->trans_start();

		//update the responding columns in the data base
		$userdata = array(
			'phone'=> $phone,
			'address' => $address
		);
		$this->db->where('users.user_id' , $user_id);
		$this->db->update('users', $userdata);

		//How to check wether the transaction (updated to the db ) is successfully done
		$this->db->trans_complete();
		if($this->db->trans_status()==False){
			$message = array("status"=>"error", "message"=>"Error");
		}else{
			$message = array("status"=>"success", "message"=>"Profile updated");
		}

		echo json_encode($message);

	}

	function read_profile(){

		$user_id  = $this->session->userdata['loged_user']['user_id'];

		$result= $this->Usermodel->get_user_profile_from_aj($user_id);

		echo json_encode($result);
	}
}
