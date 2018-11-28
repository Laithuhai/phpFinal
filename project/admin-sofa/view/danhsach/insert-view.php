<?php
include_once 'components/header.php';
?>
  <div class="content-wrapper">
    <section class="content-header">
<form action="" method="post">

    <table class="table">

        <tr>
            <td>Username</td>
            <td>
                <input type="text" name="txt_username" class="form-control">
            </td>
        </tr>

        <tr>
            <td>Password</td>
            <td>
                <input type="text" name="txt_password" class="form-control">

            </td>
        </tr>
                <tr>
            <td>Tên</td>
            <td>
                <input type="text" name="txt_ten" class="form-control">

            </td>
        </tr>
                <tr>
            <td>Điện Thoại</td>
            <td>
                <input type="text" name="txt_dienthoai" class="form-control">

            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>
                <input type="text" name="txt_email" class="form-control">

            </td>
        </tr>

        <tr>
            <td>Địa chỉ</td>
            <td>
                <input type="text" name="txt_diachi" class="form-control">
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