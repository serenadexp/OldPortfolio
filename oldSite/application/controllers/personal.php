<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* session_start(); gonna need an if satement to see if user is logged in then start the session*/


class Personal extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('email');
		$this->load->helper(array('url','form'));
		

		/* always put constructs in ur php files it allows you to gain access on a global level and imports the file you want so the document has access to it */
	}


	public function index()
	{	
		
		$this->load->view('personal_view');
		
	}
public function emailSend()
	{
		
		
		$name=$_GET['firstLast'];
		$email=$_GET['email'];
		$subject=$_GET['subject'];
		$message=$_GET['message'];

		$this->email->set_newline('\r\n');
		$this->email->from('zero15xx@aol.com');
		$this->email->to('katosourai@gmail.com');
		$this->email->subject($subject);
		$this->email->message('This Is The Senders Name: '.$name.' The Message: '.$message.' This Is The Senders Email Address: '.$email);
		$this->email->send();
		
		var_dump($this->email->print_debugger());
	}
	

	
	

}

