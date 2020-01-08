<?php


// Include database file so that I can do database operations
include "database.php";

session_start();

$un = $_POST["user_name"];
$pw = $_POST["password"];

$q="SELECT * FROM users WHERE user_name='$un' and password='$pw'";
$results = $conn->query($q);

if($row=$results->fetch())
{
	
    $_SESSION["user_id"] = $row["user_id"];
	header ("Location: profile.php");

    // Redirect to the user profile page
 
}
else
{
   // The wrong password was supplied!
    echo "Incorrect username or password!";
}
?>