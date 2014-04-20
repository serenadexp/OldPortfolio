<?php 

class Home_model extends CI_Controller {

	

	 function __construct()
	{
		parent::__construct();	
		$this->load->database();
	}
	
	


	function subInfo()
	{
		

		$query=$this->db->query("
			SELECT DISTINCT project_Name,sub_Info,used_Tech,img_Names
			FROM projects 
			JOIN projectSubInfo
			on projectSubInfo.project_Sub_Id = projects.project_Sub_Id
			JOIN projectTechnologyUsed
			on projectTechnologyUsed.assign_Tech_Num =projects.project_Tech_Id
			WHERE project_Id=1 AND assign_Tech_Num =1 LIMIT 6;
			");

		return $query;
	}
	
	
	function smallInformation($numRel)
	{

		$query=$this->db->query("
			SELECT DISTINCT project_Name,sub_Info,used_Tech,img_Names
			FROM projects 
			JOIN projectSubInfo
			on projectSubInfo.project_Sub_Id = projects.project_Sub_Id
			JOIN projectTechnologyUsed
			on projectTechnologyUsed.assign_Tech_Num =projects.project_Tech_Id
			WHERE project_Id=$numRel AND assign_Tech_Num =$numRel LIMIT 6;
			");

		return $query->result_object();
	}
	
	
}

?>