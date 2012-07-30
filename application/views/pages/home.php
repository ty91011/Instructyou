<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Global Tutors</title>
	<meta name="Robots" content="index,follow" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.tools.js"></script>
	<script type="text/javascript" src="js/cufon-yui.js"></script>
	<script type="text/javascript" src="js/Titillium.font.js"></script>
	<script type="text/javascript">
		Cufon.replace('h1,h2,h3,#menu li a');
	</script>
	<script type="text/javascript" charset="utf-8">
		$(document).ready(function() { anim(); $(".scrollable").scrollable({ }); });
	</script>
	<script type="text/javascript" src="js/jquery.fancybox-1.3.2.pack.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".items a").fancybox({
				'titlePosition'		: 'inside',
				'overlayColor'		: '#000',
				'overlayOpacity'	: 0.9
			});
		});
	</script>
	<script type="text/javascript" src="js/pitch.js"></script>
	<script type="text/javascript">
		/* 
		
		COUNTDOWN
		-------------------------------------------------------------------
		replace UTC with your time zone (eg. UTC+01 for Paris)
		list of time zone codes: http://en.wikipedia.org/wiki/Time_zone#UTC
		
		*/
		Counter(new Date("Oct 20 2012 12:00:00 UTC"));
		var done_message = "It's here!";
	</script>
	<link rel="stylesheet" type="text/css" href="css/main.css" media="screen" />
	<link rel="stylesheet" href="/img/fancybox/jquery.fancybox-1.3.2.css" type="text/css" media="screen" />
	
	<!-- TOK BOX-->
	<script src="http://staging.tokbox.com/v0.91/js/TB.min.js"></script>
	<script type="text/javascript">
	    var apiKey = '16904162';
	    //var sessionId = '14685d1ac5907f4a2814fed28294d3f797f34955';
	    var sessionId = '2_MX4xNjkwNDE2Mn5-MjAxMi0wNy0zMCAwODoyODowNi4yOTg0MTIrMDA6MDB-MC4xOTQ0OTE5MDg1Mzh-';
	    //var token = 'devtoken';          
	    var token = 'T1==cGFydG5lcl9pZD0xNjkwNDE2MiZzZGtfdmVyc2lvbj10YnB5LUBzZGtfdmVyc2lvbkAuQG9wZW50b2suc2RrLnB5dGhvbi5tb2RfdGltZUAmc2lnPTRjZTNhNTJjNjQ4ZGI4MWQ1ZGFmZGFhN2VmZjUwMDRkMGYyZmIzY2M6bm9uY2U9NzAxMzM5JmNyZWF0ZV90aW1lPTEzNDM2MzY4ODYmcm9sZT1wdWJsaXNoZXImc2Vzc2lvbl9pZD0yX01YNHhOamt3TkRFMk1uNS1NakF4TWkwd055MHpNQ0F3T0RveU9Eb3dOaTR5T1RnME1USXJNREE2TURCLU1DNHhPVFEwT1RFNU1EZzFNemgt';
	    var publisher;

	    TB.setLogLevel(TB.DEBUG); // Set this for helpful debugging messages in console

	    var session = TB.initSession(sessionId);     
	    session.addEventListener('sessionConnected', sessionConnectedHandler);     
	    session.connect(apiKey, token);

	    function sessionConnectedHandler(event) {
		 alert('Hello world. I am connected to OpenTok :).');
	          // Put my webcam in a div
		publisher = TB.initPublisher('myPublisherDiv');
		// Send my stream to the session
		session.publish(publisher);
	    }    
	</script>
	
</head>
<body>
	<div id="content">
	
		<!-- top -->
		<div id="top">
			<h1 id="logo"><a href="#">Global<span>Tutoring</span></a></h1>
			<ul id="menu">
				<li><a class="current" href="#">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Student Login</a></li>
				<li><a href="#">Teacher Login</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</div>
		<!-- /top -->

		
		<!-- pitch -->
		<div id="pitch">
			<h2 id="hello">Revolutionizing the way you learn English online.</h2>
			<p id="countdown"></p>
		</div>
		<!-- /pitch -->

		<div id="myPublisherDiv">
		    BLANK<br>
		    BLANK<br>
			BLANK<br>
			    BLANK<br>
		</div>
		
		<!-- screenshots -->		
		<div id="screenshots">		
			<a href="javascript:;" class="arrows prev">Previous</a>
		
			<div class="scrollable">
				<div class="items">
					
					<!-- group 1 -->
					<ul>
						<li><a href="/img/screenshots/big1.jpg" title="Image Caption"><img src="/img/screenshots/thumb1.jpg" alt="Image" /></a></li>
						<li><a href="/img/screenshots/big1.jpg" title="Image Caption"><img src="/img/screenshots/thumb1.jpg" alt="Image" /></a></li>
						<li><a href="/img/screenshots/big1jpg" title="Image Caption"><img src="/img/screenshots/thumb1.jpg" alt="Image" /></a></li>
						<li><a href="/img/screenshots/big1.jpg" title="Image Caption"><img src="/img/screenshots/thumb1.jpg" alt="Image" /></a></li>
					</ul>
					<!-- /group 1 -->	
				
					<!-- group 2 -->
					<ul>
						<li><a href="/img/screenshots/big1.jpg" title="Image Caption"><img src="/img/screenshots/thumb1.jpg" alt="Image" /></a></li>
						<li><a href="/img/screenshots/big1.jpg" title="Image Caption"><img src="/img/screenshots/thumb1.jpg" alt="Image" /></a></li>
						<li><a href="/img/screenshots/big1.jpg" title="Image Caption"><img src="/img/screenshots/thumb1.jpg" alt="Image" /></a></li>
						<li><a href="/img/screenshots/big1.jpg" title="Image Caption"><img src="/img/screenshots/thumb1.jpg" alt="Image" /></a></li>
					</ul>
					<!-- /group 2 -->
					
				</div>
			</div>
		
			<a href="javascript:;" class="arrows next">Next</a>
			
			<div class="clear"></div>
		</div>
		<!-- /screenshots -->
		
		<!-- columns -->
		<div id="cols">
			
			<!-- left column -->
			<div class="col">
				<h3>Robust and Modular</h3>
				<p>Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at ipsum.</p>
				<p><a class="more" href="#">Read More</a></p>
			</div>
			<!-- /left column -->
			
			<!-- middle column -->
			<div class="col">
				<h3>Simple to Use</h3>
				<p>Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at ipsum.</p>
				<p><a class="more" href="#">Read More</a></p>
			</div>
			<!-- /middle column -->
			
			<!-- right column -->
			<div class="col last">
				<h3>Interactive and Fun</h3>
				<p>Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at ipsum.</p>
				<p><a class="more" href="#">Read More</a></p>
			</div>
			<!-- /right column -->
			
			<div class="clear"></div>
		</div>
		<!-- /columns -->		
		
		<!-- main (left side) -->		
		<div id="main">
			<h3>Main Features</h3>
			<p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit quisque vel lorem eu libero Aenean placerat, ligula quis placerat iaculis, mi magna luctus nibh, adipiscing pretium.</strong></p>
			<p>Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at ipsum. </p>
			<p><a class="more" href="#">Read More</a></p>
		</div>
		<!-- /main (left side) -->
		
		<!-- side -->
		<div id="side">
			<div class="boxtop"></div>
			<div class="boxmiddle">
			
				<!-- twitter widget -->
				<script type="text/javascript" src="http://widgets.twimg.com/j/2/widget.js"></script>
				<script type="text/javascript">new TWTR.Widget({version:2,type:'profile',rpp:11,interval:4000,width:'auto',height:135,theme:{shell:{background:'none',color:'#A7A6AE'},tweets:{background:'none',color:'#A7A6AE',links:'#DCDCDE'}},features:{scrollbar:false,loop:false,live:true,hashtags:true,timestamp:false,avatars:false,behavior:'default'}}).render().setUser('solucija').start();</script>
				<!-- /twitter widget -->
				
			</div>
			<div class="boxbottom"></div>
			
		</div>
		<!-- /side -->
		
		<!-- footer -->
		<div id="footer">
			<p>&copy; 2012 <a href="#">FineProduct</a> &middot; All Rights Reserved &middot; <a title="Awesome Web Templates" href="http://www.solucija.com/">Solucija</a></p>
		</div>
		<!-- /footer -->
	</div>
</body>
</html>