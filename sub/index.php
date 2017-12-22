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
	var index = 0;	var count = 15;
		
	var imagearray = new Array();
	var imagenames = new Array();
	var imagewidths = new Array();
	var imageheights = new Array();		
	imagearray[0] = "../sub/images/sub_from_side.jpg";
imagenames[0] = "<i>Idabel</i>";
imagewidths[0] = "244";
imageheights[0] = "244";
imagearray[1] = "../sub/images/idabel_off_the_wall.jpg";
imagenames[1] = "Off the wall";
imagewidths[1] = "244";
imageheights[1] = "244";
imagearray[2] = "../sub/images/looking_in_dome.jpg";
imagenames[2] = "30in diameter viewport";
imagewidths[2] = "244";
imageheights[2] = "244";
imagearray[3] = "../sub/images/down_the_hatch.jpg";
imagenames[3] = "Down the hatch";
imagewidths[3] = "244";
imageheights[3] = "244";
imagearray[4] = "../sub/images/model.jpg";
imagenames[4] = "Early model";
imagewidths[4] = "244";
imageheights[4] = "244";
imagearray[5] = "../sub/images/model_stern.jpg";
imagenames[5] = "Model from stern";
imagewidths[5] = "244";
imageheights[5] = "244";
imagearray[6] = "../sub/images/sparks.jpg";
imagenames[6] = "Sparks fly";
imagewidths[6] = "244";
imageheights[6] = "244";
imagearray[7] = "../sub/images/sawing.jpg";
imagenames[7] = "Sawing away";
imagewidths[7] = "244";
imageheights[7] = "244";
imagearray[8] = "../sub/images/testing_tower.jpg";
imagenames[8] = "Testing the pilot tower";
imagewidths[8] = "244";
imageheights[8] = "244";
imagearray[9] = "../sub/images/two_pieces.jpg";
imagenames[9] = "Pilot tower";
imagewidths[9] = "244";
imageheights[9] = "244";
imagearray[10] = "../sub/images/viewports.jpg";
imagenames[10] = "Viewport bubble";
imagewidths[10] = "244";
imageheights[10] = "244";
imagearray[11] = "../sub/images/three_pieces.jpg";
imagenames[11] = "Fully assembled";
imagewidths[11] = "244";
imageheights[11] = "244";
imagearray[12] = "../sub/images/applying_paint.jpg";
imagenames[12] = "Finishing touches";
imagewidths[12] = "244";
imageheights[12] = "244";
imagearray[13] = "../sub/images/with_props.jpg";
imagenames[13] = "Props in place";
imagewidths[13] = "244";
imageheights[13] = "244";
imagearray[14] = "../sub/images/wet_run.jpg";
imagenames[14] = "Trial run";
imagewidths[14] = "244";
imageheights[14] = "244";
		
	
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

<p class="title">The Submarine:<br /><i>Idabel</i></p>

<P>The vehicle is a one-of-a-kind deep diving submersible designed and custom-built for her exact <a href="../location/index.php">location on Roatan, Honduras</a>. The sub, which is the first in history constructed of three different sized spheres, is designed to safely transport three people to 3,000 feet (915 meters) below sea level.</P>

<P>The submersible is named &quot;Idabel&quot; in honor of the town in Oklahoma 
  where it was born, and whose inhabitants were more than helpful in the process. 
  The process of building the sub is featured in a documentary by Rooftop Pictures. 
  <a href="http://www.rooftoppictures.com" target="_blank">Click here to see their site</a>.</P>

<P class="subtitle">Idabel's features include:</P>

<UL><LI>30-inch diameter viewport for her passengers</LI>
  <LI>11 powerful lights, including one positional</LI>
  <LI>Nine viewports for the pilot so he can see in every direction</LI>
  <LI>Comfortable bench seating for extended dives</LI>
  <LI>Built-in CD sound system</LI>
 </UL>
 
 <P class="subtitle">Safety features include:</P>
 
 <UL><LI>Twin ballast compartments</LI>
 <LI>Twin high-pressure air systems</LI>
 <LI>350-pound droppable lead weight</LI>
 <LI>Fully redundant propulsion systems with no rudder, dive planes or other moving parts to jam</LI>
 <LI>Three days of emergency life support</LI></UL>
 
 <p class="subtitle">Design specs:</p>
 
 <ul><li><b>Dimensions</b>: 13 feet long, 6 1/2 feet wide, 7 feet tall</li>
    <li><strong>Displacement:</strong> 9000 pounds</li>
    <li><strong>Capacity: </strong>1 pilot, 2 passengers</li>
    <li><strong>Conning Tower Windows: </strong>9 windows, 2.5 inches thick, 11 inches across trunicated cone    
    <li><strong>Passenger Windows:</strong> 2 windows&mdash; 30 inch diameter by 4 inch thick semi-sphereical dome and a 5 inch thick 15 inch diameter trunicated cone
    <li><strong>Design Depth:</strong>  3000 feet
    <li><strong>Max Depth to Date:</strong> 2220 feet
    <li><strong>Batteries:</strong> 14 glass matt gel cells arranged in 4 different banks&mdash; two 36 volt and two  12 volt
    <li><strong>Range:</strong> up to 10 miles, but 2-3 miles under normal operations
    <li><strong>Propulsion:</strong> 6 motors, 1.1 HP each, 4 rear and 2 vertical thrusters
    <li><strong>Dives Made:</strong> over 1000</li>

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
