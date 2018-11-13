<div class="accordion" id="accordion2">
							
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">Payment &amp;  Details</a>
								</div>
								<div id="collapseTwo" class="accordion-body collapse">
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="span6">
												<h4>Payment Details</h4>
												<form action="<?php echo base_url() ?>checkout/save_payment_info" method="post">

												<div class="control-group">
													
													<div class="controls">
														<input type="radio" name="payment_method" value="cash_on_delivary" placeholder="" class="input-xlarge"> Cash On Delivary
													</div>
												</div>


												<div class="control-group">
													
													<div class="controls">
														<input type="radio" name="payment_method" value="bkash" placeholder="" class="input-xlarge"> Bkash
													</div>
												</div>
												

												<div class="control-group">
													
													<div class="controls">
														<input type="submit"  name="btn" class="btn btn-primary">
													</div>
												</div>

												</form>
											</div>








										</div>
									</div>
								</div>
							</div>
							
						</div>	