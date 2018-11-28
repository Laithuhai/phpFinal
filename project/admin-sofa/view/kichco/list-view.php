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
    <center><strong>DANH SÁCH Kích cỡ<hr></strong></center>
    <a href="?controller=kichco&action=insert" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-plus"></span> Thêm Mới 
</a>
    <hr>
 <p>
            <form action="?controller=kichco&action=index&q=<?=$q?>" method="get" align="center">
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
			<th>Tên kích cơ</th>
		</tr>
		<?php foreach ($result as $s): ?>
			<tr>
			<th><?php echo $s['id']?> </th>
			<th><?php echo $s['kichco']?> </th>
			<th>
				<a href="?controller=kichco&action=update&id=<?php echo $s['id']?>">Sửa</a>
				<a href="?controller=kichco&action=delete&id=<?php echo $s['id']?>">Xóa</a>
			</th>
			</tr>
		<?php endforeach;?>
	</table>
	            <div class="text-center">
                <ul class="pagination">
                    <?php for($i = 1; $i <= $totalPage; $i++):?>
                        <li <?= $i == $p ? 'class="active"' : '' ?>>
                            <a href="?controller=kichco&action=index&p=<?=$i?>"><?=$i ?></a>
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