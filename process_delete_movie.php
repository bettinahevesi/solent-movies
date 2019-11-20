<?php
// Include database file so that I can do database operations
include "database.php";


// Retrieve posted data
$movie_id = $_POST['movie_id'];
$name = $_POST['name'];
$storyline = $_POST['storyline'];
$release_date = $_POST['release_date'];
$run_time = $_POST['run_time'];

//delete entries from movie releted tables

// Update the storyline in the database
$movie_query = "DELETE FROM movies WHERE movie_id='$movie_id'";

$result = $conn->query($movie_query);

// Check if update was successful
if ($result != false) {
	header("Location: movies.php");
}
else {
	echo "<p>Error!</p>";
}
