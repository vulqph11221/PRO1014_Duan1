<?php
session_start();
require_once './../layout/start.php';
?>
<h3>Thêm khách hàng</h3>
<span style="color:red">
<?php
if(isset($_SESSION['error'])){
    echo $_SESSION['error'];
    unset($_SESSION['error']);
}
?>
</span>
<form action="save-add.php" method="post" class="col-md-6">
    <div class="box-body">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="">password</label>
            <input type="password" name="pass" class="form-control">
        </div>
        <div class="form-group">
            <label for="">email</label>
            <input type="text" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="">role</label>
            <select name="role" id="" class="form-control">
                <option value="1">user</option>
                <option value="2">admin</option>
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Lưu</button>
            <a href="http://localhost/pro1014_duan1/Admin/user/index.php" class="btn btn-danger"></i>Hủy</a>
        </div>
    </div>
</form>
<?php
require_once './../layout/end.php';
?>