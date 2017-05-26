<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Seller--Hahiraha.com</title>

    <!-- Bootstrap Core CSS -->
    <link href="../dashboard/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../dashboard/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dashboard/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../dashboard/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Hahiraha Sign In as a Seller</h3>
                    </div>
                    <div class="panel-body">
                        <?php
                        $yes=isset($_REQUEST['yes']);
                        if($yes){
                        echo'
                                        <div class="alert alert-warning alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            Wrong Username or Password please try again or <a href="../index.php" class="alert-link">Return Home</a>.
                                        </div>
                                        ';
                        }
                        $no=isset($_REQUEST['no']);
                        if($no){
                            unset($_SESSION['seller']);
                            unset($_SESSION['id']);
                            unset($_SESSION['Province']);
                            unset($_SESSION['District']);
                            unset($_SESSION['Sector']);
                            unset($_SESSION['Phone']);
                        echo'
                                        <div class="alert alert-danger alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            Login first please or <a href="../index.php" class="alert-link">Return Home</a>.
                                        </div>
                                        ';
                            $session=isset($_SESSION['admin']);
                            if($session){
                                echo "<meta http-equiv='refresh' content='0;url=../dash/index.php'>";
                            }
                            $session=isset($_SESSION['seller']);
                            if($session){
                                echo "<meta http-equiv='refresh' content='0;url=../dash/index1.php'>";
                            }
                        }
                        ?>
                        <form role="form" method="post" action="loginseller.php">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="email" type="text" autofocus required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" required>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" name="seller" class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../dashboard/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../dashboard/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../dashboard/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dashboard/dist/js/sb-admin-2.js"></script>

</body>

</html>
