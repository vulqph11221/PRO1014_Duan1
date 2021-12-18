<?php
require_once './../layout/start.php';
require_once './../../model/functions.php';
if(isset($_POST['search'])){
    $comment = search_comment($_POST['value']);
} else {
    $comment = select_all('binhluan');
}
?>
<section class="col-md-12">
    <div class="row">        
        <div class="col-5">
            <div class="search-bar">
                <form action="list.php" method="POST">
                    <input type="text" name="value" placeholder="Search Something..." class="global-search" style="border:2px solid #000; border-radius: 15px">
               
                    <button class="btn btn-outline-dark" name="search"></i>Tìm kiếm</button>
                    <br>
                    <br>
                 <a href="http://localhost/pro1014_duan1/admin/binhluan/list.php" class="btn btn-info">All Comment</a>
                </form>
            </div>
        </div>
    </div>
    <table class="table table-hover">
        <thead>
            <th>ID</th>
            <th>User</th>
            <th>Product</th>
            <th>Content</th>
            <th>Comment at</th>
            <th>Status</th>
            <th colspan="2">Act</th>
        </thead>
        <tbody>
        <?php foreach ($comment as $value):
            $user = select_one('taikhoan', $value['ma_kh']);
            $product = select_one('sanpham', $value['ma_sp']);
        ?>
            <tr>
                <td><?= $value['id'] ?></td>
                <td><?= $user['user'] ?></td>
                <td><?= $product['name'] ?></td>
                <td><?= $value['noi_dung'] ?></td>
                <td><?= $value['ngay_them'] ?></td>
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
                    
                    <a href="delete.php?id=<?= $value['id']?>" class="btn btn-danger" onclick="return comfirm('Bạn có chắc muốn xóa không ?')">Xóa</a>
                </td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</section>
<?php
require_once './../layout/end.php';
?>