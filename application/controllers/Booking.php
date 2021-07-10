<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('booking_model'); 
        $this->load->model('Covidplacetest_model');       
    }

    public function index(){
        $place = "";
        $placeName = "";
        $placeTime = 10;
        $date = date('Y-m-d');
        
        $places = $this->Covidplacetest_model->getData();

        if (!empty($this->input->get('place'))) {
            $place = $this->input->get('place');
            $placeName = "";
            foreach($places as $item){
                if($item->TBPlaceID == $place){
                    $placeName = $item->TBPlaceName;
                    $placeTime = $item->TBPlaceTimeStep;
                }
            }
        }

        if (!empty($this->input->get('date'))) {
            $date = $this->input->get('date');
        }

		$data = [
			'places' => $places,
            'place' => $place,
            'date' => $date,
            'placeName' => $placeName,
            'placeTime' => $placeTime
		];

		$this->load->view('template/header');
		$this->load->view('booking', $data);
		$this->load->view('template/footer');
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
