<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="apple-touch-icon" sizes="76x76" href="theme-admin/model/assets/img/apple-icon.png">
   <link rel="icon" type="image/png" href="theme-admin/model/assets/img/favicon.png">
   <title>
      Admin_flowershop
   </title>
   <style>
      .hidden {
         display: none;
      }

      .sua-input {
         margin: 0;
         border: none;
         text-align: center;
         font-size: 14px;
         line-height: 1.5;
         padding: 8px 12px;
         border-radius: 4px;
         background-color: #f2f2f2;
         color: #333;
         transition: background-color 0.3s ease;
         width: 100%;
      }

      .sua-input:focus,
      .sua-input:active {
         outline: none;
         background-color: #e0e0e0;
      }

      select[name="tendanhmuc"] {
         border: 1px solid #ccc;
         padding: 8px 12px;
         border-radius: 4px;
         background-color: #f2f2f2;
         color: #333;
         font-size: 14px;
         line-height: 1.5;
         width: 100%;
         height: 30%;
         text-align: center;
      }

      select[name="danhmuc"] {
         border: 1px solid #ccc;
         padding: 8px 12px;
         border-radius: 4px;
         background-color: #f2f2f2;
         color: #333;
         font-size: 14px;
         line-height: 1.5;
         width: 100%;
         height: 30%;
         text-align: center;
      }

      select[name="danhmuc"]:focus {
         outline: none;
         border-color: #007bff;
         box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
      }

      select[name="tendanhmuc"]:focus {
         outline: none;
         border-color: #007bff;
         box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
      }

      .admin-img {
         width: 100px;
         height: 100px;
         border-radius: 20px
      }

      #img-element {
         width: 100px;
         height: 100px;
         border-radius: 40px;
      }

      .file-img {
         width: 100px;
         height: 100px;
         margin-top: -100px;
         opacity: 0;
      }

      #img-element-them {
         width: 100px;
         height: 100px;
         border-radius: 40px;
      }

      #file-img-them {
         width: 100px;
         height: 100px;
         margin-top: -100px;
         opacity: 0;
      }

      #add-myid {
         width: 100px;
         height: 100px;
         border-radius: 40px;
      }

      #add-myclass {
         width: 100px;
         height: 100px;
         margin-top: -100px;
         opacity: 0;
      }
   </style>
   <!--     Fonts and icons     -->
   <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
   <!-- Nucleo Icons -->
   <link href="theme-admin/model/assets/css/nucleo-icons.css" rel="stylesheet" />
   <link href="theme-admin/model/assets/css/nucleo-svg.css" rel="stylesheet" />
   <!-- Font Awesome Icons -->
   <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
   <!-- Material Icons -->
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
   <!-- CSS Files -->
   <link id="pagestyle" href="theme-admin/model/assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
   <!-- Nepcha Analytics (nepcha.com) -->
   <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
   <scrip defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js">
      </script>
</head>

<body class="g-sidenav-show  bg-gray-200">
   <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark" id="sidenav-main">
      <div class="sidenav-header">
         <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
         <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
            <img src="theme-admin/model/assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold text-white">Flower Shop Admin</span>
         </a>
      </div>
      <hr class="horizontal light mt-0 mb-2">
      <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link text-white <?php if ($_GET['act'] == 'dashboard') {
                                                echo " active bg-gradient-primary";
                                             } ?>" href="?admin=page&act=dashboard">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                     <i class="material-icons opacity-10">dashboard</i>
                  </div>
                  <span class="nav-link-text ms-1">Bảng đều khiển</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link text-white <?php if ($_GET['act'] == 'category') {
                                                echo " active bg-gradient-primary";
                                             } ?>" href="?admin=page&act=category">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                     <i class="material-icons opacity-10">table_view</i>
                  </div>
                  <span class="nav-link-text ms-1">Danh mục</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link text-white <?php if ($_GET['act'] == 'product') {
                                                echo " active bg-gradient-primary";
                                             } ?>" href="?admin=page&act=product">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                     <i class="material-icons opacity-10">table_view</i>
                  </div>
                  <span class="nav-link-text ms-1">Sản phẩm</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link text-white <?php if ($_GET['act'] == 'order') {
                                                echo " active bg-gradient-primary";
                                             } ?>" href="?admin=page&act=order">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                     <i class="material-icons opacity-10">table_view</i>
                  </div>
                  <span class="nav-link-text ms-1">Order</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link text-white <?php if ($_GET['act'] == 'user') {
                                                echo " active bg-gradient-primary";
                                             } ?>" href="?admin=page&act=user">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                     <i class="material-icons opacity-10">table_view</i>
                  </div>
                  <span class="nav-link-text ms-1">Người dùng</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link text-white <?php if ($_GET['act'] == 'warning') {
                                                echo " active bg-gradient-primary";
                                             } ?>" href="?admin=page&act=warning&Array">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                     <i class="material-icons opacity-10">notifications</i>
                  </div>
                  <span class="nav-link-text ms-1">Thông báo</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link text-white <?php if ($_GET['act'] == 'persona') {
                                                echo " active bg-gradient-primary";
                                             } ?>" href="?admin=page&act=persona&Array">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                     <i class="material-icons opacity-10">person</i>
                  </div>
                  <span class="nav-link-text ms-1">Thông tin người dùng</span>
               </a>
            </li>
         </ul>
      </div>
      <div class="sidenav-footer position-absolute w-100 bottom-0 ">
         <div class="mx-3">
            <a class="btn btn-outline-primary mt-4 w-100" href="#" type="button">Đăng xuất</a>
         </div>
      </div>
   </aside>
   <?php
   include_once "view/v_$view_name.php";
   ?>



   <div class="fixed-plugin">
      <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
         <i class="material-icons py-2">settings</i>
      </a>
      <div class="card shadow-lg">
         <div class="card-header pb-0 pt-3">
            <div class="float-start">
               <h5 class="mt-3 mb-0">Cài đặt giao diện</h5>
            </div>
            <div class="float-end mt-4">
               <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                  <i class="material-icons">clear</i>
               </button>
            </div>
            <!-- End Toggle Button -->
         </div>
         <hr class="horizontal dark my-1">
         <div class="card-body pt-sm-3 pt-0">
            <!-- Sidebar Backgrounds -->
            <div>
               <h6 class="mb-0">Màu thanh điều hướng</h6>
            </div>
            <a href="javascript:void(0)" class="switch-trigger background-color">
               <div class="badge-colors my-2 text-start">
                  <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
                  <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
                  <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
                  <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
                  <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
                  <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
               </div>
            </a>
            <!-- Sidenav Type -->
            <div class="mt-3">
               <h6 class="mb-0">Kiểu thanh điều hướng</h6>
               <br>
            </div>
            <div class="d-flex">
               <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark mode</button>
               <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Bóng</button>
               <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">Mặc
                  định</button>
            </div>
            <!-- Navbar Fixed -->
            <div class="mt-3 d-flex">
               <h6 class="mb-0">Thanh điều hướng</h6>
               <div class="form-check form-switch ps-0 ms-auto my-auto">
                  <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
               </div>
            </div>
            <hr class="horizontal dark my-3">
            <div class="mt-2 d-flex">
               <h6 class="mb-0">Light mode / Dark mode</h6>
               <div class="form-check form-switch ps-0 ms-auto my-auto">
                  <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
               </div>
            </div>
            <hr class="horizontal dark my-sm-4">
            <!-- <a class="btn bg-gradient-info w-100" href="https://www.creative-tim.com/product/material-dashboard-pro">Free Download</a> -->
            <a class="btn btn-outline-dark w-100" href="#">thêm chức năng gì k biết</a>
            <div class="w-100 text-center">
            </div>
         </div>
      </div>
   </div>
   <!--   Core JS Files   -->
   <script src="theme-admin/model/assets/js/core/popper.min.js"></script>
   <script src="theme-admin/model/assets/js/core/bootstrap.min.js"></script>
   <script src="theme-admin/model/assets/js/plugins/perfect-scrollbar.min.js"></script>
   <script src="theme-admin/model/assets/js/plugins/smooth-scrollbar.min.js"></script>
   <script src="theme-admin/model/assets/js/plugins/chartjs.min.js"></script>

   <script>
      var donhangtrongtuan = <?php echo $donhangtrongtuanJson; ?>;
      var ctx = document.getElementById("chart-bars").getContext("2d");
      new Chart(ctx, {
         type: "bar",
         data: {
            labels: ["T2", "T3", "T4", "T5", "T6", "T7", "CN"],
            datasets: [{
               label: "Đơn Hàng",
               tension: 0.4,
               borderWidth: 0,
               borderRadius: 4,
               borderSkipped: false,
               backgroundColor: "rgba(255, 255, 255, .8)",
               data: donhangtrongtuan,
               maxBarThickness: 6
            }, ],
         },
         options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
               legend: {
                  display: false,
               }
            },
            interaction: {
               intersect: false,
               mode: 'index',
            },
            scales: {
               y: {
                  grid: {
                     drawBorder: false,
                     display: true,
                     drawOnChartArea: true,
                     drawTicks: false,
                     borderDash: [5, 5],
                     color: 'rgba(255, 255, 255, .2)'
                  },
                  ticks: {
                     suggestedMin: 0,
                     suggestedMax: 500,
                     beginAtZero: true,
                     padding: 10,
                     font: {
                        size: 14,
                        weight: 300,
                        family: "Roboto",
                        style: 'normal',
                        lineHeight: 2
                     },
                     color: "#fff"
                  },
               },
               x: {
                  grid: {
                     drawBorder: false,
                     display: true,
                     drawOnChartArea: true,
                     drawTicks: false,
                     borderDash: [5, 5],
                     color: 'rgba(255, 255, 255, .2)'
                  },
                  ticks: {
                     display: true,
                     color: '#f8f9fa',
                     padding: 10,
                     font: {
                        size: 14,
                        weight: 300,
                        family: "Roboto",
                        style: 'normal',
                        lineHeight: 2
                     },
                  }
               },
            },
         },
      });


      var ctx2 = document.getElementById("chart-line").getContext("2d");
      var donhangdabantrongtuan = <?php echo $donhangdabantrongtuanJson; ?>;
      new Chart(ctx2, {
         type: "line",
         data: {
            labels: ["T1", "T2", "T3", "T4", "T5", "T6", "T7"],
            datasets: [{
               label: "Sản phẩm đã bán",
               tension: 0,
               borderWidth: 0,
               pointRadius: 5,
               pointBackgroundColor: "rgba(255, 255, 255, .8)",
               pointBorderColor: "transparent",
               borderColor: "rgba(255, 255, 255, .8)",
               borderColor: "rgba(255, 255, 255, .8)",
               borderWidth: 4,
               backgroundColor: "transparent",
               fill: true,
               data: donhangdabantrongtuan,
               maxBarThickness: 6

            }],
         },
         options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
               legend: {
                  display: false,
               }
            },
            interaction: {
               intersect: false,
               mode: 'index',
            },
            scales: {
               y: {
                  grid: {
                     drawBorder: false,
                     display: true,
                     drawOnChartArea: true,
                     drawTicks: false,
                     borderDash: [5, 5],
                     color: 'rgba(255, 255, 255, .2)'
                  },
                  ticks: {
                     display: true,
                     color: '#f8f9fa',
                     padding: 10,
                     font: {
                        size: 14,
                        weight: 300,
                        family: "Roboto",
                        style: 'normal',
                        lineHeight: 2
                     },
                  }
               },
               x: {
                  grid: {
                     drawBorder: false,
                     display: false,
                     drawOnChartArea: false,
                     drawTicks: false,
                     borderDash: [5, 5]
                  },
                  ticks: {
                     display: true,
                     color: '#f8f9fa',
                     padding: 10,
                     font: {
                        size: 14,
                        weight: 300,
                        family: "Roboto",
                        style: 'normal',
                        lineHeight: 2
                     },
                  }
               },
            },
         },
      });

      var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");
      var tongtiencacngaytrongtuan = <?php echo $tongtiencacngaytrongtuanJson; ?>;
      new Chart(ctx3, {
         type: "line",
         data: {
            labels: ["T2", "T3", "T4", "T5", "T6", "T7", "CN"],
            datasets: [{
               label: "Bán được trong ngày",
               tension: 0,
               borderWidth: 0,
               pointRadius: 5,
               pointBackgroundColor: "rgba(255, 255, 255, .8)",
               pointBorderColor: "transparent",
               borderColor: "rgba(255, 255, 255, .8)",
               borderWidth: 4,
               backgroundColor: "transparent",
               fill: true,
               data: tongtiencacngaytrongtuan,
               maxBarThickness: 6

            }],
         },
         options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
               legend: {
                  display: false,
               }
            },
            interaction: {
               intersect: false,
               mode: 'index',
            },
            scales: {
               y: {
                  grid: {
                     drawBorder: false,
                     display: true,
                     drawOnChartArea: true,
                     drawTicks: false,
                     borderDash: [5, 5],
                     color: 'rgba(255, 255, 255, .2)'
                  },
                  ticks: {
                     display: true,
                     padding: 10,
                     color: '#f8f9fa',
                     font: {
                        size: 14,
                        weight: 300,
                        family: "Roboto",
                        style: 'normal',
                        lineHeight: 2
                     },
                  }
               },
               x: {
                  grid: {
                     drawBorder: false,
                     display: false,
                     drawOnChartArea: false,
                     drawTicks: false,
                     borderDash: [5, 5]
                  },
                  ticks: {
                     display: true,
                     color: '#f8f9fa',
                     padding: 10,
                     font: {
                        size: 14,
                        weight: 300,
                        family: "Roboto",
                        style: 'normal',
                        lineHeight: 2
                     },
                  }
               },
            },
         },
      });
   </script>

   <script>
      var win = navigator.platform.indexOf('Win') > -1;
      if (win && document.querySelector('#sidenav-scrollbar')) {
         var options = {
            damping: '0.5'
         }
         Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
      }
   </script>
   <!-- Github buttons -->
   <script async defer src="https://buttons.github.io/buttons.js"></script>
   <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
   <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
   <script src="theme-admin/model/assets/js/material-dashboard.min.js?v=3.1.0"></script>
   <script>
      // Add click event listener to all "sửa" buttons
      const suaButtons = document.querySelectorAll('.sua');

      for (const suaButton of suaButtons) {
         suaButton.addEventListener('click', function() {
            const productId = this.dataset.id;
            const productRow = document.getElementById(productId);
            const editProductRow = document.getElementById(`edit-${productId}`);

            // Hide any other edit rows
            const otherEditRows = document.querySelectorAll('.hidden:not(#edit-' + productId + ')');
            for (const otherEditRow of otherEditRows) {
               otherEditRow.classList.add('hidden');
            }

            // Show the edit row for the clicked product
            productRow.classList.add('hidden');
            editProductRow.classList.remove('hidden');
         });
      }

      // Add click event listener to all "X" buttons in edit rows
      const hideEditButtons = document.querySelectorAll('.hide-edit-row');

      for (const hideEditButton of hideEditButtons) {
         hideEditButton.addEventListener('click', function() {
            const editRow = this.parentElement.parentElement;
            editRow.classList.add('hidden');

            // Show the corresponding product row
            const productId = editRow.id.replace('edit-', '');
            const productRow = document.getElementById(productId);
            productRow.classList.remove('hidden');
         });
      }
   </script>
   <script>
      const inputFile = document.getElementById("image-upload");
      const img = document.getElementById("img-element-them");
      const defaultImage =
         "../wp-content/uploads/2021/05/tailen.jpg";
      img.src = defaultImage;
      inputFile.addEventListener("change", (event) => {
         const file = event.target.files[0];
         if (file) {
            img.src = URL.createObjectURL(file);
            img.classList.add("sua-img-them");
            inputFile.classList.add("file-img-them");
         } else {
            img.src = defaultImage;
            img.classList.remove("sua-img-them");
            inputFile.classList.remove("file-img-them");
         }
      });
   </script>
   <script>
      var buttons_sua = document.querySelectorAll('.sua');
      var buttons_x = document.querySelectorAll('.focus-product');

      buttons_sua.forEach(function(button) {
         button.addEventListener('click', function(event) {
            event.preventDefault();
         });
      });

      buttons_x.forEach(function(button) {
         button.addEventListener('click', function(event) {
            event.preventDefault();
         });
      });
   </script>
</body>

</html>