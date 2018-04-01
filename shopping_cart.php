<head>
    <?php
    include_once ("global_header.php");
    ?>
    <script src="https://use.fontawesome.com/c560c025cf.js"></script>
<!--<style>
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

    </style>-->
</head>
<body class="bgimg-3">
<div class="container" style="padding-top: 100px">

    <div class="container-fluid">

        <form action="" method="post" enctype="multipart/form-data" class="form-group">

            <table align="center" width="700" style="background-color: #1b1e21; opacity: 0.8; color: white">

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


                            <td><?php echo "£" . $single_price; ?></td>
                        </tr>


                    <?php } } ?>

                <tr>
                    <td colspan="4" align="right"><b>Sub Total:</b></td>
                    <td><?php echo "£" . $total;?></td>
                </tr>

                <tr align="center">
                    <td colspan="2"><input type="submit" name="update_cart" value="Update Cart"/></td>
                    <td><input type="submit" name="continue" value="Continue Shopping" /></td>
                    <td><button><a href="checkout.php" style="text-decoration:none; color:black;">Checkout</a></button></td>
                </tr>

            </table>

        </form>

        <?php


        echo @$up_cart = updateCart();

        ?>


    </div>

</div>
</body>