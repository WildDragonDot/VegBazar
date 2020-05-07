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
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="checkout.php">My Account</a></li>
                    <li class="active"><a href="cart.php">Shopping Cart</a></li>
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
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>Cart</li>
            </ul><!-- breadcrumb end-->
        </div><!-- col-md-12 end-->

        <div id="cart" class="col-md-9"><!--col-md-9 cart begin-->

        <div class="box"><!--box begin-->

            <form action="cart.php" method="post" enctype="multipart/form-data"><!--form-data Begin-->

                <h1>Shopping Cart</h1>
                <p class="text-muted">Your currently have 3 item(s) in your cart</p>
                <div class="table-responsive"><!--table-responsive Begin-->

                    <table class="table"><!--table Begin-->
                        <thead><!--thead Begin-->
                           <tr><!--tr Begin-->
                               <th colspan="2">Product</th>
                               <th>Quantity</th>
                               <th>Unit Price</th>
                               <th>Unit</th>
                               <th colspan="1">Delete</th>
                               <th colspan="2">Sub-Total</th>
                           </tr><!--tr finish-->
                        </thead><!--thead finish-->
                        <tbody><!--tbody Begin-->
                            <tr><!--tr begin-->
                                <td>
                                    <img class="img-responsive" src="image/pro1.jpg" alt="product 1">
                                </td>
                                <td>
                                    <a href="#">Kashmiri Apple</a>
                                </td>
                                <td>
                                    2
                                </td>
                                <td>
                                    ₹120 /
                                </td>
                                <td>
                                    Kg
                                </td>
                                <td>
                                    <input type="checkbox" name="remove[]">
                                </td>
                                <td>
                                    ₹240
                                </td>
                            </tr><!--tr finish-->
                        </tbody><!--tbody finish-->
                        <tbody><!--tbody Begin-->
                        <tr><!--tr begin-->
                            <td>
                                <img class="img-responsive" src="image/pro2.jpg" alt="product 1">
                            </td>
                            <td>
                                <a href="#">Potato</a>
                            </td>
                            <td>
                                2
                            </td>
                            <td>
                                ₹120 /
                            </td>
                            <td>
                                Kg
                            </td>
                            <td>
                                <input type="checkbox" name="remove[]">
                            </td>
                            <td>
                                ₹240
                            </td>
                        </tr><!--tr finish-->
                        </tbody><!--tbody finish-->
                        <tbody><!--tbody Begin-->
                        <tr><!--tr begin-->
                            <td>
                                <img class="img-responsive" src="image/pro3.jpg" alt="product 1">
                            </td>
                            <td>
                                <a href="#">Beetroot</a>
                            </td>
                            <td>
                                2
                            </td>
                            <td>
                                ₹120 /
                            </td>
                            <td>
                                Kg
                            </td>
                            <td>
                                <input type="checkbox" name="remove[]">
                            </td>
                            <td>
                                ₹240
                            </td>
                        </tr><!--tr finish-->
                        </tbody><!--tbody finish-->
                        <tfoot><!--tfoot begin-->
                        <tr><!--tr begin-->
                            <th colspan="5">Total</th>
                            <th colspan="2">₹360</th>
                        </tr><!--tr finish-->
                        </tfoot><!--tfoot finish-->
                    </table><!--table finish-->
                </div><!--table-responsive finish-->

                <div class="box-footer"><!--box-footer begin-->

                    <div class="pull-left"><!--pull-left begin-->
                        <a href="index.php" class="btn btn-default"><!--btn btn-default begin-->

                            <i class="fa fa-chevron-left"></i>
                            Continue Shopping
                        </a><!--btn btn-default finish-->
                    </div><!--pull-left finish-->

                    <div class="pull-right"><!--pull-right begin-->
                        <button type="submit" name="update" value="Update Cart" class="btn btn-default"><!--btn btn-default begin-->
                            <i class="fa fa-refresh"></i> Update Cart

                        </button><!--btn btn-default finish-->

                        <a href="checkout.php" class="btn btn-primary">
                            Proceed Checkout <i class="fa fa-chevron-right"></i>
                        </a>

                    </div><!--pull-right finish-->

                </div><!--box-footer finish-->
            </form><!--form-data finish-->
        </div><!--box finish-->
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
        </div><!--col-md-9 cart finish-->

        <div class="col-md-3"><!--col-md-3 begin-->
            <div id="order-summary" class="box"><!--box order-summary begin-->
                <div class="box-header"><!--box-header begin-->
                    <h3>Order Summary</h3>
                </div><!--box-header finish-->
                <p class="text-muted"><!--text-muted begin-->
                    Shipping and addtional costs are calculated based on value you have entered.
                </p><!--text-muted finish-->
                <div class="table-responsive"><!--table-responsive begin-->
                    <table class="table"><!--table begin-->

                        <tbody><!--tbody begin-->
                            <tr><!--tr begin-->
                                <td> Order Sub-Total</td>
                                <th>₹ 360</th>
                            </tr><!--tr finish-->
                        <tr><!--tr begin-->
                            <td>Shipping and Handling</td>
                            <td>₹ 0</td>
                        </tr><!--tr finish-->
                        <tr><!--tr begin-->
                            <td>Tax</td>
                            <th>₹ 2</th>
                        </tr><!--tr finish-->
                        <tr class="total"><!--tr begin-->
                            <td>Total</td>
                            <th>₹ 362</th>
                        </tr><!--tr finish-->
                        </tbody><!--tbody finish-->
                    </table><!--table finish-->
                </div><!--table-responsive finish-->
            </div><!--box order-summary finish-->
        </div><!--col-md-3 finish-->
</div><!-- container finish-->
    </div><!-- content finish-->










<!--footer start-->
<?php
include("includes/footer.php");
?>
<!--footer End-->