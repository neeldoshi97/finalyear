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
        .bloc_left_price {
            color: #c01508;
            text-align: center;
            font-weight: bold;
            font-size: 150%;
        }
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
        .product_rassurance {
            padding: 10px;
            margin-top: 15px;
            background: #ffffff;
            border: 1px solid #6c757d;
            color: #6c757d;
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
    </style>
</head>
<!--<body style="background-color: #16181b">
<div class="row">
    <div class="row card-group" style="padding-top: 30px;margin-left: 20px"><?php //getpro();?> </div>
</div>

</body>-->
<body style="background-color: #1b1e21">
<div class="col-xs-12" style="height:30px;"></div>
<div class="container">
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
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">All Products</h1>
        <p class="lead text-muted mb-0">Look stylish this summer and stay cool with our ice cold clothing brands keeping you 100% glacier!</p>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-3">
            <div class="card bg-light mb-3 bg-dark">
                <div class="card-header bg-primary text-white text-uppercase bg-dark"><i class="fa fa-list bg-dark"></i> Categories</div>
                <ul class="list-group category_block bg-dark">
                    <li class="list-group-item" style="background-color: #1b1e21;" ><a href="category.html" style="color: white">Cras justo odio</a></li>
                    <li class="list-group-item" style="background-color: #1b1e21;"><a style="color: white" href="category.html">Dapibus ac facilisis in</a></li>
                    <li class="list-group-item" style="background-color: #1b1e21;"><a style="color: white" href="category.html">Morbi leo risus</a></li>
                    <li class="list-group-item" style="background-color: #1b1e21;"><a style="color: white" href="category.html">Porta ac consectetur ac</a></li>
                    <li class="list-group-item" style="background-color: #1b1e21;"><a style="color: white" href="category.html">Vestibulum at eros</a></li>
                </ul>
            </div>
        </div>
        <div class="col">
            <div class="row">

                <?php getpro();?>

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