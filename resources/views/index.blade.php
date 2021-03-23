@extends('main')
@section('content')
		<!-- jQuery -->
		<div class="container-fluid">
			<div class="row">
				<div id="carousel-id" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carousel-id" data-slide-to="0" class="active"></li>
						@foreach($slide_all as $sli)
							<li data-target="#carousel-id" data-slide-to="{{$loop->index+1}}" class=""></li>
						@endforeach
					</ol>
					<div class="carousel-inner">
						@foreach($slide_all as $key => $slide)
							@if($key == 0)
								<div class="item active">
									<img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="{{ asset('upload')}}/{{$slide->img_slide}}"style="width: 100%;height:auto;">
									<div class="container">
										<div class="carousel-caption">
											
											<h1>{{$slide->name_slide}}.</h1>
											<p>{{$slide->content_slide}}.</p>
											
											@foreach ($loai_sp as $key => $loai)
												@if($key == 0)<p>Nullam id dolor id nibh ultricies vehicula ut id {{ $loai->name }}.</p>
												<a class="btn btn-success" href="{{route('list2',$loai->id_cate)}}">Shop now</a>
												@endif
											@endforeach
										</div>
									</div>
								</div>
							@else
								<div class="item">
									<img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="{{ asset('upload')}}/{{$slide->img_slide}}"style="width: 100%;height:auto;">
									<div class="container">
										<div class="carousel-caption" >
											<h1>{{$slide->name_slide}}.</h1>
											<p>{{$slide->content_slide}}.</p>
											
											@foreach ($loai_sp as $key => $loai)
												@if($key == 1)
												
												<p><a class="btn btn-primary" href="{{route('list3',$loai->id_cate)}}" role="button">Learn more</a></p>
												
												@endif
											@endforeach
										</div>
									</div>
								</div>
							@endif
						 @endforeach
						
					</div>
					<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
					<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
				</div>
			</div>
		</div>
		<div class="text-center container" id="featured-products">
			<h2><b>New Products</b></h2>
			<code style="padding:0px; "><h4>Found {{count($new)}} products</h4></code>
		</div>
		<div class="container">
			<div class="row">
				<div class="owl-carousel owl-theme col-md-12">
					
				    @foreach($new as $value)
					    <div class="item">
					    	<div class="col-md-3" style="width: 100%;">
					    		<div class="thumbnail" style="position: relative;">
									<a href="{{route('preview',$value['id_product'])}}"><img src="{{ asset('uploads')}}/{{$value->img_product}}" alt="" style="height: 210px;width: 100%;"></a>
									@if($value->sale_price==0)
									
									@else
									<div style="position:  absolute;background:#f60;  top: 7px;left: 7px;"> &nbsp;<span style="color: white;">Sale</span>&nbsp;
									</div>
									@endif
									<div class="caption">
										<a href="{{route('preview',$value['id_product'])}}" style="color: black;text-decoration: none;"><h3>{{$value->name}}</h3></a>
										<p class="price-products">
											@if($value->sale_price==0)
											<b>{{$value->price}} $</b>
											@else
											<div style="width: 90px;padding-bottom: 20px;"class="price-products">
												
												<b style="float: left;">{{$value->sale_price}} $</b>
												<s style="float: right;color: black;">{{$value->price}} $</s>
											</div>
											@endif
										</p>
										<p style="width: 100%;s">
											<a href="{{route('themgiohang2',$value->id_product)}}" class="btn btn-primary">Add to cart</a>

											<a href="{{route('themship',$value->id_product)}}" class="btn btn-success">Buy now</a>
										</p>
									</div>
								</div>
					    	</div>
					    </div>
				    @endforeach
				</div>
			</div>
		</div>
		<div class="container"id="banner2">
			<div class="row">
				<div class="col-md-6 wow slideInUp" id="banner5">
					<a href="{{route('list2')}}"><img src="{{url('public')}}/oomato/image/banner1.jpg" class="img-responsive" alt="Image" style="width: 100%;"></a>
					<div class="container">
						<div class="carousel-caption" >
							<h3>Sale off 30%</h3>
							
							@foreach ($loai_sp as $key => $loai)
								@if($key == 0)<p>Nullam id dolor id nibh ultricies vehicula ut id {{ $loai->name }}.</p>
								<a class="btn btn-info" href="{{route('list2',$loai->id_cate)}}">Shop now</a>
								@endif
							@endforeach
						</div>
					</div>
				</div>
				<div class="col-md-6 wow slideInUp" id="banner1">
					
					<div class="col-md-12" >
						<div class="col-md-6"id="banner3">
							<a href="{{route('list1')}}"><img src="{{url('public')}}/oomato/image/khô.jpg" class="img-responsive" alt="Image" style="width: 100%;"></a>
							<div class="container"> 
								<div class="carousel-caption" id="banner1">	
									@foreach ($loai_sp as $key => $loai)
										@if($key == 3)
										<a  href="{{route('list3',$loai->id_cate)}}"><h3>{{ $loai->name }}</h3></a>
										<a  href="{{route('list3',$loai->id_cate)}}">Nullam id dolor id nibh ultricies {{ $loai->name }}.
										@endif
									@endforeach
								</div>
							</div>
						</div>
						<div class="col-md-6"id="banner4">
							<a href="{{route('list2')}}"><img src="{{url('public')}}/oomato/image/thit.jpg" class="img-responsive " alt="Image" style="width: 100%;"></a>
							<div class="container">
								<div class="carousel-caption" id="banner1">
									<h3></h3>
									
									@foreach ($loai_sp as $key => $loai)
										@if($key == 2)
										<a href="{{route('list3',$loai->id_cate)}}"><p>Nullam id dolor id nibh ultricies vehicula ut id {{ $loai->name }}.</p></a>
										@endif
									@endforeach
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12" id="banner6">
						<a href="{{route('list1')}}"><img src="{{url('public')}}/oomato/image/rau-cu-qua-tuoi.jpg" class="img-responsive" alt="Image" style="width: 100%;" ></a>
						<div class="container">
							<div class="carousel-caption"id="banner1">
								
								
								@foreach ($loai_sp as $key => $loai)

										@if($key == 1)
										<h3> {{ $loai->name }}</h3>
										<p>Nullam id dolor id nibh ultricies vehicula ut id {{ $loai->name }}.</p>
										<a class="btn btn-success" href="{{route('list2',$loai->id_cate)}}">Shop now</a>

				
										@endif
									@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="text-center" id="featured-products">
			<h2><b>Sale Products</b></h2>
			<code style="padding:0px; "><h4>Found {{count($sale)}} products</h4></code>
		</div>
		<div class="container wow slideInUp">
			<div class="row">
				@foreach($sale as $km)
				<div class="col-md-3">
					<div class="thumbnail"  style="position: relative;">
						
						<a href="{{route('preview',$km['id_product'])}}" style="color: black;text-decoration: none;"><img src="{{ asset('uploads')}}/{{$km->img_product}}" alt="" style="height: 220px;width: 100%;"></a>
						@if($km->sale_price==0)
									
									@else
									<div style="position:  absolute;background:#f60;  top: 7px;left: 7px;"> &nbsp;<span style="color: white;">Sale</span>&nbsp;
									</div>
									@endif
						<div class="caption">
							
							<a href="{{route('preview',$km['id_product'])}}" style="color: black;text-decoration: none;"><h3>{{$km->name}}</h3></a>
								<p class="price-products">
									@if($km->sale_price==0)
									<b>{{$km->price}} $</b>
									@else
									<div style="width: 90px;padding-bottom: 20px;"class="price-products">
										
										<b style="float: left;">{{$km->sale_price}} $</b>
										<s style="float: right;color: black;">{{$km->price}} $</s>
									</div>
									@endif
								</p>
							
							<p>
								<a href="{{route('themgiohang2',$km->id_product)}}" class="btn btn-primary">Add to cart</a>
								<a href="{{route('themship',$km->id_product)}}" class="btn btn-success">Buy now</a>
							</p>
						</div>
					</div>
				</div>
				@endforeach
			</div>
			<div class="row text-center" >{{$sale->links()}}</div>
		</div>
	<div class="text-center  wow slideInUp" id="featured-products">
			<h2><b><a href="{{route('blog')}}"id="title">The Blogs</a></b></h2>
			<code style="padding:0px; "><h4>Found {{count($blog_all)}} posts</h4></code>
	</div>
	<div class="container-fluid wow slideInUp">
		<div class="row">
		@foreach($blog_all as $blog)	
			<div class="col-md-4">
				<a href="{{route('blog_detail',$blog->id_blog)}}" class="thumbnail">
					<img src="{{ asset('upload')}}/{{$blog->img_blog}}" alt="" class="img-responsive" alt="Image" id="blog2">
				</a>
				<div class="caption">
            			
					<h3> <a style="color: black;text-decoration: none;" href="{{route('blog_detail',$blog->id_blog)}}" >&nbsp;{{$blog->name}}</a></h3>						
					<p class="test2" style="width: 455px; padding-left: 5px;">
						{{$blog->description}}
					</p>
				</div>
			</div>
		@endforeach	
		</div>
		<div class="row text-center" >{{$blog_all->links()}}</div>
	</div>
@stop()
