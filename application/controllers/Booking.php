<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Booking_model'); 
        $this->load->model('Covidplacetest_model');       
    }

    public function index(){
        $place = "";
        $placeName = "";
        $placeTime = 10;
        $placeId = 1;
        $date = date('Y-m-d');
        
        $places = $this->Covidplacetest_model->getData();

        if (!empty($this->input->get('place'))) {
            $place = $this->input->get('place');
            $placeName = "";
            
            foreach($places as $item){
                if($item->TBPlaceID == $place){
                    $placeId = $item->TBPlaceID;
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
            'placeTime' => $placeTime,
            'placeId' => $placeId,
		];

		$this->load->view('template/header');
		$this->load->view('booking', $data);
		$this->load->view('template/footer');
    }

    public function time(){
        if (!empty($this->input->get('date')) && !empty($this->input->get('time'))) {
            $date = $this->input->get('date');
            $time = $this->input->get('time');
            $minute = $this->input->get('minute');
            $place = $this->input->get('place');
            
            $timeBooking = $this->Booking_model->getBookingQueue($date, $place);
            
            $data = [
                'timeBooking' => $timeBooking,
                'time' => $time,
                'minute' => $minute
            ];

            $this->load->view('booking_time', $data);
        }
    }

    public function confirm(){
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $name = $this->input->post('name');
            $idCard = $this->input->post('idcard');
            $phone = $this->input->post('phone');
            $line = $this->input->post('line');
            $bookTime = $this->input->post('book_time');
            $queue = $this->input->post('queue');
            $date = $this->input->post('date');
            $place = $this->input->post('place');

            $bookingId = 'COVID'.time();
            $data = array(
                "BOOKINGID" => $bookingId,
                "BOOKDATE" => $date,
                "BOOKTIME" => $bookTime,
                "BOOKQUE" => $queue,
                "IDCARD" => $idCard,
                "MEMBERNAME" => $name,
                "PHONENUMBER" => $phone,
                "LINEID" => $line,
                "PLACEID" => $place
            );

            $this->Booking_model->insert_booking($data);

            $booking = $this->Booking_model->detail($bookingId);
            $data["booking"] = $booking;

            $this->load->view('template/header');
            $this->load->view('confirm', $data);
            $this->load->view('template/footer');
        }   
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
