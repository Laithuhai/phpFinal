<?php
include_once 'components/header.php';
?>
  <div class="content-wrapper">
    <section class="content-header">
<form action="" method="post">

    <table class="table">

        <tr>
            <td>Chất Liệu</td>
            <td>
                <input type="text" name="txt_chatlieu" class="form-control" placeholder="Mời nhập...">
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