<?php
include_once 'model/chatlieu/update-model.php';
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$resultSet = mysqli_query(connect(), getData1($id));
$admin = mysqli_fetch_assoc($resultSet);
}
if(isset($_POST['submit'])){
	$id=$_POST['txt_id'];
	$chatlieu = $_POST['txt_chatlieu'];
	$check =updateData($id,$chatlieu);
		if($check){
		redirect('?controller=chatlieu');
	}
	else{
		echo "Sửa thất bại";
	}
}
include_once 'view/chatlieu/update-view.php';
