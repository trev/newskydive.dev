<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Skydive Australia</title>
	
	<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet" href="css/blueprint/screen.css" type="text/css" media="screen, projection">
	<link rel="stylesheet" href="css/blueprint/print.css" type="text/css" media="print">	
	<!--[if lt IE 8]><link rel="stylesheet" href="css/blueprint/ie.css" type="text/css" media="screen, projection"><![endif]-->
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/home.css" type="text/css" media="screen, projection">
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
	<script src="scripts/jquery.nivo.slider.pack.js" type="text/javascript"></script>
	
	<script type="text/javascript">
	$(window).load(function() {
	    $('#slider').nivoSlider({
	        effect:'fade', //Specify sets like: 'fold,fade,sliceDown'
	        slices:2,
	        animSpeed:500, //Slide transition speed
	        pauseTime:5000,
	        startSlide:0, //Set starting Slide (0 index)
	        directionNav:false, //Next & Prev
	        directionNavHide:false, //Only show on hover
	        controlNav:false, //1,2,3...
	        pauseOnHover:true, //Stop animation while hovering
	        captionOpacity:0.8, //Universal caption opacity
	    });
	});
	</script>
	
	<script type="text/javascript">
		function trig(elid) {
			document.getElementById(elid).style.background = 'url(images/click.png) center left no-repeat';
			var names = ["byron_bay", "the_reef_cairns", "mission_beach", "coffs_harbour"];
			if (!Array.prototype.indexOf) {
				Array.prototype.indexOf = function(obj, start) {
				     for (var i = (start || 0), j = this.length; i < j; i++) {
				         if (this[i] == obj) { return i; }
				     }
				     return -1;
				}
			}
			var idx = names.indexOf(elid); //Find the index
			if(idx!=-1) names.splice(idx, 1); //Remove it if really found!

			for (i=0;i<names.length;i++)
			{
				document.getElementById(names[i]).style.background = 'url(images/dot.png) center left no-repeat';
			}
		}
	</script>
</head>

<body>

	<div class="container">	
		<div class="span-25 last" id="header">
			<div id="top-logo-container"><img src="images/logo.png" id="top-logo"></div>
				<div id="main-menu-container">
					<div id="main_menu">
						<ul>
							<li><a href="#">HOME</a></li>
							<li><a href="#">TANDEM</a></li>
							<li><a href="#">BOOKINGS</a></li>
							<li><a href="#">PHOTOS/DVD</a></li>
							<li><a href="#">QUESTIONS</a></li>
							<li><a href="#">CONTACT</a></li>
							<li class="last"><a href="#">TEAM</a></li>
						</ul>
					</div>
					<div style="clear: both;"></div>
				</div>
		</div>
		<div class="span-25 last middle-asset-styling">
			<div style="position: relative;">
				<a href="http://www.twitter.com/skydiveOZ" class="tweet" target="_blank" />Follow us on Twitter</a>
				</div>
			<div class="middle-asset-margins">
				<div id="slider">
				    <img src="images/slide1.jpg" alt="" />
				    <img src="images/slide2.jpg" alt="" />
				</div>
				
				<div class="right-asset-container">
					<a href="#"><img src="images/side-asset1.png" class="right-asset-image first"></a>
				</div>
				<div class="right-asset-container">
					<a href="#"><img src="images/side-asset2.png" class="right-asset-image second"></a>
				</div>
			</div>
		</div>
		<div class="span-25 last">
			<div class="span-12">
				<div style="float: left;">
					<img src="images/gidday-mate.png" style="margin-left: 50px;" />
				</div>
				<div style="float: right; padding-top: 5px;">
					<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:like href="http://www.australiaskydive.com.au" layout="button_count" show_faces="false" font=""></fb:like>
				</div>
				<div style="clear: both;"></div>
				<div id="intro-paragraph">
					<p class="resume">Byron Bay is known internationally for it's unique beauty &amp; outstanding beaches. You can see Australia's most spectacular coastal views of Byron Bay from 14,000 feet, when you skydive with Skydive Byron Bay.</p>

					<p class="resume">We use the latest Technologies to maintain an excellent safety record. Our large turbine aircraft means plenty of room, so you can jump and share the experience as a family, or with friends.</p>

					<p class="resume">Book Your Tandem Skydive Now for your adrenaline pumping experience of a lifetime .. and we'll do the rest!</p>
				</div>
				<div id="location-container">
					<h2><span class="big4">4</span> BREATHTAKING LOCATIONS TO EXPERIENCE</h2>
					<div id="locations_menu">
						<ul>
							<li class="first" id="byron_bay"><a href="#" onmouseover="trig('byron_bay')">BYRON BAY</a></li>
							<li id="the_reef_cairns"><a href="#" onmouseover="trig('the_reef_cairns')">THE REEF CAIRNS</a></li>
							<li id="mission_beach"><a href="#" onmouseover="trig('mission_beach')">MISSION BEACH</a></li>
							<li id="coffs_harbour"><a href="#" onmouseover="trig('coffs_harbour')">COFFS HARBOUR</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="span-13 last">
				<div id="youtube-frame">
					<iframe title="YouTube video player" width="425" height="349" src="http://www.youtube.com/embed/7fOhHggLaDY?rel=0" frameborder="0" allowfullscreen style="margin: 0 auto;"></iframe>
				</div>
			</div>
		</div>		
		<div class="span-25 last">
			<div id="footer">
				<div id="footer-left-asset">
					<a href="#">Sitemap</a> | <a href="#">Questions</a> | <a href="#">Friends</a> | <a href="#">Contact</a>
				</div>
				<div id="footer-right-asset">
					Copyright 2011 &copy; Skydive Australia P/L
				</div>
			</div>
		</div>
	</div>

</body>
</html>
