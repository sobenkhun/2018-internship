<?php 
	class secounMonth extends CI_controller {
		public function firstWeek() 
		{
			$this->load->view('templates/header.php');
			$this->load->view('menu/studentMenu.php');
			$this->load->view('student/monthReport/monthTwo/weekOne');
			$this->load->view('templates/footer.php');
		}
		public function secounWeek() 
		{
			$this->load->view('templates/header.php');
			$this->load->view('menu/studentMenu.php');
			$this->load->view('student/monthReport/monthTwo/weekTwo');
			$this->load->view('templates/footer.php');
		}
		public function thirdWeek() 
		{
			$this->load->view('templates/header.php');
			$this->load->view('menu/studentMenu.php');
			$this->load->view('student/monthReport/monthTwo/weekThree');
			$this->load->view('templates/footer.php');
		}
		public function fourWeek() 
		{
			$this->load->view('templates/header.php');
			$this->load->view('menu/studentMenu.php');
			$this->load->view('student/monthReport/monthTwo/weekFour');
			$this->load->view('templates/footer.php');
		}
	}

 ?>