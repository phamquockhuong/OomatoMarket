@extends('admin.main')
@section('content')

<section class="content-header">
      <h1>
        <b>Role management</b>
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
              <h3 class="box-title"><code><b>Edit new role</b></code></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{route('role.update',$model->id)}}" method="POST" role="form">
              @csrf @method('PUT')
                
              <div class="box-body">
               
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter the role name</label>
                  <input type="text" name="name" id="name" class="form-control" value="{{ $model->name }}" >
                </div>
                <div class="form-group" style="height: 300px;overflow-y: auto;">
                  <label for="exampleInputEmail1">Role</label>
                  @foreach ($routes as $route)
                  <?php $checked = in_array($route, $permissions) ? 'checked' : ''; ?>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"  name="route[]" value="{{ $route }}" {{ $checked }}>
                        {{ $route }}
                      </label>
                    </div>
                  @endforeach
                </div>
                
               
              </div>
              <!-- /.box-body -->
              <label style="margin-left: 20px;"><input type="checkbox" id="checkAll" {{ $checked }}> Alll</label>
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