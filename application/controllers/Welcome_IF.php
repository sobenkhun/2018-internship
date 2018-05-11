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
		$this->load->view('templates/header.php');
		$this->load->view('menu/index.php');
		$this->load->view('pages/index.php');
		$this->load->view('templates/footer.php');
	}

	// Company Function 
	public function company()
	{
		$this->load->helper('form');
		$this->load->Model('users_model');
        $data['company'] = $this->users_model->getCompanyData();
        $data['activeLink'] = 'Company';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/company/index.php',$data);
		$this->load->view('templates/footer.php');
	}
	public function detailCompany()
	{
		$data['activeLink'] = 'Company';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/company/detail.php');
		$this->load->view('templates/footer.php');
	}
	public function editeCompany()
	{
		$data['activeLink'] = 'Company';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/company/edite.php');
		$this->load->view('templates/footer.php');
	}
	public function createCompany()
	{
		$data['activeLink'] = 'Company';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/company/add.php');
		$this->load->view('templates/footer.php');
	}
	// End of Company function 

	// Tutor Function
	public function tutor()
	{
		$this->load->helper('form');
		$this->load->Model('users_model');
        $data['tutor'] = $this->users_model->getTutorData();
		$data['activeLink'] = 'Tutor';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/tutor/index.php',$data);
		$this->load->view('templates/footer.php');
	}
	public function addTutor()
	{
		$data['activeLink'] = 'Tutor';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/tutor/addNew.php');
		$this->load->view('templates/footer.php');
	}
	public function detailTutor()
	{
		$data['activeLink'] = 'Tutor';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/tutor/detailTutor.php');
		$this->load->view('templates/footer.php');
	}
	public function editTutor()
	{
		$data['activeLink'] = 'Tutor';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/tutor/editTutor.php');
		$this->load->view('templates/footer.php');
	}
	// End of tutor function 
	public function supervisor()
	{
		$this->load->helper('form');
		$this->load->Model('users_model');
        $data['supervisor'] = $this->users_model->getSupervisorData();
		$data['activeLink'] = 'supervisor';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/supervisor/index.php');
		$this->load->view('templates/footer.php');
	}


	public function createSupervisor()
	{
		$data['activeLink'] = 'supervisor';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/supervisor/createSupervisor.php');
		$this->load->view('templates/footer.php');
	}
	public function viewSupervisor()
	{
		$data['activeLink'] = 'supervisor';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/supervisor/view.php');
		$this->load->view('templates/footer.php');
	}
	public function editSupervisor()
	{
		$data['activeLink'] = 'supervisor';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/supervisor/edit.php');
		$this->load->view('templates/footer.php');
	}
	public function questionniare()
	{
		$data['activeLink'] = 'supervisor';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/supervisor/questionnair.php');
		$this->load->view('templates/footer.php');
	}

	// student
	public function student()
	{
			$this->load->helper('form');
			$this->load->Model('users_model');
	        $data['supervisor'] = $this->users_model->getStudentData();
		$data['activeLink'] = 'student';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/student/index.php');
		$this->load->view('templates/footer.php');
	}
	public function viewStudent()
	{
		$data['activeLink'] = 'student';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/student/viewstudent.php');
		$this->load->view('templates/footer.php');
	}
	public function updateStudent()
	{
		$data['activeLink'] = 'student';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/student/editstudent.php');
		$this->load->view('templates/footer.php');
	}
	public function addStudent()
	{
		$data['activeLink'] = 'student';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/student/addstudent.php');
		$this->load->view('templates/footer.php');
	}
	public function worklog()
	{
		$data['activeLink'] = 'student';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/student/worklog.php');
		$this->load->view('templates/footer.php');
	}
// calenders
	public function calendar()
	{
		$data['activeLink'] = 'calendar';
		 $this->load->view('templates/header.php',$data);
		 $this->load->view('menu/index.php',$data);
		$this->load->view('pages/calendar/index.php');
		// $this->load->view('templates/footer.php');
	}
	// comment 
	public function comment()
	{
		$data['activeLink'] = 'student';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/student/comment.php');
		$this->load->view('templates/footer.php');
	}
	public function addComment()
	{
		$data['activeLink'] = 'student';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/student/addComment.php');
		$this->load->view('templates/footer.php');
	}
}