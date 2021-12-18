<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="csss/style.css">
    
</head>
<body>
    <div class="boxcenter">
        
        <div class="row">
            <div class="row frmtitle mb">
                <h1>THÊM MỚI SẢN PHẨM</h1>
            </div>
            
            <div class="row frmcontent mb">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                <div class="row mb">
                        Danh mục<br>
                        <select name="iddm">
                            <?php
                               foreach ($listdanhmuc as $danhmuc) {
                                   extract($danhmuc);
                                   echo '<option value="'.$id.'">'.$name.'</option>';
                               }
                            ?>
                        </select>
                    </div>
                    <div class="row mb">
                        Tên sản phẩm 
                        <input type="text" name="name">
                    </div>
                    <div class="row mb">
                        Số Lượng
                        <input type="number" name="amount">
                    </div>
                    <div class="row mb">
                        Màu sắc 
                        <input type="text" name="color">
                    </div>
                    <div class="row mb">
                        Size 
                        <input type="text" name="size">
                    </div>
                    <div class="row mb">
                        Giá sản phẩm 
                        <input type="number" name="price">
                    </div>
                    <div class="row mb">
                        Giảm giá 
                        <input type="text" name="sell_price">
                    </div>
                    <div class="row mb">
                        Hình ảnh 
                        <input type="file" name="img">
                    </div>
                    <div class="row mb">
                        Lượt xem 
                        <input type="number" name="luotxem">
                    </div>
                    <div class="row mb">
                        Mô tả 
                        <textarea name="mota" cols="30" rows="10"></textarea>
                    </div>
                    <div class="row mb">
                        <input type="submit" name="themmoi" value="THÊM MỚI">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
                    </div>
                    <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>
</html>