<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
    
        $this->load->model('Covidplacetest_model');
        
    }
	
	public function index()
	{
		$places = $this->Covidplacetest_model->getData();

		$data = [
			'places' => $places
		];

		$this->load->view('template/header');
		$this->load->view('index', $data);
		$this->load->view('template/footer');
		
	}	
}
