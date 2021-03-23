@extends('main')
@section('content')
		<div class="jumbotron" style="padding-top: 20px;padding-bottom: 20px;">
    <div class="container">
        <div class="col-md-10">
          <div class=""><b>FAQ</b></div>
      </div>
      <div class="col-md-2">
            <div class=""><a href="#" style="color: black;"><b>Home</b></a>&nbsp;&nbsp;&nbsp;<b>></b>&nbsp;&nbsp;&nbsp;<a href="#" style="color: black;"><b>FAQ</b></a></div>
      </div>
    </div>
  </div>
<div class="container">
  <h3>FAQ</h3>
  <p><h4>Frequently asked questions</h4></p>
  <div class="panel-group" id="accordion">
    @foreach ($menu as $value)
      <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" style="text-decoration: none;" data-parent="#accordion" href="#collapse{{$loop->index+1}}">{{$value->name_quesfaq}} ?</a>
        </h4>
      </div>
      <div id="collapse{{$loop->index+1}}" class="panel-collapse collapse in">
        <div class="panel-body">{{$value->name_ansfaq}} .</div>
      </div>
    </div>
    @endforeach
    
    
  </div> 
</div>
@stop()
