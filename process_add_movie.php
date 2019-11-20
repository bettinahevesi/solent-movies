<?php
// Include database file so that I can do database operationsk
include "database.php";
session_start();

// Retrieve posted data
$name = addslashes($_POST['name']);
$storyline = addslashes($_POST['storyline']);
$release_date = addslashes($_POST['release_date']);
$run_time = addslashes($_POST['run_time']);

// Update the movies in the databased
echo $q = " INSERT INTO movies (name, storyline, release_date, run_time)
VALUES ('$name', '$storyline', '$release_date', '$run_time')";
$movie_stmt = $conn->prepare($q);
$movie_stmt->bindParam('name',$name);
$movie_stmt->bindParam('storyline',$storyline);
$movie_stmt->bindParam('release_date',$release_date);
$movie_stmt->bindParam('run_time',$run_time);
$movie_stmt->execute();


	// Check if update was successmm
	if ($movie_stmt != false) {
		
	$movie_id=$conn->lastInsertId();

    $history_date = date("Y/m/d");
	$history_action = "create";
	$user_id = $_SESSION ["user_id"];

	
	$q = "INSERT INTO history (movie_id, history_date, history_action, user_id ) VALUES ('$movie_id', '$history_date', '$history_action', '$user_id')"; 
	$result = $conn->query($q);
	

	header("Location: movie-view-page.php?id=$movie_id");
	}
	else {
		echo "<p>Error!</p>";
	}
?>