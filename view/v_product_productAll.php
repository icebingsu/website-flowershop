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
												<h4>
													Chủ đề </h4>
												<div class="woof_block_html_items">
													<ul class="woof_list woof_list_checkbox">
														<?php foreach($nhomsanpham_product as $tendanhmuc):?>
														<li class="woof_term_58 ">
															<input type="checkbox" id="woof_58_6460f6751e64c" class="woof_checkbox_term woof_checkbox_term_58" data-tax="chu-de" name="hoa-dam-cuoi" data-term-id="58" value="58" />
															<label class="woof_checkbox_label " for="woof_58_6460f6751e64c"><?php echo$tendanhmuc['tendanhmuc']?><span class="woof_checkbox_count">(14)</span></label>
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
								Hiển thị 1&ndash;12 của 14 kết quả</p>
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
							</form>
							<p class="count-post">14 sản phẩm</p>
							<div class="is-large">
								<nav class="woocommerce-breadcrumb breadcrumbs uppercase"><a href="../index.html">Trang chủ</a> <span class="divider">&#47;</span> Cửa hàng</nav>
							</div>
							<div class="category-filtering category-filter-row show-for-medium">
								<a href="#" data-open="#shop-sidebar" data-visible-after="true" data-pos="left" class="filter-button uppercase plain">
									<i class="icon-equalizer"></i>
									<strong>Lọc</strong>
								</a>
								<div c	lass="inline-block">
								</div>
							</div>
						</div><!-- .flex-left -->
					</div><!-- flex-row -->
				</div><!-- .page-title -->
				<div class="woof_products_top_panel_content"></div>
				<div class="woof_products_top_panel"></div>
				<div class="woocommerce-notices-wrapper"></div>
				<div class="products row row-small large-columns-4 medium-columns-3 small-columns-2 equalize-box">
					
					<?php foreach($tatcahoa as $tatcahoa):?>
					<div class="product-small col has-hover product type-product post-385 status-publish first instock product_cat-hoa-hong has-post-thumbnail shipping-taxable purchasable product-type-simple">
						<div class="col-inner">

							<div class="badge-container absolute left top z-1">

							</div>
							<div class="product-small box ">
								<div class="box-image">
									<div class="image-none">
										<a href="../san-pham/cupids-kisses/index.html" aria-label="Cupid&#039;s Kisses">
											<img width="300" height="300" src="wp-content/uploads/2021/05/<?php echo$tatcahoa['anhhoa']?>" data-src="wp-content/uploads/2021/05/<?php echo$tatcahoa['anhhoa']?>" class="lazy-load attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" srcset="" data-srcset="wp-content/uploads/2021/05/<?php echo$tatcahoa['anhhoa']?>" sizes="(max-width: 300px) 100vw, 300px" /> </a>
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
										<p class="name product-title woocommerce-loop-product__title"><a href="../san-pham/cupids-kisses/index.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><?php echo$tatcahoa['tenhoa']?></a></p>
									</div>
									<div class="price-wrapper">
										<span class="price"><span class="woocommerce-Price-amount amount"><bdi><?php echo$tatcahoa['giaban']?>.000 VND<span class="woocommerce-Price-currencySymbol"></span></bdi></span></span>
									</div>
									<div class="add-to-cart-button"><a href="index86fb.html?add-to-cart=385" data-quantity="1" class="primary is-small mb-0 button wp-element-button product_type_simple add_to_cart_button ajax_add_to_cart is-outline" data-product_id="385" data-product_sku="" aria-label="Thêm &ldquo;Cupid&#039;s Kisses&rdquo; vào giỏ hàng" rel="nofollow">Thêm vào giỏ hàng</a></div>
								</div>
							</div>
						</div>
					</div>
					<?php endforeach;?>
				</div><!-- row -->
				<div class="container">
					<nav class="woocommerce-pagination">
						<ul class="page-numbers nav-pagination links text-center">
							<li><span aria-current="page" class="page-number current">1</span></li>
							<li><a class="page-number" href="page/2/index.html">2</a></li>
							<li><a class="next page-number" href="page/2/index.html"><i class="icon-angle-right"></i></a></li>
						</ul>
					</nav>
				</div>
			</div><!-- shop container -->
		</div>
	</div>

</main>