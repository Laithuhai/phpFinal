<?php
function getData1($id){
$sql = "Select * from tb_chatlieu where id = $id";
return $sql;
}
function updateData($id,$chatlieu){
	$sql1="UPDATE tb_chatlieu SET chatlieu='$chatlieu'
	WHERE id='$id'
	";
 $check = execute($sql1);


	return $check;
}