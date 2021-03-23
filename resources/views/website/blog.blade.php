@extends('main')
@section('content')
<div class="jumbotron" style="padding-top: 20px;padding-bottom: 20px;">
  <div class="container">
    <div class="col-md-10">
      <div class=""><b>Blog</b></div>
    </div>
    <div class="col-md-2">
      <div class=""><a href="{{route('index')}}" style="color: black;"><b>Home</b></a>&nbsp;&nbsp;&nbsp;<b>></b>&nbsp;&nbsp;&nbsp;<a href="#" style="color: black;"><b>Blog</b></a></div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-12 ">
      <div class="panel panel-success">
        <div class="panel-heading"><!--  style=" color:white;" -->
          <b><h2>Some outstanding articles for you</h2></b>
        </div>
        @foreach ($blog as $key => $value)
        <div class="row-item row" style="padding-left: 10px;">
          <div class="col-md-4">
              <br>
              <img src="{{ asset('upload')}}/{{$value->img_blog}}" class="img-responsive" alt="Image" style="width: 100%;height: auto;max-height: 270px;">
          </div>
          <div class="col-md-8" style="position: relative;">
            <div class="col-md-12">
              <h3><a href="{{route('blog_detail',$value->id_blog)}}" style="color: black;text-decoration: none;">{{$value->name}}</a></h3>
              <p class="test" style="text-overflow:clip;">{{$value->description}}.</p>
            </div>
            <div class="col-md-12">
              <a class="btn btn-info" href="{{route('blog_detail',$value->id_blog)}}">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
          </div>
          <!-- <div class="break"></div> -->
        </div>
        @endforeach
        <div class="row text-center" style="padding-top: 35px;">
         {{$blog->links()}}
       </div>
        @if(Auth::check())
       <div class="well" style="background: white;border: none;">
        <div style="padding-bottom: 30px;"><code style="font-size: 22px;">Viết blog ...<span class="glyphicon glyphicon-pencil"></span></code></div>
        <form action="{{route('adminblog.store')}}" method="POST" role="form" enctype= multipart/form-data>
          @csrf
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Enter the blog name</label>
              <input type="text" name="name" id="name" class="form-control" value="" placeholder="Input field">
               <div style="color: red">
                     @if($errors->has('name'))
                     {{$errors->first('name')}}
                   @endif
                 </div>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Enter the blog content</label>
              <!-- s -->
              <textarea class="form-control"  id="description" name="description" rows="3"></textarea>
               <div style="color: red">
                     @if($errors->has('description'))
                     {{$errors->first('description')}}
                   @endif
                 </div>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Enter the image blog</label>
              <input type="file" name="img_blog" id="img_blog" class="form-control" value="" placeholder="Input field">
               <div style="color: red">
                     @if($errors->has('img_blog'))
                     {{$errors->first('img_blog')}}
                   @endif
                 </div>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
      @endif
      <!-- /.row -->
    </div>
  </div> 
</div>
</div>
 @stop()