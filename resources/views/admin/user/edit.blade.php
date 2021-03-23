@extends('admin.main')
@section('content')
<section class="content-header">
      <h1>
        User management
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     
      <!-- Default box -->
      <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
           <a href="{{route('role.create')}}" class="btn btn-success">+Add to role</a>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
           <div class="panel-body">
             <form action="{{route('userr.update',$userr->id)}}" method="POST" role="form">
              @csrf @method('PUT')
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $userr->name }}" placeholder="name">
                  </div>
                  <div class="form-group">
                    <label for="">Gmail</label>
                    <input type="text" name="email" class="form-control" value="{{ $userr->email }}" placeholder="Gmail">
                  </div>
                  
                </div>
                <div class="col-md-6">
                 <label for="">Roles</label>
                  @foreach ($roles as $role) 
                  <?php $checked = in_array($role->id, $role_assigned) ? 'checked' : ''; ?>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="role[]" value="{{ $role->id }}" {{ $checked }}>
                        {{ $role->name }}
                      </label>
                    </div>
                  @endforeach
                </div>
              </div>
             
               
             
               <button type="submit" class="btn btn-primary">Submit</button>
             </form>
           </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      <!-- /.box -->

    </section>
@stop()