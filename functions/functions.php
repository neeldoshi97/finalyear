<html>
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/modern-business.css" rel="stylesheet">
</html>
<?php

//$con = mysqli_connect("localhost","21529820", "mysqluser", "db1_21529820");
$con = mysqli_connect("localhost","root", "", "ecommerce");
//getting the catagories

function getCats(){

    global $con;

    $get_cats = "select * from catagories";
    $run_cats = mysqli_query($con, $get_cats);

while ($row_cats = mysqli_fetch_array($run_cats)){

    $cat_id = $row_cats['cat_id'];
    $cat_title = $row_cats['cat_title'];

//echo "<li><a href = '#'>$cat_title</a></li>";
    echo "<li><a class=\"dropdown-item\" href='#'>$cat_title</a></li>";
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
        echo "<li><a class=\"dropdown-item\" href='#'>$brand_title</a></li>";


    }


}

function getpro(){
    global $con;

    $get_pro = "select * from products order by RAND() LIMIT 0,6";

    $run_pro = mysqli_query($con, $get_pro);

    while($row_pro=mysqli_fetch_array($run_pro)){
        $pro_id = $row_pro['product_id'];
        $pro_cat = $row_pro['product_cat'];
        $pro_brand = $row_pro['product_brand'];
        $pro_title = $row_pro['product_title'];
        $pro_price = $row_pro['product_price'];
        $pro_image = $row_pro['product_image'];

        echo"
        <div id = 'single_product'>
        
            <h4>$pro_title</h4>
            <img src='admin_area/product_images/$pro_image' width='140' height='140'/>
            <p><b> £ $pro_price</b></p>
            
            <a href='details.php?pro_id=$pro_id' style='float: left'>Details</a>
            <a href='index.php?pro_id=$pro_id'><button style='float:right'>Add to Cart</button></a>    
        
        </div>
        
        ";

    }
}


?>