<?php
// Include database file so that I can do database operations
include "database.php";

// Retrieve posted datarf

echo $actor_name = $_POST['actor_name'];
echo $birth_date = $_POST['birth_date'];
echo $actor_story = $_POST['actor_story'];
echo $country = $_POST['country'];


// Update the actor in the database
$q = " INSERT INTO actors (actor_name, birth_date, actor_story, country)
VALUES (:actor_name, :birth_date, :actor_story, :country)";



$actor_stmt = $conn->prepare($q);
$actor_stmt->bindParam(':actor_name',$actor_name);
$actor_stmt->bindParam(':birth_date',$birth_date);
$actor_stmt->bindParam(':actor_story',$actor_story);
$actor_stmt->bindParam(':country',$country);
$actor_stmt->execute();

$actor_id = $conn->lastInsertId();




if (isset ($_POST['id'])){
	$movie_id = $_POST['id'];



	$movie_actor_stmt = $conn->prepare($q);
	$movie_actor_stmt->bindParam(':movie_id',$movie_id);
	$movie_actor_stmt->bindParam(':actor_id',$actor_id);
	$movie_actor_stmt->execute();


	// Check if update was succesdsffuvlmdk
	if ($movie_actor_stmt != false) {
	header("Location: movie-view-page.php?id=$movie_id");
	}
	else {
		echo "<p>Error!</p>";
	}
}
else {
		
	header("Location: actors.php?id=$actor_id");

}
?>