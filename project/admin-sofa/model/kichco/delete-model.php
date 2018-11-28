<?php
$id = $_GET['id'];
$sql = "Delete from tb_chatlieu where id = $id";
$check = mysqli_query(connect(), $sql);

if ($check){
    header("location:index.php?controller=chatlieu");
    exit();
}else{
    echo "<h1>Bạn không thể xóa loại chất liệu này!</h1>";
    echo "<a href='javascript: history.go(-1)''><button type='button' class='btn btn-primary'>Quay Lại</button><a>";
}