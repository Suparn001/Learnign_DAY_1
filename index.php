<?php
$insert = false;
if(isset($_POST['name'])){
$server = "localhost";
$username = "phpmyadmin";
$password ="";
$database = "z_trip"; // Add your database name

// Create connection
$con = mysqli_connect($server, $username, $password, $database);

// Check connection
if(!$con){
    die("Connection to this database failed due to " . mysqli_connect_error());
}

// echo "Server is connected to the database";

$name =  $_POST['name'];
$age =$_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$Other_Information = $_POST['Other_Information'];

$sql = "INSERT INTO `z_trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `address`, `Other_Information`,`dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$address', '$Other_Information',current_timestamp())";

if ($con->query($sql) == TRUE) {

$insert = true;
   // echo "Successfully inserted";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="zap.jpg" alt="ZAPBUILD">
    <div class="container">
            <h1>Welcome to ZAPBUILD Mountain Trip</h1>
            <p>Enter your details to confirm your participation in the Trip</p>
<?php
if($insert == true){
    echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the Zapbuild trip</p>";
}
?>

<form action = "index.php" method="post">
<input type="text" name = "name" id = "name" placeholder = "Enter Your name">
<input type="text" name = "age" id = "age" placeholder = "Enter Your age">
<input type="text" name = "gender" id = "gender" placeholder = "Enter Your gender">
<input type="text" name = "email" id = "email" placeholder = "Enter Your email">
<input type="text" name  = "phone" id = "phone" placeholder = "Enter Your phone">
<input type="text" name  = "address" id = "address" placeholder = "Enter Your address">
<textarea name="Other_Information" id="other" cols="30" rows="10" placeholder="Enter more information"></textarea>
<button class="btn">Submit</button>
</form>
    </div>
</body>
</html>

  