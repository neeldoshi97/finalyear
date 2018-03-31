<html>
<?php
include ("global_header.php");
?>
<style>
    .cardopacity{
    opacity: 0.8;
    }
    }
    body, html {
        height: 100%;
        margin: 0;
        font: 400 15px/1.8 "Lato", sans-serif;
        color: #777;
    }

    .bgimg-3 {
        position: relative;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;

    }
    .bgimg-3 {
        background-image: url("images/hoodie.jpg");
        min-height: 400px;
    }

    /* Turn off parallax scrolling for tablets and phones */
    @media only screen and (max-device-width: 1024px) {
        .bgimg-1, .bgimg-2, .bgimg-3 {
            background-attachment: scroll;
        }



</style>
<body class="bgimg-3">
<!-- Page Content -->
<div class="container">

    <!-- Heading Row -->
    <div class="row my-4">
        <div class="center" >
            <img src="logos/Aqua%20Logo%20Long.png" class="img-fluid" style= "display: inline-block; padding-right:10px"width="300" height="80">
            <p style="color: white">Glacier Ice clothing, only ice cold quality</p>
            <form class="example" action="results.php" style="text-align: center">
                <input type="text" placeholder="Search.." name="user_query">
                <button type="submit" style="opacity: 0.8"  name="search" value="Search"><i class="fa fa-search"></i></button>
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
    <!-- Call to Action Well -->
    <!-- http://www.jquery2dotnet.com -->
    <div class="col-xs-12 parallax" style="height:50px;"></div>
    <!-- Content Row -->
    <div class="card-group cardopacity">
        <div class="card bg-dark" style="color: white;">
            <div class="card-body">
                <h5 class="card-title">Students</h5>
                <img class=\"card-img-top\" <img src='admin_area/product_images/image-placeholder-500x500.jpg' width="300" height="200"/>
                <p class="card-text">Are you a student? You are entitled to a 10% discount as well as free delivery with orders over £30! Enter the code below at checkout and connect using UniDays and enjoy!</p>
            </div>
            <a class="card-footer" style="color: gray">Use code at checkout: STUDENT10</a>
        </div>
        <div class="card bg-dark" style="color: white;">
            <div class="card-body">
                <h5 class="card-title">Newest Products</h5>
                <img class=\"card-img-top\" <img src='admin_area/product_images/image-placeholder-500x500.jpg' width="300" height="200"/>
                <p class="card-text">New products by your favourite brands!</p>
            </div>
            <a href="product-page.php" class="btn btn-info btn-md">Discover</a>
        </div>
        <div class="card bg-dark" style="color: white;">
            <div class="card-body">
                <h5 class="card-title">Summer Season</h5>
                <img class=\"card-img-top\" <img src='admin_area/product_images/image-placeholder-500x500.jpg' width="300" height="200"/>
                <p class="card-text">Check out the latest summer selection using the link below</p>
            </div>
            <a href="#" class="btn btn-info btn-md">Go to summer clothing</a>
        </div>
    </div>
    <!-- /.row -->
    <div class="col-xs-12" style="height:50px;"></div>
</div>
</body>
<!-- Footer -->
<?php
include_once ("footer.php");
?>
</html>
<!-- /.container -->