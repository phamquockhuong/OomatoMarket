@extends('main')
@section('content')
<div class="jumbotron" style="padding-top: 20px;padding-bottom: 20px;">
	<div class="container">
    <div class="col-md-10">
      <div class=""><b>Shiping</b></div>
    </div>
    <div class="col-md-2">
     <div class=""><a href="#" style="color: black;"><b>Home</b></a>&nbsp;&nbsp;&nbsp;<b>></b>&nbsp;&nbsp;&nbsp;<a href="#" style="color: black;"><b>Shiping</b></a></div>
   </div>
 </div>
</div>

<div class="container" id="frompay">
	<div class="box-body table-responsive no-padding">
    <table class="table table-hover">
      <tbody>
        <tr>
          <th>STT</th>
          <th>Name</th>
          <th style="padding-left: 20px;">Image</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Date create</th>
        </tr>
        @php
          $total =0; 
        @endphp
        @foreach($order->count_pay as $val)
        @php
          $total += $val->amount; 
        @endphp
        
        <tr>
          <td style="padding-left: 15px;">{{$loop->index+1}}</td>
          <td style="max-width: 200px;">{{ $val->product->name }}</td>
          <td>
            <img src="{{ asset('uploads')}}/{{ $val->product->img_product }}" alt="" style="width: 70px;height: 60px;">
          </td>
          <td>{{ $val->price }} $</td>
          <td style="padding-left: 15px;">{{ $val->quantity }} </td>
          <td>{{$val->created_at}}</td>
        </tr>
        @endforeach
        
      </tbody>
    </table>
  </div>
  @php
    $all = ($total)+($order->method->phiship); 
  @endphp
      <section>
        <div class="container">
          <div class="row">
              <div class="col-lg-4 offset-lg-8">
                  <div class="proceed-checkout">
                      <ul>
                          <li class="subtotal">Shipping :<span>{{ ($order->method->phiship) }} $</span></li>
                          <li class="subtotal">Total :<span>{{ $total }} $</span></li>
                          <li class="cart-total">Total orders :<span style="color: black;">{{ $all }} $<span></li>
                      </ul>
                      <a href="{{route('ship')}}" class="proceed-btn">PROCEED TO CHECK OUT</a>
                  </div>
              </div>
          </div>
        </div>
      </section>
</div>
@stop()
