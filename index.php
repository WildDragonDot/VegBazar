<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <title>VegBazar</title>
    <link href="CSS/style.css" type="text/css" rel="stylesheet">
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
            <a href="checkout.php">4 Items In Your Cart | Total Price: ₹ 300</a>
        </div><!-- col-md-6 offer End-->
            <div class="col-md-6"><!-- col-md-6 Begain-->
                <ul class="menu"><!-- menu Begain-->

                    <li><a href="customer_reg.php">Register</a></li>
                    <li><a href="checkout.php">My Account</a></li>
                    <li><a href="cart.php">Go To Cart</a></li>
                    <li><a href="checkout.php">Login</a></li>

                </ul><!-- menu end-->
            </div><!-- col-md-6 end-->

     </div><!-- container end-->
</div><!--top menu end-->

<div id="navbar" class="navbar navbar-default"><!--navbar navbar-default start-->
<div class="container"><!--navbar container start-->
    <div class="navbar-header"><!--navbar header start-->
        <a href="index.php" class="navbar-brand home"><!--navbar-brand home start-->
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

            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="checkout.php">My Account</a></li>
            <li><a href="cart.php">Shopping Cart</a></li>
            <li><a href="contact.php">Contact Us</a></li>

        </ul><!--nav navbar-nav left start-->

        </div><!--padding-nav end-->
        <a href="cart.php" class="btn navbar-btn btn-primary right"><!--btn navbar-btn btn-primary right start-->

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
            <form method="get" action="result.php" class="navbar-form"><!--navbar-form start-->
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

<!--Page Starting-->
 <div class="container" id="slider"><!--container slider start-->
    <div class="col-md-12"><!--col-md-12 start-->
        <div class="carousel slider" id="myCarousel" data-ride="carousel"><!--carousel slider start-->
        <ol class="carousel-indicators"><!--carousel-indicators start-->
            <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol><!--carousel-indicators end-->

            <div class="carousel-inner"><!--carousel-inner start-->
                <div class="item active">
                    <img src="image/img1.jpg" alt="Slider Image 1">
                </div>
                <div class="item">
                    <img src="image/img2.jpg" alt="Slider Image 2">
                </div>
                <div class="item">
                    <img src="image/img3.jpg" alt="Slider Image 3">
                </div>
                <div class="item">
                    <img src="image/img4.jpg" alt="Slider Image 4">
                </div>

            </div><!--carousel-inner end-->

            <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!--left carousel-control start-->
            <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a><!--left carousel-control end-->

            <a href="#myCarousel" class="right carousel-control" data-slide="next"><!--right carousel-control start-->
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a><!--right carousel-control end-->

        </div><!--carousel slider end-->
    </div><!--col-md-12 end-->

 </div><!--container slider end-->
<!--page End-->

<div id="advantages"><!-- advantages Begain-->
<div class="container"><!-- container Begain-->
    <div class="same-height-row"><!-- same-height-row Begain-->
        <div class="col-sm-4"><!-- col-sm-4 Begain-->
            <div class="box same-height"><!-- box same-height Begain-->
                <div class="icon"><!-- icon Begain-->
                    <i class="fa fa-heart"></i>
                </div><!-- icon end-->
                <h3><a href="#">Best Offer</a></h3>
                <p>It is a long established fact that a reader will
                    be distracted by the readable content of a page when looking at
                    its layout.</p>
            </div><!-- box same-height end-->
        </div><!-- col-sm-4 end-->
        <div class="col-sm-4"><!-- col-sm-4 Begain-->
            <div class="box same-height"><!-- box same-height Begain-->
                <div class="icon"><!-- icon Begain-->
                    <i class="fa fa-tag"></i>
                </div><!-- icon end-->
                <h3><a href="#">Best Prices</a></h3>
                <p>It is a long established fact that a reader will
                    be distracted by the readable content of a page when looking at
                    its layout.'</p>
            </div><!-- box same-height end-->
        </div><!-- col-sm-4 end-->
        <div class="col-sm-4"><!-- col-sm-4 Begain-->
            <div class="box same-height"><!-- box same-height Begain-->
                <div class="icon"><!-- icon Begain-->
                    <i class="fa fa-thumbs-up"></i>
                </div><!-- icon end-->
                <h3><a href="#">100% Fresh Products</a></h3>
                <p>It is a long established fact that a reader will
                    be distracted by the readable content of a page when looking at
                    its layout.</p>
            </div><!-- box same-height end-->
        </div><!-- col-sm-4 end-->
    </div><!-- same-height-row end-->
</div><!-- container end-->
</div><!-- advantages end-->

<!--page heading content start-->
<div id="hot"><!--hot start-->
<div class="box"><!--box start-->
    <div class="container"><!--container start-->
        <div class="col-md-12"><!--col-md-12 start-->
            <h2>
                Our Fresh Products
            </h2>
        </div>  <!--col-md-12 end-->
    </div><!--container end-->
</div><!--box end-->
</div><!--hot end-->
 <!--page heading content end-->
<div id="content" class="container"><!--content container start-->
    <div class="row"><!--row start-->
        <div class="col-sm-3 col-sm-6 single"><!--col-sm-4 col-sm-6 single start-->
            <div class="product"><!--product start-->
                <a href="details.php">
                    <img class="img-responsive" src="image/pro1.jpg" alt="product 1">
                </a>
                <div class="text"><!--text start-->
                    <h3>
                        <a href="details.php">
                            Apple
                        </a>
                    </h3>
                    <p class="price">₹120/kg</p>
                    <p class="button">
                        <a href="details.php" class="btn btn-default">View Details</a>
                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart">
                                Add To Cart
                            </i>
                        </a>
                    </p>
                </div><!--text end-->
            </div><!--product end-->
        </div><!--col-sm-3 col-sm-6 single end-->
        <div class="col-sm-3 col-sm-6 single"><!--col-sm-4 col-sm-6 single start-->
            <div class="product"><!--product start-->
                <a href="details.php">
                    <img class="img-responsive" src="image/pro2.jpg" alt="product 2">
                </a>
                <div class="text"><!--text start-->
                    <h3>
                        <a href="details.php">
                            Potato
                        </a>
                    </h3>
                    <p class="price">₹20/kg</p>
                    <p class="button">
                        <a href="details.php" class="btn btn-default">View Details</a>
                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart">
                                Add To Cart
                            </i>
                        </a>
                    </p>
                </div><!--text end-->
            </div><!--product end-->
        </div><!--col-sm-3 col-sm-6 single end-->
        <div class="col-sm-3 col-sm-6 single"><!--col-sm-4 col-sm-6 single start-->
            <div class="product"><!--product start-->
                <a href="details.php">
                    <img class="img-responsive" src="image/pro3.jpg" alt="product 3">
                </a>
                <div class="text"><!--text start-->
                    <h3>
                        <a href="details.php">
                            Beetroot
                        </a>
                    </h3>
                    <p class="price">₹80/kg</p>
                    <p class="button">
                        <a href="details.php" class="btn btn-default">View Details</a>
                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart">
                                Add To Cart
                            </i>
                        </a>
                    </p>
                </div><!--text end-->
            </div><!--product end-->
        </div><!--col-sm-3 col-sm-6 single end-->
        <div class="col-sm-3 col-sm-6 single"><!--col-sm-4 col-sm-6 single start-->
            <div class="product"><!--product start-->
                <a href="details.php">
                    <img class="img-responsive" src="image/pro4.jpg" alt="product 4">
                </a>
                <div class="text"><!--text start-->
                    <h3>
                        <a href="details.php">
                            Tomato
                        </a>
                    </h3>
                    <p class="price">₹20/kg</p>
                    <p class="button">
                        <a href="details.php" class="btn btn-default">View Details</a>
                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart">
                                Add To Cart
                            </i>
                        </a>
                    </p>
                </div><!--text end-->
            </div><!--product end-->
        </div><!--col-sm-3 col-sm-6 single end-->
        <div class="col-sm-3 col-sm-6 single"><!--col-sm-4 col-sm-6 single start-->
            <div class="product"><!--product start-->
                <a href="details.php">
                    <img class="img-responsive" src="image/pro5.jpg" alt="product 5">
                </a>
                <div class="text"><!--text start-->
                    <h3>
                        <a href="details.php">
                            Ladyfinger
                        </a>
                    </h3>
                    <p class="price">₹60/kg</p>
                    <p class="button">
                        <a href="details.php" class="btn btn-default">View Details</a>
                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart">
                                Add To Cart
                            </i>
                        </a>
                    </p>
                </div><!--text end-->
            </div><!--product end-->
        </div><!--col-sm-3 col-sm-6 single end-->
        <div class="col-sm-3 col-sm-6 single"><!--col-sm-4 col-sm-6 single start-->
            <div class="product"><!--product start-->
                <a href="details.php">
                    <img class="img-responsive" src="image/pro6.jpg" alt="product 6">
                </a>
                <div class="text"><!--text start-->
                    <h3>
                        <a href="details.php">
                            Onion
                        </a>
                    </h3>
                    <p class="price">₹50/kg</p>
                    <p class="button">
                        <a href="details.php" class="btn btn-default">View Details</a>
                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart">
                                Add To Cart
                            </i>
                        </a>
                    </p>
                </div><!--text end-->
            </div><!--product end-->
        </div><!--col-sm-3 col-sm-6 single end-->
        <div class="col-sm-3 col-sm-6 single"><!--col-sm-4 col-sm-6 single start-->
            <div class="product"><!--product start-->
                <a href="details.php">
                    <img class="img-responsive" src="image/pro7.jpg" alt="product 7">
                </a>
                <div class="text"><!--text start-->
                    <h3>
                        <a href="details.php">
                            Watermelon
                        </a>
                    </h3>
                    <p class="price">₹60/kg</p>
                    <p class="button">
                        <a href="details.php" class="btn btn-default">View Details</a>
                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart">
                                Add To Cart
                            </i>
                        </a>
                    </p>
                </div><!--text end-->
            </div><!--product end-->
        </div><!--col-sm-3 col-sm-6 single end-->
        <div class="col-sm-3 col-sm-6 single"><!--col-sm-4 col-sm-6 single start-->
            <div class="product"><!--product start-->
                <a href="details.php">
                    <img class="img-responsive" src="image/pro8.jpg" alt="product 8">
                </a>
                <div class="text"><!--text start-->
                    <h3>
                        <a href="details.php">
                            Carrot
                        </a>
                    </h3>
                    <p class="price">₹80/kg</p>
                    <p class="button">
                        <a href="details.php" class="btn btn-default">View Details</a>
                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart">
                                Add To Cart
                            </i>
                        </a>
                    </p>
                </div><!--text end-->
            </div><!--product end-->
        </div><!--col-sm-3 col-sm-6 single end-->
    </div><!--row end-->
</div><!--content container end-->

<!--footer start-->
<?php include("includes/footer.php"); ?>
<!--footer end-->
</body>
</html>