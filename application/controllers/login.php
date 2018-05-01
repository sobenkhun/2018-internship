<?php

class login extends CI_Controller {

	function index()
	{


		$this->load->view('templates/header');
// $this->load->view('menu/index1');
		$this->load->view('users/intern/HR/login');
// $this->load->view('templates/footer');
	}

	function admin()
	{
		

		$this->load->view('templates/header');
		$this->load->view('menu/index1');
		$this->load->view('users/intern/HR/home');
		$this->load->view('templates/footer');
	}

}

?>