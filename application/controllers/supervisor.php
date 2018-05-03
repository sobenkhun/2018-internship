<?php

class tutorDas extends CI_Controller {

	function index()
	{
		$this->load->view('IF/template/header.php');
		$this->load->view('IF/menu/supervisorMenu.php');
		$this->load->view('IF/supervisor/index.php');
		
		$this->load->view('IF/template/footer.php');
	}


}


?>