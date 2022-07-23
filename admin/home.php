<?php
include('session.php');
include('header.php');
include('dbcon.php');
?>
</head>
<body>
<?php include('nav_top.php'); ?>
<div class="wrapper">
<div class="home_body">
<div class="navbar">
	<div class="navbar-inner">
	<div class="container">	
	<ul class="nav nav-pills">
	  <li>....</li>
	  <li class="active"><a href="home.php"><i class="icon-home icon-large"></i>Home</a></li>
	  <li><a  href="candidate_list.php"><i class="icon-align-justify icon-large"></i>Candidates List</a></li>  

	  <li class=""><a  href="voter_list.php"><i class="icon-align-justify icon-large"></i>Voters List</a></li>  
		 <li><a  href="canvassing_report.php"><i class="icon-book icon-large"></i>Canvassing Report</a></li>
		    <li><a  href="History.php"><i class="icon-table icon-large"></i>History Log</a>
		   <li><a data-toggle="modal" href="#about"><i class="icon-exclamation-sign icon-large"></i>About</a></li>
		   <div class="modal hide fade" id="about">
	<div class="modal-header"> 
	<button type="button" class="close" data-dismiss="modal">�</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	  <?php include('about.php') ?>
	  <div class="modal-footer_about">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>
		   <li>....</li>
	 </ul>
	<form class="navbar-form pull-right">
		<?php $result=mysqli_query($conn,"select * from users where User_id='$id_session'");
	$row=mysqli_fetch_array($result);
	?>
	<font color="white">Welcome:<i class="icon-user-md"></i><?php echo $row['User_Type']; ?></font>
	<a class="btn btn-danger" id="logout" data-toggle="modal" href="#myModal"><i class="icon-off"></i>&nbsp;Logout</a>
	<div class="modal hide fade" id="myModal">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">�</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	    <p><font color="gray">Are You Sure you Want to LogOut?</font></p>
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">No</a>
	    <a href="logout.php" class="btn btn-primary">Yes</a>
		</div>
		</div>

	</form>
	</div>
	</div>
	</div>
	<div id="element" class="hero-body">
	  <div class="thumbnail_gallery">
                <h2>CU Gallery</h2>
				<p><font color="black">Click the image to view more...</font></p>
				<div id="myGallery" class="spacegallery">
					<img src="images/cu7.jpg" alt="" />
					<img src="images/cu2.jpg" alt="" />
					<img src="images/cu3.jpg" alt="" />
					<img src="images/cu4.jpg" alt="" />
					<img src="images/cu5.jpg" alt="" />
					<img src="images/cu6.jpg" alt="" />
					<img src="images/cu1.jpg" alt="" />
					
            </div>
			</div>
			  <div class="thumbnail_mission">
			  <h2>Mission</h2>
			  <p>...UNDER MISSION...
			  </p>
			   <a class="btn btn-info" data-toggle="modal" href="#mission"><i class="icon-list-alt icon-large"></i>&nbsp;Read More</a>
			   	<div class="modal hide fade" id="mission">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">�</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	   <h2>College Of Education Mission</h2>
<p><font color="black">
EDUCATION MISSION
</p>	  

	   <h2>College Of Education Vission</h2>
<p><font color="black">
EDUCATION VISSION
</p>	 
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
	  
		</div>
		</div>
			   
			  </div>
			  
			   <div class="thumbnail_vission">
			   <h2>Objectives</h2>
			  <p>OBJECTIVE...
			  </p>
			  <a class="btn btn-info" data-toggle="modal" href="#read_objectives"><i class="icon-list-alt icon-large"></i>&nbsp;Read More</a>
			  
			  	<div class="modal hide fade" id="read_objectives">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">�</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	  <p><font color="black">OBJECTIVE 1
	  </font>
	  </p>
	  <p><font color="black">OBJECTIVE 2
	  </font>OBJECTIVE 3	
	  </font>
	  </p>
	  <h2>Objectives</h2>
	  <p>Elementary Level</p>
	 <p><font color="black">OBJECTIVE 4
	 </p>
 
	 <p>OBJECTIVE 5
	 </p>
	 </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>

		</div>
		</div>
			  </div>
			
	</div>
	<?php include('footer.php')?>	
</div>
</div>
</body>
</html>
