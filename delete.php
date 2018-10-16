<?php
include_once 'db.php';
if(isset($_GET['nim'])){
	$nim = $_GET['nim'];
	$query = "Delete From datamaba Where nim = '$nim'";
	$query_success = mysqli_query($conn,$query);
	if ($query_success){
		header('location: list.php');
	}else{
		die(mysqli_error($conn));
	}
}
?>