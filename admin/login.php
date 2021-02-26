<?php
session_start();
$server = 'localhost';
$user = 'root';
$database = 'test1';
$password = '';

$connections = new mysqli($server,$user,$password,$database);
if($connections->connect_error) {
echo "error" . $connections->connect_error;
}
else{
	# code.in..
	if(isset($_POST['email'])&& isset($_POST['password'])){
	
	$email = $_POST['email'];
	$password = $_POST['password'];
		
	// $sql = "INSERT INTO `user` (`email`, `password`) VALUES ('$email', '$password')";
	// print_r($sql);
	
	
	
	$sql = "SELECT * from `user` WHERE `email` = '$email' AND `password` = '$password'";
	// print_r($sql);
	// die();
	
	 
$res = $connections->query($sql);
$res = $res->fetch_array();
print_r($res);
// die();

	 if(!empty($res)){
	 	header('location:http://localhost/html-bootstrap-master/admin/config.php');
	 }
else{
	header('location:http://localhost/html-bootstrap-master/admin/login.php');
}
}
if (isset($_GET['error'])) {
	echo $_GET['error'];
	# code...
}
}
?>
<form class="action" method="post">
	<label>email</label>
	<input type="email" name="email">
	<label>password</label>
	<input type="password" name="password">
	<button type="submit"> Submit</button>
</form>