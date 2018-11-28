<?php 
include_once 'components/header.php';
$q = isset($_GET['q']) ? $_GET['q'] : '';
$tData = countData();
$t = $tData['count'];
$n = 10;
$p = (@$_GET['p'] && @$_GET['p'] > 1) ? $_GET['p'] : 1;
$totalPage = ceil($t/$n);
if($p > $totalPage){
    $p = $totalPage;
}

$i = $n * ($p - 1);

$result = getAllData($q,$i,$n);

?>

<div class="content-wrapper">
    <section class="content-header">
    <center><strong>DANH SÁCH SẢN PHẨM<hr></strong></center>
    <a href="?controller=sanpham&action=insert" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-plus"></span> Thêm Mới 
</a>
    <hr>
 <p>
            <form action="?controller=sanpham&action=index&q=<?=$q?>" method="get" align="center">
                <div class="row">
                    <div class="col-md-6 col-md-offset-2">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                    </div>
                    <div class="col-md-4 text-left">
                        <input class="btn btn-primary" type="submit" value="Tìm kiếm">
                    </div>
                </div>
            </form>
            </p>
<form method="" action="post">
	<table class="table table-striped">
		<tr>
			<th>ID</th>
			<th>Tên Sản Phẩm</th>
			<th>Giá Bán Cũ</th>
			<th>Giá Bán Mới</th>
			<th>Mô Tả</th>
			<th>Số Lượng</th>
			<th>Trạng Thái</th>
			<th>Ẩn Hiện</th>
			<th>Url<th>
		</tr>
		<?php foreach ($result as $sp): ?>
			<tr>
			<th><?php echo $sp['id']?> </th>
			<th><?php echo $sp['ten_sp']?> </th>
			<th><?php echo $sp['giamoi']?> </th>
			<th><?php echo $sp['giacu']?> </th>
			<th><?php echo $sp['mota']?> </th>
			<th><?php echo $sp['soluong']?> </th>
			<th><?php echo $sp['trangthai']?> </th>
			<th><?php echo $sp['an_hien']?></th>
			<th><?php echo $sp['url']?></th>
			<th>
				<a href="?controller=sanpham&action=update&id=<?php echo $sp['id']?>">Sửa</a>
				<a href="?controller=sanpham&action=delete&id=<?php echo $sp['id'];?>">Xóa</a>
			</th>
			</tr>
		<?php endforeach;?>
	</table>
	            <div class="text-center">
                <ul class="pagination">
                    <?php for($i = 1; $i <= $totalPage; $i++):?>
                        <li <?= $i == $p ? 'class="active"' : '' ?>>
                            <a href="?controller=sanpham&action=index&p=<?=$i?>"><?=$i ?></a>
                        </li>
                    <?php endfor;?>
                </ul>
            </div>
</form>
    </section>
 </div>
<?php
include_once 'components/footer.php';
?>