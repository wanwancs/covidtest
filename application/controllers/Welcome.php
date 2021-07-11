<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();

		$this->load->model('Booking_model');
        $this->load->model('Covidplacetest_model');
        
    }
	
	public function index()
	{
		$places = $this->Covidplacetest_model->getData();
		$booking = $this->Booking_model->statBooking();

		$stat1 = 0;
		$stat2 = 0;
		$stat3 = 0;
		$stat4 = 0;

		foreach($booking as $item){
			if($item->PLACEID == 1){
				$stat1 = $item->NUM_OF_ROW;
			}
			if($item->PLACEID == 2){
				$stat2 = $item->NUM_OF_ROW;
			}
			if($item->PLACEID == 3){
				$stat3 = $item->NUM_OF_ROW;
			}
			if($item->PLACEID == 4){
				$stat4 = $item->NUM_OF_ROW;
			}
		}

		$data = [
			'places' => $places,
			'stat1' => $stat1,
			'stat2' => $stat2,
			'stat3' => $stat3,
			'stat4' => $stat4
		];

		$this->load->view('template/header');
		$this->load->view('index', $data);
		$this->load->view('template/footer');
	}	
}
