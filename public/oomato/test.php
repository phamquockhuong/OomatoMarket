<?php  ?>
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Test Shop</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="animate.css">
	</head>
	<body>
		<div class="container-fluid" >
			<div class="row">
				
				<nav class="navbar navbar-default" role="navigation">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<h4 id="menu5">Welcome to Oomato market online shopping store</h4>
						</div>
				
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse navbar-ex1-collapse">
							
								<div class="row"id="menu3">
									<ul class="nav navbar-nav navbar-right">
										<li><a href="page/contact.php"><span id="menu4">Store locations</span> <i>|</i></a></li>
										<li><a href="page/AboutAs.php"><span id="menu4">Track Your Order</span><i>|</i></a></li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">Us Dollar <span class="caret"> </span></a>
											<ul class="dropdown-menu">
												<li><a href="#"><img src="image/f2.jpg" class="img-responsive" alt="Image"></a></li>
												<li><a href="#"><img src="image/f3.jpg" class="img-responsive" alt="Image"></a></li>
												
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</nav>
					
				</div>
				<div class="container">
					<nav class="navbar navbar-default" role="navigation" style="background: white;border: none;">
					<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						<a href="index.php"><img src="image/Untitled-3.png" style="padding-right: 50px;"></a>
					</div>
					<div class="collapse navbar-collapse navbar-ex1-collapse" id="menu">
						<form class="navbar-form navbar-left" role="search" >
							<div class="form-group">
								<input type="text" class="form-control" placeholder="" size="33">
							</div>
							<button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-search"></i> Search</button>
						</form>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#" style="font-size: 21px;"><i class="glyphicon glyphicon-heart-empty"></i></a></li>
							<li><a href="#" style="font-size: 20px;"><i class="glyphicon glyphicon-shopping-cart"></i></a></li>
							<li class="dropdown">
								<a href="#" id="menu2"  class="dropdown-toggle" data-toggle="dropdown"><button type="button" class="btn btn-success">Login/Sign up</button></a>
								<ul class="dropdown-menu">
									<li><a href="page/login.php">Login</a></li>
									<li><a href="page/signup.php">Logout</a></li>
									<li><a href="#">Acount</a></li>
								</ul>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
					</div>
				</nav>	
				</div>
				
			</div>	
		</div>
		<!-- jQuery -->
		<div class="container-fluid">
			<div id="carousel-id" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carousel-id" data-slide-to="0" class=""></li>
					<li data-target="#carousel-id" data-slide-to="1" class=""></li>
					<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item">
						<img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="image/slide1.jpg"style="width: 100%;">
						<div class="container">
							<div class="carousel-caption">
								<p>If you're viewing this page via a.</p>
								<h1>Example headline.</h1>
								<p>If you're viewing this page via a.</p>
								<p><a class="btn btn-success" href="page/list1.php" role="button">Shop now</a></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" style="width: 100%;" src="image/slide2.jpg">
						<div class="container">
							<div class="carousel-caption">
								<h1>Another example headline.</h1>
								<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
								<p><a class="btn btn-primary" href="page/list2.php" role="button">Learn more</a></p>
							</div>
						</div>
					</div>
					<div class="item active">
						<img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide" style="width: 100%;" src="image/slide3.jpg">
						<div class="container">
							<div class="carousel-caption">
								<h1>One more for good measure.</h1>
								<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
								<p><a class="btn btn-info" href="page/list2.php" role="button">Browse gallery</a></p>
							</div>
						</div>
					</div>
				</div>
				<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
				<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>

		</div>
		<div class="text-center" id="featured-products">
			<h2><b>Featured Products</b></h2>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-3 wow slideInUp">
				<div class="thumbnail">
					<img src="image/ca-rot.jpg" alt="" style="height: 250px;">
					<div class="caption">
						<h3>Carrot</h3>
						<p class="price-products">
							<b>12 $</b>
						</p>
						<p>
							<a href="#" class="btn btn-primary">Add to cart</a>
							<a href="page/preview.php" class="btn btn-success">Buy now</a>
						</p>
					</div>
				</div>
			</div>
		<div class="col-md-3 wow slideInUp">
			<div class="thumbnail">
				<img src="image/chuoi.jpg" alt="" style="height: 250px;">
				<div class="caption">
					<h3>Banana</h3>
					<p class="price-products">
						8 $
					</p>
					<p>
						<a href="#" class="btn btn-primary">Add to cart</a>
						<a href="page/preview.php" class="btn btn-success">Buy now</a>
				</div>
			</div>
		</div>
		<div class="col-md-3 wow slideInUp">
			<div class="thumbnail">
				<img src="image/xa_lach.jpg" alt=""style="height: 250px;">
				<div class="caption">
					<h3>Purple lettuce</h3>
					<p class="price-products">
						11 $
					</p>
					<p>
						<a href="#" class="btn btn-primary">Add to cart</a>
						<a href="page/preview.php" class="btn btn-success">Buy now</a>
					</p>
				</div>
			</div>
		</div>
			<div class="col-md-3 wow slideInUp">
				<div class="thumbnail">
					<img src="image/ogani.jpg" alt=""style="height: 250px;">
					<div class="caption">
						<h3>Orange</h3>
						<p class="price-products">
							17 $
						</p>
						<p>
							<a href="#" class="btn btn-primary">Add to cart</a>
							<a href="page/preview.php" class="btn btn-success">Buy now</a>
						</p>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container"id="banner2">
			<div class="row">
				<div class="col-md-6 wow slideInUp" id="banner5">
					<a href="page/list2.php"><img src="image/banner1.jpg" class="img-responsive" alt="Image" style="width: 100%;"></a>
					<div class="container">
						<div class="carousel-caption">
							<h3></h3>
							<p>Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
							<p><a class="btn btn-info" href="page/list2.php" role="button">Browse gallery</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-6 wow slideInUp" id="banner1">
					
					<div class="col-md-12" >
						<div class="col-md-6"id="banner3">
							<a href="page/list1.php"><img src="image/khô.jpg" class="img-responsive" alt="Image" style="width: 100%;"></a>
							<div class="container"> 
								<div class="carousel-caption" id="banner1">
									<h3></h3>
									<p>Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
									
								</div>
							</div>
						</div>
						<div class="col-md-6"id="banner4">
							<a href="page/list2.php"><img src="image/thit.jpg" class="img-responsive " alt="Image" style="width: 100%;"></a>
							<div class="container">
								<div class="carousel-caption" id="banner1">
									<h3></h3>
									<p>Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
									
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12" id="banner6">
						<a href="page/list1.php"><img src="image/rau-cu-qua-tuoi.jpg" class="img-responsive" alt="Image" style="width: 100%;" ></a>
						<div class="container">
							<div class="carousel-caption"id="banner1">
								<h3></h3>
								<p>Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
								<p><a class="btn btn-success" href="page/list1.php" role="button">Browse gallery</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="text-center" id="featured-products">
			<h2><b>New Products</b></h2>
		</div>
		<div class="container wow slideInUp">
			<div class="row">
				<div class="col-md-3">
				<div class="thumbnail">
					<img src="image/cachua.jpg" alt="" style="height: 250px;">
					<div class="caption">
						<h3>Tomato</h3>
						<p class="price-products">
							<b>6 $</b>
						</p>
						<p>
							<a href="#" class="btn btn-primary">Add to cart</a>
							<a href="page/preview.php" class="btn btn-success">Buy now</a>
						</p>
					</div>
				</div>
			</div>
		<div class="col-md-3">
			<div class="thumbnail">
				<img src="image/ca_product.jpg" alt="" style="height: 250px;">
				<div class="caption">
					<h3>Fresh fish</h3>
					<p class="price-products">
						8 $
					</p>
					<p>
						<a href="#" class="btn btn-primary">Add to cart</a>
						<a href="page/preview.php" class="btn btn-success">Buy now</a>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="thumbnail">
				<img src="image/xa_lach.jpg" alt=""style="height: 250px;">
				<div class="caption">
					<h3>Purple lettuce</h3>
					<p class="price-products">
						11 $
					</p>
					<p>
						<a href="#" class="btn btn-primary">Add to cart</a>
						<a href="page/preview.php" class="btn btn-success">Buy now</a>
					</p>
				</div>
			</div>
		</div>
			<div class="col-md-3">
				<div class="thumbnail">
					<img src="image/thit_bo.jpg" alt=""style="height: 250px;">
					<div class="caption">
						<h3>Beef</h3>
						<p class="price-products">
							23 $
						</p>
						<p>
							<a href="#" class="btn btn-primary">Add to cart</a>
							<a href="page/preview.php" class="btn btn-success">Buy now</a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 wow slideInUp">
				<div class="thumbnail">
					<img src="image/ca-rot.jpg" alt="" style="height: 250px;">
					<div class="caption">
						<h3>Carrot</h3>
						<p class="price-products">
							<b>12 $</b>
						</p>
						<p>
							<a href="#" class="btn btn-primary">Add to cart</a>
							<a href="page/preview.php" class="btn btn-success">Buy now</a>
						</p>
					</div>
				</div>
			</div>
		<div class="col-md-3 wow slideInUp">
			<div class="thumbnail">
				<img src="image/tao.jpg" alt="" style="height: 250px;">
				<div class="caption">
					<h3>Apple</h3>
					<p class="price-products">
						16 $
					</p>
					<p>
						<a href="#" class="btn btn-primary">Add to cart</a>
						<a href="page/preview.php" class="btn btn-success">Buy now</a>
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-3 wow slideInUp">
			<div class="thumbnail">
				<img src="image/nho.jpg" alt=""style="height: 250px;">
				<div class="caption">
					<h3>Grape</h3>
					<p class="price-products">
						21 $
					</p>
					<p>
						<a href="#" class="btn btn-primary">Add to cart</a>
						<a href="page/preview.php" class="btn btn-success">Buy now</a>
					</p>
				</div>
			</div>
		</div>
			<div class="col-md-3 wow slideInUp">
				<div class="thumbnail">
					<img src="image/oc_cho.jpg" alt=""style="height: 250px;">
					<div class="caption">
						<h3>Walnuts</h3>
						<p class="price-products">
							27 $
						</p>
						<p>
							<a href="#" class="btn btn-primary">Add to cart</a>
							<a href="page/preview.php" class="btn btn-success">Buy now</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="text-center  wow slideInUp" id="featured-products">
			<h2><b><a href="page/blog.php"id="title">The Blogs</a></b></h2>
		</div>
	<div class="container-fluid wow slideInUp">
		<div class="row">
			<div class="col-md-4">
				<a href="page/blog_detail.php" class="thumbnail">
					<img src="image/thuc-pham1.jpg" class="img-responsive" alt="Image" id="blog2">
				</a>
				<div class="caption">
					<h3>The method to identify fresh meat</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...
					</p>
				</div>
			</div>
			<div class="col-md-4">
				<a href="page/blog_detail.php" class="thumbnail">
					<img src="image/slide3.jpg" class="img-responsive" alt="Image" id="blog1">
				</a>
				<div class="caption">
					<h3>Fresh fruit juice at home</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...
					</p>
				</div>
			</div>
			<div class="col-md-4">
				<a href="page/blog_detail.php" class="thumbnail">
					<img src="image/blog2.jpg" class="img-responsive" alt="Image" id="blog1">
				</a>
				<div class="caption">
					<h3>Vegetables and fruits nutritious for summer</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...
					</p>
				</div>
			</div>
		</div>
	</div>
	<footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h4 class="heading text-center" id="content_footer">
                                    CONTACTS
                            </h4>
                            <ul>
                                <li><a href="#">8-100-9000-300</a></li>
                                <li><a href="#"> 24 Abohar punjab</a></li>
                                <li><a href="#">Usa,152122</a></li>
                                <li><a href="#">compayni@gmail.com</a></li>
                                <li><a href=""><span></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h4 class="heading text-center" id="content_footer">
                                    OUR CONPAYNI
                            </h4>
                            <ul>
                                <li><a href="#">Our Blog</a></li>
                                <li><a href="#">Seach Page</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Colections</a></li>
                                <li><a href="#">Catelog Page</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h4 class="heading text-center" id="content_footer">
                                    INFORMATIONS
                            </h4>
                            <ul>
                                <li><a href="#">Privancy</a></li>
                                <li><a href="#">FAQs</a></li>
                                <li><a href="#">Login Page</a></li>
                                <li><a href="#">Terms of use</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h4 class="heading text-center" id="content_footer">
                                    CATEGORYS
                            </h4>
                            <ul>
                                <li><a href="#">Fruits</a></li>
                                <li><a href="#">Juice</a></li>
                                 <li><a href="#">Fresh Meat</a></li>
                                <li><a href="#">Vegetables</a></li>
                                <li><a href="#">Other Products</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-12 col-lg-4">
                        <div class="footer_widget">
                            <h4 class="heading" id="content_footer">
                                    @OMATO MARKET
                            </h4>
                            <p class="offer_text" >You can trust us. we only send promo offers,</p>
                            <form action="#" id="content_footer">
                                <input style="color: black;" type="text" placeholder="Your email address">
                                <button type="submit"style="background: black;"> <i class="glyphicon glyphicon-send"></i> </button>
                            </form>
                            	<li id="pay"><a href="#"><img src="image/Untitled-1.png" class="img-responsive" alt="Image"></a></li>
                        		<li id="pay"><a href="#"><img src="image/Untitled-2.png" class="img-responsive" alt="Image"></a></li>
                        		<li id="pay"><a href="#"><img src="image/Untitled-4.png" class="img-responsive" alt="Image"></a></li>
                        		<li id="pay"><a href="#"><img src="image/Untitled-5.png" class="img-responsive" alt="Image"></a></li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-md-12 col-lg-8">
                        <div class="copyright text-right">
                                <p class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

                        </div>
                        
                    </div>
                    
            					
                       
                </div>
            </div>
        </div>
    </footer>
    	<script src="owlcarousel/owl.carousel.min.js" ></script>
		<script src="jquery/jquery-3.4.1.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="bootstrap/js/bootstrap.js"></script>
		<script src="js_lib/wow.min.js"></script>
		<script>
         	new WOW().init();
    	</script>
	</body>
		<!-- jQuery -->
		
		<!-- Bootstrap JavaScript -->
</html>