<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="css/reset.css">		
	<link rel="stylesheet" type="text/css" href="css/style.css">	
	<link rel="apple-touch-icon-precomposed" href="images/custom_icon_precomposed.png"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="js/date.js"></script>
	<script src="js/jquery.xdomainajax.js"></script>
	<script src="js/date-function.js"></script>
	<script src="js/clickable.js"></script>
	<script src="js/jquery.applink.js"></script>
	<script src="js/toggles.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45096440-1', 'uow.me');
  ga('send', 'pageview');

</script>
	<script>	
		$(document).ready(function() {		
			$( "#content" ).load( "fetchers/fetcher.php .listeventbg1, .listeventbg2" );
		});	
	</script>	
</head>
<body>
	<div class="wrapper">
		<header>
			<h1><a href="http://www.uow.me">UOW.me</a></h1>
<div class="info-button"></div>
		</header>
		<div class="info">
			<p>
			UOW.me is a project of <a href="app-loaders/facebook/facebook-uow-designlab.html">Design Lab</a>.
			<br><br>
Design Lab is an interdisciplinary cohort bringing user-centred design to UOW, making campus tools and experiences with students.<br><br>
UOW.me is the first project of Design Lab, aiming to find what UOW students want from a mobile app. You're using a prototype of UOW.me, and the more you use it the better it will get. Or to help move the process along faster, leave us feedback at the <a href="app-loaders/facebook/facebook-uow-me.html">Facebook page</a> or come find us on campus at our pop-up office.<br><br>
Design Lab is:<br>
<a href="mailto:twall@uow.edu.au?Subject=UOW.me" target="_top">Travis Wall - Campus Flâneur</a><br>
<a href="mailto:jthom@uow.edu.au?Subject=UOW.me" target="_top">Jeff Thom - Campus Flâneur</a><br><br>
UOW.me was made with help from fellow travellers:<br>
	
<a href="http://twitter.com/garethjward">Gareth Ward MP - Member for Kiama</a><br>
<a href="http://twitter.com/BrennanHatton">Brennan Hatton - Developer/Ambassador</a> at <a href="http://www.spaceglasses.com">Meta</a><br>
<a href="http://twitter.com/Rozza">Rory McKay - UX, UI Design and Development</a> at <a href="http://www.spaceglasses.com">Meta</a></p>	
		</div>
		<div class="date-headline">
			<span class="day"></span>
			<span class="date"></span>
		</div>
		<div class="date-headline">
			<span>Todays events</span>	
		</div>
		<div id="content"><span class="loader">Loading todays events...</span>
			<img src="images/485.gif" alt="Smiley face" height="20" width="20">	
		</div>
		<div class="button-column">
			<div class="button link">
				<img src="images/icon-map.svg" class="button-image">
				<a href="maps.php">Campus Map</a>
			</div>		
			<div class="button link">
				<img src="images/icon-sols.svg" class="button-image">
				<a href="sols.php">SOLS</a>
			</div>			
			<div class="button link">
				<img src="images/icon-uowtv.svg" class="button-image">
				<a href="http://m.youtube.com/user/uowjournalism">UOWtv</a>
			</div>						
			<div class="button link">
				<img src="images/icon-library.svg" class="button-image">			
				<a href="library.php">Library</a>
			</div>			
			<div class="button link">
				<img src="images/icon-mail.svg" class="button-image">			
				<a href="http://login.microsoftonline.com">UOWmail</a>
			</div>
			<div class="button link">
				<img src="images/icon-dates.svg" class="button-image">			
				<a href="key-dates.php">key dates</a>
			</div>
			<div id="facebook" class="button">
				<img src="images/icon-facebook.svg" class="button-image">			
				<p>UOW on Facebook</p>
			</div>
			<div id="twitter" class="button">
				<img src="images/icon-twitter.svg" class="button-image">			
				<p>UOW on Twitter</p>
			</div>	
			<div id="instagram" class="button">
				<img src="images/icon-instagram.svg" class="button-image">			
				<p>UOW on Instagram</p>
			</div>
			<div id="facebook-bubble" class="button button-bubble">
			</div>
			<div id="twitter-bubble" class="button button-bubble">
			</div>	
			<div id="instagram-bubble" class="button button-bubble">
			</div>				
		</div>
		<div class="facebook-column">
			<div class="social-column-inner">
				<div class="link"><a href="app-loaders/facebook/facebook-my-newsfeed.html">My Newsfeed</a></div>
				<div class="link"><a href="app-loaders/facebook/facebook-uow-me.html">UOW.me</a></div>
				<div class="link"><a href="app-loaders/facebook/facebook-uow-designlab.html">UOW Design Lab</a></div>
				<div class="link"><a href="app-loaders/facebook/facebook-uow-confessions.html">UOW Confessions</a></div>
				<div class="link"><a href="app-loaders/facebook/facebook-uow-studentlife.html">UOW Student Life</a></div>
				<div class="link"><a href="app-loaders/facebook/facebook-uow-unicentre.html">UOW UniCentre</a></div>
				<div class="link"><a href="app-loaders/facebook/facebook-uow-library.html">UOW Library</a></div>
				<div class="link"><a href="app-loaders/facebook/facebook-uow-research.html">UOW Research</a></div>
				<div class="link"><a href="app-loaders/facebook/facebook-uow-eclub.html">UOW Entrepreneur Club</a></div>
				<div class="link"><a href="app-loaders/facebook/facebook-uow-humans.html">Humans of UOW</a></div>
				<div class="link"><a href="app-loaders/facebook/facebook-uow-unibar.html">UOW UniBar</a></div>
				<div class="link"><a href="app-loaders/facebook/facebook-uow-students-buy-and-sell.html">UOW Students Buy and Sell</a></div>
				<div class="link"><a href="app-loaders/facebook/facebook-uow-play-free-sport.html">UOW Students Play Free Sport</a></div>
			</div>
		</div>
		<div class="twitter-column">
			<div class="social-column-inner">
				<div class="link"><a href="app-loaders/twitter/twitter-mynewsfeed.html">My Timeline</a></div>
				<div class="link"><a href="app-loaders/twitter/twitter-taguow.html">#UOW</a></div>
				<div class="link"><a href="app-loaders/twitter/twitter-uowdesignlab.html">@uowdesignlab</a></div>
				<div class="link"><a href="app-loaders/twitter/twitter-uow.html">@UOW__</a></div>
				<div class="link"><a href="app-loaders/twitter/twitter-uoweclub.html">@UOWeClub</a></div>
				<div class="link"><a href="app-loaders/twitter/twitter-uowresearch.html">@UOWresearch</a></div>
				<div class="link"><a href="app-loaders/twitter/twitter-uowtv.html">UOWtv</a></div>
				<div class="link"><a href="app-loaders/twitter/twitter-uowunibar.html">UOW UniBar</a></div>
			</div>
		</div>	
		<div class="instagram-column">
			<div class="social-column-inner">
				<div class="link"><a href="app-loaders/instagram/instagram-mynewsfeed.html">My Feed</a></div>
				<div class="link"><a href="app-loaders/instagram/instagram-taguow.html">#UOW</a></div>
				<div class="link"><a href="app-loaders/instagram/instagram-uowdesignlab.html">UOW Design Lab</a></div>
				<div class="link"><a href="app-loaders/instagram/instagram-uowstudentlife.html">UOW Student Life</a></div>
			</div>
		</div>			
	</div>
</body>
</html>