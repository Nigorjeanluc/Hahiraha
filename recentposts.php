<h4>Popular Products or Services</h4>
		 		<div class="hline"></div>
					<ul class="popular-posts">
                    <?php
                        include('connect.php');
                        $psql = mysqli_query($dbcon,"SELECT * FROM products WHERE Views>0 ORDER BY Views DESC LIMIT 0,10");
                        while($myrow = mysqli_fetch_array($psql)){
                            echo'
                        <li>
		                    <a href="more.php?product='.$myrow['ID'].'"><img style="width:70px;height:70px" src="'.$myrow['Picture01'].'" alt="Popular Post"></a>
		                    <h4><a href="more.php?product='.$myrow['ID'].'">'.$myrow['Name'].'</a></h4>
                            <p><a href="more.php?product='.$myrow['ID'].'">'.$myrow['About'].'</a></p>
		                    <em>Posted on '.$myrow['Date'].'</em>
		                </li>
                            ';
                        }
                    ?>
		            </ul>
		            
<div class="spacing"></div>