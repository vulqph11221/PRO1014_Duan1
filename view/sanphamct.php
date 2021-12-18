<?php
extract($onesp);
$cmts = select_cmt($id); // id product
?>
    

    <!-- ---------- single Products detail ----------- -->

    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
            <?php
           $img=$img_path.$img;
           echo '<div><img src="'.$img.'" width="100%" id="productImg"></div>';
           
        ?>
       </div>
            <div class="col-2" >
                <?php
              
                echo '<h1>'.$name.'</h1>';
                echo '<h4>$'.$price.'</h4>';
                echo '<select>
                <option>Chọn Size</option>
                <option>'.$size.'</option>

                </section>';
                echo '<input type="number" value="',$amount.'">';
                echo ' <div class="row btnaddtocart">
                <form action="index.php?act=addtocart" method="post">
                   <input type="hidden" name="id" value="'.$id.'">
                   <input type="hidden" name="name" value="'.$name.'">
                   <input type="hidden" name="img" value="'.$img.'">
                   <input type="hidden" name="price" value="'.$price.'">
                   <input style="border-radius: 10px;;width:100%;background-color:#ff523b;color:white;margin-right:10px;" type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                 </form>
            </div>';
                echo '<h3>Product Detail
                        <i class="fa fa-indent"></i>
                    </h3>
                    <br>';
                    echo '<p>'.$mota.'</p>';
                ?>

                
            </div>
            <div class="small-container" >
    <?php
        if(empty($cmts)){
            echo "<h4 style='color:red; text-align:center'>Chưa có bình luận</h4>";
        } else {
            foreach($cmts as $cmt){
                $user = select_one('taikhoan', $cmt['ma_kh']);
        ?>
        <div>
            <h3><?=$user['user']?></h3>
            <span style="font-size: 7px;"><?=$cmt['ngay_them']?></span>
            <h4><?=$cmt['noi_dung']?></h4>
        </div>
        <?php
            }
        }
        ?>
        <div class="row row2">
            <h2>Bình luận của bạn</h2>
        </div>
        <?php
        if(isset($_SESSION['error'])){
            echo "<span style='color:red'>" . $_SESSION['error'] . "</span>";
            unset($_SESSION['error']);
        }
        ?>
        <form action="comment.php" method="POST" class="form-group row">
            <input type="hidden" name="id_product" value="<?=$id?>">
            <textarea name="noi_dung" style="max-width:100%" cols="150" rows="5" placeholder="Comment"></textarea>
            <?php
            if(isset($_SESSION['user'])){
            ?>
            <div class="form-group">
                <button class="btn">Gửi</button>
            </div>
            <?php }?>
        </form>
        <?php
            if(!isset($_SESSION['user'])){
        ?>
            <button class="btn"><a href="http://localhost/pro1014_duan1/index.php?act=dangnhap">Đăng nhập để bình luận</a></button>
        <?php
        }
        ?>
        
            
    </div>
    
        </div>
    </div>
    </div>
    <!-- ----- title------------- -->
    <div class="small-container">
        <div class="row row2">
            <h2>Sản phẩm liên quan</h2>
        </div>
        <div class="row" >       
            <?php
            $linksp="index.php?act=sanphamct&idsp=".$id;
           foreach($sp_cung_loai as $sp_cung_loai){
               extract($sp_cung_loai);
               $linksp="index.php?act=sanphamct&idsp=".$id;
               $img=$img_path.$img;
               echo '<div><a href="'.$linksp.'"><img src="'.$img.'" width="100%" height="300px"></a></div>';

           }
          ?>
            </div>
        </div>
    </div>

    
        <!-- ------------------- js for toggle menu-------------- -->
        <script>
            var MenuItems = document.getElementById("MenuItems");

            MenuItems.style.maxHeight = "0px";

            function menutoggle() {
                if (MenuItems.style.maxHeight == "0px") {
                    MenuItems.style.maxHeight = "200px";
                }
                else {
                    MenuItems.style.maxHeight = "0px";
                }
            }

        </script>

<!-- ------------------- JS for  product gallery------------------------         -->
        <script>
            var ProductImg = document.getElementById("productImg");
            var SmallImg = document.getElementsByClassName("small-img");

            SmallImg[0].onclick = function()
            {
                ProductImg.src = SmallImg[0].src;
            }
            SmallImg[1].onclick = function()
            {
                ProductImg.src = SmallImg[1].src;
            }
            SmallImg[2].onclick = function()
            {
                ProductImg.src = SmallImg[2].src;
            }
            SmallImg[3].onclick = function()
            {
                ProductImg.src = SmallImg[3].src;
            }

        </script>
