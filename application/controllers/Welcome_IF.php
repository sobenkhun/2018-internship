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
		$company = $this->input->post("company");
		$phone = $this->input->post("phone");
		$this->load->Model('users_model');
       	$this->users_model->addTutor($company,$firstname,$lastname,$username,$password,$position,$sEmail,$phone);
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
		$data['company'] = $this->users_model->getCompanyData();
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
		$company = $this->input->post("company");
		$phone = $this->input->post("phone");
		$this->load->Model('users_model');
       	$this->users_model->editTutor($tutorId,$company,$firstname,$lastname,$userName,$password,$position,$sEmail,$phone);
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
		$data['student'] = $this->users_model->getSuStudent();
		$data['activeLink'] = 'supervisor';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/supervisor/createSupervisor.php',$data);
		$this->load->view('templates/footer.php');
	}
	public function addSupervisor()
	{
		$this->load->helper('form');
		$firstname = $this->input->post("firstname");
		$lastname = $this->input->post("lastname");
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$company = $this->input->post("company");
		$student = $this->input->post("student");
		$this->load->Model('users_model');
		$studntId = $this->users_model->getStuId($student);
		$position = $this->input->post("position");
		$sEmail = $this->input->post("email");
		$phone = $this->input->post("phone");
		$this->load->Model('users_model');
       	$this->users_model->addSupervisor($company,$studntId,$firstname,$lastname,$username,$password,$position,$sEmail,$phone);
       	$this->load->helper('form');
		$this->load->Model('users_model');
        $data['supervisor'] = $this->users_model->getSupervisorData();
		$data['activeLink'] = 'supervisor';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/supervisor/index.php');
		$this->load->view('templates/footer.php');
	}
	public function deleteSupervisor()
	{
		$suId = $_GET['id'];
		$this->load->Model('users_model');
		$this->users_model->deleteSupervisor($suId);
		$data['supervisor'] = $this->users_model->getSupervisorData();
		$data['activeLink'] = 'supervisor';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/supervisor/index.php');
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
	public function loadEditSupervisor()
	{
		$suId = $_GET['id'];
		$this->load->helper('form');
		$this->load->Model('users_model');
		$data['suDetail'] = $this->users_model->suDetail($suId);
		$data['company'] = $this->users_model->getCompanyData();
		$data['student'] = $this->users_model->getSuStudent();
		$data['activeLink'] = 'supervisor';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/supervisor/edit.php');
		$this->load->view('templates/footer.php');
	}
	public function editSupervisor()
	{
		$suId = $_GET['id'];
		$this->load->helper('form');
		$firstname = $this->input->post("firstname");
		$lastname = $this->input->post("lastname");
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$company = $this->input->post("company");
		$student = $this->input->post("student");
		$this->load->Model('users_model');
		$studntId = $this->users_model->getStuId($student);
		$position = $this->input->post("position");
		$sEmail = $this->input->post("email");
		$phone = $this->input->post("phone");
		$this->users_model->editSupervisor($suId,$company,$studntId,$firstname,$lastname,$username,$password,$position,$sEmail,$phone);
        $data['supervisor'] = $this->users_model->getSupervisorData();
		$data['activeLink'] = 'supervisor';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/supervisor/index.php',$data);
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
	public function viewStudentData()
	{
		$this->load->helper('form');
		$stuId = $_GET['id'];
		$this->load->Model('users_model');
		$data['student'] = $this->users_model->viewStudentData($stuId);
		$data['activeLink'] = 'student';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/student/viewstudent.php');
		$this->load->view('templates/footer.php');
	}
	public function updateStudent()
	{
		$this->load->helper('form');
		$stuId = $_GET['id'];
		$this->load->Model('users_model');
		$data['sSupervisor'] = $this->users_model->getSupervisor(); 
		$data['student'] = $this->users_model->viewStudentData($stuId);
		$data['activeLink'] = 'student';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/student/editstudent.php');
		$this->load->view('templates/footer.php');
	}
	public function editStudent()
	{
		$this->load->helper('form');
		$stuId = $_GET['id'];
		$firstname = $this->input->post("firstname");
		$lastname = $this->input->post("lastname");
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$supervisor = $this->input->post("supervisor");
		$phone = $this->input->post("phone");
		$batch = $this->input->post("batch");
		$year = $this->input->post("year");
		$peremail = $this->input->post("peremail");
		$schoolemail = $this->input->post("schoolemail");
		$this->load->Model('users_model');
		$this->users_model->editStudent($stuId,$firstname,$lastname,$username,$password,$supervisor,$phone,$batch,$year,$peremail,$schoolemail);
		$data['student'] = $this->users_model->getStudentData();
		$data['activeLink'] = 'student';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/student/index.php',$data);
		$this->load->view('templates/footer.php');
	}
	public function addStudent()
	{
		$this->load->helper('form');
		$this->load->Model('users_model');
		$data['sSupervisor'] = $this->users_model->getSupervisor();
		$data['activeLink'] = 'student';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/student/addstudent' );
		$this->load->view('templates/footer.php');
	}
	public function newStudent()
	{
		$this->load->helper('form');
		$firstname = $this->input->post("firstname");
		$lastname = $this->input->post("lastname");
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$supervisor = $this->input->post("supervisor");
		$phone = $this->input->post("phone");
		$batch = $this->input->post("batch");
		$year = $this->input->post("year");
		$peremail = $this->input->post("peremail");
		$schoolemail = $this->input->post("schoolemail");
		$this->load->Model('users_model');
		$this->users_model->newStudent($firstname,$lastname,$username,$password,$supervisor,$phone,$batch,$year,$peremail,$schoolemail);
		$this->load->helper('form');
		$this->load->Model('users_model');
	    $data['student'] = $this->users_model->getStudentData();
		$data['activeLink'] = 'student';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/student/index.php',$data);
		$this->load->view('templates/footer.php');
	}
	public function deleteStudent()
	{
		$stuId = $_GET['id'];
		$this->load->Model('users_model');
		$this->users_model->deleteStudent($stuId);
	    $data['student'] = $this->users_model->getStudentData();
		$data['activeLink'] = 'student';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/index.php',$data);
		$this->load->view('pages/student/index.php',$data);
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