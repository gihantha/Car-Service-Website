<?php

class Usermodel extends CI_Model{


    function get_user($username){

        $this->db->select('user_id,user_name,password');
        $this->db->from("users");
        $this->db->where("user_name",$username);
        $query=$this->db->get();

        return $query->result();
    }

     function get_user_profile($user_id){
        $s = "SELECT users.user_name,users.phone,users.email,users.address FROM users WHERE users.user_id = '".$user_id."'";

        $query = $this->db->query($s);
        return $query->result();
    }

    function get_user_profile_from_aj($user_id){
        $s = "SELECT users.user_name,users.phone,users.email,users.address FROM users WHERE users.user_id = '".$user_id."'";

        $query = $this->db->query($s);

        $ret['profile'] = $query->result();

        return $ret;
    }

    function get_user_password($user_id){
        $s ="SELECT  users.password FROM users WHERE users.user_id ='".$user_id."'";

        $query = $this->db->query($s);

        return $query->result();
    }

    function get_all_appointments(){
        $s = "SELECT booking_appointments.name, booking_appointments.phone,booking_appointments.email,booking_appointments.service_name,booking_appointments.date, booking_appointments.time,booking_appointments.vehicle_make, booking_appointments.model, booking_appointments.year, booking_appointments.license_plate, booking_appointments.comments FROM booking_appointments";
        
        $query = $this->db->query($s);

        return $query->result();
    }




    
}