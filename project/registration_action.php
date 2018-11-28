<?php
session_start();
include('function.php');
$connection=connect();

if(isset($_POST['dangky'])){
$username= $_POST['txt_username'];
$password= $_POST['txt_psw'];
$re_password= $_POST['psw-repeat'];
$hoten= $_POST['txt_name'];
$ngaysinh= $_POST['date'];
$phone= $_POST['number'];

$email= $_POST['email'];
  if(!$username ||!$password ||!$re_password ||!$hoten ||!$phone || !$ngaysinh ||!$email ){
    echo"Vui lòng điền đầy đủ thông tin.";
    exit;
  } else if(mysqli_num_rows(mysqli_query($connection,"SELECT username from tb_khachhang Where username='$username'"))>0){
    echo"Tên đăng nhập đã được sử dụng, vui lòng nhập tên khác";
    exit;
  }else if($password!=$re_password){
    echo"Mật khẩu đăng nhập lại chưa đúng.";
    exit;
  }else if (!preg_match ("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+\.[A-Za-z]{2,6}$/", $email)){
    echo"Email chưa đúng.";
   }else if(mysqli_num_rows(mysqli_query($connection,"SELECT email from tb_khachhang where email='$email'"))>0){
    echo"Email đã được sử dụng, vui lòng nhập email khác";  
    exit;
   }else{
   $sql = "INSERT INTO tb_khachhang (
                    username,
                    password,
                    ten_kh,
                    dienthoai,
                    email,
                    diachi
                  ) VALUES (
                    '$username',
                    '$password',
                    '$hoten',
                    '$phone',
                    '$email',
                    '$address'
                  )";

    $check=mysqli_query($connection,$sql);
    if($check){
      header('Location: home.php');
    }else{
   echo"Bạn đã đăng ký thất bại";
   }
}


}


