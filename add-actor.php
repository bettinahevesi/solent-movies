<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Add Actor</title>
	  
	 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	 <link rel="stylesheet" type="text/css" href="style/style.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script><script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

</head>
<body>
<!-- HEADER -->
<?php include 'header.php';?>

    <div class="add-movie-box">
        <h1>Add Actor</h1>
            <form action="process_add_actor.php" method="POST">
			<input type="hidden" name="actor_id" value="<?php echo $actor_id; ?>" />
            <p>Actor name</p>
            <input type="text" name="actor_name" value="<?php echo $record['actor_name']; ?>">
            <p>Birth date</p>
			<input type="text" name="birth_date" value="<?php echo $record['birth_date']; ?>">
			<p>Country </p>
			<input type="text" name="country"  value="<?php echo $record['country']; ?>">
			<p>Story </p><br>
			<input type="text" name="actor_story"  value="<?php echo $record['actor_story']; ?>">
			<p>Photo</p><br>
            <input type="file" name="pic" accept="image/*"> </br>
			
            <input  class="btn btn-danger" type="submit"/>
               
            </form>
</body>