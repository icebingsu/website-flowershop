<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
   <!-- Navbar -->
   <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
               <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">order</a></li>
               <li class="breadcrumb-item text-sm text-dark active" aria-current="page">đơn hàng</li>
            </ol>
            <a href="?admin=page&act=order" class="font-weight-bolder mb-0">
               <---Trở về</a>
         </nav>
         <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            </div>
            <ul class="navbar-nav  justify-content-end">
               <li class="nav-item px-3 d-flex align-items-center">
                  <a href="javascript:;" class="nav-link text-body p-0">
                     <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer">Cài đặt</i>
                  </a>
               </li>
               <li class="nav-item dropdown pe-2 d-flex align-items-center">
                  <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                     <i class="fa fa-bell cursor-pointer">Thông báo</i>
                  </a>
                  <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                     <!-- thông báo -->
                     <li class="mb-2">
                        <a class="dropdown-item border-radius-md" href="javascript:;">
                           <div class="d-flex py-1">
                              <div class="my-auto">
                                 <img src="../model/assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                              </div>
                              <div class="d-flex flex-column justify-content-center">
                                 <h6 class="text-sm font-weight-normal mb-1">
                                    <span class="font-weight-bold">New message</span> from Laur
                                 </h6>
                                 <p class="text-xs text-secondary mb-0">
                                    <i class="fa fa-clock me-1"></i>
                                    13 minutes ago
                                 </p>
                              </div>
                           </div>
                        </a>
                     </li>
                     <li class="mb-2">
                        <a class="dropdown-item border-radius-md" href="javascript:;">

                        </a>
                     </li>
                     <li>
                        <a class="dropdown-item border-radius-md" href="javascript:;">

                        </a>
                     </li>

                  </ul>
               </li>
               <li class="nav-item d-flex align-items-center">

               </li>
            </ul>
         </div>
      </div>
   </nav>
   <!-- End Navbar -->
   <div class="container-fluid py-4">
      <div class="row">
         <div class="col-12">
            <div class="card my-4">
               <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                     <h6 class="text-white text-capitalize ps-3" style="font-size: 1.3em;">Đơn Hàng Của
                        <?= $tenkhachhang['tenkhachhang'] ?>
                     </h6>
                  </div>
               </div>
               <div class="card-body px-0 pb-2">
                  <div class="table-responsive p-0">
                     <table class="table align-items-center mb-0">
                        <thead>
                           <tr>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tên Hoa
                              </th>
                              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                 số điện thoại</th>
                              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                 email</th>
                              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                 Địa chỉ nhận hàng</th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Số
                                 Lượng
                              </th>
                              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                 Giá bán</th>
                              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                 Tổng </th>

                           </tr>
                        </thead>
                        <tbody>
                           <?php foreach ($hienthithanhtoan as $hienthithanhtoan) : ?>
                              <?php $tongtien += $hienthithanhtoan['giaban'] * $hienthithanhtoan['soluong']

                              ?>
                              <tr>
                                 <td>
                                    <div class="d-flex px-2 py-1">
                                       <div class="d-flex flex-column justify-content-center">

                                          <h6 class="mb-0 text-sm"><?= $hienthithanhtoan['tenhoa'] ?></h6>


                                       </div>
                                    </div>
                                 </td>

                                 <td class="align-middle text-center text-sm">

                                    <span class="text-xs font-weight-bold mb-0"><?= $hienthithanhtoan['sodienthoai'] ?></span>
                                 </td>
                                 <td class="align-middle text-center">

                                    <span class="text-secondary text-xs font-weight-bold"><?= $hienthithanhtoan['email'] ?></span>
                                 </td>
                                 <td class="align-middle text-center">

                                    <span class="text-secondary text-xs font-weight-bold"><?= $hienthithanhtoan['diachi'] ?></span>
                                 </td>
                                 <td>
                                    <p class="text-xs font-weight-bold mb-0"><?= $hienthithanhtoan['soluong'] ?></p>

                                 </td>
                                 <td class="align-middle text-center">

                                    <span class="text-secondary text-xs font-weight-bold"><?= $hienthithanhtoan['giaban'] ?>.000
                                       VND</span>
                                 </td>
                                 <td class="align-middle text-center">

                                    <span class="text-secondary text-xs font-weight-bold"><?= $hienthithanhtoan['giaban'] * $hienthithanhtoan['soluong'] ?>.000
                                       VND</span>
                                 </td>
                              </tr>
                           <?php endforeach; ?>
                           <tr>
                              <td class="align-middle text-center" colspan="5">

                                 <h6 class="mb-0 text-sm">Tổng Tiền</h6>
                              </td>
                              <td class="align-middle text-center" colspan="5">

                                 <h6 class="mb-0 text-sm"><?= $tongtien ?>.000 VND</h6>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <footer class="footer py-4  ">
         <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
               <div class="col-lg-6 mb-lg-0 mb-4">
                  <div class="copyright text-center text-sm text-muted text-lg-start">
                     ©
                     <script>
                        document.write(new Date().getFullYear())
                     </script>,
                     Bản quyền đã đăng kí </i> bởi
                     <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Flower-Shop</a>
                     .
                  </div>
               </div>
            </div>
         </div>
      </footer>
   </div>
</main>