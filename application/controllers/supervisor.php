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
		// var_dump($studentId); die();
		$this->load->helper('form');
    	$this->load->Model('Supervisor_model');	
	    $data['studentInfo'] = $this->Supervisor_model->getQuestionnaireInfo($studentId);
	    $data['student'] = $this->Supervisor_model->getQuestionnaire($studentId);
	    $data['activeLink'] = 'questionnair';	
	    // var_dump($data); die();

	    $this->load->view('templates/header.php');
		$this->load->view('menu/supervisorMenu.php', $data);
		$this->load->view('supervisorDashboard/questionnair.php',$data);
		$this->load->view('templates/footer.php');		
	    
	}
	// ================================================================
	public function addQuestionnaire()
	{
		$stuid = $_GET['id'];
		var_dump($stuid); die();
		$this->load->helper('form');
		$this->load->library('form_validation');
	    $this->form_validation->set_rules('sex', 'gender', 'required'); 
	    $this->form_validation->set_rules('q1', 'question 1', 'required'); 
	    $this->form_validation->set_rules('major', 'major', 'required'); 
	    $this->form_validation->set_rules('q2', 'question 2', 'required'); 
	    $this->form_validation->set_rules('q3', 'question 3', 'required'); 
	    $this->form_validation->set_rules('q4', 'question 4', 'required'); 
	    $this->form_validation->set_rules('q5', 'question 5', 'required'); 
	    $this->form_validation->set_rules('q6', 'question 6', 'required'); 
	    $this->form_validation->set_rules('q7', 'question 7', 'required'); 
	    $this->form_validation->set_rules('q8', 'question 8', 'required'); 
	    $this->form_validation->set_rules('q9', 'question 9', 'required'); 
	    $this->form_validation->set_rules('q10', 'question 10', 'required'); 
	    $this->form_validation->set_rules('q11', 'question 11', 'required'); 
	    $this->form_validation->set_rules('q12', 'question 12', 'required'); 
	    $this->form_validation->set_rules('q13', 'question 13', 'required'); 
	    $this->form_validation->set_rules('q14', 'question 14', 'required'); 
	    $this->form_validation->set_rules('q15', 'question 15', 'required'); 
	    $this->form_validation->set_rules('q16', 'question 16', 'required'); 
	    $this->form_validation->set_rules('q17', 'question 17', 'required'); 

	    if ($this->form_validation->run() == FALSE ) {
	    	echo "Invalid input..."; 
	    }
	    else {
	    	
	        $sex = $this->input->post('sex');
	        $q1 = $this->input->post('q1');
	        $major = $this->input->post('major');
	        $q2 = $this->input->post('q2');// Yest/No question
	        $q3 = $this->input->post('q3');
	        $q4 = $this->input->post('q4');
	        $q5 = $this->input->post('q5');
	        $q6 = $this->input->post('q6');
	        $q7 = $this->input->post('q7');
	        $q8 = $this->input->post('q8');
	        $q9= $this->input->post('q9');
	        $q10= $this->input->post('q10');
	        $q11= $this->input->post('q11');
	        $q12= $this->input->post('q12');
	        $q13 = $this->input->post('q13');
	        $q14 = $this->input->post('q14');
	        $q15= $this->input->post('q15');
	        $q16 = $this->input->post('q16');
	        $q17 = $this->input->post('q17');

	        $data['activeLink'] = 'questionnaire';
	        $this->load->Model('Supervisor_model');
	        $data['studentData'] = $this->Supervisor_model->addQuestionnaire($stuid,$sex,$q1,$major,$q2,$q3,$q4,$q5,$q6,$q7,$q8,$q9,$q10,$q11,$q12,$q13,$q14,$q15,$q16,$q17);
	        $data['activeLink'] = 'questionnaire';
	        // var_dump($data); die();
	     	$this->load->view('templates/header.php');
	     	$this->load->view('menu/supervisorMenu.php' ,$data);
	     	$this->load->view('supervisorDashboard/index.php',$data);
	     	$this->load->view('templates/footer.php');
	    }
	}

	// ========================================================================
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
		$this->load->Model('users_model');
		$data['email'] = $this->users_model->mGetEmail();
		$data['activeLink'] = 'calendar';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/supervisorMenu.php',$data);
		$this->load->view('supervisorDashboard/calendar/calendar.php',$data);
		$this->load->view('templates/footer.php');
	}

	/* send email to someone*/
	public function sendMail(){
		$userEmail = $this->input->post('userEmail');
		$userPass = $this->input->post('password');
		 $config = array(
		  'protocol' => 'smtp',
		  'smtp_host' => 'ssl://smtp.googlemail.com',
		  'smtp_port' => 465,
		  'smtp_user' => $userEmail,
		  'smtp_pass' => $userPass,
		  'mailtype' => 'html',
		  'charset' => 'utf-8',
		  'wordwrap' => TRUE,
		  'newline' => "\r\n"
		 );
		$this->load->library('email',$config);

		$this->email->from($userEmail);
		$this->input->post('title');
		
		$this->email->to($this->input->post('email'));
		$this->email->subject($this->input->post('title'));
		$this->email->message($this->input->post('description'));
		if ($this->email->send()) {
			echo "successfully";
		}else{
			echo $this->email->print_debugger();
		}
	}

	Public function SupervisoraddEvent()
	{

		$result=$this->Calendar_model->sAddEvent();
		echo $result;
		$this->sendMail();
	}

}


?>