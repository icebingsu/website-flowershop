<main id="main" class="">
  <div class="checkout-page-title page-title">
    <div class="page-title-inner flex-row medium-flex-wrap container">
      <div class="flex-col flex-grow medium-text-center">
        <nav
          class="breadcrumbs flex-row flex-row-center heading-font checkout-breadcrumbs text-center strong h2 uppercase"
        >
          <a href="index.html" class="current"> Giỏ hàng </a>
          <span class="divider hide-for-small"
            ><i class="icon-angle-right"></i
          ></span>
          <a href="../thanh-toan/index.html" class="hide-for-small">
            Thanh toán
          </a>
          <span class="divider hide-for-small"
            ><i class="icon-angle-right"></i
          ></span>
          <a href="#" class="no-click hide-for-small"> Hoàn tất </a>
        </nav>
      </div>
    </div>
  </div>
  <div class="cart-container container page-wrapper page-checkout">
    <div class="woocommerce">
      <div class="woocommerce-notices-wrapper"></div>
      <div class="woocommerce row row-large row-divided">
        <div class="col large-7 pb-0">
          <form
            class="woocommerce-cart-form"
            action="?mod=cart&act=updatecart"
            method="post"
          >
            <div class="cart-wrapper sm-touch-scroll">
              <table
                class="shop_table shop_table_responsive cart woocommerce-cart-form__contents"
                cellspacing="0"
              >
                <thead>
                  <tr>
                    <th class="product-name" colspan="3">Sản phẩm</th>
                    <th class="product-price">Giá</th>
                    <th class="product-quantity">Số lượng</th>
                    <th class="product-subtotal">Tạm tính</th>
                  </tr>
                </thead>
                <tbody>
                  <!--- đây là cart  -->
                  
              
                  <?php foreach($showgiohang as $showgiohang):?>
                     <?php $tongtiengiohang =$tongtiengiohang + ($showgiohang['tongtien']*$showgiohang['soluong']) ?>
                  <tr class="woocommerce-cart-form__cart-item cart_item">
                    <td class="product-remove">
                      <a
                        href="indexf884.html?remove_item=cf004fdc76fa1a4f25f62e0eb5261ca3&amp;_wpnonce=09fb035391"
                        class="remove"
                        aria-label="Xóa sản phẩm này"
                        data-product_id="368"
                        data-product_sku=""
                        >&times;</a
                      >
                    </td>
                    <input type="hidden" name="id_hoa" value="<?php echo$showgiohang['id_hoa']?>">
                    <td class="product-thumbnail">
                      <a href="../san-pham/pink-moon/index.html"
                        ><img
                          width="300"
                          height="300"
                          src="wp-content/uploads/2021/05/<?php echo $showgiohang['anhhoa']?>"
                          data-src="wp-content/uploads/2021/05/<?php echo $showgiohang['anhhoa']?>"
                          class="lazy-load attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                          alt=""
                          decoding="async"
                          srcset=""
                          data-srcset="wp-content/uploads/2021/05/<?php echo $showgiohang['anhhoa']?>"
                          sizes="(max-width: 300px) 100vw, 300px"
                      /></a>
                    </td>

                    <td class="product-name" data-title="Sản phẩm">
                      <a href="../san-pham/pink-moon/index.html"><?php echo$showgiohang['tenhoa'] ?></a>
                      <div class="show-for-small mobile-product-price">
                        <span class="mobile-product-price__qty"><?php echo$showgiohang['soluong']?></span>
                        <span class="woocommerce-Price-amount amount"
                          ><bdi
                            ><?php echo$showgiohang['giaban']?><span
                              class="woocommerce-Price-currencySymbol"
                              >.000 VND</span
                            ></bdi
                          ></span
                        >
                      </div>
                    </td>

                    <td class="product-price" data-title="Giá">
                      <span class="woocommerce-Price-amount amount"
                        ><bdi
                          ><?php echo$showgiohang['giaban']?><span
                            class="woocommerce-Price-currencySymbol"
                            >.000 VND</span
                          ></bdi
                        ></span
                      >
                    </td>

                    <td class="product-quantity" data-title="Số lượng">
                      <div class="quantity buttons_added">
                        <!--  đây là nơi lấy dữ liệu lưu vào bảng thanh toán -->
                        <input
                          type="button"
                          value="-"  
                          class="minus button is-form"
                        />
                        <label
                          class="screen-reader-text"
                          for="quantity_653fafbc68c4a"
                          ><?php echo$showgiohang['tenhoa']?> số lượng</label
                        >
                        <input
                          type="number"
                          id="quantity_653fafbc68c4a"
                          class="input-text qty text"
                          name="sl"
                          value="<?php echo$showgiohang['soluong']?>"
                          title="SL"
                          size="4"
                          min="0"
                          max=""
                          step="1"
                          placeholder=""
                          inputmode="numeric"
                          autocomplete="off"
                        />
                        <input
                          type="button"
                          value="+"
                          class="plus button is-form"
                        />
                      </div>
                    </td>

                    <td class="product-subtotal" data-title="Tạm tính">
                      <span class="woocommerce-Price-amount amount"
                        ><bdi
                          ><?php echo$showgiohang['tongtien']*$showgiohang['soluong']?><span
                            class="woocommerce-Price-currencySymbol"
                            >.000 VND</span
                          ></bdi
                        ></span
                      >
                    </td>
                  </tr>
                  <?php endforeach;?>
                       <!--- end cart  -->
                  <tr>
                    <td colspan="6" class="actions clear">
                      <div class="continue-shopping pull-left text-left">
                        <a
                          class="button-continue-shopping button primary is-outline"
                          href="?mod=page&act=home"
                        >
                          &#8592;&nbsp;Tiếp tục xem sản phẩm
                        </a>
                      </div>

                      <button
                        type="submit"
                        class="button primary mt-0 pull-left small wp-element-button"
                        name="update_cart"
                        value="Cập nhật giỏ hàng"
                      >
                        Cập nhật giỏ hàng
                      </button>

                      <input
                        type="hidden"
                        id="woocommerce-cart-nonce"
                        name="woocommerce-cart-nonce"
                        value="09fb035391"
                      /><input
                        type="hidden"
                        name="_wp_http_referer"
                        value="/gio-hang/?remove_item=05049e90fa4f5039a8cadc6acbb4b2cc&#038;_wpnonce=2f5872315f"
                      />
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </form>
        </div>

        <div class="cart-collaterals large-5 col pb-0">
          <div class="cart-sidebar col-inner">
            <div class="cart_totals">
              <table cellspacing="0">
                <thead>
                  <tr>
                    <th class="product-name" colspan="2">Cộng giỏ hàng</th>
                  </tr>
                </thead>
              </table>

              <h2>Cộng giỏ hàng</h2>

              <table cellspacing="0" class="shop_table shop_table_responsive">
                <tr class="cart-subtotal">
                  <th>Tạm tính</th>
                  <td data-title="Tạm tính">
                    <span class="woocommerce-Price-amount amount"
                      ><bdi
                        ><?php echo$tongtiengiohang?><span
                          class="woocommerce-Price-currencySymbol"
                          >.000 VND</span
                        ></bdi
                      ></span
                    >
                  </td>
                </tr>

                <tr class="order-total">
                  <th>Tổng</th>
                  <td data-title="Tổng">
                    <strong
                      ><span class="woocommerce-Price-amount amount"
                      ><bdi
                        ><?php echo$tongtiengiohang?><span
                          class="woocommerce-Price-currencySymbol"
                          >.000 VND</span
                        ></bdi
                      ></span
                      ></strong
                    >
                  </td>
                </tr>
              </table>

              <div class="wc-proceed-to-checkout">
                <a
                  href="../thanh-toan/index.html"
                  class="checkout-button button alt wc-forward wp-element-button"
                >
                  Tiến hành thanh toán</a
                >
              </div>
            </div>
            <div class="cart-sidebar-content relative"></div>
          </div>
        </div>
      </div>

      <div class="cart-footer-content after-cart-content relative"></div>
    </div>
  </div>
</main>
