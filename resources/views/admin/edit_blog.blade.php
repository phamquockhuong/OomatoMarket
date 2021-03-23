@extends('admin.main')
@section('content')

<section class="content-header">
      <h1>
        <b>Blog management</b>
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
              <h3 class="box-title"><code><b>Edit new Blog</b></code></h3>
               <form action="{{route('adminblog.update',$blog->id_blog)}}" method="POST" enctype="multipart/form-data">
            <!-- /.box-header -->
            <!-- form start -->
           
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter the slide name</label>
                  <input type="text" name="name" id="name" class="form-control" value="{{$blog->name}}" placeholder="Input field">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter the slide content</label>
                  <input type="text" name="description" id="description" class="form-control" value="{{$blog->description}}" placeholder="Input field">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter the image slide</label>
                  <input type="file" name="img_blog" id="img_blog" class="form-control" value="" placeholder="Input field">
                  
                </div>
                <div class="form-group">
                    <img id = "img" src="{{url('upload')}}/{{$blog->img_blog}}" class="img-responsive" alt="Image" style="width: 200px;height: auto;">
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