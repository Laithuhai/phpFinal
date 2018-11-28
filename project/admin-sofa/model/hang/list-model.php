<?php
function getAllData($q,$i,$n){
	return getData("Select * from tb_hang where ten_hang like '%$q%' limit $i, $n");
}
function countData(){

	return getOneData('Select count(*) as count from tb_hang');
}

?>