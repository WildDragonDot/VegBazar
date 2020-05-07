<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <title>VegBazar</title>
    <link href="CSS/style.css" type="text/css" rel="stylesheet">
    <link href="CSS/style1.css" type="text/css" rel="stylesheet">
    <script src="JAVASCRIPT/jquery.min.js"></script>
    <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">
    <script src="JAVASCRIPT/bootstrap.min.js"></script>
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<!-- top menu Begain-->
<div id="top">
    <div class="container"><!-- container Begain-->
        <div class="col-md-6 offer"><!-- col-md-6 offer Begain-->
            <a href="#" class="btn btn-success btn-sm">Welcome</a>
            <a href="../checkout.php">4 Items In Your Cart | Total Price: $300</a>
        </div><!-- col-md-6 offer End-->
        <div class="col-md-6"><!-- col-md-6 Begain-->
            <ul class="menu"><!-- menu Begain-->

                <li><a href="../customer_reg.php">Register</a></li>
                <li><a href="my_account.php">My Account</a></li>
                <li><a href="../cart.php">Go To Cart</a></li>
                <li><a href="../checkout.php">Login</a></li>

            </ul><!-- menu end-->
        </div><!-- col-md-6 end-->

    </div><!-- container end-->
</div><!--top menu end-->

<div id="navbar" class="navbar navbar-default"><!--navbar navbar-default start-->
    <div class="container"><!--navbar container start-->
        <div class="navbar-header"><!--navbar header start-->
            <a href="../index.php" class="navbar-brand home"><!--navbar-brand home start-->
                <img src="image/logobig.png" alt="vegbazarlogo" class="hidden-xs">
                <img src="image/logosmall.png" alt="vegbazarlogomobile" class="visible-xs">
            </a><!--navbar-brand home end-->

            <!--toggle button start-->
            <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                <span class="sr-only">Toggle Navigation</span>
                <i class="fa fa-align-justify"></i>
            </button><!--toggle button end-->

            <!--search button start-->
            <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                <span class="sr-only">Toggle Search</span>
                <i class="fa fa-search"></i>
            </button>    <!--search button end-->

        </div><!--navbar header end-->

        <!--navbar-collapse collapse start-->
        <div class="navbar-collapse collapse" id="navigation">

            <div class="padding-nav"><!--padding-nav start-->
                <ul class="nav navbar-nav left"><!--nav navbar-nav left start-->

                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../shop.php">Shop</a></li>
                    <li class="active"><a href="../checkout.php">My Account</a></li>
                    <li><a href="../cart.php">Shopping Cart</a></li>
                    <li><a href="../contact.php">Contact Us</a></li>

                </ul><!--nav navbar-nav left start-->

            </div><!--padding-nav end-->
            <a href="../cart.php" class="btn navbar-btn btn-primary right"><!--btn navbar-btn btn-primary right start-->

                <i class="fa fa-shopping-cart"></i>
                <span>4 Item In Your Cart</span>
            </a><!--btn navbar-btn btn-primary right end-->

            <div class="navbar-collapse collapse right"><!--navbar-collapse collapse right start-->
                <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!--btn btn-primary navbar-btn start-->
                    <span class="sr-only">Toggle Search</span>
                    <i class="fa fa-search"></i>
                </button><!--btn btn-primary navbar-btn End-->
            </div><!--navbar-collapse collapse right end-->
            <div class="collapse clearfix" id="search"><!--collapse clearfix start-->
                <form method="get" action="../result.php" class="navbar-form"><!--navbar-form start-->
                    <div class="input-group"><!--input-group start-->
                        <input type="text" class="form-control" name="user_query" placeholder="Search" required>
                    <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit" name="search" value="Search"><!--btn btn-primary start-->

                        <i class="fa fa-search"></i>

                    </button></span>
                        <!--btn btn-primary end-->
                    </div><!--input-group end-->
                </form><!--navbar-form end-->
            </div><!--collapse clearfix end-->

        </div><!--navbar-collapse collapse end-->

    </div><!--navbar container end-->
</div><!--navbar navbar-default close-->


<div id="content"><!-- content Begain-->
    <div class="container"><!-- container Begain-->
        <div class="col-md-12"><!-- col-md-12 Begain-->

            <ul class="breadcrumb"><!-- breadcrumb Begain-->
                <li><a href="../index.php">Home</a></li>
                <li>Shop</li>
            </ul><!-- breadcrumb end-->
        </div><!-- col-md-12 end-->

        <div class="col-md-3"><!-- col-md-3 start-->
            <?php include("../includes/sidebar.php"); ?>
        </div><!-- col-md-3 end-->

    </div><!-- container Begain-->
</div><!-- content end-->



<!--footer start-->
<?php include("includes/footer.php"); ?>
<!--footer end-->
</body>
</html>