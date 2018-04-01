<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include ("global_header.php");
    ?>
   <!-- <ol class="breadcrumb" style="background-color: #1b1e21; padding-top: 20px" >
        <li class="breadcrumb-item"><a href=index.php style="font-size: 20px; color: white; text-decoration: none">Home</a></li>
        <li class="breadcrumb-item active" style="font-size:20px">Contact</li>
    </ol>-->
</head>
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
        background-image: url("images/aj.jpg");
        min-height: 400px;
    }

    /* Turn off parallax scrolling for tablets and phones
    @media only screen and (max-device-width: 1024px) {
        .bgimg-1, .bgimg-2, .bgimg-3 {
            background-attachment: scroll;
        }*/

        .jumbotron {
        color: white;
        border-radius: 0px;
    }
    .jumbotron-sm { padding-top: 24px;
        padding-bottom: 24px; }
    .jumbotron small {
        color: white;
    }
    .h1 small {
        font-size: 24px;
    }
</style>
<body class="bgimg-3">
<div class="col-xs-12" style="height:30px;"></div>
<div class="container">
    <div class="row">
        <div class="col" style="opacity: 0.8">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="background-color: #343a40">
                    <li class="breadcrumb-item"><a href=index.php style="font-size: 20px; color: white; text-decoration: none">Home</a></li>
                    <li class="breadcrumb-item active" style="font-size:20px">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="jumbotron jumbotron-sm" style="opacity: 0.7; background-color: #1b1e21; color: white">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1" style="color: white">
                    Contact us</h1>
            </div>
        </div>
    </div>
</div>
<div class="container" style="color: white; background-color: #1b1e21; opacity: 0.7">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">
                                    Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                            </div>
                            <div class="form-group">
                                <label for="email">
                                    Email Address</label>
                                <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                    <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                            </div>
                            <div class="form-group">
                                <label for="subject">
                                    Subject</label>
                                <select id="subject" name="subject" class="form-control" required="required">
                                    <option value="na" selected="">Choose One:</option>
                                    <option value="service">General Customer Service</option>
                                    <option value="suggestions">Suggestions</option>
                                    <option value="product">Product Support</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">
                                    Message</label>
                                <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                          placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-info pull-right" id="btnContactUs">
                                Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
                <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
                <address>
                    <strong>Twitter, Inc.</strong><br>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                    <abbr title="Phone">
                        P:</abbr>
                    (123) 456-7890
                </address>
                <address>
                    <strong>Full Name</strong><br>
                    <a href="mailto:#">first.last@example.com</a>
                </address>
            </form>
        </div>
    </div>
</div>
</body>
<div class="col-xs-12" style="height:50px;"></div>
<?php
include_once ("footer.php");
?>