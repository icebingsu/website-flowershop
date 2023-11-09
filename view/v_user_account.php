<main id="main" class="">
<div class="my-account-header page-title normal-title
		">
	<div class="page-title-inner flex-row container
	 text-left">
		<div class="flex-col flex-grow medium-text-center">
				<h1 class="uppercase mb-0">Tài khoản</h1>
				<small class="uppercase">Tài khoản</small>
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
		<?php echo$_SESSION['tenkhachhang']?><em class="user-id op-5">#5</em>
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
<form class="woocommerce-EditAccountForm edit-account" action="?mod=user&act=thaydoithongtin" method="post">
	<p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">   
		<label for="account_first_name">Họ Tên&nbsp;<span class="required">*</span></label>
		<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="hoten" id="account_first_name" autocomplete="given-name" value="<?php echo$_SESSION['tenkhachhang']?>">
	</p>
	<div class="clear"></div>
	<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
		<label for="account_email">Địa chỉ email&nbsp;<span class="required">*</span></label>
		<input type="email" class="woocommerce-Input woocommerce-Input--email input-text" name="email" id="account_email" autocomplete="email" value="<?php echo$hienthithongtinkhachhang[0]['email']?>">
	</p>
	<fieldset>
		<legend>Thay đổi mật khẩu</legend>
		<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
			<label for="password_current">Mật khẩu hiện tại (bỏ trống nếu không đổi)</label>
			<span class="password-input"><input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="pass_hientai" id="password_current" autocomplete="off"><span class="show-password-input"></span></span>
		</p>
		<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
			<label for="password_1">Mật khẩu mới (bỏ trống nếu không đổi)</label>
			<span class="password-input"><input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="passnew" id="password_1" autocomplete="off"><span class="show-password-input"></span></span>
		</p>
		<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
			<label for="password_2">Xác nhận mật khẩu mới</label>
			<span class="password-input"><input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="sosanhpassnew" id="sosanhpassnew" autocomplete="off"><span class="show-password-input"></span></span>
		</p>
	</fieldset>
	<div class="clear"></div>
	<p>
		<input type="hidden" id="save-account-details-nonce" name="save-account-details-nonce" value="ad162cd4bc"><input type="hidden" name="_wp_http_referer" value="/tai-khoan/edit-account/">		<button type="submit" class="woocommerce-Button button wp-element-button" name="doithongtin" value="Lưu thay đổi">Lưu thay đổi</button>
		<input type="hidden" name="action" value="save_account_details">
	</p>
	</form>
</div>
</div>
									</div>
			</div>
	</div>
</div>
</main>