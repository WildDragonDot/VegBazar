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
            <a href="checkout.php">4 Items In Your Cart | Total Price: $300</a>
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

                    <li><a href="index.php">Home</a></li>
                    <li class="active"><a href="shop.php">Shop</a></li>
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
<div id="content"><!-- content Begain-->
    <div class="container"><!-- container Begain-->
        <div class="col-md-12"><!-- col-md-12 Begain-->

            <ul class="breadcrumb"><!-- breadcrumb Begain-->
                <li><a href="index.php">Home</a></li>
                <li>Shop</li>
            </ul><!-- breadcrumb end-->
        </div><!-- col-md-12 end-->

        <div class="col-md-3"><!-- col-md-3 start-->
            <?php include("includes/sidebar.php"); ?>
        </div><!-- col-md-3 end-->


        <div class="col-md-9"><!-- col-md-9 start-->
            <div id="productMain" class="row"><!-- productMain start-->
                <div class="col-sm-6"><!-- col-sm-6 start-->
                    <div id="mainImage"><!-- mainImage start-->
                        <div id="myCarousel" class="carousel slide" data-ride="carousel"><!-- carousel slide start-->
                            <ol class="carousel-indicators"><!-- carousel-indicators start-->
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol> <!-- carousel-indicators end-->

                            <div class="carousel-inner">
                                <div class="item active">
                                    <center><img class="img-responsive" src="image/pro1.jpg" alt="product 1"></center>
                                </div>
                                <div class="item">
                                    <center><img class="img-responsive" src="image/pro1a.jpg" alt="product 1"></center>
                                </div>
                                <div class="item">
                                    <center><img class="img-responsive" src="image/pro1b.png" alt="product 1"></center>
                                </div>
                            </div>

                            <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control start-->
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a><!-- left carousel-control end-->
                            <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- right carousel-control start-->
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a><!-- right carousel-control end-->

                        </div><!-- carousel slide end-->
                    </div><!-- mainImage end-->
                </div><!-- col-sm-6 end-->

                <div class="col-sm-6"><!-- col-sm-6" start-->
                    <div class="box"><!-- box start-->
                        <h1 class="text-center">Kashmiri Apple</h1>

                        <form action="details.php" class="form-horizontal" method="post"><!-- form-horizontal start-->
                            <div class="form-group"><!-- form-group start-->
                                <label for="" class="col-md-5 control-label"><!-- col-md-5 control-label start-->
                                    Product Quantity
                                </label><!-- col-md-5 control-label end-->
                                <div class="col-md-7"><!-- col-md-7 begin-->
<!--                                    <select name="product_qty" id="" class="form-control"><!-- form-control begin-->
<!--                                        <option>1</option>-->
<!--                                        <option>2</option>-->
<!--                                        <option>5</option>-->
<!--                                        <option>10</option>-->
<!--                                        <option>15</option>-->
<!--                                        <option>20</option>-->
<!--                                    </select><!-- form-control finish-->
                                    <input type="number" min="1" max="1000" class="form-control" value="1" required>
                                </div><!-- col-md-7 finish-->
                            </div><!-- form-group end-->


                                <div class="form-group"><!-- form-group begin-->
                                    <label class="col-md-5 control-label">Product Unit</label>

                                    <div class="col-md-7"><!-- col-md-7 begin-->
                                        <select name="product_size" class="form-control" required><!-- product_size begin-->
                                            <option>kg</option>
                                            <option>packet</option>
                                        </select><!-- product_size finish-->
                                    </div><!-- col-md-7 finish-->
                                </div ><!-- form-group finish-->
                            <p class="price">₹120/kg</p>

                            <p class="text-center buttons">
                                <button class="btn btn-primary i fa fa-shopping-cart">Add to cart</button>
                            </p>

                        </form><!-- form-horizontal end-->

                    </div><!-- box end-->
                    <div class="row" id="thumbs"><!--row thumb begin-->

                        <div class="col-xs-4"><!-- col-xs-4 begin-->
                            <a data-target="#myCarousel" data-slide-to="0" href="#" class="thumb"><!-- thumb begin-->
                                <img src="image/pro1.jpg" alt="product 1" class="img-responsive">
                            </a><!-- thumb finish-->
                        </div><!-- col-xs-4 finish-->
                        <div class="col-xs-4"><!-- col-xs-4 begin-->
                            <a data-target="#myCarousel" data-slide-to="1" href="#" class="thumb"><!-- thumb begin-->
                                <img src="image/pro1a.jpg" alt="product 1" class="img-responsive">
                            </a><!-- thumb finish-->
                        </div><!-- col-xs-4 finish-->
                        <div class="col-xs-4"><!-- col-xs-4 begin-->
                            <a data-target="#myCarousel" data-slide-to="2" href="#" class="thumb"><!-- thumb begin-->
                                <img src="image/pro1b.png" alt="product 1" class="img-responsive">
                            </a><!-- thumb finish-->
                        </div><!-- col-xs-4 finish-->

                    </div><!--row thumb finish-->
                </div><!-- col-sm-6" finish-->

            </div><!-- productMain end-->

            <div class="box" id="details"><!-- box start-->

                <h4>Product Details</h4>

                <p>
                    It is a long established fact that a reader will
                    be distracted by the readable content of a page when looking at
                    its layout.It is a long established fact that a reader will
                    be distracted by the readable content of a page when looking at
                    its layout.It is a long established fact that a reader will
                    be distracted by the readable content of a page when looking at
                    its layout.
                </p>
                <h4>Avilable in Quantity</h4>
                <ul>
                    <li>kg</li>
                    <li>packet</li>
                </ul>
                <hr>
            </div><!-- box finish-->

            <div id="row same-height-row"><!-- row same-height-row begin-->
                <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 begin-->
                    <div class="box same-height headline"><!-- box same-height headline begin-->
                        <h3 class="text-center">Products You Maybe Like</h3>
                    </div><!-- box same-height headline finish-->
                </div><!-- col-md-3 col-sm-6 finish-->


                <div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 center-responsive begin-->
                    <div class="product same-height"><!-- product same-height begin-->
                        <a href="details.php">
                            <img class="img-responsive" src="image/pro4.jpg" alt="product 4"></a>

                        <div class="text"><!--text begin-->
                            <h3><a href="details.php">Tomato</a></h3>
                            <p class="price">₹20</p>
                        </div><!--text finish-->
                    </div><!-- product same-height finish-->
                </div><!-- col-md-3 col-sm-6 center-responsive finish-->
                <div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 center-responsive begin-->
                    <div class="product same-height"><!-- product same-height begin-->
                        <a href="details.php">
                            <img class="img-responsive" src="image/pro6.jpg" alt="product 6"></a>

                        <div class="text"><!--text begin-->
                            <h3><a href="details.php">Onion</a></h3>
                            <p class="price">₹40</p>
                        </div><!--text finish-->
                    </div><!-- product same-height finish-->
                </div><!-- col-md-3 col-sm-6 center-responsive finish-->
                <div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 center-responsive begin-->
                    <div class="product same-height"><!-- product same-height begin-->
                        <a href="details.php">
                            <img class="img-responsive" src="image/pro5.jpg" alt="product 5"></a>

                        <div class="text"><!--text begin-->
                            <h3><a href="details.php">Ladyfinger</a></h3>
                            <p class="price">₹80</p>
                        </div><!--text finish-->
                    </div><!-- product same-height finish-->
                </div><!-- col-md-3 col-sm-6 center-responsive finish-->


            </div><!-- row same-height-row finish-->

        </div><!-- col-md-9 end-->
    </div><!-- container end-->
</div><!-- content end-->

<!--footer start-->
<?php
include("includes/footer.php");
?>
<!--footer End-->
</body>
</html>