<?php
function getData1($id){
$sql = "Select * from tb_hang where id = $id";
return $sql;
}
function updateData($id,$hang){
	$sql1="UPDATE tb_hang SET hang='$hang'
	WHERE id='$id'
	";
 $check = execute($sql1);


	return $check;
}