<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-168970691-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

	 	gtag('config', 'UA-168970691-1');
	</script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Volunteer | NC for Better Government</title>
	<meta name="description" content="We are a non-partisan group of passionate volunteers who are advocating for good government policies in the North Carolina State Government through direct advocacy and informing communities." />
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
	<link href="default.css" rel="stylesheet" type="text/css" media="all" />
	<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
	<link rel='icon' href='favicon.ico' type='image/x-icon'/ >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
</head>
<body>
<div id="logo">
	<map name='logo_link_map'>
		<area shape='poly' coords='12,17,92,17,121,0,240,1,247,18,308,18,310,35,241,36,202,67,184,67,162,46,67,41,13,34' href='index'>
	</map>
	<img src='images/logo.png' usemap='#logo_link_map'>
</div>
<div id="header">
	<div id="menu" class="container">
		<ul>
			<li><a href="index">Home</a></li>
			<li><a href="issues" id='test'>Issues</a></li>
			<li><a href="takeaction">Take Action</a></li> <!--style='border: 2px solid #1f4a82; border-radius: 5px; background-color: #d6d6d6;'-->
			<li><a href="about">About Us</a></li>
			<li><a href="donate">Donate</a></li>
		</ul>
	</div>
</div>
<script src='tabs.js'></script>
<div class='article'>
	<h1>Volunteer Information</h1>
	<b>Volunteer Opportunities:</b>
	<ul>
		<li>Learn how to get a meeting with your legislator.</li>
		<li>Learn how to effectively influence elected officials.</li>
		<li>Join a community of people interested in politics and activism in North Carolina.</li>
	</ul>
	<b>Volunteer Responsibilities:</b>
	<ul>
		<li>Meet with your legislator (virtually or in-person) to discuss lame-duck power grabs.</li>
		<li>Get 20 people to send an email to their legislator on the NC for Better Government website each month.</li>
		<li>Email and call your representative to advocate for ending lame-duck power grabs every month.</li>
		<li>Share information about NC for Better Government on social media (if applicable).</li>
	</ul>

	<a name='join'><h1>Become a Volunteer</h1></a>
	<p>Thank you for your interest in volunteering with us! To continue, send an email to the email address below stating your interest in volunteering. We will get back to you to schedule an interview to talk more about the details of the volunteer role and to make sure you are a good fit.</p>
	<button id='showEmailVerifyButton' onclick='showEmailVerify()'>View Email Address</button>
	<form method='post' action='#join' id='volunteerEmailVerify' style='display: none;'>
		<div class='g-recaptcha' data-sitekey='6LeVz6oZAAAAAAi4ASeZeOQskZzLODv2Ot3dHJ-b'></div>
		<input type='submit'>
	</form>
	<span id='volunteerEmail'></span>

</div>
<div id="copyright" class="container">
	<ul class='contact'>
		<li><a href="comingsoon" class="icon icon-facebook"></a></li>
		<li><a href="https://www.instagram.com/ncforbettergovt/" class="icon icon-instagram"></a></li>
		<li><a href="comingsoon" class="icon icon-twitter"></a></li>
		<li><a href="comingsoon" class="icon icon-linkedin"></a></li>
		<li><a href="takeaction#mailinglist" class="icon icon-rss"></a></li>
	</ul>

	
	<p>Adapted from <a href='https://templated.co/swarming'>Swarming</a> by <a href="http://templated.co" rel="nofollow">TEMPLATED</a> | Hosted on <a href='https://www.dreamhost.com/r.cgi?2475375'>Dreamhost</a></p>
</div>
<script>
	function showEmailVerify() {
		document.getElementById('showEmailVerifyButton').style.display = 'none';
		document.getElementById('volunteerEmailVerify').style.display = 'block';
	}
</script>
<script src='postload.js'></script>
</body>
</html>
<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (!isset($_POST['g-recaptcha-response']) || $_POST['g-recaptcha-response'] == '') {
			echo "<script>alert('You did not click on the I\'m not the robot button. Are you a robot?')</script>";
		} else {
			//got from https://www.kaplankomputing.com/blog/tutorials/recaptcha-php-demo-tutorial/
			$url = 'https://www.google.com/recaptcha/api/siteverify';
			$data = array(
				'secret' => '6LeVz6oZAAAAAKJWhvPCf0Au5A_73tzyjA5X2dpQ',
				'response' => $_POST["g-recaptcha-response"]
			);
			$options = array(
				'http' => array (
					'method' => 'POST',
					'content' => http_build_query($data)
				)
			);
			$verifyCaptcha = file_get_contents($url, false, stream_context_create($options));
			$captcha_success = json_decode($verifyCaptcha);
			if ($captcha_success->success == false) {
				echo "<script>alert('Captcha verification failed. Please try again.')</script>";
			} else {
				echo '<script>document.getElementById("volunteerEmail").innerHTML = "Send your email to this address: <a href=\'mailto:sam@ncforbettergovt.org\'>sam@ncforbettergovt.org</a>"; document.getElementById("showEmailVerifyButton").style.display = "none";</script>';
			}
		}
	}
?>