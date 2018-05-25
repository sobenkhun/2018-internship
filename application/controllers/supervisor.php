<?php

class supervisor extends CI_Controller {
	public function __construct() {
			parent::__construct();
			log_message('debug', 'URI=' . $this->uri->uri_string());
	}
	function index()
	{
		$this->load->helper('form');
		$this->load->Model('Supervisor_model');
		$data['student'] = $this->Supervisor_model->countStudent();
		$data['activeLink'] = 'Home Page';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/supervisorMenu.php',$data);
		$this->load->view('supervisorDashboard/index.php');
		$this->load->view('templates/footer.php');
	}
	function student()
	{
		$this->load->helper('form');
		$this->load->Model('Supervisor_model');
	    $data['student'] = $this->Supervisor_model->getDataStudentList();
	    $data['student'] = $this->Supervisor_model->getDataStudentList();
	    $data['activeLink'] = 'Student';
	    $data['activeLink'] = 'student';
	    // var_dump($data);
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/supervisorMenu.php',$data);
		$this->load->view('supervisorDashboard/student/index.php',$data);
		$this->load->view('templates/footer.php');
	}
	function studentProfile()
	{
		$studentId = $_GET['id'];
		$this->load->helper('form');
		$this->load->Model('Supervisor_model');
	    $data['student'] = $this->Supervisor_model->getDataStudentDetail($studentId);
	    $data['activeLink'] = 'Student';
	    // var_dump($data); die();
		$this->load->view('templates/header.php');
		$this->load->view('menu/supervisorMenu.php');
		$this->load->view('supervisorDashboard/student/studentProfile.php',$data);
		$this->load->view('templates/footer.php');
	}
	
	public function detailCompany()
	{
		$data['activeLink'] = 'Company';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/supervisorMenu.php',$data);
		$this->load->view('supervisorDashboard/student/studentProfile.php');
		$data['activeLink'] = 'student';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/supervisorMenu.php',$data);
		$this->load->view('supervisorDashboard/student/index.php',$data);
		$this->load->view('templates/footer.php');
	}
	function questionnaire()
	{
		$studentId = $_GET['id'];
		$this->load->helper('form');
    	$this->load->Model('Supervisor_model');	
	    $data['studentInfo'] = $this->Supervisor_model->getQuestionnaireInfo($studentId);
	    $data['student'] = $this->Supervisor_model->getQuestionnaire($studentId);
	    if (!$data['student']) {
	    	$data['student'] =  array('question0' => 0);
	    }
	    $data['activeLink'] = 'questionnair';	
	    $this->load->view('templates/header.php');
		$this->load->view('menu/supervisorMenu.php', $data);
		$this->load->view('supervisorDashboard/questionnair.php',$data);
		$this->load->view('templates/footer.php');		
	    
	}

	public function saveQuestionnaire()
	{
		$qid = $_GET['id'];
		$stuid = $_GET['stuId'];
		$this->load->helper('form');
		$sex = $this->input->post('sex');
	    $major = $this->input->post('major');
	    $q1 = $this->input->post('q1');
	    $q2 = $this->input->post('q2');
	    $q3 = $this->input->post('q3');
	    $q4 = $this->input->post('q4');
	    $q5 = $this->input->post('q5');
	    $q6 = $this->input->post('q6');
	    $q7 = $this->input->post('q7');
	    $q8 = $this->input->post('q8');
	    $q9 = $this->input->post('q9');
	    $q10= $this->input->post('q10');
	    $q11= $this->input->post('q11');
	    $q12= $this->input->post('q12');
	    $q13= $this->input->post('q13');
	    $q14= $this->input->post('q14');
	    $q15= $this->input->post('q15');
	    $q16= $this->input->post('q16');
	    $q17= $this->input->post('q17');
	    $this->load->Model('Supervisor_model');
	    $data['student'] = $this->Supervisor_model->getQuestionnaireInfo($stuid);
	    $data['student'] = $this->Supervisor_model->saveQuestionnaire($stuid,$sex,$major,$q1,$q2,$q3,$q4,$q5,$q6,$q7,$q8,$q9,$q10,$q11,$q12,$q13,$q14,$q15,$q16,$q17);	
	     $data['activeLink'] = 'questionnaire';
     	$this->load->view('templates/header.php');
     	$this->load->view('menu/supervisorMenu.php' ,$data);
     	$this->load->view('supervisorDashboard/index.php',$data);
     	$this->load->view('templates/footer.php');
	}
	function comment()
	{
		$data['activeLink'] = 'student';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/supervisorMenu.php',$data);
		$this->load->view('supervisorDashboard/student/comment.php',$data);
		$this->load->view('templates/footer.php');
	}
	function viewProfile()
	{
		$this->load->helper('form');
		$this->load->Model('Supervisor_model');
	    $data['student'] = $this->Supervisor_model->getDataCompleteQuestionnaire();
	    $data['activeLink'] = 'questionnair';
	    // var_dump($data);
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/supervisorMenu.php',$data);
		$this->load->view('supervisorDashboard/student/questionnairStudentList.php',$data);
		$this->load->view('templates/footer.php');
	}
	function calendar()
	{

		$data['activeLink'] = 'calendar';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/supervisorMenu.php',$data);
		$this->load->view('supervisorDashboard/calendar/calendar.php',$data);
		$this->load->view('templates/footer.php');
	}

}


?>