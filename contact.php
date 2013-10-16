<!-- =========================== | INCLUDE MIND BODY API SCRIPT | =========================== -->
<?php
	// load in the class services | this loads the classes / times / teacher of the day
	require_once("mbAPI/includes/classService.php");

?>
<!-- =========================== | !!!END INCLUDE MIND BODY API SCRIPT | =========================== -->

<!doctype html>

<!-- HTML5 Boilerplate -->
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"><!--<![endif]-->

<head>
	<meta charset="utf-8">

	<title>This is an awesome title</title>

	<meta name="description" content="Here is the description">
	<meta name="author" content="Summit Projects">

	<!-- Mobile Default Settings -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
   	<meta name="viewport" content="width=device-width, initial-scale=1" user-scalable="no">
    <meta http-equiv="cleartype" content="on">

	<!-- Geo Location Meta Tag | Generator http://geo-tag.de/generator/en.html -->
	<meta name="geo.region" content="US-OR" />
	<meta name="geo.placename" content="Hood River" />
	<meta name="geo.position" content="45.70896;-121.512487" />
	<meta name="ICBM" content="45.70896, -121.512487" />

	<!--[if (lt IE 9) & (!IEMobile)]>
	<script src="js/selectivizr-min.js"></script>
	<![endif]-->

	<!-- Icons -->

	<!-- 144x144 -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="app-icons/icon-72@2x.png">

	<!-- 114x114 -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="app-icons/icon@2x.png">

    <!-- 72x72 -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="app-icons/icon-72.png">

    <!-- 57x57 -->
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="app-icons/icon.png">

    <!-- Main Icon -->
    <link rel="apple-touch-icon-precomposed" href="app-icons/icon.png">

	<!-- 16x16 -->
	<link rel="shortcut icon" href="/favicon.ico">

	<!-- 32x32 -->
	<link rel="shortcut icon" href="/favicon.png">

	<!--iOS Prefs -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="apple-mobile-web-app-title" content="320 and Up">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">

	<meta name="msapplication-TileImage" content="img/apple-touch-icon-144x144-precomposed.png">
	<meta name="msapplication-TileColor" content="#000">
	<meta http-equiv="cleartype" content="on">

	<!-- Web Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>

	<!-- For all browsers -->
	<link rel="stylesheet" href="css/style.css">

	<!-- JavaScript -->
	<script src="js/modernizr-2.5.3-min.js"></script>


</head>

<body>


<!-- =========================== | GLOBAL PAGE WRAP | =========================== -->
<div id="pageWrap" class="pageWrap">



	<!-- =========================== | MOBILE GLOBAL NAV | =========================== -->
	<!-- Mobile nav | Animates in on click of #mIcon -->
	<!-- | ID | used as a hook for the mobile nav js -->
	<nav class="mNav mMenuSlide mOnly hidden" id="mMenu">
		<h2>Root Down</h2>
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Classes</a></li>
			<li><a href="#">Workshops</a></li>
			<li><a href="#">Blog</a></li>
		</ul>
	</nav>
	<!-- ========================= | !!!END MOBILE GLOBAL | ========================= -->



	<!-- =========================== | PAGE PUSHER | Created to "push" the page over for mobile nav  =========================== -->
	<div class="pagePush">



		<!-- =========================== | GLOBAL WRAP | wraps all centent =========================== -->
		<div class="gWrap">



			<!-- =========================== | GLOBAL WRAP INNER | extra div for emulating position:fixed of the menu =========================== -->
			<div class="gWrapInner">



				<!-- ============================================================================================================ 
						
				START WEBSITE | ALL CONTENT 

				==============================================================================================================-->
				


				<!-- =========================== | GLOBAL HEADER | =========================== -->
				<header class="gHeader fullWrap">
					<section class="mid brandWrap">

						<!-- Mobile Nav Icon | Opens mobile nav on click -->
						<!-- | ID | used as a hook for the mobile nav js -->
						<div id="mIconWrap">
							<!-- Data effect attr is set to mobile nav class -->
							<!-- | ID | used as a hook for the mobile nav js -->
							<a data-effect="mMenuSlide" id="mIcon" class="navIcon mOnly"><i class="icon-reorder"></i></a>
						</div>
						<!-- !!!END mobile nav icon -->

						<h1 class="brand">Root Down Yoga</h1>
						<h2 class="hidden">Power Yoga for the Gorge</h2>
						<a href="#" class="gSocial gFacebook nonM">Follow on Facebook</a>
						<a href="#" class="gSocial gInstagram nonM">Follow on Instagram</a>
					</section>
					<section class="fullWrap gNavWrap">
						<nav class="gNav mid">
							<ul>
								<li><a href="#">Home</a></li>
								<li><a href="#">About</a></li>
								<li><a href="#">Classes</a></li>
								<li><a href="#">Workshops</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</nav>
					</section>
				</header>
				<!-- ========================= | END GLOBAL HEADER | ========================= -->




				<!-- =========================== | GLOBAL HERO WRAP | =========================== -->
				<section class="gHeroWrap fullWrap">

						<!-- Global Hero | Main image / video / slider after header -->
						<section class="gHero full map">
							<div class="heroContact">
								<a href="#">541.771.8144</a>
								<span>202 Cascade ave. Hoor River, OR</span>
								<ul class="heroContactSocial">
									<li><a href="#">Facebook</a></li>
									<li><a href="#">Instagram</a></li>
									<li><a href="#">Twitter</a></li>
									<li><a href="#">Pintrest</a></li>
								</ul>
							</div>

							<!-- Google Maps -->
							<div class="mapWrap">
								<iframe width="1200" height="330" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=202+Cascade+ave.+Hoor+River,+OR&amp;aq=&amp;sll=44.145447,-120.583402&amp;sspn=6.086168,10.656738&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=202+Cascade+Ave,+Hood+River,+Oregon+97031&amp;ll=45.716967,-121.512566&amp;spn=0.019776,0.102911&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=202+Cascade+ave.+Hoor+River,+OR&amp;aq=&amp;sll=44.145447,-120.583402&amp;sspn=6.086168,10.656738&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=202+Cascade+Ave,+Hood+River,+Oregon+97031&amp;ll=45.716967,-121.512566&amp;spn=0.019776,0.102911&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small>
							</div>
							<!-- !!!END GOOGLE MAPS -->

						</section>
						<!-- !!!END GLOBAL HERO -->

				</section>
				<!-- ========================= | END GLOBAL HERO WRAP | ========================= -->



				<!-- =========================== | CONTENT WRAP | =========================== -->
				<div class="gContent">



				<!-- =========================== | Global Tout Padding | Wraps touts and creates padding =========================== -->
				<div class="gToutPad">



					<!-- =========================== | GLOBAL TOUT WRAP | =========================== -->
					<section class="fullWrap gToutWrap hTest">
						
						
						<!-- Schedule Tout | This is the global schedule tout -->
						<section class="module gTout gSchedule half">
							<div class="testing">
								<a href="#" class="btn share nonM"><i class="icon-share-alt"></i>Share</a>
								<h2><date>Thursday, 15th <span>Nov 2013</span></date></h2>
								<!-- Global Schedule Wrap -->
								<div class="gShedWrap">



									<!-- =========================== | GET GLOBAL SCHEDULE FROM API | =========================== -->



									<?php
										
										// Creds to interface with the API
										$sourcename = "MoxyDevTeam";
										$password = "FOOWyuk6cG7NK0xwvtHyfQ5HRYY=";
										$siteID = "23456";

										// initialize default credentials
										$creds = new SourceCredentials($sourcename, $password, array($siteID));

										$classService = new MBClassService();
										$classService->SetDefaultCredentials($creds);

										$result = $classService->GetClassDescriptions(array(), array(), array(), null, null, 10, 0);

										$cdsHtml = '
											<table>
												<tr>
													<td>ID</td>
													<td>Name</td>
												</tr>';

										$cds = toArray($result->GetClassDescriptionsResult->ClassDescriptions->ClassDescription);

										foreach ($cds as $cd) {
											$cdsHtml .= sprintf('<tr><td>%d</td><td>%s</td></tr>', $cd->ID, $cd->Name);
										}

										$cdsHtml .= '</table>';
											
										echo($cdsHtml); 

									?>



									<!-- =========================== | END GET GLOBAL SCHEDULE | =========================== -->




								</div>
								<!-- !!!END GLOBAL SCHEDULE WRAP -->
								<a href="#" class="btn mOnly signUp">Sign Up for Class Now</a>
								<a href="#" class="btn mOnly left">Call Root Down</a>
								<a href="#" class="btn mOnly right">Directions</a>
							</div>
						</section>
						<!-- !!!END SCHEDULE TOUT -->


						<!-- Specials Tout | This is the global specials tout it promotes current yoga specials -->
						<section class="module gTout prices half">
							
							<!-- Left Column Prices-->
							<section class="half">
								<h2>Power for the gorge</h2>
								<a href="#" class="btn">See Instagram</a>
							</section>
							<!-- !!!END LEFT COLUMN PRICES -->


							<!-- Right Column Prices-->
							<section class="half">
								<h2>Look for us</h2>
								<p>Cras mattis consectetur purus sit amet fermentum. Donec id elit non mi porta gravida at eget metus. Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.</p>
							</section>
							<!-- !!!END RIGHT COLUMN PRICES -->

						</section>
						<!-- !!!END SPECIALS TOUT -->
						
					</section>
					<!-- ========================= | END GLOBAL TOUT WRAP | ========================= -->

				</div>
				<!-- =========================== | END GLOBAL TOUT PADDING | =========================== -->



				<!-- ============================= | CONTACT WRAP | ============================= -->
				<section class="fullWrap">
				

					<section class="full">

						<!-- Contact Info Column -->
						<section class="half">

							<!-- Drop us a line -->
							<div class="row">
								<h2>Drop us a line</h2>
								<p>Baptiste Power yoga is a powerful and all inclusive yoga practice that has evolved from various eastern and western practices. It is a flowing yoga practice that emphasizes building strength and flexibility as well as cultivating a peaceful mind, grounded energy, and true balance. The “Power” refers to tapping into your inner power, tuning into to what inspires you and challenging yourself to exceed your expectations.</p>
								<ul class="contactInfo">
									<li>Angela Logan</li>
									<li><a href="#">Info@getrootdown.com</a></li>
									<li><a href="#">541.399.7788</a></li>
								</ul>
							</div>
							<!-- !!!END DROP US A LINE -->

							<!-- Drop us a line -->
							<div class="row">
								<h2>Subscribe to our newsletter</h2>
								<p>Baptiste Power yoga is a powerful and all inclusive yoga practice that has evolved from various eastern and western practices. It is a flowing yoga practice that emphasizes building strength and flexibility as well as cultivating a peaceful mind, grounded energy, and true balance. The “Power” refers to tapping into your inner power, tuning into to what inspires you and challenging yourself to exceed your expectations.</p>
								<form>
									<input type="emial" placeholder="email adress">
									<input type="submit" value="Subscribe">
								</form>
							</div>
							<!-- !!!END DROP US A LINE -->

						</section>
						<!-- END CONTACT INFO COLUMN -->


						<!-- Contact Form Wrap -->
						<section class="half">
							<h2>Nullam quis risus eget urna mollis ornare vel eu leo.</h2>
							<form>
								<label>First Name *</label>
								<input type="text" placeholder="First Name">
								<label>Last Name *</label>
								<input type="text" placeholder="Last Name">
								<label>Email Adress *</label>
								<input type="emial" placeholder="email adress">
								<label>Phone Number</label>
								<input type="text" placeholder="Phone Number">
								<label>Subject</label>
								<select>
								  <option value="volvo">Subject #1</option>
								  <option value="volvo">Subject #2</option>
								  <option value="volvo">Subject #3</option>
								  <option value="volvo">Subject #4</option>
								  <option value="volvo">Subject #5</option>
								</select>
								<textarea rows="4" cols="50">
								</textarea>
								<input type="submit" value="Submit Message">
							</form>
						</section>
						<!-- END CONTACT FROM WRAP -->
					</section>
				
				</section>
				<!-- =========================== | END INSTAGRAM WRAP | =========================== -->



			</div>
			<!-- =========================== | END CONTENT WRAP | =========================== -->


			</div>
			<!-- =========================== | GLOBAL WRAP INNER | =========================== -->



			<!-- ============================= | GLOBAL FOOTER | ============================= -->
			<footer class="gFooter fullWrap">
			
				<!-- Top Footer Section -->
				<section class="full footBrand">
					<section class="mid">

						<!-- Footer Padding Wrap | used to creat 5% padding around elements -->
						<div class="footPad">
							<h1>Power for the gorge</h1>
							<a href="#" class="nonM">Receive our newsletter</a>
							<a href="#" class="nonM">Sign up for a class</a>
						</div>
						<!-- END FOOTER PADDING WRAP -->
						
						<!-- Footer Logo Wrap | only shown on mobile -->
						<div class="footLogo mOnly">
							<h1>Root Down</h1>
							<a href="#" class="scrollTop"><i class="icon-double-angle-up"></i></a>
						</div>
						<!-- END FOOTER LOGO WRAP -->

						<nav class="footNav mOnly">
							<ul>
								<li><a href="#">Home</a></li>
								<li><a href="#">About</a></li>
								<li><a href="#">Classes</a></li>
								<li><a href="#">Workshops</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</nav>
					</section>
				</section>
				<!-- END TOP FOOTER SECTION -->
				
				<!-- Bottom Footer Section -->
				<section class="full footContact">
					<section class="mid">
						<div class="footLegal">
							<span class="copyRight">© 2013 VinYoga</span>
							<span>Located in the beautiful columbia river gorge</span>
							<span class="nonM"><a href="#">541.399.4683</a></span>
						</div>
						<ul class="footSocial">
							<li><a href="#" class="sIcons facebook"><i class="icon-facebook"></i></li>
							<li><a href="#" class="sIcons instagram"><i class="icon-instagram"></i></a></li>
							<li><a href="#" class="sIcons pintrest"><i class="icon-pinterest"></i></a></li>
							<li><a href="#" class="sIcons twitter"><i class="icon-twitter"></i></a></li>
						</ul>
					</section>
				</section>
				<!-- END BOTTOM FOOTER SECTION -->
				
			</footer>
			<!-- =========================== | END GLOBAL FOOTER | =========================== -->



		</div>
		<!-- =========================== | END GLOBAL WRAP | =========================== -->



	</div>
	<!-- =========================== | !!!END PAGE PUSHER | =========================== -->



</div>
<!-- =========================== | !!!END GLOBAL PAGE WRAP | =========================== -->





	<!-- jQuery -->
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>

	<!-- instagram feed script -->
	<script type="text/javascript" src="js/instagram.js"></script>

	<!-- Menu Scripts -->
	<script src="js/menu/classie.js"></script>
	<script src="js/menu/sidebarEffects.js"></script>
	<!-- !!!END Menu Scripts -->

	<!-- !!!EDIT | this needs to be in a global js file | used for testing -->
	<script>

	//-------------------------------------------------| on document ready
	$(document).ready(function(){



		//-------------------------------------------------| remove ios mobile browser bar
		window.addEventListener("load",function() {
			// Set a timeout...
			setTimeout(function(){
				// Hide the address bar!
				window.scrollTo(0, 1);
			}, 0);
		});
		//---------------------------------------------------------------------------------




		//-------------------------------------------------| Scroll back to top

		// !!!EDIT
		// This script is not working now
		
		
			$('.scrollTop').click(function () {
				$('.gWrap').animate({
					scrollTop: 0
				}, 800);
				return false;
			});
		
		//---------------------------------------------------------------------------------




		//-------------------------------------------------| get instagram photos
		
		// !!!EDIT
		// limit the number of photos that are pulled from instagram | count / number should equal 14 with images css width @ 14.2857143%		

		$(".iGram").instagram({
			userId: '12921653',
			accessToken: '533808543.353e35e.24e74332e9204216bee5c86523c6045d',
			//count: 3
			//image_size:'standard_resolution'
	    });
	    //------------------------------------------------------------------------


	 });
	//------------------------------------------------------------------------ !!!END document ready
	
	</script>




	<!--
	<script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
	-->
	
	<!-- All Custom Scripts are optional things seperated into a custom js file and used on this demo -->
	<!--<script src="js/custom/nav/responsive-nav.js"></script>
	<script src="js/custom/radio-check/custom_checkbox_and_radio.js"></script>
	<script src="js/custom/select-drop/select-dd.js"></script>
	<script src="js/custom/number-input/inc-dnc.js"></script>
	<script src="js/custom/grid/col.js"></script>
	
	<script src="js/plugins.js"></script>
	<script src="js/script.js"></script>
	<script src="js/helper.js"></script>
	<script src="js/gel.js"></script>-->
	
<!-- Google analytics code
	<script>
	var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
	g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
	s.parentNode.insertBefore(g,s)}(document,"script"));
	</script>
-->
</body>
</html>