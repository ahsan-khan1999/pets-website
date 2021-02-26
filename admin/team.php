<?php include('conn.php'); ?>
<?php include('../connection.php'); ?>

    
    <div class="content-wrapper">
	<div class="content">
		<div class="container-fluid">
			<!--<div class="card card-primary">-->
				<div class="card-header">
					<h3 class="card-title">Edit Team Section</h3>
				</div>
		  <!-- /.card-header -->
		  <!-- form start -->
          <form action="team.php" method="post">
					<div class="card-body">
					  <div class="form-group">
                      <label>ID</label>
	<input type="text" name="id" value="<?php print_r($id1);?>">
                    </div>
                    <div class="form-group">
                    <label>Name</label>
	<input type="text" name="name" value="<?php print_r($name1);?>">				
					</div>

                   
                    <div class="form-group">
                    <label>Image</label>
	<input type="text" name="imag" value="<?php print_r($image1);?>">			
                    </div>
                    
                    <div class="form-group">
                    <label>Description</label>
	<input type="text" name="description" value="<?php print_r($description1);?>">
					</div>

                 
                    <div class="card-footer">
					  <button type="submit" class="btn btn-primary">Submit</button>
					</div>
                    </div>
				</form>
			
		</div>
	</div>
</div>  







<?php
$id=$_POST['id'];
$name = $_POST['name'];
$image = $_POST['imag'];
$description = $_POST['description'];
if(($id=="") || ($name=="") || ($image=="") || ($description =="")){
	die();
}
else{
	
	
	$sql = "UPDATE `team` SET `id`='$id',`name`='$name',`image`='$image',`description`='$description' WHERE id='$id'";
	$sucess = $connections->query($sql);
		if($sucess){
			echo "Data Inserted Into About Table";
		}
		else{
			echo "error: at insertion 123456";
		}
		die();
	
}
    

//     $sql = "SELECT * FROM `team`";
// 		$result = $connections->query($sql);


// 						if ($result->num_rows > 0) {
//   // output data of each row
//   							while($row = $result->fetch_assoc()) {
//                             // echo "Title: " . $row["title"] . "Description " . $row["description"]. "<br>";
//                             $id = $row['id'];
// 							$name = $row["name"];
// 							$image=$row['image'];
// 							$description = $row["description"];
// 							print_r($id);

//                               }
//                             }

?>