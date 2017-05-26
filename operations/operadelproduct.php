<?php
	include("../connect.php");
	if(isset($_REQUEST['del'])){
		$ID = $_REQUEST['del'];
		$sql= "DELETE FROM products WHERE ID ='$ID'";
		$res= mysqli_query($dbcon,$sql) or die ("Failed".mysqli_error());
        if($res){
		    echo "<meta http-equiv='refresh' content='0;url=../dash/allproducts.php?yes=1'>";
        }
	}
?>