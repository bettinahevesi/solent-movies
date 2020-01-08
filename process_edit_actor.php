<?php
// Include database file so that I can do database operations
include "database.php";

// Retrieve posted data
$actor_id = addslashes($_POST['actor_id']);
$actor_name = addslashes($_POST['actor_name']);
$birth_date = addslashes($_POST['birth_date']);
$actor_story = addslashes($_POST['actor_story']);
$country = addslashes($_POST['country']);



// Update the actor in the database
$q = "UPDATE actors 
		SET actor_name='$actor_name',
			birth_date='$birth_date', 
			actor_story='$actor_story',
            country='$country'			
		WHERE actor_id='$actor_id'";

		$result = $conn->query($q);

// Check if update was successful
if ($result != false) {
	header("Location: view-actor.php?id=$actor_id");
}
else {
	echo "<p>Error!</p>";
}
?>