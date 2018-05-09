<?php 
	class cStudent extends CI_controller {
		public function index() 
		{
			$this->load->view('templates/header.php');
			$this->load->view('menu/studentMenu.php');
			// $this->load->view('index.phsp');
			$this->load->view('student/index.php');
			$this->load->view('templates/footer.php');
		}
		public function worklog() 
		{
			$this->load->view('templates/header.php');
			$this->load->view('menu/studentMenu.php');
			// $this->load->view('index.phsp');
			$this->load->view('student/worklog.php');
			$this->load->view('templates/footer.php');
		}

		public function comment() 
		{
			$this->load->view('templates/header.php');
			$this->load->view('menu/studentMenu.php');
			// $this->load->view('index.phsp');
			$this->load->view('student/comment');
			$this->load->view('templates/footer.php');
		}
		public function calendar() 
		{
			$this->load->view('templates/header.php');
			$this->load->view('menu/studentMenu.php');
			$this->load->view('student/calendarStu.php');
			// $this->load->view('templates/footer.php');
		}
	}
 ?>