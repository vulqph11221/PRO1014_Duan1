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
                <h1>DANH SÁCH LOẠI HÀNG </h1>
            </div>
            <div class="row frmcontent">
                    <div class="row mb frmdsloai">
                        <table>
                            <tr>
                                <th></th>
                                <th>Mã Loại</th>
                                <th>Tên Loại</th>
                                <th></th>
                            </tr>
                            <?php 
                                foreach ($listdanhmuc as $danhmuc){
                                    extract($danhmuc);
                                    $suadm="index.php?act=suadm&id=".$id;
                                    $xoadm="index.php?act=xoadm&id=".$id;

                                    echo '<tr>
                                            <td><input type="checkbox" name="" id=""></td>
                                            <td>'.$id.'</td>
                                            <td>'.$name.'</td>
                                            <td><a href="'.$suadm.'"><input type="button" value="Sửa"></a> <a href="'.$xoadm.'"><input type="button" value="Xóa"></a></td>
                                        </tr>';
                                }
                            ?>

                            
                        </table>
                    </div>
                    <div class="row mb">
                        <input type="button" value="CHỌN TẤT CẢ">
                        <input type="button" value="BỎ CHỌN TẤT CẢ">
                        <input type="button" value="XÓA CÁC MỤC ĐÃ CHỌN">
                        <a href="index.php?act=adddm"><input type="button" value="NHẬP THÊM"></a>
                    </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>