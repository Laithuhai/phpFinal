<?php
include_once 'model/hang/update-model.php';
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$resultSet = mysqli_query(connect(), getData1($id));
$admin = mysqli_fetch_assoc($resultSet);
}
if(isset($_POST['submit'])){
	$id=$_POST['txt_id'];
	$hang = $_POST['txt_hang'];
	$check =updateData($id,$hang);
		if($check){
		redirect('?controller=hang');
	}
	else{
		echo "Sửa thất bại";
	}
}
include_once 'view/hang/update-view.php';
