<html>
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/modern-business.css" rel="stylesheet">
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<link rel="shortcut icon" href="logos/favicon.ico" type="image/x-icon"/>-->
    <link rel="apple-touch-icon" sizes="57x57" href="/logos/favicon.ico">
    <title>My Store</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <link href="css/small-business.css" rel="stylesheet">
    <style>
        .center {
            margin: auto;
            width: 60%;
            text-align: center;
            padding: 10px;
        }
    </style>
    <?php
    include_once ("nav2.php");
    ?>
</head>
<body style="background-color: #1b1e21">
<!-- Page Content -->
<div class="container" style="background-color: #1b1e21">

    <!-- Heading Row -->
    <div class="row my-4">
        <div class="center" >
            <img src="logos/Aqua%20Logo%20Long.png" class="img-fluid" style= "display: inline-block; padding-right:10px"width="300" height="80">
            <p>Glacier Ice clothing, only ice cold quality</p>
            <form class="example" action="#" style="text-align: center">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="rounded d-block w-100" src="images/adidasad1.jpeg" alt="First slide">
                    <div class="carousel-caption">
                        <h3>Adidas</h3>
                        <p>Nothing is Impossible</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class=" rounded d-block w-100" src="images/nikead1.jpg" alt="Second slide">
                    <div class="carousel-caption">
                        <h3>Nike</h3>
                        <p>Just Do It.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="rounded d-block w-100" src="images/pumaad1.jpg" alt="Third slide">
                    <div class="carousel-caption">
                        <h3>Puma</h3>
                        <p>Forever Faster</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- /.col-lg-8 -->
        <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->

    <!-- Call to Action Well -->
    <!-- http://www.jquery2dotnet.com -->
    <div class="container">
        <div class="row">
            <div class="alert alert-info">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    ×</button>
                <span class="glyphicon glyphicon-info-sign"></span> <strong>Info!</strong>
                <hr class="message-inner-separator">
                <p>Limited time only! Students get an extra 10% off all products! See below for more info!</p>
            </div>
        </div>
    </div>
    <div class="card text-center bg-dark"style="color: white;">
        <div class="card-header">
            Featured
        </div>
        <div class="card-body">
            <h5 class="card-title">Special Adidas Sale</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-info">Shop Adidas</a>
        </div>
        <div class="card-footer text-muted">
            2 days ago
        </div>
    </div>

    <!-- Content Row -->
    <div class="card-group">
        <div class="card bg-dark" style="color: white;">
            <div class="card-body">
                <h5 class="card-title">Students</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <a href="#" class="btn btn-info btn-md">More Info</a>
        </div>
        <div class="card bg-dark" style="color: white;">
            <div class="card-body">
                <h5 class="card-title">Newest Products</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <a href="#" class="btn btn-info btn-md">Discover</a>
        </div>
        <div class="card bg-dark" style="color: white;">
            <div class="card-body">
                <h5 class="card-title">Clearance</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <a href="#" class="btn btn-info btn-md">Go to sale</a>
        </div>
    </div>
    <!-- /.row -->

</div>
</body>
<!-- Footer -->
<?php
include_once ("footer.php");
?>
</html>
<!-- /.container -->