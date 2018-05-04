<?php 
	class cStudent extends CI_controller {
		public function index() 
		{
			$this->load->view('IF/template/header.php');
			$this->load->view('IF/menu/studentMenu.php');
			// $this->load->view('IF/index.php');
			$this->load->view('IF/student/worklog');
			$this->load->view('IF/template/footer.php');
		}

		public function comment() 
		{
			$this->load->view('IF/template/header.php');
			$this->load->view('IF/menu/studentMenu.php');
			// $this->load->view('IF/index.php');
			$this->load->view('IF/student/comment');
			$this->load->view('IF/template/footer.php');
		}
		public function calendar() 
		{
			$this->load->view('IF/template/header.php');
			$this->load->view('IF/menu/studentMenu.php');
			$this->load->view('IF/pages/calendar/index.php');
			$this->load->view('IF/template/footer.php');
		}
	}
 ?>