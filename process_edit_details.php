<?php
// Include database file so that I can do database operations
include "database.php";
session_start();


// Retrieve posted data
$movie_id = addslashes($_POST['movie_id']);
$name = addslashes($_POST['name']);
$release_date = addslashes($_POST['release_date']);
$storyline = addslashes($_POST['storyline']);
$run_time = addslashes($_POST['run_time']);

// Update the storyline in the databasekkm
$q = "UPDATE movies SET release_date='$release_date', name='$name', storyline='$storyline',run_time='$run_time' WHERE movie_id='$movie_id'";
$result = $conn->query($q);

// Check if update was successful
if ($result != false) {
	
	$history_date = date("Y/m/d h:i:s");
	$history_action = "update";
	$user_id = $_SESSION ["user_id"];
	
	$q = "INSERT INTO history (movie_id, history_date, history_action, user_id ) VALUES ('$movie_id', '$history_date', '$history_action', '$user_id')"; 
	$result = $conn->query($q);
	
	header("Location: movie-view-page.php?id=$movie_id");
}
else {
	echo "<p>Error!</p>";
}
?>