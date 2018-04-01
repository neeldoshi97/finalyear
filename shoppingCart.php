<head>
    <?php
    include_once ("global_header.php");
    ?>
    <style>
        .table>tbody>tr>td, .table>tfoot>tr>td{
            vertical-align: middle;
        }
        @media screen and (max-width: 600px) {
            table#cart tbody td .form-control{
                width:20%;
                display: inline !important;
            }
            .actions .btn{
                width:36%;
                margin:1.5em 0;
            }

            .actions .btn-info{
                float:left;
            }
            .actions .btn-danger{
                float:right;
            }

            table#cart thead { display: none; }
            table#cart tbody td { display: block; padding: .6rem; min-width:320px;}
            table#cart tbody tr td:first-child { background: #333; color: #fff; }
            table#cart tbody td:before {
                content: attr(data-th); font-weight: bold;
                display: inline-block; width: 8rem;
            }



            table#cart tfoot td{display:block; }
            table#cart tfoot td .btn{display:block;}

        }
    </style>

</head>
<body>
<div class="container" style="padding-top: 100px">
    <table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th style="width:50%">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
        </thead>
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
        <tbody>
        <tr>
            <td data-th="Product">
                <div class="row">
                    <div class="col-sm-2 hidden-xs"><img src="admin_area/product_images/<?php echo $product_image;?>" alt="..." class="img-responsive"/></div>
                    <div class="col-sm-10">
                        <h4 class="nomargin"><?php echo $product_title; ?></h4>
                        <!--<p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>-->
                    </div>
                </div>
            </td>
            <td data-th="Price"><?php echo "£" . $single_price; ?></td>

            <td data-th="Quantity">
                <input type="number" class="form-control text-center" value="<?php echo $_SESSION['qty'];?>">
                <?php
                if(isset($_POST['update_cart'])){

                    $qty = $_POST['qty'];

                    $update_qty = "update cart set qty='$qty'";

                    $run_qty = mysqli_query($con, $update_qty);

                    $_SESSION['qty']=$qty;

                    $total = $total*$qty;
                }


                ?>
            </td>
            <td data-th="Subtotal" class="text-center"><?php echo "£" . $single_price; ?></td>
            <td class="actions" data-th="">

                <button class="btn btn-info btn-sm" name="update_cart" value="Update Cart"><i class="fa fa-refresh"></i></button>
                <?php


                echo @$up_cart = updateCart();

                ?>
                <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
            </td>
        </tr>
        <?php } } ?>
        </tbody>
        <tfoot>
        <tr class="visible-xs">
            <td class="text-center"><strong><?php echo "£" . $total;?></strong></td>
        </tr>
        <tr>
            <td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
            <td colspan="2" class="hidden-xs"></td>
            <td class="hidden-xs text-center"><strong><?php echo "£" . $total;?></strong></td>
            <td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
        </tr>
        </tfoot>
    </table>
</body>