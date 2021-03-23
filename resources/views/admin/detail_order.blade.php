@extends('admin.main')
@section('content')

<section class="content-header">
      <h1>
        <b>Deatail order management</b>
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
       
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-8 connectedSortable">

          <!-- Map box -->
         <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><code><b>Edit new product</b></code></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
             <table class="table table-hover">
                <tbody><tr>
                  
                  <th>Name Product</th>
                  <th>Image</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th>Amount</th>
                  
                  <th>Created_at</th>
                  <th>Status</th>
                </tr>
                @php
                  $total =0; 
                @endphp
               @foreach ($ord as $value)
                @php
                  $total += $val->amount; 
                @endphp
                  <tr>
                    <td>{{ $value->product->name }}</td>
                    <td><img src="{{ asset('uploads')}}/{{ $value->product->img_product }}" class="img-responsive" alt="Image" style="width: 70px;"></td>
                    <td>{{$value->quantity}}</td>
                    <td>{{$value->price}} $</td>
                    <td>{{$value->amount}} $</td>
                    
                    <td>{{$value->created_at}}</td>
                    <td>
                       
                        @if($value->status ==1)
                           
                             <span class="label label-success">dxl</span>
                           
                        @elseif ($value->status ==0)
                           
                             <span class="label label-danger">giao</span>
                           
                        @else
                             <span class="label label-info">nhan</span>
                          
                        @endif

                    </td>
                    
                      </tr>
                
            
                @endforeach
                  
                </tbody>
              </table>
          </div>
          <!-- /.box -->
          <!-- solid sales graph -->
        
          <!-- /.box -->

          <!-- Calendar -->
         
          <!-- /.box -->

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
@stop()