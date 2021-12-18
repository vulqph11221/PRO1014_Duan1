<?php
    
    if(is_array($dm)){
        extract($dm);
    }

?>
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
        <div class="row mb header">
            <div class="td">
                 <h1>CHANEL</h1>
            </div>
            
        </div>
        <div class="row">
            <div class="row frmtitle">
                <h1>CẬP NHẬT MẶT HÀNG</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=updatedm" method="post">
                    <div class="row mb">
                        Mã Loại<br>
                        <input type="text" name="maloai" disabled>
                    </div>
                    <div class="row mb">
                        Tên Loại<br>
                        <input type="text" name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name ;?>">
                    </div>
                    <div class="row mb">
                        <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id ;?>">
                        <input type="submit" name="capnhat" value="CẬP NHẬT">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=lisdm"><input type="button" value="DANH SÁCH"></a>
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