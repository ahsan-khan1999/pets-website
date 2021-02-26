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
    echo "DB connected";
}