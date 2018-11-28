<?php
include_once 'components/header.php';
?>
  <div class="content-wrapper">
    <section class="content-header">
<form action="" method="post">

    <input type="hidden" name="txt_id" value="<?php echo $id ?>">

    <table class="table">
        <tr>
            <td>Username</td>
            <td>
                <input type="text" name="txt_username" value="<?php echo $admin['username'] ?>" class="form-control">
            </td>
        </tr>

        <tr>
            <td>Password</td>
            <td>
                <input type="text" name="txt_password" value="<?php echo $admin['password'] ?>" class="form-control">

            </td>
        </tr>
                <tr>
            <td>Tên</td>
            <td>
                <input type="text" name="txt_ten" value="<?php echo $admin['ten'] ?>" class="form-control">

            </td>
        </tr>
                <tr>
            <td>Điện Thoại</td>
            <td>
                <input type="text" name="txt_dienthoai" value="<?php echo $admin['dienthoai'] ?>" class="form-control">

            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>
                <input type="text" name="txt_email" value="<?php echo $admin['email'] ?>" class="form-control">

            </td>
        </tr>

        <tr>
            <td>Địa chỉ</td>
            <td>
                <input type="text" name="txt_diachi" value="<?php echo $admin['diachi'] ?>" class="form-control">
            </td>
        </tr>



        <tr>
            <td >
                <input type="submit" name="submit" value="Sửa" class="btn btn-primary">
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