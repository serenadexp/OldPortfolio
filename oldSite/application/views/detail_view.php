<!DOCTYPE html>
<html>
	<head>
		<title>Andre Allen Web Developer & Designer</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>  
 		<link href='../../img/portIco.png' rel='icon' type='image/png'/>
 		<link rel="stylesheet" href="../../css/reset.css" type="text/css"/>
 		<link rel="stylesheet" href="../../css/webDetail.css" type="text/css"/> 
 		<link rel="stylesheet" href="../../css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
	
 		
</head>
	<body>
	<div id="contact" class="contactHide">
		<div id="headContact">
			<p class="contactHeadFnt">Interested In Reaching Out To Me</p>
		</div><!-- closed headContact -->
		<div id="titlesContact">
			<form action="" method="post">
				<input class="inputStyle inputFnt inputColor" id="firstLast" type="text" name="firstLast" placeholder="Your First & Last Name"/>
				<input class="inputStyle inputFnt inputColor" id="email" type="text" name="email" placeholder="Your Email"/>
				<input class="inputStyle inputFnt inputColor" id="subject" type="text" name="subject" placeholder="Subject Title"/>
			
		</div><!-- closed titlesContact -->
		<div id="messageContact">
				<textarea class="inputFnt inputColor" id="subject" type="text" name="message" placeholder="Place Message Here"></textarea>

				<button class="sendBtnFnt sendBtnStyle" id="sendDetailBtn" type="submit">Send</button>
			</form><!-- closed form -->
		</div><!-- closed messageContact -->
	</div><!-- closed contact -->
	
		<div id="wrapper">
			<div id="header">
				<div id="homeReturn"><h1 title="Andre Allen Web Developer and Designer" class="txtInd"><?php echo anchor('home','Andre Allen</br>Web Developer <span class="andColor">&</span> Designer','class="anc nameFnt"')?></h1>
				</div><!-- closed homeReturn -->
				<div id="navHolder"><div class="warnHide warnFnt" id="warn"><p>Please Fill Out All Fields</p></div><!-- closed warn -->
					<ul id="nav">
						<li id="ancWork" class="bott"><?php echo anchor('home','My Work',array('class'=>"anc navFnt navWork",'alt'=>'My Work','title'=>'My Work')) ?></li>
						<li id="ancPersonal"><?php echo anchor('personal','Personal',array('class'=>"anc navFnt navPers",'alt'=>'Personal','title'=>'Personal')) ?></li>
						<li id="ancContact"><a class="anc navFnt navCont" title="Contact" alt="Contact" href="#">Contact</a></li>
					</ul>
				</div><!-- closed navHolder -->
			</div><!-- closed header -->
			<div id="projectName">
				 <?php foreach($dInfo->result() as $infoDetails):
						$projectName=$infoDetails->project_Name;
						$projectConcept=$infoDetails->concept_Info;
						$projectDesign=$infoDetails->design_Info;
						$projectDevelopment=$infoDetails->development_Info;		
					?>	
				<?php endforeach;?>

					<div id="finalScreens">
					<p class="projectFnt"><?php echo $projectName; ?></p>
						<ul>
				<?php foreach($informD->result() as $infoDetails):
					$projectFinal=$infoDetails->final_Img_Thumb;
					$projectFinalFull=$infoDetails->final_Img_Full;
					$projectFinalNames=$infoDetails->desc_Title;
				?>
						<li class="picBorder"><a href="../../<?php echo $projectFinalFull;?>" rel="prettyPhoto[final]"><img class="imgBlock" src="../../<?php echo $projectFinal;?>" alt="<?php echo $projectFinalNames;?>"/></a></li>
		
				<?php endforeach;?>	
						
						</ul>
					</div><!--closed finalScreens -->
			</div><!--closed projectName -->
			<div id="projectDetails">
				<div id="transDetail"></div>
				<p class="threeCoresFnt txtInd">The Concept</p>
				<p class="describeFnt txtInd"><?php echo $projectConcept;?></p>
				<p class="threeCoresFnt txtInd">Design</p>
				<p class="describeFnt txtInd"><?php echo $projectDesign;?></p>
			<p class="threeCoresFnt txtInd">Development</p>
			<p class="describeFnt txtInd"><?php echo $projectDevelopment;?></p>
			</div><!--closed projectDetails -->
			<div id="technologyUsed">
				<p class="headDetailFnt">Technology Used</p>
				<div id="techDetailLogo">
					<ul id="detailLogos">
					<?php foreach($informTech->result() as $infoDetails):
					$projectTech=$infoDetails->used_Tech;
					$projectTechNames=$infoDetails->img_Names;
					
					?>
					<li><img title="<?php echo $projectTechNames;?>" alt="<?php echo $projectTechNames;?>" src="../../<?php echo $projectTech;?>"/></li>
					<?php endforeach;?>	
						
					
					</ul>	
				</div>	<!--closed techDetailLogos -->
			</div><!-- closed technologyUsed -->
			<div id="productionScreens">
				<p class="headDetailFnt">Production Screens</p>
				<div id="productionScrHolder">
					<ul>
					<?php foreach($dInfo->result() as $infoDetails):
					$projectProd=$infoDetails->prod_Img_Thumb;
					$projectProdTitle=$infoDetails->desc_Title;
					$projectProdFull=$infoDetails->prod_Img_Full;
					?>
						<li class="picBorder"><a href="../../<?php echo $projectProdFull;?>" rel="prettyPhoto[production]"><img class="imgBlock" src="../../<?php echo $projectProd; ?>" alt="<?php echo $projectProdTitle; ?>"/></a></li>
					<?php endforeach;?>	
					</ul>
				
				
				</div><!-- closed productionScrHolder -->
			</div><!--closed productionScreens -->
			<div id="footer">
				<div id="footTop"></div><!-- closed footTop -->

					<p title="Andre Allen Web Developer and Design" class="footFnt txtInd">Copyright &copy; Andre Allen 2014
					<a href="http://www.linkedin.com/pub/andre-allen/50/163/a52" title="Linkedin">
					<img class="imgBlock linkIco" alt="linkedin" src="../../img/linkIcon.png"/></a>
					<a href="https://github.com/serenadexp" title="GitHub">
					<img class="imgBlock gitIco" alt="gitHub"  src="../../img/gitIcon.png"/></a>
					</p>
			</div><!-- closed footer -->	
		</div><!-- closed wrapper -->
		<script type="text/javascript" src="../../js/jquery-1.7.2.min.js"></script>
		<script src="../../js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript" src="../../js/main.js"></script>
		<script type="text/javascript" >
			var baseUrl= "<?php echo(base_url()); ?>";
	

		</script>


		<script type="text/javascript" charset="utf-8">
 			 $(document).ready(function(){
 			   $("a[rel^='prettyPhoto']").prettyPhoto({animation_speed: 'normal'});
 			   
			  });
		</script>
		</body>
</html>