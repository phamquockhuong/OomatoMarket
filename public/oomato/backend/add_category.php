<?php 
include 'connect.php';
$category = mysqli_query($connect,"SELECT*FROM category");
	if(isset($_POST['name'] )){
		$name = $_POST['name'];
		$status = $_POST['status'];
		$sql = "INSERT INTO category(name,status) VALUES ('$name','$status')";
		$query = mysqli_query($connect,$sql);
		if ($query) {
			header('location:add_category.php');
		}else{
			echo 'Đã có lỗi xảy ra';
		}
	}
?>

<?php include 'nav_admin.php' ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <b>Catalog management</b>
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
        <section class="col-lg-7 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
         
          <!-- /.nav-tabs-custom -->

          <!-- Chat box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><mark>List of categories</mark></h3>

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
                  <th style="padding-left: 15px;">Name</th>
                  <th>Date created</th>
                  <th>Status</th>
                  <th style="padding-left: 22px;">Action</th>
                </tr>
                <?php foreach ($category as $value): ?>
                	<tr>
	                	<td style="padding-left: 15px;"><?php echo $key+1 ?></td>
	                	<td><?php echo $value['name'] ?></td>
	                	<td style="padding-left: 15px;"><?php echo $value['created_at'] ?></td>
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
        <section class="col-lg-5 connectedSortable">

          <!-- Map box -->
         <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><code><b>Add new categories</b></code></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="" method="POST" role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter the category name</label>
                  <input type="text" name="name" id="name" class="form-control" value="" placeholder="Input field">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Status</label>
                  
                </div>
                <div class="radio">
                  <label class="col-md-6">

                    <input type="radio" name="status" id="status" value="0" checked="checked">
                    Hide category

                  </label>
                  <label class="col-md-6">
                    
                    <input type="radio" name="status" id="status" value="1" checked="checked">
                    Show category

                  </label>

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
    <!-- /.content -->


 <?php include 'footer_admin.php' ?>