<?php

class supervisor extends CI_Controller {
	function index()
	{
		$this->load->view('templates/header.php');
		$this->load->view('menu/supervisorMenu.php');
		$this->load->view('supervisorDashboard/index.php');
		$this->load->view('templates/footer.php');
	}
	function student()
	{
		$this->load->view('templates/header.php');
		$this->load->view('menu/supervisorMenu.php');
		$this->load->view('supervisorDashboard/student/index.php');
		$this->load->view('templates/footer.php');
	}
	function questionnair()
	{
		$this->load->view('templates/header.php');
		$this->load->view('menu/supervisorMenu.php');
		$this->load->view('supervisorDashboard/questionnair.php');
		$this->load->view('templates/footer.php');
	}
	function comment()
	{
		$this->load->view('templates/header.php');
		$this->load->view('menu/supervisorMenu.php');
		$this->load->view('supervisorDashboard/student/comment.php');
		$this->load->view('templates/footer.php');
	}
	function viewProfile()
	{
		$this->load->view('templates/header.php');
		$this->load->view('menu/supervisorMenu.php');
		$this->load->view('supervisorDashboard/student/questionnairStudentList.php');
		$this->load->view('templates/footer.php');
	}
	function profile()
	{
		$this->load->view('templates/header.php');
		$this->load->view('menu/supervisorMenu.php');
		$this->load->view('supervisorDashboard/student/studentProfile.php');
		$this->load->view('templates/footer.php');
	}
	function calendar()
	{
		$this->load->view('templates/header.php');
		$this->load->view('menu/supervisorMenu.php');
		$this->load->view('supervisorDashboard/calendar/calendar.php');
		// $this->load->view('templates/footer.php');
	}
}


?>