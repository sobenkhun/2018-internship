<?php 
	class c_student extends CI_controller {
		public function index() 
		{
			$this->load->view('IF/template/header.php');
			$this->load->view('IF/menu/student_menu.php');
			// $this->load->view('IF/index.php');
			$this->load->view('IF/student/worklog');
			$this->load->view('IF/template/footer.php');
		}
	}
 ?>