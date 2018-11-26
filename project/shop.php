<?php
include("function.php");
$connection=connect();
$q= isset($_GET['q'])?$_GET['q']:'';
$t_Data=getOneData('select count(*) as count from tb_sp');
$t=$t_Data['count'];
$n=9;
$p=(@$_GET['p'] && @$_GET['p']>1)? $_GET['p']:1;
$totalPage=ceil($t/$n);
if($p>$totalPage){
	$p=$totalPage;
}
$i=$n*($p-1);
$i=$i<0?0:$i;
$sql="SELECT* FROM tb_sp  where ten_sp like '%$q%' limit $i,$n ";
$spList= getData($sql);

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link rel="shortcut icon" href="sofaImage/logo/logo.jpg">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sofa Center</title>
	<style>
		.left-content{
			float:left;
			width:330px;
			padding: 30px;
			margin: 20px;
			box-shadow: 7px;
			border: solid  gray;
			border-radius:5px; 
		}
		.left-content span{
			padding: 30px;
			margin: 20px;
			
		}
		.right-content{
			float: right;
			width:900px;
			height:auto;
			padding: 10px;
		}	
	.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
	
}


.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
	
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}


.tab button:hover {
    background-color: #ddd;
}


.tab button.active {
    background-color: #ccc;
}


.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
		
		ul li{
			list-style: none;
		}
</style>	
</head>

<body>
<?php include("header.php")
?>	
<div class="content">
<!--	lọc-->
<div class="left-content">
	<span class="list-group"><p><b>Nhãn hàng</b></p>
		<?php
	$query="select DISTINCT (ten_hang) from tb_hang INNER JOIN tb_sp on tb_hang.id=tb_sp.id_hang WHERE trangthai=1";
	$result=execute($query);

	foreach($result as $row){?>
		<div class="list-group-item-checkbox">
		<label><input type="checkbox" id="brand" class="common_selector brand" value="<?php echo $row['ten_hang']?>">
		<?php echo $row['ten_hang']?></label></div>
	<?php	
	}
		?>
	<hr>
	</span>
<span class="list-group"><p><b>Chất liệu</b></p>
	<?php
	$query1="select DISTINCT (chatlieu) from tb_chatlieu INNER JOIN tb_sp on tb_chatlieu.id=tb_sp.id_chatlieu WHERE trangthai=1";
	
	$result=execute($query1);
	
	
	foreach($result as $row){?>
		<div class="list-group-item-checkbox">
		<label><input type="checkbox" class="common_selector brand" id="chatlieu" value="<?php echo $row['chatlieu']?>">
		<?php echo $row['chatlieu']?></label></div>
	<?php	
	}
		?>	
<hr>
	</span>
<span class="list-group"><p><b>Giá tiền</b></p>
	<input type="hidden" id="hidden_minimum_price" value="0"/>
	<input type="hidden" id="hidden_maximum_price" value="100000000">
	<p id="price_show">500.000VND - 100.000.000VND</p>
	<div id="price_range"></div>
<hr>
</span>
	</div>	
<!--	end lọc-->
	
	
<div clas="right-content">
	<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'new')">Sản phẩm mới</button>
  <button class="tablinks" onclick="openCity(event, 'bestseller')">Sản phẩm bán chạy</button>
  <button class="tablinks" onclick="openCity(event, 'unique')">Sản phẩm độc lạ</button>
</div>

<div id="new" class="tabcontent active">
  <h3>Sản phẩm mới</h3>
	<!--lấy ra sp mới nhất sắp xếp theo thời gian-->
	<?php
	$sql2="select*from tb_sp order by ngay_sx ASC limit 0,9";
	$newlist=execute($sql2);
	
	 foreach($newlist as $new){?>
	<div class="column">
    <div class="col-xs-3">
      <div class="thumbnail">
		<a href="detail.php?id=<?=$new['id']?>"><img src="<?=$new['anh_daidien']?>"></a>
	 <span class="caption">
		  <ul><?=$new['ten_sp']?></ul>
		  <li>Trạng thái:<?=$new['trangthai'] ?'Còn hàng':'Hết hàng' ?></li>
		 <li><strike><?=$new['giacu']?>VND</strike></li>
			<li>  <b class="text-danger"><?=$new['giamoi']?>VND</b></li>
		  <button class="btn-danger">Mua ngay</button>
	  <button class="btn-default">Thêm vào giỏ hàng</button>
	  </span>
	</div>
	   </div>	
	<?php
	}?>
	</div>
	</div>
    
<div id="bestseller" class="tabcontent">
  <h3>Sảm phẩm bán chạy</h3>
	<div class="column">
    <div class="col-xs-3">
      <div class="thumbnail">
	<a href="detail.php"><img src="sofaImage/bedroom/bedroomsofa4.jpg"></a>
	 <span class="caption">
		  <ul>tên sản phẩm</ul>
		  <li>rate</li>
		  <li><strike>giá cũ</strike> <b class="text-danger">giá mới</b></li>
		  <button class="btn-danger">Mua ngay</button>
	  <button class="btn-default glyphicon-shopping-cart">Thêm vào giỏ hàng</button>
	  </span>
	</div>
	   </div>	
	</div>
	</div>
	
	
	
<div id="unique" class="tabcontent">
  <h3>Sản phẩm độc lạ</h3>
  <div class="column">
    <div class="col-xs-3">
      <div class="thumbnail">
	<a href="detail.php"><img src="sofaImage/bedroom/bedroomsofa (2).jpg"></a>
	 <span class="caption">
		  <ul>tên sản phẩm</ul>
		  <li>rate</li>
		  <li><strike>giá cũ</strike> <b class="text-danger">giá mới</b></li>
		  <button class="btn-danger">Mua ngay</button>
	  <button class="btn-default">Thêm vào giỏ hàng</button>
	  </span>
	</div>
		</div>
	   </div>	
	</div>
	
	
<!--	lấy tất cả sản phẩm-->
<!--
	<?php
	
	foreach($spList as $sp){
	?>	
	<div class="column">
    <div class="col-xs-3">
      <div class="thumbnail">
	<a href="detail.php?id=<?=$sp['id']?>"><img Width="100%" src="<?=$sp['anh_daidien']?>"></a>
	 <span class="caption">
		  <ul><?=$sp['ten_sp']?></ul>
		  <li>Trạng thái:<?=$sp['trangthai'] ?'Còn hàng':'Hết hàng' ?></li>
		 <li><strike><?=$sp['giacu']?>VND</strike></li>
			<li>  <b class="text-danger"><?=$sp['giamoi']?>VND</b></li>
		  <button class="btn-danger">Mua ngay</button>
	  <button class="btn-default">Thêm vào giỏ hàng</button>
	  </span>
	</div>
	   </div>
	</div>
		<?php
	}
		?>
			pagination
	<div class="text-center">
	<ul class="pagination ">
		<?php for($i=1;$i<=$totalPage;$i++): ?>
		<li <?=$i ==$p?'calss="active"':''?>>
			<a href="?p=<?=$i?>"><?=$i?></a>
			</li>
		<?php endfor;?>
		</ul>
	</div>	
-->
	
</div>
	
	
		
<!--	end content-->
	
</div>
	
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
	
		
</body>
	
</html>
<?php include("footer.php")?>