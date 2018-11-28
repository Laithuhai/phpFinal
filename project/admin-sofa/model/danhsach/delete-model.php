<?php
$id = $_GET['id'];
$sql = "Delete from tb_admin where id = $id";
$check = mysqli_query(connect(), $sql);

if ($check){
    header("location:index.php");
    exit();
}else{
    echo "xoa that bai";
}