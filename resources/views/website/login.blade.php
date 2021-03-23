@extends('main')
@section('content')
<div class="container">
	<div class="row">
		<h1 class="text-center"><b>Login</b> </h1>
		<h5 class="text-center" style="color: gray">To track your order please enter your Order ID in the box blew the "Track" button. This was given to your on your </br> recipt and in confimations email your should have recevied</h5>
	</div>
</div>
	<div class="container" style="padding-bottom: 100px;">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
				<form action="" method="POST" role="form">
					<div class="form-group ">
						<input type="text" class="form-control" id="" placeholder="Username"required="checked">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" id="" placeholder="Password"required="checked">
					</div>
					<div class="form-group checkbox white" style="padding-bottom: 20px;">
						<div class="col-lg-4" style="padding-left: 20px;">
							<input type="checkbox" id="lterms" value="Agreed-to-Terms" name="lterms" ng-model="accept" required="checked">Remeber me 
						</div>
						<div class="col-lg-4">
							<a href="" style="color: black;text-align: 1vw;">Forgot Password?</a>
						</div>
						<div class="col-lg-4">
							<a href="" style="color: black;text-align: 1vw;"><b>Sign Up</b></a>
						</div>
						
					</div>
				</form>
				<div class="form-group">
						<button type="submit" class="btn btn-primary" style="background-color: #00FF00;border-color: #00FF00">Login</button>
					</div>
				<!-- <div class="col-md-4">
					<button type="submit" class="btn btn-primary btn-block" style="background-color: #00FF00;border-color: #00FF00">Login</button>
				</div> -->
		<div class="col-md-2"></div>
			<div class="row text-center">
				<div class="col-md-7">
					<button type="submit" class="btn btn-danger" style="width: 48%;height: 50px;text-align: 1vw;">Login with Google +</button>
					<button type="submit" class="btn btn-info" style="width: 48%; height: 50px; background-color: #2e6da4; border-color: #2e6da4">Login with Facebook </button>
				</div>
			</div>
		</div>
	</div>	
	</div>	
@stop()