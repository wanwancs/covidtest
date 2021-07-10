<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('booking_model');        
    }
	//บันทึกข้อมูลการจองคิวตรวจโควิด
    public function insert_booking(){
        $data = array(
            "BOOKINGID" => 'COVID'.time(),
            "BOOKDATE" => $this->input->post(''),
            "BOOKTIME" => $this->input->post(''),
			"BOOKQUE" => $this->input->post(''),
            "IDCARD" => $this->input->post(''),
			"MEMBERNAME" => $this->input->post(''),
			"PHONENUMBER" => $this->input->post(''),
			"LINEID" => $this->input->post('')
        );
        $this->booking_model->insert_booking($data);
        $this->session->set_userdata("message", "บันทึกรายการเรียบร้อย");
        redirect(base_url());
    }	
}
