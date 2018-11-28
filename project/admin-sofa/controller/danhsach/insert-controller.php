<?php
include_once 'model/danhsach/insert-model.php';
if(isset($_POST['submit'])){
	$username = $_POST['txt_username'];
	$pass = $_POST['txt_password'];
	$ten = $_POST['txt_ten'];
	$dienthoai = $_POST['txt_dienthoai'];
	$email = $_POST['txt_email'];
	$diachi = $_POST['txt_diachi'];
	$check= insertAdmin($username,$pass,$ten,$dienthoai,$email,$diachi);
		if($check){
		redirect('?controller=danhsach');
	}
	else{
		echo "Thêm mới thất bại";
	}}
include_once 'view/danhsach/insert-view.php';