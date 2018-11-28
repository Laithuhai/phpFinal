<?php
$id = $_GET['id'];
$sql = "Delete from tb_sp where id = $id";
$check = mysqli_query(connect(), $sql);

if ($check){
    header("location:index.php?controller=sanpham");
    exit();
}else{
    echo "xoa that bai";
}