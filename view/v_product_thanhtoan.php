<main id="main" class="">
   <div class="checkout-page-title page-title">
      <div class="page-title-inner flex-row medium-flex-wrap container">
         <div class="flex-col flex-grow medium-text-center">
            <nav class="breadcrumbs flex-row flex-row-center heading-font checkout-breadcrumbs text-center strong h2 uppercase">
               <a href="../gio-hang/index.html" class="hide-for-small">
                  Giỏ hàng </a>
               <span class="divider hide-for-small"><i class="icon-angle-right"></i></span>
               <a href="index.html" class="current">
                  Thanh toán </a>
               <span class="divider hide-for-small"><i class="icon-angle-right"></i></span>
               <a href="#" class="no-click hide-for-small">
                  Hoàn tất </a>
            </nav>
         </div>
      </div>
   </div>
   <div class="cart-container container page-wrapper page-checkout">
      <div class="woocommerce">
         <div class="woocommerce-notices-wrapper"></div>
         <div class="woocommerce-notices-wrapper"></div>
         <form name="checkout" method="post" class="checkout woocommerce-checkout " action="?mod=user&act=dathang&tongtiengiohang=<?php echo $_GET['tongtiengiohang'] ?>" enctype="application/x-www-form-urlencoded">
            <div class="row pt-0 ">
               <div class="large-7 col  ">
                  <div id="customer_details">
                     <div class="clear">
                        <div class="woocommerce-billing-fields">
                           <h3>Thông tin thanh toán</h3>
                           <div class="woocommerce-billing-fields__field-wrapper">
                              <p class="form-row form-row-first thwcfd-field-wrapper thwcfd-field-text validate-required" id="billing_first_name_field" data-priority="10">
                                 <label for="billing_first_name" class="">Họ Tên&nbsp;<abbr class="required" title="bắt buộc">*</abbr></label><span class="woocommerce-input-wrapper">
                                    <input type="text" class="input-text " name="hoten" id="billing_first_name" placeholder="" value="<?php echo $_SESSION['tenkhachhang'] ?>" autocomplete="given-name" />
                                 </span>
                              </p>
                              <p class="form-row address-field form-row-wide thwcfd-field-wrapper thwcfd-field-text validate-required" id="billing_address_1_field" data-priority="50">
                                 <label for="billing_address_1" class="">Địa chỉ&nbsp;<abbr class="required" title="bắt buộc">*</abbr>
                                 </label>
                                 <span class="woocommerce-input-wrapper">
                                    <input type="text" class="input-text " name="diachi" id="billing_address_1" placeholder="Địa chỉ" value="" autocomplete="address-line1" />
                                 </span>
                              </p>
                              <p class="form-row form-row-wide thwcfd-field-wrapper thwcfd-field-tel validate-required validate-phone" id="billing_phone_field" data-priority="100"><label for="billing_phone" class="">Số
                                    điện thoại&nbsp;<abbr class="required" title="bắt buộc">*</abbr></label><span class="woocommerce-input-wrapper">
                                    <input type="tel" class="input-text " name="sodienthoai" id="billing_phone" placeholder="" value="" autocomplete="tel" />
                                 </span>
                              </p>
                              <p class="form-row form-row-wide thwcfd-field-wrapper thwcfd-field-email validate-required validate-email" id="billing_email_field" data-priority="110"><label for="billing_email" class="">Địa
                                    chỉ email&nbsp;<abbr class="required" title="bắt buộc">*</abbr></label><span class="woocommerce-input-wrapper"><input type="email" class="input-text " name="email" id="billing_email" placeholder="" value="<?php echo $_SESSION['email'] ?>" autocomplete="email username" /></span>
                              </p>
                              <p class="form-row form-row-wide thwcfd-field-wrapper thwcfd-field-email validate-required validate-email" id="billing_email_field" data-priority="110"><label for="billing_email" class="">Địa
                                    chỉ email&nbsp;<abbr class="required" title="bắt buộc">*</abbr></label><span class="woocommerce-input-wrapper"><input type="hidden" class="input-text " name="tongtien" id="billing_email" placeholder="" value="<?php echo $_GET['tongtiengiohang'] ?>" autocomplete="email username" /></span>
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="clear">
                        <div class="woocommerce-shipping-fields">
                        </div>
                        <div class="woocommerce-additional-fields">
                           <h3>Thông tin bổ sung</h3>
                           <div class="woocommerce-additional-fields__field-wrapper">
                              <p class="form-row notes thwcfd-field-wrapper thwcfd-field-textarea" id="order_comments_field" data-priority=""><label for="order_comments" class="">Ghi chú
                                    đơn hàng&nbsp;<span class="optional">(tuỳ chọn)</span></label><span class="woocommerce-input-wrapper"><textarea name="order_comments" class="input-text " id="order_comments" placeholder="Ghi chú về đơn hàng, ví dụ: thời gian hay chỉ dẫn địa điểm giao hàng chi tiết hơn." rows="2" cols="5"></textarea></span></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="large-5 col">
                  <div class="col-inner has-border">
                     <div class="checkout-sidebar sm-touch-scroll">
                        <h3 id="order_review_heading">Đơn hàng của bạn</h3>
                        <div id="order_review" class="woocommerce-checkout-review-order">
                           <table class="shop_table woocommerce-checkout-review-order-table">
                              <thead>
                                 <tr>
                                    <th class="product-name">Sản phẩm</th>
                                    <th class="product-total">Tạm tính</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php foreach ($show_cart_thanhtoan as $show_cart_thanhtoan) : ?>
                                    <tr class="cart_item">
                                       <td class="product-name">
                                          <?php echo $show_cart_thanhtoan['tenhoa'] ?><strong class="product-quantity">&times;&nbsp;<?php echo $show_cart_thanhtoan['soluong'] ?></strong>
                                       </td>
                                       <td class="product-total">
                                          <span class="woocommerce-Price-amount amount"><bdi><?php echo $show_cart_thanhtoan['giaban'] ?><span class="woocommerce-Price-currencySymbol">.000 VND</span></bdi></span>
                                       </td>
                                    </tr>
                                 <?php endforeach ?>
                              </tbody>
                              <tfoot>
                                 <tr class="cart-subtotal">
                                    <th>Tạm tính</th>
                                    <td><span class="woocommerce-Price-amount amount"><bdi><?php echo $tongtiengiohang ?><span class="woocommerce-Price-currencySymbol">.000 VND</span></bdi></span>
                                    </td>
                                 </tr>
                                 <tr class="order-total">
                                    <th>Tổng</th>
                                    <td><strong><span class="woocommerce-Price-amount amount"><bdi><?php echo $tongtiengiohang ?><span class="woocommerce-Price-currencySymbol">.000
                                                   VND</span></bdi></span></strong> </td>
                                 </tr>
                              </tfoot>
                           </table>
                           <div id="payment" class="woocommerce-checkout-payment">
                              <ul class="wc_payment_methods payment_methods methods">
                                 <li class="wc_payment_method payment_method_bacs">
                                    <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="bacs" checked='checked' data-order_button_text="" />

                                    <label for="payment_method_bacs">
                                       Chuyển khoản MOMO </label>
                                    <div class="payment_box payment_method_bacs">
                                       <p>Thực hiện thanh toán vào ngay tài khoản ngân hàng của chúng tôi. Vui lòng sử
                                          dụng Mã đơn hàng của bạn trong phần Nội dung thanh toán. Đơn hàng sẽ đươc giao
                                          sau khi tiền đã chuyển.</p>
                                    </div>
                                 </li>
                                 <li class="wc_payment_method payment_method_cod">
                                    <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="cod" data-order_button_text="" />

                                    <label for="payment_method_cod">
                                       Trả tiền mặt khi nhận hàng </label>
                                    <div class="payment_box payment_method_cod" style="display:none;">
                                       <p>Trả tiền mặt khi giao hàng</p>
                                    </div>
                                 </li>
                              </ul>
                              <div class="form-row place-order">
                                 <noscript>
                                    Trình duyệt của bạn không hỗ trợ JavaScript, hoặc nó bị vô hiệu hóa, hãy đảm bảo bạn
                                    nhấp vào <em>Cập nhật giỏ hàng</em> trước khi bạn thanh toán. Bạn có thể phải trả
                                    nhiều hơn số tiền đã nói ở trên, nếu bạn không làm như vậy. <br /><button type="submit" class="button alt wp-element-button" name="woocommerce_checkout_update_totals" value="Cập nhật tổng">Cập nhật
                                       tổng</button>
                                 </noscript>
                                 <div class="woocommerce-terms-and-conditions-wrapper">
                                 </div>
                                 <button type="submit" class="button alt wp-element-button" name="payUrl" id="place_order" data-value="Đặt hàng">Đặt hàng</button>
                              </div>
                           </div>
                        </div>
                        <div class="woocommerce-privacy-policy-text"></div>
                     </div>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>
</main>