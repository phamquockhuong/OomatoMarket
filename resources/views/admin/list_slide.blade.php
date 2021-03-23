@extends('admin.main')
@section('content')
<section class="content-header">
      <h1>
        Slide management
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      @if(Session::has('Ok'))
        <div class="alert alert-success">{{Session::get('Ok')}}</div>
      @endif
      @if(Session::has('Ok2'))
        <div class="alert alert-success">{{Session::get('Ok2')}}</div>
      @endif
      <!-- Default box -->
      <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
           <a href="{{route('adminslide.create')}}" class="btn btn-success">+Add to slide</a>

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
                  <th style="padding-left: 20px;">Image</th>
                  <th>Content</th>
                  <th>Date create</th>
                  <th>Date update</th>
                  <th>Status</th>
                  <th style="padding-left: 22px;">Action</th>
                </tr>
                @foreach($slide_all as $value)
                  <tr>
                    <td style="padding-left: 15px;">{{$loop->index+1}}</td>
                 
                    <td  style="max-width: 300px;">{{$value->name_slide}}</td>
                    <td style="padding-top: 0;"><img src="{{ asset('upload')}}/{{$value->img_slide}}" class="img-responsive" alt="Image" style="width: 70px;height: 60px;"></td>
                    <td  style="max-width: 300px;">{{$value->content_slide}}</td>

                    <td>{{$value->created_at}}</td>
                    <td>{{$value->updated_at}}</td>
                    <td>
                       {!!($value->status ==1)?'<span class="label label-success">Show</span>':'<span class="label label-warning">&nbsp;Hide&nbsp;</span>'!!}
                    </td>
                    <td>
                        <form action="{{route('adminslide.destroy',$value->id_slide)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button>
                            <a href="{{route('adminslide.edit',['slide'=> $value->id_slide])}}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil "></span></a>
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