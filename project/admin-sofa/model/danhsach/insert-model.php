<?php
function insertAdmin($username,$pass,$ten,$dienthoai,$email,$diachi){

    $sql = "Insert into tb_admin ( username, password, ten, dienthoai, email, diachi) values( '$username', '$pass', '$ten', '$dienthoai', '$email', '$diachi')";

    $check = execute($sql);
    return $check;
}
