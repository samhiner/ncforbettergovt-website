<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php/*
make other info letter box auto expand

	//TODO put "personalized" in title
	make captcha not expire on prepped refresh
	manually find district
	check how the letter looks when you don't put an extra comment in
	//ty popup says Sign up for our montlhly mailing list to get a reminder to get in touch with your representatives again and to learn about more ways to get involved. Or get even more involved as a volunteer?
	//add mailing list signup to more places around the site... all pages
	footer links
	drop down on take action and popups on website
*/
?>
<?php
	$googleApiKey = 'AIzaSyBgbG8AKNNa9_vmg1o5pM49HFLESg8rNoo'; //only have to change key in one place when going from dev to prod
?>
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
	<link rel='icon' href='favicon.ico' type='image/x-icon'/ >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://apis.google.com/js/api.js"></script>
	<script type="text/javascript" src=<?php echo '"https://maps.googleapis.com/maps/api/js?key=' . $googleApiKey . '&libraries=places"';?>></script>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
	<!-- MailerLite Universal -->
	<script>
	(function(m,a,i,l,e,r){ m['MailerLiteObject']=e;function f(){
	var c={ a:arguments,q:[]};var r=this.push(c);return "number"!=typeof r?r:f.bind(c.q);}
	f.q=f.q||[];m[e]=m[e]||f.bind(f.q);m[e].q=m[e].q||f.q;r=a.createElement(i);
	var _=a.getElementsByTagName(i)[0];r.async=1;r.src=l+'?v'+(~~(new Date().getTime()/1000000));
	_.parentNode.insertBefore(r,_);})(window, document, 'script', 'https://static.mailerlite.com/js/universal.js', 'ml');

	var ml_account = ml('accounts', '2120814', 's1d0e3v1v3', 'load');
	</script>
	<!-- End MailerLite Universal -->
</head>
<body>
<div id='loadingScreen' class='popupBackground'>
	<span>Loading</span>
	<div id='loadingWheel'></div>
</div>
<div id='' class='popupBackground'>

</div>
<div id="logo">
	<map name='logo_link_map'>
		<area shape='poly' coords='12,17,92,17,121,0,240,1,247,18,308,18,310,35,241,36,202,67,184,67,162,46,67,41,13,34' href='index'>
	</map>
	<img src='images/logo.png' usemap='#logo_link_map' alt='NC for Better Government'>
</div>
<div id="header">
	<div id="menu" class="container">
		<ul>
			<li><a href="index">Home</a></li>
			<li><a href="issues">Our Issues</a></li>
			<li class="current_page_item"><a href="takeaction">Take Action</a></li> <!--style='border: 2px solid #1f4a82; border-radius: 5px; background-color: #d6d6d6;'-->
			<li><a href="about">About</a></li>
			<li><a href="volunteer">Volunteer</a></li>
		</ul>
	</div>
</div>
<script src='tabs.js'></script>
<div class='article'>
	<h1>How to Make a Difference</h1>
	<p>The best way to cause change in government is by directly advocating to your representatives. Take a few minutes to call your legislators (or send an email if you can't call). Getting in touch with your legislators can have a huge impact on ending lame-duck power grabs in NC.</p> 
	<p>Fill out your address and click "Find My District" so we know where to send your email (we do not store your address). Then, fill out the text boxes in the template email and send your email!</p>
	<div id='districtFinder'>
		<input type='text' id='petitionAddress' name='petitionAddress' autocomplete='off' placeholder='Fill in your address here...' style='width: 80%'><br>
		<button type='button' onclick='getDistricts()' id='addressSubmit'>Find My District</button>
	</div>

	<h1>Call Your Legislators</h1>
		<p>Phone calls are the most effective way you can advocate to your legislators. Phone calls are entirely customizable, and can last just a few seconds and go something like this:</p>
		<blockquote style='width: 50%; margin: auto;'>
			<b>Them:</b> Hello, Senator Smith's Office.<br>
			<b>You:</b> Hello, I am a constituent of Senator Smith and supporter of NC for Better Government. I'm calling to ask Senator Smith to support legislation to end lame-duck power grabs.<br>
			<b>Them:</b> Thank you, we will make a note of it.
		</blockquote><br>
		<p>You can also have a longer phone call and even speak with your legislator to have your specific thoughts on the issues heard.</p>
		<span id='phoneInfo' style='font-weight: bold;'><i>Once you fill out your district, the phone numbers for your legislators' offices will show up here.</i></span>

	<a name='email'><h1>Send an Email</h1></a>
	<p>If you can't call, personalized emails are another way to get in touch with your legislators. Make sure to find your district using the address tool above so we know which legislator to direct your email to.</p>
	<div>
		<div id='writingEmail'>
			<form method='post' action='#email' style='text-align: center;'>
				<div id='petitionTemplate' name='petitionTemplate'>
					<p>Dear <span id='petitionRecipients'>[State Legislators' Names]</span>,<br><br>

					My name is
					<span id='petitionName' data-placeholder='Your Name' class='expandingInput' contenteditable required></span><span class='required'>*</span>.
					I'm a constituent of yours from
					<span id='petitionHometown' data-placeholder='Your Hometown' class='expandingInput' contenteditable required></span><span class='required'>*</span>
					and a supporter of NC for Better Government.
					<span id='petitionTitle' data-placeholder='Your Title' class='expandingInput' contenteditable></span>
					<sup class='tooltip' onclick='toggleToolTipText()'>
						[?]
						<span class='tooltipText'>Add your occupation (if applicable) and any positions or influence you have in your community. E.g. "I am a student at Davidson College and am a member of the Statesville Chamber of Commerce."</span>
					</sup>
					After learning about lame-duck power grabs and their effects, I am concerned about the effects that continuing to let lame-duck power grabs happen could have on our democracy.<br>
					<textarea id='petitionOtherInfo' name='petitionOtherInfo' class='autoExpand' style='width: 100%; max-width: 100%' placeholder='Personalized emails have a much larger influence on legislators. Add your own thoughts about why ending lame-duck power grabs is so important. Remember to be polite!'></textarea><br>
					<span id='otherInfoSubmitArea'></span><!--this makes it so the other info is seen in the innertext-->
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

				<button id='sendEmail' type='button'>Prep Your Email</button>
				<input type='submit' id='verifiedSendEmail' style='display: none'>
			</form>
		</div>
		<div id='preppedEmail'>
				<p><b>To: </b><span id='legislatorEmailAddresses'>[State Legislators' Emails]</span></p>
				<hr>
				<p><b>Subject:</b> <span id='legislatorEmailSubject'>Please End Lame-Duck Power Grabs in North Carolina</span></p>
				<hr>

				<textarea id='finalEmail' style='width: 100%; max-width: 100%;' class='autoExpand' disabled>
					
				</textarea>
				<a target='_blank' id='finalSendEmail' href='mailto:email@example.com?subject=Could not automatically copy your email&body=Please manually copy your email to here from our website'><button>Send in Default App</button></a>
				<a target='_blank' id='finalSendGmail' href='https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&to=email@example.com&su=Could not automatically copy your email&body=Please manually copy your email to here from our website'><button>Send in Gmail</button></a>
				<button>Send in Another Client</button>
				<br><p>You will still have to click "Send" in the email client you choose, but the email will be automatically drafted for you.</p>
		</div>
	</div>

	<a name='join'><h1>Join Us</h1></a>
	<p>Want to take your impact to the next level? Join us as an official volunteer! Volunteers spread our cause to more people around North Carolina and meet with their legislators to discuss lame-duck power grabs. <a href='volunteer'>Click here</a> to learn more about volunteering and to sign up.</p>
	<p>If you are not sure if you want to sign up as a volunteer yet or are looking for a more low-commitment way to be involved, sign up for our <a href='mailinglist'>monthly mailing list</a>.</p>

	<a name='donate'><h1>Donate</h1></a>
	<p>All donations go directly toward maintaining this website and covering other costs that are incurred in advertising our cause to people around North Carolina. A financial report will be published every quarter detailing our budget.</p>
	<div style='text-align: center;'>
		<iframe src="https://givebutter.com/embed/c/x0xz03" width="100%" height="615px" style="max-width: 601px;" name="givebutter" frameborder="0" scrolling="no" seamless allowpaymentrequest></iframe><script src="https://givebutter.com/js/widget.js"></script>
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

	function getDistricts() {
		var params = {
			'key': <?php echo "'" . $googleApiKey . "'"; ?>,
			'address': document.getElementById('petitionAddress').value,
		}
		$.when($.getJSON('https://www.googleapis.com/civicinfo/v2/representatives', params)).then(function(response) {
			console.log("Response", response);
			console.log(response.offices)
			if (response.normalizedInput.state == 'NC' && response.officials != undefined && response.offices != undefined) {
				response.offices = response.offices.filter(office => {
					return office.name == 'NC State Senator' || office.name == 'NC State Representative';
				})
				if (response.offices.length >= 2) { //should never be over 2 but just in case 
					var senIndex = -1;
					var repIndex = -1;
					for (var x = 0; x < 2; x++) {
						if (response.offices[x].name == 'NC State Senator') {
							senIndex = response.offices[x].officialIndices[0];
						} else if (response.offices[x].name == 'NC State Representative') {
							repIndex = response.offices[x].officialIndices[0];
						}
					}

					response.officials = [response.officials[senIndex], response.officials[repIndex]]; //NOTE this assumes that sen is before rep but thats fine tbh

					console.log('Cleaned Response', response)

					var stringResponse = JSON.stringify(response, null, 0)//.replace(/\'/g, "\\'");//.replace(/\\"/g, '"').replace(/\\n/g, '"').replace(/\r/g, '');
					document.getElementById('districtsHolder').value = stringResponse;
					fillDistrictInfo();
				} else { //google recognizes the address and has some district data for it, but does not have state rep/sen
					alert('We could not find a district for your address. Make sure your address is correct. If it still is not working, please try manually finding your district.');
					clearDistrictInfo();
				}
			} else if (response.normalizedInput.state != 'NC') {
				alert('Please enter an address in North Carolina.');
				clearDistrictInfo();
			} else { //is an address that google recognizes but google does not have any district data for it
				alert('We could not find a district for your address. Make sure your address is correct. If it still is not working, please try manually finding your district.');
				clearDistrictInfo();
			}
		}).fail(function() { //is not an address that google recognizes
			alert('We could not find a district for your address. Make sure your address is correct. If it still is not working, please try manually finding your district.');
			clearDistrictInfo();
		});
	}

	// }, function(err) {
	// 		reportError("Execute error:" + JSON.stringify(err));
	// 		alert('An error was encountered. Please refresh and try again. If you continue to experience errors, please contact us.')
	// 		document.getElementById('loadingScreen').style.display = 'none';
	// 	});
	// }

	function refillPetition(name, title, hometown, otherInfo, districts) {
		document.getElementById('petitionName').innerHTML = name;
		signatureUpdate();
		document.getElementById('petitionTitle').innerHTML = title;
		document.getElementById('petitionHometown').innerHTML = hometown;
		document.getElementById('petitionOtherInfo').innerHTML = otherInfo;
		document.getElementById('districtsHolder').value = districts;
		fillDistrictInfo();
	}

	function fillDistrictInfo() {
		response = JSON.parse(document.getElementById('districtsHolder').value)

		const phone1 = response.officials[0].phones != undefined ? response.officials[0].phones[0] : 'Phone number not found.';
		const phone2 = response.officials[1].phones != undefined ? response.officials[1].phones[0] : 'Phone number not found.';
		const phoneInfo = response.offices[0].name + ' ' + response.officials[0].name + ': <a href="tel:' + phone1 + '">' + phone1 + '</a><br>' + response.offices[1].name + ' ' + response.officials[1].name + ': <a href="tel:' + phone2 + '">' + phone2 + '</a>'
		document.getElementById('phoneInfo').innerHTML = phoneInfo
		//document.getElementById('loadingScreen').style.display = 'none';
		var recipients = response.offices[0].name.split(' ')[2] + ' ' + response.officials[0].name + ' and ' + response.offices[1].name.split(' ')[2] + ' ' + response.officials[1].name;
		document.getElementById('petitionRecipients').innerText = recipients;

		document.getElementById('legislatorEmailAddresses').innerText = response.officials[0].emails[0] + ', ' + response.officials[1].emails[0];

		const address = response.normalizedInput;
		document.getElementById('petitionAddress').value = address.line1 + ', ' + address.city + ', ' + address.state + ' ' + address.zip;
		document.getElementById('petitionHometown').innerText = address.city;
	}

	function clearDistrictInfo() {
		document.getElementById('phoneInfo').innerHTML = 'Once you fill out your district, the phone numbers for your legislators\' offices will show up here.'
		document.getElementById('petitionRecipients').innerText = '[State Legislators\' Names]';
		document.getElementById('legislatorEmailAddresses').innerText = '[State Legislators\' Emails]';
		document.getElementById('petitionAddress').value = '';
		document.getElementById('petitionHometown').innerText = '';
	}


	function prepEmail(name, title, hometown, otherInfo, districts) {
		refillPetition(name, title, hometown, otherInfo, districts); //just do this so I can grab the innertext from the petitiontemplate
		//also that triggers filldistrictinfo which fills the "to:" section
		//TODO hide help tags (required, question)
		document.getElementById('otherInfoSubmitArea').innerHTML = document.getElementById('petitionOtherInfo').value + '<br><br>';
		$('.tooltip,.required').css('display', 'none');
		document.getElementById('finalEmail').value = document.getElementById('petitionTemplate').innerText;
		$('.tooltip,.required').css ('display', 'inline');

		if (document.getElementById('petitionOtherInfo').value != '') {
			document.getElementById('legislatorEmailSubject').innerText = 'Personalized Email - Please End Lame-Duck Power Grabs in North Carolina'
		}

		document.getElementById('finalSendGmail').href = 'https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&to=' + document.getElementById('legislatorEmailAddresses').innerText + '&su=' + document.getElementById('legislatorEmailSubject').innerText + '&body=' + document.getElementById('finalEmail').value.replace(/\n/g, '%0d%0a');
		document.getElementById('finalSendEmail').href = 'mailto:' + document.getElementById('legislatorEmailAddresses').innerText + '?subject=' + document.getElementById('legislatorEmailSubject').innerText + '&body=' + document.getElementById('finalEmail').value.replace(/\n/g, '%0d%0a');

		document.getElementById('writingEmail').style.display = 'none';
		document.getElementById('preppedEmail').style.display = 'block';
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

	
	<p>Adapted from <a href='https://templated.co/swarming'>Swarming</a> by <a href="https://templated.co" rel="nofollow">TEMPLATED</a> | Hosted on <a href='https://www.dreamhost.com/r.cgi?2475375'>Dreamhost</a></p>
</div>
<?php
	include('config.php');

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$rejectForm = false;
		$errorMsg = '';
		if (!isset($_POST['petitionName']) || $_POST['petitionName'] == '') {
			$errorMsg = $errorMsg . 'You have to fill out your name to send your email. ';
			$rejectForm = true;
		}
		if (!isset($_POST['petitionHometown']) || $_POST['petitionHometown'] == '') {
			$errorMsg = $errorMsg . 'Please add your city before you send your email. ';
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
			echo "<script>refillPetition('" . $_POST['petitionName'] . "', '" . $_POST['petitionTitle'] . "', '" . $_POST['petitionHometown'] . "', '" . $_POST['petitionOtherInfo'] . "', `" . $_POST['districts'] . "`)</script>";
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
			if ($result != 1) {
				echo "<script>reportError('The following info was not successfully put into SQL database: " . $_POST['petitionName'] . " - " . $_POST['petitionTitle'] . " - " . $_POST['petitionOtherInfo'] . " - " . $districts['officials'][0]['emails'][0] . " - " . $districts['officials'][1]['emails'][0] . " - " . $datetime . "')</script>";
			}

			echo "<script>prepEmail('" . $_POST['petitionName'] . "', '" . $_POST['petitionTitle'] . "', '" . $_POST['petitionHometown'] . "', '" . $_POST['petitionOtherInfo'] . "', `" . $_POST['districts'] . "`)</script>";

		}


	}

?>
<script src='postload.js'></script>
</body>
</html>