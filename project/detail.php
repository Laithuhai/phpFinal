<!doctype html>
<html>
<head>
	<link rel="shortcut icon" href="sofaImage/logo/logo.jpg">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<title>Chi tiết</title>
</head>

<body>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php"><img src="sofaImage/logo/logo1.png" style="width: 30%"></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="home.php">Trang chủ</a></li>
      <li ><a href="shop.php">Cửa hàng <span class="caret"></span></a>
        
      </li>
      <li><a href="blog.php">Bài viết</a></li>
		<li><a href="intro.php">Giới thiệu</a></li>
		<li><a href="contact.php">Liên hệ</a></li>
		
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="home.php"><span class="glyphicon glyphicon-user"></span></a></li>
      <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
		      <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>

    </ul>
  </div>
</nav>
<div class="container">
	<p><a href="home.php" style="text-decoration: none;">Trang chủ</a>>Sảm phẩm>Chi tiết sản phẩm</p>
	 <div class="left">
		 <div class="img-magnifier-container"><img id="myimage" src="sofaImage/sofa1.jpg" style="width: 70% ">
	  </div>
		 
	   <div class="nav navbar-nav" style="padding: 20px;">
		  <img src="sofaImage/sofawhite.png" style="width: 22%;border: thin">
			 		  <img src="sofaImage/sofared.png" style="width: 22%; border: thin">
<img src="sofaImage/sofabrown.png" style="width: 22%; border: thin">
 </div>		  
</div>
  <div class="right" style="padding: 30px; ">
	  <h2>Tên sản phẩm</h2>
	    <p>Mô tả</br>........</p>
	
	
        <p>
          <label for="select">Màu sắc:</label>
          <select name="select" id="select">
			  <option>Xanh</option>
			  <option>Đỏ</option>
          </select>
        </p>
        <p>
          <label for="select2">Kích cỡ:</label>
          <select name="select2" id="select2">
			  <option>S</option>
			  <option>M</option>
          </select>
</p>
        <p>
          <label for="select3">Số lượng:</label>
          <select name="select3" id="select3">
			  <option>1</option>
			  <option>2</option>
          </select>
        </p>
        <button class="btn-danger">Mua ngay</button>
	<button class="btn-default"> Thêm vào giỏ hàng</button>
	</div>	</hr>
<div class="detail">
   <p><strong>Thông tin sản phẩm</strong>
  </p>
   <table width="1169" border="1">
     <tbody>
       <tr>
         <td width="251">&nbsp;</td>
         <td width="902">&nbsp;</td>
       </tr>
       <tr>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
       </tr>
       <tr>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
       </tr>
       <tr>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
       </tr>
       <tr>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
       </tr>
     </tbody>
</table></br>
</hr>
   <p><strong>Dịch vụ</strong></p>
   </br>
</hr>
 
   <p><strong>Sản phẩm liên quan</strong></p>
   </div>
  </div>
	  
	<style>
		.left{
			float: left;
			max-height: 600px;
			max-width: 600px;
		}
		.caption ul li{
			st: line ;
		}
		.right{
			float: right;
			max-width: 700px;
			max-height: 500px;
			margin-right: 200px;
		}
		.detail{
			float: left;
			width: 100%;
			height:auto;
		}
	  </style>  
	</div>
</body>
</html>
<?php include"footer.php"?>