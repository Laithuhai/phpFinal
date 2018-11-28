<?php
include_once 'model/sanpham/update-model.php';
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$resultSet = mysqli_query(connect(), getData1($id));
$sp = mysqli_fetch_assoc($resultSet);
}
	if(isset($_POST['submit'])){
	$p=$_GET['p'];
	$id=$_POST['txt_id'];
	$ten_sp=$_POST['txt_tensp'];
	$mota=$_POST['txt_mota'];
	$ngaysx=$_POST['txt_ngaysx'];
	$anh=$_POST['txt_anh'];
	$sl=$_POST['txt_sl'];
	$giacu=$_POST['txt_giacu'];
	$giamoi=$_POST['txt_giamoi'];
	$url=$_POST['txt_url'];
	$ngaynhapkho=$_POST['txt_ngaynhapkho'];
	$trangthai=$_POST['txt_trangthai'];
	$an_hien=$_POST['txt_anhien'];
	$kichco=$_POST['size'];
	$mausac=$_POST['color'];
	$hang=$_POST['brand'];
	$chatlieu=$_POST['material'];
	$loai_sp=$_POST['type'];
	$check =updateData($id,$ten_sp,$mota,$ngaysx,$anh,$sl,$giacu,$giamoi,$url,$ngaynhapkho,$trangthai,$an_hien,$kichco,$mausac,$hang,$chatlieu,$loai_sp);

		if($check){
		redirect('?controller=sanpham');
		
	}
	else{
		echo "Sửa thất bại";
	}
}
include_once 'view/sanpham/update-view.php';