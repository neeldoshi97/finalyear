<html>
<?php
include ("global_header.php");
?>
<!--<style>
    .parallax {
        /* The image used */
        background-image: url("images/bg3.jpg");

        /* Set a specific height */
        min-height: 500px;

        /* Create the parallax scrolling effect */
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>-->
</head>
<body style="background-color: #1b1e21">
<!-- Page Content -->
<div class="container">

    <!-- Heading Row -->
    <div class="row my-4">
        <div class="center" >
            <img src="logos/Aqua%20Logo%20Long.png" class="img-fluid" style= "display: inline-block; padding-right:10px"width="300" height="80">
            <p style="color: white">Glacier Ice clothing, only ice cold quality</p>
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
    <!-- Call to Action Well -->
    <!-- http://www.jquery2dotnet.com -->
    <div class="card text-center bg-dark"style="color: gray;">
        <div class="card-header">
            Featured
        </div>
        <div class="card-body" style="background: ">
            <h5 class="card-title" style="color: white">Special Adidas Sale</h5>
            <img class="card-img-top img-fluid" <img src='admin_area/product_images/adidasshoesoutlet.co.uk.jpg' width="1000" height="340"/>
            <div class="col-xs-12" style="height:30px;"></div>
            <a href="#" class="btn btn-info">Shop Adidas</a>
        </div>
    </div>
    <div class="col-xs-12" style="height:50px;"></div>
    <!-- Content Row -->
    <div class="card-group">
        <div class="card bg-dark" style="color: white;">
            <div class="card-body">
                <h5 class="card-title">Students</h5>
                <img class=\"card-img-top\" <img src='admin_area/product_images/image-placeholder-500x500.jpg' width="300" height="200"/>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <a href="#" class="btn btn-info btn-md">More Info</a>
        </div>
        <div class="card bg-dark" style="color: white;">
            <div class="card-body">
                <h5 class="card-title">Newest Products</h5>
                <img class=\"card-img-top\" <img src='admin_area/product_images/image-placeholder-500x500.jpg' width="300" height="200"/>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <a href="#" class="btn btn-info btn-md">Discover</a>
        </div>
        <div class="card bg-dark" style="color: white;">
            <div class="card-body">
                <h5 class="card-title">Clearance</h5>
                <img class=\"card-img-top\" <img src='admin_area/product_images/image-placeholder-500x500.jpg' width="300" height="200"/>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <a href="#" class="btn btn-info btn-md">Go to sale</a>
        </div>
    </div>
    <div class="card bg-dark text-white">
        <img class="card-img" src="images/adidasad2.jpg" alt="Card image">
        <div class="card-img-overlay" style="color: #16181b">
            <h5 class="card-title">ADIDAS</h5>
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