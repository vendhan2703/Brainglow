
<?php

$conn = mysqli_connect("sql213.epizy.com", "epiz_32095823", "G0KG2tXNMslrkB", "epiz_32095823_Brainglowacademy");

	//if(mysqli_connect_error())
	//	echo "Connection Error.";
	//else
	//	echo"<script>alert('Database Connection Successfully.')</script>";
//$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server

//$db = mysql_select_db("Brainglow", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ 
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$sql="insert into contactdetails(name, email, subject, message) values ('$name', '$email', '$subject', '$message')";

a
if(mysqli_query($conn,$sql)){


echo "<script>alert('Data Inserted successfully...!!')</script>";
include 'index.html';
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysql_close($conn); 
?>