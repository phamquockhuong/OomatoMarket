@extends('main')
@section('content')
<div class="container">
	<div class="row">
		<h1 class="text-center"><b>Sign Up</b> </h1>
		<h5 class="text-center" style="color: gray">To track your order please enter your Order ID in the box blew the "Track" button. This was given to your on your </br> recipt and in confimations email your should have recevied</h5>
	</div>
</div>
<div class="container" style="padding-bottom: 100px;">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4 offset-md-12">
	<form action="" method="POST" role="form">
				<div class="form-group">
					<input type="text" class="form-control" id="" placeholder="Name"required="checked">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="" placeholder="Email" required="checked">
				</div>
				<div class="form-group">
					<input type="textr" class="form-control" id="" placeholder="Phone no."required="checked">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" id="" placeholder="Password"required="checked">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" id="" placeholder="Confirm password">
				</div>
				<div class="form-group checkbox white" style="margin-left: 20px;">
					<input type="checkbox" id="lterms" value="Agreed-to-Terms" name="lterms" ng-model="accept" required>I agree to the <a class="white" href="#"> Terms,Privancy</a> and <a class="white" href="#">Fees</a>
				</div>
			<button type="button" class="btn btn-primary btn-block" style="background-color: #00FF00;border-color: #00FF00">Sign Up</button>
			</form>
		</div>
	</div>
</div>
@stop()