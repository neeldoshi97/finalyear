<?php
include_once ("global_header.php");
?>
<html>
<head>
    <style>
        /*
** Style Simple Ecommerce Theme for Bootstrap 4
** Created by T-PHP https://t-php.fr/43-theme-ecommerce-bootstrap-4.html
*/
        .category_block li:hover {
            background-color: #007bff;
        }
        .category_block li:hover a {
            color: #ffffff;
        }
        .category_block li a {
            color: #343a40;
        }
        .add_to_cart_block .price {
            color: #c01508;
            text-align: center;
            font-weight: bold;
            font-size: 200%;
            margin-bottom: 0;
        }
        .add_to_cart_block .price_discounted {
            color: #343a40;
            text-align: center;
            text-decoration: line-through;
            font-size: 140%;
        }
        .product_rassurance .list-inline {
            margin-bottom: 0;
            text-transform: uppercase;
            text-align: center;
        }
        .product_rassurance .list-inline li:hover {
            color: #343a40;
        }
        .reviews_product .fa-star {
            color: gold;
        }
        .pagination {
            margin-top: 20px;
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
            background-image: url("images/hoodie3.jpg");
            min-height: 400px;
        }

        /* Turn off parallax scrolling for tablets and phones
        @media only screen and (max-device-width: 1024px) {
            .bgimg-1, .bgimg-2, .bgimg-3 {
                background-attachment: scroll;
            }*/

    </style>
    <div class="row my-4">
        <div class="center" >
            <img src="logos/Aqua%20Logo%20Long.png" class="img-fluid" style= "display: inline-block; padding-right:10px"width="300" height="80">
            <p style="color: white">Glacier Ice clothing, only ice cold quality</p>
            <form class="example" action="results.php" style="text-align: center">
                <input type="text" placeholder="Search.." name="user_query">
                <button type="submit" style="opacity: 0.8"  name="search" value="Search"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
</head>
<body class="bgimg-3">
<div class="col-xs-12" style="height:30px;"></div>
<div class="container" style="opacity: 0.6">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="background-color: #343a40">
                    <li class="breadcrumb-item"><a href=index.php style="font-size: 20px; color: white; text-decoration: none">Home</a></li>
                    <li class="breadcrumb-item active" style="font-size:20px">All Products</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-3">
            <div class="card bg-light mb-3 bg-dark" style="opacity: 0.6">
                <div class="card-header bg-primary text-white text-uppercase bg-dark"><i class="fa fa-list bg-dark"></i> Categories</div>
                <?php
                getCats2();
                ?>
            </div>
        </div>
        <div class="col">
            <div class="row">

                <?php getSearchPro()?>
            </div>
        </div>
        <div class="col-12">
            <nav aria-label="...">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active">
                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>
</div>
</body>
<!-- Footer -->
<?php
include_once ("footer.php");
?>
</html>