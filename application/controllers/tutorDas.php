<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tutorDas extends CI_Controller {
	function __construct()
	{
			parent::__construct();
			log_message('debug', 'URI=' . $this->uri->uri_string());
	}

	function index()
	{

		$data['activeLink'] = 'Home Page';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/tutor.php',$data);
		$this->load->view('tutorDashboard/index.php');
		$this->load->view('templates/footer.php');
	}
	function studentDas()
	{
		$data['activeLink'] = 'student';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/tutor.php',$data);

		$this->load->view('tutorDashboard/student/index.php',$data);
		
		$this->load->view('templates/footer.php');
	}
	function companyDas()
	{
		// $data['activeLink'] = 'company';
		// $this->load->view('templates/header.php',$data);
		// $this->load->view('menu/tutor.php',$data);

		// $this->load->view('tutorDashboard/company/index.php',$data);
		
		// $this->load->view('templates/footer.php');

		$this->load->helper('form');
		$this->load->Model('tutor_model');
		$data['company'] = $this->tutor_model->selectCompany();
		$data['activeLink'] = 'company';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/tutor.php',$data);
		$this->load->view('tutorDashboard/company/index.php',$data);
		$this->load->view('templates/footer.php');

	}

	function tutorList()
	{
		$data['activeLink'] = 'tutor';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/tutor.php',$data);

		$this->load->view('tutorDashboard/tutor/index.php',$data);
		$this->load->view('templates/footer.php');
	}
	function tutorDta()
	{
		$data['activeLink'] = 'tutor';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/tutor.php',$data);

		$this->load->view('tutorDashboard/tutor/detail.php',$data);
		$this->load->view('templates/footer.php');
	}
	function barChartD()
	{
		$data['activeLink'] = 'company';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/tutor.php',$data);

		$this->load->view('tutorDashboard/company/barChart.php',$data);
		
		// $this->load->view('templates/footer.php');
	}
	function cDetailDas()
	{
		
		$companyId = $_GET['id'];
		$this->load->Model('tutor_model');
		$data['company'] = $this->tutor_model->getCompanyDetail($companyId);
		$data['activeLink'] = 'company';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/tutor.php',$data);
		$this->load->view('tutorDashboard/company/detail.php',$data);
		$this->load->view('templates/footer.php');

	}


	function detailStudentDas()
	{
		$data['activeLink'] = 'student';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/tutor.php',$data);

		$this->load->view('tutorDashboard/student/sDetail.php',$data);
		
		$this->load->view('templates/footer.php');

	}


	function supervisorDas()
	{
		$data['activeLink'] = 'supervisor';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/tutor.php',$data);
		$this->load->view('tutorDashboard/supervisor/index.php',$data);
		$this->load->view('templates/footer.php');
	}
	function viewSupervisorDas()
	{
		$data['activeLink'] = 'supervisor';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/tutor.php',$data);

		$this->load->view('tutorDashboard/supervisor/detail.php',$data);
		
		$this->load->view('templates/footer.php');
	}
	function listCommStuDas()
	{
		$data['activeLink'] = 'comment';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/tutor.php',$data);

		$this->load->view('tutorDashboard/comment/index.php',$data);
		
		$this->load->view('templates/footer.php');
	}

	function CommStuDas()
	{
		$data['activeLink'] = 'comment';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/tutor.php',$data);

		$this->load->view('tutorDashboard/comment/commentStudent.php',$data);
		$this->load->view('templates/footer.php');
	}
	function addCommStuD()
	{
		$data['activeLink'] = 'comment';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/tutor.php',$data);

		$this->load->view('tutorDashboard/comment/addComment.php',$data);
		$this->load->view('templates/footer.php');
	}
	function viewWorkLog()
	{
		$data['activeLink'] = 'work-log';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/tutor.php',$data);

		$this->load->view('tutorDashboard/student/viewWorkLog.php',$data);
		$this->load->view('templates/footer.php');
	}
	function calendar()
	{
		$data['activeLink'] = 'calendar';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/tutor.php',$data);

		$this->load->view('tutorDashboard/calendar/index.php',$data);
		$this->load->view('templates/footer.php');
		
		}
		
	
	function questionnair()
	{
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/tutor.php',$data);

		$this->load->view('tutorDashboard/supervisor/questionnair.php',$data);
		$this->load->view('templates/footer.php');

		
		
		
	}

}



?>