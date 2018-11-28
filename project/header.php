<?php session_start(); ?>
<!doctype html>
<html>
<head>
	<link rel="shortcut icon" href="sofaImage/logo/logo.jpg">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
	body {
		font-family: Arial, Helvetica, sans-serif;
		font-size: 18px;
	}
	.page-header{
		height: 30px;
		box-shadow: 0 1px snow;
		padding-bottom: 50px;
	}
	.page-header span{
		float: left;
		padding:0 100px 0 140px;
		margin-right: 10px;
	}
	.page-header span input{
		background-color: black;
		color: white;
		border-radius: 5px;
		
	}
input[type=text], input[type=password] {
    width: 95%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}


.container button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 49%;
	font-size: 20px;
}

.container button:hover {
    opacity: 0.8;
}


.container.cancelbtn  {
    width: 49%;
    padding: 10px 18px;
    background-color: red;
}


.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 20%;
    border-radius: 50%;
}

.container {
    padding: 16px;
	width:100%;
}

span.psw {
    float: right;
    padding-top: 16px;
}


.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%;
    overflow: auto; 
    background-color: rgb(0,0,0); 
    background-color: rgba(0,0,0,0.4); 
    padding-top: 60px;
}


.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; 
    border: 1px solid #888;
    width: 80%; 
}


.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}


.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}


@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    
}
	.heading{
		width: 100%;
		height: 50px;
	}
	.heading span{
		align-content:center;
		margin-right:50px;
		padding: 50px;
			
	}
.navbar navbar-inverse li{
	padding: 10px;
	color: black;
	}

	</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sofa Center</title>
</head>

<body>
	<?php 
	if (isset($_SESSION['username'])){
		echo 'Bạn đã đăng nhập với tài khoản'.$_SESSION['username']."</br>";
		echo 'click vào đây để <a href="logout.php">Logout</a>';
		
	}
	else{
		echo'';
	}
	?><div class="page-header " >
		<span>Chào mừng đến Website</span>
		<span>Đường dây nóng:<b class="text-danger">08888888</b></span>
	<span><input class="active navbar-right" type="button" align="right" value="Đăng nhập"  onclick="document.getElementById('id01').style.display='block'" style="width:auto;">
		<input class="active navbar-right " type="button" onclick="document.getElementById('id02').style.display='block'" style="width:auto;" value="Đăng ký"></span>
		
	</div>
	<div id="id01" class="modal">
  
  <form class="modal-content animate" action="login_action.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="sofaImage/avatar.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Nhập Username" name="txt_username" required>
		</br>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Nhập Password" name="txt_psw"  required>
        
      
      <label>
        <input type="checkbox" checked="checked" name="remember"> Ghi nhớ
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
		<button type="submit" name="dangnhap">Đăng Nhập</button>
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Hủy</button>
      
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
	
	<div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="registration_action.php" method="post">
    <div class="container">
      <h1>Trang đăng ký</h1>
      <p>Vui lòng nhập mới tài khoản</p>
      <hr>
      <label ><b>Username</b></label>
      <input type="text" placeholder="Nhập Username" name="txt_username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Nhập Password" name="txt_psw"  required>

      <label for="psw-repeat"><b>Nhập lại Password</b></label>
      <input type="password" placeholder="Nhập lại Password" name="psw-repeat" required>
      
		<label for="text"><b>Họ và tên</b> </label></br>
	  <input type="text" name="txt_name" placeholder="Vui lòng nhập tên đầy đủ" required></br>
		
		<label for="date"><b>Ngày sinh</b> </label></br>
	<input class="form-control input-lg" type="date" name="date" placeholder="Vui lòng nhập ngày sinh" required></br>
     
<label for="phone"><b>Số điện thọai</b> </label></br>
<input class="form-control input-lg" type="number" name="number" placeholder="Vui lòng nhập số điện thoại" required></br>

<label for="email"><b>Email</b></label></br>
      <input type="text" placeholder="Vui lòng Nhập Email" name="email" required>	
		
<div class="clearfix">
	<button type="submit" name="dangky" class="signupbtn">Đăng ký</button>
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Hủy</button>
        
      </div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');


window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


<div class="panel-heading ">
<img width="15%" src="sofaImage/logo/logo.jpg"/>
<span class="navbar-right">	<input type="search" align="right" id="myInput" placeholder="tìm kiếm....">
	<a ><button type="submit" class="glyphicon glyphicon-search"></button></a>
	<a href="cart.php"><button class="glyphicon glyphicon-shopping-cart" ></button></a>
	
	</span>
	<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</div>

<nav id="myHeader" class="navbar navbar-inverse ">
	

	<div class="container-fluid">
<ul class="nav navbar-nav">
      <li><a href="home.php">Trang chủ</a></li>
	<li ><a href="shop.php">Sản phẩm</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Nhãn hàng<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Nhập khẩu</a></li>
          <li><a href="#">Xuất khẩu</a></li>
          <li><a href="#">Nội địa</a></li>
        </ul>
      </li>
	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Loại sản phẩm<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Cổ điển</a></li>
          <li><a href="#">Hiện đại</a></li>
          <li><a href="#">Dân dụng</a></li>
        </ul>
      </li>
      <li><a href="blog.php">Bài viết</a></li>
	<li><a href="intro.php">Giới thiệu</a></li>
	<li><a href="contact.php">Liên hệ</a></li>
    </ul>
	</div>
</nav>

<div class="banner">
   
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    
    <div class="carousel-inner">
      <div class="item active">
        <img src="sofaImage/banner4.jpg" alt="banner1" style="width:1500px;height: 400px">
		</div>

      <div class="item">
        <img  src="sofaImage/banner1.jpg" alt="banner2" style="width:1500px; height: 400px" >
      </div>
    
      <div class="item">
        <img  src="sofaImage/banner2.jpg" alt="banner3" style="width: 1500px; height: 400px">
      </div>
    </div>

    
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>
</html>