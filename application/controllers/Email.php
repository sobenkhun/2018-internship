<?php 
class  Email extends CI_Controller {
 public function __construct() {
  parent::__construct();
}

function mail(){
 $config = array(
  'protocol' => 'smtp',
  'smtp_host' => 'smtp.gmail.com',
  'smtp_port' => 25,
  'smtp_user' => 'pnc.temporary.vc2018@passerellesnumeriques.org',
  'smtp_pass' => 'Pnc!Wep2018?',
  'charset' => 'utf-8',
  'wordwrap' => TRUE,
  'newline' => "\r\n"
);

 $this->load->library('email',$config);
 $this->email->set_newline("\r\n");
 $this->email->from('pnc.temporary.vc2018@passerellesnumeriques.org','Admin & Finance');
 $this->email->to('sun.meas@student.passerellesnumeriques.org');
 $this->email->subject('This is an email testing');
 $this->email->message('It is working . Greate!');

 if ($this->email->send()) 
 {
  echo "Your email has been send.";
}
else {
 show_error($this->email->print_debugger());    
}
}

}