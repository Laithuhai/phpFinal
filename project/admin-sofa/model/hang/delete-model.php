<?php
$id = $_GET['id'];
$sql = "Delete from tb_hang where id = $id";
$check = mysqli_query(connect(), $sql);

if ($check){
    header("location:index.php?controller=hang");
    exit();
}else{
    echo "<h1>Bạn không thể xóa tên hãng này!</h1>";
    echo "<a href='javascript: history.go(-1)''><button type='button' class='btn btn-primary'>Quay Lại</button><a>";
}