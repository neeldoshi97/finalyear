<?php
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
    <link rel="apple-touch-icon" sizes="57x57" href="/favicon.ico">
    <link href="http://cdn.phpoll.com/css/animate.css" rel="stylesheet">
    <style>
        /* Fixed navbar */
        /* General sizing */
        ul.dropdown-lr {
            width: 300px;
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
       <!-- <a class="navbar-brand" </a>-->
        <a href="index.php"><img src="logos/Aqua%20Logo%20Icon.png" style= "display: inline-block;float: right "width="50" height="50"></a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li><a class="nav-link" style="float: left;"><?php
                        if (isset($_SESSION['u_id'])){
                            echo "<a class='nav-link' style='color: aqua; float: left; padding-top: 5px; font-size: larger'>", $_SESSION['u_firstname'];
                        }
                        ?>
                    </a></li>
                <li class="nav-item active">
                    <a class="nav-link" href="product-page.php">All Products</a>
                </li>
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
                    <ul class="dropdown-menu" style="color: white">
                        <?php getCats(); ?>
                    </ul>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownCat">
                        <!--?php getCats(); ?>-->
                </li>
                <!--<li class="nav-item">
                    <a class="nav-link" href="#">Shopping Cart</a>
                </li>-->
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li style="padding-top: 6px;">
                    <a class="btn btn-info btn-sm ml-3" href="shopping_cart.php">
                        <i class="fa fa-shopping-cart"></i> Cart
                        <span class="badge badge-light"><?php total_items()?></span>
                    </a>
                </li>

                <?php
                if (isset($_SESSION['u_id'])){
                    echo '
                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownBrands" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       My Account
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="my_account.php?my_orders">My Orders</a></li>
                        <li><a class="dropdown-item" href="my_account.php?edit_account">Manage Account</a></li>
                        
            <li class=\"divider\"></li>
                    </ul>
                    
                </li>
                ';
                  //echo "<h6 style='color: white; float: left'> Welcome ", $_SESSION['u_firstname'];
                }
                ?>
                <?php
                if (isset($_SESSION['u_id'])){
                    echo '
                        <form class="form-inline" style="margin: auto" action="includes/logout.inc.php" method="POST">
                        <button type="submit" style="color: white; font-size: large; text-decoration: none" class="btn btn-link btn-md" name="submit"><b>Logout</b></button>
                        </form>
                        ';
                }else{
                    echo '
                     <a class="nav-link active" href="signup.php">Sign Up</a>
                       <li class="nav-item dropdown bg-dark">
                    <a href="#" class="nav-link dropdown-toggle active bg-dark" style="font-family: inherit" data-toggle="dropdown">Log In <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-lr animated slideInRight bg-dark" role="menu" style="opacity: 0.8">
                        <div class="col-lg-12 bg-dark">
                            <form style="padding-top: 10px;margin: auto" action="includes/login.inc.php" class="form-inline bg-dark" method="POST">
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

    </div>
</nav>
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>