<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* session_start(); gonna need an if satement to see if user is logged in then start the session*/


class Email extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();


		/* always put constructs in ur php files it allows you to gain access on a global level and imports the file you want so the document has access to it */
	}


	public function index()
	{	

			

		$config = Array(

				'protocol'=>'smtp',
				'smtp_host'=>'smtp.gmail.com',
				'smtp_port'=>587,
				'smtp_user'=>'katosourai@gmail.com',
				'smtp_pass'=>'destiny15'

			);
		$this->load->library('email',$config);
		$this->email->initialize($config);

		// $this->load->library('email',$config);
		$this->email->from('katosourai@gmail.com');
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

