<!DOCTYPE html>
<html>
<head>
	<?php
	
		if(isset($_POST['submit']))
		{
			include_once('send.php');
		}
	?>
	<script src="js/jquery.min.js"></script>
	<script src="js/skel.min.js"></script>
	<link rel="stylesheet"  href="css/font-awesome.min.css" />

	<title>Dassprakash.com |Thanajvur, PHP developer at Thisys.com</title>
	<meta name="google-site-verification" content="tERaUBMUz_DoyUlkUFS4soyn0pzcHm66dH-oiRk6S3c" />
	<meta name="msvalidate.01" content="C620C3C7F8EA22271AFC833F83739645" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="dassprakash .j mca from Thanjavur. i am working as a php developer. This my profile website.I like create website and php code and angularjs code." />
	<meta name="keywords" content="php,phpdeveloper,php developer,php devloper in thanjavur,job,in thanjavur,thanjavur,madhakottai,mca,mysql,HTML,CSS,XML,JavaScript,phpjobs,st.joseph's,angularjs,angularjs developer in thanjavur" />
	<meta name="author" content="dassprakash" />
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-50798689-1', 'dassprakash.com');
	  ga('send', 'pageview');

	</script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"  href="css/style.css" />
	<!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
</head>
	<body class="" style="background-position: center 0px;">
		<!-- Header -->
		<section id="header" style="padding: 192.5px 0px;">
			<header>
				<h1>Dass prakash. J</h1>
				<p>PHP Developer</p></header>
			<footer><a href="#banner" class="button style2 scrolly-middle">About Me</a></footer>
		</section><!-- Banner -->
		<section id="banner">
			<header>
				<h2>About Me</h2>
			</header>
			<p>Im a 28 year old Front-end developer located in Thanjavur, India.
			I currently work for a Thisys software solution.
			I have worked here since April 2012. 
			While working here I have had the chance to work on some very exciting projects. I have learnt a lot about building responsive website and user-friendly websites.</p>
			<br/>
			<br/>
			<footer>
				<a href="#experience" class="button style2 scrolly">Experience</a>
			</footer>
			</section>
			<!-- Feature 1 -->
			<article id="experience" class="container box style1 right">
				<a href="http://thisys.com/" class="image fit"><img src="images/thisys_logo.png" alt=""></a>
				<div class="inner">
					<header>
						<h4>Thisys Software Solution</h4>
						Senior Php Developer
					</header>
					<p>MAY 2012 - Present</p> 
					<p>I'm working in Thisys Software Solution from 2012 to till date.I worked out many projects.Especially PDF Reporter and Multi upload project are very important during this period.</p>
				</div>
			</article>
			<!-- Feature 2 -->
			<article class="container box style1 left">
				<a href="http://world360.in" class="image fit"><img src="images/logo.png" alt=""></a>
				<div class="inner">
					<header>
						<h2>My Own Website<br>  </h2>
						www.world360.in
					</header>
					<p>Wordpress website</p>
					<p>This is my dream website.This site is based on News portal website.</p><p>This is purely a Responsive Website.We use wordprees for this website.</p>
				</div>
			</article><!-- Portfolio -->
			<article class="container box style2">
				<header><h2>My Skills</h2>
					<p>I have 4 years experience in web development. I have good skill in following technology.</p>
				</header>
				<div class="inner gallery">
					<div class="row 0%">
						<div class="3u 12u(mobile)"><a class="image fit" style="cursor: pointer; outline: 0px;"><img src="images/01.jpg" alt=""></a>
						</div>
						<div class="3u 12u(mobile)"><a class="image fit" style="cursor: pointer; outline: 0px;"><img src="images/02.png" alt=""></a></div>
						<div class="3u 12u(mobile)"><a class="image fit" style="cursor: pointer; outline: 0px;"><img src="images/03.png" alt=""></a></div>
						<div class="3u 12u(mobile)"><a class="image fit" style="cursor: pointer; outline: 0px;"><img src="images/04.png" alt=""></a></div>
					</div>
					
				</div>
			</article>
			<!-- Contact -->
			<article class="container box style3">
				<header><h2>Get in Touch </h2>
					 <p>
					 	<?php 
					 	if($scucess)
					 	{
					 		echo 'Thankyou for your feedback';
					 	}
					 	if($error)
					 	{
					 		echo 'Error please try after sometime!';
					 	}
					 	?>
					 </p>
				</header>
				<form method="post" action="">
					<div class="row 50%">
						<div class="6u 12u$(mobile)">
							<input type="text" required class="text" name="name" placeholder="Name">
						</div>
						<div class="6u$ 12u$(mobile)">
							<input type="text" required class="text" name="email" placeholder="Email">
						</div>
						<div class="12u$">
							<textarea name="message" required placeholder="Message"></textarea>
	 					</div>
	 					<div class="12u$">
	 						<ul class="actions">
	 							<li>
	 								<input type="submit" name="submit" value="SendMessage">
	 							</li>
	 						</ul>
	 					</div>
 					</div>
 				</form></article>
 <section id="footer">
 	<ul class="icons">
 		<li><a href="https://twitter.com/j_dass" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
 		<li><a href="https://www.facebook.com/dass.prakash.54" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
 		<li><a href="https://plus.google.com/u/0/110703680564924087843/posts" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
 		
 	</ul>
 	<div class="copyright">
 		<ul class="menu">
 			<li>Dassprakash.com </li>
 		</ul>
 	</div>
 </section><!-- Scripts -->

 
 
 
 
 
 <script>(function($) { $(function() {
  if (skel.vars.os == 'ios' && window.self !== window.top) {
    $('head').append(
      '<style>' +
      '@media screen and (min-width: 737px) { #header { padding: 12em 0 !important; } }' +
      '</style>'
    );
  }
}); 
$('a.scrolly-middle').bind('click', function(event) {
		var $anchor = $(this);
		$('html, body').stop().animate({
				scrollTop: ($('#banner').offset().top)
		}, 1000);
		event.preventDefault();
});
$('a.scrolly').bind('click', function(event) {
		var $anchor = $(this);
		$('html, body').stop().animate({
				scrollTop: ($('#experience').offset().top)
		}, 1000);
		event.preventDefault();
});
/* $('.scrolly-middle').click(function() {
$("html, body").animate({ scrollTop: $('#banner').offset().top }, 1000);
})
 */
})(jQuery);
</script>
<div class="poptrox-overlay" style="position: fixed; left: 0px; top: 0px; z-index: 1000; width: 100%; height: 100%; text-align: center; cursor: pointer; display: none;"><div style="display:inline-block;height:100%;vertical-align:middle;"></div><div style="position:absolute;left:0;top:0;width:100%;height:100%;background:#0a1919;opacity:0.75;filter:alpha(opacity=75);"></div><div class="poptrox-popup" style="display: none; vertical-align: middle; position: relative; z-index: 1; cursor: auto; min-width: 200px; min-height: 100px;"><div class="loader" style="display: none;"></div><div class="pic" style="display: none;"></div><div class="caption" style="display: none;"></div><span class="closer" style="cursor: pointer; display: none;">?</span><div class="nav-previous" style="display: none;"></div><div class="nav-next" style="display: none;"></div></div></div></body></html>