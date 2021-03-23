
<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Oomato Market</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{url('public')}}/oomato/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{url('public')}}/oomato/css/style.css">
	<link rel="stylesheet" href="{{url('public')}}/oomato/css/css.css">
	<link rel="stylesheet" type="text/css" href="{{url('public')}}/oomato/animate.css">
	<link rel="stylesheet" href="{{url('public')}}/oomato/owlcarousel/css/owl.carousel.min.css">
	<link rel="stylesheet" href="{{url('public')}}/oomato/owlcarousel/css/owl.theme.default.min.css">
	<style>
		.test {

			max-width: 500px;
			overflow: hidden;
			text-overflow: ellipsis;
			line-height: 25px;
			-webkit-line-clamp: 2;
			height: 150px;
			display: -webkit-box;
			-webkit-box-orient: vertical;


		}
		.test:hover {
			overflow: visible;
			white-space: pre-line;
			max-width: 500px;
		}
		.test2 {

			width: 500px;
			overflow: hidden;
			text-overflow: ellipsis;
			line-height: 25px;
			-webkit-line-clamp: 2;
			height: 100px;
			display: -webkit-box;
			-webkit-box-orient: vertical;


		}
		.test2:hover {
			overflow: visible;
			white-space: pre-line;
			width: 500px;
		}
	</style>
</head>
<body class="responsive">
	<div class="container-fluid" >
		<div class="row">
			<div class="col-lg-6 text-center"> 
				<h4 id="menu5">Welcome to Oomato market online shopping store</h4>
			</div>
			<div class="col-lg-1"></div>
			<div class="col-lg-5 te">
				<div class="col-md-12 text-center">	
					<div class="row text-center"id="menu3">
						<ul class="nav navbar-nav navbar">
							<li><a href="{{ route('store') }}"  style="color: black;"><span id="menu4">Store locations</span> <i>|</i></a></li>
							<li><a href="{{ route('shiping') }}"  style="color: black;"><span id="menu4">Track Your Order</span><i>|</i></a></li>
							<li style="padding-top: 12px;"><span class="glyphicon glyphicon-phone-alt"> 0984941113</span></li>
						</ul>
					</div>
				</div>	
			</div>


		</div>
		<div class="container">
			<nav class="navbar navbar-default container-fluid" role="navigation" style="background: white;border: none;">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header ">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="{{route('index')}}"><img src="{{url('public')}}/oomato/image/Untitled-3.png" style="padding-right: 50px;"></a>
					</div>
					<div class="collapse navbar-collapse navbar-ex1-collapse" id="menu">
						<form class="navbar-form navbar-left" method="get" role="search" action="{{route('search')}}">
							<div class="form-group">
								<input type="text" class="form-control" name="key" placeholder="" size="33">
							</div>
							<button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-search"></i> Search</button>
						</form>
						<ul class="nav navbar-nav navbar-right">
							
							<li class="dropdown">
								<a href="#" id="cart" style="font-size: 23px;" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-shopping-cart"><span style="font-size: 15px; color: red;">(<b>{{$cart->totalQty}}</b>)</span></i></a>
								<ul class="dropdown-menu" style="background: #faf0e8;">
									<li style="width: 300px;">

										<div class="cart" id="cart-media">
											
											<div class="beta-dropdown cart-body">

												@if(count($cart->items))
												@foreach($cart->items as $product)
												<div class="cart-item" style="padding-left: 20px;">
													<a class="cart-item-delete" href=""><i class="fa fa-times"></i></a>
													<div class="media" >
														<a class="pull-left" href="{{route('preview',$product['id_product'])}}"><img src="{{ asset('uploads')}}/{{$product['img_product']}}" alt="" style="width: 70px;"></a>
														
														<div class="media-body" style="max-width: 500px;">
															<div class="col-lg-10" style="padding-right: 0px;">
																<span class="cart-item-title">{{$product['name']}}</span> :
																<span class="cart-item-amount">{{$cart->getPriceById($product['id_product'])}} $</span>
															</div>
															<div class="col-lg-2"  style="padding-left: 0px;">
																<a style="color: black;" href="{{route('xoagiohang',($product['id_product']))}}"><span class="glyphicon glyphicon-remove"></span></a>
															</div>
															<div class="col-lg-12" id="sll">
																Amount : {{$product['quantity'] }}
															</div>
														</div>
														
													</div>
												</div>
												@endforeach
												<div class="col-lg-12" style="padding-top: 20px;padding-bottom:10px; ">
													<div class="col-lg-6 text-center">
														<a href="{{route('xoahetgiohang',($product['id_product']))}}" style="color: black;text-decoration: none;"><b class="label label-danger">Clear</b></a>
													</div>

													<div class="col-lg-6 text-center">
														<a href="{{route('shiping')}}" class="beta-btn primary " style="color: black;text-decoration: none;"><b class="label label-info"> Order </b><i class="fa fa-chevron-right"></i></a>
													</div>
													
												</div>

												<div class="cart-caption" style="max-width: 180px;padding-left: 10px;padding-top: 20px;">
													<div class="cart-total text-right">Total: <span class="cart-total-value">{{number_format($cart->totalPrice)}} $</span></div>
													
												</div>

												@endif
											</div>
										</div> <!-- .cart -->
										
									</li>
									
									<li style="padding-bottom:0px;"><a href="{{route('cart')}}" ><button type="button" class="btn btn-warning" style="width: 100%;">View Cart</button></a></li>

									<li><a href="{{route('ship')}}"><button type="button" style="width: 100%;" class="btn btn-success">Check Out</button></a></li>

								</ul>
							</li>

							<li class="dropdown">
                                @if(Auth::check()) 
                                <a href="#" id="menu2"  class="dropdown-toggle" data-toggle="dropdown"><button type="button" class="btn btn-success">{{Auth::user()->name}} </button></a>
                                <ul class="dropdown-menu">
                                    <li></li>
                                    <li class="text-center"><a href="{{route('logout')}}"><b>Logout</b></a></li>
                                    <li class="text-center"><a href="{{route('profile',Auth::user()->id)}}"><b>Profile</b></a></li>
                                   <li class="text-center"><a href="{{route('adminadmin.index')}}"><b>Admin</b></a></li>
                                </ul>
                                @else
                                <a href="#" id="menu2"  class="dropdown-toggle" data-toggle="dropdown"><button type="button" class="btn btn-success">Login/Register</button></a>
                                <ul class="dropdown-menu">
                                    <li class="text-center"><a href="{{route('login')}}"><b>Login</b></a></li>
                                    <li class="text-center"><a href="{{route('register')}}"><b>Register</b></a></li>
                                </ul>
                                @endif
                            </li>
						
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>
			<div id="navbar1" class="navbar-collapse collapse container">
				<ul class="nav navbar-nav" style="font-size: 18px;margin-left: 45px;">
					<li><a style="padding-right: 65px;color: black;" href="{{route('index')}}">Home</a></li>
					<li class="dropdown">
						<a style="padding-right: 65px;color: black;" href="#" class="dropdown-toggle" data-toggle="dropdown">Category <b class="caret"></b></a>
						<ul class="dropdown-menu">
							@foreach ($loai_sp as $key => $loai)
								<li><a style="padding-right: 65px;color: black;" href="{{route('list1', $loai->id_cate)}}">{{ $loai->name }}</a></li>
							@endforeach 
							
							


						</ul>
					</li>
					<li><a style="padding-right: 65px;color: black;" href="{{route('FAQ')}}">FAQ</a></li>
					<li><a style="padding-right: 65px;color: black;" href="{{route('introduct')}}">Introduce</a></li>
					<li><a style="padding-right: 65px;color: black;" href="{{route('about')}}">About us</a></li>
					<li><a style="padding-right: 65px;color: black;" href="{{route('blog')}}">Blogs</a></li>
					<li><a style="padding-right: 65px;color: black;" href="{{route('contact')}}">Contact us</a></li>


				</ul>
			</div>

		</div>	
		
		<!-- jQuery -->
		@yield('content')
		
		<footer class="footer  wow slideInUp">
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-xl-2 col-md-6 col-lg-2">
							<div class="footer_widget">
								<h4 class="heading" id="content_footer" style="padding-left: 38px;">
									CONTACTS
								</h4>
								<ul>
									<li>8-100-9000-300</li>
									<li> 24 Abohar punjab</li>
									<li>Usa,152122</a></li>
									<li>compayni@gmail.com</li>
									<li><span></span></li>
								</ul>
							</div>
						</div>
						<div class="col-xl-2 col-md-6 col-lg-2">
							<div class="footer_widget">
								<h4 class="heading" id="content_footer"style="padding-left: 38px;">
									COMPAYNI
								</h4>
								<ul>
									<li class="dropdown">
										<a style="color: white;" href="#" class="dropdown-toggle" data-toggle="dropdown">Category <b class="caret"></b></a>
										<ul class="dropdown-menu">
											@foreach ($loai_sp as $key => $loai)
											<li><a style="color: black;" href="{{route('list1', $loai->id_cate)}}">{{ $loai->name }}</a></li>
											@endforeach 
										</ul>
									</li>

									<li><a href="{{ route('blog') }}">Our Blog</a></li>
									
									<li><a href="{{ route('about') }}">About Us</a></li>
									<li><a href="{{ route('contact') }}">Contact Us</a></li>
									<li><a href="">Colections</a></li>
			
								</ul>
							</div>
						</div>
						<div class="col-xl-2 col-md-6 col-lg-2">
							<div class="footer_widget">
								<h4 class="heading" id="content_footer"style="padding-left: 38px;">
									INFORMATIONS
								</h4>
								<ul>
									<li><a href="#  page/FAQ.php">Store locations </a></li>
									@if(Auth::check()) 
									<li><a href="{{route('logout')}}">Logout Page</a></li>
									<li><a href="{{route('profile',Auth::user()->id)}}">Profile</a></li>
									@else
									<li><a href="{{route('login')}}">Login</a></li>
                                    <li><a href="{{route('register')}}">Register</a></li>
									@endif
									<li><a href="{{'introduct'}}">Introduct</a></li>
								</ul>
							</div>
						</div>
						<div class="col-xl-2 col-md-6 col-lg-2">
							<div class="footer_widget">
								<h4 class="heading" id="content_footer"style="padding-left: 38px;">
									CATEGORY
								</h4>
								<ul>
									<li>
										<ul class="list-group">
											@foreach ($loai_sp as $key => $loai)
											<li class="list-group-item" style="padding-bottom:0px;padding-left:0px;background: black;border: none;"><a style="color: white;" href="{{route('list1', $loai->id_cate)}}">{{ $loai->name }}</a><span class="badge">{{ count($loai->count_pro) }}</span></li>
											@endforeach 
										</ul>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-xl-4 col-md-12 col-lg-4">
							<div class="footer_widget" id="footer_widget">
								<h4 class="heading" id="content_footer">
									@OMATO MARKET
								</h4>
								<p class="offer_text" >You can trust us. we only send promo offers,</p>
								
								<form action="{{route('adminpromotion.store')}}" id="content_footer" method="POST" role="form">
									@csrf
									<input style="color: black;" name="name_km" type="email" placeholder="Your email address">
									<button type="submit"style="background: black;"> <i class="glyphicon glyphicon-send"></i> </button>
									 <div style="color: red">
                     @if($errors->has('name_km'))
                     {{$errors->first('name_km')}}
                   @endif
                 </div>
									
								</form>

								
								<li id="pay"><a href="#"><img src="{{url('public')}}/oomato/image/Untitled-1.png" class="img-responsive" alt="Image"></a></li>
								<li id="pay"><a href="#"><img src="{{url('public')}}/oomato/image/Untitled-2.png" class="img-responsive" alt="Image"></a></li>
								<li id="pay"><a href="#"><img src="{{url('public')}}/oomato/image/Untitled-4.png" class="img-responsive" alt="Image"></a></li>
								<li id="pay"><a href="#"><img src="{{url('public')}}/oomato/image/Untitled-5.png" class="img-responsive" alt="Image"></a></li>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="container ">
					<div class="row align-items-center">
						<div class="col-xl-7 col-md-12 col-lg-8">
							<div class="copyright text-centers">
								<p class="footer-text" style="float: right;"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
									Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
									<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

								</div>

							</div>



						</div>
					</div>
				</div>
			</footer>
			<script src="{{url('public')}}/oomato/jquery/jquery-3.4.1.min.js"></script>

			<script src="{{url('public')}}/oomato/owlcarousel/js/owl.carousel.js"></script>
			<!-- Bootstrap JavaScript -->
			<script src="{{url('public')}}/oomato/bootstrap/js/bootstrap.js"></script>
			<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
			<script>
				$(document).ready(function(){
					$('.owl-carousel').owlCarousel({
						loop:true,
						margin:10,
						nav:true,
						responsive:{
							0:{
								items:1
							},
							600:{
								items:4
							},

						}
					});
				})

			</script>
			<script src="js_lib/wow.min.js"></script>
			<script>
				new WOW().init();
			</script>
			<script>
				$('.changeQuantity').click(function () {
					var action = $(this).data('action');
					if (action == "plus") {
						if ($(this).prev().val() < 100) {
							$(this).prev().val(+$(this).prev().val() + 1);
						}
					}else{
						if ($(this).next().val() > 1) {
							$(this).next().val(+$(this).next().val() - 1);
						}
					}
					
					
					var data_pro = $(this).data('pro')
					var numberProCurrent = $('#'+data_pro).val();
					var id_pro = data_pro.split('input_')[1];

					$.ajax({
						type:'GET',
						url:'add-to-cart/'+id_pro,
						data:{
							quantity:parseInt(numberProCurrent)
						},
						success:function(res){
							$('#cart span').load('http://localhost/oomato_market/cart #cart span');
							$('#cart-media ').load('http://localhost/oomato_market/cart #cart-media ');
							$('.'+data_pro).html(res);
							

							$('.cart-total-value').load('http://localhost/oomato_market/cart .cart-total-value');
							
							$('.shiph').load('http://localhost/oomato_market/cart .shiph');
							$('.ttt').load('http://localhost/oomato_market/cart .ttt');
							$('.tt').load('http://localhost/oomato_market/cart .tt');
							
						}
					});
					
				});
				
			</script>

		</body>
		</html>