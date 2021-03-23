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
	<div class="row">
		<ul style="background:#3e8e41;">

			
			<li class="listpay">
				<div class="dropdown"> 
					<button class="dropbtn">Processing order<small>(<b style="color: red;">{{count($order1)}}</b>)</small></button>
					<div class="dropdown-content">
						@if(count($order1) !=0)

						
						<div class="col-md-12" style="padding-bottom: 30px;">
							
							<br>


							<div class="box-body table-responsive no-padding">
								<table class="table table-hover">
									<tbody><tr>
										<th>STT</th>
										<th>Name</th>
										<th>Phone</th>
										<th>Addess</th>
										<th>Method</th>
										<th>Ship</th>
										<th>Created_at</th>
										<th>Delete</th>
										<th>Detail</th>
									</tr>

									@foreach($order1 as $val1)
									<tr>
										<td style="padding-left: 15px;">{{$loop->index+1}}</td>
										<td style="max-width: 50px;">{{$val1->name}}</td>
										<td>{{$val1->phone}}</td>
										<td>{{$val1->address}}</td>
										<td style="max-width: 250px;">{{$val1->method->name_method}}</td>
										<td><b>{{$val1->method->phiship}}</b> $</td>
										<td>{{$val1->created_at}}</td>
										<td >
											<form action="{{route('adminorder.destroy',$val1->id_order)}}" method="POST">
												@method('DELETE')
												@csrf
												<button class="btn-danger"><span class="glyphicon glyphicon-remove"></span></button>

											</form>
										</td>
										<td>
											<button class="btn-info"><a style="padding: 0px;" href="{{route('shiping_detail',['id'=>$val1->id_order])}}"><i class="glyphicon glyphicon-list-alt"></i></a></span></button>

										</td>
									</tr>
									@endforeach

								</tbody>
							</table>
						</div>


					</div>
					<hr>



					@endif
				</div>

			</div>
		</li>
		<li class="listpay">
			<div class="dropdown"> 

				<button class="dropbtn">On delivery<small>(<b  style="color: red;">{{count($order0)}}</b>)</small></button>
				<div class="dropdown-content">
					@if(count($order0) != 0)
					

					<div class="col-md-12" style="padding-bottom: 30px;">

						<br>


						<div class="box-body table-responsive no-padding">
							<table class="table table-hover">
								<tbody><tr>
									<th>STT</th>
									<th>Name</th>
									<th>Phone</th>
									<th>Addess</th>
									<th>Method</th>
									<th>Ship</th>
									<th>Created_at</th>

									<th>Detail</th>
								</tr>

								@foreach($order0 as $val0)
								<tr>
									<td style="padding-left: 15px;">{{$loop->index+1}}</td>
									<td style="max-width: 50px;">{{$val0->name}}</td>
									<td>{{$val0->phone}}</td>
									<td>{{$val0->address}}</td>
									<td style="max-width: 250px;">{{$val0->method->name_method}}</td>
									<td><b>{{$val0->method->phiship}}</b> $</td>
									<td>{{$val0->created_at}}</td>
									<td>
										<button class="btn-info">
											<a style="padding: 0;" href="{{route('shiping_detail',['id'=>$val0->id_order])}}"><i class="glyphicon glyphicon-list-alt"></i></a>
										</button>
									</td>
								</tr>
								@endforeach

							</tbody>
						</table>
					</div>


				</div>
				<hr>



				@endif
			</div>

		</div>
	</li>
	<li class="listpay">
		<div class="dropdown"> 

			<button class="dropbtn">Receive<small>(<b style="color: red;">{{count($order2)}}</b>)</small></button>
			<div class="dropdown-content">
				@if(count($order2) != 0)


				<div class="col-md-12" style="padding-bottom: 30px;">

					<br>


					<div class="box-body table-responsive no-padding">
						<table class="table table-hover">
							<tbody><tr>
								<th>STT</th>
								<th>Name</th>
								<th>Phone</th>
								<th>Addess</th>
								<th>Method</th>
								<th>Ship</th>
								<th>Created_at</th>

								<th>Detail</th>
							</tr>

							@foreach($order2 as $val)
							<tr>
								<td style="padding-left: 15px;">{{$loop->index+1}}</td>
								<td style="max-width: 50px;">{{$val->name}}</td>
								<td>{{$val->phone}}</td>
								<td>{{$val->address}}</td>
								<td style="max-width: 250px;">{{$val->method->name_method}}</td>
								<td><b>{{$val->method->phiship}}</b> $</td>
								<td>{{$val->created_at}}</td>
								<td>
									<button class="btn-info">
										<a style="padding: 0;" href="{{route('shiping_detail',['id'=>$val->id_order])}}"><i class="glyphicon glyphicon-list-alt"></i></a>
									</button>
								</td>
							</tr>
							@endforeach

						</tbody>
					</table>
				</div>


			</div>
			<hr>

				@endif
			</div>
		</div>
	</li>
</ul>



</div>
<div class="row" style="padding-top: 50px;">
	<h3>Detailed instructions</h3>
	<ul>
		<li><b>Processing order :</b> As the product is pending processing by the admin, the user can cancel the order at this time.</li>
		<li><b>On delivery :</b> As the product is being shipped from the shipper, the user cannot cancel the order at this time. Delivery takes about 1 to 2 days depending on location..</li>
		<li><b>Has received the goods :</b> Product that has been shipped from the shipper to the user..</li>
	</ul>
</div>
</div>
@stop()
