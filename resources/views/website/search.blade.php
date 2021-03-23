@extends('main')
@section('content')
		<div class="jumbotron" style="padding-top: 20px;padding-bottom: 20px;">
    <div class="container">
        <div class="col-md-10">
          <div class=""><b>Search</b></div>
      </div>
      <div class="col-md-2">
            <div class=""><a href="#" style="color: black;"><b>Home</b></a>&nbsp;&nbsp;&nbsp;<b>></b>&nbsp;&nbsp;&nbsp;<a href="#" style="color: black;"><b>search</b></a></div>
      </div>
    </div>
  </div>
<div class="text-center container" id="featured-products">
      <h2><b>Search Products</b></h2>
      <code style="padding:0px; "><h4>Found {{count($timkiem)}} products</h4></code>
</div>
<div class="container">
  <div class="row">
        @foreach($timkiem as $tk)
        <div class="col-md-3">
          <div class="thumbnail"  style="position: relative;">
            
            <a href="{{route('preview',$tk['id_product'])}}" style="color: black;text-decoration: none;"><img src="{{ asset('uploads')}}/{{$tk->img_product}}" alt="" style="height: 220px;width: 100%;"></a>
            @if($tk->sale_price==0)
                  
                  @else
                  <div style="position:  absolute;background:#f60;  top: 7px;left: 7px;"> &nbsp;<span style="color: white;">Sale</span>&nbsp;
                  </div>
                  @endif
            <div class="caption">
              
              <a href="{{route('preview',$tk['id_product'])}}" style="color: black;text-decoration: none;"><h3>{{$tk->name}}</h3></a>
                <p class="price-products">
                  @if($tk->sale_price==0)
                  <b>{{$tk->price}} $</b>
                  @else
                  <div style="width: 90px;padding-bottom: 20px;"class="price-products">
                    
                    <b style="float: left;">{{$tk->sale_price}} $</b>
                    <s style="float: right;color: black;">{{$tk->price}} $</s>
                  </div>
                  @endif
                </p>
              
              <p>
                <a href="{{route('themgiohang2',$tk->id_product)}}" class="btn btn-primary">Add to cart</a>
                <a href="{{route('themship',$tk->id_product)}}" class="btn btn-success">Buy now</a>
              </p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
  <div class="row text-center" >{{$timkiem->links()}}</div>
</div>
@stop()
