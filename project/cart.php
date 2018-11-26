<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link rel="shortcut icon" href="sofaImage/logo/logo.jpg">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		.cart{
			float: left;
			max-width: 600px;
			height: auto;
			margin: 20px;
			padding: 10px;
			
		}
		.bill{
			float: right;
			max-width: 300px;
			height: 500px;
			margin-right: 100px;
			padding: 10px;
			
		}
	</style>
<title>Giỏ hàng</title>
</head>

<body>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php"><img src="sofaImage/logo/logo1.png" style="width: 30%"></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#">Trang chủ</a></li>
      <li ><a href="shop.php">Cửa hàng <span class="caret"></span></a>
        
      </li>
      <li><a href="blog.php">Bài viết</a></li>
	  <li><a href="intro.php">Giới thiệu</a></li>
	  <li><a href="contact.php">Liên hệ</a></li>
		
    </ul></div>
	  </nav>
<p style="margin: 50px;"><strong>Giỏ hàng()</strong></p>
		<div class="cart">
		  <table style=" margin-left:50px;" width="499" height="246" border="0" bgcolor="#B3AAAA">
		    <tbody>
		      <tr>
		        <td width="230" height="47">Sản phẩm</td>
		        <td width="105">Giá</td>
		        <td width="69">Số lượng</td>
		        <td width="67">&nbsp;</td>
	          </tr>
		      <tr>
		        <td height="90"><img src="sofaImage/sofa1.jpg" style="width: 50%">Tên sản phẩm</td>
		        <td><p class="text-danger"> ....VND</p></td>
		        <td><select name="select" id="select">
					<option>1</option>
					<option>2</option>
	            </select></td>
		        <td><a class="glyphicon glyphicon-heart-empty"></a>
			    <a class="glyphicon glyphicon-trash"></a></td>
	          </tr>
		      <tr>
		        <td>&nbsp;</td>
		        <td>&nbsp;</td>
		        <td>&nbsp;</td>
		        <td>&nbsp;</td>
	          </tr>
	        </tbody>
	      </table>
		  <p>Phương thức thanh toán:
            <select>
				<option>Điện tử</option>
				<option>Tiền mặt</option>
            </select>
		  </p>
		  <p>Phương thức giao hàng
		    :
		    <select name="select2">
				<option>Giao hàng nhanh</option>
				<option>Giao hàng tiêu chuẩn</option>
				<option>Giao hàng tiết kiệm</option>
	        </select>
		  </p>
        </div>
<div class="bill">
	<table width="340" height="313" border="0">
	  <tbody>
	    <tr>
	      <td width="165">Địa điểm:</td>
	      <td width="159">&nbsp;</td>
        </tr>
	    <tr>
	      <td>Thông tin đơn hàng:</td>
	      <td>&nbsp;</td>
        </tr>
	    <tr>
	      <td>Tạm tính:</td>
	      <td>&nbsp;</td>
        </tr>
	    <tr>
	      <td>Phí giao hàng:</td>
	      <td>&nbsp;</td>
        </tr>
	    <tr>
	      <td>Tổng cộng:</td>
	      <td>&nbsp;</td>
        </tr>
      </tbody>
  </table>
	<p><button class="btn-danger">Xác nhận giỏ hàng</button></p>
</div>
</body>
</html>
	<?php include "footer.php";?>