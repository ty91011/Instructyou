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
	    var sessionId = '2_MX4xNjkwNDE2Mn5-MjAxMi0wNy0zMSAwOTo0ODo1Ny4yOTE5ODArMDA6MDB-MC42MjY5MTY0NzIwNTl-';
	    //var token = 'devtoken';          
	    var token = 'T1==cGFydG5lcl9pZD0xNjkwNDE2MiZzaWc9OTU1ZDBhOGFmODE5NThkM2E4ZGRmMzIxYjAyMGFhMDRhNzgwNTUzZTpzZXNzaW9uX2lkPTJfTVg0eE5qa3dOREUyTW41LU1qQXhNaTB3Tnkwek1TQXdPVG8wT0RvMU55NHlPVEU1T0RBck1EQTZNREItTUM0Mk1qWTVNVFkwTnpJd05UbC0mY3JlYXRlX3RpbWU9MTM0MzcyODE0MSZleHBpcmVfdGltZT0xMzQzODE0NTQxJnJvbGU9cHVibGlzaGVyJmNvbm5lY3Rpb25fZGF0YT0mbm9uY2U9MTQ3NjA2';
	    var publisher;

	    TB.setLogLevel(TB.DEBUG); // Set this for helpful debugging messages in console

	    var session = TB.initSession(sessionId);     
	    session.addEventListener('sessionConnected', sessionConnectedHandler);     
	    

	    function sessionConnectedHandler(event) {
		 //alert('Hello world. I am connected to OpenTok :).');
	          // Put my webcam in a div
		publisher = TB.initPublisher(apiKey, 'myPublisherDiv');
		// Send my stream to the session
		session.publish(publisher);
	    }    
	</script>
	<?=$content;?>
</head>
<body>
	<div id="content">
		<!-- top -->
		<div id="top">
			<h1 id="logo"><img style='float: left; bottom: 10px; right: 10px; position: relative' height="40px" src='http://cdn1.iconfinder.com/data/icons/flatforlinux/256/39-Globe.png'><a href="#">Tutor<span>Globally</span></a></h1>
			<ul id="menu">
				<li><a class="current" href="/">Home</a></li>
				<li><a href="/about">About</a></li>
				<li><a href="/students">Student Login</a></li>
				<li><a href="/teachers">Teacher Login</a></li>
				<li><a href="/contact">Contact</a></li>
			</ul>
		</div>
		<!-- /top -->