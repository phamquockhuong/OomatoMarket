<?php 
include 'connect.php';
$category = mysqli_query($connect,"SELECT*FROM category");
$product = mysqli_query($connect,"SELECT*FROM product");
  if(isset($_POST['name'] )){
    $name = $_POST['name'];
    $id_cate = $_POST['id_cate'];
    $price = $_POST['price'];
    $sale_price = $_POST['sale_price'];
    $new_product = $_POST['new_product'];
    $title = $_POST['title'];
    $status = $_POST['status'];
    if (isset($_FILES['img_product'])) {
      // var_dump($_FILES['img_product']);
      $file = $_FILES['img_product'];
      $file_name = $file['name'];
      move_uploaded_file($file['tmp_name'],'../upload/'.$file_name);
    }
    $sql = "INSERT INTO product(name,id_cate,price,sale_pice,new_product,title,status,img_product) VALUES ('$name','$id_cate','$price','$sale_price','$new_product','$title','$status','$file_name')";
    $query = mysqli_query($connect,$sql) or die($sql);
    if ($query) {
      header('location:add_product.php');
    }else{
      echo 'Đã có lỗi xảy ra';
    }
  }
?>

<?php include 'nav_admin.php' ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <b>Products management</b>
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
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
        <section class="col-lg-12 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
         
          <!-- /.nav-tabs-custom -->

          <!-- Chat box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><mark>List of products</mark></h3>

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
                <tr>
                  <th>STT</th>
                  <th style="padding-left: 22px;">Name</th>
                  <th>Price</th>
                  <th>Sale price</th>
                  <th>Description</th>
                  <th>New Product</th>
                  <th>Date created</th>
                  <th>Image</th>
                  <th>Status</th>
                  <th style="padding-left: 22px;">Action</th>
                </tr>
                <?php foreach ($product as $key => $value): ?>
                  <tr>
                    <td style="padding-left: 15px;"><?php echo $key+1 ?></td>
                    <td><?php echo $value['name'] ?></td>
                    <td><?php echo $value['price'] ?></td>
                    <td><?php echo $value['sale_pice'] ?></td>
                    <td><?php echo $value['title'] ?></td>
                    <?php if ($value['new_product']==1): ?>
                      <td style="padding-left: 22px;"><span class="label label-success">New</span></td>
                    <?php endif ?>
                    <?php if ($value['new_product']==0): ?>
                      <td style="padding-left: 22px;"><span class="label label-warning">&nbsp;Old&nbsp;</span></td>
                    <?php endif ?>
                    <td><?php echo $value['created_at'] ?></td>
                    <td><img src="../upload/<?php echo $value['img_product'] ?>" class="img-responsive" style="width: 60px;"></td>
                    <?php if ($value['status']==1): ?>
                      <td><span class="label label-success">Show</span></td>
                    <?php endif ?>
                    <?php if ($value['status']==0): ?>
                      <td><span class="label label-warning">&nbsp;Hide&nbsp;</span></td>
                    <?php endif ?>
                    <td>
                      <a href="edit_category.php?id=<?php echo $value['id_cate'] ?>"><span class="glyphicon glyphicon-pencil btn btn-primary"></span></a>
                      <a href="delete_category.php?id=<?php echo $value['id_cate'] ?>"><span class="glyphicon glyphicon-remove btn btn-danger"></span></a>
                    </td>
                  </tr>
                <?php endforeach ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box (chat box) -->

          <!-- TO DO List -->
         
          <!-- /.box -->

          <!-- quick email widget -->
          

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->


 <?php include 'footer_admin.php' ?>