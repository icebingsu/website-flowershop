<main id="main" class="">
<div class="my-account-header page-title normal-title
		">
	<div class="page-title-inner flex-row container
	 text-left">
		<div class="flex-col flex-grow medium-text-center">
				<h1 class="uppercase mb-0">Tài khoản</h1>
				<small class="uppercase">Trang tài khoản</small>
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
	  <?php echo$_SESSION['tenkhachhang']?>	<em class="user-id op-5">#5</em>
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
          <a href="">Tài khoản</a>
        </li>
      <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--customer-logout">
    <a href="">Thoát</a>
  </li>
					</ul>
									</div>
				<div class="large-9 col">
											<div class="woocommerce">
<div class="woocommerce-MyAccount-content">
	<div class="woocommerce-notices-wrapper"></div>
<p>
	Xin chào <strong><?php echo$_SESSION['tenkhachhang']?></strong> (không phải tài khoản <strong><?php echo$_SESSION['tenkhachhang']?></strong>? Hãy <a href="customer-logout/?_wpnonce=f144e87158">thoát ra</a> và đăng nhập vào tài khoản của bạn)</p>
<p> 
	Từ trang quản lý tài khoản bạn có thể xem <a href="orders/">đơn hàng mới</a>, quản lý <a href="edit-address/">địa chỉ giao hàng và thanh toán</a>, and <a href="edit-account/">sửa mật khẩu và thông tin tài khoản</a>.</p>
<ul class="dashboard-links">
      <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--dashboard is-active active">
      <a href="">Trang tài khoản</a>
    </li>
      <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--orders">
      <a href="">Đơn hàng</a>
    </li>
      <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--downloads">
      <a href="?mod=cart&act=cart-details">Giỏ hàng</a>
    </li>
      <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-address">
      <a href="">Địa chỉ</a>
    </li>
      <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-account">
      <a href="">Tài khoản</a>
    </li>
    </ul>
</div>
</div>
									</div>
			</div>
	</div>
</div>
</main>