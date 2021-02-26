<?php include('../connection.php');?>
<div class="content-wrapper">
	<div class="content">
		<div class="container-fluid">
			<!--<div class="card card-primary">-->
				<div class="card-header">
					<h3 class="card-title">Edit Events</h3>
				</div>
		  <!-- /.card-header -->
		  <!-- form start -->
          <form action="event.php" method="post">
					<div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">ID</label>
                        <input type="text" name="id" value="<?php print_r($id_event1);?>">
                    </div>
					  <div class="form-group">
                        <label for="exampleInputEmail1">Image</label>
                        <input type="text" name="image" value="<?php print_r($image_event1);?>">
                    </div>
                    <div class="form-group">
                    <label>Date</label>					
                    <input type="date" name="date" value="<?php print_r($date_event1);?>">				
					</div>

                   
                    <div class="form-group">
                    <label>Title</label>
	<input type="text" name="title" value="<?php print_r($title_event1);?>">				
                    </div>
                    
                    <div class="form-group">
                    <label>Subtitle</label>
	<input type="text" name="subtitle" value="<?php print_r($subtitle_event1);?>">
					</div>

                    
                    <div class="card-footer">
					  <button type="submit" class="btn btn-primary">Submit</button>
					</div>
                    </div>
				</form>
			
		</div>
	</div>
</div>  
