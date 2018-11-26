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
			width:320px;
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
	
</style>	
</head>

<body>
<?php include("header.php")?>	
<div class="content">
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
<!--
	<div class="col-md-9">
             <br />
                <div class="row filter_data">

                </div>
            </div>
-->
	
<!--	script ajac filter-->
<!--
	<script>
$(document).ready(function(){

    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
        var brand = get_filter('brand');
        var chatlieu = get_filter('chatlieu');
       
        $.ajax({
            url:"fetch_data.php",
            method:"POST",
            data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, brand:brand, chatlieu:chatlieu},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });

    $('#price_range').slider({
        range:true,
        min:1000,
        max:65000,
        values:[1000, 65000],
        step:500,
        stop:function(event, ui)
        {
            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
    });

});
</script>
-->
<!--	end lọc-->
<div class="right-content">
	<div class="row">
		<div class="column">
			
<!--danh sách sản phẩm				-->
<?php
	
	
	foreach($spList as $sp){
	?>	
	<div class="card">

 <a href="detail.php?id=<?=$sp['id']?>"> <img src="<?=$sp['anh_daidien']?>"style="width:100%"></a>
  <h3><?=$sp['ten_sp']?></h3>
  <h3 class="text-danger text-center" id="price"><?=$sp['giamoi']?>VND</h3>
		<h5 class="text-default text-center"><strike ><?=$sp['giacu']?>VND</strike></h5>
  <p ><?=$sp['mota']?></p>
  <p><button class="btn-danger">Mua ngay</button>
	<button class="btn-block">Thêm vào giỏ hàng</button></p>
</div>
		<?php
	}
			?>

		</div>
		<div class="text-center">
	<ul class="pagination ">
		<?php for($i=1;$i<=$totalPage;$i++): ?>
		<li <?=$i ==$p?'calss="active"':''?>>
			<a href="?p=<?=$i?>"><?=$i?></a>
			</li>
		<?php endfor;?>
		</ul>
	</div>
		</div>
	
	</div>
	</div>
	<div id="brandlist">
	
		<?php
		$sql1="select logo from tb_hang";
		$brand = execute($sql1);
		foreach ($brand as $col){
		?>
		<ul class="navbar-nav">
	<li class="navbar-item">
		<a class="navbar-brand"><img src="<?=$col['logo'];?>" width="100%" ></a></li></ul>
	<?php
		}
		?>
	
</div>
<!--end content	-->
	
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 250px;
  height: 500px;
  margin: 20px;
  float:left;
  font-family: arial;
}
	.card img{
	height: 170px;
	}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7
}
#brandlist{
	
	height: 250px;
	width:100%;
	float: left;
	
}
	#brandlist ul li{
		list-style-type: none;
	}
	#brandlist img{
		margin: 10px;
		max-width: 130px;
		max-height: 180px;
		box-shadow: 10px;
	}	
</style>
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
//	#dk lọc giá tiền
	$('#price_range').slider({
        range:true,
        min:500000,
        max:100000000,
        values:[500000, 100000000],
        step:500000,
        stop:function(event, ui)
        {
            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
    });
</script>
     
		
</body>
		
</html>
<?php include("footer.php");?>