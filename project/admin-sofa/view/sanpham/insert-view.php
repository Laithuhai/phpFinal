<?php
include_once 'components/header.php';
?>
  <div class="content-wrapper">
    <section class="content-header">
<form action="" method="post">

    <table class="table">

        <tr>
            <td>Tên sản phẩm</td>
            <td>
                <input type="text" name="txt_tensp" class="form-control">

            </td>
        </tr>
                <tr>
            <td>Mô Tả</td>
            <td>
                <input type="text" name="txt_mota" class="form-control">

            </td>
        </tr>
                <tr>
            <td>Ngày Sản Xuất</td>
            <td>
                <input type="text" name="txt_ngaysx" class="form-control">

            </td>
        </tr>
        <tr>
            <td>Link ảnh đại diện</td>
            <td>
                <input type="text" name="txt_anh" class="form-control">

            </td>
        </tr>

        <tr>
            <td>Số lượng</td>
            <td>
                <input type="text" name="txt_sl" class="form-control">
            </td>
        </tr>
        <tr>
            <td>Giá cũ</td>
            <td>
                <input type="text" name="txt_giacu" class="form-control">
            </td>
        </tr>
        <tr>
            <td>Giá mới</td>
            <td>
                <input type="text" name="txt_giamoi" class="form-control">
            </td>
        </tr>
        <tr>
            <td>URL</td>
            <td>
                <input type="text" name="txt_url" class="form-control">
            </td>
        </tr>
        <tr>
            <td>Ngày nhập kho</td>
            <td>
                <input type="text" name="txt_ngaynhapkho" class="form-control">
            </td>
        </tr>
        <tr>
            <td>Trạng thái của sản phẩm</td>
            <td>
                <input type="text" name="txt_trangthai" class="form-control">
            </td>
        </tr>
        <tr>
            <td>Ẩn hiện</td>
            <td>
                <input type="text" name="txt_anhien" class="form-control">
            </td>
        </tr>
        <tr>
            <td>Kích cỡ</td>
            <td><?php 
            $result= getDataSize();
            foreach ($result as $size) : ?>
            <input type="radio" name="size" value="<?php echo $size['id'];
            ?>"> <?php echo $size['kich_co']; ?> <br>
            <?php endforeach; ?>
            </td>
        </tr>

        <tr>
            <td>Màu sắc</td>
            <td><?php 
            $result= getDataColor();
            foreach ($result as $color) : ?>
            <input type="radio" name="color" value="<?php echo $color['id'];
            ?>"> <?php echo $color['mau_sac']; ?> <br>
            <?php endforeach; ?>       
            </td>
        </tr>

        <tr>
            <td>Hãng sản phẩm</td>
            <td><?php 
            $result= getDataBrand();
            foreach ($result as $brand) : ?>
            <input type="radio" name="brand" value="<?php echo $brand['id'];
            ?>"> <?php echo $brand['ten_hang']; ?> <br>
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
            ?>"> <?php echo $material['chatlieu']; ?> <br>
            <?php endforeach; ?>   

            </td>
        </tr>
        <tr>
            <td>Loại sản phẩm</td>
            <td><?php 
            $result= getDataType();
            foreach ($result as $type) : ?>
            <input type="radio" name="type" value="<?php echo $type['id'];
            ?>"> <?php echo $type['loai_sp']; ?> <br>
            <?php endforeach; ?>  
            </td>
        </tr>

        <tr>
            <td >
                <input type="submit" name="submit" value="Thêm Mới" class="btn btn-primary">
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