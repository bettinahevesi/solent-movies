<?php  

include('database.php');

// retrieve movie id


// get movie data
$records = $conn->query( "SELECT * FROM movies" );


?>

<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Solent Movies</title> 
	  
	 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" type="text/css" href="style/style.css">
	 <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script><script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

  <style>
   body{background:white;}
   .btn-danger{margin-bottom:10px; border-radius:5px; background-color:red;}

  </style>
 
</head>
<body>
<!-- HEADER -->
<?php include 'header.php';?>	
	 

	<div class="movies-main">
<!-- MOVIES GALLERY -->
    
	
       <div class="row" id="row1">
<!--ROW 1 MOVIjE 1 -->   
<?php foreach ($records as $record){ ?> 
        <div class="col-sm-3">
	     <div class="image-box">
	       <img src="images/<?php echo $record['movie_album']; ?>" class="img-fluid"> 
		   <div class="overlay">
           <div class="content">
		   <a href="movie-view-page.php?id=<?php echo $record['movie_id']; ?>">Read more</a>
           </div>
           </div>
         </div>
        </div> 
<?php } ?>
		

</div>
	
<?php

// Test that the authentication session variable existsmm
if ( isset ($_SESSION["user_id"]))
{
    ?>
  		<div class="row" id="row">
		<div class="col-sm-12" align="right">
		<a href="movie-add.php?id=<?php echo $_GET['id'] ?>"  class="btn btn-danger" type="submit"  >Add Movie</a>
		</div>
		</div>	
	<?php
}
?>
	 
<!-- Modal 4-->
<div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Movie</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<table>
<form action="process_edit_title.php" method="POST">
<input type="hidden" name="movie_id" value="<?php echo $movie_id; ?>" />
  <tr>
    <td>Enter title:</td>
     <td><input name="name" type="text" value="<?php echo $record['name']; ?>"></td>

  </tr>
 </form>
  <tr>
    <td>Select genres:</td>
    <td> <select name="genres">
    <option value="drama">Drama</option>
    <option value="thriller">Thriller</option>
    <option value="comedy">Comedy</option>
    <option value="fantasy">Fantasy</option>
	<option value="scifi">Sci-fi</option>
	<option value="horror">Horror</option>
  </select></td>
  </tr>
<form action="process_edit_storyline.php" method="POST">
<input type="hidden" name="movie_id" value="<?php echo $movie_id; ?>" />
  <tr>
    <td>Enter storyline:</td>
     <td><textarea name="storyline" style="width:200px; height:80px;"><?php echo $record['storyline']; ?></textarea></td>
  </tr>
</form>
<form action="process_edit_details.php" method="POST">
<input type="hidden" name="movie_id" value="<?php echo $movie_id; ?>" />

  <tr>
    <td>Enter release date:</td>
    <td><input name="release_date" type="text"‎ value="<?php echo $record['release_date']; ?>"></td>
  </tr>
    <tr>
    <td>Enter run time:</td>
    <td><input name="run_time" type="text" value="<?php echo $record['run_time']; ?>"></td>
  </tr>
 
<<tr>
    <td>Enter director name</td>
    <td><input name="director_name" type="text" value="<?php echo $record['director_name']; ?>"></td>
  </tr>
  
      <tr>
    <td>Upload Cover photo:</td>
    <td><input name="cover-img" type="file" accept="image/*"> value="<?php echo $record['cover_img']; ?>"></td>
  </tr>
  
      <td>Enter Trailer :</td>
    <td><input name="trailer" type="media_type"  accept="image/*"> value="<?php echo $record['cover_img']; ?>"></td>
  </tr>
  
    </form>
</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-danger"></input>
      </div>
	  </form>
    </div>
  </div>
</div>
	 



<!-- FOOTER -->
<div class="footer">
<div="betti">
 Designed and built with all the love in the world by Betti
</div>
</div>
</footer>
 
    </body>
</html>