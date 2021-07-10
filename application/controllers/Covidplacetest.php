<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Covidplacetest extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('covidplacetest_model');        
    }
	//บันทึกข้อมูลการจองคิวตรวจโควิด
    public function insert_covidplacetest(){
        $data = array(
            "TBPlaceName" => $this->input->post('')
        );
        $this->covidplacetest_model->insert_covidplacetest($data);
        $this->session->set_userdata("message", "บันทึกรายการเรียบร้อย");
        redirect(base_url());
    }	
}
