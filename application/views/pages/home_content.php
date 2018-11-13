<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Feature <strong>Products</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<?php foreach ($all_published_product_info as $v_product) {
												 ?>
												<li class="span3">
													<div class="product-box">
														<p><a href="<?php echo base_url()  ?>home/product_details/<?php echo $v_product->product_id; ?>"><img src="<?php echo base_url().$v_product->product_image; ?>" alt="" /></a></p>
														<a href="<?php echo base_url()  ?>home/product_details/<?php echo $v_product->product_id; ?>" class="title"><?php echo substr("$v_product->product_name", 0, 20); ?></a><br/>
														<a href="<?php echo base_url()  ?>home/product_details/<?php echo $v_product->product_id; ?>" class="category">Old Price <?php echo $v_product->product_price; ?> Tk</a>
														<p class="price">New Price <?php echo $v_product->product_new_price; ?> Tk</p>
													</div>
												</li>
											<?php } ?>
											</ul>
										</div>







										<!-- <div class="item">
											<ul class="thumbnails">
												
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="<?php echo base_url()?>font_end/themes/images/ladies/8.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Quis nostrud exerci</a><br/>
														<a href="products.html" class="category">Quis nostrud</a>
														<p class="price">$35.50</p>
													</div>
												</li>																																	
											</ul>
										</div> -->
									</div>							
								</div>
							</div>						
						</div>
						<br/>
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Latest <strong>Products</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-2" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												
												<!-- <li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="<?php echo base_url()?>font_end/themes/images/cloth/bootstrap-women-ware5.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">You think fast</a><br/>
														<a href="products.html" class="category">World once</a>
														<p class="price">$25.60</p>
													</div>
												</li> -->


											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
												
												
												<!-- <li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="<?php echo base_url()?>font_end/themes/images/cloth/bootstrap-women-ware1.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Quis nostrud exerci</a><br/>
														<a href="products.html" class="category">Quis nostrud</a>
														<p class="price">$25.20</p>
													</div>
												</li>														 -->																			
											</ul>
										</div>
									</div>							
								</div>
							</div>						
						</div>