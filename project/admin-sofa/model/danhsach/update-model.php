<?php
function getData1($id){
$sql = "Select * from tb_admin where id = $id";
return $sql;
}
function updateData($id,$username,$pass,$ten,$dienthoai,$email,$diachi){
	$sql1="UPDATE tb_admin SET username='$username', password='$pass', ten='$ten',dienthoai='$dienthoai',
	email='$email', diachi='$diachi'
	WHERE id='$id'
	";
 $check = execute($sql1);


	return $check;
}