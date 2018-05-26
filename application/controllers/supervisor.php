<?php

class supervisor extends CI_Controller {
	public $data = array();
	public function __construct() {
			parent::__construct();
			log_message('debug', 'URI=' . $this->uri->uri_string());
			if ($this->session->loggIn == TRUE) {
			
		}else
		{
			redirect('connection/login');

		}
			$this->load->Model('Calendar_model');
			$this->load->Model('Supervisor_model');
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
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/supervisorMenu.php',$data);
		$this->load->view('supervisorDashboard/student/index.php',$data);
		$this->load->view('templates/footer.php');
	}
	function studentProfile()
	{
		$studentId = $_GET['id'];
		$this->load->helper(array('form', 'url'));
		$this->load->Model('Supervisor_model');
	    $data['student'] = $this->Supervisor_model->getDataStudentDetail($studentId);
	    $data['activeLink'] = 'student';
		$this->load->view('templates/header.php');
		$this->load->view('menu/supervisorMenu.php', $data);
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
	    $data['count'] = $this->Supervisor_model->countStudentQuestionnaire($studentId);
	    
	    if ($data['count']==2){
    	    echo "<script>
    	    	alert('There are no fields to generate a report');
    	    	window.location.href='viewProfile';  
    	    </script>"; 
    	    $data['activeLink'] = 'questionnaire';
	     	$this->load->view('templates/header.php');
	     	$this->load->view('menu/supervisorMenu.php', $data);
	     	$this->load->view('supervisorDashboard/questionnair.php');
	     	$this->load->view('templates/footer.php');

	    }else{
		    if (!$data['student']) {
		    	$data['student'] =  array('question0' => 0);
	        }

		    $data['activeLink'] = 'questionnair';	
		    $this->load->view('templates/header.php');
			$this->load->view('menu/supervisorMenu.php', $data);
			$this->load->view('supervisorDashboard/questionnair.php',$data);
			$this->load->view('templates/footer.php');		
	    }
	}

	public function saveQuestionnaire()
	{
		$qid = $_GET['id'];
		$stuid = $_GET['stuId'];
		$this->load->helper('form');
		$this->load->library('form_validation');
	    $this->form_validation->set_rules('sex', 'gender', 'required'); 
	    $this->form_validation->set_rules('q1', 'How likely is that you would recommend a PN intern ', 'required'); 
	    $this->form_validation->set_rules('major', 'What was the major of your intern at PNC', 'required'); 
	    $this->form_validation->set_rules('q2', 'Did your company use Linux operating system', 'required'); 
	    $this->form_validation->set_rules('q3', 'Did your company use the CISCO device', 'required'); 
	    $this->form_validation->set_rules('q4', 'Respect of working hours', 'required'); 
	    $this->form_validation->set_rules('q5', 'Information management skills (synthesis, attention to details, broad picture', 'required'); 
	    $this->form_validation->set_rules('q6', 'Communication', 'required'); 
	    $this->form_validation->set_rules('q7', 'Interest in learning, curiosity', 'required'); 
	    $this->form_validation->set_rules('q8', 'Leadership, team-work', 'required'); 
	    $this->form_validation->set_rules('q9', 'Critical thinking, problem solving, decision-making, logic, creativity', 'required'); 
	    $this->form_validation->set_rules('q10', 'Good relationship with coworkers', 'required'); 
	    $this->form_validation->set_rules('q11', 'Self-management (time, stress, priority, autonomy etc.', 'required'); 
	    $this->form_validation->set_rules('q12', 'Feel free to add any comments regarding the intern performance', 'required'); 
	    $this->form_validation->set_rules('q13', 'Writing documents and mails', 'required'); 
	    $this->form_validation->set_rules('q14', 'Speaking in meetings', 'required'); 
	    $this->form_validation->set_rules('q15', 'Researching information in English, reading documents', 'required'); 
	    $this->form_validation->set_rules('q16', 'Feel free to add any comments regarding the interns performance', 'required'); 
	    $this->form_validation->set_rules('q17', 'What skills would you have wished your PN intern had', 'required'); 
	    if ($this->form_validation->run() == FALSE) 
	    {
		    $this->load->Model('Supervisor_model');
		    $data['studentInfo'] = $this->Supervisor_model->getQuestionnaireInfo($stuid);
		    $data['student'] = $this->Supervisor_model->getQuestionnaire($stuid);
		    $data['activeLink'] = 'questionnaire';
	     	$this->load->view('templates/header.php');
	     	$this->load->view('menu/supervisorMenu.php' ,$data);
	     	$this->load->view('supervisorDashboard/questionnair.php',$data);
	     	$this->load->view('templates/footer.php');
	    }else{
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
		    $this->sendMailToSupervisor();	
	    }
		
	}
	/* send email to someone*/
	public function sendMailToSupervisor()
	{
		$this->load->library('email');
		$messages = "<h2>Hello, this is message for complete a questionnaire </h2>";
		$this->email->from('bunthean.mov@student.passerellesnumeriques.org', 'Supervisor');
		$this->email->to('pnc.temporary.vc2018@passerellesnumeriques.org', 'ERO Team');
		$this->email->subject("Complete student's questionnaire.");
		$this->email->message($messages);
		if ($this->email->send()) {
			return true;
		}else{
			return $this->email->print_debugger();;
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
	public function supervisorSendMail(){
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

		$this->email->to($this->input->post('email'));
		$this->email->subject($this->input->post('title'));
		$this->email->message($this->input->post('description'));
		if ($this->email->send()) {
			return TRUE;
		}else{
			echo $this->email->print_debugger();
		}
	}

	/*Add new event */
		Public function saddEvent()
		{
			$result=$this->Calendar_model->addEvent();
			echo $result;
			$this->supervisorSendMail();
		}

		/*Update Event */
		Public function updateEvent()
		{
			$result=$this->Calendar_model->supdateEvent();
			echo $result;
			$this->supervisorSendMail();
		}

		Public function sdeleteEvent()
		{
			$result=$this->Calendar_model->deleteEvent();
			echo $result;
		}
}
?>