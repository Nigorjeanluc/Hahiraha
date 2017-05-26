<?php
session_start();
include("../connect.php");
	if(isset($_POST['seller'])){
		$username = htmlentities($_POST['email']);
        $password = htmlentities($_POST['password']);
		$sql= "SELECT * FROM seller WHERE Name='$username' AND Password='$password'";
		$res= mysqli_query($dbcon,$sql) or die ("Failed".mysqli_error());
		$row= mysqli_fetch_array($res);
		if(isset($row)){
			$_SESSION['seller']=$username;
			echo "<meta http-equiv='refresh' content='0;url=../dash/index1.php'>";
		}else{
			echo "<meta http-equiv='refresh' content='0;url=loginassseller.php?yes=0'>";
		}
	}
?>