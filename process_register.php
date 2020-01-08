<?php

// Include database file so that I can do database operations
include "database.php";

$a = $_POST["user_name"];
$b = $_POST["email"];
$c = $_POST["password"];

// code to add the name, email, password to database
$statement = $conn->prepare("INSERT INTO users(user_name,email,password) VALUES (?,?,?)");
$statement->bindParam(1,$a);
$statement->bindParam(2,$b);
$statement->bindParam(3,$c);
$statement->execute();


// Check if update was successful
	if ($statement!= false) {
		
		$user_id=$conn->lastInsertId();
		
		session_start();
		
		$_SESSION["user_id"]= $user_id;
		
		header("Location: profile.php");
	}
	else {
		echo "<p>Error!</p>";
	}

?>