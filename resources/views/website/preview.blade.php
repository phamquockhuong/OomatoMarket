@extends('main')
@section('content')
<div class="container" id="banner2">
	
 	<div class="row content" >
  		<div class="col-md-6">
  			
		    <div class="col-md-12 ">
		      <div class="thumbnail">
		      	<img src="{{ asset('uploads')}}/{{$pro->img_product}}" style="height: auto;width: 100%;">
		      </div>
		  	</div>
		  	<div class="row">
				<div class="owl-carousel owl-theme col-md-12">
					
				   @foreach ($pro->listimage as $key => $value)
					    <div class="item">
					    	<div class="col-md-12" style="width: 100%; padding: 0px;">
					    		<a href=""><img src="{{ asset('uploads')}}/{{$value->image}}" class="img-responsive " alt="Image" style="max-height: 110px;width: 200px;"></a>
					    	</div>
					    </div>
				    @endforeach
				</div>
			</div>
	  	</div>

  		<div class="col-md-6" >
  			<div class="col-md-12" style="padding-left: 30px;">
  				<h3 ><b>{{$pro->name}}</b></h3>
  					<div><p><h3>
  						<p class="price-products">
							@if($pro->sale_price==0)
							<span>{{$pro->price}} $</span>
							@else
							<div style="width: 150px;padding-bottom: 20px;"class="price-products">
								
								<span style="float: left;padding-right: 20px;">{{$pro->sale_price}} $</span>
								<s style="float: right;color: black;"><h4> {{$pro->price}} $</h4></s>
							</div>
							@endif
						</p>
  					</h3></p></div><br>
					<div>
						<p><h5><b>Category:  <i class="price-products">{{$pro->category->name}}</i></b></h5></p>
					</div>
					<br>
					
					<div>
						<b style="font-size:18px;">Amount :</b> <span style="font-size: 18px;">{{$pro->amount}}</span>
						
						
					</div>
					
					<div style="padding-top: 20px;">
						<a href="{{route('themgiohang2',$pro->id_product)}}" class="btn btn-success"style="border-radius: 20px;padding-top: 8px; ">ADD TO CART <i class="glyphicon glyphicon-shopping-cart" style="margin-left: 3px"></i></a>
						<a href="{{route('themship',$pro->id_product)}}" class="btn btn-primary"style="border-radius: 20px;padding-top: 8px; ">BUY NOW<i class="glyphicon glyphicon-plus" style="margin-left: 10px"></i></a>
					</div>
					<div class="col-md-12" style="padding-left: 0px;">
						<div style="padding:15px; "><h3 style="padding-bottom:10px;padding-left: 0px;">Commitment</h3></div>
						<div class="col-lg-4" style="padding-top: 10px;padding-left: 0px;">
							<a href="#" class="btn btn-success" style="border-radius: 20px;  color: black; background-color: white;">100% genuine goods</a>
						</div>
						<div class="col-lg-5"  style="padding-top: 10px;padding-left: 0px;">
							<a href="#" class="btn btn-success" style="border-radius: 20px;  color: black; background-color: white;">Support return and exchange</a>
						</div>
						<div class="col-lg-3"  style="padding-top: 10px;padding-left: 0px;">
							<a href="#" class="btn btn-success" style="border-radius: 20px;  color: black; background-color: white;">Free shipping</a>
						</div>
					</div>
			</div>
		</div>
	</div>
</div><br>
	<div class="container thumbnail">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home"  style="color: black;"><b>Desciption</b></a></li>
    <li><a data-toggle="tab" href="#menu1" style="color: black;"><b>Review</b></a></li>
  </ul>

  <div class="tab-content" style="padding-left: 15px;">
    <div id="home" class="tab-pane fade in active">
      <h3>Product Desciption</h3>
      <p>{{$pro->title}}.</p>
		<h4><b>Features</b></h4>
						<ul>
							@foreach ($features as $key => $fe)
								<li style="list-style: none;"><i class="glyphicon glyphicon-ok-circle" style="margin-right: 10px"></i>{{$fe->name}}</li><br>
							@endforeach
							<div class="text-center">{{$features->links()}}</div>
						</ul>
    </div>
    <div id="menu1" class="tab-pane fade">
		<div class="col-md-12">
			    <div class="">
			            <div class="">
			                 <h3>Review</h3>
			            </div>
			            <div class="panel-body">
						@foreach($comments as $comm)
			                <div class="col-md-12"id="blog3" >
			                    <div class="col-md-2 " style="padding:0px;">
			                        <div class="col-md-12" style="padding-bottom: 20px;padding-right: 0px;">
			                            <img src="{{ asset('uploads')}}/{{$comm->user->img_users}}" class="img-circle" alt="Cinque Terre" style="width: 90px;">
			                            
			                        </div>
			                       
			                    </div>
			                    <div class="col-md-10" style="padding-left:0px;">
			                        <div class="col-md-8" style="width: 100%;padding-left:0px;">

			                        	
			                            <h3 style="margin:0 ">{{$comm->user->name}}</h3><p><small>{{$comm->created_at}}</small></p>
			                            <p style="font-size: 17px;">{{$comm->com_content}}.</p>
										@if(Auth::check())
							                @if($comm->id == Auth::user()->id)
							                <form action="{{route('admincomment.destroy',$comm->com_id)}}" method="POST">
							                    @method('DELETE')
							                    @csrf
							                    <button style="border: none;color: red;">Delete Comment</button>
							                </form>
							                @endif
							            @endif


						
										
				
			                        </div>
			                
			                    </div>
			                </div>
			                @endforeach
			            </div>

			        </div>
			    </div>
    </div>


</div>
</div>
@if(Auth::check())
<div class="container">
	<div class="row list-product">
		<div class="col-md-12">
			<h3>Comment</h3>
			<div class="col-md-12" style="padding: 0px;">
				<form action="" method="POST" role="form">
					<div class="form-group">
						<code><b style="font-size:15px;">Write comment content ...<span class="glyphicon glyphicon-pencil"></span></b></code>
						<textarea name="com_content" id="content"rows="5" class="form-control"></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Sent Comment	</button>
					@csrf
				</form>
			</div>
		</div>
	</div>
</div>
@endif	
	
    <div class="container">
		<div class="row" >
		<div class="text-center" id="featured-products">
			<h2><b>Related products</b></h2>
			<code style="padding:0px; "></code>
		</div>
		<div class="col-md-12">
			@foreach($sanpham as $key => $sp)
				<div class=" col-md-3 ">
					<div class="thumbnail">
						<div class="hover01 column">
							<div>
								<a href="{{route('preview',$sp['id_product'])}}"><img src="{{url('uploads')}}/{{$sp->img_product}}" class="img-responsive" alt="" style="height: 230px;width: 100%;"></a>
							</div>
						</div>

						<div class="caption">
							<a href="{{route('preview',$sp['id_product'])}}" style="color: black;text-decoration: none;"><h3><b>{{$sp->name}}</b></h3></a>
							<p>
								{{$sp->category->name}}
							</p>
							<p class="price-products">
							@if($sp->sale_price==0)
							<span><b>{{$sp->price}}</b> $</span>
							@else
							<div style="width: 80px;padding-bottom: 20px;"class="price-products">
								
								<span style="float: left;padding-right: 20px;"><b>{{$sp->sale_price}}</b> $</span>
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
		<div class="row text-center" >{{$sanpham->links()}}</div>
	</div>
	</div>
		<!-- jQuery -->
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="sl.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		
@stop()