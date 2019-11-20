<?php
// Include database file so that I can do database operations
include "database.php";

// Retrieve posted data

echo $review_text = $_POST['review_text'];



// Update the actor in the databasem
echo $q = " INSERT INTO reviews (review_text)
VALUES (:review_text)";


$review_stmt = $conn->prepare($q);
$review_stmt->bindParam(':review_text',$review_text);
$review_stmt->execute();

$review_id = $conn->lastInsertId();




if (isset ($_POST['id'])){
	$movie_id = $_POST['id'];


	$movie_review_stmt = $conn->prepare($q);
	$movie_review_stmt->bindParam(':movie_id',$movie_id);
	$movie_review_stmt->bindParam(':user_id',$user_id);

	$movie_review_stmt->execute();


	// Check if update was successful,
	if ($movie_review_stmt != false) {
		//header("Location: movie-view-page.php?id=$movie_id");
	}
	else {
		echo "<p>Error!</p>";
	}
}
else {
		
	//header("Location: movie-view-page.php?id=$movie_id");

}
?>