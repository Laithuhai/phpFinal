<?php
include_once 'model/chatlieu/insert-model.php';
if(isset($_POST['submit'])){
	$chatlieu = $_POST['txt_chatlieu'];
	$check= insertAdmin($chatlieu);
		if($check){
		redirect('?controller=chatlieu');
	}
	else{
		echo "Thêm mới thất bại";
	}}
include_once 'view/chatlieu/insert-view.php';