<!DOCTYPE html>
<html>
	<head>
		<title>Andre Allen Web Developer & Designer</title>
		<meta name="viewport" content="width=device-width" />
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>  
		<link href='img/portIco.png' rel='icon' type='image/png'/>
 		<link rel="stylesheet" href="css/reset.css" type="text/css"/>
 		<link rel="stylesheet" type="text/css" href="engine1/style.css" />
		<script type="text/javascript" src="engine1/jquery.js"></script>
 		<link rel="stylesheet" href="css/web.css" type="text/css"/> 
 		
 		<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35660113-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
	<body>
		<!--[if IE]> <p>This page has not been optimised for Internet Explorer yet try an better alternative browser like <a href='http://www.mozilla.org/en-US/firefox/new/'>Firefox</a> or <a href='https://www.google.com/intl/en/chrome/browser/'>Chrome</a></p> <![endif]-->
	<div id="contact" class="contactHide">
		<div id="headContact">
			<p class="contactHeadFnt">Interested In Reaching Out To Me</p>
		</div><!-- closed headContact -->
		<div id="titlesContact">
			<form id="contactForm">
				<input class="inputStyle inputFnt inputColor" id="firstLast" type="text" name="firstLast" placeholder="Your First & Last Name"/>
				<input class="inputStyle inputFnt inputColor" id="email" type="text" name="email" placeholder="Your Email"/>
				<input class="inputStyle inputFnt inputColor" id="subject" type="text" name="subject" placeholder="Subject Title"/>
			
		</div><!-- closed titlesContact -->
		<div id="messageContact">
				<textarea class="inputFnt inputColor" id="message" type="text" name="message" placeholder="Place Message Here"></textarea>

				<button class="sendBtnFnt sendBtnStyle" id="sendBtn" type="submit">Send</button>
			</form><!-- closed form -->
		</div><!-- closed messageContact -->
	</div><!-- closed contact -->
	

		<div id="wrapper">
		
			<div id="header">
				<div id="homeReturn"><p class="txtInd"><?php echo anchor('home','Andre Allen<br />Web Developer <span class="andColor">&</span> Designer','class="anc nameFnt"')?></p>
				
				</div><!-- closed homeReturn -->
				<div id="navHolder"><div class="warnHide warnFnt" id="warn"><p>Please Fill Out All Fields</p></div><!-- closed warn -->
					<ul id="nav">
						<li id="ancWork" class="bott"><?php echo anchor('home','My Work',array('class'=>"anc navFnt navWork",'alt'=>'My Work','title'=>'My Work')) ?></li>
						<li id="ancPersonal"><?php echo anchor('personal','Personal',array('class'=>"anc navFnt navPers",'alt'=>'Personal','title'=>'Personal')) ?></li>
						<li id="ancContact"><a class="anc navFnt navCont" title="Contact" alt="Contact" href="#">Contact</a></li>
					</ul>
				</div><!-- closed navHolder -->
			</div><!-- closed header -->
			<div id="contentIntro">
				<h1 class="introducFnt txtInd">I’m Andre Allen<br /> a guy who’s obsessed with all things web and strives to see technology pushed to the cutting edge.</h1>
			
			</div><!--closed contentIntro -->
			<div id="contentSlider">
				<div id="wowslider-container1">
					<div class="ws_images">
						<ul>
							<li><a href="/details/index/1" title="Exercise 7"><img src="img/exercise.jpg" alt="Exercise 7" title="Exercise 7" id="wows1_0"/></a></li>
							<li><a href="/details/index/2" title="Looker"><img src="img/look.jpg" alt="Looker" title="Looker" id="wows1_1"/></a></li>
							<li><a href="/details/index/3" title="More Designs"><img src="img/afro.jpg" alt="More Designs" title="More Designs" id="wows1_2"/></a></li>
							<li><a href="/details/index/4" title="CAS"><img src="img/cas.jpg" alt="CAS" title="CAS" id="wows1_3"/></a></li>
						</ul>
					</div>
				<div class="ws_bullets">
				<div>
				<a href="#" title="Exercise 7"><img src="data1/tooltips/exercise.jpg" alt="Exercise 7"/>1</a>
				<a href="#" title="Looker"><img src="data1/tooltips/look.jpg" alt="Looker"/>2</a>
				<a href="#" title="More Designs"><img src="data1/tooltips/afro.jpg" alt="More Designs"/>3</a>
				<a href="#" title="CAS"><img src="data1/tooltips/cas.jpg" alt="CAS"/>4</a>
				</div>
				</div>

	<div class="ws_shadow"></div>
	</div>
			</div><!--closed contentSlider -->
			<div id="contentProjectInfo">
			
					 <?php foreach($inPulls->result() as $pulls):
						$projectName=$pulls->project_Name;
						$projectSubInfo=$pulls->sub_Info;
					?>	
					<?php endforeach;?>
				<div id="trans"></div><!--closed trans -->
				<div id="contentProjectName">	
					<p class="contentInfoHeadFnt txtInd">Project: <?php echo $projectName; ?></p>
				</div><!--closed contentProjectName -->
				<div id="contentProjectInfoHead">	
					<p class="contentInfoHeadFnt txtInd">Information</p>
				</div><!--closed contentProjectInfo -->
				<div id="contentProjectInfoDetail"><p class="contentInfoFnt txtIndAgain"><?php echo $projectSubInfo; ?></p>
				</div><!--closed contentProjectInfoDetail -->
				<div id="contentProjectTechno">	
					<p class="contentInfoHeadFnt txtInd">Technology</p>
				</div>	<!--closed contentProjectTechno -->
				<div id="contentTechDetail">
					<ul id="techLogos">
					<?php foreach($inPulls->result() as $pullT):
							$projectSubTech=$pullT->used_Tech;
							$projectSubTechTitle=$pullT->img_Names;
					?>
						<li><img title="<?php echo $projectSubTechTitle;?>" src="<?php echo $projectSubTech; ?>"/></li>
					<?php endforeach;?>
					</ul>	
				</div>	<!--closed contentTechDetail -->
				<div id="contentMoreDetail">
					<p><?php echo anchor('details/index/1','More Details',array('class'=>'anc contentInfoDetailFnt detailAnc','rel'=>"")) ?></p>
				</div><!-- closed contentMoreDetail -->
			</div><!-- closed contentProjectInfo -->
			<div id="contentProjects">
				<div id="contentProjectRight">
				<div class="transTxt"></div>
					<div id="firstContent" class="contentsProjectBorder contentsProjectBorderLight">
						<a id="projectOne" href="#" rel="1" class="anc">
							<img class="imgBlock imgBorder" src="img/exBan.jpg" alt="Exercise 7" title="Exercise 7"/>
								<p class="contentProjectsFnt "><span>Exercise 7</span></p>
						</a>
					</div><!-- closed firstContent -->
					<div class="transTxt"></div>
					<div id="secondContent" class="contentsProjectBorder">
						<a id="projectTwo" href="#" rel="3" class="anc">
							<img class="imgBlock imgBorder" src="img/afroBan.jpg" alt="More Designs" title="More Designs"/>
								<p class="contentProjectsFnt">More Designs</p>
						</a>	
					</div>	<!-- closed secondContent -->
				</div><!-- closed contentProjectRight -->
				<div id="contentProjectLeft">
				<div class="transTxt"></div>
					<div id="thirdContent" class="contentsProjectBorder">
						<a id="projectThree" href="#" rel="2" class="anc">
							<img class="imgBlock imgBorder" src="img/lookBan.jpg" alt="Looker App" title="Looker App"/>
							<p class="contentProjectsFnt txtInd"><span>Looker</span></p>
						</a>	
					</div><!-- closed thirdContent -->
					<div class="transTxt"></div>
					<div id="fourthContent" class="contentsProjectBorder">
						<a id="projectFour" href="#" rel="4" class="anc">
							<img class="imgBlock imgBorder" src="img/casBan.jpg" alt="CAS" title="CAS"/>
								<p class="contentProjectsFnt txtInd">CAS</p>
						</a>		
					</div>	<!-- closed fourthContent -->
				
				</div>	
				
			</div><!--closed contentProjects -->
			<div id="footer">
				<div id="footTop"></div><!-- closed footTop -->

					<p class="footFnt txtInd">Copyright &copy; Andre Allen 2014 
					<a href="http://www.linkedin.com/pub/andre-allen/50/163/a52" title="Linkedin">
					<img class="imgBlock linkIco" alt="linkedin" src="img/linkIcon.png"/></a>
					<a href="https://github.com/serenadexp" title="GitHub">
					<img class="imgBlock gitIco" alt="gitHub"  src="img/gitIcon.png"/></a>
					</p>	
			</div><!-- closed footer -->	
		</div><!-- closed wrapper -->
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" >
	var baseUrl= "<?php echo(base_url()); ?>";
		</script>
	<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>