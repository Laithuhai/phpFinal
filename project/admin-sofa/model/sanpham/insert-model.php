<?php
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
function insertData($ten_sp,$mota,$ngaysx,$anh,$sl,$giacu,$giamoi,$url,$ngaynhapkho,$trangthai,$an_hien,$kichco,$mausac,$hang,$chatlieu,$loai_sp){
	$sql = "Insert into tb_sp (ten_sp,mota, ngay_sx, anh_daidien,soluong,giacu,giamoi,url,ngaynhapkho, trangthai,an_hien,id_kich_co,id_mau_sac,id_hang,id_chatlieu,id_loai_sp) values('$ten_sp','$mota','$ngaysx','$anh','$sl','$giacu','$giamoi','$url','$ngaynhapkho','$trangthai','$an_hien','$kichco','$mausac','$hang','$chatlieu','$loai_sp')";
	var_dump($sql);
	$check = execute($sql);
    return $check;

}