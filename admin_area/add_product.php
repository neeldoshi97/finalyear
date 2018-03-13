<!DOCTYPE html>
<?php

include("includes/db2.php");

?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="/https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="/css/login.css" type="text/css" rel="stylesheet">
    <script src="/http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
    <script>
        tinymce.init({selector:'textarea'});
    </script>
</head>
<body style="background-color: #1b1e21">
<div class = "container-fluid">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12" style="background-color: #343a40"></div>
        <div class="col-md-4 col-sm-4 col-xs-12" style="background-color: #343a40">
            <form class="form-container" action="/includes/signup.inc.php" method="POST" style=" background-color: #343a40; color: white">
                <h3>Insert Products</h3>
                <div class="form-group">
                    <label for ="product_title">Product Title</label>
                    <input type="text" class="form-control" name="firstname" placeholder="First Name" required>
                </div>
                <div class="form-group">
                    <label for ="product_cat">Product Category:</label>
                    <select style="background-color: #343a40" name="product_cat" required>
                        <option>Select a Category</option>
                        <?php
                        $get_cats = "select * from catagories";

                        $run_cats = mysqli_query($con, $get_cats);

                        while ($row_cats=mysqli_fetch_array($run_cats)){

                            $cat_id = $row_cats['cat_id'];
                            $cat_title = $row_cats['cat_title'];

                            echo "<option value='$cat_id'>$cat_title</option>";


                        }

                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for ="product_cat">Product Brand:</label>
                    <select style="background-color: #343a40" name="product_brand" required>
                        <option>Select a Brand</option>
                        <?php
                        $get_brands = "select * from brands";

                        $run_brands = mysqli_query($con, $get_brands);

                        while ($row_brands=mysqli_fetch_array($run_brands)){

                            $brand_id = $row_brands['brand_id'];
                            $brand_title = $row_brands['brand_title'];

                            echo "<option value='$brand_id'>$brand_title</option>";


                        }

                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for ="img">Product Image</label>
                    <input type="file" name="product_image" required/>
                </div>
                <div class="form-group">
                    <label for ="price">Price £</label>
                    <input type="text" name="product_price" required/>
                </div>
                <div class="form-group">
                    <label for ="desc">Description</label>
                    <textarea name="product_desc" cols="20" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label for ="desc">Key Words</label>
                    <input type="text" name="product_keywords" size="50" required/>
                </div>

                <tr align="center">
                    <td colspan="7"><input type="submit" name="insert_post" value="Insert Product"/></td>
                </tr>

                <!--<button type="submit"  formaction="index.php" class="btn btn-info btn-block">Return Home</button>-->
                <div class="col-xs-12" style="height:50px;"></div>
            </form>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
    </div>
</div>
</body>
</html>

