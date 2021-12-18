<?php
require_once './../layout/start.php';
require_once './../../model/functions.php';
$taikhoan = select_all('taikhoan');
?>
<section class="col-md-12">
    <div class="row">
        <div class="col-7">
            <a href="add-form.php" class="btn btn-success">Tạo mới</a>
        </div>
        
        <div class="col-5">
        </div>
    </div>
    <table class="table table-hover">
        <thead>
            <th>ID</th>
            <th>User</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
            <th colspan="2">Thao Tác</th>
        </thead>
        <tbody>
        <?php foreach ($taikhoan as $key => $value): ?>
            <tr>
                <td><?= $value['id'] ?></td>
                <td><?= $value['user'] ?></td>
                <td><?= $value['email'] ?></td>
                <td><?= intval($value['role']) == 1 ? "Admin" : "User" ?></td>
                <td>
                    <?php
                    if(intval($value['status']) == 1){
                    ?>
                    <a href="status.php?id=<?=$value['id']?>&st=1" class="btn btn-success">Active</a>
                    <?php
                    } else {
                    ?>
                    <a href="status.php?id=<?=$value['id']?>&st=2" class="btn btn-danger">Block</a>
                    <?php
                    }
                    ?>
                </td>
                <td>
                    <a href="edit-form.php?id=<?= $value['id']?>" class="btn btn-primary">Sửa</a>
                    <a href="delete.php?id=<?= $value['id']?>" class="btn btn-danger">Xóa</a>
                </td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</section>
<?php
require_once './../layout/end.php';
?>