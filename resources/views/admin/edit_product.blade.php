
@extends('admin.main')
@section('content')

<section class="content-header">
      <h1>
        <b>Product management</b>
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
            <form action="{{route('adminproduct.update',['product'=>$pro->id_product])}}" method="POST" role="form">
              @method('PUT')
              
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter the product name</label>
                  <input type="text" name="name" id="name" class="form-control" value="{{$pro->name}}" placeholder="Input field">
                </div>
                <div class="form-group">
                  <label>List of categories</label>
                  <select name="id_cate" id="input" class="form-control" required="required">
                    <option value="">- - -  Choose a category  - - -</option>
                    @foreach($category as $value)
                    <option value="{{$value->id_cate}}" {{($value->id_cate == $pro->id_cate)?'selected':''}}>{{$value->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter the product price</label>
                  <input type="number" name="price" id="price" class="form-control" value="{{$pro->price}}" placeholder="Input field">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter the product sale price</label>
                  <input type="number" name="sale_price" id="sale_price" class="form-control" value="{{$pro->sale_price}}" placeholder="Input field">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter the product title</label>
                  <input type="text" name="title" id="title" class="form-control" value="{{$pro->title}}" placeholder="Input field">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter the product amount</label>
                  <input type="number" name="amount" id="amount" class="form-control" value="{{$pro->amount}}" placeholder="Input field">
                </div>
                <div class="form-group" style="padding-bottom: 30px;">
                  <label for="">New product</label>
                  
               
                <div class="radio">
                  <label class="col-md-6">

                    <input type="radio" name="new_product" id="new_product" value="0" checked="checked">
                    Yes

                  </label>
                  <label class="col-md-6">
                    
                    <input type="radio" name="new_product" id="new_product" value="1" checked="checked">
                    No

                  </label>
                   </div>
                </div>

                <div class="form-group">
                  <label for="">Choose image for the product</label>
                  <a class="btn btn-info" data-toggle="modal" href='#modal-file'><span class="glyphicon glyphicon-picture"></span>
                  </a>
                  <input type="text" name="img_product" id="image" value="http://localhost/oomato_market/uploads/{{$pro->img_product}}" >
                  
                </div>
                  <div class="form-group">
                    <img id = "img" src="{{url('uploads')}}/{{$pro->img_product}}" class="img-responsive" alt="Image" style="width: 200px;height: auto;">
                  </div>
                 <div class="form-group">
                  <label for="">Choose image-related for the product</label>
                  <a class="btn btn-info" data-toggle="modal" href='#modal-file-list'><span class="glyphicon glyphicon-picture"></span>
                  </a>
                  <input type="text" name="img_productList" id="imageList" value='["http://localhost/oomato_market/uploads/{{$pro->img_product}}","http://localhost/oomato_market/uploads/{{$pro->img_product}}"]' >

                  
                    <div class="form-group">
                      <div class="row" id="show">
                      @foreach($img_product as $value)
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                          <div class="thumbnail">
                            <img src="{{url('uploads')}}/{{$value->image}}" alt="">
                            
                          </div>
                        </div>
                      @endforeach
                    </div>
                    </div></div>
                   <div class="form-group">
                       
                      
                      
                  </div>
                  <div class="modal fade" id="modal-file">
                    <div class="modal-dialog" style="width: 90%;">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                          <iframe src="{{url('filemanager')}}/dialog.php?field_id=image" style="width: 100%;height: 700px;"></iframe>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>

                   <div class="modal fade" id="modal-file-list">
                    <div class="modal-dialog" style="width: 90%;">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                          <iframe src="{{url('filemanager')}}/dialog.php?field_id=imageList" style="width: 100%;height: 700px;"></iframe>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Status</label>
                  
                
                <div class="radio">
                  <label class="col-md-6">

                    <input type="radio" name="status" id="status" value="0" checked="checked">
                    Hide product

                  </label>
                  <label class="col-md-6">
                    
                    <input type="radio" name="status" id="status" value="1" checked="checked">
                    Show product

                  </label>

                  </div>
                 </div>
                </div>
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
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