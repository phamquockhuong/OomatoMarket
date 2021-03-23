@extends('admin.main')
@section('content')

<section class="content-header">
      <h1>
        <b>Shiping method management</b>
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
              <h3 class="box-title"><code><b>Edit new methods</b></code></h3>
               <form action="{{route('adminmethod.update',['method'=>$meth->id_method])}}" method="POST">
               @method('PUT')
              @csrf
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter the method name</label>
                  <input type="text" name="name_method" id="name" class="form-control" value="{{$meth->name_method}}" placeholder="Input field">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter the method ship</label>
                  <input type="text" name="phiship" id="phiship" class="form-control" value="{{$meth->phiship}}" placeholder="Input field">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Status</label>
                  
                </div>
                <div class="radio">
                  <label class="col-md-6">

                    <input type="radio" name="status" id="status" value="0" checked="checked">
                    Hide method

                  </label>
                  <label class="col-md-6">
                    
                    <input type="radio" name="status" id="status" value="1" checked="checked">
                    Show method

                  </label>

                </div>
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
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