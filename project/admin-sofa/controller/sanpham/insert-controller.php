<?php
include_once 'model/sanpham/insert-model.php';
	if(isset($_POST['submit'])){
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
	$check = insertData($ten_sp,$mota,$ngaysx,$anh,$sl,$giacu,$giamoi,$url,$ngaynhapkho,$trangthai,$an_hien,$kichco,$mausac,$hang,$chatlieu,$loai_sp);
	if($check){
		redirect('?controller=sanpham&action=index&p=$totalpage');
	}
	else{
		echo "Thêm mới thất bại";
	}
	}


include_once 'view/sanpham/insert-view.php';