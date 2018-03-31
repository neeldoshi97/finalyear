<head>
    <?php
    include_once ("global_header.php");
    ?>
    <script src="https://use.fontawesome.com/c560c025cf.js"></script>
    <style>
        .quantity {
            float: left;
            margin-right: 15px;
            background-color: #eee;
            position: relative;
            width: 80px;
            overflow: hidden
        }

        .quantity input {
            margin: 0;
            text-align: center;
            width: 15px;
            height: 15px;
            padding: 0;
            float: right;
            color: #000;
            font-size: 20px;
            border: 0;
            outline: 0;
            background-color: #F6F6F6
        }

        .quantity input.qty {
            position: relative;
            border: 0;
            width: 100%;
            height: 40px;
            padding: 10px 25px 10px 10px;
            text-align: center;
            font-weight: 400;
            font-size: 15px;
            border-radius: 0;
            background-clip: padding-box
        }

        .quantity .minus, .quantity .plus {
            line-height: 0;
            background-clip: padding-box;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
            -webkit-background-size: 6px 30px;
            -moz-background-size: 6px 30px;
            color: #bbb;
            font-size: 20px;
            position: absolute;
            height: 50%;
            border: 0;
            right: 0;
            padding: 0;
            width: 25px;
            z-index: 3
        }

        .quantity .minus:hover, .quantity .plus:hover {
            background-color: #dad8da
        }

        .quantity .minus {
            bottom: 0
        }
        .shopping-cart {
            margin-top: 20px;
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

    </style>
</head>
<!------ Include the above in your HEAD tag ---------->
<!--<body class="bgimg-3">
<div class="container">
    <div class="card shopping-cart bg-dark" style="color: white">
        <div class="card-header bg-dark text-light">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            Shopping cart
            <a href="" class="btn btn-outline-info btn-sm pull-right">Continue shopping</a>
            <div class="clearfix"></div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-2 text-center">
                    <img class="img-responsive" src="http://placehold.it/120x80" alt="prewiew" width="120" height="80">
                </div>
                <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                    <h4 class="product-name"><strong>Product Name</strong></h4>
                    <h4>
                        <small>Product description</small>
                    </h4>
                </div>
                <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                    <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                        <h6><strong>25.00 <span class="text-muted">x</span></strong></h6>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4">
                        <div class="quantity">
                            <input type="button" value="+" class="plus">
                            <input type="number" step="1" max="99" min="1" value="1" title="Qty" class="qty"
                                   size="4">
                            <input type="button" value="-" class="minus">
                        </div>
                    </div>
                    <div class="col-2 col-sm-2 col-md-2 text-right">
                        <button type="button" class="btn btn-outline-danger btn-xs">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-2 text-center">
                    <img class="img-responsive" src="http://placehold.it/120x80" alt="prewiew" width="120" height="80">
                </div>
                <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                    <h4 class="product-name"><strong>Product Name</strong></h4>
                    <h4>
                        <small>Product description</small>
                    </h4>
                </div>
                <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                    <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                        <h6><strong>25.00 <span class="text-muted">x</span></strong></h6>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4">
                        <div class="quantity">
                            <input type="button" value="+" class="plus">
                            <input type="number" step="1" max="99" min="1" value="1" title="Qty" class="qty"
                                   size="4">
                            <input type="button" value="-" class="minus">
                        </div>
                    </div>
                    <div class="col-2 col-sm-2 col-md-2 text-right">
                        <button type="button" class="btn btn-outline-danger btn-xs">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>
            <hr>
            <div class="pull-right">
                <a href="" class="btn btn-outline-secondary pull-right">
                    Update shopping cart
                </a>
            </div>
        </div>
        <div class="card-footer">
            <div class="coupon col-md-5 col-sm-5 no-padding-left pull-left">
                <div class="row">
                    <div class="col-6">
                        <input type="text" class="form-control" placeholder="coupon code">
                    </div>
                    <div class="col-6">
                        <input type="submit" class="btn btn-default" value="Use coupon">
                    </div>
                </div>
            </div>
            <div class="pull-right" style="margin: 10px">
                <a href="" class="btn btn-success pull-right">Checkout</a>
                <div class="pull-right" style="margin: 5px">
                    Total price: <b>£50.00</b>
                </div>
            </div>
        </div>
    </div>
</div>
</body>-->
<body>
<div id="content_area">

    <?php cart(); ?>

    <div id="shopping_cart">

					<span style="float:right; font-size:17px; padding:5px; line-height:40px;">

					<?php
                    if(isset($_SESSION['customer_email'])){
                        echo "<b>Welcome:</b>" . $_SESSION['customer_email'] . "<b style='color:yellow;'>Your</b>" ;
                    }
                    else {
                        echo "<b>Welcome Guest:</b>";
                    }
                    ?>

                        <b style="color:yellow">Shopping Cart -</b> Total Items: <?php total_items();?> Total Price: <?php total_price(); ?> <a href="index.php" style="color:yellow">Back to Shop</a>

                        <?php
                        if(!isset($_SESSION['customer_email'])){

                            echo "<a href='checkout.php' style='color:orange;'>Login</a>";

                        }
                        else {
                            echo "<a href='logout.php' style='color:orange;'>Logout</a>";
                        }



                        ?>

					</span>
    </div>

    <div id="products_box">

        <form action="" method="post" enctype="multipart/form-data">

            <table align="center" width="700" bgcolor="skyblue">

                <tr align="center">
                    <th>Remove</th>
                    <th>Product(S)</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                </tr>

                <?php
                $total = 0;

                global $con;

                $ip = getIp();

                $sel_price = "select * from cart where ip_add='$ip'";

                $run_price = mysqli_query($con, $sel_price);

                while($p_price=mysqli_fetch_array($run_price)){

                    $pro_id = $p_price['p_id'];

                    $pro_price = "select * from products where product_id='$pro_id'";

                    $run_pro_price = mysqli_query($con,$pro_price);

                    while ($pp_price = mysqli_fetch_array($run_pro_price)){

                        $product_price = array($pp_price['product_price']);

                        $product_title = $pp_price['product_title'];

                        $product_image = $pp_price['product_image'];

                        $single_price = $pp_price['product_price'];

                        $values = array_sum($product_price);

                        $total += $values;

                        ?>

                        <tr align="center">
                            <td><input type="checkbox" name="remove[]" value="<?php echo $pro_id;?>"/></td>
                            <td><?php echo $product_title; ?><br>
                                <img src="admin_area/product_images/<?php echo $product_image;?>" width="60" height="60"/>
                            </td>
                            <td><input type="text" size="4" name="qty" value="<?php echo $_SESSION['qty'];?>"/></td>
                            <?php
                            if(isset($_POST['update_cart'])){

                                $qty = $_POST['qty'];

                                $update_qty = "update cart set qty='$qty'";

                                $run_qty = mysqli_query($con, $update_qty);

                                $_SESSION['qty']=$qty;

                                $total = $total*$qty;
                            }


                            ?>


                            <td><?php echo "$" . $single_price; ?></td>
                        </tr>


                    <?php } } ?>

                <tr>
                    <td colspan="4" align="right"><b>Sub Total:</b></td>
                    <td><?php echo "$" . $total;?></td>
                </tr>

                <tr align="center">
                    <td colspan="2"><input type="submit" name="update_cart" value="Update Cart"/></td>
                    <td><input type="submit" name="continue" value="Continue Shopping" /></td>
                    <td><button><a href="checkout.php" style="text-decoration:none; color:black;">Checkout</a></button></td>
                </tr>

            </table>

        </form>

        <?php

        function updatecart(){

            global $con;

            $ip = getIp();

            if(isset($_POST['update_cart'])){

                foreach($_POST['remove'] as $remove_id){

                    $delete_product = "delete from cart where p_id='$remove_id' AND ip_add='$ip'";

                    $run_delete = mysqli_query($con, $delete_product);

                    if($run_delete){

                        echo "<script>window.open('cart.php','_self')</script>";

                    }

                }

            }
            if(isset($_POST['continue'])){

                echo "<script>window.open('index.php','_self')</script>";

            }

        }
        echo @$up_cart = updatecart();

        ?>


    </div>

</div>
</body>