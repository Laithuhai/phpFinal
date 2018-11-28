<?php
function getData1($id){
$sql = "Select * from tb_sp where id = $id";
return $sql;
}
function getDataSize(){
	$sql="SELECT *FROM tb_kich_co";
	$result= getData($sql);
	return $result;
}
function getDataColor(){
	$sql="SELECT *FROM tb_mau_sac";
	$result= getData($sql);
	return $result;
}
function getDataBrand(){
	$sql="SELECT *FROM tb_hang";
	$result= getData($sql);
	return $result;
}
function getDataMaterial(){
	$sql="SELECT *FROM tb_chatlieu";
	$result= getData($sql);
	return $result;
}
function getDataType(){
	$sql="SELECT *FROM tb_loai_sp";
	$result= getData($sql);
	return $result;
}
function updateData($id,$ten_sp,$mota,$ngaysx,$anh,$sl,$giacu,$giamoi,$url,$ngaynhapkho,$trangthai,$an_hien,$kichco,$mausac,$hang,$chatlieu,$loai_sp){
	$sql1="UPDATE tb_sp SET ten_sp='$ten_sp', mota='$mota', ngay_sx='$ngaysx',anh_daidien='$anh',
	soluong='$sl', giacu='$giacu', giamoi='$giamoi', url='$url', ngaynhapkho='$ngaynhapkho', trangthai='$trangthai', an_hien='$an_hien',id_kich_co='$kichco', id_mau_sac='$mausac',id_hang='$hang',id_chatlieu='$chatlieu', id_loai_sp='$loai_sp'
	WHERE id='$id'
	";
 $check = execute($sql1);


	return $check;
}