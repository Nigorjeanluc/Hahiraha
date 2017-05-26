<html>
	<head>
	<title>Hahiraha.com</title>
	</head>
	
	<body>
		
		<?php
		include("../connect.php");
		$query="SELECT * FROM admin WHERE Name='JayJay' AND Password='210694'";
		$res=mysqli_query($dbcon,$query);
		while($row=mysqli_fetch_array($res)){
			echo '<h1>'.$row['Name'].'</h1>';
			echo '<h1>'.$row['Password'].'</h1>';
		}		
		?>
	</body>
</html>