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
		$this->load->view('templates/header.php');
		$this->load->view('menu/tutor.php');
		$this->load->view('tutorDashboard/student/index.php');
		
		$this->load->view('templates/footer.php');
	}
	function companyDas()
	{
		$this->load->view('templates/header.php');
		$this->load->view('menu/tutor.php');
		$this->load->view('tutorDashboard/company/index.php');
		
		$this->load->view('templates/footer.php');
	}
	function tutorList()
	{
		$this->load->view('templates/header.php');
		$this->load->view('menu/tutor.php');
		$this->load->view('tutorDashboard/tutor/index.php');
		$this->load->view('templates/footer.php');
	}
	function tutorDtail()
	{
		$this->load->view('templates/header.php');
		$this->load->view('menu/tutor.php');
		$this->load->view('tutorDashboard/tutor/detail.php');
		$this->load->view('templates/footer.php');
	}
	function barChartDas()
	{
		$this->load->view('templates/header.php');
		$this->load->view('menu/tutor.php');
		$this->load->view('tutorDashboard/company/barChart.php');
		
		// $this->load->view('templates/footer.php');
	}
	function cDetailDas()
	{
		$this->load->view('templates/header.php');
		$this->load->view('menu/tutor.php');
		$this->load->view('tutorDashboard/company/detail.php');
		
		$this->load->view('templates/footer.php');
	}

	function detailStudentDas()
	{
		$this->load->view('templates/header.php');
		$this->load->view('menu/tutor.php');
		$this->load->view('tutorDashboard/student/sDetail.php');
		
		$this->load->view('templates/footer.php');
	}


	function supervisorDas()
	{
		$this->load->view('templates/header.php');
		$this->load->view('menu/tutor.php');
		$this->load->view('tutorDashboard/supervisor/index.php');
		
		$this->load->view('templates/footer.php');
	}
	function viewSupervisorDas()
	{
		$this->load->view('templates/header.php');
		$this->load->view('menu/tutor.php');
		$this->load->view('tutorDashboard/supervisor/detail.php');
		
		$this->load->view('templates/footer.php');
	}
	function listCommStuDas()
	{
		$this->load->view('templates/header.php');
		$this->load->view('menu/tutor.php');
		$this->load->view('tutorDashboard/comment/index.php');
		
		$this->load->view('templates/footer.php');
	}

	function CommStuDas()
	{
		$this->load->view('templates/header.php');
		$this->load->view('menu/tutor.php');
		$this->load->view('tutorDashboard/comment/commentStudent.php');
		$this->load->view('templates/footer.php');
	}
	function addCommStuDas()
	{
		$this->load->view('templates/header.php');
		$this->load->view('menu/tutor.php');
		$this->load->view('tutorDashboard/comment/addComment.php');
		$this->load->view('templates/footer.php');
	}

	function viewWorkLog()
	{
		$this->load->view('templates/header.php');
		$this->load->view('menu/tutor.php');
		$this->load->view('tutorDashboard/student/viewWorkLog.php');
		$this->load->view('templates/footer.php');
	}

	function calendar()
	{
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