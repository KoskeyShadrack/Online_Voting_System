<?php
include('session.php');
include('header.php');
include('dbcon.php');

$get_id=$_GET['id'];
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
	  <li class="active"><a  href="candidate_list.php"><i class="icon-align-justify icon-large"></i>Candidates List</a></li>  

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
	<?php 
	$result=mysqli_query($conn,"select * from candidate where CandidateID='$get_id'") or die(mysqli_error());
	$row=mysqli_fetch_array($result);
	?>
	<form method="POST"  class="form-horizontal" enctype="multipart/form-data">
	<input type="hidden" name="user_name" class="user_name" value="<?php echo $_SESSION['User_Type']; ?>"/>
    <fieldset>
    <legend><font color="white">Edit Candidate</font></legend>
	</br>
	<div class="candidate_margin">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter">
   
	<div class="control-group">
    <label class="control-label" for="input01">FirstName:</label>
    <div class="controls">
    <input type="text" name="rfirstname" class="rfirstname" value="<?php echo $row['FirstName']; ?>">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">LastName:</label>
    <div class="controls">
    <input type="text" name="rlastname" class="rlastname" value="<?php echo $row['LastName']; ?>">
    </div>
    </div>
	
		
	<div class="control-group">
    <label class="control-label" for="input01">MiddleName:</label>
    <div class="controls">
    <input type="text" name="rname" class="rname" value="<?php echo $row['MiddleName']; ?>">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Gender:</label>
    <div class="controls">
   <select name="rgender" class="rgender" id="span2">
   <option><?php echo $row['Gender']; ?></option>
	<option>Male</option>
	<option>FeMale</option>
	
	</select>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Year Level:</label>
    <div class="controls">
   <select name="ryear" class="ryear" id="span2">
     <option><?php echo $row['Year']; ?></option>
	<option>1st year</option>
	<option>2nd year</option>
	<option>3rd year</option>
	<option>4th year</option>
	</select>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Position:</label>
    <div class="controls">
   <select name="rposition" class="rposition" id="span90">
    <option><?php echo $row['Position']; ?></option>
	<option>Governor</option>
	<option>Vice-Governor</option>
	<option>1st Year Representative</option>
	<option>2nd Year Representative</option>
	<option>3rd Year Representative</option>
	<option>4th Year Representative</option>
	
	</select>
    </div>
    </div>
	
		<div class="control-group">
    <label class="control-label" for="input01">Party:</label>
    <div class="controls">
    <input type="text" name="party" class="party" value="<?php echo $row['Party']; ?>">
    </div>
    </div>
	
<div class="control-group">
	<label class="control-label" for="input01">Image:</label>
    <div class="controls">
	<input type="file" name="image" class="font"> 
    </div>
    </div>
	
	
	<div class="control-group">
    <div class="controls">
	<button class="btn btn-primary" name="save"><i class="icon-save icon-large"></i>Save</button>
    </div>
    </div>
	
    </fieldset>
    </form>
	
	</div>
	<?php include('footer.php')?>	
</div>
</div>
</div>
</body>
</html>


<?php
if (isset($_POST['save'])){
$user_name=$_POST['user_name'];

$rfirstname=$_POST['rfirstname'];
$rlastname=$_POST['rlastname'];
$rgender=$_POST['rgender'];
$ryear=$_POST['ryear'];
$rposition=$_POST['rposition'];
$rname=$_POST['rname'];
$party=$_POST['party'];
$location='';
if(!empty($_FILES['image']['tmp_name'])){
$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$image_size= getimagesize($_FILES['image']['tmp_name']);

			
			move_uploaded_file($_FILES["image"]["tmp_name"],"../upload/" . $_FILES["image"]["name"]);			
			move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
			$location=",Photo = 'upload/" . $_FILES["image"]["name"] ."'";
			
			}
			
			mysqli_query($conn,"update candidate set FirstName='$rfirstname',LastName='$rlastname',Gender='$rgender',year='$ryear',Position='$rposition',MiddleName='$rname',Party='$party' $location where CandidateID='$get_id'")or die(mysqli_query);
			_redirect('candidate_list.php');
			
			
			mysqli_query($conn,"INSERT INTO history (data,action,date,user)VALUES('$rfirstname $rlastname', 'Edit Candidate', NOW(),'$user_name')")or die(mysqli_error());

}
?>
	  