<?php 
	class cStudent extends CI_controller {
		public function index() 
		{
			$data['activeLink'] = 'Home Page';
			$this->load->view('templates/header.php',$data);
			$this->load->view('menu/studentMenu.php',$data);
			// $this->load->view('index.phsp');
			$this->load->view('student/index.php',$data);
			$this->load->view('templates/footer.php');
		}
		public function worklog() 
		{
			$data['activeLink'] = 'work-log';
			$this->load->view('templates/header.php',$data);
			$this->load->view('menu/studentMenu.php',$data);
			// $this->load->view('index.phsp');
			$this->load->view('student/worklog.php',$data);
			$this->load->view('templates/footer.php');
		}

		public function comment() 
		{
			$data['activeLink'] = 'Comment';
			$this->load->view('templates/header.php',$data);
			$this->load->view('menu/studentMenu.php',$data);
			// $this->load->view('index.phsp');
			$this->load->view('student/comment',$data);
			$this->load->view('templates/footer.php');
		}
		public function calendar() 
		{
			$data['activeLink'] = 'Calendar';
			$this->load->view('templates/header.php',$data);
			$this->load->view('menu/studentMenu.php',$data);
			$this->load->view('student/calendarStu.php',$data);
			// $this->load->view('templates/footer.php');
		}
	}
 ?>