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
				<li><a href="index.php" class="active">HOME</a></li>
				<li><a href="about.php">ABOUT</a></li>
				<li><a href="resume.php">RESUME</a></li>
				<li><a href="contact.php">CONTACT</a></li>
			</ul>
		</div>
	</div>
</div>		

<!-- home section -->
<div id="home">
	<div class="container" id="title_container">
		<div class="typewriter"> 
			<h1>Welcome to Sam Itman's Website!</h1>
		</div>
	</div>
</div>

<!-- divider section -->
<div class="divider">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-6">
				<div class="divider-wrapper divider-one">
					<i class="fa fa-shield"></i>
					<h2>Cybersecurity</h2>
					<p>Demonstrated experience in information security 
						and secure software development roles within the 
						Department of Defense, healthcare industry, and more. 
						Skilled in ethical hacking and pen-testing 
						tools to evaluate security.</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="divider-wrapper divider-two">
					<i class="fa fa-laptop"></i>
					<h2>IT</h2>
					<p>Vast IT background with a focus in DevOps; balancing 
						the technical know-how and business skills to deliver
						high quality products to customers. Firm knowledge of
						various programming languages, dev tools, and cloud platforms.</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-12">
				<div class="divider-wrapper divider-three">
					<i class="fa fa-trophy"></i>
					<h2>Leadership</h2>
					<p>Seasoned leadership strengths in team-based environments. 
						Proficient in project management; planning, defining goals, 
						delegation of responsibilities, and performance management. 
						Adept presenter and public speaker.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- portfolio section -->
<div id="portfolio" stlye="padding-top:0px;">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12">
				<h2>Featured Content</h2>
                <p>Feel free to explore some of my recent articles and github projects below.</p>
			</div>
         </div>
         
         <div class="row mt30">
			<div class="col-md-4 col-sm-4 col-xs-6">
				<img src="images/article1.jpg" style="width:500px;height:300px;" onclick="javascript:window.location='https://news.njit.edu/it-student-sam-itman-helps-modernize-optum';" />
			</div>
			<div class="col-md-4 col-sm-4 col-xs-6">
				<img src="images/article2.jpg" style="width:500px;height:300px;" onclick="javascript:window.location='https://news.njit.edu/senior-success-sam-itmans-passion-leads-cybersecurity-career';" />
			</div>
			<div class="col-md-4 col-sm-4 col-xs-6">
				<img src="images/githubImage.jpg" style="width:500px;height:300px;" onclick="javascript:window.location='https://github.com/samitman';" />
			</div>
		</div>
	</div>
</div>		

</body>
