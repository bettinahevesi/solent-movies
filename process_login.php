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
	echo $_SESSION["user_id"];

    // Redirect to the user profile page
    header ("Location: profile.php");
}
else
{
   // The wrong password was supplied!
    echo "Incorrect password!";
}
?>