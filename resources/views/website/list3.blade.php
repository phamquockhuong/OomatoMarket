@extends('main')
@section('content')
<div class="jumbotron" style="padding-top: 20px;padding-bottom: 20px;">
	<div class="container">
		<div class="col-md-10">
			<div class=""><b>List1</b></div>
		</div>
		<div class="col-md-2">
			<div class=""><a href="#" style="color: black;"><b>Home</b></a>&nbsp;&nbsp;&nbsp;<b>></b>&nbsp;&nbsp;&nbsp;<a href="#" style="color: black;"><b>List3</b></a></div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row" style="padding-top: 50px;">
		<div class="col-md-3">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h3>Nut Exotic</h3>
				</div>
				<div class="panel-body">
					

					<ul class="list-group">


						@foreach ($loai_sp as $key => $loai)

						<li class="list-group-item"><a style="color: black;" href="{{route('list1', $loai->id_cate)}}">{{ $loai->name }}</a><span class="badge">{{ count($loai->count_pro) }}</span></li>
						@endforeach 


					</ul>

				</div>
			</div>
		</div>
		<div class="col-md-9">
			<div class="text-center" style="padding-bottom: 7px;">
			<h2 style="margin-top: 0px;"><b>New Products</b></h2>
			<code style="padding:0px; "><h4>Found {{count($lspdb)}} products</h4></code>
		</div>
			<div class="row">
				@foreach($lspdb as $km)
				<div class="col-md-4">
					<div class="thumbnail"  style="position: relative;">
						
						<a href="{{route('preview',$km['id_product'])}}" style="color: black;text-decoration: none;"><img src="{{ asset('uploads')}}/{{$km->img_product}}" alt="" style="height: 220px;width: 100%;"></a>
						@if($km->sale_price==0)
									
									@else
									<div style="position:  absolute;background:#f60;  top: 7px;left: 7px;"> &nbsp;<span style="color: white;">Sale</span>&nbsp;
									</div>
									@endif
						<div class="caption">
							
							<a href="{{route('preview',$km['id_product'])}}" style="color: black;text-decoration: none;"><h3><b>{{$km->name}}</b></h3></a>
							<p>
							{{$km->category->name}}
						</p>
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
								<a href="{{route('themgiohang',$km->id_product)}}" class="btn btn-primary">Add to cart</a>
								<a href="{{route('themship',$km->id_product)}}" class="btn btn-success">Buy now</a>
							</p>
						</div>
					</div>
				</div>
				@endforeach
			</div>
			
		</div>
		<div class="row text-center" >{{$lspdb->links()}}</div>
	</div>
	<div class="text-center container" id="featured-products">
			<h2><b>New Products</b></h2>
			<code style="padding:0px; "><h4>Found {{count($sp_khac)}} products</h4></code>
		</div>
	<div class="container">
		<div class="row">
				@foreach($sp_khac as $km)
				<div class="col-md-3">
					<div class="thumbnail"  style="position: relative;">
						
						<a href="{{route('preview',$km['id_product'])}}" style="color: black;text-decoration: none;"><img src="{{ asset('uploads')}}/{{$km->img_product}}" alt="" style="height: 220px;width: 100%;"></a>
						@if($km->sale_price==0)
									
									@else
									<div style="position:  absolute;background:#f60;  top: 7px;left: 7px;"> &nbsp;<span style="color: white;">Sale</span>&nbsp;
									</div>
									@endif
						<div class="caption">
							
							<a href="{{route('preview',$km['id_product'])}}" style="color: black;text-decoration: none;"><h3><b>{{$km->name}}</b></h3></a>
							<p>
							{{$km->category->name}}
						</p>
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
								<a href="{{route('themgiohang',$km->id_product)}}" class="btn btn-primary">Add to cart</a>
								<a href="{{route('themship',$km->id_product)}}" class="btn btn-success">Buy now</a>
							</p>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		<div class="row text-center" >{{$sp_khac->links()}}</div>
	</div>
</div>
@stop()