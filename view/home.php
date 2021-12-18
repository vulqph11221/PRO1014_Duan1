
<div class="row">
<div class="col-2">
    <h1>Give Your Workout<br> A New Style!</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo, tempore?
         Dolor laudantium odio voluptates earum eum, modi voluptatem ab ullam enim voluptatibus eligendi maiore! </p>
    <a href="" class="btn">Explore Now &#8594;</a>
</div>
<div class="col-2">
    <img src="view/images/image1.jpg">
</div>
</div>
</div>
</div>
</div>
<div>
    <!-- ------------- featured categorries ---------------- -->
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="view/images/category-1.jpg">
                </div>
                <div class="col-3">
                    <img src="view/images/category-2.jpg">
                </div>
                <div class="col-3">
                    <img src="view/images/category-3.jpg">
                </div>

            </div>
        </div>

    </div>
    <!-- ------------- featured products ---------------- -->
    <div class="small-container">
        <h2 class="title">Sản phẩm nổi bật</h2>
        <div class="row">
            <?php
                        foreach ($dstop10 as $sp){
                               extract($sp);
                               $linksp="index.php?=sanphamct&idsp=".$id;
                               $img=$img_path.$img;
                                /*'<div class="row mb top10">
                               <a href="'.$linksp.'"><img src="'.$img.'" alt=""></a>
                               <a href="'.$linksp.'">'.$name.'</a>
                           </div>';*/
                               echo '<div class="col-4">
                               <a href="'.$linksp.'"><img src="'.$img.'" height="400px"></a>
                               <a href="'.$linksp.'">
                                   <h4>'.$name.'</h4>
                               </a>
                               <div class="rating">
                                   <i class="fa fa-star"></i>
                                   <i class="fa fa-star"></i>
                                   <i class="fa fa-star"></i>
                                   <i class="fa fa-star"></i>
                                   <i class="fa fa-star-o"></i>
                               </div>
                               <p>'.$price.'</p>
                               </div>';
                           }
                        
                        ?>
          
        </div>
        <h2 class="title">Sản phẩm mới nhất</h2>
        <div class="row">

                    <?php
                       $i = 0;
                       foreach($spnew as $sp){
                           extract($sp);
                           $linksp="index.php?act=sanphamct&idsp=".$id;
                           $img=$img_path.$img;
                           if(($i==3)||($i==7)||($i==11)||($i==15)){
                               $mr="";
                           }else{
                               $mr="mr";
                           }
                           
                           echo '<div class="col-4 '.$mr.'">
                           <a  href="'.$linksp.'"><img src="'.$img.'" style="height:400px;"></a>
                           <a href="'.$linksp.'">'.$name.'</a>
                           <div class="rating">
                               <i class="fa fa-star"></i>
                               <i class="fa fa-star"></i>
                               <i class="fa fa-star"></i>
                               <i class="fa fa-star"></i>
                               <i class="fa fa-star-o"></i>
                            </div>
                            <p>$'.$price.'</p>
                            
                            
                           <div class="row btnaddtocart">
                               <form action="index.php?act=addtocart" method="post">
                                  <input type="hidden" name="id" value="'.$id.'">
                                  <input type="hidden" name="name" value="'.$name.'">
                                  <input type="hidden" name="img" value="'.$img.'">
                                  <input type="hidden" name="price" value="'.$price.'">
                                  <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                                </form>
                           </div>
                          </div>';
                       $i+=1;
                       }
                    ?>

            
    