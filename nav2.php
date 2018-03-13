<?php
session_start();
include ("functions/functions.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<link rel="shortcut icon" href="logos/favicon.ico" type="image/x-icon"/>-->
    <link rel="apple-touch-icon" sizes="57x57" href="/logos/favicon.ico">
    <link href="http://cdn.phpoll.com/css/animate.css" rel="stylesheet">
    <style>
        /* Fixed navbar */
        /* General sizing */
        ul.dropdown-lr {
            width: 300px;
            background-color: #1b1e21;
        }

    </style>
    <title>My Store</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <link href="css/small-business.css" rel="stylesheet">

</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" </a>
        <a href="index.php"><img src="logos/Aqua%20Logo%20Icon.png" style= "display: inline-block;float: right "width="50" height="50"></a>
        </a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBrands" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Brands
                    </a>
                    <ul class="dropdown-menu">
                        <?php getBrands(); ?>
                    </ul>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownCat">
                        <!--?php getCats(); ?>-->
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCat" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categories
                    </a>
                    <ul class="dropdown-menu">
                        <?php getCats(); ?>
                    </ul>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownCat">
                        <!--?php getCats(); ?>-->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Shopping Cart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>

                <?php
                if (isset($_SESSION['u_id'])){
                    echo '<li class="nav-item active">
                    <a class="nav-link" href="#">My Account
                        <span class="sr-only">(current)</span>
                    </a>
                </li>';
                }
                ?>
                <?php
                if (isset($_SESSION['u_id'])){
                    echo '
                        <form class="form-inline" style="margin: auto" action="includes/logout.inc.php" method="POST">
                        <button type="submit" style="color: aqua; font-size: large; text-decoration: none" class="btn btn-link btn-md" name="submit"><b>Logout</b></button>
                        </form>
                        ';
                }else{
                    echo '
                     <a class="nav-link active" href="signup.php">Sign Up</a>
                       <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" style="font-family: inherit" data-toggle="dropdown">Log In <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-lr animated slideInRight" role="menu">
                        <div class="col-lg-12">
                            <form style="padding-top: 10px;margin: auto" action="includes/login.inc.php" class="form-inline" method="POST">
                                <div class="form-group">
                                    <input type="text" name="uid"  class="form-control mb-2 mr-sm-2"  placeholder="Username/e-mail">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="pwd"  class="form-control mb-2 mr-sm-2" placeholder="Password">
                                </div>
                               <ul style="margin-left: 0%"><button type ="submit" class="btn btn-info btn-md" name="submit">Login</button></ul>


                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="text-center">
                                                <a style="margin-left: 10px" href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" class="hide" name="token" id="token" value="a465a2791ae0bae853cf4bf485dbe1b6">
                            </form>
                        </div>
                    </ul>
                </li>
            </ul>
                     ';

                }
                ?>
            <?php
            /*if (isset($_SESSION['u_id'])){
                echo '
                        <form action="includes/logout.inc.php" method="POST">
                        <button type="submit" class="btn btn-info btn-md" name="submit">Logout</button>
                        </form>
                        ';
            }else{
                echo '
                    
                        <form style="padding-top: 10px;margin: auto" action="includes/login.inc.php" class="form-inline" method="POST">
                        <div class="form-group">
                        <input type="text" name="uid"  class="form-control mb-2 mr-sm-2"  placeholder="Username/e-mail">
                        </div>
                        <div class="form-group">
                        <input type="password" name="pwd"  class="form-control mb-2 mr-sm-2" placeholder="Password">
                        </div>
                        <button style="margin-left: 10px" type ="submit" class="btn btn-info btn-md" name="submit">Login</button>
                        <a style="margin-left: 10px" class="btn btn-info btn-md" href="signup.php">Sign Up</a>
                        </form>
                     ';

            }
            */?>
        </div>




        <!--<form class="navbar-form navbar-left" role="search">
            <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-default">Sign In</button>
        </form>-->
    </div>
</nav>
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>

