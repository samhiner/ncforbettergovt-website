<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
add tooltip for community leader
make other info letter box auto expand
-->
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
	<title>Take Action | NC for Better Government</title>
	<meta name="description" content="We are a non-partisan group of passionate volunteers who are advocating for good government policies in the North Carolina State Government through direct advocacy and informing communities." />
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
	<link href="default.css" rel="stylesheet" type="text/css" media="all" />
	<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://apis.google.com/js/api.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgbG8AKNNa9_vmg1o5pM49HFLESg8rNoo&libraries=places"></script>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
</head>
<body>
<div id='loadingScreen'>
	<span>Loading</span>
	<div id='loadingWheel'></div>
</div>
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
			<li class="current_page_item"><a href="takeaction">Take Action</a></li> <!--style='border: 2px solid #1f4a82; border-radius: 5px; background-color: #d6d6d6;'-->
			<li><a href="about">About Us</a></li>
			<li><a href="donate">Donate</a></li>
		</ul>
	</div>
</div>
<script src='tabs.js'></script>
<div class='article'>
	<h1>How to Make a Difference</h1>
	<p>The best way to cause change in government is by directly advocating to your representatives. A survey of Congressional staffers shows how much of an impact you can have by getting in touch with your elected officials:</p>
	<div style='text-align: center;'>
		<figure style='text-align: center; display: inline-block; margin: 0; margin-bottom: 10px;'>
			<img style='height: 17em; border: solid 1px black' src='images/influence_stats.png' alt='A survey of congressional staffers shows that 99% of congresspeople are influenced by meetings, 94% are influenced by personalized emails, 88% are influenced by phone calls, and 63% are influenced by template emails.'>
			<figcaption style='text-align: right; font-size: 10pt;'>Data from the <a href='https://www.congressfoundation.org/index.php'>Congressional Management Foundation</a></figcaption>
		</figure>
	</div>
	<p>The influence you can have is even greater at the state level. Take a few minutes to personalize and send an email and/or call your legislators offices. Getting in touch with your legislators can have a huge impact on ending lame-duck power grabs in NC.</p> 

	<a name='email'><h1>Send an Email</h1></a>
	<div>
		<p>Fill out your address and click "Find My District" so we know where to send your email (we do not store your address). Then, fill out the text boxes in the template email and send your email!</p>
		<div id='districtFinder'>
			<input type='text' id='petitionAddress' name='petitionAddress' autocomplete='off' placeholder='Fill in your address here...' style='width: 80%'><br>
			<button type='button' onclick='getDistricts()' id='addressSubmit'>Find My District</button>
		</div><br>
		<form method='post' style='text-align: center;'>
			<div id='petitionTemplate' name='petitionTemplate'>
				<p>Dear <span id='petitionRecipients'>[State Legislator's Name]</span>,<br><br>

				My name is
				<span id='petitionName' data-placeholder='Your Name' class='expandingInput' contenteditable required></span><span class='required'>*</span>.
				I'm a constituent of yours from
				<span id='petitionHometown' data-placeholder='Your Hometown' class='expandingInput' contenteditable></span>
				and a supporter of NC for Better Government.
				<span id='petitionTitle' data-placeholder='Your Title' class='expandingInput' contenteditable></span>
				<sup class='tooltip' onclick='toggleToolTipText()'>
					[?]
					<span class='tooltipText'>Add your occupation (if applicable) and any positions or influence you have in your community. E.g. "I am a student at Davidson College and am a member of the Statesville Chamber of Commerce."</span>
				</sup>
				After learning about lame-duck power grabs and their effects, I am concerned about the effects that continuing to let lame-duck power grabs happen could have on our democracy.<br>
				<textarea id='petitionOtherInfo' name='petitionOtherInfo' style='width: 100%; max-width: 100%' placeholder='Personalized emails have a much larger influence on legislators. Add your own thoughts about why ending lame-duck power grabs is so important. Remember to be polite!'></textarea><br>
				I think this needs to be addressed by our state legislature.

				Should you be re-elected to the NC General Assembly this November, I ask you to oppose lame-duck power grabs and support legislation to end them in North Carolina.<br><br>

				Sincerely,<br><br>

				<span id='petitionSignature' class='expandingInput' data-placeholder='Your Name' disabled></span></p>
			
				<div class='g-recaptcha' data-sitekey='6Lci1acZAAAAAAGcka5BTjUPbg6BUpTlsWQokCEA'></div>
			</div><br>

			<textarea name='petitionName' id='nameHolder' style='display: none;'></textarea>
			<textarea name='petitionTitle' id='titleHolder' style='display: none;'></textarea>
			<textarea name='petitionHometown' id='hometownHolder' style='display: none;'></textarea>
			<input name='districts' id='districtsHolder' style='display: none;'>

			<button id='sendEmail' type='button'>Send Your Email</button>
			<input type='submit' id='verifiedSendEmail' style='display: none'>
		</form>
		<h1>Give Them A Call</h1>
		<p>Phone calls are another important part of the advocacy process. Typically, phone calls last just a few seconds and go something like this:</p>
		<blockquote style='width: 50%; margin: auto;'>
			<b>Them:</b> Hello, Senator Smith's Office.<br>
			<b>You:</b> Hello, I am a constituent of Senator Smith and supporter of NC for Better Government. I'm calling to ask Senator Smith to support legislation to end lame-duck power grabs.<br>
			<b>Them:</b> Thank you, we will make a note of it.
		</blockquote><br>
		<span id='phoneInfo'>Once you fill out your district, the phone numbers for your legislators' offices will show up here.</span>

		<a name='join'><h1>Join Us</h1></a>
		<p>Want to take your impact to the next level? Join us as an official volunteer! Volunteers spread our cause to more people around North Carolina and meet with their legislators to discuss lame-duck power grabs.</p>
	</div>
</div>
<script>
	//placeholder for input parts of email form
	//this is from https://htmldom.dev/placeholder-for-a-contenteditable-element/
	const inputsList = document.querySelectorAll('#petitionTemplate span[contenteditable]');

	//event listener to get rid of HTML formatting
	expandingInputs = document.getElementsByClassName('expandingInput')
	for (var x = 0; x < expandingInputs.length; x++) {
		expandingInputs[x].addEventListener('blur', function(event) {
			event.srcElement.innerHTML = event.srcElement.innerText;
		});
	}

	//shows tooltip on click (for mobile where hovering isn't an option)
	//if multiple tooltips later you can change to look at event info to find which text
	function toggleToolTipText() {
		tooltipText = document.getElementsByClassName('tooltipText')[0]
		if (tooltipText.style.display == 'none') {
			tooltipText.style.display = 'inline-block';
		} else {
			tooltipText.style.display = 'none';
		}
	}

	//autocomplete while you are looking up your address
	var options = {
		bounds: new google.maps.LatLngBounds( //results in NC are prioritized
			new google.maps.LatLng(34,-84.25),
			new google.maps.LatLng(36.35,-75.5)
		),
		types: ['address']
	};
	var input = document.getElementById('petitionAddress');
	var autocomplete = new google.maps.places.Autocomplete(input, options);

	//submit address if you hit enter in address box
	var addressInput = document.getElementById('petitionAddress')
	addressInput.addEventListener('keydown', function(event) {
		if (event.keyCode === 13) {
			document.getElementById('addressSubmit').click();
		}
	})

	//submit address if you select a google autocomplete
	google.maps.event.addListener(autocomplete, 'place_changed', function() {
		document.getElementById('addressSubmit').click();
	});

	//event listener that copies message to hidden input in form on submit
	document.getElementById('sendEmail').addEventListener('click', function() {
		if ((document.getElementById('petitionAddress').value != '') && document.getElementById('districtsHolder').value == '') { //TODO when you do manual district add them here
			document.getElementById('addressSubmit').click();
		}
		document.getElementById('nameHolder').value = document.getElementById('petitionName').innerText;
		document.getElementById('titleHolder').value = document.getElementById('petitionTitle').innerText;
		document.getElementById('hometownHolder').value = document.getElementById('petitionHometown').innerText;
		document.getElementById('verifiedSendEmail').click();
	});

	//update signature when you update name
	var petitionName = document.getElementById('petitionName');
	function signatureUpdate() {
		if (petitionName.innerText != '') {
			document.getElementById('petitionSignature').innerText = petitionName.innerText;
		} else {
			document.getElementById('petitionSignature').innerText = 'Your Name';
		}
	}
	petitionName.addEventListener('keyup', signatureUpdate);
	signatureUpdate()

	//TODO i should be preloading when you log in to reduce load times on address enter
	//code taken from Google Civic Data API to get district from address
	function getDistricts() {
		document.getElementById('loadingScreen').style.display = 'block';
		gapi.client.setApiKey("AIzaSyBgbG8AKNNa9_vmg1o5pM49HFLESg8rNoo");
		return gapi.client.load("https://content.googleapis.com/discovery/v1/apis/civicinfo/v2/rest")
			.then(function() { console.log("GAPI client loaded for API"); getDistrictsAPICall(); },
				function(err) { reportError("Error loading GAPI client for API: " + JSON.stringify(err)); });
	}
	function getDistrictsAPICall() {
		return gapi.client.civicinfo.representatives.representativeInfoByAddress({
			"address": document.getElementById('petitionAddress').value,
			"includeOffices": true,
			"levels": [
				"administrativeArea1"
			],
			"roles": [
				"legislatorLowerBody",
				"legislatorUpperBody"
			]
		}).then(function(response) {
			console.log("Response", response);

			if (response.result.normalizedInput.state == 'NC' && response.result.officials != undefined) {
				var stringResponse = response.body//JSON.stringify(response, null, 0).replace(/\\n/g, "\\n").replace(/\\"/g, '\\"');//.replace(/\\"/g, '"').replace(/\\n/g, '"').replace(/\r/g, '');
				document.getElementById('districtsHolder').value = stringResponse;
				fillDistrictInfo();
			} else if (response.result.normalizedInput.state != 'NC') {
				alert('Please enter an address in North Carolina.');
				document.getElementById('petitionAddress').value = '';
				document.getElementById('loadingScreen').style.display = 'none';
			} else {
				alert('We could not find a district for your address. Please try manually finding your district.')
				document.getElementById('loadingScreen').style.display = 'none'
			}
		}, function(err) {
			reportError("Execute error:" + JSON.stringify(err));
			alert('An error was encountered. Please refresh and try again. If you continue to experience errors, please contact us.')
			document.getElementById('loadingScreen').style.display = 'none';
		});
	}
	gapi.load("client");

	function fillDistrictInfo() {
		console.log('Reee', document.getElementById('districtsHolder').value)
		response = JSON.parse(document.getElementById('districtsHolder').value)

		const phone1 = response.officials[0].phones != undefined ? response.officials[0].phones[0] : 'Phone number not found.';
		const phone2 = response.officials[1].phones != undefined ? response.officials[1].phones[0] : 'Phone number not found.';
		const phoneInfo = response.offices[0].name + ' ' + response.officials[0].name + ': ' + phone1 + '<br>' + response.offices[1].name + ' ' + response.officials[1].name + ': ' + phone2
		document.getElementById('phoneInfo').innerHTML = phoneInfo
		document.getElementById('loadingScreen').style.display = 'none';
		var recipients = response.offices[0].name.split(' ')[2] + ' ' + response.officials[0].name + ' and ' + response.offices[1].name.split(' ')[2] + ' ' + response.officials[1].name;
		document.getElementById('petitionRecipients').innerText = recipients;

		const address = response.normalizedInput;
		document.getElementById('petitionAddress').value = address.line1 + ', ' + address.city + ', ' + address.state + ' ' + address.zip;
	}

</script>
<div id="copyright" class="container">
	<ul class='contact'>
		<li><a href="comingsoon" class="icon icon-facebook"></a></li>
		<li><a href="https://www.instagram.com/ncforbettergovt/" class="icon icon-instagram"></a></li>
		<li><a href="comingsoon" class="icon icon-twitter"></a></li>
		<li><a href="comingsoon" class="icon icon-linkedin"></a></li>
		<li><a href="takeaction#mailinglist" class="icon icon-rss"></a></li>
	</ul>

	<p>Image Credit: <a href='https://commons.wikimedia.org/wiki/File:NC_Legislature.JPG'>NC General Assembly Building</a></p>
	
	<p>Adapted from <a href='https://templated.co/swarming'>Swarming</a> by <a href="https://templated.co" rel="nofollow">TEMPLATED</a> | Hosted on <a href='https://www.dreamhost.com/r.cgi?2475375'>Dreamhost</a></p>
</div>
</body>
</html>







<?php
	include('config.php');

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$rejectForm = false;
		$errorMsg = '';
		if (!isset($_POST['petitionName']) || $_POST['petitionName'] == '') {
			$errorMsg = $errorMsg . 'You have to fill out your name to send your email. ';
			$rejectForm = true;
		}
		if (!isset($_POST['districts']) || $_POST['districts'] == '') {
			$errorMsg = $errorMsg . 'You have to fill out your address and click "find my district" so we know which legislator to send your email to. We do not store your address. ';
			$rejectForm = true;
		}
		if (!isset($_POST['g-recaptcha-response']) || $_POST['g-recaptcha-response'] == '') {
			$errorMsg = $errorMsg . "You did not click on the I\'m not the robot button. Are you a robot? ";
			$rejectForm = true;
		} else {
			//got from https://www.kaplankomputing.com/blog/tutorials/recaptcha-php-demo-tutorial/
			$url = 'https://www.google.com/recaptcha/api/siteverify';
			$data = array(
				'secret' => '6Lci1acZAAAAACkQ6Wo6IeZ_0cmbpspYtLLqCYTZ',
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
				$errorMsg = $errorMsg . "Captcha verification failed. Please try again. ";
				$rejectForm = true;
			}
		}

		//TODO should I have used session? Probably. Although I only want it to store on failure. Otherwise its harder to share computer and easier to send duplicates to database that don't actually get mailed.
		if ($rejectForm) {
			echo "<script>
			document.getElementById('petitionName').innerHTML = '" . $_POST['petitionName'] . "';
			signatureUpdate();
			document.getElementById('petitionTitle').innerHTML = '" . $_POST['petitionTitle'] . "';
			document.getElementById('petitionHometown').innerHTML = '" . $_POST['petitionHometown'] . "';
			document.getElementById('petitionOtherInfo').innerHTML = '" . $_POST['petitionOtherInfo'] . "';
			document.getElementById('districtsHolder').value = '" . $_POST['districts'] . "';
			fillDistrictInfo();
			</script>";
			echo "<script>
			alert('" . $errorMsg . "');
			</script>";
		} else {
			$name = mysqli_real_escape_string($db,$_POST['petitionName']);
			$title = mysqli_real_escape_string($db,$_POST['petitionTitle']);
			$otherInfo = mysqli_real_escape_string($db,$_POST['petitionOtherInfo']);

			$districts = json_decode($_POST['districts'], true);
			//TODO do validation to make sure there is an email etc
			$sd = mysqli_real_escape_string($db, $districts['officials'][0]['emails'][0]);
			$hd = mysqli_real_escape_string($db, $districts['officials'][1]['emails'][0]);
			$datetime = gmdate("Y-m-d H:i:s");


			$result = mysqli_query($db, "INSERT INTO email_log (name, title, otherInfo, senate_email, house_email, time) VALUES ('$name', '$title', '$otherInfo', '$sd', '$hd', '$datetime')");
			echo $result;
		}


	}

?>