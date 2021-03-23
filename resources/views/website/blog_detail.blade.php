
@extends('main')
@section('content')
<div class="jumbotron" style="padding-top: 20px;padding-bottom: 20px;">
    <div class="container">
        <div class="col-md-9">
            <div class=""><b>Blog detail</b></div>
        </div>
        <div class="col-md-3">
            <div class=""><a href="#" style="color: black;"><b>Home</b></a>&nbsp;&nbsp;&nbsp;<b>></b>&nbsp;&nbsp;&nbsp;<a href="{{route('blog')}}" style="color: black;"><b>Blog</b></a>&nbsp;&nbsp;&nbsp;<b>></b>&nbsp;&nbsp;&nbsp;<a href="" style="color: black"><b>Blog detail</b></a></div>
        </div>
    </div>
</div>
<!-- Page Content -->
<div class="container">
    <div class="row">
        <!-- Blog Post Content Column -->
        <div class="col-lg-9">
            <!-- Blog Post -->
            <!-- Title -->
            <h1>Blog Post Title</h1>
            <!-- Author -->
            <p class="lead">
                Posted by :<span style="color: red;">{{$blog_detail->name_user->name}}.</span>
            </p>
            <!-- Preview Image -->
            <img class="img-responsive" src="{{ asset('upload')}}/{{$blog_detail->img_blog}}"  style="width: 100%;max-height: 550px;" alt="">

            <!-- Date/Time -->
            <p style="padding-top: 10px;"><span class="glyphicon glyphicon-time"></span> &nbsp;{{$blog_detail->created_at}} PM  <!-- Posted on August 24, 2013 at 9:00 PM --></p>
            <!-- Post Content -->
            <p class="lead"><b>{{$blog_detail->name}}.</b> </p>
            <p>{{$blog_detail->description}}.</p>
            <hr>
            <!-- Blog Comments -->
            <!-- Comments Form -->
            @if(Auth::check())
            <div class="well">
                <h4>Write a comment ...<span class="glyphicon glyphicon-pencil"></span></h4>
                <form action="" method="POST" role="form">

                    <div class="form-group">
                        <textarea name="com_blog_content" class="form-control" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Sent Comment</button>
                    @csrf
                </form>
            </div>
            @endif
            <hr>
            @foreach($comments as $com)
            <div class="media">
                <a class="pull-left" href="#">
                    <img class="img-circle" src="{{ asset('uploads')}}/{{$com->user->img_users}}" alt="" style="max-width: 95px;height: 85px; ">
                </a>
                <div class="media-body">
                    <h4 class="media-heading">{{$com->user->name}}
                        <small>{{$com->created_at}} PM</small>
                    </h4>
                    {{$com->com_blog_content}}.
                </div>
                @if(Auth::check())
                @if($com->id == Auth::user()->id)
                <form action="{{route('admincomment_blog.destroy',$com->com_blog_id)}}" method="POST" style="padding-top: 18px;">
                    @method('DELETE')
                    @csrf
                    <button style="border: none;color: red;">Delete Comment</button>
                </form>
                @endif
                @endif
            </div>
            @endforeach
            <div class="row text-center">
             {{$comments->links()}}
         </div>
     </div>
     <!-- Blog Sidebar Widgets Column -->
     <div class="col-md-3">
        <div class="panel panel-success" style="margin-top: 115px;">
            <div class="panel-heading"><h4><b>Related posts</b></h4></div>
            <div class="panel-body">
                <!-- item -->
                @foreach ($blog_detail_khac as $khac)
                <div class="row" style="margin-top: 10px;">
                    <div class="col-md-5">
                        <a href="{{route('blog_detail',$khac->id_blog)}}" style="color: black;">
                            <img src="{{ asset('upload')}}/{{$khac->img_blog}}" class="img-responsive" alt="Image" style="width: 100%;height: auto;">
                        </a>
                    </div>
                    <div class="col-md-7">
                        <a href="{{route('blog_detail',$khac->id_blog)}}" style="color: black;"><b>{{  $khac->name }}</b></a>
                    </div>
                    <div class="break"></div>
                </div> 
                @endforeach
                <div class="row text-center" style="padding-top: 35px;">
                    {{$blog_detail_khac->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.row -->
</div>
<!-- end Page Content -->
<!-- Footer -->
<hr>
@stop()