<?php
include_once 'model/hang/insert-model.php';
if(isset($_POST['submit'])){
	$hang = $_POST['txt_hang'];
	$check= insertAdmin($hang);
		if($check){
		redirect('?controller=hang');
	}
	else{
		echo "Thêm mới thất bại";
	}}
include_once 'view/hang/insert-view.php';