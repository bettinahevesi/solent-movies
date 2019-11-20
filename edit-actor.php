<!DOCTYPE html>
<html>
<head>

</head>
<body>


    <div class="add-movie-box">
        <h1>Edit Actor</h1>
		<form action="process_edit_actor.php" method="POST">
        <input type="hidden" name="actor_id" value="<?php echo $actor_id; ?>" />

            <p>Actor name</p><br>
            <input type="text" name="actor_name"  value="<?php echo $record['actor_name']; ?>">
            <p>Birth date</p><br>
			<input type="text" name="birth_date" value="<?php echo $record['birth_date']; ?>">
			<p>Country </p><br>
			<input type="text" name="country"  value="<?php echo $record['country']; ?>">
			<p>Story </p><br>
			<input type="text" name="actor_story"  value="<?php echo $record['actor_story']; ?>">
			<p>Photo</p><br>
            <input type="file" name="pic" accept="image/*"> </br>
            <button type="button" class="btn btn-danger">Submit</button>
               
            </form>
		
</body>