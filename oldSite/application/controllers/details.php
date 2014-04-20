<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* session_start(); gonna need an if satement to see if user is logged in then start the session*/


class Details extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('email');
		$this->load->helper(array('url','form'));
		$this->load->model('detail_model');

		/* always put constructs in ur php files it allows you to gain access on a global level and imports the file you want so the document has access to it */
	}


	public function index($num)
	{	if($num==0)
		{

			$num=1;
			$this->pullChoice($num);
		}
		else{

		$this->pullChoice($num);
	}
	
	}


	public function pullChoice($ancNum)
	{

		$info=$this->detail_model->information($ancNum);
		$infoD=$this->detail_model->informationDetails($ancNum);
		$infoT=$this->detail_model->informationTechUsed($ancNum);;
		$this->loadDetail($info,$infoD,$infoT);

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

	public function loadDetail($info,$infoD,$infoT)
	{

		$this->load->view('detail_view',array('dInfo'=>$info,'informD'=>$infoD,'informTech'=>$infoT));

	}


		

}

