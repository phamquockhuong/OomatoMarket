@extends('admin.main')
@section('content')

<section class="content-header">
  <h1>
    <b>Catalog management</b>
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  @if(count($errors)>0)
              <div class="alert alert-danger">
                @foreach($errors->all() as $err)
                {{$err}}
                @endforeach
              </div>
            @endif
    @if(Session::has('Ok2'))
        <div class="alert alert-success">{{Session::get('Ok2')}}</div>
      @endif
  <!-- /.row -->
  <!-- Main row -->
  <div class="row">
    <!-- Left col -->

    <!-- /.Left col -->
    <!-- right col (We are only adding the ID to make the widgets sortable)-->
    <section class="col-lg-8 connectedSortable">

      <!-- Map box -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"><code><b>Edit new categories</b></code></h3>
          <form action="{{route('adminuser.update',$user->id)}}" method="POST" enctype="multipart/form-data">
            <!-- /.box-header -->
            <!-- form start -->

            <div class="form-group">
              <label for="exampleInputEmail1">Enter the name user</label>
              <input type="text" name="name" id="name" class="form-control" value="{{$user->name}}" placeholder="Input field">
            </div> 

            <div class="form-group">
              <label for="exampleInputEmail1">Enter the email user</label>
              <input type="email" name="email" id="email" class="form-control" value="{{$user->email}}" placeholder="Input field">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Enter the password user</label>
              <input type="password" name="password" id="password" class="form-control" value="{{$user->password}}" placeholder="Input field">
            </div>


            <div class="form-group">
              <label for="exampleInputEmail1" style="padding-top: 20px;">Enter the image user</label>
              <input type="file" name="img_users" id="img_users" class="form-control" value="" placeholder="Input field">

            </div>
            <div class="form-group">
              <img id = "img" src="{{ asset('uploads')}}/{{$user->img_users}}" class="img-responsive" alt="Image" style="width: 200px;height: auto;">
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Status</label>

            </div>
            <div class="radio">
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

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          @csrf @method('PUT')
        </form>
      </div>
    </div>
    <!-- /.box -->
    <!-- solid sales graph -->

    <!-- /.box -->

    <!-- Calendar -->

    <!-- /.box -->

  </section>
  <!-- right col -->
</div>
<!-- /.row (main row) -->

</section>
@stop()