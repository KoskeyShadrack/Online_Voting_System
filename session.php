<?php
session_start();
if (!isset($_SESSION['id'])){

header('location:index.php');
}
$session_id=$_SESSION['id'];
?>