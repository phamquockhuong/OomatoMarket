@extends('main')
@section('content')
<div class="container">
	<div class="jumbotron" style="padding-top: 20px;padding-bottom: 20px;">
	<div class="container">
		<div class="col-md-9">
			<div class=""><b>Check Out</b></div>
		</div>
		<div class="col-md-3 text-right">
			<div class=""><a href="#" style="color: black;"><b>Home</b></a>&nbsp;&nbsp;&nbsp;<b>></b>&nbsp;&nbsp;&nbsp;<a href="#" style="color: black;"><b>Check Out</b></a></div>
		</div>
	</div>
</div>
<div class="col-md-8">
   @if(Session::has('Ok'))
        <div class="alert alert-success ">{{Session::get('Ok')}}</div>
      @endif
<div class="col-md-10">
	<form action="{{route('adminorder.store')}}" method="POST" role="form">
        @csrf
		<legend>Form title</legend>
    @if(Auth::check())
		<div class="form-group">
			<label for="">Name</label>
			<input type="text" name="name" id="name" required="required"  class="form-control" value="{{Auth::user()->name}}" placeholder="Input field">
       @if($errors->has('name'))
                     {{$errors->first('name')}}
                   @endif
		</div>
    @endif
		<div class="form-group">
			<label for="">Addess</label>
			<input type="text" name="address" id="address"  class="form-control" value="" placeholder="Input field">
       @if($errors->has('address'))
                     {{$errors->first('address')}}
                   @endif
		</div>
		<div class="form-group">
			<label for="">Phone</label>
			<input type="number" name="phone" id="phone" class="form-control" value=""  placeholder="Input field">
       @if($errors->has('phone'))
                     {{$errors->first('phone')}}
                   @endif
		</div>
		<div class="form-group">
          <label>List of method</label>
          <select name="id_pay" id="input" class="form-control" required="required">
            <option value="">- - -  Choose a method  - - -</option>
            @foreach($method as $value) 
            <option value="{{$value->id_method}}">{{$value->name_method}}. (Cost :{{$value->phiship}}$)</option>
            @endforeach
          </select>
        </div>
        <div class="form-group" style="padding-bottom: 30px;">
                <label for="">Payment methods</label>
                <div class="radio">
                  <label class="col-md-6">

                    <input type="radio" name="ship" id="ship" value="1" checked="checked">
                    Payment by credit card

                  </label>
                  <label class="col-md-6">
                    
                    <input type="radio" name="ship" id="ship" value="0" checked="checked">
                    Direct payment on delivery

                  </label>
                   </div>
                </div>
  		 @if(Auth::check())
  		<div class="form-group">
  			<button type="submit" class="btn btn-primary">Submit</button>
  		</div>
      @else
      <div class="form-group">
        <a href="{{ route('login') }}"><button class="btn btn-primary">Submit</button></a>
      </div>
      @endif
	</form>
</div>
</div>
<div class="col-md-4" style="padding: 0px;">
	<div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tbody>
                <tr>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Amount</th>
                  <th>Total</th>
                  <th>Delete</th>
                </tr>
                @if(count($cart->items))
                    @foreach($cart->items as $product)
		                <tr>
		                  <td><img src="{{ asset('uploads')}}/{{$product['img_product']}}" style="width:80px;height: auto;"></td>
		                  <td>{{$product['name']}}</td>
		                  <td class="text-center"> {{$product['quantity'] }}</td>
		                  <td class="text-center"><b>${{$cart->getPriceById($product['id_product'])}}</b></td>
		                  <td class="text-center"><a style="color: black;" href="{{route('xoagiohang',($product['id_product']))}}"><span class="glyphicon glyphicon-remove"></span></a></td>
		                </tr>
                 	@endforeach
                @endif
            </tbody>
          </table>
          <table class="table table-hover">
            <tbody>
                <tr>
                  <th>Total orders</th>
                  <th>${{number_format($cart->totalPrice)}}</th>
                </tr>
            </tbody>
          </table>
        </div>
	</div>
</div>

@stop()