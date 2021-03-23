@extends('main')
@section('content')
<div class="container">
@if(Session::has('Ok2'))
        <div class="alert alert-success">{{Session::get('Ok2')}}</div>
      @endif
<div class="jumbotron" style="padding-top: 20px;padding-bottom: 20px;">
    <div class="container">
        <div class="col-md-10">
          <div class=""><b>Profile</b></div>
      </div>
      <div class="col-md-2">
            <div class=""><a href="#" style="color: black;"><b>Home</b></a>&nbsp;&nbsp;&nbsp;<b>></b>&nbsp;&nbsp;&nbsp;<a href="#" style="color: black;"><b>Profile</b></a></div>
      </div>
    </div>
  </div>
  <!-- Main content -->
  <section class="content" style="padding-top: 0px;">
    <!-- Small boxes (Stat box) -->

    <!-- /.row -->


    <!-- Main row -->
    <div class="row ">
      <!-- Left col -->



  <h3 class="box-title text-center" style="padding-bottom: 50px;"><code><b style="font-size: 29px;">Edit  profile</b></code></h3> 
      <!-- /.Left col -->
      <!-- right col (We are only adding the ID to make the widgets sortable)-->
      <section class="col-lg-8 connectedSortable" style="padding: 0px;">

        <!-- Map box -->
        <div class="box box-primary">
          <div class="box-header with-border">
          
            <div class="container">
              <form action="{{route('adminuser.update',$user->id)}}" method="POST" enctype="multipart/form-data">
                <!-- /.box-header -->
                <!-- form start -->

                <div class="form-group col-lg-4">
                  <img id = "img" src="{{ asset('uploads')}}/{{$user->img_users}}" class="img-responsive" alt="Image" style="width: 300px;height: auto;">
                </div>
                <div class="row col-lg-8">
                  <div class="form-group">
                  <label for="exampleInputEmail1">Enter the blog name</label>
                  <input type="text" name="name" id="name" class="form-control" value="{{$user->name}}" placeholder="Input field">
                  <div style="color: red">
                     @if($errors->has('name'))
                     {{$errors->first('name')}}
                   @endif
                 </div>
                  </div> 

                  <div class="form-group ">
                    <label for="exampleInputEmail1">Enter the email user</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{$user->email}}" placeholder="Input field">
                      <div style="color: red">
                     @if($errors->has('email'))
                     {{$errors->first('email')}}
                   @endif
                 </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Enter the password user</label>
                    <input type="password" name="password" id="password" class="form-control" value="{{$user->password}}" placeholder="Input field">
                      @if($errors->has('password'))
                     {{$errors->first('password')}}
                   @endif
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Enter the image user</label>
                    <input type="file" name="img_users" id="img_users" class="form-control" value="" placeholder="Input field">

                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Status</label>

                  </div>
                  <div class="radio" >
                    <label class="col-md-6">

                      <input type="radio" name="status" id="status" value="0" checked="checked">
                      Hide slide

                    </label>
                    <label class="col-md-6">

                      <input type="radio" name="status" id="status" value="1" checked="checked">
                      Show slide

                    </label>

                  </div>
                </div>


             
              <!-- /.box-body -->

              <div class="box-footer" style="padding-left: 16px;">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              @csrf @method('PUT')
            </form> </div>
          </div>
        </div>
        </div>

      </section>
      <!-- right col -->

      <!-- /.row (main row) -->
    </div>
  </section>
</div>
@stop()
