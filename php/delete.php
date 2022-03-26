<?php
//including the database connection file
$servername = "localhost";//Server Name
$username = "avk";//Server User Name
$password = "avkproj";//Server Password
$dbname = "web_dev_internship";//Database Name

//Create DB Connection
$connect = mysqli_connect($servername,$username,$password,$dbname);


//getting id of the data from url
$books = $_GET['books'];

//deleting the row from table
$res = "DELETE FROM wishlist WHERE books='$books'";
if($connect->query($res) == true){
	header("Location:wishlist.php");
}

//redirecting to the display page (index.php in our case)

?>
