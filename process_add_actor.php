<?php
// Include database file so that I can do database operations
include "database.php";
session_start();

// Retrieve posted data
$actor_name = $_POST['actor_name'];
$birth_date = $_POST['birth_date'];
$actor_story = $_POST['actor_story'];
$country = $_POST['country'];

// 
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
	$actor_id = $_POST['id'];

	$actor_stmt = $conn->prepare($q);
	$actor_stmt->bindParam(':actor_id',$actor_id);
	$actor_stmt->execute();

// Check if update was succesdsffuvlmdk
	if ($actor_stmt != false) {
	header("Location: view-actor.php?id=$actor_id");
	}
	else {
		echo "<p>Error!</p>";
	}
    }
    else {
	header("Location: view-actor.php?id=$actor_id");
}
?>