@extends('admin.main')
@section('content')
<section class="content-header">
      <h1>
        Role management
       
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
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>STT</th>
                  <th>Name</th>
                  <th>Date create</th>  
                  <th>Action</th>
                </tr>
                 @foreach($data as $value)
                  <tr>
                    <td style="padding-left: 15px;">{{$loop->index+1}}</td>
                 
                    <td  style="max-width: 300px;">{{$value->name}}</td>
                    <td>{{$value->created_at}}</td>
                    <td>
                        
                        <a href="{{route('role.edit',['role'=> $value->id])}}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil "></span></a>
                        
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