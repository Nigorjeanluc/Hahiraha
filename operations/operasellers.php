<?php
session_start();
include("../connect.php");
	if(isset($_POST['kabisa'])){
        $name = htmlentities($_POST['namee']);
		$business = htmlentities($_POST['company']);
		$email = htmlentities($_POST['email']);
        $about = htmlentities($_POST['about']);
        $phone = htmlentities($_POST['phone']);
        $province = htmlentities($_POST['province']);
        $classes = htmlentities($_POST['classes']);
        $district = htmlentities($_POST['district']);
        $sector = htmlentities($_POST['sector']);
        $categorie = htmlentities($_POST['categorie']);
        $password = htmlentities($_POST['password']);
		$targetFolder = "../assets/img/products/";
		$targetFolders = "assets/img/products/";
        $picone= $targetFolder.basename($_FILES['picone']['name']);
        $file_tmp1=$_FILES['picone']['tmp_name'];
		move_uploaded_file($file_tmp1,$picone);
        $piconein= $targetFolders.basename($_FILES['picone']['name']);
		$sql="INSERT INTO  seller
			VALUES (' ','$name','$business','$email','$phone','$classes','$about','$piconein','$province','$district','$sector','$categorie','$password',now())";
		$res= mysqli_query($dbcon,$sql) or die ("Failed".mysqli_error());
		if(isset($res)){
			echo "<meta http-equiv='refresh' content='0;url=../dash/seller.php?yes=0'>";
		}else{
			echo "<meta http-equiv='refresh' content='0;url=login.php?yes=0'>";
		}
	}
?>