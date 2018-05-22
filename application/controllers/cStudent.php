<?php 
class cStudent extends CI_controller {
	public function index() 
	{
		$data['activeLink'] = 'Home Page';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/studentMenu.php',$data);
			// $this->load->view('index.phsp');
		$this->load->view('student/index.php',$data);
		$this->load->view('templates/footer.php');
	}
	public function worklog() 
	{
		$data['activeLink'] = 'work-log';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/studentMenu.php',$data);
			// $this->load->view('index.phsp');
		$this->load->view('student/worklog.php',$data);
		$this->load->view('templates/footer.php');
	}

	public function comment() 
	{
		$data['activeLink'] = 'Comment';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/studentMenu.php',$data);
			// $this->load->view('index.phsp');
		$this->load->view('student/comment',$data);
		$this->load->view('templates/footer.php');
	}
	public function calendar() 
	{
		$data['activeLink'] = 'Calendar';
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/studentMenu.php',$data);
		$this->load->view('student/calendarStu.php',$data);
			// $this->load->view('templates/footer.php');
	}

// select worklog report to show in interface
	public function weekWorklog()
	{
		$data['activeLink'] = 'work-log';
		$this->load->helper('form');
		$this->load->Model('m_worklog');
		$data['worklog'] = $this->m_worklog->weeklyWorklog();
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/studentMenu.php',$data);
		$this->load->view('student/worklog.php',$data);
		$this->load->view('student/editWorklog.php');
		$this->load->view('templates/footer.php');
	}
// insert report to DB
	public function weekReport()
	{
		$data['activeLink'] = 'work-log';
		$this->load->helper('form');
		$this->load->Model('m_worklog');
		// $data['worklog'] = $this->m_worklog->getReport();
		$this->load->view('templates/header.php',$data);
		$this->load->view('menu/studentMenu.php',$data);
		$this->load->view('student/worklog.php',$data);
		$this->load->view('student/insertReportWorklog.php');
		$this->load->view('templates/footer.php');
	}
	public function newReport()
	{
		$this->load->helper('form');
		$Date = $this->input->post("date");
		$startTime = $this->input->post("starttime");
		$endTime = $this->input->post("endtime");
		$activities = $this->input->post("activities");
		$Learner = $this->input->post("yourlearn");
		$Issoues = $this->input->post("issues");
		$Solution = $this->input->post("solution");
		$Todo = $this->input->post("todo");
		$Comment = $this->input->post("comment");
		$this->load->Model('m_worklog');
		
		$this->m_worklog->getReport($Date,$startTime,$endTime,$activities,$Learner,$Issoues,$Solution,$Todo,$Comment);
		redirect("cStudent/weekReport"); 
	}	
}
?>
