<?php
session_start();
include("../connect.php");
	if(isset($_POST['poo'])){
		$username = htmlentities($_POST['email']);
        $password = htmlentities($_POST['password']);
		$sql= "SELECT * FROM admin WHERE Name='$username' AND Password='$password'";
		$res= mysqli_query($dbcon,$sql) or die ("Failed".mysqli_error());
		$row= mysqli_fetch_array($res);
		if(isset($row)){
			$_SESSION['admin']=$username;
			$_SESSION['ID_admin']=$row['ID'];
			echo "<meta http-equiv='refresh' content='0;url=../dash/index.php'>";
		}else{
			echo "<meta http-equiv='refresh' content='0;url=login.php?yes=0'>";
		}
	}
?>