<main id="main" class="">
   <div class="my-account-header page-title normal-title
		">
      <div class="page-title-inner flex-row container
	 text-left">
         <div class="flex-col flex-grow medium-text-center">
            <h1 class="uppercase mb-0">Tài khoản</h1>
            <small class="uppercase">Đơn hàng</small>
         </div>
      </div>
   </div>
   <div class="page-wrapper my-account mb">
      <div class="container" role="main">
         <div class="row vertical-tabs">
            <div class="large-3 col col-border">
               <div class="account-user circle">
                  <span class="image mr-half inline-block">
                  </span>
                  <span class="user-name inline-block">
                     <?php echo $_SESSION['tenkhachhang'] ?> <em class="user-id op-5">#5</em>
                  </span>
               </div>
               <ul id="my-account-nav" class="account-nav nav nav-line nav-uppercase nav-vertical mt-half">
                  <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--dashboard is-active active">
                     <a href="?mod=user&act=profile">Trang tài khoản</a>
                     <!-- empty -->
                  </li>
                  <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--orders">
                     <a href="?mod=cart&act=cart_show">Đơn hàng</a>
                  </li>
                  <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--downloads">
                     <a href="?mod=cart&act=cart-details">Giỏ hàng</a>
                  </li>
                  <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-address">
                     <a href="">Địa chỉ</a>
                  </li>
                  <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-account">
                     <a href="?mod=user&act=account">Tài khoản</a>
                  </li>
                  <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--customer-logout">
                     <a href="?mod=page&act=home">Thoát</a>
                  </li>
               </ul>
            </div>
            <div class="large-9 col">
               <div class="woocommerce">
                  <div class="woocommerce-MyAccount-content">
                     <div class="woocommerce-notices-wrapper"></div>
                     <div class="touch-scroll-table">
                        <?php if (isset($_GET['chitiet'])) : ?>
                           <div class="large-9 col">
                              <div class="woocommerce">
                                 <div class="woocommerce-MyAccount-content">
                                    <div class="woocommerce-notices-wrapper"></div>
                                    <p>
                                       Đơn hàng <mark class="order-number">640</mark> đã được đặt lúc <mark class="order-date">ngày đặt hàng</mark> và hiện tại là <mark class="order-status">Đang sử ly </mark>.</p>
                                    <section class="woocommerce-order-details">
                                       <h2 class="woocommerce-order-details__title">Chi tiết đơn hàng</h2>
                                       <table class="woocommerce-table woocommerce-table--order-details shop_table order_details">
                                          <thead>
                                             <tr>
                                                <th class="woocommerce-table__product-name product-name">Sản phẩm</th>
                                                <th class="woocommerce-table__product-table product-total">Tổng</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <?php foreach ($thanhtoan as $hienthidon) : ?>
                                                <?php
                                                $giasp = $hienthidon['giaban'] * $hienthidon['soluong'];
                                                $giatien += $giasp;
                                                ?>
                                                <tr class="woocommerce-table__line-item order_item">
                                                   <td class="woocommerce-table__product-name product-name">
                                                      <a href="https://shophoa5.muathemewp.com/san-pham/je-taime/"><?php echo $hienthidon['tenhoa'] ?></a>
                                                      <strong class="product-quantity">×&nbsp;<?php echo $hienthidon['soluong'] ?></strong>
                                                   </td>

                                                   <td class="woocommerce-table__product-total product-total">
                                                      <span class="woocommerce-Price-amount amount"><bdi><?php echo $giasp ?>.000&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span>
                                                   </td>
                                                </tr>
                                             <?php endforeach; ?>
                                          </tbody>
                                          <tfoot>
                                             <tr>
                                                <th scope="row">Phương thức thanh toán:</th>
                                                <td>Trả tiền mặt khi nhận hàng</td>
                                             </tr>
                                             <tr>
                                                <th scope="row">Tổng cộng:</th>
                                                <td><span class="woocommerce-Price-amount amount"><?php echo $giatien ?>.000&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></span></td>
                                             </tr>
                                          </tfoot>
                                       </table>
                                    </section>
                                    <section class="woocommerce-customer-details">
                                       <h2 class="woocommerce-column__title">Địa chỉ thanh toán</h2>
                                       <address>
                                          <?php echo $_SESSION['tenkhachhang'] ?><br>
                                          <?php echo $thanhtoan_one['diachi'] ?>
                                          <p class="woocommerce-customer-details--phone">
                                             <?php echo $thanhtoan_one['sodienthoai'] ?></p>

                                          <p class="woocommerce-customer-details--email">
                                             <?php echo $thanhtoan_one['email'] ?></p>
                                       </address>
                                    </section>
                                 </div>
                              </div>
                           </div>
                        <?php else : ?>
                           <table class="woocommerce-orders-table woocommerce-MyAccount-orders shop_table shop_table_responsive my_account_orders account-orders-table">
                              <thead>
                                 <tr>
                                    <th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-number">
                                       <span class="nobr">Đơn hàng</span>
                                    </th>
                                    <th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-date">
                                       <span class="nobr">Ngày đặt hàng</span>
                                    </th>
                                    <th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-status">
                                       <span class="nobr">Tình trạng</span>
                                    </th>
                                    <th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-status">
                                       <span class="nobr">Tên Khách Hàng</span>
                                    </th>
                                    <th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-actions">
                                       <span class="nobr">Các thao tác</span>
                                    </th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php foreach ($donhang as $donhang) : ?>
                                    <tr class="woocommerce-orders-table__row woocommerce-orders-table__row--status-processing order">
                                       <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-number" data-title="Đơn hàng">
                                          <a href="https://shophoa5.muathemewp.com/tai-khoan/view-order/640/">
                                             #<?php echo $donhang['id_donhang'] ?> </a>
                                       </td>
                                       <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-date" data-title="Ngày">
                                          <time datetime="2023-11-07T14:32:11+00:00"><?php
                                                                                       date_default_timezone_set('Asia/Ho_Chi_Minh');
                                                                                       echo DATE('Y-m-d') ?></time>
                                       </td>
                                       <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-status" data-title="Tình trạng">
                                          <?php echo $donhang['trangthai'] ?>
                                       </td>
                                       <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-date" data-title="Ngày">
                                          <time datetime="2023-11-07T14:32:11+00:00"><?php echo $_SESSION['tenkhachhang'] ?></time>
                                       </td>
                                       <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-actions" data-title="Các thao tác">
                                          <a href="?mod=cart&act=cart_show&id_donhang=<?php echo $donhang['id_donhang'] ?>&chitiet=true" class="woocommerce-button wp-element-button button view">Xem</a>
                                       </td>
                                    </tr>
                                 <?php endforeach; ?>
                              </tbody>
                           </table>
                        <?php endif; ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>