<?php
	include("../connect.php");
	if(isset($_REQUEST['id'])){
		$ID = $_REQUEST['id'];
		$sql= "DELETE FROM products WHERE ID ='$ID'";
		$res= mysqli_query($dbcon,$sql) or die ("Failed".mysqli_error());
        if($res){
		    echo "<meta http-equiv='refresh' content='0;url=../dash/allproducts1.php?yes=1'>";
        }
	}
    if(isset($_REQUEST['idd'])){
		$ID = $_REQUEST['idd'];
		$sql= "DELETE FROM chat WHERE User ='$ID'";
		$res= mysqli_query($dbcon,$sql) or die ("Failed".mysqli_error());
        if($res){
		    echo "<meta http-equiv='refresh' content='0;url=../dash/allproducts1.php?yes=1'>";
        }
	}
	if(isset($_REQUEST['iddd'])){
		$ID = $_REQUEST['iddd'];
		$sql= "DELETE FROM productmsg WHERE ID ='$ID'";
		$res= mysqli_query($dbcon,$sql) or die ("Failed".mysqli_error());
        if($res){
		    echo "<meta http-equiv='refresh' content='0;url=../dash/orders1.php?yes=1'>";
        }
	}
?>