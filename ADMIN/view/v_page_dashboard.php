<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
   <!-- Navbar -->
   <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
      data-scroll="true">
      <div class="container-fluid py-1 px-3">
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
               <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Admin</a></li>
               <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Bản điều khiển</li>
            </ol>
            <h6 class="font-weight-bolder mb-0">Bảng điều khiển</h6>
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
                  <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton"
                     data-bs-toggle="dropdown" aria-expanded="false">
                     <i class="fa fa-bell cursor-pointer">Thông báo</i>
                  </a>
                  <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                     <li class="mb-2">

                  </ul>
         </div>
      </div>
   </nav>
   <div class="container-fluid py-4">
      <div class="row">
         <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
               <div class="card-header p-3 pt-2">
                  <div
                     class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                     <i class="material-icons opacity-10">weekend</i>
                  </div>
                  <div class="text-end pt-1">
                     <p class="text-sm mb-0 text-capitalize">Doanh số tuần này</p>
                     <h4 class="mb-0"><?= $doanhsotrongtuan['doanhso'] ?>.000 VND</h4>
                  </div>
               </div>
               <hr class="dark horizontal my-0">
               <div class="card-footer p-3">
                  <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>so với tuần trước
                  </p>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
               <div class="card-header p-3 pt-2">
                  <div
                     class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                     <i class="material-icons opacity-10">person</i>
                  </div>
                  <div class="text-end pt-1">
                     <p class="text-sm mb-0 text-capitalize">Lượt người dùng</p>
                     <h4 class="mb-0"><?= $luotnguoidung['luotnguoidung'] ?></h4>
                  </div>
               </div>
               <hr class="dark horizontal my-0">
               <div class="card-footer p-3">
                  <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>so với tháng trước
                  </p>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
               <div class="card-header p-3 pt-2">
                  <div
                     class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                     <i class="material-icons opacity-10">person</i>
                  </div>
                  <div class="text-end pt-1">
                     <p class="text-sm mb-0 text-capitalize">Khách hàng mới</p>
                     <h4 class="mb-0"><?= $khachhangmoi['hoten'] ?></h4>
                  </div>
               </div>
               <hr class="dark horizontal my-0">
               <div class="card-footer p-3">
                  <p class="mb-0"><span class="text-danger text-sm font-weight-bolder">-2% </span>so với hôm qua</p>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-sm-6">
            <div class="card">
               <div class="card-header p-3 pt-2">
                  <div
                     class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                     <i class="material-icons opacity-10">weekend</i>
                  </div>
                  <div class="text-end pt-1">
                     <p class="text-sm mb-0 text-capitalize">Tổng doanh số</p>
                     <h4 class="mb-0"><?= $tongdoanhso['tongdoanhso'] ?>.000 VND</h4>
                  </div>
               </div>
               <hr class="dark horizontal my-0">
               <div class="card-footer p-3">
                  <p class="mb-0"><span class="text-success text-sm font-weight-bolder"></span>Từ trước đến nay</p>
               </div>
            </div>
         </div>
      </div>
      <div class="row mt-4">
         <div class="col-lg-4 col-md-6 mt-4 mb-4">
            <div class="card z-index-2 ">
               <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                  <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                     <div class="chart">
                        <canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
                     </div>
                  </div>
               </div>
               <div class="card-body">
                  <h6 class="mb-0 ">các đơn hàng đã đặt trong tuần</h6>
                  <p class="text-sm ">(<span class="font-weight-bolder">T4</span>)Ngày có đơn hàng nhiều nhất</p>
                  <hr class="dark horizontal">
                  <div class="d-flex ">
                     <i class="material-icons text-sm my-auto me-1">schedule</i>
                     <p class="mb-0 text-sm">Bản ghi chính xác trong tuần</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 mt-4 mb-4">
            <div class="card z-index-2  ">
               <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                  <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
                     <div class="chart">
                        <canvas id="chart-line" class="chart-canvas" height="170"></canvas>
                     </div>
                  </div>
               </div>
               <div class="card-body">
                  <h6 class="mb-0 ">Các đơn đã bán trong tuần</h6>
                  <p class="text-sm "> (<span class="font-weight-bolder">+15%</span>) doanh số </p>
                  <hr class="dark horizontal">
                  <div class="d-flex ">
                     <i class="material-icons text-sm my-auto me-1">schedule</i>
                     <p class="mb-0 text-sm"> cập nhật 4 phút trước </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 mt-4 mb-3">
            <div class="card z-index-2 ">
               <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                  <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                     <div class="chart">
                        <canvas id="chart-line-tasks" class="chart-canvas" height="170"></canvas>
                     </div>
                  </div>
               </div>
               <div class="card-body">
                  <!-- <h6 class="mb-0 ">Completed Tasks</h6> -->
                  <h6 class="mb-0 ">Tổng tiền các ngày trong tuần</h6>
                  <!-- <p class="text-sm ">Last Campaign Performance</p> -->
                  <p class="text-sm ">(+15 Đơn hàng mới )</p>
                  <hr class="dark horizontal">
                  <div class="d-flex ">
                     <i class="material-icons text-sm my-auto me-1">schedule</i>
                     <p class="mb-0 text-sm">vừa xong</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row mb-4">
         <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
            <div class="card">
               <div class="card-header pb-0">
                  <div class="row">
                     <div class="col-lg-6 col-7">
                        <h6>Quản lý admin</h6>
                        <p class="text-sm mb-0">
                           <i class="fa fa-check text-info" aria-hidden="true"></i>
                           <span class="font-weight-bold ms-1">Số lượng</span>
                        </p>
                     </div>
                     <div class="col-lg-6 col-5 my-auto text-end">
                        <div class="dropdown float-lg-end pe-4">
                           <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="fa fa-ellipsis-v text-secondary"></i>
                           </a>
                           <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                              <li><a class="dropdown-item border-radius-md" href="javascript:;">chức năng</a></li>
                              <li><a class="dropdown-item border-radius-md" href="javascript:;">chức năng</a></li>
                              <li><a class="dropdown-item border-radius-md" href="javascript:;">chức năng</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card-body px-0 pb-2">
                  <div class="table-responsive">
                     <table class="table align-items-center mb-0">
                        <thead>
                           <tr>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tên</th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Avata
                              </th>
                              <th
                                 class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                 Chức vụ</th>
                              <th
                                 class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                 gì nữa k biết</th>
                           </tr>
                        </thead>
                        <tbody>
                           <!-- user -->
                           <tr>
                              <td>
                                 <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                       <h6 class="mb-0 text-sm">tên</h6>
                                    </div>
                                 </div>
                              </td>
                              <td>
                                 <!-- avata người dùng -->
                                 <div class="avatar-group mt-2">
                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                       data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Tompson">
                                       <img src="../model/assets/img/team-1.jpg" alt="team1">
                                    </a>
                                 </div>
                                 <!--avt end -->
                              </td>
                              <td class="align-middle text-center text-sm">
                                 <span class="text-xs font-weight-bold"> Quản trị cấp cao </span>
                              </td>
                              <td class="align-middle">
                                 <div class="progress-wrapper w-75 mx-auto">
                                    <div class="progress-info">
                                       <div class="progress-percentage">
                                          <span class="text-xs font-weight-bold">60%</span>
                                       </div>
                                    </div>
                                    <div class="progress">
                                       <div class="progress-bar bg-gradient-info w-60" role="progressbar"
                                          aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                 </div>
                              </td>
                           </tr>
                           <!-- end user -->
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <!--  -->
         <div class="col-lg-4 col-md-6">
            <div class="card h-100">

               <div class="card-header pb-0">
                  <h6>Tổng quan về đơn hàng</h6>
                  <p class="text-sm">
                     <i class="fa fa-arrow-up text-success" aria-hidden="true"></i>
                     <span class="font-weight-bold">24%</span> so với tuần trước
                  </p>
               </div>
               <div class="card-body p-3">
                  <div class="timeline timeline-one-side">
                  </div>
               </div>
            </div>
         </div>
         <!--  -->
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