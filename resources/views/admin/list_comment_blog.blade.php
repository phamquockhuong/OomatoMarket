@extends('admin.main')
@section('content')
<section class="content-header">
      <h1>
       Comment blog management
       
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
                  <th>Id_users</th>
                  <th>Id_blog</th>
                  <th>Content</th>
                  <th>Date create</th>
                  <th>Action</th>
                </tr>
                @foreach($comment_blog_all as $value)
                  <tr>
                    <td style="padding-left: 15px;">{{$loop->index+1}}</td>
                    <td  style="max-width: 300px;">{{$value->id}}</td>
                    <td  style="max-width: 300px;">{{$value->id_blog}}</td>
                    <td  style="max-width: 300px;">{{$value->com_blog_content}}</td>
                    <td>{{$value->created_at}}</td>
                    <td>
                  <form action="{{route('admincomment_blog.destroy',$value->com_blog_id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button>
                            <a href="{{route('admincomment_blog.edit',['comment_blog'=> $value->com_blog_id])}}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil "></span></a>
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