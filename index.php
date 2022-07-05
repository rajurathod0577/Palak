<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_GET['action']) && $_GET['action']=="add"){
	$id=intval($_GET['id']);
	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]['quantity']++;
	}else{
		$sql_p="SELECT * FROM products WHERE id={$id}";
		$query_p=mysqli_query($con,$sql_p);
		if(mysqli_num_rows($query_p)!=0){
			$row_p=mysqli_fetch_array($query_p);
			$_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['productPrice']);
		}else{
			$message="Product ID is invalid";
		}
	}
		echo "<script>alert('Product has been added to the cart')</script>";
		echo "<script type='text/javascript'> document.location ='my-cart.php'; </script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="jewelry, jewellery">
    <meta name="robots" content="all">

    <title>OM Palak Jewellers Home Page</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Customizable CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/gold.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/rateit.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

</head>

<body class="cnt-home">

    <!-- ============================================== HEADER ============================================== -->
    <header class="header-style-1">
        <!-- ============================================== TOP MENU ============================================== -->
        <?php include('includes/top-header.php');?>
        <!-- ============================================== TOP MENU : END ============================================== -->
        <?php include('includes/main-header.php');?>
        <!-- ============================================== NAVBAR ============================================== -->
        <?php include('includes/menu-bar.php');?>
        <!-- ============================================== NAVBAR : END ============================================== -->
        <!-- ============================================== Whatsapp API ============================================== -->
        <?php include('includes/whatsapp.php');?>
        <!-- ============================================== Whatsapp API : END ============================================== -->

    </header>
    <!-- ============================================== HEADER : END ============================================== -->
    <div class="body-content outer-top-xs" id="top-banner-and-menu">
        <div class="container">
            <div class="container homepage-container">
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-3 sidebar">
                        <!-- ================================== TOP NAVIGATION ================================== -->
                        <?php include('includes/side-menu.php');?>
                        <!-- ================================== TOP NAVIGATION : END ================================== -->
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
                        <!-- ========================================== SECTION – HERO ========================================= -->
                        <div id="hero" class="homepage-slider3">
                            <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                                <div class="full-width-slider">
                                    <div class="item full-width-slider"
                                        style="background-image: url(assets/images/sliders/Shop1.jpeg);">
                                        <!-- /.container-fluid -->
                                    </div><!-- /.item -->
                                </div><!-- /.full-width-slider -->
                                <div class="full-width-slider">
                                    <div class="item full-width-slider"
                                        style="background-image: url(assets/images/sliders/Shop2.jpeg);">
                                    </div><!-- /.item -->
                                </div><!-- /.full-width-slider -->

                            </div><!-- /.owl-carousel -->
                        </div>

                        <!-- ========================================= SECTION – HERO : END ========================================= -->
                        <!-- ============================================== INFO BOXES ============================================== -->
                        <div class="info-boxes wow fadeInUp">
                            <div class="info-boxes-inner">
                                <div class="row">
                                    <div class="col-md-6 col-sm-4 col-lg-4">
                                        <div class="info-box">
                                            <div class="row">
                                                <div class="col-xs-2">
                                                    <i class="icon fa fa-rupee"></i>
                                                </div>
                                                <div class="col-xs-10">
                                                    <h4 class="info-box-heading green">money back</h4>
                                                </div>
                                            </div>
                                            <h6 class="text">30 Day Money Back Guarantee.</h6>
                                        </div>
                                    </div><!-- .col -->
                                    <div class="hidden-md col-sm-4 col-lg-4">
                                        <div class="info-box">
                                            <div class="row">
                                                <div class="col-xs-2">
                                                    <i class="icon fa fa-truck"></i>
                                                </div>
                                                <div class="col-xs-10">
                                                    <h4 class="info-box-heading orange">free shipping</h4>
                                                </div>
                                            </div>
                                            <h6 class="text">Free shipping within mumbai</h6>
                                        </div>
                                    </div><!-- .col -->
                                    <div class="col-md-6 col-sm-4 col-lg-4">
                                        <div class="info-box">
                                            <div class="row">
                                                <div class="col-xs-2">
                                                    <i class="icon fa fa-gift"></i>
                                                </div>
                                                <div class="col-xs-10">
                                                    <h4 class="info-box-heading red">Special Sale</h4>
                                                </div>
                                            </div>
                                            <h6 class="text">All items-sale up to 20% off </h6>
                                        </div>
                                    </div><!-- .col -->
                                </div><!-- /.row -->
                            </div><!-- /.info-boxes-inner -->
                        </div><!-- /.info-boxes -->
                        <!-- ============================================== INFO BOXES : END ============================================== -->
                    </div><!-- /.homebanner-holder -->
                </div><!-- /.row -->
                <!-- ============================================== SCROLL TABS ============================================== -->
                <div id="product-tabs-slider" class="scroll-tabs inner-bottom-vs  wow fadeInUp">
                    <div class="more-info-tab clearfix">
                        <h3 class="new-product-title pull-left">Featured Products</h3>
                        <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
                            <li class="active"><a href="#all" data-toggle="tab">All</a></li>
                            <li><a href="#earrings" data-toggle="tab">Earrings</a></li>
                            <li><a href="#chains" data-toggle="tab">Chains</a></li>
                        </ul><!-- /.nav-tabs -->
                    </div>
                    <div class="tab-content outer-top-xs">
                        <div class="tab-pane in active" id="all">
                            <div class="product-slider">
                                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                                    <?php
$ret=mysqli_query($con,"select * from products order by rand() limit 12");
while ($row=mysqli_fetch_array($ret)) 
{
?>
                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a
                                                            href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
                                                            <img src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"
                                                                data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"
                                                                width="180" height="260" alt=""></a>
                                                    </div><!-- /.image -->
                                                </div><!-- /.product-image -->
                                                <div class="product-info text-left">
                                                    <h3 class="name"><a
                                                            href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>
                                                    <div class="product-price">
                                                        <span class="price">
                                                            Rs.<?php echo htmlentities($row['productPrice']);?> </span>
                                                        <span
                                                            class="price-before-discount">Rs.<?php echo htmlentities($row['productPriceBeforeDiscount']);?>
                                                        </span>
                                                    </div><!-- /.product-price -->
                                                </div><!-- /.product-info -->
                                                <?php if($row['productAvailability']=='In Stock'){?>
                                                <div class="action"><a
                                                        href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>"
                                                        class="lnk btn btn-primary">Add to Cart</a></div>
                                                <?php } else {?>
                                                <div class="action" style="color:red">Out of Stock</div>
                                                <?php } ?>
                                            </div><!-- /.product -->
                                        </div><!-- /.products -->
                                    </div><!-- /.item -->
                                    <?php } ?>
                                </div><!-- /.home-owl-carousel -->
                            </div><!-- /.product-slider -->
                        </div>
                        <div class="tab-pane" id="earrings">
                            <div class="product-slider">
                                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                                    <?php
$ret=mysqli_query($con,"select * from products where subcategory=5");
while ($row=mysqli_fetch_array($ret)) 
{
?>
                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a
                                                            href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
                                                            <img src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"
                                                                data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"
                                                                width="180" height="280" alt=""></a>
                                                    </div><!-- /.image -->
                                                </div><!-- /.product-image -->
                                                <div class="product-info text-left">
                                                    <h3 class="name"><a
                                                            href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>
                                                    <div class="product-price">
                                                        <span class="price">
                                                            Rs. <?php echo htmlentities($row['productPrice']);?> </span>
                                                        <span
                                                            class="price-before-discount">Rs.<?php echo htmlentities($row['productPriceBeforeDiscount']);?></span>
                                                    </div><!-- /.product-price -->
                                                </div><!-- /.product-info -->
                                                <?php if($row['productAvailability']=='In Stock'){?>
                                                <div class="action"><a
                                                        href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>"
                                                        class="lnk btn btn-primary">Add to Cart</a></div>
                                                <?php } else {?>
                                                <div class="action" style="color:red">Out of Stock</div>
                                                <?php } ?>
                                            </div><!-- /.product -->
                                        </div><!-- /.products -->
                                    </div><!-- /.item -->
                                    <?php } ?>
                                </div><!-- /.home-owl-carousel -->
                            </div><!-- /.product-slider -->
                        </div>
                        <div class="tab-pane" id="chains">
                            <div class="product-slider" id="mens">
                                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                                    <?php
$ret=mysqli_query($con,"select * from products where subcategory=3");
while ($row=mysqli_fetch_array($ret)) 
{
?>
                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a
                                                            href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
                                                            <img src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"
                                                                data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"
                                                                width="180" height="280" alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="product-info text-left">
                                                    <h3 class="name"><a
                                                            href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
                                                        <span class="price">
                                                            Rs.<?php echo htmlentities($row['productPrice']);?> </span>
                                                        <span
                                                            class="price-before-discount">Rs.<?php echo htmlentities($row['productPriceBeforeDiscount']);?></span>
                                                    </div>
                                                </div>
                                                <?php if($row['productAvailability']=='In Stock'){?>
                                                <div class="action"><a
                                                        href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>"
                                                        class="lnk btn btn-primary">Add to Cart</a></div>
                                                <?php } else {?>
                                                <div class="action" style="color:red">Out of Stock</div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ============================================== TABS ============================================== -->
                <div class="sections prod-slider-small outer-top-small">
                    <div class="row">
                        <div class="col-md-6">
                            <section class="section">
                                <h3 class="section-title">Earrings</h3>
                                <div class="owl-carousel homepage-owl-carousel custom-carousel outer-top-xs owl-theme"
                                    data-item="2">

                                    <?php
$ret=mysqli_query($con,"select * from products where subCategory=5");
while ($row=mysqli_fetch_array($ret)) 
{
?>
                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a
                                                            href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><img
                                                                src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"
                                                                data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"
                                                                width="180" height="250"></a>
                                                    </div><!-- /.image -->
                                                </div><!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a
                                                            href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
                                                        <span class="price">
                                                            Rs. <?php echo htmlentities($row['productPrice']);?> </span>
                                                        <span
                                                            class="price-before-discount">Rs.<?php echo htmlentities($row['productPriceBeforeDiscount']);?></span>

                                                    </div>

                                                </div>
                                                <?php if($row['productAvailability']=='In Stock'){?>
                                                <div class="action"><a
                                                        href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>"
                                                        class="lnk btn btn-primary">Add to Cart</a></div>
                                                <?php } else {?>
                                                <div class="action" style="color:red">Out of Stock</div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }?>

                                </div>
                            </section>
                        </div>
                        <div class="col-md-6">
                            <section class="section">
                                <h3 class="section-title">Rings</h3>
                                <div class="owl-carousel homepage-owl-carousel custom-carousel outer-top-xs owl-theme"
                                    data-item="2">
                                    <?php
$ret=mysqli_query($con,"select * from products where subCategory=4");
while ($row=mysqli_fetch_array($ret)) 
{
?>
                                    <div class="item item-carousel">
                                        <div class="products">

                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a
                                                            href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><img
                                                                src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"
                                                                data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"
                                                                width="300" height="250"></a>
                                                    </div><!-- /.image -->
                                                </div><!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a
                                                            href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    <div class="product-price">
                                                        <span class="price">
                                                            Rs .<?php echo htmlentities($row['productPrice']);?> </span>
                                                        <span
                                                            class="price-before-discount">Rs.<?php echo htmlentities($row['productPriceBeforeDiscount']);?></span>

                                                    </div>
                                                </div>
                                                <?php if($row['productAvailability']=='In Stock'){?>
                                                <div class="action"><a
                                                        href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>"
                                                        class="lnk btn btn-primary">Add to Cart</a></div>
                                                <?php } else {?>
                                                <div class="action" style="color:red">Out of Stock</div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }?>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <!-- ============================================== TABS : END ============================================== -->
                <section class="section featured-product inner-xs wow fadeInUp">
                    <h3 class="section-title">Chains</h3>
                    <div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs" id="chains">
                        <?php
$ret=mysqli_query($con,"select * from products where subcategory=3");
while ($row=mysqli_fetch_array($ret)) 
{
?>
                        <div class="item">
                            <div class="products">
                                <div class="product">
                                    <div class="product-micro">
                                        <div class="row product-micro-row">
                                            <div class="col col-xs-6">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"
                                                            data-lightbox="image-1"
                                                            data-title="<?php echo htmlentities($row['productName']);?>">
                                                            <img data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"
                                                                width="170" height="174" alt="">
                                                            <div class="zoom-overlay"></div>
                                                        </a>
                                                    </div><!-- /.image -->
                                                </div><!-- /.product-image -->
                                            </div><!-- /.col -->
                                            <div class="col col-xs-6">
                                                <div class="product-info">
                                                    <h3 class="name"><a
                                                            href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="product-price">
                                                        <span class="price">
                                                            Rs. <?php echo htmlentities($row['productPrice']);?>
                                                        </span>
                                                    </div><!-- /.product-price -->
                                                    <?php if($row['productAvailability']=='In Stock'){?>
                                                    <div class="action"><a
                                                            href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>"
                                                            class="lnk btn btn-primary" style="margin:0;">Add to Cart</a></div>
                                                    <?php } else {?>
                                                    <div class="action" style="color:red">Out of Stock</div>
                                                    <?php } ?>
                                                </div>
                                            </div><!-- /.col -->
                                        </div><!-- /.product-micro-row -->
                                    </div><!-- /.product-micro -->
                                </div>
                            </div>
                        </div><?php } ?>
                    </div>
                </section>
            </div>
        </div>

        <?php include('includes/footer.php');?>

        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/echo.min.js"></script>
        <script src="assets/js/jquery.easing-1.3.min.js"></script>
        <script src="assets/js/bootstrap-slider.min.js"></script>
        <script src="assets/js/jquery.rateit.min.js"></script>
        <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
        <script src="assets/js/bootstrap-select.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/scripts.js"></script>

</body>

</html>