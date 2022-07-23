<?php

include('dbcon.php');
 
 
$FirstName=$_POST['FirstName'];
$LastName=$_POST['LastName'];
$UserName=$_POST['UserName'];
$Section=$_POST['Section'];
$Year=$_POST['Year'];
$Password=$_POST['Password'];
$VoterID=$_POST['VoterID'];

$pc_date = $_POST['pc_date'];
$pc_time = $_POST['pc_time'];
$user_name=$_POST['user_name'];
mysqli_query($conn,"insert into voters (FirstName,LastName,UserName,Password,VoterID,Status,Year,MiddleName)
values('$FirstName','$LastName','$UserName','$Password','$VoterID','Unvoted','$Year','$Section')");

mysqli_query($conn,"INSERT INTO history (data,action,date,user)VALUES('$FirstName $LastName', 'Added Voter', '$pc_date $pc_time','$user_name')")or die(mysqli_error());
?>
