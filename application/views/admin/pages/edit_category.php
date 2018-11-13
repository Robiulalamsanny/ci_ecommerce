<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="index.html">Home</a>
		<i class="icon-angle-right"></i> 
	</li>
	<li>
		<i class="icon-edit"></i>
		<a href="#">Forms</a>
	</li>
	<br>
	<h3 id="add_category" style="color: green">
		<?php
			$message = $this->session->userdata('message');
			if ($message) {
				echo $message;
				 $this->session->unset_userdata('message');
			}
		?>
	</h3>
</ul>


<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>

						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>

					</div>
					<div class="box-content">

						<form class="form-horizontal" action="<?php echo base_url();?>update-category" method="post">
						  <fieldset>


							<div class="control-group">
							  <label class="control-label" for="typeahead">Add Category </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead"  name="category_name" value=" <?php echo $category_info->category_name; ?> " >

								<input type="hidden" class="span6 typeahead" id="typeahead"  name="category_id" value=" <?php echo $category_info->category_id; ?> " >
							  </div>
							</div>


						
      
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Category Description </label>
							  <div class="controls">
								<textarea style="width: 430px" class="cleditor" id="textarea2" rows="3"
								 name="category_description"><?php echo $category_info->category_description; ?></textarea>
							  </div>
							</div>

							<div class="control-group">
								<label class="control-label" for="selectError">Publication Status</label>
								<div class="controls">
								  <select id="selectError" data-rel="chosen" name="publication_status">
									<option value="1">Published </option>
									<option value="0">Unpublished </option>
									
								  </select>
								</div>
							  </div>


							<div class="form-actions">
							  <button type="submit" id="submit" class="btn btn-primary">Save Category</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div>

<!-- <script>
$( "#submit" ).click(function() {
  $( "#add_category" ).fadeOut( "slow" );
});
</script> -->