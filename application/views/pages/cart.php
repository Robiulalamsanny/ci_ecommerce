	<?php
	$contents =$this->cart->contents();
	// echo "<pre>";
	// print_r($contents);
	// exit();
	?>




	<section class="main-content">				
				<div class="row">
					<div class="span9">					
						<h4 class="title"><span class="text"><strong>Your</strong> Cart</span></h4>
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Remove</th>
									<th>Image</th>
									<th>Product Name</th>
									<th>Quantity</th>
									<th>Unit Price</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($contents as $v_contents){ ?>
								<tr>
									<td><a class="btn" href="<?php echo base_url()?>cart/deleteCart/<?php echo $v_contents['rowid']; ?>" type="submit">Delete</a></td>
									<td style="height: 70px;width: 70px;"><a  href="product_detail.html"><img alt="" src=<?php echo base_url().$v_contents['options']['image'];  ?>></a></td>
									<td><?php echo $v_contents['name']; ?></td>
									<td>
									<form action="<?php echo base_url()?>cart/update_cart/<?php echo $v_contents['rowid']; ?>" method="post">
									<input type="text" name="qty" value="<?php echo $v_contents['qty']; ?>" placeholder="1" class="input-mini">
									<input type="hidden" name="rowid" value="<?php echo $v_contents['rowid']; ?>" placeholder="1" class="input-mini">
									<button class="btn" style="margin-top: -10px;" type="submit">Update</button>
									</form>
									</td>
									<td><?php echo $v_contents['price'];  ?> Taka</td>
									<td><?php echo $v_contents['subtotal'];  ?> Taka</td>
								</tr>	
								<?php } ?>		  
							
							
								<!-- <tr>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td><strong>$3,600.00</strong></td>
								</tr>	 -->	  
							</tbody>
						</table>
					
						
						<hr>
						<p class="cart-total right">
							<strong>Sub-Total</strong>:	<?php echo $this->cart->total();?><br>
							
							<strong>VAT (17.5%)</strong>: <?php echo $vat = ( (17.5*$this->cart->total())/100);?><br>
							<strong>Total</strong>: <?php echo $total = $this->cart->total()+$vat;

							$sdata = array();
							$sdata['total'] = $total;
							$this->session->set_userdata($sdata);



							?><br>
						</p>
						<hr/>
						<p class="buttons center">				
							
							<a class="btn" href="<?php echo base_url()?>" type="button">Continue</a>
							<?php 
								$customer_id = $this->session->userdata('customer_id');
								$shipping_id = $this->session->userdata('shipping_id');
								if ($customer_id != null && $shipping_id != null) {	
							?>
							<a class="btn btn-inverse" href="<?php echo base_url()?>checkout/payment " type="submit" id="checkout">Checkout</a>
							<?php }else if($customer_id != null ){ ?>
							<a class="btn btn-inverse" href="<?php echo base_url()?>checkout/shipping" type="submit" id="checkout">Checkout</a>
						
							<?php }else{ ?>
							<a class="btn btn-inverse" href="<?php echo base_url()?>checkout/customer_details" type="submit" id="checkout">Checkout</a>
							<?php }?>
						</p>					
					</div>
					<div class="span3 col">
						<div class="block">	
							<ul class="nav nav-list">
								<li class="nav-header">SUB CATEGORIES</li>
								<li><a href="products.html">Nullam semper elementum</a></li>
								<li class="active"><a href="products.html">Phasellus ultricies</a></li>
								<li><a href="products.html">Donec laoreet dui</a></li>
								<li><a href="products.html">Nullam semper elementum</a></li>
								<li><a href="products.html">Phasellus ultricies</a></li>
								<li><a href="products.html">Donec laoreet dui</a></li>
							</ul>
							<br/>
							<ul class="nav nav-list below">
								<li class="nav-header">MANUFACTURES</li>
								<li><a href="products.html">Adidas</a></li>
								<li><a href="products.html">Nike</a></li>
								<li><a href="products.html">Dunlop</a></li>
								<li><a href="products.html">Yamaha</a></li>
							</ul>
						</div>
						<div class="block">
							<h4 class="title">
								<span class="pull-left"><span class="text">Randomize</span></span>
								<span class="pull-right">
									<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
								</span>
							</h4>
							<div id="myCarousel" class="carousel slide">
								<div class="carousel-inner">
									<div class="active item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">
													<span class="sale_tag"></span>												
													<a href="product_detail.html"><img alt="" src="themes/images/ladies/2.jpg"></a><br/>
													<a href="product_detail.html" class="title">Fusce id molestie massa</a><br/>
													<a href="#" class="category">Suspendisse aliquet</a>
													<p class="price">$261</p>
												</div>
											</li>
										</ul>
									</div>
									<div class="item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">												
													<a href="product_detail.html"><img alt="" src="themes/images/ladies/4.jpg"></a><br/>
													<a href="product_detail.html" class="title">Tempor sem sodales</a><br/>
													<a href="#" class="category">Urna nec lectus mollis</a>
													<p class="price">$134</p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>						
					</div>
				</div>
			</section>	 