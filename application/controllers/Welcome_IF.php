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
	public function home()
	{
		$this->load->view('template/header.php');
		$this->load->view('menu/index.php');
		$this->load->view('index.php');
		$this->load->view('template/footer.php');
	}

	// Company Function 
	public function company()
	{
		$this->load->view('templates/header.php');
		$this->load->view('menu/index.php');
		$this->load->view('pages/company/index.php');
		$this->load->view('templates/footer.php');
	}
	public function detailCompany()
	{
		$this->load->view('templates/header.php');
		$this->load->view('menu/index.php');
		$this->load->view('pages/company/detail.php');
		$this->load->view('templates/footer.php');
	}
	public function editeCompany()
	{
		$this->load->view('templates/header.php');
		$this->load->view('menu/index.php');
		$this->load->view('pages/company/edite.php');
		$this->load->view('templates/footer.php');
	}
	public function createCompany()
	{
		$this->load->view('templates/header.php');
		$this->load->view('menu/index.php');
		$this->load->view('pages/company/add.php');
		$this->load->view('templates/footer.php');
	}
	// End of Company function 

	// Tutor Function
	public function tutor()
	{
		$this->load->view('templates/header.php');
		$this->load->view('menu/index.php');
		$this->load->view('pages/tutor/index.php');
		$this->load->view('templates/footer.php');
	}
	public function addTutor()
	{
		$this->load->view('templates/header.php');
		$this->load->view('menu/index.php');
		$this->load->view('pages/tutor/addNew.php');
		$this->load->view('templates/footer.php');
	}
	public function detailTutor()
	{
		$this->load->view('templates/header.php');
		$this->load->view('menu/index.php');
		$this->load->view('pages/tutor/detailTutor.php');
		$this->load->view('templates/footer.php');
	}
	public function editTutor()
	{
		$this->load->view('templates/header.php');
		$this->load->view('menu/index.php');
		$this->load->view('pages/tutor/editTutor.php');
		$this->load->view('templates/footer.php');
	}
	// End of tutor function 
	public function supervisor()
	{
		$this->load->view('templates/header.php');
		$this->load->view('menu/index.php');
		$this->load->view('pages/supervisor/index.php');
		$this->load->view('templates/footer.php');
	}


	public function createSupervisor()
	{
		$this->load->view('templates/header.php');
		$this->load->view('menu/index.php');
		$this->load->view('pages/supervisor/createSupervisor.php');
		$this->load->view('templates/footer.php');
	}
	public function viewSupervisor()
	{
		$this->load->view('templates/header.php');
		$this->load->view('menu/index.php');
		$this->load->view('pages/supervisor/view.php');
		$this->load->view('templates/footer.php');
	}
	public function editSupervisor()
	{
		$this->load->view('templates/header.php');
		$this->load->view('menu/index.php');
		$this->load->view('pages/supervisor/edit.php');
		$this->load->view('templates/footer.php');
	}
	public function questionniare()
	{
		$this->load->view('templates/header.php');
		$this->load->view('menu/index.php');
		$this->load->view('pages/supervisor/questionnair.php');
		$this->load->view('templates/footer.php');
	}

	// student
	public function student()
	{
		$this->load->view('templates/header.php');
		$this->load->view('menu/index.php');
		$this->load->view('pages/student/index.php');
		$this->load->view('templates/footer.php');
	}
	public function viewStudent()
	{
		$this->load->view('templates/header.php');
		$this->load->view('menu/index.php');
		$this->load->view('pages/student/viewstudent.php');
		$this->load->view('templates/footer.php');
	}
	public function updateStudent()
	{
		$this->load->view('templates/header.php');
		$this->load->view('menu/index.php');
		$this->load->view('pages/student/editstudent.php');
		$this->load->view('templates/footer.php');
	}
	public function addStudent()
	{
		$this->load->view('templates/header.php');
		$this->load->view('menu/index.php');
		$this->load->view('pages/student/addstudent.php');
		$this->load->view('templates/footer.php');
	}
	public function worklog()
	{
		$this->load->view('templates/header.php');
		$this->load->view('menu/index.php');
		$this->load->view('pages/student/worklog.php');
		$this->load->view('templates/footer.php');
	}
// calenders
	public function calendar()
	{
		 $this->load->view('templates/header.php');
		 $this->load->view('menu/index.php');
		$this->load->view('pages/calendar/index.php');
		// $this->load->view('templates/footer.php');
	}
	// comment 
	public function comment()
	{
		$this->load->view('templates/header.php');
		$this->load->view('menu/index.php');
		$this->load->view('pages/student/comment.php');
		$this->load->view('templates/footer.php');
	}
	public function addComment()
	{
		$this->load->view('templates/header.php');
		$this->load->view('menu/index.php');
		$this->load->view('pages/student/addComment.php');
		$this->load->view('templates/footer.php');
	}
}