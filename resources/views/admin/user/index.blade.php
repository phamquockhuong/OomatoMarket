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
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>STT</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Date create</th>  
                  <th style="padding-left: 30px;">Action</th>
                </tr>
                 @foreach($data as $value)
                  <tr>
                    <td style="padding-left: 15px;">{{$loop->index+1}}</td>    
                    <td  style="max-width: 300px;">{{$value->name}}</td>
                    <td  style="max-width: 300px;">{{$value->email}}</td>
                    <td>{{$value->created_at}}</td>   
                  
                    <td>
                      <a href="{{route('role.index',['role'=> $value->id])}}" class="btn btn-warning">Role</a>
                      <a href="{{route('userr.edit',['userr'=> $value->id])}}" class="btn btn-primary">Edit</a>
                    </td>    
                  </tr>
                @endforeach
            
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      <!-- /.box -->

    </section>
@stop()