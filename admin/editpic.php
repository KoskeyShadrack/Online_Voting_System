<?php
include('session.php');
include('header.php');
include('dbcon.php');
$id_get=$_GET['id'];

?>
<script type="text/javascript" src="Ajaxfileupload-jquery-1.3.2.js" ></script>
<script type="text/javascript" src="ajaxupload.3.5.js" ></script>
 <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />


<link rel="stylesheet" type="text/css" href="css/Home.css" />
</head>
<body>
<div class="wrapper">

	<div class="hero-head">
	<?php include('head.php'); ?>
		
	</div>
	<?php include('navbar.php') ;?>
	
	<div id="element" class="hero-body">
	
<?php
$result=mysqli_query($conn,"select * from candidate where CandidateID='$id_get'");
$candidate_row=mysqli_fetch_array($result);

?>
	
	<form  class="form-horizontal" enctype="multipart/form-data">
    <fieldset>
    <legend><font color="white">Change Candidate Image</font></legend>
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter1">
   
	<div class="control-group">
    <label class="control-label" for="input01">FirstName:</label>
    <div class="controls">
   <label><?php echo $candidate_row['FirstName']; ?> </label>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">LastName:</label>
    <div class="controls">
      <label><?php echo $candidate_row['LastName']; ?> </label>
    </div>
    </div>
	
	
	<div class="control-group">
    <label class="control-label" for="input01">MiddleName:</label>
    <div class="controls">
      <label><?php echo $candidate_row['MiddleName']; ?> </label>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Gender:</label>
    <div class="controls">
     <label><?php echo $candidate_row['Gender']; ?> </label>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Year Level:</label>
    <div class="controls">
    <label><?php echo $candidate_row['Year']; ?> </label>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Section:</label>
    <div class="controls">
  <label><?php echo $candidate_row['Section']; ?> </label>
    </div>
    </div>
	

	
	<div class="control-group">
    <label class="control-label" for="input01">Position:</label>
    <div class="controls">
    <label><?php echo $candidate_row['Position']; ?> </label>
    </div>
    </div>

<div class="control-group">
    <label class="control-label" for="input01">Party List:</label>
    <div class="controls">
    <label><?php echo $candidate_row['PartyList']; ?> </label>
    </div>
    </div>
	
    </fieldset>
    </form>
	
	<div class="thumbnail_picture">
	
	<div class="thumbnail_new_voter1">
	<form  method="post" enctype="multipart/form-data">
  
  Select Picture
 <input type="file" name="image" class="font" > 
  </br>

    <input type="submit" value="Upload" class="btn btn-primary">
        
</form>
</div>
</div>
	
	</div>
	
	<?php include('footer.php')?>	
</div>
</body>
</html>


<?php

	if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$image_size= getimagesize($_FILES['image']['tmp_name']);

	
		if ($error > 0){
				die("Error uploading file! Code $error.");
			}else{
				if($size > 10000000) //conditions for the file
				{
				die("Format is not allowed or file size is too big!");
				}
		else{
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
			$location="upload/" . $_FILES["image"]["name"];
			
			mysqli_query($conn,"update candidate set Photo='$location' where CandidateID='$id_get'");
			_redirect('candidate_list.php');
		
	
			}
	}
}


?>


