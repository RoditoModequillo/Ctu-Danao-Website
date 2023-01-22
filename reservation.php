<?php
$Name = $_POST['name'];
$Email = $_POST['email'];
$Phone_Number = $_POST['number'];
$Checkin = $_POST['checkin'];
$Checkout = $_POST['checkout'];
$Facilities = $_POST['facilities'];




$database = 'booking facilities';

/*Database connection*/
$conn = new mysqli('localhost','root','','booking facilities');
	if($conn->connect_error){
   
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into reservation(name, email, number, checkin, checkout, facilities) values(?, ?, ?, ?, ?,?)");
		$stmt->bind_param("ssisss", $Name, $Email, $Phone_Number, $Checkin, $Checkout, $Facilities);
		$stmt->execute();
        session_start();
            
        session_regenerate_id();
        
        $_SESSION["user_id"] = $user["id"];
        
        header("Location: indexxxx.html");
		$stmt->close(); 
		$conn->close();
    
	}
    
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Student Activity Center</title>
    <!--Font awesome CDN-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <main>
        <div class="hero">
            <div class="container">
                <div class="main-heading">
                    <h1 class="title"> Successfully Booked! </h1>
            
                </div>
                <a href="index.html" class="btn btn-gradient"> Return Home
                    <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                </a>
            </div>
        </div>
		</html>
