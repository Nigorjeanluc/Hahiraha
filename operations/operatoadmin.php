<?php
session_start();
include("../connect.php");
	if(isset($_POST['toadmin'])){
        $content = htmlentities($_POST['content']);
        $reason = htmlentities($_POST['reason']);
        $user = htmlentities($_POST['user']);
		$sellerId = htmlentities($_POST['to']);
		$sql= "INSERT INTO messagetoadmin(User,Reason,Content,Date,seller_Id) 
	              VALUES('$user','$reason','$content',now(),'$sellerId')";
		$res= mysqli_query($dbcon,$sql) or die ("Failed".mysqli_error());
		if(isset($res)){
			echo "<meta http-equiv='refresh' content='0;url=../dash/saytoadmin.php#here'>";
		}else{
			echo "<meta http-equiv='refresh' content='0;url=loginassseller.php?yes=0'>";
		}
	}
	if(isset($_POST['toadminn'])){
        $content = htmlentities($_POST['content']);
		$to = htmlentities($_POST['to']);
        $reason = htmlentities($_POST['reason']);
        $user = htmlentities($_POST['user']);
		$sql= "INSERT INTO messagetoseller(User,Toooo,Reason,Content,Date) 
	              VALUES('$user','$to','$reason','$content',now())";
		$res= mysqli_query($dbcon,$sql) or die ("Failed".mysqli_error());
		if(isset($res)){
			echo "<meta http-equiv='refresh' content='0;url=../dash/saytoseller.php?id=$to#here'>";
		}else{
			echo "<meta http-equiv='refresh' content='0;url=login.php?yes=0'>";
		}
	}
?>