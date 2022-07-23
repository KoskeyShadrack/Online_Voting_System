<meta name="viewport" content="width=device-width, initial-scale=1.0">
<html>		
<head>
<title>ONLINE VOTING SYSTEM</title>
<script src="admin/js/jquery-1.7.2.min.js" type="text/javascript"></script>
		
<script type="text/javascript" src="admin/js/bootstrap.js"></script>
<script type="text/javascript" src="admin/js/bootstrap-transition.js"></script>
<script type="text/javascript" src="admin/js/bootstrap-collapse.js"></script>



	
		<!----hover pop up -->
<script src="admin/js/main.js" type="text/javascript"></script>
<script src="admin/js/mouseover_popup.js" type="text/javascript"></script>


<div style="display: none;
 position: absolute;
 z-index:100;
 color:white;
 width:auto;
 height:auto;"
 id="preview_div"></div>





		
<script type="text/javascript" src="admin/js/qtip/jquery.qtip.min.js"></script>
<link href="admin/js/qtip/jquery.qtip.min.css" rel="stylesheet" type="text/css" media="screen, projection">
		
<script type="text/javascript" language="JavaScript">
<!-- Copyright 2020 Bontrager Connection, LLC

function getCalendarDate()
{
   var months = new Array(13);
   months[0]  = "January";
   months[1]  = "February";
   months[2]  = "March";
   months[3]  = "April";
   months[4]  = "May";
   months[5]  = "June";
   months[6]  = "July";
   months[7]  = "August";
   months[8]  = "September";
   months[9]  = "October";
   months[10] = "November";
   months[11] = "December";
   var now         = new Date();
   var monthnumber = now.getMonth();
   var monthname   = months[monthnumber];
   var monthday    = now.getDate();
   var year        = now.getYear();
   if(year < 2000) { year = year + 1900; }
   var dateString = monthname +
                    ' ' +
                    monthday +
                    ', ' +
                    year;
   return dateString;
} // function getCalendarDate()
//-->
</script>	
<script language="javascript" type="text/javascript">
/* Visit http://www.yaldex.com/ for full source code
and get more free JavaScript, CSS and DHTML scripts! */
<!-- Begin
var timerID = null;
var timerRunning = false;
function stopclock (){
if(timerRunning)
clearTimeout(timerID);
timerRunning = false;
}
function showtime () {
var now = new Date();
var hours = now.getHours();
var minutes = now.getMinutes();
var seconds = now.getSeconds()
var timeValue = "" + ((hours >12) ? hours -12 :hours)
if (timeValue == "0") timeValue = 12;
timeValue += ((minutes < 10) ? ":0" : ":") + minutes
timeValue += ((seconds < 10) ? ":0" : ":") + seconds
timeValue += (hours >= 12) ? " P.M." : " A.M."
document.clock.face.value = timeValue;
timerID = setTimeout("showtime()",1000);
timerRunning = true;
}
function startclock() {
stopclock();
showtime();
}
window.onload=startclock;
// End -->
</SCRIPT>		

<?php include('admin/hover.php'); ?>
    
	
<link rel="icon" href="admin/images/chmsc.png" type="image" />


    
    <script type="text/javascript" src="admin/js/eye.js"></script>
    <script type="text/javascript" src="admin/js/spacegallery.js"></script>
    <script type="text/javascript" src="admin/js/layout.js"></script>
	
	 <link rel="stylesheet" type="text/css" href="admin/css/bootstrap.css" media="screen, projection" />
	 <link rel="stylesheet" type="text/css" href="admin/css/bootstrap.css" media="screen, projection" />
	 <link rel="stylesheet" type="text/css" href="admin/css/bootstrap-responsive.css" media="screen, projection" />
	 <link rel="stylesheet" href="admin/css/font-awesome.css">

<link rel="stylesheet" type="text/css" href="admin/css/Home.css" media="screen, projection" />


<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
function _redirect($url=''){
	if(!empty($url)){
		echo "<script> location.href = '".$url."' </script>";
	}
}
?>

