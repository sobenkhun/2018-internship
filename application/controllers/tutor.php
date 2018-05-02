<?php

class Welcome_IF extends CI_Controller {

	function index()
	{
		$this->load->view('IF/template/header.php');
		$this->load->view('IF/menu/tutor.php');
		$this->load->view('IF/tutorDashboard/index.php');
		$this->load->view('IF/template/footer.php');
	}

}


?>