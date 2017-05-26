<?php
session_start();
include("../connect.php");
	if(isset($_POST['pooh'])){
        $content = htmlentities($_POST['content']);
        $phone = htmlentities($_POST['phone']);
        $client = htmlentities($_POST['client']);
		$id=htmlentities($_POST['pro']);
		$proId = htmlentities($_POST['proId']);
        $seller= htmlentities($_POST['seller']);
		$sql= "INSERT INTO productmsg(Client,Phone,Content,Date,product_Id,seller) 
	              VALUES('$client','$phone','$content',now(),'$proId','$seller')";
		$res= mysqli_query($dbcon,$sql) or die ("Failed".mysqli_error());
		if(isset($res)){
			echo "<meta http-equiv='refresh' content='0;url=../more.php?product=".$id."'>";
		}else{
			echo "<meta http-equiv='refresh' content='0;url=loginassseller.php?yes=0'>";
		}
	}
?>