<?php
session_start();
include("../connect.php");
	if(isset($_POST['poh'])){
		$id = htmlentities($_POST['ID']);
        $name = htmlentities($_POST['item']);
		$price = htmlentities($_POST['price']);
        $about = htmlentities($_POST['about']);
		$quantity= htmlentities($_POST['quantity']);
		$sql= "UPDATE products SET Name = '$name', Price='$price', Quantity='$quantity', About='$about', Date=now() WHERE ID ='$id'";
		$res= mysqli_query($dbcon,$sql) or die ("Failed".mysqli_error());
		if(isset($res)){
			echo "<meta http-equiv='refresh' content='0;url=../dash/editpro1.php?id=$id&&yes=1'>";
		}else{
			echo "<meta http-equiv='refresh' content='0;url=loginassseller.php?yes=0'>";
		}
	}
    if(isset($_POST['pooh'])){
        $id = htmlentities($_POST['ID']);
        $name = htmlentities($_POST['item']);
		$price = htmlentities($_POST['price']);
        $about = htmlentities($_POST['about']);
		$seller= htmlentities($_POST['seller']);
		$phone=htmlentities($_POST['phone']);
		$quantity= htmlentities($_POST['quantity']);
        $province = htmlentities($_POST['province']);
		$phone = htmlentities($_POST['phone']);
        $district = htmlentities($_POST['district']);
        $sector = htmlentities($_POST['sector']);
        $categorie = htmlentities($_POST['categorie']);
		$sql= "UPDATE products SET Name = '$name', Price='$price', Quantity='$quantity', About='$about', Seller='$seller', Phone='$phone', Quantity='$quantity', Province='$province', District='$district', Sector='$sector', Categorie='$categorie', Date=now() WHERE ID ='$id'";
		$res= mysqli_query($dbcon,$sql) or die ("Failed".mysqli_error());
		if(isset($res)){
			echo "<meta http-equiv='refresh' content='0;url=../dash/editpro.php?id=$id&&yes=1'>";
		}else{
			echo "<meta http-equiv='refresh' content='0;url=login.php?yes=0'>";
		}
	}
    if(isset($_POST['poooh'])){
		$id= htmlentities($_POST['ID']);
        $name = htmlentities($_POST['item']);
		$business = htmlentities($_POST['company']);
		$email = htmlentities($_POST['email']);
        $about = htmlentities($_POST['about']);
        $phone = htmlentities($_POST['phone']);
        $province = htmlentities($_POST['province']);
        $district = htmlentities($_POST['district']);
        $sector = htmlentities($_POST['sector']);
        $categorie = htmlentities($_POST['categorie']);
        $password = htmlentities($_POST['password']);
		$sql= "UPDATE seller SET Name = '$name', NameOfBusiness='$business', Email='$email', About='$about', Phone='$phone', Province='$province', District='$district', Sector='$sector', Categorie='$categorie', Password='$password', Date=now() WHERE ID ='$id'";
		$res= mysqli_query($dbcon,$sql) or die ("Failed".mysqli_error());
		if(isset($res)){
			echo "<meta http-equiv='refresh' content='0;url=../dash/editsel.php?id=$id&&yes=1'>";
		}else{
			echo "<meta http-equiv='refresh' content='0;url=login.php?yes=0'>";
		}
	}
?>