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
	  <li><a href="home.php"><i class="icon-home icon-large"></i>Home</a></li>
	  <li><a  href="candidate_list.php"><i class="icon-align-justify icon-large"></i>Candidates List</a></li>  

	  <li class="active"><a  href="voter_list.php"><i class="icon-align-justify icon-large"></i>Voters List</a></li>  
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
	
		    <div class="pagination">
    <ul>

    <li><a href="voter_list.php"><font color="white">All</font></a></li>
    <li  class="active"><a href="Voted_voters.php"><font color="white">Voted Voters</font></a></li>
    <li  class=""><a href="Unvoted_voters.php"><font color="white">UnVoted Voters</font></a></li>
    <li  class=""><a href="new_voter.php"><font color="white"><i class="icon-plus icon-large"></i>Add Voters</font></a></li>
  
   
 
  
    </ul>
    </div>
		<div class="excel_button">
			<form method="POST" action="excel_voted_voter.php">
	<button id="excel" class="btn btn-success" name="save"><i class="icon-download icon-large"></i>Download Excel File</button>
	</form>
	</div>
	<table class="users-table">


<div class="demo_jui">
		<table cellpadding="0" cellspacing="0" border="0" class="display" id="log" class="jtable">
			<thead>
				<tr>
				<th>FirstName</th>
				<th>LastName</th>
				<th>MiddleName</th>
				<th>UserName</th>
				<th>Password</th>
				<th>Year</th>
				<th>Status</th>
				<th>Actions</th>
				</tr>
			</thead>
			<tbody>

<?php $voter_query=mysqli_query($conn,"select  * from voters where status='Voted'");
		while($voter_rows=mysqli_fetch_array($voter_query)){ $id=$voter_rows['VoterID'];?>

<tr class="del<?php echo $id ?>">
	<td><?php echo $voter_rows['FirstName']; ?></td>
	<td><?php echo $voter_rows['LastName']; ?></td>
	<td><?php echo $voter_rows['MiddleName']; ?></td>
	<td><?php echo $voter_rows['Username']; ?></td>
	<td><?php echo $voter_rows['Password']; ?></td>
	<td align="center"><?php echo $voter_rows['Year']; ?></td>
	<td align="center"><?php echo $voter_rows['Status']; ?></td>
	<td align="center"><a class="btn btn-danger1"  id="<?php echo $id; ?>">  <i class="icon-trash icon-large"></i>&nbsp;Delete</a>


	<input type="hidden" name="data_name" class="data_name<?php echo $id ?>" value="<?php echo $voter_rows['FirstName']." ".$voter_rows['LastName']; ?>"/>
	<input type="hidden" name="user_name" class="user_name" value="<?php echo $_SESSION['User_Type']; ?>"/>
	</tr>
<?php } ?>

			</tbody>
		</table>
	</div>
	
	
	<?php include('footer.php')?>
</div>
</div>

<input type="hidden" class="pc_date" name="pc_date"/>
<input type="hidden" class="pc_time" name="pc_time"/>
</body>
</html>

<script type="text/javascript">
	$(document).ready( function() {
	
	var myDate = new Date();
var pc_date = (myDate.getMonth()+1) + '/' + (myDate.getDate()) + '/' + myDate.getFullYear();
var pc_time = myDate.getHours()+':'+myDate.getMinutes()+':'+myDate.getSeconds();
jQuery(".pc_date").val(pc_date);
jQuery(".pc_time").val(pc_time);
	
	
	$('.btn-danger1').click( function() {
		
		var id = $(this).attr("id");
		var pc_date = $('.pc_date').val();
		var pc_time = $('.pc_time').val();
		var data_name = $('.data_name'+id).val();
		var user_name = $('.user_name').val();
		if(confirm("Are you sure you want to delete this Voter?")){
			
		
			$.ajax({
			type: "POST",
			url: "delete_voter.php",
			data: ({id: id,pc_time:pc_time,pc_date:pc_date,data_name:data_name,user_name:user_name}),
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
