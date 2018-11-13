<!-- <script>
	function checkDelete()
	{
		var chk = confirm("Are you sure to delete this ? ");
		if (chk) 
		{
			return true;
		} 
		else
		{
			return false;
		}

	}
</script> -->


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
						<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
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
								  <th>Customer Name</th>
								  <th>Customer PhoneNumber</th>
								  <th>Shiping Name</th>
								  <th>Shiping PhoneNumber</th>
								  <th>Product Name</th>
								  <th>View Details</th>
							  </tr>
						  </thead>   
						  <tbody>

						  <?php foreach ($all_invoice as  $v_invoice) {
						 ?>
							<tr>
								
								<td class="center"><?php echo $v_invoice->order_id; ?></td>
								<td class="center"><?php echo $v_invoice->customer_first_name; ?></td>
								<td class="center"><?php echo $v_invoice->customer_phone_number; ?></td>
								<td class="center"><?php echo $v_invoice->shipping_first_name; ?></td>
								<td class="center"><?php echo $v_invoice->shipping_phone_number; ?></td>
								<td class="center"><?php echo $v_invoice->product_name; ?></td>
								<td class="center"><a href="<?php base_url() ?>invoice/view_invoice/<?php echo $v_invoice->order_id; ?>">View Details</a></td>
								
							</tr>
							<?php } ?>
							
					
							
							
						
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->