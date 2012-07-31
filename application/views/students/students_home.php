<style>
    ul#list {
	list-style-type: none;
    }
    
    ul#list li {
	margin-right: 20px;
	border: 1px solid black;
	float: left;
    }
    
    ul#list li img
    {
	height: 150px;
	width: 150px;
    }
    h1.pageHeading
    {
	margin-top: 20px;
	color: black;
	font-size: 3em;
    }
</style>
<script>
    function loadTutor()
    {
	$("#tutor").html('<iframe src="http://www.twiddla.com/5" frameborder="0" width="800" height="600"></iframe>');
	session.connect(apiKey, token);
    }
 $(document).ready(function() {
    $("#list li").click(function()
    {
	$("#list").hide();
	$("#tutor").html("<img src='http://www.isu.edu/ipo/images/GlobeTransparentAnimated.gif'><br>Connecting...");
	setTimeout("loadTutor()", 2000);
    });
 });
</script>

<h1 class="pageHeading">Available Tutors</h1>
 <div style="clear: both"></div>
<br>

    <div id="myPublisherDiv">
    </div>
<div id="tutor">

</div>
<ul id="list">
    <li>
	<img src='https://fbcdn-profile-a.akamaihd.net/hprofile-ak-snc4/41402_1507690506_3633_n.jpg'/><br>
	Name: Dodger Danger<br>
	School: <a href="#">Harvard University</a><br>
	Tier: <strong>Premium</strong>
    </li>
    <li>
	<img src='http://a0.twimg.com/profile_images/108243244/FB_profile_normal.JPG'/><br>
	Name: Dodger Danger<br>
	School: <a href="#">Harvard University</a><br>
	Tier: <strong>Premium</strong>
    </li>
    <li>
	<img src='http://images.clipartof.com/small/1077560-Smart-Asian-School-Girl-Raising-Her-Hand-At-Her-Desk.jpg'/><br>
	Name: Dodger Danger<br>
	School: <a href="#">Harvard University</a><br>
	Tier: <strong>Premium</strong>
    </li>
    <li>
	<img src='http://comps.canstockphoto.com/can-stock-photo_csp0628349.jpg'/><br>
	Name: Dodger Danger<br>
	School: <a href="#">Harvard University</a><br>
	Tier: <strong>Premium</strong>
    </li>
    <li>
	<img src='https://fbcdn-profile-a.akamaihd.net/hprofile-ak-snc4/41402_1507690506_3633_n.jpg'/><br>
	Name: Dodger Danger<br>
	School: <a href="#">Harvard University</a><br>
	Tier: <strong>Premium</strong>
    </li>
    <li>
	<img src='http://a0.twimg.com/profile_images/108243244/FB_profile_normal.JPG'/><br>
	Name: Dodger Danger<br>
	School: <a href="#">Harvard University</a><br>
	Tier: <strong>Premium</strong>
    </li>
    <li>
	<img src='http://images.clipartof.com/small/1077560-Smart-Asian-School-Girl-Raising-Her-Hand-At-Her-Desk.jpg'/><br>
	Name: Dodger Danger<br>
	School: <a href="#">Harvard University</a><br>
	Tier: <strong>Premium</strong>
    </li>
    <li>
	<img src='http://comps.canstockphoto.com/can-stock-photo_csp0628349.jpg'/><br>
	Name: Dodger Danger<br>
	School: <a href="#">Harvard University</a><br>
	Tier: <strong>Premium</strong>
    </li>
</ul>
 <div style="clear: both"></div>

