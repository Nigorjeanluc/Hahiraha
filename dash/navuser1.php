<header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo"><div class="row">
        <?php
          echo '<b>Welcome</b> '.$_SESSION['seller'];
        ?></div>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span style="font-family:cursive" class="label label-success">MESSAGES</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header"></li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <?php
                    include('../connect.php');
                    $sell=$_SESSION['seller'];
                    $sqli="SELECT * FROM messagetoseller WHERE Toooo='$sell' ORDER BY Date DESC LIMIT 0,4";
                    $result=mysqli_query($dbcon,$sqli);
                    while ($row=mysqli_fetch_assoc($result)) {
                        $sender=$row['User'];
                          echo'
                      <li><!-- start message -->
                        <a href="#">
                          <h4>
                            '.$row['User'].'
                            <small><i class="fa fa-clock-o"></i> '.$row['Date'].'</small>
                          </h4>
                          <p>'.substr($row['Content'],0,8).'...</p>
                        </a>
                      </li><!-- end message -->';
                          }
                      ?>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <?php
                            include('../connect.php');
                            $adminn=$_SESSION['seller'];
                            $sqli="SELECT * FROM seller WHERE Name='$adminn' ORDER BY ID DESC";
                            $result=mysqli_query($dbcon,$sqli);
                            while ($row=mysqli_fetch_assoc($result)) {
                            $_SESSION['seller']=$row['Name'];
                            $_SESSION['id']=$row['ID'];
                            $_SESSION['Province']=$row['Province'];
                            $_SESSION['District']=$row['District'];
                            $_SESSION['Sector']=$row['Sector'];
                            $_SESSION['Phone']=$row['Phone'];
                            echo'
                            <img src="../'.$row['Picture01'].'" class="user-image" alt="User Image"/>
                            <span class="hidden-xs">'.$_SESSION['seller'].'</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../'.$row['Picture01'].'" class="img-circle" alt="User Image" />
                    <p>
                      '.$_SESSION['seller'].' - Seller
                      <small>Member since '.$row['Date'].'</small>
                    </p>
                  </li>';
                            }
                  ?>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="edit1.php" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="../operations/loginassseller.php?no=2" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <?php
                            include('../connect.php');
                            $adminn=$_SESSION['seller'];
                            $sqli="SELECT * FROM seller WHERE Name='$adminn' ORDER BY ID DESC";
                            $result=mysqli_query($dbcon,$sqli);
                            while ($row=mysqli_fetch_assoc($result)) {
                            $_SESSION['idd']=$row['ID'];
                            echo'
            <div class="pull-left image">
              <img src="../'.$row['Picture01'].'" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>'.$_SESSION['seller'].'</p>
            </div>';
                            }
            ?>
          </div>
          <!-- search form -->
          <!--<form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>-->
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-th-large"></i> <span>Products</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="allproducts1.php"><i class="fa fa-th-list"></i> All products</a></li>
                <li><a href="product1.php"><i class="fa fa-edit"></i> Add a product</a></li>
              </ul>
            </li>
            <li><a href="messages1.php"><i class="fa fa-envelope"></i> All messages</a></li>
            <li><a href="saytoadmin.php"><i class="fa fa-comment"></i> Chat with Mr. Admin</a></li>
            <li><a href="edit1.php"><i class="fa fa-book"></i> Profile</a></li>
            <li><a href="orders1.php"><i class="fa fa-bomb"></i> Deals made</a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
