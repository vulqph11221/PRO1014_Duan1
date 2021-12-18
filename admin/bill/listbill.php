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
            <div class="row frmtitle">
                <h1>DANH SÁCH DƠN HÀNG </h1>
            </div>
            <form action="index.php?act=listbill" method="post">
        <input type="text" name="kyw" placehlder="mã hóa đơn">
        <input type="submit" names="listok" value="Go">
    </form>
            <div class="row frmcontent">
                    <div class="row mb frmdsloai">
                        <table>
                            <tr>
                                <th></th>
                                <th>Mã Đơn Hàng</th>
                                <th>Khách Hàng</th>
                                <th>Số Lượng Hàng</th>
                                <th>Giá Trị Đơn Hàng</th>
                                <th>Tình Trạng Đơn Hàng</th>
                                <th>Ngày Đặt Hàng</th>
                                <th>Thao Tác</th>
                                <th></th>
                            </tr>
                            <?php
                    foreach ($listbill as $bill) {
                        extract($bill);
                        $xoabill="index.php?act=xoabill&id=".$id;
                        $kh=$bill["bill_name"].'
                        <br>'.$bill["bill_email"].'
                        <br>'.$bill["bill_address"].'
                        <br>'.$bill["bill_tel"];
                        $ttdh=get_ttdh($bill["bill_status"]);
                        $countsp=loadall_cart_count($bill["id"]);
                        echo '
                        <tr>
                        <td><input type="checkbox" name="" value=""></td>
                        <td>'.$bill["id"].'</td>
                        <td>'.$kh.'</td>
                        <td>'.$countsp.'</td>
                        <td><strong>'.$bill["total"].'</strong>$</td>
                        <td>'.$ttdh.'</td>
                        <td>'.$bill["ngaydathang"].'</td>
                        <td> <a href="'.$xoabill.'"><input type="button" value="Xóa"></a></td>
                        </tr>';
                    }
                    
                    ?>

                            
                        </table>
                    </div>
                    
            </div>
        </div>
    </div>
    </div>
</body>
</html>