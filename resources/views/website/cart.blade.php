@extends('main')
@section('content')
    	    
            <div class="container">
                <div class="col-md-10">
                    <div class=""><b>Cart</b></div>
                </div>
                <div class="col-md-2">
                    <div class=""><a href="#" style="color: black;text-decoration: none;"><b>Home</b></a>&nbsp;&nbsp;&nbsp;<b>></b>&nbsp;&nbsp;&nbsp;<a href="#" style="color: black;text-decoration: none;"><b>Cart</b></a></div>
                </div>
            </div>
        	<div class="container spad">
                <div class="row">
                    <div class="col-lg-12">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Delete</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                                 @if(count($cart->items))
                                    @foreach($cart->items as $product)

                                    <tr>
                                        <td class="text-center" ><img src="{{ asset('uploads')}}/{{$product['img_product']}}" class="img-responsive " alt="Image" style="width: 100%;"></td>
                                        <td class="cart-title first-row">
                                            <h5>{{$product['name']}}</h5>
                                        </td>
                                        <td class="first-row">${{$product['price']}} </td>
                                        <td class="qua-col first-row">
                                        <div  class="quantity" id="field1">
                                            <button type="button" class="minus changeQuantity" data-action="minus" data-pro="input_{{ $product['id_product'] }}">-</button>
                                            <input type="text" class="text-center quantityCurrent" value="{{$product['quantity']}}" min="1" id="input_{{ $product['id_product'] }}" max="999" size="2" readonly>
                                            <button type="button"  class="plus changeQuantity" data-action="plus" data-pro="input_{{ $product['id_product'] }}">+</button>
                                        </div>
                                        </div>
                                    </td>
                                    <td class="total-price first-row">
                                        <span class="aaa input_{{ $product['id_product'] }}">${{$cart->getPriceById($product['id_product'])}} </span>
                                    </td>

                                    <td class="close-td"><a style="color: black;" href="{{route('xoagiohang',($product['id_product']))}}"><span class="glyphicon glyphicon-remove"></span></a>
                                    </td>
                                    <td class="close-td"><a style="color: black;" href="{{route('preview',$product['id_product'])}}"><i class="glyphicon glyphicon-list-alt"></i></a>
                                    </td>
                                    @endforeach

                                @endif
                                    </tr>
                                
                        </table>
                    </div>
                </div>
            </div>
            <section>
                <div class="container">
                   <div class="row">
                        <div class="col-lg-4 offset-lg-8">
                           @if(Auth::check())
                           <div class="btn btn-success">
                                <a href="{{route('ship')}}"class="proceed-btn"><b>PROCEED TO CHECK OUT</b></a>
                            </div>
                            @else
                            <div class="btn btn-success">
                                <a href="{{ route('login') }}"class="proceed-btn"><b>PROCEED TO CHECK OUT</b></a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </section>
@stop()
