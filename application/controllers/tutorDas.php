<?php

class tutorDas extends CI_Controller {

	function index()
	{
		$this->load->view('templates/header.php');
		$this->load->view('menu/tutor.php');
		$this->load->view('tutorDashboard/index.php');
		$this->load->view('templates/footer.php');
	}
	function studentDas()
	{
		$data['activeLink'] = 'student';
		$this->load->view('templates/header.php');
		$this->load->view('menu/tutor.php');
		$this->load->view('tutorDashboard/student/index.php');
		
		$this->load->view('templates/footer.php');
	}
	function companyDas()
	{
		$data['activeLink'] = 'company';
		$this->load->view('templates/header.php');
		$this->load->view('menu/tutor.php');
		$this->load->view('tutorDashboard/company/index.php');
		
		$this->load->view('templates/footer.php');
	}
	function tutorList()
	{
		$data['activeLink'] = 'tutor';
		$this->load->view('templates/header.php');
		$this->load->view('menu/tutor.php');
		$this->load->view('tutorDashboard/tutor/index.php');
		$this->load->view('templates/footer.php');
	}
	function tutorDtail()
	{
		$data['activeLink'] = 'tutor';
		$this->load->view('templates/header.php');
		$this->load->view('menu/tutor.php');
		$this->load->view('tutorDashboard/tutor/detail.php');
		$this->load->view('templates/footer.php');
	}
	function barChartDas()
	{
		$data['activeLink'] = 'company';
		$this->load->view('templates/header.php');
		$this->load->view('menu/tutor.php');
		$this->load->view('tutorDashboard/company/barChart.php');
		
		// $this->load->view('templates/footer.php');
	}
	function cDetailDas()
	{
		$data['activeLink'] = 'company';
		$this->load->view('templates/header.php');
		$this->load->view('menu/tutor.php');
		$this->load->view('tutorDashboard/company/detail.php');
		
		$this->load->view('templates/footer.php');
	}

	function detailStudentDas()
	{
		$data['activeLink'] = 'student';
		$this->load->view('templates/header.php');
		$this->load->view('menu/tutor.php');
		$this->load->view('tutorDashboard/student/sDetail.php');
		
		$this->load->view('templates/footer.php');
	}


	function supervisorDas()
	{
		$data['activeLink'] = 'supervisor';
		$this->load->view('templates/header.php');
		$this->load->view('menu/tutor.php');
		$this->load->view('tutorDashboard/supervisor/index.php');
		
		$this->load->view('templates/footer.php');
	}
	function viewSupervisorDas()
	{
		$data['activeLink'] = 'supervisor';
		$this->load->view('templates/header.php');
		$this->load->view('menu/tutor.php');
		$this->load->view('tutorDashboard/supervisor/detail.php');
		
		$this->load->view('templates/footer.php');
	}
	function listCommStuDas()
	{
		$data['activeLink'] = 'comment';
		$this->load->view('templates/header.php');
		$this->load->view('menu/tutor.php');
		$this->load->view('tutorDashboard/comment/index.php');
		
		$this->load->view('templates/footer.php');
	}

	function CommStuDas()
	{
		$data['activeLink'] = 'comment';
		$this->load->view('templates/header.php');
		$this->load->view('menu/tutor.php');
		$this->load->view('tutorDashboard/comment/commentStudent.php');
		$this->load->view('templates/footer.php');
	}
	function addCommStuDas()
	{
		$data['activeLink'] = 'comment';
		$this->load->view('templates/header.php');
		$this->load->view('menu/tutor.php');
		$this->load->view('tutorDashboard/comment/addComment.php');
		$this->load->view('templates/footer.php');
	}

	function viewWorkLog()
	{
		$data['activeLink'] = 'work-log';
		$this->load->view('templates/header.php');
		$this->load->view('menu/tutor.php');
		$this->load->view('tutorDashboard/student/viewWorkLog.php');
		$this->load->view('templates/footer.php');
	}

	function calendar()
	{
		$data['activeLink'] = 'calendar';
		$this->load->view('templates/header.php');
		$this->load->view('menu/tutor.php');
		$this->load->view('tutorDashboard/calendar/index.php');
		// $this->load->view('templates/footer.php');
		
		//  
		
	}
	function questionnair()
	{
		$this->load->view('templates/header.php');
		$this->load->view('menu/tutor.php');
		$this->load->view('tutorDashboard/supervisor/questionnair.php');
		$this->load->view('templates/footer.php');
		
		//  
		
	}

}


?>