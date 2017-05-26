<?php
session_start();
include("../connect.php");
	if(isset($_POST['yeah'])){
        $name = htmlentities($_POST['item']);
		$price = htmlentities($_POST['price']);
        $about = htmlentities($_POST['about']);
        $currency = htmlentities($_POST['currency']);
		$seller= htmlentities($_POST['seller']);
		$phone=htmlentities($_POST['phone']);
		$quantity= htmlentities($_POST['quantity']);
        $province = htmlentities($_POST['province']);
		$phone = htmlentities($_POST['phone']);
        $classes = htmlentities($_POST['classes']);
        $district = htmlentities($_POST['district']);
        $sector = htmlentities($_POST['sector']);
        $categorie = htmlentities($_POST['categorie']);
		$prices= $price.' '.$currency;
		$targetFolder = "../assets/img/products/";
		$targetFolders = "assets/img/products/";
        $picone= $targetFolder.basename($_FILES['picone']['name']);
        $pictwo= $targetFolder.basename($_FILES['pictwo']['name']);
        $picthree= $targetFolder.basename($_FILES['picthree']['name']);
		$picfour= $targetFolder.basename($_FILES['picfour']['name']);
		$picfive= $targetFolder.basename($_FILES['picfive']['name']);
		$picsix= $targetFolder.basename($_FILES['picsix']['name']);
		$picseven= $targetFolder.basename($_FILES['picseven']['name']);
		$piceight= $targetFolder.basename($_FILES['piceight']['name']);
		$picnine= $targetFolder.basename($_FILES['picnine']['name']);
        $file_tmp1=$_FILES['picone']['tmp_name'];
        $file_tmp2=$_FILES['pictwo']['tmp_name'];
        $file_tmp3=$_FILES['picthree']['tmp_name'];
        $file_tmp4=$_FILES['picfour']['tmp_name'];
        $file_tmp5=$_FILES['picfive']['tmp_name'];
        $file_tmp6=$_FILES['picsix']['tmp_name'];
        $file_tmp7=$_FILES['picseven']['tmp_name'];
        $file_tmp8=$_FILES['piceight']['tmp_name'];
        $file_tmp9=$_FILES['picnine']['tmp_name'];
		move_uploaded_file($file_tmp1,$picone);
        move_uploaded_file($file_tmp2,$pictwo);
		move_uploaded_file($file_tmp3,$picthree);
		move_uploaded_file($file_tmp4,$picfour);
		move_uploaded_file($file_tmp5,$picfive);
		move_uploaded_file($file_tmp6,$picsix);
		move_uploaded_file($file_tmp7,$picseven);
		move_uploaded_file($file_tmp8,$piceight);
		move_uploaded_file($file_tmp9,$picnine);
        $piconein= $targetFolders.basename($_FILES['picone']['name']);
        $pictwoin= $targetFolders.basename($_FILES['pictwo']['name']);
        $picthreein= $targetFolders.basename($_FILES['picthree']['name']);
        $picfourin= $targetFolders.basename($_FILES['picfour']['name']);
        $picfivein= $targetFolders.basename($_FILES['picfive']['name']);
        $picsixin= $targetFolders.basename($_FILES['picsix']['name']);
        $picsevenin= $targetFolders.basename($_FILES['picseven']['name']);
        $piceightin= $targetFolders.basename($_FILES['piceight']['name']);
        $picninein= $targetFolders.basename($_FILES['picnine']['name']);
		$sql= "INSERT INTO products(Name,Sellers,Classes,Phone,Price,Quantity,About,Picture01,Picture02,Picture03,Picture04,Picture05,Picture06,Picture07,Picture08,Picture09,Province,District,Sector,Categorie,Date) 
	              VALUES('$name','$seller','$classes','$phone','$prices','$quantity','$about','$piconein','$pictwoin','$picthreein','$picfourin','$picfivein','$picsixin','$picsevenin','$piceightin','$picninein','$province','$district','$sector','$categorie',now())";
		$res= mysqli_query($dbcon,$sql) or die ("Failed".mysqli_error());
		if(isset($res)){
			echo "<meta http-equiv='refresh' content='0;url=../dash/product1.php?yes=0'>";
		}else{
			echo "<meta http-equiv='refresh' content='0;url=../dash/product1.php?no=0'>";
		}
	}
	if(isset($_POST['yeahh'])){
        $name = htmlentities($_POST['item']);
		$price = htmlentities($_POST['price']);
        $about = htmlentities($_POST['about']);
        $currency = htmlentities($_POST['currency']);
		$seller= htmlentities($_POST['seller']);
		$phone=htmlentities($_POST['phone']);
		$quantity= htmlentities($_POST['quantity']);
        $province = htmlentities($_POST['province']);
		$phone = htmlentities($_POST['phone']);
        $classes = htmlentities($_POST['classes']);
        $district = htmlentities($_POST['district']);
        $sector = htmlentities($_POST['sector']);
        $categorie = htmlentities($_POST['categorie']);
		$sellerID = $_SESSION['ID_admin'];
		$prices= $price.' '.$currency;
		$targetFolder = "../assets/img/products/";
		$targetFolders = "assets/img/products/";
        $picone= $targetFolder.basename($_FILES['picone']['name']);
        $pictwo= $targetFolder.basename($_FILES['pictwo']['name']);
        $picthree= $targetFolder.basename($_FILES['picthree']['name']);
		$picfour= $targetFolder.basename($_FILES['picfour']['name']);
		$picfive= $targetFolder.basename($_FILES['picfive']['name']);
		$picsix= $targetFolder.basename($_FILES['picsix']['name']);
		$picseven= $targetFolder.basename($_FILES['picseven']['name']);
		$piceight= $targetFolder.basename($_FILES['piceight']['name']);
		$picnine= $targetFolder.basename($_FILES['picnine']['name']);
        $file_tmp1=$_FILES['picone']['tmp_name'];
        $file_tmp2=$_FILES['pictwo']['tmp_name'];
        $file_tmp3=$_FILES['picthree']['tmp_name'];
        $file_tmp4=$_FILES['picfour']['tmp_name'];
        $file_tmp5=$_FILES['picfive']['tmp_name'];
        $file_tmp6=$_FILES['picsix']['tmp_name'];
        $file_tmp7=$_FILES['picseven']['tmp_name'];
        $file_tmp8=$_FILES['piceight']['tmp_name'];
        $file_tmp9=$_FILES['picnine']['tmp_name'];
		move_uploaded_file($file_tmp1,$picone);
        move_uploaded_file($file_tmp2,$pictwo);
		move_uploaded_file($file_tmp3,$picthree);
		move_uploaded_file($file_tmp4,$picfour);
		move_uploaded_file($file_tmp5,$picfive);
		move_uploaded_file($file_tmp6,$picsix);
		move_uploaded_file($file_tmp7,$picseven);
		move_uploaded_file($file_tmp8,$piceight);
		move_uploaded_file($file_tmp9,$picnine);
        $piconein= $targetFolders.basename($_FILES['picone']['name']);
        $pictwoin= $targetFolders.basename($_FILES['pictwo']['name']);
        $picthreein= $targetFolders.basename($_FILES['picthree']['name']);
        $picfourin= $targetFolders.basename($_FILES['picfour']['name']);
        $picfivein= $targetFolders.basename($_FILES['picfive']['name']);
        $picsixin= $targetFolders.basename($_FILES['picsix']['name']);
        $picsevenin= $targetFolders.basename($_FILES['picseven']['name']);
        $piceightin= $targetFolders.basename($_FILES['piceight']['name']);
        $picninein= $targetFolders.basename($_FILES['picnine']['name']);
		$sql= "INSERT INTO products(Name,Sellers,Classes,Phone,Price,Quantity,About,Picture01,Picture02,Picture03,Picture04,Picture05,Picture06,Picture07,Picture08,Picture09,Province,District,Sector,Categorie,Date) 
	              VALUES('$name','$seller','$classes','$phone','$prices','$quantity','$about','$piconein','$pictwoin','$picthreein','$picfourin','$picfivein','$picsixin','$picsevenin','$piceightin','$picninein','$province','$district','$sector','$categorie',now())";
		$res= mysqli_query($dbcon,$sql) or die ("Failed".mysqli_error());
		if(isset($res)){
			echo "<meta http-equiv='refresh' content='0;url=../dash/product.php?yes=0'>";
		}else{
			echo "<meta http-equiv='refresh' content='0;url=../dash/product.php?no=0'>";
		}
	}
?>