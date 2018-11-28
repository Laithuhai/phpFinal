<?php
session_start();

include('function.php');
$connection=connect();
  if(isset($_POST['dangnhap'])){
  $username= $_POST['txt_username'];
  $password= $_POST['txt_psw'];
  if(!$username || !$password){
    echo"Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu.";
    exit;
  }
  $sql=mysqli_query($connection,"SELECT username, password FROM tb_khachhang WHERE username='$username'");
  if(mysqli_num_rows($sql)==0){
      echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
  }
  $row= mysqli_fetch_array($sql);
  if($password != $row['password']){
     echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
  }
  $_SESSION['username'] = $username;
    echo "Xin chào " . $username . ". Bạn đã đăng nhập thành công. ";   
}
  header('Location: home.php');

?>