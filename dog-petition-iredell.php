<?php

include('config.php');

if (isset($_POST['first-name'])) {
	$firstName = mysqli_real_escape_string($db,$_POST['first-name']);
	$lastName = mysqli_real_escape_string($db,$_POST['last-name']);
	$email = mysqli_real_escape_string($db,$_POST['email']);
	$city = mysqli_real_escape_string($db,$_POST['city']);
	$state =  mysqli_real_escape_string($db,$_POST['state']);
	$zipCode =  mysqli_real_escape_string($db,$_POST['zip-code']);

	mysqli_query($db, 'INSERT INTO `dog-petition-iredell`(`first-name`, `last-name`, email, city, state, `zip-code`) VALUES ("' . $firstName . '", "' . $lastName . '", "' . $email . '", "' . $city . '", "' . $state . '", "' . $zipCode . '")');

	if (mysqli_errno($db)) {
		echo '<script>reportError("' . $firstName . ',' . $lastName . ',' . $email . ',' . $city . ',' . $state . ',' . $zipCode . "," . mysqli_errno($db) . '");alert("I\'m sorry, we could not process your signature. An alert was sent to our developer and he will try to resolve this as soon as possible.");</script>';
	} else {
		header('Location: dog-petition-thankyou');
		echo '<script>alert("WOW");</script>';
	}
}

?>
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
	<title>About | NC for Better Government</title>
	<meta name="description" content="NC for Better Government is a non-partisan group of passionate volunteers who advocate for good government policies in the North Carolina State Government." />
	<meta name='keywords' content='nc for better government,government,lame-duck power grabs,north carolina'>
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
	<link href="default.css" rel="stylesheet" type="text/css" media="all" />
	<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
	<link rel='icon' href='favicon.ico' type='image/x-icon'/ >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
			<li  class="current_page_item"><a href="takeaction">Take Action</a></li> <!--style='border: 2px solid #1f4a82; border-radius: 5px; background-color: #d6d6d6;'-->
			<li><a href="about">About Us</a></li>
			<li><a href="blog">Blog</a></li>
		</ul>
	</div>
</div>
<script src='tabs.js'></script>
<div class='article'>
	<div style='text-align: center;'>
		<h2 style='font-size: 2em;'>Keep dogs out of truck beds in Iredell County</h2>
		<p style='text-align: center;'>Petition to the Iredell County Board of Commissioners. <?php echo mysqli_num_rows(mysqli_query($db,'SELECT * FROM `dog-petition-iredell`')); ?> people have signed!</p>
		<image src='images/dog-in-truck.jpg' width='600px'></image>
		<br><br>
		<form method='post' name='petition' id='petition'>
			<input name='first-name' placeholder='First Name'>
			<br><input name='last-name' placeholder='Last Name'>
			<br><input name='email' placeholder='Email Address'>
			<br><input name='city' placeholder='City'>
			<select name='state'>
				<option value="AK">Alaska              </option>
				<option value="AL">Alabama             </option>
				<option value="AR">Arkansas            </option>
				<option value="AZ">Arizona             </option>
				<option value="CA">California          </option>
				<option value="CO">Colorado            </option>
				<option value="CT">Connecticut         </option>
				<option value="DC">District Of Columbia</option>
				<option value="DE">Delaware            </option>
				<option value="FL">Florida             </option>
				<option value="GA">Georgia             </option>
				<option value="HI">Hawaii              </option>
				<option value="IA">Iowa                </option>
				<option value="ID">Idaho               </option>
				<option value="IL">Illinois            </option>
				<option value="IN">Indiana             </option>
				<option value="KS">Kansas              </option>
				<option value="KY">Kentucky            </option>
				<option value="LA">Louisiana           </option>
				<option value="MA">Massachusetts       </option>
				<option value="MD">Maryland            </option>
				<option value="ME">Maine               </option>
				<option value="MI">Michigan            </option>
				<option value="MN">Minnesota           </option>
				<option value="MO">Missouri            </option>
				<option value="MS">Mississippi         </option>
				<option value="MT">Montana             </option>
				<option value="NC" selected>North Carolina</option>
				<option value="ND">North Dakota        </option>
				<option value="NE">Nebraska            </option>
				<option value="NH">New Hampshire       </option>
				<option value="NJ">New Jersey          </option>
				<option value="NM">New Mexico          </option>
				<option value="NV">Nevada              </option>
				<option value="NY">New York            </option>
				<option value="OH">Ohio                </option>
				<option value="OK">Oklahoma            </option>
				<option value="OR">Oregon              </option>
				<option value="PA">Pennsylvania        </option>
				<option value="RI">Rhode Island        </option>
				<option value="SC">South Carolina      </option>
				<option value="SD">South Dakota        </option>
				<option value="TN">Tennessee           </option>
				<option value="TX">Texas               </option>
				<option value="UT">Utah                </option>
				<option value="VA">Virginia            </option>
				<option value="VT">Vermont             </option>
				<option value="WA">Washington          </option>
				<option value="WI">Wisconsin           </option>
				<option value="WV">West Virginia       </option>
				<option value="WY">Wyoming             </option>
				<option value="XX">Out-of-Country      </option>
				<option value="XY">Native Tribes       </option>
			</select>
			<input name='zip-code' placeholder='Zip Code'>
			<br><input type='submit'>
		</form>
		<p>
			<strong>Dogs suffer deaths and injuries from riding in truck beds.</strong> The American Humane Society estimates that at least <em>100,000 dogs die each year because they were riding in truck beds</em> <a href="https://www.americanhumane.org/fact-sheet/remember-safety-while-driving-with-pets/#:~:text=It%20is%20estimated%20that%20at,any%20protection%20from%20the%20weather.">[1]</a>. Riding in the back of truck beds also poses several health issues for dogs, such as broken bones, pelvic fractures, internal injuries and spinal cord injuries <a href="https://www.smartbrief.com/branded/D5B61895-8343-46AE-9E8D-69BF8059ECA6/9E6E2D30-C572-48FB-816F-89A475E17FBC">[2]</a>.
			<br><strong>Danger of car accidents.</strong> As much as we love them, dogs are often unpredictable. Dogs can easily jump or be thrown out of a moving truck bed into the middle of traffic. Unrestrained dogs like the one in <a href="https://www.fox13now.com/news/local-news/video-of-dog-balancing-in-back-of-flatbed-truck-on-utah-highway-fuels-fire-for-legislation">this video</a> can easily interrupt traffic and lead to deadly car accidents <a href="https://www.fox13now.com/news/local-news/video-of-dog-balancing-in-back-of-flatbed-truck-on-utah-highway-fuels-fire-for-legislation">[3]</a>.
			<br><strong>NC constituents want change.</strong> As one humane group put it, “we receive a lot of calls, especially in the summer, from drivers who are extremely concerned for the well-being of a dog they see riding in the back of a truck <a href="https://www.utahhumane.org/media/humane-society-utah-supports-transportation-dogs-hb-386">[4]</a>." Rowan County has already passed a measure banning dogs from riding unrestrained in the back of truck beds <a href="https://library.municode.com/nc/rowan_county/codes/code_of_ordinances?nodeId=COOR_CH5AN">[5]</a>.
			<br><strong>Ambiguity of Iredell County’s Animal Ordinance Language.</strong> Iredell County’s current animal ordinance language does not specifically prohibit the transport of dogs in truck beds <a href="https://library.municode.com/nc/iredell_county/codes/code_of_ordinances?nodeId=COOR_CH3AN">[5]</a>. This vague language limits law enforcement from preventing these situations, and as a result, dogs continue to ride in truck beds in Iredell County.
		</p>
		<p>We can keep dogs out of truck beds in Iredell County, protecting both dogs and humans on the road. <strong>The Iredell County Board of Commissioners must amend the animal control ordinance to require dogs to be secured if they are in the back of truck beds.</strong></p>
	</div>
</div>
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
<script src='postload.js'></script>
</body>
</html>
