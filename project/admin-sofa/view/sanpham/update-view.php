<?php
include_once 'components/header.php';
?>
  <div class="content-wrapper">
    <section class="content-header">
<form action="" method="post">
<input type="hidden" name="txt_id" value="<?php echo $id ?>">
    <table class="table">

        <tr>
            <td>Tên sản phẩm</td>
            <td>
                <input type="text" name="txt_tensp" class="form-control" value="<?php echo $sp['ten_sp'];?>">

            </td>
        </tr>
                <tr>
            <td>Mô Tả</td>
            <td>
                <input type="text" name="txt_mota" class="form-control" value="<?php echo $sp['mota'];?>">

            </td>
        </tr>
                <tr>
            <td>Ngày Sản Xuất</td>
            <td>
                <input type="text" name="txt_ngaysx" class="form-control" value="<?php echo $sp['ngay_sx'];?>">

            </td>
        </tr>
        <tr>
            <td>Link ảnh đại diện</td>
            <td>
                <input type="text" name="txt_anh" class="form-control" value="<?php echo $sp['anh_daidien'];?>">

            </td>
        </tr>

        <tr>
            <td>Số lượng</td>
            <td>
                <input type="text" name="txt_sl" class="form-control" value="<?php echo $sp['soluong'];?>">
            </td>
        </tr>
        <tr>
            <td>Giá cũ</td>
            <td>
                <input type="text" name="txt_giacu" class="form-control" value="<?php echo $sp['giacu'];?>">
            </td>
        </tr>
        <tr>
            <td>Giá mới</td>
            <td>
                <input type="text" name="txt_giamoi" class="form-control" value="<?php echo $sp['giamoi'];?>">
            </td>
        </tr>
        <tr>
            <td>URL</td>
            <td>
                <input type="text" name="txt_url" class="form-control" value="<?php echo $sp['url'];?>">
            </td>
        </tr>
        <tr>
            <td>Ngày nhập kho</td>
            <td>
                <input type="text" name="txt_ngaynhapkho" class="form-control" value="<?php echo $sp['ngaynhapkho'];?>">
            </td>
        </tr>
        <tr>
            <td>Trạng thái của sản phẩm</td>
            <td>
                <input type="text" name="txt_trangthai" class="form-control" value="<?php echo $sp['trangthai'];?>">
            </td>
        </tr>
        <tr>
            <td>Ẩn hiện</td>
            <td>
                <input type="text" name="txt_anhien" class="form-control" value="<?php echo $sp['an_hien'];?>">
            </td>
        </tr>
        <tr>
            <td>Kích cỡ</td>
            <td><?php 
            $result= getDataSize();
            foreach ($result as $size) : ?>
            <input type="radio" name="size" value="<?php echo $size['id'];?>" <?php if($sp['id_kich_co']==$size['id']) echo "checked=checked";?>> 
            <?php echo $size['kich_co']; ?> 
            <br>
            <?php endforeach; ?>
            </td>
        </tr>

        <tr>
            <td>Màu sắc</td>
            <td><?php 
            $result= getDataColor();
            foreach ($result as $color) : ?>
            <input type="radio" name="color" value="<?php echo $color['id'];
            ?>" <?php if($sp['id_mau_sac']==$color['id']) echo "checked=checked";?>> <?php echo $color['mau_sac']; ?> <br>
            <?php endforeach; ?>       
            </td>
        </tr>

        <tr>
            <td>Hãng sản phẩm</td>
            <td><?php 
            $result= getDataBrand();
            foreach ($result as $brand) : ?>
            <input type="radio" name="brand" value="<?php echo $brand['id'];
            ?>" <?php if($sp['id_hang']==$brand['id']) echo "checked=checked";?>> <?php echo $brand['ten_hang']; ?> <br>
            <?php endforeach; ?>                
            </td>
        </tr>

        <tr>
            <td>Chất liệu</td>
            <td>
             <?php 
            $result= getDataMaterial();
            foreach ($result as $material) : ?>
            <input type="radio" name="material" value="<?php echo $material['id'];
            ?>" <?php if($sp['id_chatlieu']==$material['id']) echo "checked=checked";?>> <?php echo $material['chatlieu']; ?> <br>
            <?php endforeach; ?>   

            </td>
        </tr>
        <tr>
            <td>Loại sản phẩm</td>
            <td><?php 
            $result= getDataType();
            foreach ($result as $type) : ?>
            <input type="radio" name="type" value="<?php echo $type['id'];
            ?>" <?php if($sp['id_loai_sp']==$type['id']) echo "checked=checked";?>> <?php echo $type['loai_sp']; ?> <br>
            <?php endforeach; ?>  
            </td>
        </tr>

        <tr>
            <td >
                <input type="submit" name="submit" value="Cập Nhập" class="btn btn-primary">
            </td>
            <td>
               <a href="javascript: history.go(-1)"><button type="button" class="btn btn-primary">Quay Lại</button><a>
            </td>
        </tr>
    </table>

</form>
   </section>
  </div>
<?php
include_once 'components/footer.php';
?>