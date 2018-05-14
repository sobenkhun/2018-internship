<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	//Default constructor
	function __construct()
	{
			parent::__construct();
			log_message('debug', 'URI=' . $this->uri->uri_string());
	}

	public function index()
	{
		$this->load->Model('users_model');
		$data['supervisor'] = $this->users_model->suNumRow();
        $data['company'] = $this->users_model->CNumRow();
        $data['tutor'] = $this->users_model->TNumRow();
        $data['student'] = $this->users_model->sNumRow();
		$data['activeLink'] = 'company';
		$this->load->view('IF/template/header', $data);
		$this->load->view('menu/index', $data);
		$this->load->view('pages/index', $data);
		$this->load->view('IF/template/footer', $data);
	}	
}
