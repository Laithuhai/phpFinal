<?php
include_once 'components/header.php';
?>
  <div class="content-wrapper">
    <section class="content-header">
<form action="" method="post">
<input type="hidden" name="txt_id" value="<?php echo $id ?>">
    <table class="table">

        <tr>
            <td>Chất Liệu</td>
            <td>
                <input type="text" name="txt_chatlieu" class="form-control" value="<?php echo $admin['chatlieu'];?>">
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