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
                      <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Hình
                      </th>
                      <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Tên
                      </th>
                      <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Giá
                      </th>
                      <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Giá Khuyến mãi</th>
                      <th class="text-center text-uppercase  text-secondary text-xxs font-weight-bolder opacity-7">Danh
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
                          <label class="" for="fileInput">Chọn ảnh:</label><br>
                          <input type="file" id="fileInput" name="anh">
                        </div>
                      </td>
                      <td style="text-align: center;">
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><span class="text-secondary text-xs font-weight-bold">
                                <input type="text" placeholder="Tên Hoa... " name="tenhoa"></span></h6>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm" style="text-align: center;">
                        <span class="text-secondary text-xs font-weight-bold"><span class="text-secondary text-xs font-weight-bold">
                          <input type="text" placeholder="Nhập giá..." name="giaban"></span></span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-secondary text-xs font-weight-bold"><span class="text-secondary text-xs font-weight-bold">
                          <input type="text" placeholder="Giá Khuyến mãi..."name="giakm"></span></span>
                      </td style="text-align: center;">
                      <td class="align-middle text-center text-sm">
                        <span class="text-secondary text-xs font-weight-bold">
                          <select name="danhmuc">
                            <?php foreach($show_name_category as $sp_danhmuc):?>
                            <option value="<?php echo$sp_danhmuc['id']?>"><?php echo $sp_danhmuc['tendanhmuc']?></option>
                            <?php endforeach;?>
                          </select>
                        </span>
                      </td>
                      <td class="align-middle" style="text-align: center;">
                        <button style="background-color: #EC407A; border: none;color:white; width:60px;text-align: center;" name="themsp">Thêm</button>
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
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Chỉnh sửa sản phẩm</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Hình
                    </th>
                    <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Tên
                    </th>
                    <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Giá
                    </th>
                    <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Số
                      lượng</th>
                    <th class="text-center text-uppercase  text-secondary text-xxs font-weight-bolder opacity-7">Danh
                      mục</th>
                    <th class="text-secondary text-xxs font-weight-bolder opacity-7" style="text-align: center;">tool
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <!-- danh mục ở đây -->
                  <tr>
                    <td class="align-middle" style="text-align: center;">
                      <div class="text-secondary font-weight-bold text-xs">
                        <label class="" for="fileInput">Chọn ảnh:</label><br>
                        <input type="file" id="fileInput" name="fileInput">
                      </div>
                    </td>
                    <td style="text-align: center;">
                      <div class="d-flex px-2 py-1" style="justify-content: center;">
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm"><span class="text-secondary text-xs font-weight-bold"><input type="text" placeholder="Nhập tên"></span></h6>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center text-sm" style="text-align: center;">
                      <span class="text-secondary text-xs font-weight-bold"><span class="text-secondary text-xs font-weight-bold"><input type="text" placeholder="Nhập giá"></span></span>
                    </td>
                    <td class="align-middle text-center text-sm" style="text-align: center;">
                      <span class="text-secondary text-xs font-weight-bold"><span class="text-secondary text-xs font-weight-bold"><input type="text" placeholder="Nhập số lượng"></span></span>
                    </td>
                    <td class="align-middle text-center text-sm" style="text-align: center;">
                      <span class="text-secondary text-xs font-weight-bold">
                        <select>
                          <option value="Danh mục1">--Danh mục--</option>
                          <option value="Danh mục1">Danh mục 1</option>
                          <option value="Danh mục2">Danh mục 2</option>
                          <option value="Danh mục3">Danh mục 3</option>
                          <!-- Thêm tùy chọn cho các danh mục khác nếu cần -->
                        </select>
                      </span>
                    </td>
                    <td class="align-middle" style="text-align: center;">
                      <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                        Lưu
                      </a>
                    </td>
                  </tr>
                  <!-- end danh mục -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
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
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="align-middle text-center text-sm" style="width: 100px;">
                    <p class="text-xs text-secondary mb-0">STT</p>
                  </th>
                  <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Tên
                  </th>
                  <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Giá
                  </th>
                  <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Giá Khuyến mãi</th>
                  <th class="text-center text-uppercase  text-secondary text-xxs font-weight-bolder opacity-7">Danh
                    mục</th>
                  <th class="text-secondary text-xxs font-weight-bolder opacity-7" style="text-align: center;">tool
                  </th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($show_product as $hoa) : ?>
                  <tr>
                    <th class="align-middle text-center text-sm" style="width: 100px;"><?php echo $stt; ?></th>
                    <td>
                      <div class="d-flex px-2 py-1" style="justify-content: center;">
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm"><?php echo $hoa['tenhoa'] ?></h6>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="text-secondary text-xs font-weight-bold"><?php echo $hoa['giaban'] ?>.000 VND</span>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="text-secondary text-xs font-weight-bold"><?php
                                                                            if ($hoa['giakm'] > 0) {
                                                                              echo $hoa['giakm'] . ".000 VND";
                                                                            } else {
                                                                              echo "0";
                                                                            }
                                                                            ?></span>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="text-secondary text-xs font-weight-bold"><?php echo $hoa['tendanhmuc'] ?></span>
                    </td>
                    <td class="align-middle" style="text-align: center;">
                      <a href="?admin=product&act=xoasp&id=<?php echo $hoa['id']?>&anhhoa=<?php echo$hoa['anhhoa']?>">
                        <button style="background-color: #EC407A; border: none;color:white; width:60px;text-align: center;"> Xóa</button>
                      </a>
                    </td>
                  </tr>
                <?php $stt++;
                endforeach; ?>
              </tbody>
            </table>
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