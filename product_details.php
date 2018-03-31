<head>
    ><?php
    include_once ("global_header.php");
    ?>
    <style>
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
            background-image: url("images/b");
            min-height: 400px;
        }

        /* Turn off parallax scrolling for tablets and phones */
        @media only screen and (max-device-width: 1024px) {
            .bgimg-1, .bgimg-2, .bgimg-3 {
                background-attachment: scroll;
            }

        /*****************globals*************/
        body {
            font-family: 'open sans';
            overflow-x: hidden; }

        img {
            max-width: 100%; }


        @media screen and (max-width: 996px) {
            .preview {
                margin-bottom: 20px; } }


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

        @media screen and (min-width: 997px) {
            .wrapper {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex; } }


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

    </style>
</head>
<body class="bgimg-3">
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
				<div id='single_product'>
				
					<h3>$pro_title</h3>
					
					<img src='admin_area/product_images/$pro_image' width='400' height='400' />
					
					<p><b> £ $pro_price </b></p>
					
					<p>$pro_desc </p>
					
					<a href='product-page.php' style='float:left;'>Go Back</a>
					
					<a href='product-page.php?pro_id=$pro_id'><button style='float:right'>Add to Cart</button></a>
				
				</div>
		
		
		";

        }
    }
    ?>

</div>
</body>
<footer>
    <?php
    include_once ("footer.php");
    ?>
</footer>