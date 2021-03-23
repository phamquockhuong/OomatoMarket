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
  @if(Session::has('Ok2'))
        <div class="alert alert-success">{{Session::get('Ok2')}}</div>
      @endif
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
            <th>Password</th>
            <th style="padding-left: 20px;">Avatar</th>
            <th>Status</th>
            <th style="padding-left: 22px;">Action</th>
          </tr>
          @foreach($user as $value)
          <tr>
            <td style="padding-left: 15px;">{{$loop->index+1}}</td>
            <td  style="max-width: 50px;">{{$value->name}}</td>
            <td  style="max-width: 80px;">{{$value->email}}</td>
            <td  style="max-width: 300px;">{{$value->password}}</td>
            <td style="padding-top: 0;max-width: 50px;">
              <img src="{{ asset('uploads')}}/{{$value->img_users}}" class="img-responsive" alt="Image" style="width: 70px;height: 60px;"></td>
              <td>
               {!!($value->status ==1)?'<span class="label label-success">Show</span>':'<span class="label label-warning">&nbsp;Hide&nbsp;</span>'!!}
             </td>
             <td>
              <form action="{{route('adminuser.destroy',$value->id)}}" method="POST">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button>
                <a href="{{route('adminuser.edit',['user'=> $value->id])}}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil "></span></a>
              </form>
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