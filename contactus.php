<?php
$Name = $_POST['name'];
$Email = $_POST['email'];
$Subject = $_POST['subject'];
$Message = $_POST['message'];




$database = 'booking facilities';

/*Database connection*/
$conn = new mysqli('localhost','root','','booking facilities');
	if($conn->connect_error){
   
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into messages(name, email, subject, message) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $Name, $Email, $Subject, $Message);
		$stmt->execute();
    
		$stmt->close(); 
		$conn->close();
    
	}
    
?>
