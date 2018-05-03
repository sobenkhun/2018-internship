<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_IF extends CI_Controller {

	//Default constructor
	function __construct()
	{
			parent::__construct();
			log_message('debug', 'URI=' . $this->uri->uri_string());
	}

	public function index()
	{
		$this->load->view('login/login');
	}
	public function login()
	{
		$email = $this->input->post('email');
		if ($email== "supervisor@gmail.com") {
			// echo "supervisor"; git testing
			$this->load->view('IF/template/header.php');
			$this->load->view('IF/menu/supervisorMenu.php');
			$this->load->view('IF/supervisorDashboard/student/index.php');
			$this->load->view('IF/template/footer.php');
		}else if ( $email == "tutor@gmail.com"){
			$this->load->view('IF/template/header.php');
			$this->load->view('IF/menu/tutor.php');
			$this->load->view('IF/tutorDashboard/index.php');
			
			$this->load->view('IF/template/footer.php');
		}else if ( $email == "student@gmail.com"){
			$this->load->view('IF/template/header.php');
			$this->load->view('IF/menu/studentMenu.php');
			// $this->load->view('IF/index.php');
			$this->load->view('IF/student/worklog');
			$this->load->view('IF/template/footer.php');
		}else if ( $email == "ero@gmail.com"){
			$this->load->view('IF/template/header.php');
			$this->load->view('IF/menu/index.php');
			$this->load->view('IF/index.php');
			$this->load->view('IF/template/footer.php');
		}else {
		$this->load->view('login/login');
		}

	}
	public function home()
	{
		$this->load->view('IF/template/header.php');
		$this->load->view('IF/menu/index.php');
		$this->load->view('IF/index.php');
		$this->load->view('IF/template/footer.php');
	}

	// Company Function 
	public function company()
	{
		$this->load->view('IF/template/header.php');
		$this->load->view('IF/menu/index.php');
		$this->load->view('IF/pages/company/index.php');
		$this->load->view('IF/template/footer.php');
	}
	public function detailCompany()
	{
		$this->load->view('IF/template/header.php');
		$this->load->view('IF/menu/index.php');
		$this->load->view('IF/pages/company/detail.php');
		$this->load->view('IF/template/footer.php');
	}
	public function editeCompany()
	{
		$this->load->view('IF/template/header.php');
		$this->load->view('IF/menu/index.php');
		$this->load->view('IF/pages/company/edite.php');
		$this->load->view('IF/template/footer.php');
	}
	public function createCompany()
	{
		$this->load->view('IF/template/header.php');
		$this->load->view('IF/menu/index.php');
		$this->load->view('IF/pages/company/add.php');
		$this->load->view('IF/template/footer.php');
	}
	public function barChart()
	{
		$this->load->view('IF/template/header.php');
		$this->load->view('IF/menu/index.php');
		$this->load->view('IF/pages/company/barChart.php');
		$this->load->view('IF/template/footer.php');
	}
	// End of Company function 

	// Tutor Function
	public function tutor()
	{
		$this->load->view('IF/template/header.php');
		$this->load->view('IF/menu/index.php');
		$this->load->view('IF/pages/tutor/index.php');
		$this->load->view('IF/template/footer.php');
	}
	public function addTutor()
	{
		$this->load->view('IF/template/header.php');
		$this->load->view('IF/menu/index.php');
		$this->load->view('IF/pages/tutor/addNew.php');
		$this->load->view('IF/template/footer.php');
	}
	public function detailTutor()
	{
		$this->load->view('IF/template/header.php');
		$this->load->view('IF/menu/index.php');
		$this->load->view('IF/pages/tutor/detailTutor.php');
		$this->load->view('IF/template/footer.php');
	}
	public function editTutor()
	{
		$this->load->view('IF/template/header.php');
		$this->load->view('IF/menu/index.php');
		$this->load->view('IF/pages/tutor/editTutor.php');
		$this->load->view('IF/template/footer.php');
	}
	// End of tutor function 
	public function supervisor()
	{
		$this->load->view('IF/template/header.php');
		$this->load->view('IF/menu/index.php');
		$this->load->view('IF/pages/supervisor/index.php');
		$this->load->view('IF/template/footer.php');
	}


	public function createSupervisor()
	{
		$this->load->view('IF/template/header.php');
		$this->load->view('IF/menu/index.php');
		$this->load->view('IF/pages/supervisor/createSupervisor.php');
		$this->load->view('IF/template/footer.php');
	}
	public function viewSupervisor()
	{
		$this->load->view('IF/template/header.php');
		$this->load->view('IF/menu/index.php');
		$this->load->view('IF/pages/supervisor/view.php');
		$this->load->view('IF/template/footer.php');
	}
	public function editSupervisor()
	{
		$this->load->view('IF/template/header.php');
		$this->load->view('IF/menu/index.php');
		$this->load->view('IF/pages/supervisor/edit.php');
		$this->load->view('IF/template/footer.php');
	}

	// student
	public function student()
	{
		$this->load->view('IF/template/header.php');
		$this->load->view('IF/menu/index.php');
		$this->load->view('IF/pages/student/index.php');
		$this->load->view('IF/template/footer.php');
	}
	public function viewStudent()
	{
		$this->load->view('IF/template/header.php');
		$this->load->view('IF/menu/index.php');
		$this->load->view('IF/pages/student/viewstudent.php');
		$this->load->view('IF/template/footer.php');
	}
	public function updateStudent()
	{
		$this->load->view('IF/template/header.php');
		$this->load->view('IF/menu/index.php');
		$this->load->view('IF/pages/student/editstudent.php');
		$this->load->view('IF/template/footer.php');
	}
	public function addStudent()
	{
		$this->load->view('IF/template/header.php');
		$this->load->view('IF/menu/index.php');
		$this->load->view('IF/pages/student/addstudent.php');
		$this->load->view('IF/template/footer.php');
	}
// calenders
	public function calendar()
	{
		// $this->load->view('IF/template/header.php');
		// $this->load->view('IF/menu/index.php');
		$this->load->view('IF/pages/calendar/index.php');
		// $this->load->view('IF/template/footer.php');
	}

}