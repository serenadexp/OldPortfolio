<?php 

class Detail_model extends CI_Controller {

	

	 function __construct()
	{
		parent::__construct();	
		$this->load->database();
	}
	
	


	function information($aNum)
	{

		$query=$this->db->query("
				
			SELECT DISTINCT project_Name,concept_Info,design_Info,development_Info,prod_Img_Thumb,prod_Img_Full,desc_Title
			FROM projects
			JOIN projectInformation
			on projectInformation.project_Info_Id = projects.project_Info_Id
			JOIN projectProdImg
			on projectProdImg.prod_Assign_Img_Num = projects.prod_Img_Id
			WHERE project_Id=$aNum AND prod_Assign_Img_Num='$aNum';
		");

		return $query;
	}


	function informationDetails($aNum)
	{
		
		$query=$this->db->query("
			
			SELECT DISTINCT project_Name,final_Img_Thumb,final_Img_Full,desc_Title
			FROM projects
			JOIN projectInformation
			on projectInformation.project_Info_Id = projects.project_Info_Id
			JOIN projectFinalImg
			on projectFinalImg.project_Assign_Img_Num= projects.project_Final_Id
			WHERE project_Id='$aNum' AND project_Assign_Img_Num='$aNum';
		");

		return $query;
	}
	

	
	function informationTechUsed($aNum)
	{
		
		$query=$this->db->query("
			SELECT DISTINCT project_Name,used_Tech,img_Names
			FROM projects
			JOIN projectInformation
			on projectInformation.project_Info_Id = projects.project_Info_Id
			JOIN projectTechnologyUsed
			on projectTechnologyUsed.assign_Tech_Num= projects.used_Tech_Id
			WHERE project_Id='$aNum' AND assign_Tech_Num='$aNum';
			
		");

		return $query;
	}
}

?>