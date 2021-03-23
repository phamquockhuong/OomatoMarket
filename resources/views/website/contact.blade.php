@extends('main')
@section('content')
<div class="jumbotron" style="padding-top: 20px;padding-bottom: 20px;">
		<div class="container">
	  		<div class="col-md-10">
	   			<div class=""><b>Contact</b></div>
			</div>
			<div class="col-md-2">
	   				<div class=""><a href="#" style="color: black;"><b>Home</b></a>&nbsp;&nbsp;&nbsp;<b>></b>&nbsp;&nbsp;&nbsp;<a href="#" style="color: black;"><b>Contact</b></a></div>
			</div>
		</div>
	</div>
 
<div class="container">
	<div class="row">
     @if(Session::has('Ok'))
        <div class="alert alert-success ">{{Session::get('Ok')}}</div>
      @endif
		<div class="col-md-6" style="color: gray">
			<p>Get in touch	</p>
			<h2>Try not to dither to contact with us for any sort of infomation</h2>
			<p>Call us for immediate bolster this number</p>
			<p>+91 998 8265 101</p>
			<p>Drop a message feel free now </p>
			<p>Info@youremail.com</p>
		</div>
		<div class="col-md-6"  style="padding-bottom: 100px;">
			

			<form action="{{route('admincontact.store')}}" method="POST" role="form">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter the Email</label>
                  <input type="email" name="email_contact" id="email_contact" class="form-control" value="" placeholder="Input field">
                  <div style="color: red">
                     @if($errors->has('email_contact'))
                     {{$errors->first('email_contact')}}
                   @endif
                 </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter the Sucject</label>
                  <input type="text" name="name_contact" id="name" class="form-control" value="" placeholder="Input field">
                   <div style="color: red">
                     @if($errors->has('name_contact'))
                     {{$errors->first('name_contact')}}
                   @endif
                 </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter the Message</label>
                  <input type="text" name="message_contact" id="name" class="form-control" value="" placeholder="Input field">
                  <div style="color: red">
                     @if($errors->has('message_contact'))
                     {{$errors->first('message_contact')}}
                   @endif
                 </div>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>



		
		</div>


	</div>
</div>
<div class="container-fluid">
	<div class="row">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.653719518856!2d105.78489929035396!3d21.046537189204937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab32dd484c53%3A0x4201b89c8bdfd968!2zMjM4IEhvw6BuZyBRdeG7kWMgVmnhu4d0LCBD4buVIE5odeG6vywgQ-G6p3UgR2nhuqV5LCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1591083145604!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" ></iframe>
	
		</div>
	</div>
@stop()