<?php
session_start();
include("../connect.php");
	if(isset($_POST['edit'])){
        $name = htmlentities($_POST['admin']);
		$password = htmlentities($_POST['password']);
        $sid=$_SESSION['id'];
		$_SESSION['admin']=$name;
		$sql= "UPDATE admin SET Name = '$name', Password='$password', Date=now() WHERE ID ='$sid'";
		$res= mysqli_query($dbcon,$sql) or die ("Failed".mysqli_error());
		if(isset($res)){
			echo "<meta http-equiv='refresh' content='0;url=../dash/edit.php?yes=0'>";
		}else{
			echo "<meta http-equiv='refresh' content='0;url=login.php?yes=0'>";
		}
	}
	if(isset($_POST['editt'])){
		$phone = htmlentities($_POST['phone']);
		$email = htmlentities($_POST['email']);
		$password = htmlentities($_POST['password']);
        $sid=$_SESSION['idd'];
		$sql= "UPDATE seller SET Phone='$phone', Email='$email', Password='$password', Date=now() WHERE ID ='$sid'";
		$res= mysqli_query($dbcon,$sql) or die ("Failed".mysqli_error());
		if(isset($res)){
			echo "<meta http-equiv='refresh' content='0;url=../dash/edit1.php?yes=0'>";
		}else{
			echo "<meta http-equiv='refresh' content='0;url=loginassseller.php?yes=0'>";
		}
	}
?>