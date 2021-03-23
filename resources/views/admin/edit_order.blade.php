@extends('admin.main')
@section('content')

<section class="content-header">
      <h1>
        <b>Product management</b>
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
              <h3 class="box-title"><code><b>Edit new product</b></code></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{route('adminorder.update',['order'=>$ord->id_order])}}" method="POST" role="form">
              @method('PUT')
              
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter the product name</label>
                  <input type="text" name="name" id="name" class="form-control" value="{{$ord->name}}" placeholder="Input field">
                </div>
                <div class="form-group">
                  <label>List of categories</label>
                  <select name="id_pay" id="input" class="form-control" required="required">
                    <option value="">- - -  Choose a category  - - -</option>
                    @foreach($method as $value)
                    <option value="{{$value->id_method}}" {{($value->id_method == $ord->id_pay)?'selected':''}}>{{$value->name_method}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Addess</label>
                  <input type="text" name="address" id="address" class="form-control" value="{{$ord->address}}" placeholder="Input field">
                </div>
                <div class="form-group">
                  <label for="">Phone</label>
                  <input type="number" name="phone" id="phone" class="form-control" value="{{$ord->phone}}" placeholder="Input field">
                </div>
                <div class="form-group" style="padding-bottom: 30px;">
                  <label for="">ship</label>
                  
               
                <div class="radio">
                  <label class="col-md-6">

                    <input type="radio" name="ship" id="ship" value="0" checked="checked">
                   the 

                  </label>
                  <label class="col-md-6">
                    
                    <input type="radio" name="ship" id="ship" value="1" checked="checked">
                    Ytt

                  </label>
                   </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Status</label>
                  
                
                <div class="radio">
                  <label class="col-md-4">

                    <input type="radio" name="status" id="status" value="1" checked="checked">
                    dxl 

                  </label>
                 
                  <label class="col-md-4">

                    <input type="radio" name="status" id="status" value="0" checked="checked">
                    giao

                  </label>
                  <label class="col-md-4">
                    
                    <input type="radio" name="status" id="status" value="2" checked="checked">
                    da nhan 

                  </label>
                  </div>
                 </div>
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