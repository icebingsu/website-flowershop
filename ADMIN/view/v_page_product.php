<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
   <!-- Navbar -->
   <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
               <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Admin</a></li>
               <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Sản phẩm</li>
            </ol>
            <!-- <h6 class="font-weight-bolder mb-0">Sản phẩm</h6> -->
         </nav>
         <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
               <div class="input-group input-group-outline">
                  <label class="form-label">Tìm kiếm</label>
                  <input type="text" class="form-control">
               </div>
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
                  </ul>
               </li>
            </ul>
         </div>
      </div>
   </nav>
   <!-- End Navbar -->
   <div class="container-fluid py-4">
      <div class="row">
      </div>
      <div class="row">
         <div class="col-12">
            <div class="card my-4">
               <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                     <h6 class="text-white text-capitalize ps-3 ">Thêm sản phẩm</h6>
                  </div>
               </div>
               <div class="card-body px-0 pb-2">
                  <div class="table-responsive p-0">
                     <form action="?admin=product&act=themsp" method="post" enctype="multipart/form-data">
                        <table class="table align-items-center mb-0">
                           <thead>
                              <tr>
                                 <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                    Hình
                                 </th>
                                 <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                    Tên
                                 </th>
                                 <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                    Giá
                                 </th>
                                 <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                    Giá Khuyến mãi</th>
                                 <th class="text-center text-uppercase  text-secondary text-xxs font-weight-bolder opacity-7">
                                    Danh
                                    mục</th>
                                 <th class="text-secondary text-xxs font-weight-bolder opacity-7" style="text-align: center;">
                                    tool</th>
                              </tr>
                           </thead>
                           <tbody>
                              <!-- danh mục ở đây -->
                              <tr>
                                 <td class="align-middle" style="text-align: center;">
                                    <div class="text-secondary font-weight-bold text-xs">
                                       <label for="image-upload">
                                          <img src="../wp-content/uploads/2021/05/tailen.jpg" alt="Image" id="img-element-them" />
                                       </label>
                                       <input id="image-upload" type="file" style="display: none" id="file-img-them" name="anh" />
                                    </div>
                                 </td>
                                 <td style="text-align: center;">
                                    <div class="d-flex px-2 py-1">
                                       <div class="d-flex flex-column justify-content-center">
                                          <h6 class="mb-0 text-sm"><span class="text-secondary text-xs font-weight-bold">
                                                <input type="text" placeholder="Tên Hoa... " name="tenhoa" class="sua-input"></span></h6>
                                       </div>
                                    </div>
                                 </td>
                                 <td class="align-middle text-center text-sm" style="text-align: center;">
                                    <span class="text-secondary text-xs font-weight-bold"><span class="text-secondary text-xs font-weight-bold">
                                          <input type="text" placeholder="Nhập giá..." name="giaban" class="sua-input"></span></span>
                                 </td>
                                 <td class="align-middle text-center text-sm">
                                    <span class="text-secondary text-xs font-weight-bold"><span class="text-secondary text-xs font-weight-bold">
                                          <input type="text" placeholder="Giá Khuyến mãi..." name="giakm" class="sua-input"></span></span>
                                 </td style="text-align: center;">
                                 <td class="align-middle text-center text-sm">
                                    <span class="text-secondary text-xs font-weight-bold">
                                       <select name="danhmuc">
                                          <?php foreach ($show_name_category as $sp_danhmuc) : ?>
                                             <option value="<?php echo $sp_danhmuc['id'] ?>">
                                                <?php echo $sp_danhmuc['tendanhmuc'] ?></option>
                                          <?php endforeach; ?>
                                       </select>
                                    </span>
                                 </td>
                                 <td class="align-middle" style="text-align: center;">
                                    <button style="background-color: #EC407A; border: none;color:white; width:60px;text-align: center;" name="themsp">Thêm
                                    </button>
                                 </td>
                              </tr>
                              <!-- end danh mục -->
                           </tbody>
                        </table>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
      </div>
      <div class="col-12">
         <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
               <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                  <h6 class="text-white text-capitalize ps-3">Quản lý sản phẩm</h6>
               </div>
            </div>
            <div class="card-body px-0 pb-2">
               <div class="table-responsive p-0">
                  <div class="card-body px-0 pb-2 mt-n4 mx-3" style="display: flex;">
                     <form action="?admin=page&act=product&loc=hoa" method="POST">
                        <div class="select-wrapper">
                           <select name="lochoatheogia">
                              <option value="" disabled selected>Lọc Sản phẩm</option>
                              <option value="1">Tất cả</option>
                              <option value="2">10 Hoa mới nhất</option>
                              <option value="3">Hoa Giá Bán từ cao tới thấp</option>
                              <option value="4">Hoa Giá Bán từ thấp tới cao</option>
                           </select>
                        </div>
                        <button class="filter-button" type="submit" value="Lọc" name="btnlochoa">Lọc</button>
                     </form>
                     <form action="?admin=page&act=product&loc=danhmuc" method="POST" style=" margin-left: 10px;">
                        <div class="select-wrapper">
                           <select name="hoahoatheodanhmuc">
                              <option value="" disabled selected>theo danh mục</option>
                              <?php foreach ($show_name_category as $locsptheodanhmuc) : ?>
                                 <option value="<?= $locsptheodanhmuc['id'] ?>"><?= $locsptheodanhmuc['tendanhmuc'] ?>
                                 </option>
                              <?php endforeach; ?>
                           </select>
                        </div>
                        <button class="filter-button" type="submit" value="Lọc" name="btnlochoadanhmuc">Lọc</button>
                     </form>
                  </div>
                  <?php if ($lochoa == "all") : ?>
                     <table class="table align-items-center mb-0">
                        <thead>
                           <tr>
                              <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                 hình Ảnh
                              </th>
                              <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                 Tên
                              </th>
                              <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                 Giá
                              </th>
                              <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                 Giá Khuyến mãi</th>
                              <th class="text-center text-uppercase  text-secondary text-xxs font-weight-bolder opacity-7">
                                 Danh
                                 mục</th>
                              <th class="text-secondary text-xxs font-weight-bolder opacity-7" style="text-align: center;">
                                 tool
                              </th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php foreach ($show_product as $hoa) : ?>
                              <tr id="product<?php echo $hoa['id'] ?>">
                                 <th class="align-middle text-center text-sm" style="width: 100px;">
                                    <img src="../wp-content/uploads/2021/05/<?php echo $hoa['anhhoa'] ?>" alt="IMG" class="admin-img">
                                 </th>
                                 <td>
                                    <div class="d-flex px-2 py-1" style="justify-content: center;">
                                       <div class="d-flex flex-column justify-content-center">
                                          <h6 class="mb-0 text-sm"><?php echo $hoa['tenhoa'] ?></h6>
                                       </div>
                                    </div>
                                 </td>
                                 <td class="align-middle text-center text-sm">
                                    <span class="text-secondary text-xs font-weight-bold"><?php echo $hoa['giaban'] ?>.000
                                       VND</span>
                                 </td>
                                 <td class="align-middle text-center text-sm">
                                    <span class="text-secondary text-xs font-weight-bold">
                                       <?php if ($hoa['giakm'] > 0) {
                                          echo $hoa['giakm'] . ".000 VND";
                                       } else {
                                          echo "0";
                                       }
                                       ?>
                                    </span>
                                 </td>
                                 <td class="align-middle text-center text-sm">
                                    <span class="text-secondary text-xs font-weight-bold"><?php echo $hoa['tendanhmuc'] ?></span>
                                 </td>
                                 <td class="align-middle" style="text-align: center;">
                                    <button class="sua" data-id="product<?php echo $hoa['id'] ?>" style="background-color: #EC407A; border: none;color:white; width:60px;text-align: center;">
                                       sửa
                                    </button>
                                    <a href="?admin=product&act=xoasp&id=<?php echo $hoa['id'] ?>&anhhoa=<?php echo $hoa['anhhoa'] ?>">
                                       <button style="background-color: #EC407A; border: none;color:white; width:60px;text-align: center;">
                                          Xóa
                                       </button>
                                    </a>
                                 </td>
                              </tr>
                              <!--  tr hidden ở đây ------------------------------------------->
                              <form action="?admin=product&act=suasp" method="post" enctype="multipart/form-data">
                                 <tr class="hidden" id="edit-product<?php echo $hoa['id'] ?>">
                                    <th class="align-middle text-center text-sm" style="width: 100px;">
                                       <label for="hoa-add-<?php echo $hoa['id'] ?>">
                                          <img src="../wp-content/uploads/2021/05/<?php echo $hoa['anhhoa'] ?>" alt="Image" id="add-myid-<?php echo $hoa['id'] ?>" style="width: 100px;
          height: 100px;
          border-radius: 40px;" />
                                       </label>
                                       <input id="hoa-add-<?php echo $hoa['id'] ?>" type="file" style="display: none" class="add-myclass" name="images<?php echo $hoa['id'] ?>" multiple style="width: 100px;
          height: 100px;
          margin-top: -100px;
          opacity: 0;" />
                                       <input type="hidden" name="id_hoa" value="<?php echo $hoa['id'] ?>">
                                    </th>
                                    <td>
                                       <div class="d-flex px-2 py-1" style="justify-content: center;">
                                          <div class="d-flex flex-column justify-content-center">
                                             <h6 class="mb-0 text-sm">
                                                <input class='sua-input' type="text" name="tenhoa" value="<?php echo $hoa['tenhoa'] ?>" />
                                             </h6>
                                          </div>
                                       </div>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                       <span class="text-secondary text-xs font-weight-bold"><input class='sua-input' type="text" name="giaban" value="<?php echo $hoa['giaban'] ?>" /></span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                       <span class="text-secondary text-xs font-weight-bold">
                                          <?php if ($hoa['giakm'] > 0) {
                                             echo "<input class='sua-input' type='text' name='giakm' value=" . $hoa['giakm'] . " />";
                                          } else {
                                             echo "<input class='sua-input' type='text' name='giakm' value='0'/>";
                                          }
                                          ?>
                                       </span>
                                    </td>
                                    <td>
                                       <select name="tendanhmuc">
                                          <?php foreach ($show_name_category as $dm) : ?>
                                             <option value="<?php echo $dm['id'] ?>" <?php if ($dm['tendanhmuc'] == $hoa['tendanhmuc']) {
                                                                                          echo "selected";
                                                                                       }
                                                                                       ?>>
                                                <?php echo $dm['tendanhmuc'] ?>
                                             </option>
                                          <?php endforeach; ?>
                                       </select>
                                    </td>
                                    <td class="align-middle" style="text-align: center;">
                                       <input type="submit" name="luusp" value="lưu" style="background-color: #EC407A; border: none;color:white; width:60px;text-align: center;">
                                       <button class="hide-edit-row focus-product" style="background-color: #EC407A; border: none;color:white; width:60px;text-align: center;">X</button>
                                    </td>
                                 </tr>
                              </form>
                              <script>
                                 const inputFile<?php echo $hoa['id'] ?> = document.getElementById(
                                    "hoa-add-<?php echo $hoa['id'] ?>");
                                 const img<?php echo $hoa['id'] ?> = document.getElementById(
                                    "add-myid-<?php echo $hoa['id'] ?>");
                                 const defaultImage<?php echo $hoa['id'] ?> =
                                    "../wp-content/uploads/2021/05/<?php echo $hoa['anhhoa'] ?>";
                                 img<?php echo $hoa['id'] ?>.src = defaultImage<?php echo $hoa['id'] ?>;
                                 inputFile<?php echo $hoa['id'] ?>.addEventListener("change", (event) => {
                                    const file = event.target.files[0];
                                    if (file) {
                                       img<?php echo $hoa['id'] ?>.src = URL.createObjectURL(file);
                                       img<?php echo $hoa['id'] ?>.classList.add("sua-img-them");
                                       inputFile<?php echo $hoa['id'] ?>.classList.add("add-myclass");
                                    } else {
                                       img<?php echo $hoa['id'] ?>.src = defaultImage<?php echo $hoa['id'] ?>;
                                       img<?php echo $hoa['id'] ?>.classList.remove("sua-img-them");
                                       inputFile<?php echo $hoa['id'] ?>.classList.remove("add-myclass");
                                    }
                                 });
                              </script>
                           <?php endforeach; ?>
                        </tbody>
                     </table>
                  <?php elseif ($lochoa == "10hoa") : ?>
                     <!-- 10 hoa ở đây-->
                     <table class="table align-items-center mb-0">
                        <thead>
                           <tr>
                              <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                 hình Ảnh
                              </th>
                              <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                 Tên
                              </th>
                              <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                 Giá
                              </th>
                              <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                 Giá Khuyến mãi</th>
                              <th class="text-center text-uppercase  text-secondary text-xxs font-weight-bolder opacity-7">
                                 Danh
                                 mục</th>
                              <th class="text-secondary text-xxs font-weight-bolder opacity-7" style="text-align: center;">
                                 tool
                              </th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php foreach ($show_hoa_moi10 as $hoa10) : ?>
                              <tr id="product<?php echo $hoa10['id'] ?>">
                                 <th class="align-middle text-center text-sm" style="width: 100px;">
                                    <img src="../wp-content/uploads/2021/05/<?php echo $hoa10['anhhoa'] ?>" alt="IMG" class="admin-img">
                                 </th>
                                 <td>
                                    <div class="d-flex px-2 py-1" style="justify-content: center;">
                                       <div class="d-flex flex-column justify-content-center">
                                          <h6 class="mb-0 text-sm"><?php echo $hoa10['tenhoa'] ?></h6>
                                       </div>
                                    </div>
                                 </td>
                                 <td class="align-middle text-center text-sm">
                                    <span class="text-secondary text-xs font-weight-bold"><?php echo $hoa10['giaban'] ?>.000
                                       VND</span>
                                 </td>
                                 <td class="align-middle text-center text-sm">
                                    <span class="text-secondary text-xs font-weight-bold">
                                       <?php if ($hoa10['giakm'] > 0) {
                                          echo $hoa10['giakm'] . ".000 VND";
                                       } else {
                                          echo "0";
                                       }
                                       ?>
                                    </span>
                                 </td>
                                 <td class="align-middle text-center text-sm">
                                    <span class="text-secondary text-xs font-weight-bold"><?php echo $hoa10['tendanhmuc'] ?></span>
                                 </td>
                                 <td class="align-middle" style="text-align: center;">
                                    <button class="sua" data-id="product<?php echo $hoa10['id'] ?>" style="background-color: #EC407A; border: none;color:white; width:60px;text-align: center;">
                                       sửa
                                    </button>
                                    <a href="?admin=product&act=xoasp&id=<?php echo $hoa10['id'] ?>&anhhoa=<?php echo $hoa10['anhhoa'] ?>">
                                       <button style="background-color: #EC407A; border: none;color:white; width:60px;text-align: center;">
                                          Xóa
                                       </button>
                                    </a>
                                 </td>
                              </tr>
                              <!--  tr hidden ở đây ------------------------------------------->
                              <form action="?admin=product&act=suasp" method="post" enctype="multipart/form-data">
                                 <tr class="hidden" id="edit-product<?php echo $hoa10['id'] ?>">
                                    <th class="align-middle text-center text-sm" style="width: 100px;">
                                       <label for="hoa-add-<?php echo $hoa10['id'] ?>">
                                          <img src="../wp-content/uploads/2021/05/<?php echo $hoa10['anhhoa'] ?>" alt="Image" id="add-myid-<?php echo $hoa10['id'] ?>" style="width: 100px;
          height: 100px;
          border-radius: 40px;" />
                                       </label>
                                       <input id="hoa-add-<?php echo $hoa10['id'] ?>" type="file" style="display: none" class="add-myclass" name="images<?php echo $hoa10['id'] ?>" multiple style="width: 100px;
          height: 100px;
          margin-top: -100px;
          opacity: 0;" />
                                       <input type="hidden" name="id_hoa" value="<?php echo $hoa10['id'] ?>">
                                    </th>
                                    <td>
                                       <div class="d-flex px-2 py-1" style="justify-content: center;">
                                          <div class="d-flex flex-column justify-content-center">
                                             <h6 class="mb-0 text-sm">
                                                <input class='sua-input' type="text" name="tenhoa" value="<?php echo $hoa10['tenhoa'] ?>" />
                                             </h6>
                                          </div>
                                       </div>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                       <span class="text-secondary text-xs font-weight-bold"><input class='sua-input' type="text" name="giaban" value="<?php echo $hoa10['giaban'] ?>" /></span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                       <span class="text-secondary text-xs font-weight-bold">
                                          <?php if ($hoa10['giakm'] > 0) {
                                             echo "<input class='sua-input' type='text' name='giakm' value=" . $hoa10['giakm'] . " />";
                                          } else {
                                             echo "<input class='sua-input' type='text' name='giakm' value='0'/>";
                                          }
                                          ?>
                                       </span>
                                    </td>
                                    <td>
                                       <select name="tendanhmuc">
                                          <?php foreach ($show_name_category as $dm10) : ?>
                                             <option value="<?php echo $dm['id'] ?>" <?php if ($dm10['tendanhmuc'] == $hoa10['tendanhmuc']) {
                                                                                          echo "selected";
                                                                                       }
                                                                                       ?>>
                                                <?php echo $dm10['tendanhmuc'] ?>
                                             </option>
                                          <?php endforeach; ?>
                                       </select>
                                    </td>
                                    <td class="align-middle" style="text-align: center;">
                                       <input type="submit" name="luusp" value="lưu" style="background-color: #EC407A; border: none;color:white; width:60px;text-align: center;">
                                       <button class="hide-edit-row focus-product" style="background-color: #EC407A; border: none;color:white; width:60px;text-align: center;">X</button>
                                    </td>
                                 </tr>
                              </form>
                              <script>
                                 const inputFile<?php echo $hoa10['id'] ?> = document.getElementById(
                                    "hoa-add-<?php echo $hoa10['id'] ?>");
                                 const img<?php echo $hoa10['id'] ?> = document.getElementById(
                                    "add-myid-<?php echo $hoa10['id'] ?>");
                                 const defaultImage<?php echo $hoa10['id'] ?> =
                                    "../wp-content/uploads/2021/05/<?php echo $hoa10['anhhoa'] ?>";
                                 img<?php echo $hoa10['id'] ?>.src = defaultImage<?php echo $hoa10['id'] ?>;
                                 inputFile<?php echo $hoa10['id'] ?>.addEventListener("change", (event) => {
                                    const file = event.target.files[0];
                                    if (file) {
                                       img<?php echo $hoa10['id'] ?>.src = URL.createObjectURL(file);
                                       img<?php echo $hoa10['id'] ?>.classList.add("sua-img-them");
                                       inputFile<?php echo $hoa10['id'] ?>.classList.add("add-myclass");
                                    } else {
                                       img<?php echo $hoa10['id'] ?>.src = defaultImage<?php echo $hoa10['id'] ?>;
                                       img<?php echo $hoa10['id'] ?>.classList.remove("sua-img-them");
                                       inputFile<?php echo $hoa10['id'] ?>.classList.remove("add-myclass");
                                    }
                                 });
                              </script>
                           <?php endforeach; ?>
                        </tbody>
                     </table>
                  <?php elseif ($lochoa == "giacaodenthap") : ?>
                     <!-- Giá Bán cao đến thấp -->
                     <table class="table align-items-center mb-0">
                        <thead>
                           <tr>
                              <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                 hình Ảnh
                              </th>
                              <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                 Tên
                              </th>
                              <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                 Giá
                              </th>
                              <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                 Giá Khuyến mãi</th>
                              <th class="text-center text-uppercase  text-secondary text-xxs font-weight-bolder opacity-7">
                                 Danh
                                 mục</th>
                              <th class="text-secondary text-xxs font-weight-bolder opacity-7" style="text-align: center;">
                                 tool
                              </th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php foreach ($caodenthap as $hoacaodenthap) : ?>
                              <tr id="product<?php echo $hoacaodenthap['id'] ?>">
                                 <th class="align-middle text-center text-sm" style="width: 100px;">
                                    <img src="../wp-content/uploads/2021/05/<?php echo $hoacaodenthap['anhhoa'] ?>" alt="IMG" class="admin-img">
                                 </th>
                                 <td>
                                    <div class="d-flex px-2 py-1" style="justify-content: center;">
                                       <div class="d-flex flex-column justify-content-center">
                                          <h6 class="mb-0 text-sm"><?php echo $hoacaodenthap['tenhoa'] ?></h6>
                                       </div>
                                    </div>
                                 </td>
                                 <td class="align-middle text-center text-sm">
                                    <span class="text-secondary text-xs font-weight-bold"><?php echo $hoacaodenthap['giaban'] ?>.000
                                       VND</span>
                                 </td>
                                 <td class="align-middle text-center text-sm">
                                    <span class="text-secondary text-xs font-weight-bold">
                                       <?php if ($hoacaodenthap['giakm'] > 0) {
                                          echo $hoacaodenthap['giakm'] . ".000 VND";
                                       } else {
                                          echo "0";
                                       }
                                       ?>
                                    </span>
                                 </td>
                                 <td class="align-middle text-center text-sm">
                                    <span class="text-secondary text-xs font-weight-bold"><?php echo $hoacaodenthap['tendanhmuc'] ?></span>
                                 </td>
                                 <td class="align-middle" style="text-align: center;">
                                    <button class="sua" data-id="product<?php echo $hoacaodenthap['id'] ?>" style="background-color: #EC407A; border: none;color:white; width:60px;text-align: center;">
                                       sửa
                                    </button>
                                    <a href="?admin=product&act=xoasp&id=<?php echo $hoacaodenthap['id'] ?>&anhhoa=<?php echo $hoacaodenthap['anhhoa'] ?>">
                                       <button style="background-color: #EC407A; border: none;color:white; width:60px;text-align: center;">
                                          Xóa
                                       </button>
                                    </a>
                                 </td>
                              </tr>
                              <!--  tr hidden ở đây ------------------------------------------->
                              <form action="?admin=product&act=suasp" method="post" enctype="multipart/form-data">
                                 <tr class="hidden" id="edit-product<?php echo $hoacaodenthap['id'] ?>">
                                    <th class="align-middle text-center text-sm" style="width: 100px;">
                                       <label for="hoa-add-<?php echo $hoacaodenthap['id'] ?>">
                                          <img src="../wp-content/uploads/2021/05/<?php echo $hoacaodenthap['anhhoa'] ?>" alt="Image" id="add-myid-<?php echo $hoacaodenthap['id'] ?>" style="width: 100px;
          height: 100px;
          border-radius: 40px;" />
                                       </label>
                                       <input id="hoa-add-<?php echo $hoacaodenthap['id'] ?>" type="file" style="display: none" class="add-myclass" name="images<?php echo $hoacaodenthap['id'] ?>" multiple style="width: 100px;
          height: 100px;
          margin-top: -100px;
          opacity: 0;" />
                                       <input type="hidden" name="id_hoa" value="<?php echo $hoacaodenthap['id'] ?>">
                                    </th>
                                    <td>
                                       <div class="d-flex px-2 py-1" style="justify-content: center;">
                                          <div class="d-flex flex-column justify-content-center">
                                             <h6 class="mb-0 text-sm">
                                                <input class='sua-input' type="text" name="tenhoa" value="<?php echo $hoacaodenthap['tenhoa'] ?>" />
                                             </h6>
                                          </div>
                                       </div>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                       <span class="text-secondary text-xs font-weight-bold"><input class='sua-input' type="text" name="giaban" value="<?php echo $hoacaodenthap['giaban'] ?>" /></span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                       <span class="text-secondary text-xs font-weight-bold">
                                          <?php if ($hoacaodenthap['giakm'] > 0) {
                                             echo "<input class='sua-input' type='text' name='giakm' value=" . $hoacaodenthap['giakm'] . " />";
                                          } else {
                                             echo "<input class='sua-input' type='text' name='giakm' value='0'/>";
                                          }
                                          ?>
                                       </span>
                                    </td>
                                    <td>
                                       <select name="tendanhmuc">
                                          <?php foreach ($show_name_category as $dmcaodenthap) : ?>
                                             <option value="<?php echo $dmcaodenthap['id'] ?>" <?php if ($dmcaodenthap['tendanhmuc'] == $hoacaodenthap['tendanhmuc']) {
                                                                                                   echo "selected";
                                                                                                }
                                                                                                ?>>
                                                <?php echo $dmcaodenthap['tendanhmuc'] ?>
                                             </option>
                                          <?php endforeach; ?>
                                       </select>
                                    </td>
                                    <td class="align-middle" style="text-align: center;">
                                       <input type="submit" name="luusp" value="lưu" style="background-color: #EC407A; border: none;color:white; width:60px;text-align: center;">
                                       <button class="hide-edit-row focus-product" style="background-color: #EC407A; border: none;color:white; width:60px;text-align: center;">X</button>
                                    </td>
                                 </tr>
                              </form>
                              <script>
                                 const inputFile<?php echo $hoacaodenthap['id'] ?> = document.getElementById(
                                    "hoa-add-<?php echo $hoacaodenthap['id'] ?>");
                                 const img<?php echo $hoacaodenthap['id'] ?> = document.getElementById(
                                    "add-myid-<?php echo $hoa['id'] ?>");
                                 const defaultImage<?php echo $hoacaodenthap['id'] ?> =
                                    "../wp-content/uploads/2021/05/<?php echo $hoacaodenthap['anhhoa'] ?>";
                                 img<?php echo $hoacaodenthap['id'] ?>.src = defaultImage<?php echo $hoacaodenthap['id'] ?>;
                                 inputFile<?php echo $hoacaodenthap['id'] ?>.addEventListener("change", (event) => {
                                    const file = event.target.files[0];
                                    if (file) {
                                       img<?php echo $hoacaodenthap['id'] ?>.src = URL.createObjectURL(file);
                                       img<?php echo $hoacaodenthap['id'] ?>.classList.add("sua-img-them");
                                       inputFile<?php echo $hoacaodenthap['id'] ?>.classList.add("add-myclass");
                                    } else {
                                       img<?php echo $hoacaodenthap['id'] ?>.src =
                                          defaultImage<?php echo $hoacaodenthap['id'] ?>;
                                       img<?php echo $hoacaodenthap['id'] ?>.classList.remove("sua-img-them");
                                       inputFile<?php echo $hoacaodenthap['id'] ?>.classList.remove("add-myclass");
                                    }
                                 });
                              </script>
                           <?php endforeach; ?>
                        </tbody>
                     </table>
                  <?php elseif ($lochoa == "giathapdencao") : ?>
                     <!-- -thap đến cao -->
                     <table class="table align-items-center mb-0">
                        <thead>
                           <tr>
                              <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                 hình Ảnh
                              </th>
                              <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                 Tên
                              </th>
                              <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                 Giá
                              </th>
                              <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                 Giá Khuyến mãi</th>
                              <th class="text-center text-uppercase  text-secondary text-xxs font-weight-bolder opacity-7">
                                 Danh
                                 mục</th>
                              <th class="text-secondary text-xxs font-weight-bolder opacity-7" style="text-align: center;">
                                 tool
                              </th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php foreach ($thapdencao as $hoathapdencao) : ?>
                              <tr id="product<?php echo $hoathapdencao['id'] ?>">
                                 <th class="align-middle text-center text-sm" style="width: 100px;">
                                    <img src="../wp-content/uploads/2021/05/<?php echo $hoathapdencao['anhhoa'] ?>" alt="IMG" class="admin-img">
                                 </th>
                                 <td>
                                    <div class="d-flex px-2 py-1" style="justify-content: center;">
                                       <div class="d-flex flex-column justify-content-center">
                                          <h6 class="mb-0 text-sm"><?php echo $hoathapdencao['tenhoa'] ?></h6>
                                       </div>
                                    </div>
                                 </td>
                                 <td class="align-middle text-center text-sm">
                                    <span class="text-secondary text-xs font-weight-bold"><?php echo $hoathapdencao['giaban'] ?>.000
                                       VND</span>
                                 </td>
                                 <td class="align-middle text-center text-sm">
                                    <span class="text-secondary text-xs font-weight-bold">
                                       <?php if ($hoathapdencao['giakm'] > 0) {
                                          echo $hoathapdencao['giakm'] . ".000 VND";
                                       } else {
                                          echo "0";
                                       }
                                       ?>
                                    </span>
                                 </td>
                                 <td class="align-middle text-center text-sm">
                                    <span class="text-secondary text-xs font-weight-bold"><?php echo $hoathapdencao['tendanhmuc'] ?></span>
                                 </td>
                                 <td class="align-middle" style="text-align: center;">
                                    <button class="sua" data-id="product<?php echo $hoathapdencao['id'] ?>" style="background-color: #EC407A; border: none;color:white; width:60px;text-align: center;">
                                       sửa
                                    </button>
                                    <a href="?admin=product&act=xoasp&id=<?php echo $hoathapdencao['id'] ?>&anhhoa=<?php echo $hoathapdencao['anhhoa'] ?>">
                                       <button style="background-color: #EC407A; border: none;color:white; width:60px;text-align: center;">
                                          Xóa
                                       </button>
                                    </a>
                                 </td>
                              </tr>
                              <!--  tr hidden ở đây ------------------------------------------->
                              <form action="?admin=product&act=suasp" method="post" enctype="multipart/form-data">
                                 <tr class="hidden" id="edit-product<?php echo $hoathapdencao['id'] ?>">
                                    <th class="align-middle text-center text-sm" style="width: 100px;">
                                       <label for="hoa-add-<?php echo $hoathapdencao['id'] ?>">
                                          <img src="../wp-content/uploads/2021/05/<?php echo $hoathapdencao['anhhoa'] ?>" alt="Image" id="add-myid-<?php echo $hoathapdencao['id'] ?>" style="width: 100px;
          height: 100px;
          border-radius: 40px;" />
                                       </label>
                                       <input id="hoa-add-<?php echo $hoathapdencao['id'] ?>" type="file" style="display: none" class="add-myclass" name="images<?php echo $hoathapdencao['id'] ?>" multiple style="width: 100px;
          height: 100px;
          margin-top: -100px;
          opacity: 0;" />
                                       <input type="hidden" name="id_hoa" value="<?php echo $hoathapdencao['id'] ?>">
                                    </th>
                                    <td>
                                       <div class="d-flex px-2 py-1" style="justify-content: center;">
                                          <div class="d-flex flex-column justify-content-center">
                                             <h6 class="mb-0 text-sm">
                                                <input class='sua-input' type="text" name="tenhoa" value="<?php echo $hoathapdencao['tenhoa'] ?>" />
                                             </h6>
                                          </div>
                                       </div>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                       <span class="text-secondary text-xs font-weight-bold"><input class='sua-input' type="text" name="giaban" value="<?php echo $hoathapdencao['giaban'] ?>" /></span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                       <span class="text-secondary text-xs font-weight-bold">
                                          <?php if ($hoathapdencao['giakm'] > 0) {
                                             echo "<input class='sua-input' type='text' name='giakm' value=" . $hoathapdencao['giakm'] . " />";
                                          } else {
                                             echo "<input class='sua-input' type='text' name='giakm' value='0'/>";
                                          }
                                          ?>
                                       </span>
                                    </td>
                                    <td>
                                       <select name="tendanhmuc">
                                          <?php foreach ($show_name_category as $dmthapdencao) : ?>
                                             <option value="<?php echo $dmthapdencao['id'] ?>" <?php if ($dmthapdencao['tendanhmuc'] == $hoathapdencao['tendanhmuc']) {
                                                                                                   echo "selected";
                                                                                                }
                                                                                                ?>>
                                                <?php echo $dmthapdencao['tendanhmuc'] ?>
                                             </option>
                                          <?php endforeach; ?>
                                       </select>
                                    </td>
                                    <td class="align-middle" style="text-align: center;">
                                       <input type="submit" name="luusp" value="lưu" style="background-color: #EC407A; border: none;color:white; width:60px;text-align: center;">
                                       <button class="hide-edit-row focus-product" style="background-color: #EC407A; border: none;color:white; width:60px;text-align: center;">X</button>
                                    </td>
                                 </tr>
                              </form>
                              <script>
                                 const inputFile<?php echo $hoathapdencao['id'] ?> = document.getElementById(
                                    "hoa-add-<?php echo $hoathapdencao['id'] ?>");
                                 const img<?php echo $hoathapdencao['id'] ?> = document.getElementById(
                                    "add-myid-<?php echo $hoathapdencao['id'] ?>");
                                 const defaultImage<?php echo $hoathapdencao['id'] ?> =
                                    "../wp-content/uploads/2021/05/<?php echo $hoathapdencao['anhhoa'] ?>";
                                 img<?php echo $hoathapdencao['id'] ?>.src = defaultImage<?php echo $hoathapdencao['id'] ?>;
                                 inputFile<?php echo $hoathapdencao['id'] ?>.addEventListener("change", (event) => {
                                    const file = event.target.files[0];
                                    if (file) {
                                       img<?php echo $hoathapdencao['id'] ?>.src = URL.createObjectURL(file);
                                       img<?php echo $hoathapdencao['id'] ?>.classList.add("sua-img-them");
                                       inputFile<?php echo $hoathapdencao['id'] ?>.classList.add("add-myclass");
                                    } else {
                                       img<?php echo $hoathapdencao['id'] ?>.src =
                                          defaultImage<?php echo $hoathapdencao['id'] ?>;
                                       img<?php echo $hoathapdencao['id'] ?>.classList.remove("sua-img-them");
                                       inputFile<?php echo $hoathapdencao['id'] ?>.classList.remove("add-myclass");
                                    }
                                 });
                              </script>
                           <?php endforeach; ?>
                        </tbody>
                     </table>
                  <?php elseif (is_numeric($lochoa)) : ?>
                     <table class="table align-items-center mb-0">
                        <thead>
                           <tr>
                              <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                 hình Ảnh
                              </th>
                              <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                 Tên
                              </th>
                              <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                 Giá
                              </th>
                              <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                 Giá Khuyến mãi</th>
                              <th class="text-center text-uppercase  text-secondary text-xxs font-weight-bolder opacity-7">
                                 Danh
                                 mục</th>
                              <th class="text-secondary text-xxs font-weight-bolder opacity-7" style="text-align: center;">
                                 tool
                              </th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php foreach ($sanphamtheodanhmuc as $sptheodanhmuc) : ?>
                              <tr id="product<?php echo $sptheodanhmuc['id'] ?>">
                                 <th class="align-middle text-center text-sm" style="width: 100px;">
                                    <img src="../wp-content/uploads/2021/05/<?php echo $sptheodanhmuc['anhhoa'] ?>" alt="IMG" class="admin-img">
                                 </th>
                                 <td>
                                    <div class="d-flex px-2 py-1" style="justify-content: center;">
                                       <div class="d-flex flex-column justify-content-center">
                                          <h6 class="mb-0 text-sm"><?php echo $sptheodanhmuc['tenhoa'] ?></h6>
                                       </div>
                                    </div>
                                 </td>
                                 <td class="align-middle text-center text-sm">
                                    <span class="text-secondary text-xs font-weight-bold"><?php echo $sptheodanhmuc['giaban'] ?>.000
                                       VND</span>
                                 </td>
                                 <td class="align-middle text-center text-sm">
                                    <span class="text-secondary text-xs font-weight-bold">
                                       <?php if ($sptheodanhmuc['giakm'] > 0) {
                                          echo $sptheodanhmuc['giakm'] . ".000 VND";
                                       } else {
                                          echo "0";
                                       }
                                       ?>
                                    </span>
                                 </td>
                                 <td class="align-middle text-center text-sm">
                                    <span class="text-secondary text-xs font-weight-bold"><?php echo $sptheodanhmuc['tendanhmuc'] ?></span>
                                 </td>
                                 <td class="align-middle" style="text-align: center;">
                                    <button class="sua" data-id="product<?php echo $sptheodanhmuc['id'] ?>" style="background-color: #EC407A; border: none;color:white; width:60px;text-align: center;">
                                       sửa
                                    </button>
                                    <a href="?admin=product&act=xoasp&id=<?php echo $sptheodanhmuc['id'] ?>&anhhoa=<?php echo $sptheodanhmuc['anhhoa'] ?>">
                                       <button style="background-color: #EC407A; border: none;color:white; width:60px;text-align: center;">
                                          Xóa
                                       </button>
                                    </a>
                                 </td>
                              </tr>
                              <!--  tr hidden ở đây ------------------------------------------->
                              <form action="?admin=product&act=suasp" method="post" enctype="multipart/form-data">
                                 <tr class="hidden" id="edit-product<?php echo $sptheodanhmuc['id'] ?>">
                                    <th class="align-middle text-center text-sm" style="width: 100px;">
                                       <label for="hoa-add-<?php echo $sptheodanhmuc['id'] ?>">
                                          <img src="../wp-content/uploads/2021/05/<?php echo $sptheodanhmuc['anhhoa'] ?>" alt="Image" id="add-myid-<?php echo $sptheodanhmuc['id'] ?>" style="width: 100px;
          height: 100px;
          border-radius: 40px;" />
                                       </label>
                                       <input id="hoa-add-<?php echo $sptheodanhmuc['id'] ?>" type="file" style="display: none" class="add-myclass" name="images<?php echo $sptheodanhmuc['id'] ?>" multiple style="width: 100px;
          height: 100px;
          margin-top: -100px;
          opacity: 0;" />
                                       <input type="hidden" name="id_hoa" value="<?php echo $sptheodanhmuc['id'] ?>">
                                    </th>
                                    <td>
                                       <div class="d-flex px-2 py-1" style="justify-content: center;">
                                          <div class="d-flex flex-column justify-content-center">
                                             <h6 class="mb-0 text-sm">
                                                <input class='sua-input' type="text" name="tenhoa" value="<?php echo $sptheodanhmuc['tenhoa'] ?>" />
                                             </h6>
                                          </div>
                                       </div>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                       <span class="text-secondary text-xs font-weight-bold"><input class='sua-input' type="text" name="giaban" value="<?php echo $sptheodanhmuc['giaban'] ?>" /></span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                       <span class="text-secondary text-xs font-weight-bold">
                                          <?php if ($sptheodanhmuc['giakm'] > 0) {
                                             echo "<input class='sua-input' type='text' name='giakm' value=" . $sptheodanhmuc['giakm'] . " />";
                                          } else {
                                             echo "<input class='sua-input' type='text' name='giakm' value='0'/>";
                                          }
                                          ?>
                                       </span>
                                    </td>
                                    <td>
                                       <select name="tendanhmuc">
                                          <?php foreach ($show_name_category as $dmloctheodanhmuc) : ?>
                                             <option value="<?php echo $dmloctheodanhmuc['id'] ?>" <?php if ($dmloctheodanhmuc['tendanhmuc'] == $sptheodanhmuc['tendanhmuc']) {
                                                                                                      echo "selected";
                                                                                                   }
                                                                                                   ?>>
                                                <?php echo $dmloctheodanhmuc['tendanhmuc'] ?>
                                             </option>
                                          <?php endforeach; ?>
                                       </select>
                                    </td>
                                    <td class="align-middle" style="text-align: center;">
                                       <input type="submit" name="luusp" value="lưu" style="background-color: #EC407A; border: none;color:white; width:60px;text-align: center;">
                                       <button class="hide-edit-row focus-product" style="background-color: #EC407A; border: none;color:white; width:60px;text-align: center;">X</button>
                                    </td>
                                 </tr>
                              </form>
                              <script>
                                 const inputFile<?php echo $sptheodanhmuc['id'] ?> = document.getElementById(
                                    "hoa-add-<?php echo $sptheodanhmuc['id'] ?>");
                                 const img<?php echo $sptheodanhmuc['id'] ?> = document.getElementById(
                                    "add-myid-<?php echo $sptheodanhmuc['id'] ?>");
                                 const defaultImage<?php echo $sptheodanhmuc['id'] ?> =
                                    "../wp-content/uploads/2021/05/<?php echo $sptheodanhmuc['anhhoa'] ?>";
                                 img<?php echo $sptheodanhmuc['id'] ?>.src = defaultImage<?php echo $sptheodanhmuc['id'] ?>;
                                 inputFile<?php echo $sptheodanhmuc['id'] ?>.addEventListener("change", (event) => {
                                    const file = event.target.files[0];
                                    if (file) {
                                       img<?php echo $sptheodanhmuc['id'] ?>.src = URL.createObjectURL(file);
                                       img<?php echo $sptheodanhmuc['id'] ?>.classList.add("sua-img-them");
                                       inputFile<?php echo $sptheodanhmuc['id'] ?>.classList.add("add-myclass");
                                    } else {
                                       img<?php echo $sptheodanhmuc['id'] ?>.src =
                                          defaultImage<?php echo $sptheodanhmuc['id'] ?>;
                                       img<?php echo $sptheodanhmuc['id'] ?>.classList.remove("sua-img-them");
                                       inputFile<?php echo $sptheodanhmuc['id'] ?>.classList.remove("add-myclass");
                                    }
                                 });
                              </script>
                           <?php endforeach; ?>
                        </tbody>
                     <?php endif ?>
               </div>
            </div>
         </div>
      </div>

      <footer class="footer py-4  ">
         <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
            </div>
         </div>
      </footer>
   </div>
</main>