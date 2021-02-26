
<?php
$servername = 'localhost';
$username = 'root';
$database = 'test1';
$password = '';

$connections = new mysqli($servername,$username,$password,$database);
if($connections->connect_error) {
echo "error" . $connections->connect_error;
}
else{
	// global $connections;
	$title = $_POST['title'];
	$subtittle = $_POST['subtitle'];
	$description = $_POST['description'];
	$btntext = $_POST['btntext'];
	$image = $_POST['imag'];


	// $sql = "INSERT INTO `about`(`id`,`title`,`subtitle`,`button`,`image`) VALUES ('$id', '$title', '$subtitle','$btntext','$image')";
	$sql = "UPDATE `about` SET `id`='1',`title`='$title',`subtittle`='$subtittle',`description`='$description',`button`='$btntext',`image`='$image' WHERE id=1";
	// print_r($title);
	// print_r($subtittle);
	// print_r($description);
	// print_r($btntext);
	// print_r($image);
	// print_r($connections);
	// $connections;
	$sucess = $connections->query($sql);
	if($sucess){
		echo "Data Inserted Into About Table";
	}
	else{
		echo "error: at insertion 123456";
	}
	die();

}

?>
