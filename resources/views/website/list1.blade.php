@extends('main')
@section('content')
<div class="jumbotron" style="padding-top: 20px;padding-bottom: 20px;">
	<div class="container">
		<div class="col-md-10">
			<div class=""><b>List1</b></div>
		</div>
		<div class="col-md-2">
			<div class=""><a href="#" style="color: black;"><b>Home</b></a>&nbsp;&nbsp;&nbsp;<b>></b>&nbsp;&nbsp;&nbsp;<a href="#" style="color: black;"><b>List1</b></a></div>
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
			<code style="padding:0px; "><h4>Found {{count($lsp)}} products</h4></code>
		</div>
			@foreach ($lsp as $key => $sp)
			<div class=" col-md-4 ">
				<div class="thumbnail">
					<div class="hover01 column">
						<div>
							<a href="{{route('preview',$sp['id_product'])}}" style="color: black;text-decoration: none;"><img src="{{ asset('uploads')}}/{{$sp->img_product}}" alt="" style="height: 220px;width: 100%;"></a>
						</div>
					</div>

					<div class="caption">
						<a href="{{route('preview',$sp['id_product'])}}" style="color: black;text-decoration: none;"><h3><b>{{$sp->name}}</b></h3></a>
						<p>
							{{$sp->category->name}}
						</p>
						<p class="price-products">
							@if($sp->sale_price==0)
							<b>{{$sp->price}} $</b>
							@else
							<div style="width: 90px;padding-bottom: 20px;"class="price-products">

								<b style="float: left;">{{$sp->sale_price}} $</b>
								<s style="float: right;color: black;">{{$sp->price}} $</s>
							</div>
							@endif
						</p>
					</div>
					<p>
						<a href="{{route('themgiohang2',$sp->id_product)}}" class="btn btn-primary">Add to cart</a>
						<a href="{{route('themship',$sp->id_product)}}" class="btn btn-success">Buy now</a>
					</p>
				</div>
			</div>
			@endforeach
			
		</div>
		<div class="row text-center" >{{$lsp->links()}}</div>
	</div>
	<div class="text-center container" id="featured-products">
			<h2><b>New Products</b></h2>
			<code style="padding:0px; "><h4>Found {{count($sp_khac)}} products</h4></code>
		</div>
	<div class="container">
		<div class="row">
			@foreach ($sp_khac as $khac)
			<div class=" col-md-3 ">
				<div class="thumbnail">
					<div class="hover01 column">
						<div>
							<a href="{{route('preview',$khac['id_product'])}}" style="color: black;text-decoration: none;"><img src="{{ asset('uploads')}}/{{$khac->img_product}}" alt="" style="height: 220px;width: 100%;"></a>
						</div>
					</div>

					<div class="caption">
						<a href="{{route('preview',$khac['id_product'])}}" style="color: black;text-decoration: none;"><h3><b>{{$khac->name}}</b></h3></a>
						<p>
							{{$khac->category->name}}
						</p>
						<p class="price-products">
							@if($khac->sale_price==0)
							<b>{{$khac->price}} $</b>
							@else
							<div style="width: 90px;padding-bottom: 20px;"class="price-products">

								<b style="float: left;">{{$khac->sale_price}} $</b>
								<s style="float: right;color: black;">{{$khac->price}} $</s>
							</div>
							@endif
						</p>
					</div>
					<p>
						<a href="{{route('themgiohang2',$khac->id_product)}}" class="btn btn-primary">Add to cart</a>
						<a href="{{route('themship',$khac->id_product)}}" class="btn btn-success">Buy now</a>
					</p>
				</div>
			</div>
			
			@endforeach
		</div>
		<div class="row text-center" >{{$sp_khac->links()}}</div>
	</div>
</div>
@stop()