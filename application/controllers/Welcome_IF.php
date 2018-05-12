<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_IF extends CI_Controller {

	//Default constructor
	function __construct()
	{
			parent::__construct();
			log_message('debug', 'URI=' . $this->uri->uri_string());
	}
	// view login
	public function index()
	{
		$this->load->view('login/login');
	}
	public function home()
	{
		$this->load->Model('users_model');
        $data['company'] = $this->users_model->getCompanyData();
		$data['activeLink'] = 'home';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/index.php',$data);
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
		$companyId = $_GET['id'];
		$this->load->Model('users_model');
		$data['company'] = $this->users_model->getCompanyDataDetail($companyId);
		$data['activeLink'] = 'Company';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/company/detail.php',$data);
		$this->load->view('templates/footer.php');
	}
	public function editeCompany()
	{
		$companyId = $_GET['id'];
		$this->load->Model('users_model');
		$data['company'] = $this->users_model->getCompanyDataDetail($companyId);
		$data['activeLink'] = 'Company';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/company/edite.php');
		$this->load->view('templates/footer.php');
	}
	public function seEediteCompany()
	{
		$this->load->helper('form');
		$this->load->Model('users_model');
		$companyId = $_GET['id'];
		$name = $this->input->post("name");
		$description = $this->input->post("itemdescription");
		$location = $this->input->post("location");
		$phone = $this->input->post("phone");
		$address = $this->input->post("postaladdress");
		$url = $this->input->post("url");
		$this->users_model->editCompany($companyId,$name,$address,$phone,$description,$location,$url);
		$data['company'] = $this->users_model->getCompanyData();
		$data['activeLink'] = 'Company';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/company/index.php',$data);
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
	public function addCompany()
	{
		$this->load->helper('form');
		$this->load->Model('users_model');
		$name = $this->input->post("name");
		$description = $this->input->post("itemdescription");
		$location = $this->input->post("location");
		$phone = $this->input->post("phone");
		$address = $this->input->post("postaladdress");
		$url = $this->input->post("url");
		$this->users_model->addCompany($name,$address,$phone,$description,$location,$url);
		$data['company'] = $this->users_model->getCompanyData();
        $data['activeLink'] = 'Company';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/company/index.php',$data);
		$this->load->view('templates/footer.php');

	}
	public function deleteCompany()
	{
		$this->load->Model('users_model');
		$companyId = $_GET['id'];
		$this->users_model->deleteCompany($companyId);
		$data['company'] = $this->users_model->getCompanyData();
		$data['activeLink'] = 'Company';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/company/index.php',$data);
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
	public function loadAddTutor()
	{
		$this->load->helper('form');
		$this->load->Model('users_model');
		$data['company'] = $this->users_model->getCompanyData();
		$data['activeLink'] = 'Tutor';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/tutor/addNew.php',$data);
		$this->load->view('templates/footer.php');
	}
	public function addTutor()
	{
		$this->load->helper('form');
		$firstname = $this->input->post("firstname");
		$lastname = $this->input->post("lastname");
		$username = $this->input->post("userName");
		$password = $this->input->post("password");
		$position = $this->input->post("position");
		$sEmail = $this->input->post("sEmail");
		$phone = $this->input->post("phone");
		$this->load->Model('users_model');
       	$this->users_model->addTutor($firstname,$lastname,$username,$password,$position,$sEmail,$phone);
        $data['tutor'] = $this->users_model->getTutorData();
		$data['activeLink'] = 'Tutor';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/tutor/index.php',$data);
		$this->load->view('templates/footer.php');
	}
	public function detailTutor()
	{
		$tutorId = $_GET['id'];
		$this->load->Model('users_model');
        $data['tutor'] = $this->users_model->getTutorDataDetail($tutorId);
		$data['activeLink'] = 'Tutor';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/tutor/detailTutor.php',$data);
		$this->load->view('templates/footer.php');
	}
	public function loadEditTutor()
	{
		$tutorId = $_GET['id'];
		$this->load->Model('users_model');
        $data['tutor'] = $this->users_model->getTutorDataDetail($tutorId);
		$data['activeLink'] = 'Tutor';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/tutor/editTutor.php',$data);
		$this->load->view('templates/footer.php');
	}
	public function editTutor()
	{
		$tutorId = $_GET['id'];
		$this->load->helper('form');
		$firstname = $this->input->post("firstname");
		$lastname = $this->input->post("lastname");
		$userName = $this->input->post("username");
		$password = $this->input->post("password");
		$position = $this->input->post("position");
		$sEmail = $this->input->post("sEmail");
		$phone = $this->input->post("phone");
		$this->load->Model('users_model');
       	$this->users_model->editTutor($tutorId,$firstname,$lastname,$userName,$password,$position,$sEmail,$phone);
       	$data['tutor'] = $this->users_model->getTutorData($tutorId);
		$data['activeLink'] = 'Tutor';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/tutor/index.php',$data);
		$this->load->view('templates/footer.php');
	}
	public function deleteTutor()
	{
		$tutorId = $_GET['id'];
		$this->load->Model('users_model');
		$this->users_model->deleteTutor($tutorId);
		$this->load->helper('form');
		$this->load->Model('users_model');
        $data['tutor'] = $this->users_model->getTutorData();
		$data['activeLink'] = 'Tutor';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/tutor/index.php',$data);
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
		$this->load->helper('form');
		$this->load->Model('users_model');
		$data['company'] = $this->users_model->getCompanyData();
		$data['activeLink'] = 'supervisor';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/supervisor/createSupervisor.php');
		$this->load->view('templates/footer.php');
	}
	public function addSupervisor()
	{
		$this->load->helper('form');
		$firstname = $this->input->post("firstname");
		$lastname = $this->input->post("lastname");
		$username = $this->input->post("userName");
		$password = $this->input->post("password");
		$company = $this->input->post("company");
		$position = $this->input->post("position");
		$sEmail = $this->input->post("sEmail");
		$phone = $this->input->post("phone");
		$this->load->Model('users_model');
       	$this->users_model->addSupervisor($company,$firstname,$lastname,$username,$password,$position,$sEmail,$phone);
       	$data['supervisor'] = $this->users_model->viewSupervisor($sId);
		$data['activeLink'] = 'supervisor';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/supervisor/view.php',$data);
		$this->load->view('templates/footer.php');
	}
	public function viewSupervisor()
	{
		$sId = $_GET['id'];
		$this->load->Model('users_model');
		$data['supervisor'] = $this->users_model->viewSupervisor($sId);
		$data['activeLink'] = 'supervisor';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/supervisor/view.php',$data);
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
	    $data['student'] = $this->users_model->getStudentData();
		$data['activeLink'] = 'student';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/student/index.php',$data);
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