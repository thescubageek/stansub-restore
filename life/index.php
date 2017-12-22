<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Stanley Submarines - Roatan, Honduras</title>
<!-- style sheet -->
<link rel="stylesheet" href="../general/template.css" type="text/css" />
<script language="javascript" type="text/javascript" src="../general/validator.js"></script>
<link rel="stylesheet" type="text/css" href="../general/porthole_scroller.css" />
<script language="javascript" type="text/javascript" src="../general/popupwindow.js"></script>
<script language="javascript" type="text/javascript">
<!--{
	var index = 0;	var count = 18;
		
	var imagearray = new Array();
	var imagenames = new Array();
	var imagewidths = new Array();
	var imageheights = new Array();		
	imagearray[0] = "../main/images/chimera.jpg";
imagenames[0] = "Chimera";
imagewidths[0] = "244";
imageheights[0] = "244";
imagearray[1] = "../main/images/weird_fish.jpg";
imagenames[1] = "Goosefish";
imagewidths[1] = "244";
imageheights[1] = "244";
imagearray[2] = "../main/images/six_gill_shark.jpg";
imagenames[2] = "Six-Gill Shark";
imagewidths[2] = "244";
imageheights[2] = "244";
imagearray[3] = "../main/images/angler.jpg";
imagenames[3] = "Angler";
imagewidths[3] = "785";
imageheights[3] = "785";
imagearray[4] = "../main/images/dumbo.jpg";
imagenames[4] = "Dumbo Octopus";
imagewidths[4] = "244";
imageheights[4] = "244";
imagearray[5] = "../main/images/sea_lillies.jpg";
imagenames[5] = "Sea Lillies";
imagewidths[5] = "244";
imageheights[5] = "244";
imagearray[6] = "../main/images/two_fish.jpg";
imagenames[6] = "Orange Roughy";
imagewidths[6] = "244";
imageheights[6] = "244";
imagearray[7] = "../main/images/lots_of_life.jpg";
imagenames[7] = "Urchin Eating Gold Coral";
imagewidths[7] = "244";
imageheights[7] = "244";
imagearray[8] = "../main/images/whiskerfish.jpg";
imagenames[8] = "Spiderfish";
imagewidths[8] = "244";
imageheights[8] = "244";
imagearray[9] = "../main/images/sea_star.jpg";
imagenames[9] = "Ten-Armed Starfish";
imagewidths[9] = "244";
imageheights[9] = "244";
imagearray[10] = "../main/images/chimera_headon.jpg";
imagenames[10] = "Chimera";
imagewidths[10] = "244";
imageheights[10] = "244";
imagearray[11] = "../main/images/crinoids.jpg";
imagenames[11] = "Brisingid Starfish";
imagewidths[11] = "244";
imageheights[11] = "244";
imagearray[12] = "../main/images/nudi.jpg";
imagenames[12] = "Flytrap Anenome";
imagewidths[12] = "244";
imageheights[12] = "244";
imagearray[13] = "../main/images/squat_lobster.jpg";
imagenames[13] = "Squat Lobster";
imagewidths[13] = "244";
imageheights[13] = "244";
imagearray[14] = "../main/images/octopus.jpg";
imagenames[14] = "Purple Octopus";
imagewidths[14] = "244";
imageheights[14] = "244";
imagearray[15] = "../main/images/gorgonian.jpg";
imagenames[15] = "Starfish on Gold Coral";
imagewidths[15] = "244";
imageheights[15] = "244";
imagearray[16] = "../main/images/half_fish.jpg";
imagenames[16] = "Half Fish";
imagewidths[16] = "244";
imageheights[16] = "244";
imagearray[17] = "../main/images/rough_shark.jpg";
imagenames[17] = "Rough Shark";
imagewidths[17] = "244";
imageheights[17] = "244";
		
	
	function rand(minval, maxval)
	{
		return Math.floor(Math.random()*maxval + minval);
	}
		
	function UpdatePic()
	{
		if (img = document.getElementById('scroller'))
//			img.src = imagearray[index].src;
			img.src = imagearray[index];
		
		if (countdiv = document.getElementById('top')){
			var newtext = "" + (index+1) + " of " + count + "";
			countdiv.innerHTML = newtext;
		}
		
		if (captiondiv = document.getElementById('bottom')){
			captiondiv.innerHTML = imagenames[index];
		}
	}		
		
	function GetRandomPic()
	{
		index = rand(0, count);
		//alert("randpic");
		UpdatePic();
	}
	
	function NextPic()
	{
		index++;
		if (index >= count)
			index = 0;
		//alert("nextpic");			
		UpdatePic();			
	}
	
	function PrevPic()
	{
		index--;
		if (index < 0)
			index = count-1;
		//alert("prevpic");			
		UpdatePic();		
	}
	
	function FullSizedPic()
	{
		PopupWindow(imagearray[index], imagewidths[index], imageheights[index]);
	}
	
	function EmailPic()
	{
		url = "../general/emailfriend.php?picurl=";
		url += imagearray[index];
		url += "&caption=";
		url += imagenames[index];
		PopupWindow(url, 350, 320);
	}	
//-->
</script>


<!-- meta tags -->
<meta name="author" content="Steve Craig - steve@thescubageek.com" />
<meta name="description" content="Deep sea exploration aboard Karl Stanley's Idabel, the world's deepest tourest submarine, on Roatan, Honduras" />
<meta name="keywords" content="karl stanley submarine roatan underwater deep sea aquatic life caribbean six gill shark chimera honduras exploration" />
<!-- end meta tags -->
</head>

<body onload="UpdatePic();" >
	<div id="biggodeeper">GO DEEPER</div>
	<div id="stanleysubs">stanleysubmarines.com</div>
	<div id="menu">
	<a href="../contact/index.php?lang=en">Contact Us</a><a href="../news/index.php?lang=en">News</a><a href="../videos/index.php?lang=en">Videos</a><a href="../photos/index.php?lang=en">Photos</a><a href="../faqs/index.php?lang=en">FAQs</a><a href="../expeditions/index.php?lang=en">Expeditions</a><a href="../terrain/index.php?lang=en">Terrain</a><a href="../life/index.php?lang=en">Aquatic Life</a><a href="../location/index.php?lang=en">Location</a><a href="../captain/index.php?lang=en">Captain</a><a href="../sub/index.php?lang=en">Submarine</a><a href="../main/index.php?lang=en">Home</a>	</div>

	<div id="porthole">
		<div id="porthole_overlay"></div>
		<div id="depth_scale"></div>
		<div id="porthole_frame"></div>
	</div>

	<div id="logo"><img src="../general/images/logo.gif" width="250" height="199" alt="Roatan Institute of Deepsea Exploration" border="0" /></div>
		<div id="main">
			<div id="body">
<div id="porthole_scroller" style="float: right;">
<div id="porthole"></div>
<div id="pic"><img src="" width="244" height="244" alt="" border="0" id="scroller" /></div>
<div id="top"></div>
<div id="fullscreen"><a href="#" onclick="FullSizedPic();"><img src="../general/images/porthole_scroller/fullscreen.gif" width="19" height="13" border="0" alt="View Picture in Full Size" /></a></div>
<div id="email"><a href="#" onclick="EmailPic();"><img src="../general/images/porthole_scroller/email.gif" width="19" height="13" border="0" alt="Email Picture to Friend" /></a></div>
<div id="bottom"><label id="caption"></label></div>
<div id="right"><a href="#" onClick="NextPic(); return true;">></a></div>
<div id="left"><a href="#" onClick="PrevPic(); return true;"><</a></div>
</div>

<p class="title">Animal Life</p>

<p>Beyond the depth of 300 feet (90 meters) plants cease to grow. Though sunlight will penetrate to depths of 2000 feet, (610 meters) it is not intense enough past 300 feet for plants to engage in photosynthesis (except one type of red algae). Therefore, the depth which <a href="../sub/index.php"><i>Idabel</i></a> explores is solely populated by animal life.</p>

<p>The animals at these depths have undergone many strange adaptations. Some are blood-red, as red light (the shortest wavelength of light) is completely absorbed inthese waters. Others are translucent or shiny like a mirror. Still others make their own light&mdash even some corals and sponges glow from their own bioluminescence.</p>

<p>Others animals give us a rare glimpse back in time. For example, the sea lillies&mdash; spotted on each submarine dive but only surviving below 500 feet (150 meters)&mdash; have remained unchanged in their stable environment for some 230 million years (over half the time that there has been life on the planet).</p>

<p>At 1800 feet (550 meters), light fades into perpetual darkness. In this inky abyss where the water temperature hovers only a few degrees above freezing, the truly strange animals take over. Fish are equally likely to stand on their heads or point straight up as they are to swim. Six-gilled sharks with no dorsal fins grow to 20 feet (6 meters). Tripod fish, polka-dotted angler fish, and free-swimming sea cucumbers start to appear.</p>

<p>On almost every dive something new to <a href="../captain/index.php">Captain Karl Stanley</a> is encountered, many of which cannot be identified in any books. Our <a href="../expedition/index.php">deepsea expeditions</a> are truly a once-in-a-lifetime opportunity to come face-to-face with the alien inhabitants of this forbidden realm; <a href="../contact/index.php">reserve your expedition now!</a></p>
			</div>
			<div id="footer" style="clear: both; padding-top: 5px;">
				<hr />
				<div id="footer_left">
					Site design by <a href="http://www.thescubageek.com">TheScubaGeek.com</a>
				</div>
				
				<div id="footer_right">
					2005-2008 &copy; Roatan Institute of Deepsea Exploration
				</div>				
			</div>			
	</div>

</body>
</html>
