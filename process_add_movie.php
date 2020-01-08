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
$q = " INSERT INTO movies (name, storyline, release_date, run_time)
VALUES ('$name', '$storyline', '$release_date', '$run_time')";
$movie_stmt = $conn->prepare($q);
$movie_stmt->bindParam('name',$name);
$movie_stmt->bindParam('storyline',$storyline);
$movie_stmt->bindParam('release_date',$release_date);
$movie_stmt->bindParam('run_time',$run_time);
$movie_stmt->execute();

	$movie_id = $conn->lastInsertId();




if (isset ($_POST['id'])){
	$movie_id = $_POST['id'];



	$movie_stmt = $conn->prepare($q);
	$movie_stmt->bindParam(':movie_id',$movie_id);
	$movie_stmt->execute();


	// Check if update was succesdsffuvlmdk
	if ($movie_stmt != false) {
	header("Location: movie-view-page.php?id=$movie_id");
	}
	else {
		echo "<p>Error!</p>";
	}
}
else {
	
	header("Location: movie-view-page.php?id=$movie_id");

}
?>