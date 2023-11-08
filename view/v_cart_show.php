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
                     nguyenhung050703 <em class="user-id op-5">#5</em>
                  </span>
               </div>
               <ul id="my-account-nav" class="account-nav nav nav-line nav-uppercase nav-vertical mt-half">
                  <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--dashboard">
                     <a href="https://shophoa5.muathemewp.com/tai-khoan/">Trang tài khoản</a>
                     <!-- empty -->
                  </li>
                  <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--orders is-active active">
                     <a href="https://shophoa5.muathemewp.com/tai-khoan/orders/">Đơn hàng</a>
                  </li>
                  <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--downloads">
                     <a href="https://shophoa5.muathemewp.com/tai-khoan/downloads/">Tải xuống</a>
                  </li>
                  <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-address">
                     <a href="https://shophoa5.muathemewp.com/tai-khoan/edit-address/">Địa chỉ</a>
                  </li>
                  <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-account">
                     <a href="https://shophoa5.muathemewp.com/tai-khoan/edit-account/">Tài khoản</a>
                  </li>
                  <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--customer-logout">
                     <a href="https://shophoa5.muathemewp.com/tai-khoan/customer-logout/">Thoát</a>
                  </li>
               </ul>
            </div>
            <div class="large-9 col">
               <div class="woocommerce">
                  <div class="woocommerce-MyAccount-content">
                     <div class="woocommerce-notices-wrapper"></div>
                     <div class="touch-scroll-table">
                        <?php if(isset($_GET['chitiet'])):?>
                           <div class="large-9 col">
											<div class="woocommerce">
<div class="woocommerce-MyAccount-content">
	<div class="woocommerce-notices-wrapper"></div><p>
Đơn hàng #<mark class="order-number">640</mark> đã được đặt lúc <mark class="order-date">07/11/2023</mark> và hiện tại là <mark class="order-status">Đang xử lý</mark>.</p>


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
			<tr class="woocommerce-table__line-item order_item">

	<td class="woocommerce-table__product-name product-name">
		<a href="https://shophoa5.muathemewp.com/san-pham/je-taime/">Je T'aime</a> <strong class="product-quantity">×&nbsp;1</strong>	</td>

	<td class="woocommerce-table__product-total product-total">
		<span class="woocommerce-Price-amount amount"><bdi>339.000&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span>	</td>

</tr>

<tr class="woocommerce-table__line-item order_item">

	<td class="woocommerce-table__product-name product-name">
		<a href="https://shophoa5.muathemewp.com/san-pham/cupids-kisses/">Cupid's Kisses</a> <strong class="product-quantity">×&nbsp;1</strong>	</td>

	<td class="woocommerce-table__product-total product-total">
		<span class="woocommerce-Price-amount amount"><bdi>599.000&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span>	</td>

</tr>

		</tbody>

		<tfoot>
								<tr>
						<th scope="row">Tổng số phụ:</th>
						<td><span class="woocommerce-Price-amount amount">938.000&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></span></td>
					</tr>
										<tr>
						<th scope="row">Phương thức thanh toán:</th>
						<td>Trả tiền mặt khi nhận hàng</td>
					</tr>
										<tr>
						<th scope="row">Tổng cộng:</th>
						<td><span class="woocommerce-Price-amount amount">938.000&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></span></td>
					</tr>
										</tfoot>
	</table>

	</section>

<section class="woocommerce-customer-details">

	
	<h2 class="woocommerce-column__title">Địa chỉ thanh toán</h2>

	<address>
		Nguyễn Hùng<br>TP.HCM
					<p class="woocommerce-customer-details--phone">0385323196</p>
		
					<p class="woocommerce-customer-details--email">nguyenhung050703@gmail.com</p>
			</address>

	
	
</section>
</div>
</div>
									</div>
                        <?php else:?>
                        <table class="woocommerce-orders-table woocommerce-MyAccount-orders shop_table shop_table_responsive my_account_orders account-orders-table">
                           <thead>
                              <tr>
                                 <th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-number"><span class="nobr">Đơn hàng</span></th>
                                 <th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-date"><span class="nobr">Ngày</span></th>
                                 <th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-status"><span class="nobr">Tình trạng</span></th>
                                 <th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-total"><span class="nobr">Tổng</span></th>
                                 <th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-actions"><span class="nobr">Các thao tác</span></th>
                              </tr>
                           </thead>
                           <tbody>

                              <tr class="woocommerce-orders-table__row woocommerce-orders-table__row--status-processing order">
                                 <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-number" data-title="Đơn hàng">
                                    <a href="https://shophoa5.muathemewp.com/tai-khoan/view-order/640/">
                                       #555 </a>
                                 </td>
                                 <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-date" data-title="Ngày">
                                    <time datetime="2023-11-07T14:32:11+00:00">555</time>
                                 </td>
                                 <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-status" data-title="Tình trạng">
                                    Đang xử lý
                                 </td>
                                 <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-total" data-title="Tổng">
                                    <span class="woocommerce-Price-amount amount">.000 VND<span class="woocommerce-Price-currencySymbol">₫</span></span> cho 2 mục
                                 </td>
                                 <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-actions" data-title="Các thao tác">
                                    <a href="?mod=cart&act=cart_show&chitiet=true" class="woocommerce-button wp-element-button button view">Xem</a>
                                 </td>
                              </tr>
                        
                           </tbody>
                        </table>
                        <?php endif;?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>



</main>