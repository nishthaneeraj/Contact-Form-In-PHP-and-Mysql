<?php 

// Input Values
    $userName = $_POST['name'];
    $userEmail = $_POST['email'];
    $messageSubject = $_POST['subject'];
    $message = $_POST['message'];

// Setting up the server
$servername = "localhost";
$username = "root";
$password = "";
$database = "contact form"; 

// Creating Database Connection
$conn = mysqli_connect($servername, $username, $password, $database);
   
if(!$conn){
    // die('failed to connect'. mysqli_connect_error());
}
else{
    // echo"connection succesfull!";
}

$sql = "INSERT INTO `contact` (`Name`, `Email`, `Subject`, `Message`, `Timestamp`) VALUES ('$userName','$userEmail', '$messageSubject', '$message', current_timestamp())";

if($conn->query($sql) == true){
    // echo "sucessfully inserted";
}
else{
    // echo "ERROR: $sql <br> $conn->error";
}

$conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .container{
            background:white;
        }
    </style>
</head>
<body>
    <div class="container">
    <h1 class="head">Thanks For Submitting The Form</h1>
    </div>
</body>
</html>