<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	//Default constructor
	function __construct()
	{
		parent::__construct();
		log_message('debug', 'URI=' . $this->uri->uri_string());
	}

	public function index()
	{
		$this->load->Model('users_model');
		$data['supervisor'] = $this->users_model->suNumRow();
		$data['company'] = $this->users_model->CNumRow();
		$data['tutor'] = $this->users_model->TNumRow();
		$data['student'] = $this->users_model->sNumRow();
		$data['student_bar'] = $this->users_model->getCompanyName();
		$data['numstu'] = $this->users_model->getNumStu();
		$data['activeLink'] = 'company';
		$this->load->view('IF/template/header', $data);
		$this->load->view('menu/index', $data);
		$this->load->view('pages/index', $data);
		$this->load->view('IF/template/footer', $data);
	}	

	public function sendEmail()
	{
		$config = Array(
			$config['mailtype'] = 'html',
			$config['smtp_host'] = 'ssl://smtp.googlemail.com',
			$config['smtp_port'] = 465,
			$config['smtp_user'] = 'pnc.temporary.vc2018@passerellesnumeriques.org',
			$config['smtp_pass'] = 'Pnc!Wep2018?',
			$config['protocol'] = 'smtp',
			$config['charset'] = 'utf-8',
			$config['wordwrap'] = TRUE,
			$config['newline'] = "\r\n"
			);

		$this->load->library('email',$config);
		$this->load->library('parser');
		$this->email->from('pnc.temporary.vc2018@passerellesnumeriques.org', 'Support');
		$this->email->to('premmannpnc@gmail.com');
		$this->email->cc('');
		$this->email->bcc('');
		
		$this->email->subject('Test');
		$this->email->message('This is a test email');
		
		if ( ! $this->email->send())
		{
    		// Generate error
			echo "Email is not sent!!";
		}
		echo $this->email->print_debugger();
		
	}

}
