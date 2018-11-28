<?php
function getAllData($q,$i,$n){
	return getData("Select * from tb_admin where username || ten like '%$q%' limit $i, $n");
}
function countData(){

	return getOneData('Select count(*) as count from tb_admin');
}

?>