<?php 
	include("./partials/head_info.html");
	include("./partials/scripts.html");
?>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FNP6BYN5EV"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-FNP6BYN5EV');
</script>

<body>
<!-- navigation -->
	<div class="container">
		<div class="navbar navbar-default navbar-static-top" role="navigation">
		<?php include("./partials/navbar_header.html");?>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="index.php">HOME</a></li>
				<li><a href="about.php" class="active">ABOUT</a></li>
				<li><a href="resume.php">RESUME</a></li>
				<li><a href="contact.php">CONTACT</a></li>
			</ul>
		</div>
	</div>
</div>		

<!-- bio section -->
<div id="team">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12" style="text-align: center;">
				<h2>Meet Sam!</h2>
                <p>
					Born with the surname, "ITman", my destiny to become a master of IT was preordained. <p>
				</p> <br>
				<p>
					As a first generation American, I am passionate about serving the country that has provided so 
					much for my family. I am fortunate to be able to explore my interests and studies in IT security
					while working for the federal government as a recipient of the Cyber Corps Scholarship for Service.
				</p><br>
				<p>
					I graduated summa cum laude from NJIT with a master's degree in IT Adminstration & Security and a bachelor's 
					degree in Information Technology with a minor in Business, earning 4.0 GPAs in each program. Most recently, 
					I worked as a software development contractor supporting the DOD where I conducted system administration and 
					cybersecurity duties on mission-critical information systems. 
				</p><br>
				<p>	
					During my studies, I was an IT specialist with the US Space Force, where we supported the digital innovation 
					and modernization activities of the Space Force's Chief Technology and Innovation Office (CTIO). 
					I also worked in a DevOps role for the Cybersecurity and Infrastructure Security Agency (CISA) where 
					I contributed to the development of a large-scale threat intelligence platform. Before working in public 
					service, I was a software engineer with Optum - United Health Group, where I helped create numerous fullstack
					applications to modernize business operations. 
				</p><br>
				<p>	
					Thanks for visiting! Read more about this project below and contact me with any questions.
				</p>
			</div>
         </div>
         
		 <!-- spacer -->
         <div class="row mt30" id="sam_bio">
			<div class="col-md-4 col-sm-4 col-xs-9">
				<div class="team-wrapper" style="border: none !important;">
					
				</div>
			</div>

			<!-- short bio section -->
			<div class="col-md-4 col-sm-4 col-xs-9">
				<div class="team-wrapper">
					<img src="images/headshot.jpg" class="img-responsive" alt="team img">
					<h3>Sam Itman</h3>
					<h4>IT Security Professional</h4>
					<p>MS IT Administration & Security, BS Information Technology, Security+ 
					</p>
				</div>
			</div>

			<!-- spacer -->
			<div class="col-md-4 col-sm-4 col-xs-9">
				<div class="team-wrapper" style="border: none !important;">
					
				</div>
			</div>
	</div>
</div>		

<!-- info section -->
<div class="row mt30" style="margin-right: 15px; margin-left: 15px; margin-top: 5px;"> 
	<div class="col-md-12 col-sm-12">
		<hr>
	</div>
	<div class="col-md-6 col-sm-6">
		<h3>Project Info</h3>
		<p>This website is hosted on an AWS Amplify! But soon to be moved to S3/CloudFront.</p>
		<p>Domain name registered through AWS Route 53, and SSL certificate configured through certbot.</p>
		<p>Visit Github link provided on home page for more information!</p>
	</div>
	<div class="col-md-6 col-sm-6">
		<h3>Code Breakdown</h3>
		<div class="progress" style="height: fit-content;">
			<div class="progress-bar progress-bar-success" role="progressbar" style="width: 49%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">CSS</div>
			<div class="progress-bar progress-bar-primary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">PHP</div>
			<div class="progress-bar progress-bar-warning" role="progressbar" style="width: 13%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">HTML</div>
			<div class="progress-bar progress-bar-danger" role="progressbar" style="width: 8%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">JS</div>
		</div>
	</div>
</div>

</body>
