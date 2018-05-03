<?php

class tutorDas extends CI_Controller {

	function index()
	{
		$this->load->view('IF/template/header.php');
		$this->load->view('IF/menu/tutor.php');
		$this->load->view('IF/tutorDashboard/index.php');
		
		$this->load->view('IF/template/footer.php');
	}
	function studentDas()
	{
		$this->load->view('IF/template/header.php');
		$this->load->view('IF/menu/tutor.php');
		$this->load->view('IF/tutorDashboard/student/index.php');
		
		$this->load->view('IF/template/footer.php');
	}
	function companyDas()
	{
		$this->load->view('IF/template/header.php');
		$this->load->view('IF/menu/tutor.php');
		$this->load->view('IF/tutorDashboard/company/index.php');
		
		$this->load->view('IF/template/footer.php');
	}
	function barChartDas()
	{
		$this->load->view('IF/template/header.php');
		$this->load->view('IF/menu/tutor.php');
		$this->load->view('IF/tutorDashboard/company/barChart.php');
		
		$this->load->view('IF/template/footer.php');
	}
	function cDetailDas()
	{
		$this->load->view('IF/template/header.php');
		$this->load->view('IF/menu/tutor.php');
		$this->load->view('IF/tutorDashboard/company/detail.php');
		
		$this->load->view('IF/template/footer.php');
	}

	function detailStudentDas()
	{
		$this->load->view('IF/template/header.php');
		$this->load->view('IF/menu/tutor.php');
		$this->load->view('IF/tutorDashboard/student/sDetail.php');
		
		$this->load->view('IF/template/footer.php');
	}


	function supervisorDas()
	{
		$this->load->view('IF/template/header.php');
		$this->load->view('IF/menu/tutor.php');
		$this->load->view('IF/tutorDashboard/supervisor/index.php');
		
		$this->load->view('IF/template/footer.php');
	}
	function viewSupervisorDas()
	{
		$this->load->view('IF/template/header.php');
		$this->load->view('IF/menu/tutor.php');
		$this->load->view('IF/tutorDashboard/supervisor/detail.php');
		
		$this->load->view('IF/template/footer.php');
	}
	function listCommStuDas()
	{
		$this->load->view('IF/template/header.php');
		$this->load->view('IF/menu/tutor.php');
		$this->load->view('IF/tutorDashboard/comment/index.php');
		
		$this->load->view('IF/template/footer.php');
	}

	function CommStuDas()
	{
		$this->load->view('IF/template/header.php');
		$this->load->view('IF/menu/tutor.php');
		$this->load->view('IF/tutorDashboard/comment/commentStudent.php');
		
		$this->load->view('IF/template/footer.php');
	}

	function calendar()
	{
		$this->load->view('IF/template/header.php');
		$this->load->view('IF/menu/tutor.php');
		$this->load->view('IF/tutorDashboard/calendar/index.php');
		// $this->load->view('IF/template/footer.php');
		
		//  
		
	}

}


?>