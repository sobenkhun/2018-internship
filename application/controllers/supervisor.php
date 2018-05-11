<?php

class supervisor extends CI_Controller {
	function index()
	{
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
	    $data['activeLink'] = 'Company';
	    // var_dump($data);
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/supervisorMenu.php',$data);
		$this->load->view('supervisorDashboard/student/index.php',$data);
		$this->load->view('templates/footer.php');
	}
	function profile()
	{
		$this->load->helper('form');
		$this->load->Model('Supervisor_model');
	    $data['studentProfile'] = $this->Supervisor_model->getDataSudentDetail();
	    $data['activeLink'] = 'Company';
	    var_dump($data);
		// $this->load->view('templates/header.php',$data);
		// $this->load->view('menu/supervisorMenu.php',$data);
		// $this->load->view('supervisorDashboard/student/studentProfile.php',$data);
		// $this->load->view('templates/footer.php');
	}
	// function student()
	// {
	// 	$this->load->view('templates/header.php');
	// 	$this->load->view('menu/supervisorMenu.php');
	// 	$this->load->view('supervisorDashboard/student/index.php');
	// 	$this->load->view('templates/footer.php');
	// }
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
	function questionnair()
	{
		$data['activeLink'] = 'questionnair';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/supervisorMenu.php',$data);
		$this->load->view('supervisorDashboard/questionnair.php',$data);
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
		// $this->load->view('templates/header.php');
		// $this->load->view('menu/supervisorMenu.php');
		// $this->load->view('supervisorDashboard/student/questionnairStudentList.php');
		// $this->load->view('templates/footer.php');

			$this->load->helper('form');
		$this->load->Model('Supervisor_model');
	    $data['student'] = $this->Supervisor_model->getDataCompleteQuestionnaire();
	    $data['activeLink'] = 'Student';
	    // var_dump($data);
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/supervisorMenu.php',$data);
		$this->load->view('supervisorDashboard/student/questionnairStudentList.php',$data);
	}
	// function profile()
	// {
	// 	$data['activeLink'] = 'student';
	// 	$this->load->view('templates/header.php',$data);
	// 	$this->load->view('menu/supervisorMenu.php',$data);
	// 	$this->load->view('supervisorDashboard/student/studentProfile.php',$data);
	// 	$this->load->view('templates/footer.php');
	// }
	// function profile()
	// {
	// 	$this->load->view('templates/header.php');
	// 	$this->load->view('menu/supervisorMenu.php');
	// 	$this->load->view('supervisorDashboard/student/studentProfile.php');
	// 	$this->load->view('templates/footer.php');
	// }
	function calendar()
	{
		$data['activeLink'] = 'calendar';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/supervisorMenu.php',$data);
		$this->load->view('supervisorDashboard/calendar/calendar.php',$data);
		// $this->load->view('templates/footer.php');
	}
}


?>