<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products - RedStore</title>
    <link rel="stylesheet" href="view/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.php"><img src="view/images/logo.png" width="125px"></a>
            </div>
            <nav>
                <ul>
                        <li><a href="index.php">Trang chủ</a></li>
                        <li><a href="iindex.php">Sản phẩm</a></li>
                        <li><a href="iindex.php">Danh mục</a></li>
                        <li><a href="contact.php">Liên hệ</a></li>
                        <li><a href="index.php?act=mybill">Đơn hàng của tôi</a></li>
                        
                        <?php 
                           if (isset($_SESSION['user'])){
                               extract($_SESSION['user']);
                        ?>
                       <li class="dropdown"><img src="view/images/user.svg" height="27px" width="27px" class="Avatar" alt="avatar">
                          <ul class="dropdown-content">
                              <?php if($role==2) {?>
                              <li><a href="admin">Đăng nhập Admin</a></li>
                              <?php }?>
                              <li><a href="index.php?act=capnhattaikhoan">Cập nhật tài khoản</a></li>
                              <li><a href="index.php?act=thoat">Thoát</a></li>
                          </ul>
                       </li>
                        <?php
                           }else{
                        ?>
                            <li><a href="index.php?act=dangnhap">Đăng nhập</a></li>
                        <?php }?>
                        
                    </ul>
                </nav> 
            <a href="cart.html"><img src="view/images/cart.png" width="30px" height="30px"></a>
            <img src="view/images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>                                  
    
    <!-- ------------contact----------- -->
    
    <div class="container" style="display:grid; grid-template-rows:1fr 1fr; max-width: 70%; margin-top: 50px ; margin-bottom: 50px;">
        <div>
            <div>
                <span><i class="fa fa-phone"></i> &nbsp;&nbsp;&nbsp;&nbsp; 0338.888.888</span>
            </div>
            <div>
                <span><i class="fa fa-envelope"></i> &nbsp;&nbsp;&nbsp;&nbsp; redstore@gmail.com</span>
            </div>
            <div>
                <span><i class="fa fa-facebook"></i> &nbsp;&nbsp;&nbsp;&nbsp; RedStore: http: Linh</span>
            </div>
            <div>
                <span><i class="fa fa-map-marker"></i> &nbsp;&nbsp;&nbsp;&nbsp; Trịnh Văn Bô - Nam Từ Liêm - Hà Nội</span>
            </div>
        </div>
        <div style="display:grid; grid-template-columns:1fr 1fr">
            <div class="col-md-10" style="border: 2px solid #000; border-radius: 10px; text-align: center; padding: 10px;">
                <h2>Hỏi đáp về sản phẩm</h2>
                <br>
                <div class="form-group">
                    <select name="" id="" class="form-control">
                        <option value="">Sơ Mi Nam</option>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <select name="" id="" class="form-control">
                        <option value="">Thời Trang Nữ</option>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <select name="" id="" class="form-control">
                        <option value="">Thời Trang Nam</option>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <select name="" id="" class="form-control">
                        <option value="">Phụ Kiện Thời Trang</option>
                    </select>
                </div>
            </div>
            <div style="border: 2px solid #000; border-radius: 10px; text-align: center; padding: 10px;">
                <form action="#" method="POST" class="form-group">
                    <div class="form-group">
                        <h2>Đặt Câu Hỏi Cho Sản Phẩm</h2><br>
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn">Gửi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- ------------footer----------- -->

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and ios mobile phone</p>
                    <div class="app-logo">
                        <img src="view/images/play-store.png">
                        <img src="view/images/app-store.png">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="view/images/logo-white.png">
                    <p>Our Purpose Is To Sustainably Make the Pleasure and
                        Benefits of Sports Accessible to the Many</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube </li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="Copyright">Copyright 2020</p>
        </div>
</body>

</html>