<?php
// Include database file so that I can do database operations
include "database.php";
session_start();


// Retrieve posted data
$movie_id = $_POST['movie_id'];
$review_text = $_POST['review_text'];
$user_id = $_POST['user_id'];
$rating = $_POST['rating'];


// Insert review and rate in the database
$q = " INSERT INTO reviews (review_text, movie_id, user_id, rating)  
VALUES (:review_text, :movie_id, :user_id, :rating)";

$q;

$movie_review_stmt = $conn->prepare($q);
$movie_review_stmt->bindParam(':review_text',$review_text);
$movie_review_stmt->bindParam(':movie_id',$movie_id);
$movie_review_stmt->bindParam(':user_id',$user_id);
$movie_review_stmt->bindParam(':rating',$rating);
$movie_review_stmt->execute();

$review_id = $conn->lastInsertId();


$movie = null;

if (isset ($_POST['id'])){
	$movie_id = (int) $_POST['id'];

$q = " INSERT INTO reviews (movie_id, user_id, review_id, rating)
VALUES (:movie_id,:user_id,:review_id,:rating)";

	$movie_review_stmt = $conn->prepare($q);
	$movie_review_stmt->bindParam(':movie_id',$movie_id);
	$movie_review_stmt->bindParam(':user_id',$user_id);
    $movie_review_stmt->bindParam(':review_id',$review_id);
    $movie_review_stmt->bindParam(':rating',$rating);
	$movie_review_stmt->execute();


// Check if update was successful,
	if ($movie_review_stmt != false) {
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