<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="sofaImage/logo/logo.jpg">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
    box-sizing: border-box;
}


input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}


.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 10px;
}


.column {
    float: left;
    width: 50%;
    margin-top: 6px;
    padding: 20px;
}


.row:after {
    content: "";
    display: table;
    clear: both;
}


@media screen and (max-width: 600px) {
    .column, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
</style>
</head>
<body>

<?php
	include "header.php";
	?>
<div class="container">
  <div style="text-align:center">
    <h2>Liên hệ</h2>
    <p>Thông tin liên hệ</p>
  </div>
  <div class="row">
    <div class="column">
      <div id="map" style="width:100%;height:500px"></div>
    </div>
    <div class="column">
      <form action="/action_page.php">
        
        <label for="lname">Họ và tên</label>
        <input class="form-control input-lg" type="text" id="name" name="name" placeholder="điền đầy đủ họ và tên">
		  <label for="number">Số điên thoại</label></br>
		<input class="form-control input-lg" type="phone" name="phone" placeholder="điền số điện thoại"></br>
	  <label for="email">Email</label></br>
	<input class="form-control input-lg" type="email" id="email" name="email" placeholder="điền địa chỉ email"></br>
		  
        <label for="country">Tỉnh/thành phố</label>
        <select id="country" name="country">
          <option value="australia">Hà Nội</option>
          <option value="canada">Đà Nẵng</option>
          <option value="usa">TP. Hồ Chí Minh</option>
        </select>
        <label for="subject">Ghi chú</label>
        <textarea id="subject" name="subject" placeholder="viết gì đó" style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>

<script>
// Initialize google maps
function myMap() {
  var myCenter = new google.maps.LatLng(50.508742,-0.120850);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 12};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

<?php include"footer.php";?>
</body>
</html>
