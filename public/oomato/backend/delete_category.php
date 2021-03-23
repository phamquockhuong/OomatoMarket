<?php 
include 'connect.php';
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$delete = "DELETE FROM category WHERE id_cate = $id";
		$query = mysqli_query($connect,$delete);
		if ($query) {
			header('location:list_category.php');
		}else{
			echo 'Đã có lỗi xảy ra';
		}

	}
 ?>