<?php
function connect(){
$connect = mysqli_connect('localhost','root','','sofa') or die('lỗi kết nối cơ sở dữ liệu'.mysqli_connect_error());
mysqli_set_charset($connect,'utf8');
return $connect;
}
function getData($sql){
    $resultSet = mysqli_query(connect(), $sql);
    $result = [];
    while (true) {
        $row = mysqli_fetch_assoc($resultSet);
        if ($row == null) {
            break;
        }
        $result[] = $row;
    }

    return $result;
}
function getOneData($sql){
    $connection = connect();
    $resultSet = mysqli_query($connection, $sql);
    return mysqli_fetch_assoc($resultSet);
}
// Function nay dung cho cac cau lenh: them, sua, xoa
function execute($sql){
    return mysqli_query(connect(), $sql);
}
// Function dung de dieu huong nguoi dung
function redirect($path){
    header("location: $path");
}
function dd($data = ''){
    echo "<pre>";
    var_dump($data);
    die();
}
function isLogin(){
    return @$_SESSION['is_login'];
}
function getLoginUsername(){
    return @$_SESSION['username'];
}