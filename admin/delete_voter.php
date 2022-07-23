<?php
include('dbcon.php');


$id=$_POST['id'];
$pc_date = $_POST['pc_date'];
$pc_time = $_POST['pc_time'];
$data_name = $_POST['data_name'];
$user_name = $_POST['user_name'];

mysqli_query($conn,"delete from voters where VoterID='$id'");

mysqli_query($conn,"INSERT INTO history (`data`,`action`,`date`,user)VALUES('$data_name', 'Deleted Voter', '$pc_date $pc_time','$user_name')")or die(mysqli_error());	


?>