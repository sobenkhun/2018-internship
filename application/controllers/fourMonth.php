
<?php 
	class fourMonth extends CI_controller {
		public function firstWeek() 
		{
			$this->load->view('templates/header.php');
			$this->load->view('menu/studentMenu.php');
			$this->load->view('student/monthReport/monthFour/weekOne');
			$this->load->view('templates/footer.php');
		}
		public function secounWeek() 
		{
			$this->load->view('templates/header.php');
			$this->load->view('menu/studentMenu.php');
			$this->load->view('student/monthReport/monthFour/weekTwo');
			$this->load->view('templates/footer.php');
		}
		public function thirdWeek() 
		{
			$this->load->view('templates/header.php');
			$this->load->view('menu/studentMenu.php');
			$this->load->view('student/monthReport/monthFour/weekThree');
			$this->load->view('templates/footer.php');
		}
		public function fourWeek() 
		{
			$this->load->view('templates/header.php');
			$this->load->view('menu/studentMenu.php');
			$this->load->view('student/monthReport/monthFour/weekFour');
			$this->load->view('templates/footer.php');
		}
	}


 ?>