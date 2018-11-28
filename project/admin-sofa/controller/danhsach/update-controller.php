<?php
include_once 'model/danhsach/update-model.php';
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$resultSet = mysqli_query(connect(), getData1($id));
$admin = mysqli_fetch_assoc($resultSet);
}
if(isset($_POST['submit'])){
	$id=$_POST['txt_id'];
	$username = $_POST['txt_username'];
	$pass = $_POST['txt_password'];
	$ten = $_POST['txt_ten'];
	$dienthoai = $_POST['txt_dienthoai'];
	$email = $_POST['txt_email'];
	$diachi = $_POST['txt_diachi'];
	$check =updateData($id,$username,$pass,$ten,$dienthoai,$email,$diachi);
		if($check){
		redirect('?controller=danhsach');
	}
	else{
		echo "Sửa thất bại";
	}
}
include_once 'view/danhsach/update-view.php';
