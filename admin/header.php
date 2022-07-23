
<html>		
<head>
<title>ONLINE VOTING SYSTEM</title>
<script src="js/jquery-1.7.2.min.js" type="text/javascript"></script>
		
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap-transition.js"></script>
<script type="text/javascript" src="js/bootstrap-collapse.js"></script>
<script type="text/javascript" src="js/bootstrap-tab.js"></script>


<!----hover pop up -->
<script src="js/main.js" type="text/javascript"></script>
<script src="js/mouseover_popup.js" type="text/javascript"></script>




<div style="display: none;
 position: absolute;
 color:white;
 z-index:100;
 width:auto;
 height:auto;"
 id="preview_div"></div>


<!-- notify -->
<link href="css/notify/jquery_notification.css" type="text/css" rel="stylesheet" media="screen, projection"/>
<script type="text/javascript" src="js/notify/jquery_notification_v.1.js"></script>
<!-- notify end -->

<!-- datatable -->
		<style type="text/css" title="currentStyle">
			@import "css/datatable/demo_page.css";
			@import "css/datatable/demo_table_jui.css";
			@import "css/datatable/jquery-ui-1.8.4.custom.css";
		</style>
		
		
		<script type="text/javascript" language="javascript" src="js/dataTables/jquery.dataTables.js"></script>
		<script type="text/javascript" charset="utf-8">
			jQuery(document).ready(function() {
oTable = jQuery('#log').dataTable({
					"bJQueryUI": true,
					"sPaginationType": "full_numbers"
								} );
				oTable = jQuery('#attendance').dataTable({
					"bJQueryUI": true,
					"sPaginationType": "full_numbers"
								} );
				oTable = jQuery('#record').dataTable({
					"bJQueryUI": true,
					"sPaginationType": "full_numbers"
								} );
				oTable = jQuery('#cadet_list').dataTable({
					"bJQueryUI": true,
					"sPaginationType": "full_numbers"
								} );
				oTable = jQuery('#passed').dataTable({
					"bJQueryUI": true,
					"sPaginationType": "full_numbers"
								} );								
								
								
				});		
		</script>


<script type="text/javascipt">
$('#myModal').modal(options)
$(".collapse").collapse()
</script>
<script type="text/javascipt">
jQuery(document).ready(function(){
$('.carousel').carousel()
    $('.carousel').carousel({
    interval: 1000
    })
	});
</script>
<script type="text/javascipt">
$('.dropdown-toggle').dropdown()	
</script>
 
		
<script type="text/javascript" src="js/qtip/jquery.qtip.min.js"></script>
<link href="js/qtip/jquery.qtip.min.css" rel="stylesheet" type="text/css" media="screen, projection">
		
<script type="text/javascript" language="JavaScript">
<!-- Copyright 2002 Bontrager Connection, LLC

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

<?php include('hover.php'); ?>
    
	
<link rel="icon" href="images/chmsc.png" type="image" />
 <link rel="stylesheet" media="screen" type="text/css" href="css/spacegallery.css" />
    <link rel="stylesheet" media="screen" type="text/css" href="css/custom.css" />

    
    <script type="text/javascript" src="js/eye.js"></script>
    <script type="text/javascript" src="js/spacegallery.js"></script>
    <script type="text/javascript" src="js/layout.js"></script>
	
	 <link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen, projection" />
	 <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" media="screen, projection" />
	 <link rel="stylesheet" href="css/font-awesome.css">
	 
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="css/Home.css" media="screen, projection" />

<?php
function _redirect($url=''){
	if(!empty($url)){
		echo "<script> location.href = '".$url."' </script>";
	}
}
?>
   

