@extends('admin.main')
@section('content')

<section class="content-header">
  <h1>
    <b>Comment management</b>
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
          <h3 class="box-title"><code><b>Edit new Comment</b></code></h3>
          <form action="{{route('admincomment.update',$comment->com_id)}}" method="POST" enctype="multipart/form-data">
            <!-- /.box-header -->
            <!-- form start -->

            <div class="box-body">

              <div class="form-group">
                <label for="exampleInputEmail1">Enter new name</label>
                <input type="text" name="com_id" id="com_id" class="form-control" value="{{$comment->com_id}}" placeholder="Input field">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Enter the new comment </label>
                <input type="text" name="com_content" id="com_content" class="form-control" value="{{$comment->com_content}}" placeholder="Input field">
              </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              @csrf @method('PUT')
            </div>
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