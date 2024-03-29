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
	<meta name="description" content="The best way to cause change in government is by directly advocating to your representatives. Take a few minutes to call your legislators about ending lame-duck power grabs in NC." />
	<meta name='keywords' content='nc for better government,government,lame-duck power grabs,north carolina'>
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
<div id='generalPopupBackground' class='popupBackground' onclick='hidePopup()'>
	<span id='popupInfo' onclick='hidePopup()'></span>
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
			<li><a href="causes">Our Causes</a></li>
			<li class="current_page_item"><a href="takeaction">Take Action</a></li> <!--style='border: 2px solid #1f4a82; border-radius: 5px; background-color: #d6d6d6;'-->
			<li><a href="about">About Us</a></li>
			<li><a href="blog">Blog</a></li>
		</ul>
	</div>
</div>
<script src='tabs.js'></script>
<div class='article'>
	<div id='introBox'>
		<h1>How to Make a Difference</h1>
		<div style='width: 100%; text-align: center;'>
			<ol style='display: inline-block; font-size: 15pt; border: 1px solid black; text-align: left; padding: 10px 20px 10px 40px;'>
				<li>Fill out your address and click "Find My District".</li>
				<li>Choose whether you want to call or email.</li>
				<li>Personalize your email or make your call.</li>
			</ol>
		</div>
		<div id='districtFinder'>
			<input type='text' id='petitionAddress' name='petitionAddress' autocomplete='off' placeholder='Fill in your address here...' style='width: 80%; padding: 5px; font-size: 12pt; margin-bottom: 10px;'><br>
			<button type='button' onclick='getDistricts()' style='font-size: 12pt;' id='addressSubmit'>Find My District</button>
		</div>
	</div>

	<div style='display: none;' id='callBox'>
		<a name='call'><h1>Call Your Legislators</h1></a>
		<p>Phone calls are the most effective way you can advocate to your legislators. Phone calls are entirely customizable, and can last just a few seconds and go something like this:</p>
		<blockquote style='width: 50%; margin: auto;'>
			<b>Them:</b> Hello, Senator Smith's Office.<br>
			<b>You:</b> Hello, I am a constituent of Senator Smith and supporter of NC for Better Government. I'm calling to ask Senator Smith to support legislation to end lame-duck power grabs.<br>
			<b>Them:</b> Thank you, we will make a note of it.
		</blockquote><br>
		<p>You can also have a longer phone call and even speak with your legislator to have your specific thoughts on the issues heard.</p>
		<span id='phoneInfo' style='font-weight: bold;'><i>Once you fill out your district, the phone numbers for your legislators' offices will show up here.</i></span>
		<br><br>
		<button id='callReporting' style='display: none; margin: auto;' onclick='showCallReportForm()'><b>Called Your Legislator? Let Us Know!</b></button>
		<form method='post' action='#call' id='callReportForm' style='display: none; border: 1px solid black; font-family: sans-serif; padding: 10px;'>
			Please take a second to tell us which legislator's office you called and how the call went. This helps us keep track of how many legislators are hearing about ending lame-duck power grabs. <br><br>
			<div style='text-align: center;'>
				<input name='callerName' type='text' placeholder='Your Name' style='margin-bottom: 10px'>
				<input name='callDetails' type='text' placeholder='Call Details' style='width: calc(100% - 10px); margin-bottom: 10px;'><br>
				<input type='submit' name='submitCallDetails'>
			</div>
		</form>
	</div>

	<div id='emailBox' style='display: none;'>
		<a name='email'><h1>Send an Email</h1></a>
		<p>If you can't call, personalized emails are another way to get in touch with your legislators. Make sure to find your district using the address tool above so we know which legislator to direct your email to.</p>
		<div id='writingEmail'>
			<form method='post' action='#email' style='text-align: center;'>
				<div id='petitionTemplate' name='petitionTemplate'>

					<b>To: </b><span id='legislatorEmailAddresses'>[State Legislators' Emails]</span><br>
					<div style='text-align: right;'><button type='button' class='copyButton' onclick='copyText("legislatorEmailAddresses", 0)'>Copy to Clipboard</button></div>
					<hr>
					<b>Subject: </b><span id='legislatorEmailSubject'>Please End Lame-Duck Power Grabs in North Carolina</span><br>
					<div style='text-align: right;'><button type='button' class='copyButton' onclick='copyText("legislatorEmailSubject", 1)'>Copy to Clipboard</button></div>
					<hr>
					<p>
						Dear <span id='petitionRecipients'>[State Legislators' Names]</span>,<br><br>

						My name is
						<span id='petitionName' data-placeholder='Your Name' class='expandingInput' contenteditable required></span><span class='required'>*</span>.
						I'm a constituent of yours from
						<span id='petitionHometown' data-placeholder='Your Hometown' class='expandingInput' contenteditable required></span><span class='required'>*</span>.
						<span id='petitionTitle' data-placeholder='Your Title' class='expandingInput' contenteditable></span>
						<sup class='tooltip' onclick='toggleToolTipText()'>
							[?]
							<span class='tooltipText'>Add your occupation (if applicable) and any positions or influence you have in your community. E.g. "I am a student at Davidson College and am a member of the Statesville Chamber of Commerce."</span>
						</sup>
						I recently learned about lame-duck changes to the powers of elected offices, where the state legislature can make changes to an office right after the election so that an elected official ends up taking a different office than the one they were elected to.
						This undermines the right of the people to pick the best candidate for a given office by allowing a lame-duck legislature to change that office itself right after the election.<br>
						<textarea id='petitionOtherInfo' name='petitionOtherInfo' class='autoExpand' style='width: 100%; max-width: 100%' placeholder='Personalized emails have a much larger influence on legislators. Add your own thoughts about why ending lame-duck power grabs is so important. Remember to be polite!'></textarea><br>

						Should you be re-elected to the NC General Assembly this November, I ask you to oppose lame-duck changes to the powers of elected offices and support legislation to end this practice in North Carolina.<br><br>

						Sincerely,<br><br>

						<span id='petitionSignature' class='expandingInput' data-placeholder='Your Name' disabled></span>
						<!--this copy button is floated instead of text aligned because there is blank space to the right of the salutation where it can be and look better than being below-->
						<button type='button' style='float: right;' class='copyButton' onclick='document.getElementById("finalEmail").style.display = "block"; copyText("finalEmail", 2); document.getElementById("finalEmail").style.display = "none";'>Copy to Clipboard</button>
					</p>
					
				
					<!--<div class='g-recaptcha' data-sitekey='6Lci1acZAAAAAAGcka5BTjUPbg6BUpTlsWQokCEA'></div>-->
				</div><br>

				<textarea name='petitionName' id='nameHolder' style='display: none;'></textarea>
				<textarea name='petitionTitle' id='titleHolder' style='display: none;'></textarea>
				<textarea name='petitionHometown' id='hometownHolder' style='display: none;'></textarea>
				<input name='districts' id='districtsHolder' style='display: none;'>
				<input name='redirectURL' id='redirectURLHolder' style='display: none;'>

				<!--<button id='sendGmail' type='button'>Send in Gmail</button>-->
				<a target="_blank" id="gmailLink" onclick='document.getElementById("verifiedSendEmail").click()'><button type='button'>Send in Gmail</button></a>
				<a target="_blank" id="emailLink" onclick='document.getElementById("verifiedSendEmail").click()'><button type='button'>Send in Default Mail App</button></a>
				<a target="_blank" onclick='document.getElementById("verifiedCopyEmail").click()'><button type='button'>Send in Other Mail App/Site</button></a><br><br>
				<p>Clicking the "send" button will automatically draft the email and open your preferred email client. You will then have to click send. Alternatively, you can copy and paste the email into your preferred email application.</p>

				<input type='submit' name='prepSendEmail' id='verifiedSendEmail' style='display: none;'>
				<input type='submit' name='prepCopyEmail' id='verifiedCopyEmail' style='display: none;'>
				<!--
				<a target='_blank' id='finalSendEmail' href='mailto:email@example.com?subject=Could not automatically copy your email&body=Please manually copy your email to here from our website'><button>Send in Default App</button></a>
				<a target='_blank' id='finalSendGmail' href='https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&to=email@example.com&su=Could not automatically copy your email&body=Please manually copy your email to here from our website'><button>Send in Gmail</button></a>
				<button>Send in Another Client</button>
				-->
			</form>

			<!--this is just used as global storage fix this lol-->
			<span style='display: none;' id='finalEmail'></span>
		</div>

	</div>

	<br><hr>

	<!--<a name='donate'><h1>Donate</h1></a>
	<p>All donations go directly toward maintaining this website and covering other costs that are incurred in advertising our cause to people around North Carolina. A financial report will be published every quarter detailing our budget.</p>
	<div style='text-align: center;'>
		<iframe src="https://givebutter.com/embed/c/x0xz03" width="100%" height="615px" style="max-width: 601px;" name="givebutter" frameborder="0" scrolling="no" seamless allowpaymentrequest></iframe><script src="https://givebutter.com/js/widget.js"></script>
	</div>-->
</div>
<div class='article'>
	<h1>Volunteer Information</h1>
	<b>Volunteer Opportunities:</b>
	<p>Volunteers are the most important part of NC for Better Government. As a constituent in NC, your legislators will listen to you if you make your voice heard. Volunteers for NC for Better Government advocate to their state legislators through meetings, phone calls, social media, and attending events. Volunteers also spread the cause by getting more people to call their legislators and advertising the cause through different outlets. Alternatively, you can sign up for our <a href='mailinglist'>mailing list</a>.</p>
	<b>Benefits:</b>
	<ul>
		<li>Connect with state legislators.</li>
		<li>Learn how to influence elected officials.</li>
		<li>Join a community of people interested in politics and activism in North Carolina.</li>
		<li>Have a real positive impact on government in North Carolina.</li>
	</ul>
	<b>Volunteer Responsibilities:</b>
	<ul>
		<li>Meet with your state legislator to discuss lame-duck power grabs and attend their (virtual or physical) campaign events.</li>
		<li>Get 20 people to call (or email) each month.</li>
		<li>Email and call your state legislators once each month.</li>
	</ul>
	<b>Other specific things you can do as a volunteer include:</b>
	<ul>
		<li>Attend virtual or physical events that your state legislator holds.</li>
		<li>Communicate with their legislator via social media</li>
		<li>Communicate with community leaders to get their support of NC for Better Government</li>
		<li>Find other ways to market NC for Better Government, such as through traditional media or attending events.</li>
	</ul>
	<h1>Join Us</h1>
	<p>Thank you for your interest in volunteering with us! To continue, please fill out the form below. We will get back to you within 48 hours to schedule a phone call to talk more about your role in NC for Better Government.</p>
	<div style='text-align: center;'><iframe src="https://docs.google.com/forms/d/e/1FAIpQLSda8Ke7cFIc7ZJ84Rva88Zlk8PetzCt7sk-hh7-snn2rWD3Ug/viewform?embedded=true" width="640" height="850" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe></div>

	<h1>Our Volunteers</h1>
	<div class='volunteerList'>
		<div>
			<img src='images/volunteers/4.jpg'>
			<p class='volunteerName'>Anuragh Sriram</p>
			<p>Asheboro, NC</p>
			<i>Joined July 2020</i>
		</div>
		<div>
			<img src='images/volunteers/5.jpg'>
			<p class='volunteerName'>Hanna DeBord</p>
			<p>Piney Creek, NC</p>
			<i>Joined July 2020</i>
		</div>
		<div>
			<img src='images/volunteers/8.jpg'>
			<p class='volunteerName'>Nnamdi Obi</p>
			<p>Greenville, NC</p>
			<i>Joined July 2020</i>
		</div>
		<div>
			<img src='images/volunteers/1.jpg'>
			<p class='volunteerName'>Nathan Zhang</p>
			<p>Winston-Salem, NC</p>
			<i>Joined July 2020</i>
		</div>
		<div>
			<img src='images/volunteers/no.jpg'>
			<p class='volunteerName'>Carson Sullivan</p>
			<p>Wilkes, NC</p>
			<i>Joined July 2020</i>
		</div>
		<div>
			<img src='images/volunteers/no.jpg'>
			<p class='volunteerName'>Frank Lin</p>
			<p>Rocky Mount, NC</p>
			<i>Joined July 2020</i>
		</div>
		<div>
			<img src='images/volunteers/no.jpg'>
			<p class='volunteerName'>Sydney Mason</p>
			<p>Hillsborough, NC</p>
			<i>Joined July 2020</i>
		</div>
		<div>
			<img src='images/volunteers/no.jpg'>
			<p class='volunteerName'>James Li</p>
			<p>Kernersville, NC</p>
			<i>Joined August 2020</i>
		</div>
		<div>
			<img src='images/volunteers/no.jpg'>
			<p class='volunteerName'>Vihaan Ambre</p>
			<p>Cary, NC</p>
			<i>Joined August 2020</i>
		</div>
		<div>
			<img src='images/volunteers/no.jpg'>
			<p class='volunteerName'>Aarav Mehta</p>
			<p>Raleigh, NC</p>
			<i>Joined August 2020</i>
		</div>
		<div>
			<img src='images/volunteers/no.jpg'>
			<p class='volunteerName'>Marwan Bit</p>
			<p>Waxhaw, NC</p>
			<i>Joined September 2020</i>
		</div>
		<div>
			<img src='images/volunteers/no.jpg'>
			<p class='volunteerName'>Maken Koilakh</p>
			<p>Hickory, NC</p>
			<i>Joined September 2020</i>
		</div>
		<div>
			<img src='images/volunteers/no.jpg'>
			<p class='volunteerName'>Ryan S. Kalo</p>
			<p>Gibsonville, NC</p>
			<i>Joined September 2020</i>
		</div>
		<div>
			<img src='images/volunteers/no.jpg'>
			<p class='volunteerName'>Brandon Tucker</p>
			<p>Charlotte, NC</p>
			<i>Joined September 2020</i>
		</div>
		<div>
			<img src='images/volunteers/no.jpg'>
			<p class='volunteerName'>Jack McMahon</p>
			<p>Beaufort, NC</p>
			<i>Joined November 2020</i>
		</div>
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

	//if mobile no gmail option
	//from https://stackoverflow.com/questions/3514784/what-is-the-best-way-to-detect-a-mobile-device
	if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
		|| /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) { 
		document.getElementById('gmailLink').style.display = 'none';
	}


	//submit address if you select a google autocomplete
	/*google.maps.event.addListener(autocomplete, 'place_changed', function() {
		document.getElementById('addressSubmit').click();
	});*/

	//from https://www.arclab.com/en/kb/htmlcss/how-to-copy-text-from-html-element-to-clipboard.html
	function copyText(id, buttonNumber) {
		var r = document.createRange();
		r.selectNode(document.getElementById(id));
		window.getSelection().removeAllRanges();
		window.getSelection().addRange(r);
		document.execCommand('copy');
		window.getSelection().removeAllRanges();

		document.getElementsByClassName('copyButton')[buttonNumber].innerText = 'Copied!';
		setTimeout(function() {
			document.getElementsByClassName('copyButton')[buttonNumber].innerText = 'Copy to Clipboard';
		}, 2000);
	}

	document.getElementById('emailBox').addEventListener('input', prepEmail);

	//makes it so when the submit button is clicked all the hidden inputs have the needed info in them
	function prepEmail() {
		document.getElementById('nameHolder').value = document.getElementById('petitionName').innerText;
		document.getElementById('titleHolder').value = document.getElementById('petitionTitle').innerText;
		document.getElementById('hometownHolder').value = document.getElementById('petitionHometown').innerText;
		$('.tooltip,.required').css('display', 'none');
		document.getElementById('finalEmail').innerHTML = "Dear " + document.getElementById('petitionRecipients').innerText + ",\n\nMy name is " + document.getElementById('nameHolder').value + ". I'm a constituent of yours from " + document.getElementById('hometownHolder').value + ". " + document.getElementById('titleHolder').value + "I recently learned about lame-duck changes to the powers of elected offices, where the state legislature can make changes to an office right after the election so that an elected official ends up taking a different office than the one they were elected to. This undermines the right of the people to pick the best candidate for a given office by allowing a lame-duck legislature to change that office itself right after the election." + document.getElementById('petitionOtherInfo').value + "Should you be re-elected to the NC General Assembly this November, I ask you to oppose lame-duck changes to the powers of elected offices and support legislation to end this practice in North Carolina.\n\nSincerely,\n\n" + document.getElementById('nameHolder').value;
		//old document.getElementById('finalEmail').innerHTML = "Dear " + document.getElementById('petitionRecipients').innerText + ",\n\nMy name is " + document.getElementById('nameHolder').value + ". I'm a constituent of yours from " + document.getElementById('hometownHolder').value + " and a supporter of NC for Better Government. " + document.getElementById('titleHolder').value + " After learning about lame-duck power grabs and their effects, I am concerned about the effects that continuing to let lame-duck power grabs happen could have on our democracy.\n" + document.getElementById('petitionOtherInfo').value + "\nI think this needs to be addressed by our state legislature. Should you be re-elected to the NC General Assembly this November, I ask you to oppose lame-duck power grabs and support legislation to end them in North Carolina.\n\nSincerely,\n\n" + document.getElementById('nameHolder').value;
		console.log(document.getElementById('finalEmail').innerHTML);
		$('.tooltip,.required').css ('display', 'inline');

		if (document.getElementById('petitionOtherInfo').value != '') {
			document.getElementById('legislatorEmailSubject').innerText = 'Personalized Email - Please End Lame-Duck Power Grabs in North Carolina'
		}

		if (document.getElementById('petitionName').innerText != '' && document.getElementById('petitionHometown').innerText != '') {
			document.getElementById('gmailLink').href = 'https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&to=' + document.getElementById('legislatorEmailAddresses').innerText + '&su=' + document.getElementById('legislatorEmailSubject').innerText + '&body=' + document.getElementById('finalEmail').innerHTML.replace(/\n/g, '%0d%0a');
			document.getElementById('emailLink').href = 'mailto:' + document.getElementById('legislatorEmailAddresses').innerText + '?subject=' + document.getElementById('legislatorEmailSubject').innerText + '&body=' + document.getElementById('finalEmail').innerHTML.replace(/\n/g, '%0d%0a');
		} else {
			document.getElementById('gmailLink').removeAttribute('href');
			document.getElementById('emailLink').removeAttribute('href');
		}
	}

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
					document.getElementById('callBox').style.display = 'block';
					document.getElementById('emailBox').style.display = 'block';
					document.getElementById('districtFinder').style.display = 'none';
					prepEmail(); //so there is something in finalemail in case someone clicks the copy to clipboard button before making changes
					document.getElementById('petitionOtherInfo').dispatchEvent(new Event("input")); //this makes sure the textbox is correctly sized before you input
				} else { //google recognizes the address and has some district data for it, but does not have state rep/sen
					showPopup('We could not find a district for your address. Make sure your address is correct. If it still is not working, please try manually finding your district.');
					clearDistrictInfo();
				}
			} else if (response.normalizedInput.state != 'NC') {
				showPopup('Please enter an address in North Carolina.');
				clearDistrictInfo();
			} else { //is an address that google recognizes but google does not have any district data for it
				showPopup('We could not find a district for your address. Make sure your address is correct. If it still is not working, please try manually finding your district.');
				clearDistrictInfo();
			}
		}).fail(function() { //is not an address that google recognizes
			showPopup('We could not find a district for your address. Make sure your address is correct. If it still is not working, please try manually finding your district.');
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
		getDistricts()
		prepEmail();
	}

	function fillDistrictInfo() {
		response = JSON.parse(document.getElementById('districtsHolder').value)

		const phone1 = response.officials[0].phones != undefined ? response.officials[0].phones[0] : 'Phone number not found.';
		const phone2 = response.officials[1].phones != undefined ? response.officials[1].phones[0] : 'Phone number not found.';
		const phoneInfo = response.offices[0].name + ' ' + response.officials[0].name + ': <a href="tel:' + phone1 + '">' + phone1 + '</a><br>' + response.offices[1].name + ' ' + response.officials[1].name + ': <a href="tel:' + phone2 + '">' + phone2 + '</a>'
		document.getElementById('callReporting').style.display = 'block';
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
		document.getElementById('callReporting').style.display = 'none';
		document.getElementById('callReportForm').style.display = 'none';
		document.getElementById('petitionRecipients').innerText = '[State Legislators\' Names]';
		document.getElementById('legislatorEmailAddresses').innerText = '[State Legislators\' Emails]';
		document.getElementById('petitionAddress').value = '';
		document.getElementById('petitionHometown').innerText = '';
	}

	function showCallReportForm() {
		document.getElementById('callReporting').style.display = 'none';
		document.getElementById('callReportForm').style.display = 'block';
	}

	function showPopup(text) {
		document.getElementById('generalPopupBackground').style.display = 'block';
		document.getElementById('popupInfo').innerText = text;
	}

	function hidePopup() {
		document.getElementById('generalPopupBackground').style.display = 'none';
	}

</script>
<div id="copyright" class="container">
	<ul class='contact'>
		<li><a href="https://www.facebook.com/ncforbettergovt" class="icon icon-facebook"></a></li>
		<li><a href="https://www.instagram.com/ncforbettergovt/" class="icon icon-instagram"></a></li>
		<!-- <li><a href="comingsoon" class="icon icon-twitter"></a></li> -->
		<li><a href="https://www.linkedin.com/company/ncforbettergovt" class="icon icon-linkedin"></a></li>
		<li><a href="takeaction#mailinglist" class="icon icon-rss"></a></li>
	</ul>

	
	<p>Hosted on <a href='https://www.dreamhost.com/r.cgi?2475375'>Dreamhost</a></p>
</div>
<?php
	include('config.php');

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$rejectForm = false;
		$errorMsg = '';
		if (isset($_POST['prepSendEmail']) || isset($_POST['prepCopyEmail'])) {
			if (!isset($_POST['petitionName']) || $_POST['petitionName'] == '') {
				$errorMsg = $errorMsg . 'Please fill out your name to send your email. ';
				$rejectForm = true;
			}
			if (!isset($_POST['petitionHometown']) || $_POST['petitionHometown'] == '') {
				$errorMsg = $errorMsg . 'Please add your city before you send your email. ';
				$rejectForm = true;
			}
			if (!isset($_POST['districts']) || $_POST['districts'] == '') {
				$errorMsg = $errorMsg . 'Please fill out your address and click "find my district" so we know which legislator to send your email to. We do not store your address. ';
				$rejectForm = true;
			}
			/*if (!isset($_POST['g-recaptcha-response']) || $_POST['g-recaptcha-response'] == '') {
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
			}*/

			//TODO should I have used session? Probably. Although I only want it to store on failure. Otherwise its harder to share computer and easier to send duplicates to database that don't actually get mailed.
			if ($rejectForm) {
				echo "<script>refillPetition('" . $_POST['petitionName'] . "', '" . $_POST['petitionTitle'] . "', '" . $_POST['petitionHometown'] . "', '" . $_POST['petitionOtherInfo'] . "', `" . $_POST['districts'] . "`)</script>";
				echo "<script>
				showPopup('" . $errorMsg . "');
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

				echo "<script>refillPetition('" . $_POST['petitionName'] . "', '" . $_POST['petitionTitle'] . "', '" . $_POST['petitionHometown'] . "', '" . $_POST['petitionOtherInfo'] . "', `" . $_POST['districts'] . "`);</script>";

				if (isset($_POST['prepSendEmail'])) {
					echo "<script>showPopup('Thank you for sending an email!')</script>";
				} else {
					echo '<script>showPopup("To send your email through a different mail app/website, copy the email from this page into your preferred app/website.");$(".copyButton").css ("display", "inline-block");</script>';
				}


			}
		} elseif (isset($_POST['submitCallDetails'])) {
			$name = $_POST['callerName'];
			$details = $_POST['callDetails'];
			$datetime = gmdate("Y-m-d H:i:s");
			$result = mysqli_query($db, "INSERT INTO call_log (name, details, time) VALUES ('$name', '$details', '$datetime')");
			if ($result != 1) {
				echo "<script>reportError('The following info was not successfully put into SQL database: " . $_POST['petitionName'] . " - " . $_POST['petitionTitle'] . " - " . $_POST['petitionOtherInfo'] . " - " . $districts['officials'][0]['emails'][0] . " - " . $districts['officials'][1]['emails'][0] . " - " . $datetime . "')</script>";
			}
		}
	}

?>
<script src='postload.js'></script>
</body>
</html>