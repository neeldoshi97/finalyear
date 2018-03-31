<head>
    ><?php
    include_once ("global_header.php");
    ?>
    <style>


        .bgimg-3 {
            position: relative;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;

        }
        .bgimg-3 {
            background-image: url("images/belly.jpg");
            min-height: 400px;
        }

        /* Turn off parallax scrolling for tablets and phones */
        /*****************globals*************/
        body {
            overflow-x: hidden; }

        .preview {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column; }
        @media screen and (max-width: 996px) {
            .preview {
                margin-bottom: 20px; } }

        .preview-pic {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1; }

        .preview-thumbnail.nav-tabs {
            border: none;
            margin-top: 15px; }
        .preview-thumbnail.nav-tabs li {
            width: 18%;
            margin-right: 2.5%; }
        .preview-thumbnail.nav-tabs li img {
            max-width: 100%;
            display: block; }
        .preview-thumbnail.nav-tabs li a {
            padding: 0;
            margin: 0; }
        .preview-thumbnail.nav-tabs li:last-of-type {
            margin-right: 0; }

        .tab-content {
            overflow: hidden; }
        .tab-content img {
            width: 100%;
            -webkit-animation-name: opacity;
            animation-name: opacity;
            -webkit-animation-duration: .3s;
            animation-duration: .3s; }

        .card {
            margin-top: 50px;
            background: #eee;
            padding: 3em;
            line-height: 1.5em; }

        @media screen and (min-width: 997px) {
            .wrapper {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex; } }

        .details {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column; }

        .colors {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1; }

        .product-title, .price, .sizes, .colors {
            text-transform: UPPERCASE;
            font-weight: bold; }

        .checked, .price span {
            color: aqua; }

        .product-title, .rating, .product-description, .price, .vote, .sizes {
            margin-bottom: 15px; }

        .product-title {
            margin-top: 0; }

        .size {
            margin-right: 10px; }
        .size:first-of-type {
            margin-left: 40px; }

        .color {
            display: inline-block;
            vertical-align: middle;
            margin-right: 10px;
            height: 2em;
            width: 2em;
            border-radius: 2px; }
        .color:first-of-type {
            margin-left: 20px; }

        .add-to-cart, .like {
            padding: 1.2em 1.5em;
            border: none;
            text-transform: UPPERCASE;
            font-weight: bold;
            color: #fff;
            -webkit-transition: background .3s ease;
            transition: background .3s ease; }
        .add-to-cart:hover, .like:hover {
            background: deepskyblue;
            color: #fff; }

        .tooltip-inner {
            padding: 1.3em; }

        @-webkit-keyframes opacity {
            0% {
                opacity: 0;
                -webkit-transform: scale(3);
                transform: scale(3); }
            100% {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1); } }

        @keyframes opacity {
            0% {
                opacity: 0;
                -webkit-transform: scale(3);
                transform: scale(3); }
            100% {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1); } }

        /*# sourceMappingURL=style.css.map */
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
    </style>
</head>
<body class="bgimg-3">
<div class="container" style="opacity: 0.8">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="background-color: #343a40">
                    <li class="breadcrumb-item"><a href=index.php style="font-size: 20px; color: white; text-decoration: none">Home</a></li>
                    <li class="breadcrumb-item ac"><a href=product-page.php style="font-size: 20px; color: white; text-decoration: none">Return to all products</a></li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class=container style="color: white">
    <?php
    if(isset($_GET['pro_id'])){

        $product_id = $_GET['pro_id'];

        $get_pro = "select * from products where product_id='$product_id'";

        $run_pro = mysqli_query($con, $get_pro);

        while($row_pro=mysqli_fetch_array($run_pro)){

            $pro_id = $row_pro['product_id'];
            $pro_title = $row_pro['product_title'];
            $pro_price = $row_pro['product_price'];
            $pro_image = $row_pro['product_image'];
            $pro_desc = $row_pro['product_desc'];

            echo "
				<div class=\"container\">
    <div class=\"card bg-dark\" style='opacity: 0.8'>
        <div class=\"container-fluid bg-dark\">
            <div class=\"wrapper row\">
            <div class=\"wrapper row\">
					<div class=\"preview col-md-6\">	
						<div class=\"preview-pic tab-content\">
						  <div class=\"tab-pane active\" id=\"pic-1\"><img class=\"card - img - top\" <img src='admin_area/product_images/$pro_image' alt=\"Card image cap\"/></div>
						 </div>
					</div>
                <div class=\"details col-md-6\">
                    <h3 class=\"product-title\" style='color: aqua'>$pro_title</h3>
                    <p class=\"product-description\">Product Info: $pro_desc </p>
                    <h4 class=\"price\">Price: <span>£ $pro_price.00</span></h4>
                     <div class=\"col-xs-12\" style=\"height:30px;\"></div>
                    <h5 class=\"sizes\">sizes:
                        <span href='\#\' class=\"size\" data-toggle=\"tooltip\" title=\"Small\">S</span>
                        <span href='#' class=\"size\" data-toggle=\"tooltip\" title=\"Medium\">M</span>
                        <span href='#' class=\"size\" data-toggle=\"tooltip\" title=\"Large\">L</span>
                        <span href='#' class=\"size\" data-toggle=\"tooltip\" title=\"Xtra Large\">XL</span>
                    </h5>
                     <div class=\"col-12 col-sm-12 text-sm-center col-md-4 text-md-right row\">
                    <div class=\"col-4 col-sm-4 col-md-4\">
                        <div class=\"quantity\">
                            <input type=\"button\" value=\"+\" class=\"plus\">
                            <input type=\"number\" step=\"1\" max=\"99\" min=\"1\" value=\"1\" title=\"Qty\" class=\"qty\"
                                   size=\"4\">
                            <input type=\"button\" value=\"-\" class=\"minus\">
                        </div>
                    </div>
                    <div class=\"col\">
                                    <a class=\"btn btn-info btn-md ml-3\" href=\"#\">
                        <i class=\"fa fa-shopping-cart\"></i> Add To Cart
                        <span class=\"badge badge-light\">+</span></a>
                                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
     <div class=\"col-xs-12\" style=\"height:50px;\"></div>
</div>
		
		
		";

        }
    }
    ?>
</div>
</body>
<!--<footer>
    <?php
    include_once ("footer.php");
    ?>
</footer>-->