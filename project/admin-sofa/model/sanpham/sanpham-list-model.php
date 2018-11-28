<?php
function getAllData($q,$i,$n){
	return getData("Select * from tb_sp where ten_sp like '%$q%' limit $i, $n");
	var_dump(getData("Select * from tb_sp where ten_sp like '%$q%' limit $i, $n"));
}
function countData(){

	return getOneData('Select count(*) as count from tb_sp');
}

?>