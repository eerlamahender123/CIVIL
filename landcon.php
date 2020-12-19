<!DOCTYPE html>
<html lang="en">
  <head>
       <title>Choose Form</title>
	   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	   
	   <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   </head>
<style>

  * {
  box-sizing: border-box;
}

div.background {

  background: url(1.jpg) repeat;
  border: 1px solid black;
}

div.transbox {

  padding: 15px auto;
  width:100% auto;
  border: 2px solid black;
    opacity: 0.7 auto;
	height:50px auto;
	margin:10px auto;
	funt-family:'Droid Serif',serif
  background:#f8f8ff;

box-shadow:0 0 10px gray;
  filter: alpha(opacity=50); /* For IE8 and earlier */
}

/* Full-width input fields */
input[type=button]{
  width:16.3% ;
  height:30px ;
  padding: 10px ;
  margin: 2px auto;
  display: inline-yellow;
  border: yellow;
  border: 10%;
  border-radius:70px;
  ahover-color:white;
  box-shadow:0 0 10px yellow;

}
input[type=button]:focus{
  background-color: green;
  outline: none;
  
}	


/* table */
table {
colspan: 5px;
width: 50%;
padding: 8px 10px;
  border: 5%;
padding: 30px;
background-color: yellow;
width: 50%;
}

/* Full-width input fields */
input[type=texbox], input[type=int],input[type=password] {
  width: 50%;
  padding: 20px 15px;
  margin: 20px 0 22px 0;
  display: inline-block;
  border: 10%;
  background-image:url("logo.png");
  border-radius:70px;
  ahover-color:white;

}

input[type=texbox]:focus, input[type=int]:focus,input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}


background:C:\xampp\htdocs\1\logo.png;
}

/* Overwrite default styles of hr */
hr {
  border: 5px solid #f1f1f1;
  margin-bottom: 50px;
}

/* Set a style for the submit button */
.submit{
  background-color: #4CAF50;
  color: white;
  align: center;
  padding: 1px 6px;
  margin: 6px 0;
  border: blue;
  cursor: pointer;
  width: 20%;
  opacity: 1; 
  
   border-radius:70px;
  ahover-color:white;
}

.registerbtn:hover {
  opacity: 1;
}
  

/* Add a blue text color to links */
a {
  color: dodgerblue;
}




table, tr {
 border:5px solid ;
 /* call spacing */
 border-spacing:1px;
 }
 tr {
 /* call padding */
 padding:20px;
 }
 td {
 border:1px solid ;
 /* call spacing */
 border-spacing:1px;
 }
 td {
 /* call padding */
 padding:10px;
 }
body {
	background-image:url("I.jpg");
font-family: Arial, Helvetica, sans-serif;
  background-color: yellow;
  }
  * {
  box-sizing: border-box;
}

.btn {
  background-color: DodgerBlue;
  aline: center;
  border: none;
  color: white;
  padding: 15px 15px;
  font-size: 15px;
  cursor: pointer;
   border-radius:70px;
  width:16.3% ;
  height:40% ;
 
  margin: 2px auto;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
 }

</style>
<body>
    <center>
     <div class="contairer">
		<div class="row">
			<div class="col-md-12 nt-4">
				<div class="card">
					<div class="row">
							<div class="col-md-6">
								<form action="" method="POST">
								
								</form>
								</div>
							</div>
							<?php
$news = filter_input(INPUT_POST, 'news');
$num1 = filter_input(INPUT_POST, 'num1');
$num2 = filter_input(INPUT_POST, 'num2');
$num3 = filter_input(INPUT_POST, 'num3');
$num4 = filter_input(INPUT_POST, 'num4');
$total = filter_input(INPUT_POST, 'total');

if (!empty($news)){
if (!empty($num1)){
if (!empty($num2)){
if (!empty($num3)){
if (!empty($num4)){
if (!empty($total)){

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
$sql = "INSERT INTO land (news,num1,num2,num3,num4,total)
values ('$news','$num1','$num2','$num3','$num4','$total')";
if ($conn->query($sql)){
echo "<h1>New record is inserted sucessfully</h1>";
?>



<?php
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "<h1>news should not be empty</h1>";
die();
}
}
else{
echo "<h1>num1 should not be empty</h1>";
die();
}
}
else{
echo "<h1>num2 should not be empty</h1>";
die();
}
}
else{
echo "<h1>num3 should not be empty</h1>";
die();
}
}
else{
echo "<h1>num4 should not be empty</h1>";
die();
}
}

else{
 echo "<h1>Total should not be empty</h1>";
die();
}


?>

<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
	$total = filter_input(INPUT_POST, 'total');
	$news = filter_input(INPUT_POST, 'news');
	$total=$_POST['total'];
	$t=(string)$news;
	$news=$_POST['news'];	
	
	echo"$total$news";
}
?>
<?php
echo"<script>window.location='http://localhost/k/choose.php';</script>";
?>

