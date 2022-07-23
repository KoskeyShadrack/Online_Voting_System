<?php
include('session.php');
include('header.php');
include('dbcon.php');
?>
</head>
<div id="shadow" class="popup"></div>
<body>
<div class="wrapper">

	
		<div class="hero-unit">
	<?php include('head.php'); ?>
		
	</div>

	<div class="navbar">
	<div class="navbar-inner">
	<div class="container">
	     
	
	<a class="brand">
	 <h2> Online Voting System  </h2>
 	</a>
	
	
	<ul class="nav nav-pills">
	  <li class="active"><a href="home.php">Home</a></li>
	  <li class="active"><a  href="new_voter.php">Add Voters</a></li>  

	  <li class="dropdown" id="menu1">
	    <a class="dropdown-toggle" data-toggle="dropdown" href="#menu1">
	      Candidate
	      <b class="caret"></b>
	    </a>
	    <ul class="dropdown-menu">
	      <li><a href="candidate_list.php">Candidate List</a></li>
		   <li class="divider"></li>
		     <li><a href="new_candidate.php">Candidate Registration</a></li>
		   <li class="divider"></li>
	      <li><a href="presidential.php">Presidential List</a></li>
		  <li class="divider"></li>
	      <li><a href="vice-presidential.php">Vice-Presidential List</a></li>
		  <li class="divider"></li>
	      <li><a href="#">Secretary List</a></li>
		   <li class="divider"></li>
	      <li><a href="#">Treasurer List</a></li>
		   <li class="divider"></li>
	      <li><a href="#">Auditor List</a></li>
	      </ul>
	
	      </li>
		    <li class="dropdown" id="voter">
	    <a class="dropdown-toggle" data-toggle="dropdown" href="#voter">
	      Voters
	      <b class="caret"></b>
	    </a>
	    <ul class="dropdown-menu">
		 
		  <li><a href="voter_list.php">Voters List</a></li>
	      <li class="divider"></li>
	      <li><a href="Unvoted_voters.php">Unvoted Voters</a></li>
		      <li class="divider"></li>
	      <li><a href="Voted_voters.php">Voted Voters</a></li>
	      </ul>	
	
	      </li>
		     <li class="dropdown" id="report">
	    <a class="dropdown-toggle" data-toggle="dropdown" href="#report">
	      Report
	      <b class="caret"></b>
	    </a>
	    <ul class="dropdown-menu">
		 <li class="divider"></li>
		  <li><a href="canvassing_report.php">Canvassing Report</a></li>
	      <li class="divider"></li>
	      </ul>
	
	      </li>
		   <li class="active"><a data-toggle="modal" href="#about">About</a></li>
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
		   <li>.....</li>
	 </ul>



	<form class="navbar-form pull-right">
	<a class="btn btn-danger" data-toggle="modal" href="#myModal"><i class="icon-off"></i>&nbsp;Logout</a>
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
	<table class="users-table">


<div class="demo_jui">
		<table cellpadding="0" cellspacing="0" border="0" class="display" id="log" class="jtable">
			<thead>
				<tr>
				<th>Position</th>
				<th>FirstName</th>
				<th>LastName</th>
				<th>Gender</th>
				<th>Year</th>
				<th>Section</th>
				<th>Photo</th>
				<th>Action</th>
				
				</tr>
			</thead>
			<tbody>

<?php $candidate_query=mysqli_query($conn,"select  * from candidate where Position='Vice-President'");
		while($candidate_rows=mysqli_fetch_array($candidate_query)){ $id=$candidate_rows['CandidateID'];
	
		?>

<tr class="del<?php echo $id ?>">
	<td align="center"><?php echo $candidate_rows['Position']; ?></td>
	<td><?php echo $candidate_rows['FirstName']; ?></td>
	<td><?php echo $candidate_rows['LastName']; ?></td>
	<td align="center"><?php echo $candidate_rows['Gender']; ?></td>
	<td align="center"><?php echo $candidate_rows['Year']; ?></td>
	<td align="center"><?php echo $candidate_rows['Section']; ?></td>
	<td align="center"><a data-toggle="modal" href="#<?php echo $id; ?>" ><img class="pic" src="<?php echo $candidate_rows['Photo'];?>" width="40" height="40"></td>
	</a>
	<div class="modal hide fade" id="<?php echo $id ?>">
	<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">�</button>
<h1>Candidate Information</h1>
</div>
	  <div class="modal-body">
	  
	  <p><img src="<?php echo $candidate_rows['Photo'];?>" width="200" height="200"></p>
	  <div class="pull-right-modal">
	  <p>
	  Candidate ID:&nbsp;<?php echo $candidate_rows['CandidateID'];  ?>
	  </p>
	  <p>
	  FirstName:&nbsp;<?php echo $candidate_rows['FirstName'];  ?>
	  </p>
	   <p>
	  LastName:&nbsp;<?php echo $candidate_rows['LastName'];  ?>
	  </p>
	  <p>
	  Gender:&nbsp;<?php echo $candidate_rows['Gender'];  ?>
	  </p>
	  <p>
	  Section:&nbsp;<?php echo $candidate_rows['Section'];  ?>
	  </p>
	   <p>
	  Position:&nbsp;<?php echo $candidate_rows['Position'];  ?>
	  </p>
	  <p>
	  Year:&nbsp;<?php echo $candidate_rows['Year'];  ?>
	  </p>
	  </div>
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
	  
		</div>
		</div>
	
	<td align="center"><a class="btn btn-danger" id="<?php echo $id; ?>"><i class="icon-trash"></i>&nbsp;Delete</a></td>	
	</tr>
<?php } ?>

			</tbody>
		</table>
	</div>
	
	
<?php include('footer.php');?>	
</div>
</body>
</html>


<script type="text/javascript">
	$(document).ready( function() {
	$('.btn-danger').click( function() {
		
		var id = $(this).attr("id");
	
		if(confirm("Are you sure you want to delete this Candidate?")){
			
		
			$.ajax({
			type: "POST",
			url: "delete_candidate.php",
			data: ({id: id}),
			cache: false,
			success: function(html){
			$(".del"+id).fadeOut('slow'); 
			} 
			}); 
			}else{
			return false;}
		});				
	});

</script>
