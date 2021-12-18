<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="csss/admin.css"/>
    <!--fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;1,400;1,500;1,600;1,700;&display=swap" rel="stylesheet">

    <title>Admin Dashboard!</title>
  </head>
  <body>
   
    <div class="page-container">
        <div class="page-sidebar-wrapper">
              <div class="sidebar">
                    <div class="logo">
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="logo-text">
                                  Welcome to Admin !
                            </div>
                        </div>
                    </div>
                    <div class="user-info d-flex">
                        <div>
                            <img src="./images/man.svg" alt="user-img" class="user-img">
                        </div>
                        <div class="d-flex flex-column">
                              <h5>Admin</h5>
                              <p>Admin@gmail.com</p>
                        </div>
                    </div>
                    <ul class="nav flex-column menu-link">
                          <li class="nav-item">
                              <a href="index.php" class="nav-link"><img src="./images/dashboard.svg" alt="dashboard">Tổng Quan</a>
                          </li>
                          <li class="nav-item">
                              <a href="index.php?act=adddm" class="nav-link"><img src="./images/dashboard.svg" alt="dashboard">Danh Mục</a>
                          </li>
                          <li class="nav-item">
                            <a href="index.php?act=addsp" class="nav-link"><img src="./images/shopping-bag.svg" alt="dashboard">Sản phẩm</a>
                        </li>
                        <li class="nav-item">
                          <a href="http://localhost/pro1014_duan1/admin/user/index.php" class="nav-link"><img src="./images/user.svg" alt="dashboard">Khách hàng</a>
                      </li>
                      <li class="nav-item">
                        <a href="http://localhost/pro1014_duan1/admin/binhluan/list.php" class="nav-link"><img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Ik0yMCAxNWMwIC41NTItLjQ0OCAxLTEgMXMtMS0uNDQ4LTEtMSAuNDQ4LTEgMS0xIDEgLjQ0OCAxIDFtLTMgMGMwIC41NTItLjQ0OCAxLTEgMXMtMS0uNDQ4LTEtMSAuNDQ4LTEgMS0xIDEgLjQ0OCAxIDFtLTMgMGMwIC41NTItLjQ0OCAxLTEgMXMtMS0uNDQ4LTEtMSAuNDQ4LTEgMS0xIDEgLjQ0OCAxIDFtNS40MTUgNC45NDZjLTEgLjI1Ni0xLjk4OS40ODItMy4zMjQuNDgyLTMuNDY1IDAtNy4wOTEtMi4wNjUtNy4wOTEtNS40MjMgMC0zLjEyOCAzLjE0LTUuNjcyIDctNS42NzIgMy44NDQgMCA3IDIuNTQyIDcgNS42NzIgMCAxLjU5MS0uNjQ2IDIuNTI3LTEuNDgxIDMuNTI3bC44MzkgMi42ODYtMi45NDMtMS4yNzJ6bS0xMy4zNzMtMy4zNzVsLTQuMzg5IDEuODk2IDEuMjU2LTQuMDEyYy0xLjEyMS0xLjM0MS0xLjkwOS0yLjY2NS0xLjkwOS00LjY5OSAwLTQuMjc3IDQuMjYyLTcuNzU2IDkuNS03Ljc1NiA1LjAxOCAwIDkuMTI4IDMuMTk0IDkuNDY3IDcuMjIyLTEuMTktLjU2Ni0yLjU1MS0uODg5LTMuOTY3LS44ODktNC4xOTkgMC04IDIuNzk3LTggNi42NzIgMCAuNzEyLjE0NyAxLjQuNDExIDIuMDQ5LS45NTMtLjEyNi0xLjU0Ni0uMjcyLTIuMzY5LS40ODNtMTcuOTU4LTEuNTY2YzAtMi4xNzItMS4xOTktNC4wMTUtMy4wMDItNS4yMWwuMDAyLS4wMzljMC01LjA4Ni00Ljk4OC04Ljc1Ni0xMC41LTguNzU2LTUuNTQ2IDAtMTAuNSAzLjY5OC0xMC41IDguNzU2IDAgMS43OTQuNjQ2IDMuNTU2IDEuNzkxIDQuOTIybC0xLjc0NCA1LjU3MiA2LjA3OC0yLjYyNWMuOTgyLjI1MyAxLjkzMi40MDcgMi44NS40ODkgMS4zMTcgMS45NTMgMy44NzYgMy4zMTQgNy4xMTYgMy4zMTQgMS4wMTkgMCAyLjEwNS0uMTM1IDMuMjQyLS40MjhsNC42MzEgMi0xLjMyOC00LjI0NWMuODcxLTEuMDQyIDEuMzY0LTIuMzg0IDEuMzY0LTMuNzUiLz48L3N2Zz4=">Bình luận</a>
                    </li>
                    <li class="nav-item">
                              <a href="index.php?act=listbill" class="nav-link"><img src="https://img.icons8.com/external-flatart-icons-solid-flatarticons/64/000000/external-cart-grocery-flatart-icons-solid-flatarticons.png" width=28px, height=28px;>Đơn hàng</a>
                          </li>
                    <li class="nav-item">
                    <li class="nav-item">
                        <a href="http://localhost/pro1014_duan1/admin/thongke/listtk.php" class="nav-link"><img src="https://img.icons8.com/ios-filled/50/000000/statistics.png" width="24px"/>Thống kê</a>
                    </li>
                    </ul>
              </div>
        </div>