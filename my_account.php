<!DOCTYPE html>
<html lang="en">
<header>
    <?php
    include("global_header.php");
    ?>
    <!-- <ol class="breadcrumb" style="background-color: #1b1e21; padding-top: 20px" >
         <li class="breadcrumb-item"><a href=index.php style="font-size: 20px; color: white; text-decoration: none">Home</a></li>
         <li class="breadcrumb-item active" style="font-size:20px">Contact</li>
     </ol>-->
</header>
<body style="background-color: #1b1e21">


    <?php
    if(isset($_GET['edit_account'])){
        include("customer/edit_account.php");
    }
    if(isset($_GET['change_pass'])){
        include("customer/change_pass.php");
    }
    if(isset($_GET['delete_account'])){
        include("customer/delete_account.php");
    }


    ?>
</body>

</html>
<?php
include_once("footer.php");
?>