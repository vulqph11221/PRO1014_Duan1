
    
<div class="header1">
    <!-- ---------- single Products detail ----------- -->

    <div class="small-container single-product">
        <div class="row">
        <?php
           extract($onesp);
        ?>
            <div class="col-2">
            <?php
           $img=$img_path.$img;
           echo '<div><img src="'.$img.'" width="100%" id="productImg"></div>';
           
        ?>
       </div>
            <div class="col-2" >
                <?php
                echo '<p>'.$name.'</p>';
                echo '<h1>'.$name.'</h1>';
                echo '<h4>$'.$price.'</h4>';
                echo '<select>
                <option>Chọn Size</option>
                <option>'.$size.'</option>
                </section>';
                echo '<input type="number" value="',$amount.'">';
                echo '<a href="index.php?act=addtocart" class="btn">Add To Card</a>';
                echo '<h3>Product Detail
                        <i class="fa fa-indent"></i>
                    </h3>
                    <br>';
                    echo '<p>'.$mota.'</p>';
                ?>

                
            </div>
        </div>
    </div>

    <!-- ----- title------------- -->
    <div class="small-container">
        <div class="row row2">
            <h2>Sản phẩm liên quan</h2>
       
        </div>
    </div>
    <div class="small-container" >
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
