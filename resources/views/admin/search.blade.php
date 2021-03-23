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
           <a href="{{route('product.create')}}" class="btn btn-success">+Add to Product</a>

              <div class="box-tools">
                <div class="input-group input-group-sm" >
                  <!-- <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div> -->
                  <form class="navbar-form navbar-left" method="get" role="search" action="{{route('search1')}}">
              <div class="form-group">
                <input type="text" name="table_search"name="key" class="form-control pull-right" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
            </form>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>STT</th>
                  <th>Name</th>
                  <th>Category</th>
                  <th>Price</th>
                  <th>Sale</th>
                  <th class="text-center">Amount</th>
                  <th>Description</th>
                  <th>New</th>
                  <th>Date create</th>
                  <th style="padding-left: 15px;">Image</th>
                  <th>Status</th>
                  <th style="padding-left: 22px;">Action</th>
                </tr>
                
                 @foreach($timkiem as $value)
                  <tr>
                    <td style="padding-left: 15px;">{{$loop->index+1}}</td>
                 
                    <td style="max-width: 200px;">{{$value->name}}</td>
                    <td style="max-width: 150px;">{{$value->category->name}}</td>
                    <td>{{$value->price}}</td>
                    <td>{{$value->sale_price}}</td>
                    <td class="text-center">{{$value->amount}}</td>
                    <td style="max-width: 300px;">{{$value->title}}
                    </td>
                    <td>
                       {!!($value->new_product ==1)?'<span class="label label-success">New</span>':'<span class="label label-warning">&nbsp;Old&nbsp;</span>'!!}
                    </td>
                    <td>{{$value->created_at}}</td>
                    <td style="padding-top: 0;"><img src="{{ asset('uploads')}}/{{$value->img_product}}" height="auto" width="60px"></td>
                    <td>
                       {!!($value->status ==1)?'<span class="label label-success">Show</span>':'<span class="label label-warning">&nbsp;Hide&nbsp;</span>'!!}
                    </td>
                    <td style="width: 120px;">
                        <form action="{{route('product.destroy',$value->id_product)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button>
                            <a href="{{route('product.edit',['product'=> $value->id_product])}}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil "></span></a>
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