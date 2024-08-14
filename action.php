<?php
	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$height = $_POST['height'];
	$weight = $_POST['weight'];
	$age = $_POST['age'];
	$package = $_POST['package'];
    $phone  = $_POST['phone'];
    $email = $_POST['email'];

// Create connection
$conn = new mysqli("localhost","root",'',"test");
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
echo '$names';
//Insert Record
$sql = "INSERT INTO customer VALUES ('$name', '$gender', $height, $weight, $age, '$package', $phone, '$email')";
if ($conn->query($sql) == TRUE) 
{
    echo "New record created successfully";
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>