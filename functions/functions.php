<html>
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/modern-business.css" rel="stylesheet">
</html>
<?php

//$con = mysqli_connect("localhost","21529820", "mysqluser", "db1_21529820");
$con = mysqli_connect("localhost","root", "", "ecommerce");

//getting the catagories
function getCats2(){

    global $con;

    $get_cats = "select * from catagories";
    $run_cats = mysqli_query($con, $get_cats);

    while ($row_cats = mysqli_fetch_array($run_cats)){

        $cat_id = $row_cats['cat_id'];
        $cat_title = $row_cats['cat_title'];

//echo "<li><a href = '#'>$cat_title</a></li>";
        echo "<li class=\"list-group-item\" style=\"background-color: #1b1e21;\"><a href='product-page.php?cat=$cat_id' style='color: white'>$cat_title</a></li>";
    }

}

function getCats(){

    global $con;

    $get_cats = "select * from catagories";
    $run_cats = mysqli_query($con, $get_cats);

    while ($row_cats = mysqli_fetch_array($run_cats)){

        $cat_id = $row_cats['cat_id'];
        $cat_title = $row_cats['cat_title'];

//echo "<li><a href = '#'>$cat_title</a></li>";
        echo "<li><a class=\"dropdown-item\" href='product-page.php?cat=$cat_id'>$cat_title</a></li>
            <li class=\"divider\"></li>
            ";
    }



}
//getting the brands
function getBrands(){

    global $con;

    $get_brands = "select * from brands";
    $run_brands = mysqli_query($con, $get_brands);

    while ($row_brands = mysqli_fetch_array($run_brands)){

        $brand_id = $row_brands['brand_id'];
        $brand_title = $row_brands['brand_title'];

        /*echo "<li><a href = '#'>$brand_title</a></li>";*/
        echo "
        <li><a class=\"dropdown-item\" href='product-page.php?brand=$brand_id'>$brand_title</a></li>
    <li class=\"divider\"></li>   
        ";


    }


}

function getSearchPro()
{

    if(isset($_GET['search'])){

        global $con;

        $search_query = $_GET['user_query'];

        $get_pro = "select * from products where product_keywords like '%$search_query%'";

        $run_pro = mysqli_query($con, $get_pro);

        while ($row_pro = mysqli_fetch_array($run_pro)) {
            $pro_id = $row_pro['product_id'];
            $pro_cat = $row_pro['product_cat'];
            $pro_brand = $row_pro['product_brand'];
            $pro_title = $row_pro['product_title'];
            $pro_price = $row_pro['product_price'];
            $pro_image = $row_pro['product_image'];

            echo "
 <!-- <div class='col container-fluid'>
        <div class=\"card w-75\" style=\"width: 18rem; float: left\">
  <img class=\"card-img-top\" <img src='admin_area/product_images/$pro_image'/>
  <div class=\"card-body\">
    <h7 class=\"card-title\">$pro_title</h7>
    <p class=\"card-text\">£ $pro_price</p>
    <a href=\"#\" class=\"btn btn-primary\">Details</a>
        <a href='index.php?pro_id=$pro_id' class=\"btn btn-primary\">Add to Cart</a>
   
  </div>
</div>
</div>-->
<div class=\"col-12 col-md-6 col-lg-4\"  style='opacity: 0.9'>
                    <div class=\"card\ bg-dark\">
                        <img class=\"card-img-top\" <img src='admin_area/product_images/$pro_image' href='test.php?pro_id=$pro_id' alt=\"Card image cap\"/>
                        <div class=\"card-body\">
                            <h4 class=\"card-title\"><a href='test.php?pro_id=$pro_id' title=\"View Product\" style='color: white'>$pro_title</a></h4>
                            <div class=\"row\">
                                <div class=\"col\">
                                    <p style='color: white'>£ $pro_price</p>
                                </div>
                                <div class=\"col\">
                                    <a class=\"btn btn-info btn-md ml-3\" href=\"/product-page.php?add_cart=$pro_id\">
                        <i class=\"fa fa-shopping-cart\"></i>
                        <span class=\"badge badge-light\">+</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
       
        ";

        }


    }

}

function getPro()
{

    if (!isset($_GET['cat'])) {
        if (!isset($_GET['brand'])) {
            global $con;

            $get_pro = "select * from products LIMIT 0,6";

            $run_pro = mysqli_query($con, $get_pro);

            while ($row_pro = mysqli_fetch_array($run_pro)) {
                $pro_id = $row_pro['product_id'];
                $pro_cat = $row_pro['product_cat'];
                $pro_brand = $row_pro['product_brand'];
                $pro_title = $row_pro['product_title'];
                $pro_price = $row_pro['product_price'];
                $pro_image = $row_pro['product_image'];

                echo "
 <!-- <div class='col container-fluid'>
        <div class=\"card w-75\" style=\"width: 18rem; float: left\">
  <img class=\"card-img-top\" <img src='admin_area/product_images/$pro_image'/>
  <div class=\"card-body\">
    <h7 class=\"card-title\">$pro_title</h7>
    <p class=\"card-text\">£ $pro_price</p>
    <a href=\"#\" class=\"btn btn-primary\">Details</a>
        <a href='index.php?pro_id=$pro_id' class=\"btn btn-primary\">Add to Cart</a>
   
  </div>
</div>
</div>-->
<div class=\"col-12 col-md-6 col-lg-4\"  style='opacity: 0.9'>
                    <div class=\"card\ bg-dark\">
                        <img class=\"card-img-top\" <img src='admin_area/product_images/$pro_image' href='test.php?pro_id=$pro_id' alt=\"Card image cap\"/>
                        <div class=\"card-body\">
                            <h4 class=\"card-title\"><a href='test.php?pro_id=$pro_id' title=\"View Product\" style='color: white'>$pro_title</a></h4>
                            <div class=\"row\">
                                <div class=\"col\">
                                    <p style='color: white'>£ $pro_price</p>
                                </div>
                                <div class=\"col\">
                                    <a class=\"btn btn-info btn-md ml-3\" href=\"product-page.php?add_cart=$pro_id\">
                        <i class=\"fa fa-shopping-cart\"></i>
                        <span class=\"badge badge-light\">+</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
       
        ";

            }
        }
    }

}
function getCatPro(){

    if(isset($_GET['cat'])){

        $cat_id = $_GET['cat'];

        global $con;

        $get_cat_pro = "select * from products where product_cat='$cat_id'";

        $run_cat_pro = mysqli_query($con, $get_cat_pro);

        $count_cats = mysqli_num_rows($run_cat_pro);

        if($count_cats==0){

            echo "<h2 style='padding:20px; color: white'>No products found</h2>";

        }

        while($row_cat_pro=mysqli_fetch_array($run_cat_pro)){

            $pro_id = $row_cat_pro['product_id'];
            $pro_cat = $row_cat_pro['product_cat'];
            $pro_brand = $row_cat_pro['product_brand'];
            $pro_title = $row_cat_pro['product_title'];
            $pro_price = $row_cat_pro['product_price'];
            $pro_image = $row_cat_pro['product_image'];

            echo"
<div class=\"col-12 col-md-6 col-lg-4\" style='opacity: 0.9'>
                    <div class=\"card\ bg-dark\">
                        <img class=\"card-img-top\" <img src='admin_area/product_images/$pro_image' href='test.php?pro_id=$pro_id' alt=\"Card image cap\"/>
                        <div class=\"card-body\">
                            <h4 class=\"card-title\"><a href='test.php?pro_id=$pro_id' title=\"View Product\" style='color: white'>$pro_title</a></h4>
                            <div class=\"row\">
                                <div class=\"col\">
                                    <p style='color: white'>£ $pro_price</p>
                                </div>
                                <div class=\"col\">
                                    <a class=\"btn btn-info btn-md ml-3\" href=\"product-page.php?add_cart=$pro_id\">
                        <i class=\"fa fa-shopping-cart\"></i>
                        <span class=\"badge badge-light\">+</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        ";


        }

    }

}
function getBrandPro(){

    if(isset($_GET['brand'])){

        $brand_id = $_GET['brand'];

        global $con;

        $get_brand_pro = "select * from products where product_brand='$brand_id'";

        $run_brand_pro = mysqli_query($con, $get_brand_pro);

        $count_brands = mysqli_num_rows($run_brand_pro);

        if($count_brands==0){

            echo "<h2 style='padding:20px; color: white'>No products found</h2>";

        }

        while($row_brand_pro=mysqli_fetch_array($run_brand_pro)){

            $pro_id = $row_brand_pro['product_id'];
            $pro_cat = $row_brand_pro['product_cat'];
            $pro_brand = $row_brand_pro['product_brand'];
            $pro_title = $row_brand_pro['product_title'];
            $pro_price = $row_brand_pro['product_price'];
            $pro_image = $row_brand_pro['product_image'];

            echo"
<div class=\"col-12 col-md-6 col-lg-4\"  style='opacity: 0.9'>
                    <div class=\"card\ bg-dark\">
                        <img class=\"card-img-top\" <img src='admin_area/product_images/$pro_image' href='test.php?pro_id=$pro_id' alt=\"Card image cap\"/>
                        <div class=\"card-body\">
                            <h4 class=\"card-title\"><a href='test.php?pro_id=$pro_id' title=\"View Product\" style='color: white'>$pro_title</a></h4>
                            <div class=\"row\">
                                <div class=\"col\">
                                    <p style='color: white'>£ $pro_price</p>
                                </div>
                                <div class=\"col\">
                                    <a class=\"btn btn-info btn-md ml-3\" href=\"product-page.php?add_cart=$pro_id\">
                        <i class=\"fa fa-shopping-cart\"></i>
                        <span class=\"badge badge-light\">+</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
       
        ";


        }

    }
}

if (mysqli_connect_errno())
{
    echo "The Connection was not established: " . mysqli_connect_error();
}
// getting the user IP address
function getIp() {
    $ip = $_SERVER['REMOTE_ADDR'];

    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }

    return $ip;
}

//creating the shopping cart
function cart(){

    if(isset($_GET['add_cart'])){

        global $con;

        $ip = getIp();

        $pro_id = $_GET['add_cart'];

        $check_pro = "select * from cart where ip_add='$ip' AND p_id='$pro_id'";

        $run_check = mysqli_query($con, $check_pro);

        if(mysqli_num_rows($run_check)>0){

            echo "";

        }
        else {

            $insert_pro = "insert into cart (p_id,ip_add) values ('$pro_id','$ip')";

            $run_pro = mysqli_query($con, $insert_pro);

            echo "<script>window.open('product-page.php','_self')</script>";
        }

    }

}
// getting the total added items

function total_items(){

    if(isset($_GET['add_cart'])){

        global $con;

        $ip = getIp();

        $get_items = "select * from cart where ip_add='$ip'";

        $run_items = mysqli_query($con, $get_items);

        $count_items = mysqli_num_rows($run_items);

    }

    else {

        global $con;

        $ip = getIp();

        $get_items = "select * from cart where ip_add='$ip'";

        $run_items = mysqli_query($con, $get_items);

        $count_items = mysqli_num_rows($run_items);

    }

    echo $count_items;
}

// Getting the total price of the items in the cart

function total_price(){

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

            $values = array_sum($product_price);

            $total +=$values;

        }


    }

    echo "£" . $total;


}

function shoppingCart(){


}

function updateCart(){

    global $con;

    $ip = getIp();

    if(isset($_POST['update_cart'])){

        foreach($_POST['remove'] as $remove_id){

            $delete_product = "delete from cart where p_id='$remove_id' AND ip_add='$ip'";

            $run_delete = mysqli_query($con, $delete_product);

            if($run_delete){

                echo "<script>window.open('shopping_cart.php','_self')</script>";

            }

        }

    }
    if(isset($_POST['continue'])){

        echo "<script>window.open('product-page.php','_self')</script>";

    }

}
?>

