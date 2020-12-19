<?php
$hall = filter_input(INPUT_POST, 'hall');
$bed = filter_input(INPUT_POST, 'bed');
$kit = filter_input(INPUT_POST, 'kit');
$bot = filter_input(INPUT_POST, 'bot');
$god = filter_input(INPUT_POST, 'god');
$flor = filter_input(INPUT_POST, 'flor');

if (!empty($hall)){
if (!empty($bed)){
if (!empty($kit)){
if (!empty($bot)){
if (!empty($god)){
if (!empty($flor)){

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "m";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO house (hall,bed,kit,bot,god,flor)
values ('$hall','$bed','$kit','$bot','$god','$flor')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "hall should not be empty";
die();
}
}
else{
echo "bed should not be empty";
die();
}
}
else{
echo "kicthen should not be empty";
die();
}
}
else{
echo "both should not be empty";
die();
}
}
else{
echo "god should not be empty";
die();
}
}
else{
echo "flor should not be empty";
die();
}	
?>
