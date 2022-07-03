
<?php

$conn = mysqli_connect("localhost", "root", "", "Brainglow");

	//if(mysqli_connect_error())
	//	echo "Connection Error.";
	//else
	//	echo"<script>alert('Database Connection Successfully.')</script>";
//$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server

//$db = mysql_select_db("Brainglow", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$sql="insert into contactdetails(name, email, subject, message) values ('$name', '$email', '$subject', '$message')";
//echo("$sql");

if(mysqli_query($conn,$sql)){
//Insert Query of SQL

echo "<script>alert('Data Inserted successfully...!!')</script>";
include 'index.html';
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysql_close($conn); // Closing Connection with Server
?>
