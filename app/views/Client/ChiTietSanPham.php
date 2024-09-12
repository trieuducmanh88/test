<!--breadcrumbs area start-->
<div class="breadcrumbs_area mt20">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>product details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
</div>
    <!--breadcrumbs area end-->
    

    <!--product details start-->
    <div class="product_details mb-80">
        <div class="container">
            <div class="row">
                <?php foreach($load_ChitietSP as $items): extract($items) ?>
                <div class="col-lg-5 col-md-5">
                    <div class="product-details-tab">
                        <div id="img-1" class="zoomWrapper single-zoom">
                            <a href="#">
                                <img id="zoom1" src="<?= './public/uploads/' . $img ?>" data-zoom-image="<?= './public/uploads/' . $img ?>" alt="big-1">
                            </a>
                        </div>
                        <div class="single-zoom-thumb">
                            <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                                <li>
                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="<?= './public/uploads/' . $img ?>" data-zoom-image="assets/clients/img/product/productbig4.jpg">
                                        <img src="<?= './public/uploads/' . $img ?>" alt="zo-th-1"/>
                                    </a>

                                </li>
                                <li >
                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="<?= './public/uploads/' . $img ?>" data-zoom-image="assets/clients/img/product/productbig1.jpg">
                                        <img src="<?= './public/uploads/' . $img ?>" alt="zo-th-1"/>
                                    </a>

                                </li>
                                <li >
                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="<?= './public/uploads/' . $img ?>" data-zoom-image="assets/clients/img/product/productbig2.jpg">
                                        <img src="<?= './public/uploads/' . $img ?>" alt="zo-th-1"/>
                                    </a>

                                </li>
                                <li >
                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="<?= './public/uploads/' . $img ?>" data-zoom-image="assets/clients/img/product/productbig3.jpg">
                                        <img src="<?= './public/uploads/' . $img ?>" alt="zo-th-1"/>
                                    </a>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="product_d_right">
                       <form action="#">
                            <div class="productd_title_nav">

                                <h1><a href="#"><?=$name?></a></h1>
                                <div class="product_nav">
                                    <ul>
                                        <li class="prev"><a href="product-details.html"><i class="fa fa-angle-left"></i></a></li>
                                        <li class="next"><a href="variable-product.html"><i class="fa fa-angle-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class=" product_ratting">
                                <ul>
                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                    <li class="review"><a href="#"> (customer review ) </a></li>
                                </ul>
                            </div>
                            <div class="price_box"> 
                                <span class="old_price"><?= number_format( $giaSanPham,0,'' )?>đ</span>
                                <span class="current_price"><?= number_format( $giaKhuyenMai,0,'' )?>đ</span>
                            </div>
                            <div class="product_desc">
                                <p><?=$mota?></p>                            
                            </div>
                            <div class="product_variant color">
                                <h3>Available Options</h3>
                                <label>color</label>
                                <ul>
                                    <li class="color1"><a href="#"></a></li>
                                    <li class="color2"><a href="#"></a></li>
                                    <li class="color3"><a href="#"></a></li>
                                    <li class="color4"><a href="#"></a></li>
                                </ul>
                            </div>
                            <div class="product_variant quantity">
                                <label>quantity</label>
                                <input min="1" max="100" value="1" type="number">
                                <button class="button" type="submit">add to cart</button>  
                                
                            </div>
                            <div class=" product_d_action">
                               <ul>
                                Inventory : <?=$soLuong?>
                               </ul>
                            </div>
                            <div class="product_meta">
                                <span>Category: <a href="#"><?=$name_danhmuc?></a></span>
                            </div>
                            
                        </form>
                        <div class="priduct_social">
                            <ul>
                                <li><a class="facebook" href="#" title="facebook"><i class="fa fa-facebook"></i> Like</a></li>           
                                <li><a class="twitter" href="#" title="twitter"><i class="fa fa-twitter"></i> tweet</a></li>           
                                <li><a class="pinterest" href="#" title="pinterest"><i class="fa fa-pinterest"></i> save</a></li>           
                                <li><a class="google-plus" href="#" title="google +"><i class="fa fa-google-plus"></i> share</a></li>        
                                <li><a class="linkedin" href="#" title="linkedin"><i class="fa fa-linkedin"></i> linked</a></li>        
                            </ul>      
                        </div>

                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>    
    </div>
    <!--product details end-->
    
    <!--product info start-->
    <div class="product_d_info mb-77">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="product_d_inner">   
                        <div class="product_info_button">    
                            <ul class="nav" role="tablist">
                                <li >
                                    <a class="active" data-bs-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Mô tả</a>
                                </li>
                                <li>
                                     <a data-bs-toggle="tab" href="#sheet" role="tab" aria-controls="sheet" aria-selected="false">Đặc điểm</a>
                                </li>
                                <li>
                                   <a data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Đánh giá (1)</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="info" role="tabpanel" >
                                <div class="product_info_content">
                                <p><?=$mota?></p>                            
                                </div>    
                            </div>
                            <div class="tab-pane fade" id="sheet" role="tabpanel" >
                                <div class="product_d_table">
                                   <form action="#">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="first_child">Các sáng tác</td>
                                                    <td>ManhDuc</td>
                                                </tr>
                                                <tr>
                                                    <td class="first_child">Kiểu dáng</td>
                                                    <td>Thể thao</td>
                                                </tr>

                                                <tr>
                                                    <td class="first_child">Mô tả ngắn</td>
                                                    <td>Thoải mái , êm ái</td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                                <div class="product_info_content">
                                <p>Thời trang đã tạo ra các bộ sưu tập được thiết kế đẹp mắt kể từ năm 2010. Thương hiệu này cung cấp các thiết kế nữ tính mang đến những chiếc váy tách biệt và nổi bật đầy phong cách, từ đó đã phát triển thành một bộ sưu tập quần áo may sẵn đầy đủ, trong đó mỗi món đồ đều là một phần quan trọng trong tủ quần áo của phụ nữ. Kết quả? Vẻ ngoài mát mẻ, dễ dàng, sang trọng với sự thanh lịch trẻ trung và phong cách đặc trưng không thể nhầm lẫn. Tất cả những món đồ đẹp đẽ đều được sản xuất tại Ý và được sản xuất với sự chú ý lớn nhất. Giờ đây, Thời trang mở rộng sang nhiều loại phụ kiện bao gồm giày, mũ, thắt lưng và nhiều thứ khác!</p>                                </div>    
                                </div>

                            <div class="tab-pane fade" id="reviews" role="tabpanel" >
                                <div class="reviews_wrapper">
                                    <h2>1 review : <?=$name?></h2>
                                    <div class="reviews_comment_box">
                                        <div class="comment_thmb">
                                            <img src="assets/clients/img/blog/comment2.jpg" alt="">
                                        </div>
                                        <div class="comment_text">
                                            <div class="reviews_meta">
                                                <div class="star_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    </ul>   
                                                </div>
                                                <p><strong>admin </strong>- September 12, 2018</p>
                                                <span>roadthemes</span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="comment_title">
                                        <h2>Add a review </h2>
                                        <p>Your email address will not be published.  Required fields are marked </p>
                                    </div>
                                    <div class="product_ratting mb-10">
                                       <h3>Your rating</h3>
                                        <ul>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_review_form">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="review_comment">Your review </label>
                                                    <textarea name="comment" id="review_comment" ></textarea>
                                                </div> 
                                                <div class="col-lg-6 col-md-6">
                                                    <label for="author">Name</label>
                                                    <input id="author"  type="text">

                                                </div> 
                                                <div class="col-lg-6 col-md-6">
                                                    <label for="email">Email </label>
                                                    <input id="email"  type="text">
                                                </div>  
                                            </div>
                                            <button type="submit">Submit</button>
                                         </form>   
                                    </div> 
                                </div>     
                            </div>
                        </div>
                    </div>     
                </div>
            </div>
        </div>    
    </div>  
    <!--product info end-->
    
    <!--product area start-->
    <section class="product_area related_products">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title psec_title">

                        <h2>SẢN PHẨM CÙNG LOẠI</h2>
                        <input type="hidden" name="idDanhMuc" value="<?=$danhmuc_id?>" >
                    </div>
                </div>
            </div> 
            <div class="row">
                <div class="product_carousel product_column5 owl-carousel">
                <?php foreach($LoadSP_cungDanhMuc as $items ): extract($LoadSP_cungDanhMuc) ?>
                    <div class="col-lg-3">
                         <article class="single_product">
                             <figure>
                                 <div class="product_thumb">
                                     <a class="primary_img" href="product-details.html"><img src="<?= './public/uploads/' . $img ?>" alt="">
                                     </a>
                                     <div class="label_product">
                                         <span class="label_sale">Sale</span>
                                     </div>
                                     <div class="action_links">
                                         <ul>
                                             <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
                                             <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
                                             <li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
                                         </ul>
                                     </div>
                                 </div>
                                 <figcaption class="product_content">
                                     <div class="product_content_inner">
                                         <h4 class="product_name"><a href="product-details.html"><?=$name?></a></h4>
                                         <div class="price_box"> 
                                         <span class="old_price"><?= number_format( $giaSanPham,0,'' )?>đ</span>
                                <span class="current_price"><?= number_format( $giaKhuyenMai,0,'' )?>đ</span>

                                         </div>
                                     </div>
                                     <div class="add_to_cart">
                                         <a href="cart.html">Add to cart</a>
                                     </div>
                                 </figcaption>
                             </figure>
                         </article>
                    </div>
                    <?php endforeach ?>

                </div>
            </div>  
        </div>
    </section>
    <!--product area end-->
    
    <!--product area start-->
    <section class="product_area upsell_products mb-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title psec_title">
                        <h2>Upsell Products	</h2>
                    </div>
                </div>
            </div> 
            <div class="row">
                <div class="product_carousel product_column5 owl-carousel">
					<div class="col-lg-3">
						<article class="single_product">
								<figure>
									<div class="product_thumb">
										<a class="primary_img" href="product-details.html"><img src="assets/clients/img/product/product4.jpg" alt=""></a>
										<a class="secondary_img" href="product-details.html"><img src="assets/clients/img/product/product3.jpg" alt=""></a>
										<div class="label_product">
											<span class="label_sale">Sale</span>
										</div>
										<div class="action_links">
											<ul>
												<li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
												<li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
												<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
											</ul>
										</div>
									</div>
									<figcaption class="product_content">
										<div class="product_content_inner">
											<h4 class="product_name"><a href="product-details.html">Donec eu libero ac dapibus urna her placerat</a></h4>
											<div class="price_box"> 
												<span class="old_price">$87.00</span>
												<span class="current_price">$78.00</span>
											</div>
										</div>
										<div class="add_to_cart">
											<a href="cart.html">Add to cart</a>
										</div>
									</figcaption>
								</figure>
							</article>
				   </div>
				   <div class="col-lg-3">
						<article class="single_product">
							<figure>
								<div class="product_thumb">
									<a class="primary_img" href="product-details.html"><img src="assets/clients/img/product/product8.jpg" alt=""></a>
									<a class="secondary_img" href="product-details.html"><img src="assets/clients/img/product/product7.jpg" alt=""></a>
									<div class="action_links">
										<ul>
											<li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
											<li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
											<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
										</ul>
									</div>
								</div>
								<figcaption class="product_content">
									<div class="product_content_inner">
										<h4 class="product_name"><a href="product-details.html">Eodem modo vel mattis ante facilisis</a></h4>
										<div class="price_box"> 
											<span class="old_price">$86.00</span>
											<span class="current_price">$82.00</span>
										</div>
									</div>
									<div class="add_to_cart">
										<a href="cart.html">Add to cart</a>
									</div>
								</figcaption>
							</figure>
						</article>
				   </div>
				   <div class="col-lg-3">
						<article class="single_product">
								<figure>
									<div class="product_thumb">
										<a class="primary_img" href="product-details.html"><img src="assets/clients/img/product/product3.jpg" alt=""></a>
										<a class="secondary_img" href="product-details.html"><img src="assets/clients/img/product/product4.jpg" alt=""></a>
										<div class="action_links">
											<ul>
												<li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
												<li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
												<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
											</ul>
										</div>
									</div>
									<figcaption class="product_content">
										<div class="product_content_inner">
											<h4 class="product_name"><a href="product-details.html">Eodem modo vel mattis ante facilisis</a></h4>
											<div class="price_box"> 
												<span class="old_price">$86.00</span>
												<span class="current_price">$82.00</span>
											</div>
										</div>
										<div class="add_to_cart">
											<a href="cart.html">Add to cart</a>
										</div>
									</figcaption>
								</figure>
							</article>
				   </div>
				   <div class="col-lg-3">
						<article class="single_product">
							<figure>
								<div class="product_thumb">
									<a class="primary_img" href="product-details.html"><img src="assets/clients/img/product/product5.jpg" alt=""></a>
									<a class="secondary_img" href="product-details.html"><img src="assets/clients/img/product/product6.jpg" alt=""></a>
									<div class="label_product">
										<span class="label_sale">Sale</span>
									</div>
									<div class="action_links">
										<ul>
											<li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
											<li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
											<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
										</ul>
									</div>
								</div>
								<figcaption class="product_content">
									<div class="product_content_inner">
										<h4 class="product_name"><a href="product-details.html">Epicuri per lobortis eleifend eget laoreet</a></h4>
										<div class="price_box"> 
											<span class="old_price">$82.00</span>
											<span class="current_price">$77.00</span>
										</div>
									</div>
									<div class="add_to_cart">
										<a href="cart.html">Add to cart</a>
									</div>
								</figcaption>
							</figure>
						</article>
				   </div>
				   <div class="col-lg-3">
						<article class="single_product">
							<figure>
								<div class="product_thumb">
									<a class="primary_img" href="product-details.html"><img src="assets/clients/img/product/product9.jpg" alt=""></a>
									<a class="secondary_img" href="product-details.html"><img src="assets/clients/img/product/product10.jpg" alt=""></a>
									<div class="label_product">
										<span class="label_sale">Sale</span>
									</div>
									<div class="action_links">
										<ul>
											<li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
											<li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
											<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
										</ul>
									</div>
								</div>
								<figcaption class="product_content">
									<div class="product_content_inner">
										<h4 class="product_name"><a href="product-details.html">Kaoreet lobortis sagittis laoreet metus feugiat</a></h4>
										<div class="price_box"> 
											<span class="old_price">$94.00</span>
											<span class="current_price">$92.00</span>
										</div>
									</div>
									<div class="add_to_cart">
										<a href="cart.html">Add to cart</a>
									</div>
								</figcaption>
							</figure>
						</article>
				   </div>
				   <div class="col-lg-3">
						<article class="single_product">
								<figure>
									<div class="product_thumb">
										<a class="primary_img" href="product-details.html"><img src="assets/clients/img/product/product13.jpg" alt=""></a>
										<a class="secondary_img" href="product-details.html"><img src="assets/clients/img/product/product14.jpg" alt=""></a>
										<div class="action_links">
											<ul>
												<li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
												<li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
												<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
											</ul>
										</div>
									</div>
									<figcaption class="product_content">
										<div class="product_content_inner">
											<h4 class="product_name"><a href="product-details.html">Ornare sed consequat nisl eget mi porttitor</a></h4>
											<div class="price_box"> 
												<span class="old_price">$76.00</span>
												<span class="current_price">$73.00</span>
											</div>
										</div>
										<div class="add_to_cart">
											<a href="cart.html">Add to cart</a>
										</div>
									</figcaption>
								</figure>
							</article>
				   </div>

			   </div> 
            </div>   
        </div>
    </section>
    <!--product area end-->