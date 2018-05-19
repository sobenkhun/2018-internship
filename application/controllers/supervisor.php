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
	    $data['student'] = $this->Supervisor_model->getQuestionnaire($studentId);
	    $data['activeLink'] = 'questionnair';
	    // var_dump($data); die();
		$this->load->view('templates/header.php');
		$this->load->view('menu/supervisorMenu.php', $data);
		$this->load->view('supervisorDashboard/questionnair.php',$data);
		$this->load->view('templates/footer.php');
	}
	function addQuestionnaire()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

	    $this->form_validation->set_rules('sex', 'gender', 'required'); 
	    $this->form_validation->set_rules('q1', 'question 1', 'required'); 
	    $this->form_validation->set_rules('major', 'major', 'required'); 
	    $this->form_validation->set_rules('q2', 'question 2', 'required'); 
	    $this->form_validation->set_rules('q3', 'question 3', 'required'); 

	    if ($this->form_validation->run()) {
	    	    $sex = $this->input->post('sex');
	    	     $q1 = $this->input->post('q1');
	    	      $major = $this->input->post('major');
	    	      $q2 = $this->input->post('q2');// Yest/No question
	    	      $q3 = $this->input->post('q3');

	    	    $this->load->Model('Supervisor_model');
	    	    $data['student'] = $this->Supervisor_model->addQuestionnaire($sex, $q1, $major,$q2,$q3);
	    	    $data['activeLink'] = 'questionnaire';
	    	    // var_dump($data); die();
	    		$this->load->view('templates/header.php');
	    		$this->load->view('menu/supervisorMenu.php' ,$data);
	    		$this->load->view('supervisorDashboard/index.php',$data);
	    		$this->load->view('templates/footer.php');
	    }
	    else {
	     echo "has error";
            
	    }
		
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