@extends('main')
@section('content')
<div class="jumbotron" style="padding-top: 20px;padding-bottom: 20px;">
	<div class="container">
		<div class="col-md-9">
			<div class=""><b>Store localtions</b></div>
		</div>
		<div class="col-md-3">
			<div class=""><a href="{{ route('home') }}" style="color: black;"><b>Home</b></a>&nbsp;&nbsp;&nbsp;<b>></b>&nbsp;&nbsp;&nbsp;<a href="#" style="color: black;"><b>Store localtions</b></a></div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
	<div class="col-md-8">
		<div class="box-body table-responsive no-padding">
              <table class="table table-hover ">
                <tbody>
                	<tr>
                		<th>STT</th>
	                    <th>Address</th>
						<th>Phone</th>
	                </tr>
                 @foreach($store as $key => $sto)
                    <tr>
                    	<td>{{ $key+1 }}</td>
	                    <td>{{ $sto->address }}</td>
						<td>{{ $sto->phone }}</td>
                    </tr>
                @endforeach
            
                </tbody>
              </table>
            </div>
		</div>
	</div>
</div>
@stop()
