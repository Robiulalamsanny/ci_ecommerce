<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Tables</a></li>
			</ul>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Order Table</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Id</th>
								  <th>Product name</th>
								  <th>Product Salse Quentity</th>
								  <th>Product Price</th>
								  
								  <th>Product Sub Total</th>
								 
							  </tr>
						  </thead>   
						  <tbody>


							<tr>
								<td><?php echo $order_details->order_details_id;?></td>
								<td class="center"><?php echo $order_details->product_name;?></td>
								<td class="center"><?php echo $order_details->product_sales_quantity;?></td>
								<td class="center"><?php echo $order_details->product_price;?></td>
								<td class="center"><?php echo $order_details->product_price*$order_details->product_sales_quantity;?>.00</td>
								
								
								
							</tr>
							


							
							
						  </tbody>

						  <tfoot>
						  		<tr>
						  			<td colspan="4">Total With Vat </td>
						  			<td><?php echo $order_information->order_total; 	?></td>
						  		</tr>
						  </tfoot>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

			<div class="row-fluid sortable">
				<div class="box span6">
					<div class="box-header">
						<h2><i class="halflings-icon align-justify"></i><span class="break"></span>Customer Table</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table">
							  <thead>
								  <tr>
									  <th>First Name</th>
									  <th>Customer Address</th>
									  <th>Phone Number</th>
									  <th>Customer Email</th>
									                                         
								  </tr>
							  </thead>   
							  <tbody>
							  	
								<tr>
									<td><?php echo $customer_info->customer_first_name.' '.$customer_info->customer_last_name;?></td>
									<td class="center"><?php echo $customer_info->customer_address; ?></td>
									<td class="center"><?php echo $customer_info->customer_phone_number; ?></td>
									<td class="center"><?php echo $customer_info->customer_email_address; ?></td>
									                                      
								</tr>

							
								                                
							  </tbody>
						 </table>  
						 <div class="pagination pagination-centered">
						  <ul>
							<li><a href="#">Prev</a></li>
							<li class="active">
							  <a href="#">1</a>
							</li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">Next</a></li>
						  </ul>
						</div>     
					</div>
				</div><!--/span-->





				<!--
				/***********************************/
				/*   ****   Customer End  ***      */
				/***********************************/
				-->
				<div class="box span6">
					<div class="box-header">
						<h2><i class="halflings-icon align-justify"></i><span class="break"></span>Shipping Table</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped">
							  <thead>
								  <tr>
									  <th>Username</th>
									  <th>Shipping Address</th>
									  <th>Shipping PhoneNumber</th>
									  <th>Shipping Email</th>
									                                        
								  </tr>
							  </thead>   
							  <tbody>
								<tr>
									<td><?php echo $shipping_info->shipping_first_name.' '.$shipping_info->shipping_last_name;?></td>
									<td class="center"><?php echo $shipping_info->shipping_address; ?></td>
									<td class="center"><?php echo $shipping_info->shipping_phone_number; ?></td>
									<td class="center"><?php echo $shipping_info->shipping_email_address; ?></td>
									                                      
								</tr>
								                                
							  </tbody>
						 </table>  
						 <div class="pagination pagination-centered">
						  <ul>
							<li><a href="#">Prev</a></li>
							<li class="active">
							  <a href="#">1</a>
							</li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">Next</a></li>
						  </ul>
						</div>     
					</div>
				</div><!--/span-->
			</div><!--/row-->
			
			
			
		