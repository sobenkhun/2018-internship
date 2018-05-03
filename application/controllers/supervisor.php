<?php

class supervisor extends CI_Controller {

	function index()
	{
		$this->load->view('IF/template/header.php');
		$this->load->view('IF/menu/supervisorMenu.php');
		$this->load->view('IF/supervisorDashboard/student/index.php');
		$this->load->view('IF/template/footer.php');
	}
	function questionnair()
	{
		$this->load->view('IF/template/header.php');
		$this->load->view('IF/menu/supervisorMenu.php');
		$this->load->view('IF/supervisorDashboard/questionnair.php');
		$this->load->view('IF/template/footer.php');
	}


}


?>