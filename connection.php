 <?php
	$servername = "localhost";
	
	$username = "root";
	$password = "";
	$database="test1";

	$title = '';
	$description = '';
	

// Create connection
	$conn = new mysqli($servername, $username, $password, $database);
// Check connection
	if ($conn->connect_error) {
  	die("Connection failed: " . $conn->connect_error);
	}




	else{
		
	
	// echo "Database connected successfully";	


	// $email = $_POST['email'];
	// $fname = $_POST['fname'];
	// $city = $_POST['city'];
	// echo "Database connected successfully";	

	// $sql = "INSERT INTO `contact` (`email`, `fname`, `city`) VALUES ('$email', '$fname', '$city')";	
	// echo "Database connected successfully";	


// insertion of contact and adoptform starts here !
	$action = $_REQUEST['action'];
		
	if($action === 'contact'){

	$email = $_POST['email'];
	$fname = $_POST['fname'];
	$city = $_POST['city'];
	if(($email=="") || ($fname=="") || ($city=="")){

	}
	else{
		$sql = "INSERT INTO `contact` (`email`, `fname`, `city`) VALUES ('$email', '$fname', '$city')";

		if ($conn->query($sql)) {
		  echo "New record created successfully";
		}
		else {
		  echo "Error: ";
		}
	}
	
	}	
	else if($_POST['action'] == 'adoptform'){

	$email = $_POST['email'];
	$fname = $_POST['fname'];
	$city = $_POST['city'];
	$cnum = $_POST['cnum'];
	$yes = $_POST['yes'];
	$no = $_POST['no'];
	$des = $_POST['des'];

	// print_r($yes);

	$sql = "INSERT INTO `adopt` (`email`, `fname`, `city`,`cnum`,`yes`,`no`,`des`) VALUES ('$email', '$fname', '$city','$cnum','$yes','$no','$des')";
	
	if($conn->query($sql)){
		echo "Data Inserted Into Adopt Table";

	}
	else{
		echo "error: ";		
	}


// insertion of contact and adoptform ends here !

		
    					
  }
else{

}

	}

	$sql = "SELECT * FROM `about`";
	$result = $conn->query($sql);
  
  
					if ($result->num_rows > 0) {
  // output data of each row
						  while($row = $result->fetch_assoc()) {
						// echo "Title: " . $row["title"] . "Description " . $row["description"]. "<br>";
						$title = $row["title"];
						$subtittle=$row['subtittle'];
						$description = $row["description"];
						$button = $row['button'];
						$image = $row['image'];

						  }}

						// if($result){
						// 		echo "query executed";
						// 		for ($i = 0; $i < fetch_row($result); ++$i){
      //    							$line = fetch_row($result);
      //    							print( "$line[0] - $line[1]\n");
     	// 						}
						// 		// print_r($result);
						// }
						// else{
						// 	echo "query not executed";
						// }
	

	// if ($conn->query($sql)) {
 //  	echo "New record created successfully";
	// }



	// $sql =  "SELECT ALL email from `adopt`";
	// $result=array();
	// $a = array();
	// $result = $conn->query($sql);
	// // $result = $conn->query($sql);
	// // $arra = mysqli_fetch_array();
	// print_r($result);
	// while ($row = $result -> fetch_row()) {
	// 	// $a = $result -> fetch_row();
	// 	// $email = $_POST['email']
 //    printf ("%s\n", $row[0]);

    // if(){
    // 	echo "unable to post this this entry ";

    // }
 
  
  




	// $row = $result -> fetch_array(MYSQLI_ASSOC);
	// mysql_num_rows($row);
	// $row = $result -> fetch_array(MYSQLI_ASSOC);
	// $row = $result -> fetch_array(MYSQLI_ASSOC);
	// print_r(count($row));
	// $row = $result -> fetch_array();
	// printf ("%s\n", $row["email"]);
	// printf ("%s\n", $row["email"]);
// $i=0;
// 	for ($i=0;$i<= count($))

	

		// echo "Data Inserted : ";
// with insertion	// }
	
	
$q1 = "SELECT * FROM `team` WHERE id='1'";
$result1 = $conn->query($q1);
if ($result1->num_rows > 0) {
	// output data of each row
								while($row = $result1->fetch_assoc()) {
					// echo "Title: " . $row["title"] . "Description " . $row["description"]. "<br>";
					$id1 = $row['id'];
					$name1 = $row["name"];
					$image1=$row['image'];
					$description1 = $row["description"];

					// echo(name1);
								}
							}
					// print_r($id);



					$q2 = "SELECT * FROM `team` WHERE id='2'";
					$result2 = $conn->query($q2);
					if ($result2->num_rows > 0) {
						// output data of each row
													while($row = $result2->fetch_assoc()) {
										// echo "Title: " . $row["title"] . "Description " . $row["description"]. "<br>";
										$id2 = $row['id'];
										$name2 = $row["name"];
										$image2=$row['image'];
										$description2 = $row["description"];
					
										// echo(name1);
													}
												}
										// print_r($id);
										$q3 = "SELECT * FROM `team` WHERE id='3'";
										$result3 = $conn->query($q3);
										if ($result3->num_rows > 0) {
											// output data of each row
																		while($row = $result3->fetch_assoc()) {
															// echo "Title: " . $row["title"] . "Description " . $row["description"]. "<br>";
															$id3 = $row['id'];
															$name3 = $row["name"];
															$image3=$row['image'];
															$description3 = $row["description"];
										
															// echo(name1);
																		}
																	}
										


	// event start here


	$q1 = "SELECT * FROM `event` WHERE id='1'";
	$result1 = $conn->query($q1);
	if ($result1->num_rows > 0) {
		// output data of each row
									while($row = $result1->fetch_assoc()) {
						// echo "Title: " . $row["title"] . "Description " . $row["description"]. "<br>";
						$id_event1 = $row['id'];
						$image_event1 = $row["image"];
						$date_event1=$row['date'];
						$title_event1 = $row["title"];
						$subtitle_event1 = $row["subtitle"];
						// print_r($title1);
	
						// echo(name1);
									}
								}
						// print_r($id);
	
	
	
						$q2 = "SELECT * FROM `event` WHERE id='2'";
						$result2 = $conn->query($q2);
						if ($result2->num_rows > 0) {
							// output data of each row
														while($row = $result2->fetch_assoc()) {
											// echo "Title: " . $row["title"] . "Description " . $row["description"]. "<br>";
											$id_event2 = $row['id'];
										$image_event2 = $row["image"];
						$date_event2=$row['date'];
						$title_event2 = $row["title"];
						$subtitle_event2 = $row["subtitle"];
						
											// echo(name1);
														}
													}
											// print_r($id);
											$q3 = "SELECT * FROM `event` WHERE id='3'";
											$result3 = $conn->query($q3);
											if ($result3->num_rows > 0) {
												// output data of each row
																			while($row = $result3->fetch_assoc()) {
																// echo "Title: " . $row["title"] . "Description " . $row["description"]. "<br>";
																$id_event3 = $row['id'];
																$image_event3 = $row["image"];
												$date_event3=$row['date'];
												$title_event3 = $row["title"];
												$subtitle_event3 = $row["subtitle"];
												
											
																// echo(name1);
																			}
																		}


	
																												













	// event end here
					

	$conn->close();


?>