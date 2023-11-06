<main id="main" class="">
   <div class="row category-page-row">

      <div class="col large-3 hide-for-medium ">
         <div class="is-sticky-column" data-sticky-mode="javascript">
            <div class="is-sticky-column__inner">
               <div id="shop-sidebar" class="sidebar-inner col-inner">
                  <aside id="woof_widget-2" class="widget WOOF_Widget">
                     <div class="widget widget-woof">
                        <span class="widget-title shop-sidebar">Nhóm sản phẩm</span>
                        <div class="is-divider small"></div>
                        <div class="woof woof_sid woof_sid_widget " data-sid="widget" data-shortcode="woof sid=&#039;widget&#039; mobile_mode=&#039;0&#039; autosubmit=&#039;-1&#039; start_filtering_btn=&#039;0&#039; price_filter=&#039;0&#039; redirect=&#039;&#039; ajax_redraw=&#039;0&#039; btn_position=&#039;b&#039; dynamic_recount=&#039;-1&#039; " data-redirect="" data-autosubmit="1" data-ajax-redraw="0">
                           <!--- here is possible to drop html code which is never redraws by AJAX ---->
                           <div class="woof_redraw_zone" data-woof-ver="3.3.2">
                              <div data-css-class="woof_container_chu-de" class="woof_container woof_container_checkbox woof_container_chu-de woof_container_1 woof_container_ch">
                                 <div class="woof_container_overlay_item"></div>
                                 <div class="woof_container_inner woof_container_inner_ch">
                                    <div class="woof_block_html_items">
                                       <ul class="woof_list woof_list_checkbox">
                                          <?php foreach($danhmucsearch as $danhmuc):?>
                                          <li class="woof_term_58 ">
                                             <input type="checkbox" id="woof_58_653fa8810da19" class="woof_checkbox_term woof_checkbox_term_58" data-tax="chu-de" name="hoa-dam-cuoi" data-term-id="58" value="58" />
                                             <label class="woof_checkbox_label " for="woof_58_653fa8810da19"><?php echo$danhmuc['tendanhmuc']?><span class="woof_checkbox_count">(1)</span></label>
                                             <input type="hidden" value="Hoa đám cưới" data-anchor="woof_n_chu-de_hoa-dam-cuoi" />
                                          </li>
                                          <?php endforeach;?>
                                       </ul>
                                    </div>

                                    <input type="hidden" name="woof_t_chu-de" value="Chủ đề" /><!-- for red button search nav panel -->

                                 </div>
                              </div>

                              <div class="woof_submit_search_form_container">


                              </div>




                           </div>

                        </div>



                     </div>
                  </aside>
               </div>
            </div>
         </div>
      </div>

      <div class="col large-9">
         <div class="shop-container">
            <div class="mh-shop-page-title category-page-title page-title">
               <div class="page-title-inner flex-row  medium-flex-wrap container">
                  <div class="flex-col flex-grow medium-text-center medium-shop-title">
                     <span class="order">Sắp xếp: </span>
                     <p class="woocommerce-result-count hide-for-medium">
                        Hiển thị kết quả duy nhất</p>
                     <form class="woocommerce-ordering" method="get">
                        <select name="orderby" class="orderby" aria-label="Đơn hàng của cửa hàng">
                           <option value="menu_order" selected='selected'>Thứ tự mặc định</option>
                           <option value="popularity">Thứ tự theo mức độ phổ biến</option>
                           <option value="rating">Thứ tự theo điểm đánh giá</option>
                           <option value="date">Mới nhất</option>
                           <option value="price">Thứ tự theo giá: thấp đến cao</option>
                           <option value="price-desc">Thứ tự theo giá: cao xuống thấp</option>
                        </select>
                        <input type="hidden" name="paged" value="1" />
                        <input type="hidden" name="add-to-cart" value="363" />
                     </form>
                  </div><!-- .flex-left -->
                  <div class="flex-col medium-text-center count-post">
                     <p class="mb-0">
                        1 sản phẩm </p>
                  </div><!-- .flex-right -->
               </div><!-- flex-row -->
            </div><!-- .page-title -->
            <div class="woof_products_top_panel_content">
            </div>
            <div class="woof_products_top_panel"></div>
            <div class="woocommerce-notices-wrapper"></div>
            <div class="products row row-small large-columns-4 medium-columns-3 small-columns-2 equalize-box">
               <?php foreach($search_noidung as $search):?>
               <div class="product-small col has-hover product type-product post-363 status-publish first instock product_cat-hoa-violet has-post-thumbnail shipping-taxable purchasable product-type-simple">
                  <div class="col-inner">
                     <div class="badge-container absolute left top z-1">
                     </div>
                     <div class="product-small box ">
                        <div class="box-image">
                           <div class="image-none">
                              <a href="../../san-pham/violet-lover/index.html" aria-label="Violet Lover">
                                 <img width="300" height="300" src="wp-content/uploads/2021/05/<?php echo $search['anhhoa'] ?>" data-src="wp-content/uploads/2021/05/<?php echo $search['anhhoa'] ?>" class="lazy-load attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" srcset="" data-srcset="wp-content/uploads/2021/05/<?php echo $search['anhhoa'] ?>" /> </a>
                           </div>
                           <div class="image-tools is-small top right show-on-hover">
                           </div>
                           <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                           </div>
                           <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                           </div>
                        </div>

                        <div class="box-text box-text-products">
                           <div class="title-wrapper">
                              <p class="name product-title woocommerce-loop-product__title"><a href="../../san-pham/violet-lover/index.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><?php echo$search['tenhoa']?></a></p>
                           </div>
                           <div class="price-wrapper">
                              <span class="price"><span class="woocommerce-Price-amount amount"><bdi><?php echo$search['giaban']?><span class="woocommerce-Price-currencySymbol">.000 VND</span></bdi></span></span>
                           </div>
                           <div class="add-to-cart-button"><a href="index6900.html?add-to-cart=363" data-quantity="1" class="primary is-small mb-0 button wp-element-button product_type_simple add_to_cart_button ajax_add_to_cart is-outline" data-product_id="363" data-product_sku="" aria-label="Thêm &ldquo;Violet Lover&rdquo; vào giỏ hàng" rel="nofollow">Thêm vào giỏ hàng</a></div>
                        </div>
                     </div>
                  </div>
               </div>

               <?php endforeach;?>
            </div><!-- row -->
         </div><!-- shop container -->
      </div>
   </div>

</main>