<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
   <!-- Navbar -->
   <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
               <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Admin</a></li>
               <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Đơn Hàng</li>
            </ol>
            <h6 class="font-weight-bolder mb-0">Đơn Hàng</h6>
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
   <div class="container-fluid py-4">
      <div class="row">
         <div class="col-12">
            <div class="card my-4">
               <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                     <h6 class="text-white text-capitalize ps-3" style="font-size: 1.3em;">Đơn hàng</h6>
                  </div>
               </div>
               <div class="card-body px-0 pb-2">
                  <div class="table-responsive p-0">
                     <div class="card-body px-0 pb-2 mt-n4 mx-3">
                        <form action="?admin=page&act=order" method="POST">
                           <div class="select-wrapper">
                              <select name="locdonhang">
                                 <option value="" disabled selected>Lọc đơn hàng</option>
                                 <option value="1">5 đơn hàng mới nhất</option>
                                 <option value="2">Các đơn hàng chưa thanh toán</option>
                                 <option value="3">Các đơn hàng Đã thanh toán</option>
                                 <option value="4">Tất cả đơn hàng</option>
                              </select>
                           </div>
                           <button class="filter-button" type="submit" value="Lọc">Lọc</button>
                        </form>
                     </div>
                     <?php if (isset($option)) : ?>
                        <?php if ($option == "donhangmoi") : ?>
                           <!-- HTML ở đây -->
                           <table class="table align-items-center mb-0" style="    background-color: #dee4f1;">
                              <thead>
                                 <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tên
                                       Khách
                                       Hàng
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                       Mã Đơn Hàng
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                       Trạng thái</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                       Ngày tạo</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                       Tool</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php foreach ($donhangtheokhach as $donhang_khachhang) : ?>
                                    <?php foreach ($donhangmoi as $donhangmoinhat5) : ?>
                                       <?php if ($donhang_khachhang['id_khachhang'] == $donhangmoinhat5['id_khachhang']) : ?>
                                          <tr>
                                             <td>
                                                <p class="text-xs font-weight-bold mb-0">
                                                <h6 class="mb-0 text-sm"><?= $donhang_khachhang['tenkhachhang'] ?></h6>
                                                </p>
                                             </td>
                                             <td>
                                                <p class="text-xs font-weight-bold mb-0">
                                                   #<?= $donhangmoinhat5['id_donhang'] * rand(10, 20) ?>
                                                </p>
                                             </td>
                                             <td class="align-middle text-center text-sm">
                                                <select class="badge badge-sm bg-gradient-success" tyle="display: inline-block; position: relative; font-family: Arial, sans-serif; font-size: 14px; color: #333; padding: 8px 16px; width: 200px; border: 1px solid #ccc; border-radius: 4px; background-color: #fff; appearance: none; -webkit-appearance: none; cursor: pointer;">

                                                   <option value="1">Đã Giao Hàng Thành Công</option>
                                                   <option value="2" <?php if ($donhangmoinhat5['trangthai'] == "dangsuly") {
                                                                        echo "selected";
                                                                     } ?>>Đơn Chưa được giao hàng</option>
                                                </select>
                                             </td>
                                             <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold"><?= $donhangmoinhat5['ngaydathang'] ?></span>
                                             </td>
                                             <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">
                                                   <input type="submit" value="Cập nhập" name="capnhap" style="background-color: #EC407A; border: none;color:white; width:100px;height: 30px;text-align: center;">
                                                   <a href="?admin=order&act=xemdonhang&id_khachhang=<?= $donhangmoinhat5['id_khachhang'] ?>&id_donhang=<?= $donhangmoinhat5['id_donhang'] ?>" style="background-color: #EC407A; border: none;color:white;text-align: center;
  border: 1px solid #ccc;
  padding: 7px 35px;
  font-weight: 400;">Xem</a>
                                                </span>
                                             </td>
                                          </tr>
                                       <?php endif; ?>
                                    <?php endforeach; ?>
                                 <?php endforeach; ?>
                              </tbody>
                           </table>
                        <?php elseif ($option == "chuathanhtoan") : ?>
                           <table class="table align-items-center mb-0" style="    background-color: #dee4f1;">
                              <thead>
                                 <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tên
                                       Khách
                                       Hàng
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                       Mã Đơn Hàng
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                       Trạng thái</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                       Ngày tạo</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                       Tool</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php foreach ($donhangtheokhach as $donhang_khachhang) : ?>
                                    <?php foreach ($chuathanhtoan as $donhangchuathanhtoan) : ?>
                                       <?php if ($donhang_khachhang['id_khachhang'] == $donhangchuathanhtoan['id_khachhang']) : ?>
                                          <tr>
                                             <td>
                                                <p class="text-xs font-weight-bold mb-0">
                                                <h6 class="mb-0 text-sm"><?= $donhang_khachhang['tenkhachhang'] ?></h6>
                                                </p>
                                             </td>
                                             <td>
                                                <p class="text-xs font-weight-bold mb-0">
                                                   #<?= $donhangchuathanhtoan['id_donhang'] * rand(10, 20) ?>
                                                </p>
                                             </td>
                                             <td class="align-middle text-center text-sm">
                                                <select class="badge badge-sm bg-gradient-success" tyle="display: inline-block; position: relative; font-family: Arial, sans-serif; font-size: 14px; color: #333; padding: 8px 16px; width: 200px; border: 1px solid #ccc; border-radius: 4px; background-color: #fff; appearance: none; -webkit-appearance: none; cursor: pointer;">

                                                   <option value="1">Đã Giao Hàng Thành Công</option>
                                                   <option value="2" <?php if ($donhangchuathanhtoan['trangthai'] == "dangsuly") {
                                                                        echo "selected";
                                                                     } ?>>Đơn Chưa được giao hàng</option>
                                                </select>
                                             </td>
                                             <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold"><?= $donhangchuathanhtoan['ngaydathang'] ?></span>
                                             </td>
                                             <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">
                                                   <input type="submit" value="Cập nhập" name="capnhap" style="background-color: #EC407A; border: none;color:white; width:100px;height: 30px;text-align: center;">
                                                   <a href="?admin=order&act=xemdonhang&id_khachhang=<?= $donhangchuathanhtoan['id_khachhang'] ?>&id_donhang=<?= $donhangchuathanhtoan['id_donhang'] ?>" style="background-color: #EC407A; border: none;color:white;text-align: center;
  border: 1px solid #ccc;
  padding: 7px 35px;
  font-weight: 400;">Xem</a>
                                                </span>
                                             </td>
                                          </tr>
                                       <?php endif; ?>
                                    <?php endforeach; ?>
                                 <?php endforeach; ?>
                              </tbody>
                           </table>
                        <?php elseif ($option == "dathanhtoan") : ?>
                           <!-- HTML ở đây -->
                           <table class="table align-items-center mb-0" style="    background-color: #dee4f1;">
                              <thead>
                                 <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tên
                                       Khách
                                       Hàng
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                       Mã Đơn Hàng
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                       Trạng thái</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                       Ngày tạo</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                       Tool</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php foreach ($donhangtheokhach as $donhang_khachhang) : ?>
                                    <?php foreach ($dathanhtoan as $donhangdathanhtoan) : ?>
                                       <?php if ($donhang_khachhang['id_khachhang'] == $donhangdathanhtoan['id_khachhang']) : ?>
                                          <tr>
                                             <td>
                                                <span class="text-secondary text-xs font-weight-bold">
                                                   <h6 class="mb-0 text-sm"><?= $donhang_khachhang['tenkhachhang'] ?></h6>
                                                </span>
                                             </td>
                                             <td>
                                                <p class="text-xs font-weight-bold mb-0">
                                                   #<?= $donhangdathanhtoan['id_donhang'] * rand(10, 20) ?>
                                                </p>
                                             </td>
                                             <td class="align-middle text-center text-sm">
                                                <select class="badge badge-sm bg-gradient-success" tyle="display: inline-block; position: relative; font-family: Arial, sans-serif; font-size: 14px; color: #333; padding: 8px 16px; width: 200px; border: 1px solid #ccc; border-radius: 4px; background-color: #fff; appearance: none; -webkit-appearance: none; cursor: pointer;">

                                                   <option value="1">Đã Giao Hàng Thành Công</option>
                                                   <option value="2" <?php if ($donhangdathanhtoan['trangthai'] == "dangsuly") {
                                                                        echo "selected";
                                                                     } ?>>Đơn Chưa được giao hàng</option>
                                                </select>
                                             </td>
                                             <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold"><?= $donhangdathanhtoan['ngaydathang'] ?></span>
                                             </td>
                                             <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">
                                                   <input type="submit" value="Cập nhập" name="capnhap" style="background-color: #EC407A; border: none;color:white; width:100px;height: 30px;text-align: center;">
                                                   <a href="?admin=order&act=xemdonhang&id_khachhang=<?= $donhangdathanhtoan['id_khachhang'] ?>&id_donhang=<?= $donhangdathanhtoan['id_donhang'] ?>" style="background-color: #EC407A; border: none;color:white;text-align: center;
  border: 1px solid #ccc;
  padding: 7px 35px;
  font-weight: 400;">Xem</a>
                                                </span>
                                             </td>
                                          </tr>
                                       <?php endif; ?>
                                    <?php endforeach; ?>
                                 <?php endforeach; ?>
                              </tbody>
                           </table>
                        <?php else : ?>
                           <!-- HTML ở đây -->
                           <table class="table align-items-center mb-0" style="    background-color: #dee4f1;">
                              <thead>
                                 <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tên
                                       Khách
                                       Hàng
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                       Mã Đơn Hàng
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                       Trạng thái</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                       Ngày tạo</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                       Tool</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <hr>
                                 <?php foreach ($donhangtheokhach as $donhang_khachhang) : ?>
                                    <tr>
                                       <td rowspan="<?= $donhang_khachhang['sodonhang'] + 1 ?>">
                                          <div class="d-flex px-2 py-1">
                                             <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">
                                                   <?= $donhang_khachhang['tenkhachhang'] ?>
                                                </h6>
                                             </div>
                                          </div>
                                       </td>
                                    </tr>
                                    <!-- dòng 2 -->
                                    <?php foreach ($showdonhang as $donhang) : ?>
                                       <?php if ($donhang_khachhang['id_khachhang'] == $donhang['id_khachhang']) : ?>
                                          <tr>
                                             <td>
                                                <p class="text-xs font-weight-bold mb-0">
                                                   #<?= $donhang['id_donhang'] * rand(10, 20) ?>
                                                </p>
                                             </td>
                                             <td class="align-middle text-center text-sm">
                                                <select class="badge badge-sm bg-gradient-success" tyle="display: inline-block; position: relative; font-family: Arial, sans-serif; font-size: 14px; color: #333; padding: 8px 16px; width: 200px; border: 1px solid #ccc; border-radius: 4px; background-color: #fff; appearance: none; -webkit-appearance: none; cursor: pointer;">

                                                   <option value="1">Đã Giao Hàng Thành Công</option>
                                                   <option value="2" <?php if ($donhang['trangthai'] == "dangsuly") {
                                                                        echo "selected";
                                                                     } ?>>Đơn Chưa được giao hàng</option>
                                                </select>
                                             </td>
                                             <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold"><?= $donhang['ngaydathang'] ?></span>
                                             </td>
                                             <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">
                                                   <input type="submit" value="Cập nhập" name="capnhap" style="background-color: #EC407A; border: none;color:white; width:100px;height: 30px;text-align: center;">
                                                   <a href="?admin=order&act=xemdonhang&id_khachhang=<?= $donhang['id_khachhang'] ?>&id_donhang=<?= $donhang['id_donhang'] ?>" style="background-color: #EC407A; border: none;color:white;text-align: center;
  border: 1px solid #ccc;
  padding: 7px 35px;
  font-weight: 400;">Xem</a>
                                                </span>
                                             </td>
                                          </tr>
                                       <?php endif; ?>
                                    <?php endforeach; ?>
                                 <?php endforeach; ?>
                              </tbody>
                           </table>
                        <?php endif; ?>
                     <?php endif; ?>

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
                     <a href="../?mod=page&act=home" class="font-weight-bold" target="_blank">Flower-Shop</a>
                     .
                  </div>
               </div>
               <!-- foot menu  -->
               <div class="col-lg-6">
                  <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                     <li class="nav-item">
                        <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative
                           Tim</a>
                     </li>
                     <li class="nav-item">
                        <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About
                           Us</a>
                     </li>
                     <li class="nav-item">
                        <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                     </li>
                     <li class="nav-item">
                        <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                     </li>
                  </ul>
               </div>
               <!-- end foot menu -->
            </div>
         </div>
      </footer>
   </div>
</main>