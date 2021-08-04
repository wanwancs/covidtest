<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bed extends CI_Controller {
	public function __construct()
    {
        parent::__construct();

        $this->load->model('Province_model');
		$this->load->model('District_model');
		$this->load->model('Filedbed_model');   
        $this->load->model('BedBooking_model');    
         
    }

    public function index(){
        
        $amphurs = [];
        $districts = [];
        $province = "";
        $amphur = "";
        $district = "";
        $place = "";
        $places = [];
        $bedDate = date('Y-m-d');

        $provinces = $this->Province_model->getAllData();
        if(!empty($_POST['province'])){
            $province = $_POST['province'];
            $amphurs = $this->District_model->getAmphur($_POST['province']);
        }

        if(!empty($_POST['amphur'])){
            $amphur = $_POST['amphur'];
            $districts = $this->District_model->getDistrict($_POST['amphur']);
        }

        if(!empty($_POST['amphur'])){
            $amphur = $_POST['amphur'];
            $districts = $this->District_model->getDistrict($_POST['amphur']);
        }

        if(!empty($_POST['bedPlace'])){
            $place = $_POST['bedPlace'];
        }

        if(!empty($_POST['district'])){
            $district = $_POST['district'];
            $places = $this->Filedbed_model->getData($_POST['district']);
        }
        
        if(!empty($_POST['bedDate'])){
            $bedDate = $_POST['bedDate'];
        }


		$data = [
			'provinces' => $provinces,
            'amphurs' => $amphurs,
            'districts' => $districts,
            'places' => $places,
            'placeId' => $place,
            'provinceCode' => $province,
            'amphurCode' => $amphur ,
            'districtCode' => $district,
            'bedDate' => $bedDate
		];

		$this->load->view('template/header');
		$this->load->view('bed/index', $data);
		$this->load->view('template/footer');
    }

    public function list(){
        if (!empty($this->input->get('place'))) {
            $placeId = $this->input->get('place');
            $date = $this->input->get('date');
            
            $place = $this->Filedbed_model->getBedById($placeId);
            $book = $this->BedBooking_model->getData($placeId, $date);
            
            $data = [
                'place' => $place,
                'booking' => $book
            ];

            $this->load->view('bed/list', $data);
        }
    }

    public function booking(){
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $name = $this->input->post('name');
            $idCard = $this->input->post('idcard');
            $phone = $this->input->post('phone');
            $line = $this->input->post('line');
            $queue = $this->input->post('queue');
            $date = $this->input->post('date');
            $place = $this->input->post('place');

            $data = array(
                "book_date" => $date,
                "bed_queue" => $queue,
                "bed_number" => substr($queue, 1),
                "patient_idcard" => $idCard,
                "patient_name" => $name,
                "patient_phone" => $phone,
                "patient_line" => $line,
                "filedbed_id" => $place,
                "book_status" => 0
            );

            $bookingId =  $this->BedBooking_model->insert($data);

            $booking = $this->BedBooking_model->detail($bookingId);
           
            $data["booking"] = $booking;
            
            $this->load->view('template/header');
            $this->load->view('bed/confirm', $data);
            $this->load->view('template/footer');
        }   
    }
}
