<!-- 
<style>
	#msgNotification{
    color: green;
    height: 45px;
    width: 400px;
    background-color: #01437F;
}
</style> -->

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



	
	 
	 <h3    id="msgNotification"><?php
			$message = $this->session->userdata('message');
			if ($message) {
				echo $message;
				 $this->session->unset_userdata('message');
			}
		?></h3>
	
	
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
					<?php echo validation_errors(); ?>
						<form class="form-horizontal" action="<?php echo base_url();?>save-category" method="post">
						  <fieldset>


							<div class="control-group">
							  <label class="control-label" for="typeahead">Add Category </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead"  name="category_name" >
							  </div>
							</div>


						
      
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Category Description </label>
							  <div class="controls">
								<textarea style="width: 430px" class="cleditor" id="textarea2" rows="3"
								 name="category_description"></textarea>
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




<script type="text/javascript">
    
    $(document).ready(function(){
    	var myNotificationText = $('#msgNotification').text().length;
    	console.log(myNotificationText);
    	if(myNotificationText > 0){
    		$('#msgNotification').fadeOut(4000);
    	}
    	
    });
</script>
