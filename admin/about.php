<?php include('../connection.php');?>
<div class="content-wrapper">
	<div class="content">
		<div class="container-fluid">
			<!--<div class="card card-primary">-->
				<div class="card-header">
					<h3 class="card-title">Edit About Us</h3>
				</div>
		  <!-- /.card-header -->
		  <!-- form start -->
          <form action="aboutform.php" method="post">
					<div class="card-body">
					  <div class="form-group">
                        <label for="exampleInputEmail1">Title 1</label>
                        <input type="text" name="title" value="<?php print_r($title);?>">
                    </div>
                    <div class="form-group">
                    <label>Subtitle</label>					
                    <input type="text" name="subtitle" value="<?php print_r($subtittle);?>">				
					</div>

                   
                    <div class="form-group">
                    <label>Description</label>
	<input type="text" name="description" value="<?php print_r($description);?>">				
                    </div>
                    
                    <div class="form-group">
                    <label>Button Text</label>
	<input type="text" name="btntext" value="<?php print_r($button);?>">
					</div>

                    <div class="form-group">
                    <label>Image</label>
	<input type="text" name="imag" value="<?php print_r($image);?>">
                    </div>
                    <div class="card-footer">
					  <button type="submit" class="btn btn-primary">Submit</button>
					</div>
                    </div>
				</form>
			
		</div>
	</div>
</div>  

