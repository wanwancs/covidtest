<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('booking_model');        
    }
	//บันทึกข้อมูลพื้นที่ออกตลาด
    public function insert_booking(){
        $data = array(
            "" => $this->input->post(''),
            "" => $this->input->post(''),
            "" => $this->input->post(''),
            "" => $this->input->post('')
        );
        $this->booking_model->insert_booking($data);
        $this->session->set_userdata("message", "บันทึกรายการเรียบร้อย");
        redirect(base_url());
    }	
}
