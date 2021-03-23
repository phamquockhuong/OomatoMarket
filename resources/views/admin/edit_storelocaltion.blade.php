@extends('admin.main')
@section('content')

<section class="content-header">
      <h1>
        <b>Menu management</b>
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
              <h3 class="box-title"><code><b>Edit new Store localtion</b></code></h3>
               <form action="{{route('adminstorelocaltion.update',['storelocaltion'=>$sto_local->id_sl])}}" method="POST">
               @method('PUT')
              @csrf
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           
              <div class="box-body">
                @if(count($errors)>0)
                  <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                    {{$err}}
                    @endforeach
                  </div>
                @endif
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter the address</label>
                  <input type="text" name="address" id="name" class="form-control" value="{{$sto_local->address}}" placeholder="Input field">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter the phone</label>
                  <input type="text" name="phone" id="name" class="form-control" value="{{$sto_local->phone}}" placeholder="Input field">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Status</label>
                  
                </div>
                <div class="radio">
                  <label class="col-md-6">

                    <input type="radio" name="status" id="status" value="0" checked="checked">
                    Hide Store Localtion

                  </label>
                  <label class="col-md-6">
                    
                    <input type="radio" name="status" id="status" value="1" checked="checked">
                    Show Store Localtion

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