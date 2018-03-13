<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/login.css" type="text/css" rel="stylesheet">
    <script src="/http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="/https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #1b1e21">
<ol class="breadcrumb" style="background-color: #343a40;" >
    <li class="breadcrumb-item"><a href=index.php style="font-size: 20px; color: white">Home</a></li>
    <li class="breadcrumb-item active" style="font-size:20px">Sign Up</li>
</ol>
<div class = "container-fluid" style="background-color: #1b1e21">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-md-4 col-sm-4 col-xs-12">
            <form class="form-container" action="includes/signup.inc.php" method="POST">
                <img class="img-fluid center" src="logos/Aqua%20Logo%20Long.png" style= "display: inline-block; padding-right:10px"width="200" height="50">
                <h3>Sign Up</h3>
                <div class="form-group">
                    <label for ="firstname">First Name</label>
                    <input type="text" class="form-control" name="firstname" placeholder="First Name">
                </div>
                <div class="form-group">
                    <label for ="lastname">Last Name</label>
                    <input type="text"  class="form-control" name="lastname" placeholder="Last Name">
                </div>
                <div class="form-group">
                    <label for ="email">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="E-mail">
                </div>
                <div class="form-group">
                    <label for ="username">User Name</label>
                    <input type="text" class="form-control" name="uid" placeholder="User Name">
                </div>
                <div class="form-group">
                    <label for ="pwd">Password</label>
                    <input type="password" class="form-control" name="pwd" placeholder="Password">
                </div>
                <button type="submit" name ="submit" class="btn btn-info btn-block">Sign Up!</button>
                <!--<button type="submit"  formaction="index.php" class="btn btn-info btn-block">Return Home</button>-->

            </form>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
    </div>
</div>
</body>
</html>

