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
            <div class="row frmtitle mb">
                <h1>DANH SÁCH LOẠI HÀNG </h1>
            </div>
            <form action="index.php?act=listsp" method="post">
                <input type="text" name="kyw">
                <select name="iddm">
                    <option value="0" selected>Tất cả</option>
                    <?php
                        foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            echo '<option value="'.$id.'">'.$name.'</option>';
                        }
                    ?>
                </select>
                <input type="submit" name="listok" value="GO">
            </form>
            <div class="row frmcontent">
                    <div class="row mb frmdsloai">
                        <table>
                            <tr>
                                <th></th>
                                <th>Mã sp</th>
                                <th>Tên sp</th>
                                <th>Số lượng</th>
                                <th>Màu sắc</th>
                                <th>size</th>
                                <th>Giá</th>
                                <th>Khuyến mãi</th>
                                <th>Ảnh</th>
                                <th>Lượt xem</th>
                                
                                

                            </tr>
                            <?php 
                                foreach ($listsanpham as $sanpham){
                                    extract($sanpham);
                                    $suasp="index.php?act=suasp&id=".$id;
                                    $xoasp="index.php?act=xoasp&id=".$id;
                                    $hinhpart="../upload/".$img;
                                    if(is_file($hinhpart)){
                                        $img="<img src='".$hinhpart."' height='80'> ";
                                    }else{
                                        $img="no photo";
                                    }

                                    echo '<tr>
                                            <td><input type="checkbox" name="" id=""></td>
                                            <td>'.$id.'</td>
                                            <td>'.$name.'</td>
                                            <td>'.$amount.'</td>
                                            <td>'.$color.'</td>
                                            <td>'.$size.'</td>
                                            <td>'.$price.'</td>
                                            <td>'.$sell_price.'</td>
                                            <td>'.$img.'</td>
                                            <td>'.$luotxem.'</td>
                                            
                                            <td><a href="'.$suasp.'"><input type="button" value="Sửa"></a> <a href="'.$xoasp.'"><input type="button" value="Xóa"></a></td>
                                        </tr>';
                                }
                            ?>

                            
                        </table>
                    </div>
                    <div class="row mb">
                        <input type="button" value="CHỌN TẤT CẢ">
                        <input type="button" value="BỎ CHỌN TẤT CẢ">
                        <input type="button" value="XÓA CÁC MỤC ĐÃ CHỌN">
                        <a href="index.php?act=addsp"><input type="button" value="NHẬP THÊM"></a>
                    </div>
            </div>
        </div>
    </div>

</body>
</html>