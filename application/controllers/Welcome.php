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
		$data['activeLink'] = 'company';
		$this->load->view('IF/template/header', $data);
		$this->load->view('menu/index', $data);
		$this->load->view('pages/index', $data);
		$this->load->view('IF/template/footer', $data);
	}
}
