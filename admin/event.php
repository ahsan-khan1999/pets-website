
<?php include('conn.php');?>
<?php
$id=$_POST['id'];
$image = $_POST['image'];
$date = $_POST['date'];
$title = $_POST['title'];
$subtitle = $_POST['subtitle'];

$sql = "UPDATE `event` SET `id`='$id',`image`='$image',`date`='$date',`title`='$title', `subtitle`='$subtitle' WHERE id='$id'";
// $sql = "INSERT INTO `event`(`id`,`image`,`date`,`title`,`subtitle`) VALUES ('$id', '$image', '$date','$title','$subtitle')";
$sucess = $connections->query($sql);
	if($sucess){
		echo "Data Inserted Into About Table";
	}
	else{
		echo "error: at insertion 123456";
	}
    

 
										
    



?>

