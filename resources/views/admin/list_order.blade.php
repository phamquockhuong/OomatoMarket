@extends('admin.main')
@section('content')
<section class="content-header">
      <h1>
        Product management 
       
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
           <a href="{{route('ship')}}" class="btn btn-success">+Add to Product</a>

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
                  <th>Phone</th>
                  <th>Addess</th>
                  <th>Method</th>
                  <th>Pay</th>
                  <th>Created_at</th>
                  <th>Status</th>
                  <th style="padding-left: 22px;">Action</th>
                </tr>
                
                 @foreach($order as $value)
                  <tr>
                    <td style="padding-left: 15px;">{{$loop->index+1}}</td>
                 
                    <td style="max-width: 200px;">{{$value->name}}</td>
                    <td>{{$value->phone}}</td>
                    <td>{{$value->address}}</td>
                    <td style="max-width: 150px;">{{$value->method->name_method}}</td>
                    
                    <td>
                       {!!($value->ship ==0)?'<span class="label label-success">Direct pays</span>':'<span class="label label-warning">Credit card</span>'!!}
                    </td>
                    
                    
                    <td>{{$value->created_at}}</td>
                    
                    <td>
                       <!-- {!!($value->status ==1)?'<span class="label label-success">dxl</span>':'<span class="label label-warning">&nbsp;Hide&nbsp;</span>'!!} -->
                        @if($value->status ==1)
                           
                             <span class="label label-success">dxl</span>
                           
                        @elseif ($value->status ==0)
                           
                             <span class="label label-danger">giao</span>
                           
                        @else
                             <span class="label label-info">nhan</span>
                          
                        @endif

                    </td>
                    <td style="width: 120px;">
                        <form action="{{route('adminorder.destroy',$value->id_order)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button>
                            <a href="{{route('adminorder.edit',['order'=> $value->id_order])}}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil "></span></a>
                            <a href="{{route('adminorder.show',['order'=> $value->id_order])}}" class="btn btn-success"><span class="glyphicon glyphicon-pencil "></span></a>
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