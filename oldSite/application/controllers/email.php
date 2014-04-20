<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* session_start(); gonna need an if satement to see if user is logged in then start the session*/


class Email extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();

$this->load->library('email');
		/* always put constructs in ur php files it allows you to gain access on a global level and imports the file you want so the document has access to it */
	}


	public function index()
	{	

		
		

		$this->load->library('email');
		$this->email->from('zero15xx@aol.com');
		$this->email->to('katosourai@gmail.com');
		$this->email->subject('hi tester');
		$this->email->message('go andre');
		$this->email->send();
		// if($this->email->send())
		// {
		// 		echo 'sent';
		// }
		
			show_error($this->email->print_debugger());
		
			
	}

}

