<?php 
include_once 'components/header.php';
$q = isset($_GET['q']) ? $_GET['q'] : '';
$tData = countData();
$t = $tData['count'];
$n = 3;
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
    <center><strong>DANH SÁCH ADMIN<hr></strong></center>
    <a href="?controller=danhsach&action=insert" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-plus"></span> Thêm Mới 
</a>
    <hr>
 <p>
            <form action="?controller=danhsach&action=index&q=<?=$q?>" method="get" align="center">
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
			<th>Username</th>
			<th>Password</th>
			<th>Tên</th>
			<th>Điện thoại</th>
			<th>Email</th>
			<th>Địa chỉ</th>
			<th>Chức năng<th>
		</tr>
		<?php foreach ($result as $admin): ?>
			<tr>
			<th><?php echo $admin['id']?> </th>
			<th><?php echo $admin['username']?> </th>
			<th><?php echo $admin['password']?> </th>
			<th><?php echo $admin['ten']?> </th>
			<th><?php echo $admin['dienthoai']?> </th>
			<th><?php echo $admin['email']?> </th>
			<th><?php echo $admin['diachi']?> </th>
			<th>
				<a href="?controller=danhsach&action=update&id=<?php echo $admin['id']?>">Sửa</a>
				<a href="?controller=danhsach&action=delete&id=<?php echo $admin['id']?>">Xóa</a>
			</th>
			</tr>
		<?php endforeach;?>
	</table>
	            <div class="text-center">
                <ul class="pagination">
                    <?php for($i = 1; $i <= $totalPage; $i++):?>
                        <li <?= $i == $p ? 'class="active"' : '' ?>>
                            <a href="?controller=danhsach&action=index&p=<?=$i?>"><?=$i ?></a>
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