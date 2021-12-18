<?php
require_once "./../layout/start.php";
require_once './../function.php';
$taikhoan = select_all('taikhoan');
?>
<div class="page-content-wrapper">
    <div class="inner-section">
        <h2 class="page-title">Dashboard</h2>
        <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-3 col-12">
                <div class="dash-card d-flex align-items-center">
                    <div class="
                    img-box
                    order-box
                    d-flex
                    align-items-center
                    justify-content-center
                    mr-3
                ">
                        <img src="./../images/cart.svg" alt="cart" />
                    </div>
                    <div class="dash-content">
                        <h4>Giỏ hàng</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 col-12">
                <div class="dash-card d-flex align-items-center">
                    <div class="
                    img-box
                    customer-box
                    d-flex
                    align-items-center
                    justify-content-center
                    mr-3
                ">
                        <img src="./../images/customers.svg" alt="customers" />
                    </div>
                    <div class="dash-content">
                        <h4>Khách hàng</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 col-12">
                <div class="dash-card d-flex align-items-center">
                    <div class="
                    img-box
                    payment-box
                    d-flex
                    align-items-center
                    justify-content-center
                    mr-3
                ">
                        <img src="./../images/payments.svg" alt="payments" />
                    </div>
                    <div class="dash-content">
                        <h4>Doanh thu</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 col-12">
                <div class="dash-card d-flex align-items-center">
                    <div class="
                    img-box
                    product-box
                    d-flex
                    align-items-center
                    justify-content-center
                    mr-3
                ">
                        <img src="./../images/product.svg" alt="cart" />
                    </div>
                    <div class="dash-content">
                        <h4>Sản phẩm</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-lg-7">
                <div class="dash-card">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4>Orders</h4>
                        <img src="./../images/more.svg" alt="more" />
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Mã khách hàng</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Trạng thái</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Ord001</td>
                                    <td>Womens bags</td>
                                    <td class="pending">Pending</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Ord003</td>
                                    <td>Mens Jeans</td>
                                    <td class="pending">Pending</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Ord004</td>
                                    <td>kids dress</td>
                                    <td class="completed">completed</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Ord008</td>
                                    <td>Mobile Phone</td>
                                    <td class="completed">completed</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Ord012</td>
                                    <td>Gaming accessories</td>
                                    <td class="completed">completed</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-5">
                <div class="dash-card">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4>Users</h4>
                        <img src="./../images/more.svg" alt="more" />
                    </div>
                    <div class="table-responsive">
                        <table class="table">

                            <thead>
                                <tr>
                                    <th>Người dùng</th>
                                    <th>Trạng thái</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($taikhoan as $key => $value) : ?>
                                    <tr>
                                        <th><?= $value['user'] ?></th>
                                        <th><?= intval($value['status']) == 1 ? "Active" : "Block"?></th>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php
require_once "./../layout/end.php";
?>