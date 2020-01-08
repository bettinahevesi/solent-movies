<?php 
	session_start();
?>

<?php  
//connect to database
include('database.php');

// get movie data
$records = $conn->query( "SELECT * FROM movies" );
?>

<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Movies</title> 
	  
	 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" type="text/css" href="style/style.css">
	 <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script><script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
	  <link rel="icon" href="images/solentmovies-logo.png">

<style>
body{
   background:white;
}

.btn-danger {
   margin-bottom:10px;
}
</style>
 
</head>

<body>
<!-- HEADER -->
<?php include 'header.php';?>	
	 
<div class="movies-main">
<!-- MOVIES GALLERY -->
    
<div class="row" id="row1">

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

// Test that the authentication session variable exists
if ( isset ($_SESSION["user_id"]))
{
    ?>
  		<div class="row" id="row">
		<div class="col-sm-3" align="right">
		<a href="movie-add.php?id=<?php echo $_GET['id'] ?>"  data-toggle="modal" data-target="#exampleModalCenter1" class="btn btn-danger" type="submit"  >Add Movie</a>
		</div>
		</div>	
	<?php
}
?>
   </div> 	 

<!-- Modal - Edit Movie-->
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Movie</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


<table>
    <form action="process_add_movie.php" method="POST">
    <input type="hidden" name="movie_id"  />
    
     <tr>
      <td>Enter title:</td>
      <td><input name="name" type="text"></td>
     </tr>

     <tr>
      <td>Enter release date:</td>
      <td><input name="release_date" type="text"></td>
     </tr>
  
     <tr>
      <td>Enter run time:</td>
      <td><input name="run_time" type="text"></td>
     </tr>
     
     <tr>
      <td>Enter storyline:</td>
      <td><textarea name="storyline" style="width:290px; height:100px;"></textarea></td>
     </tr>
     
    <tr>
      <td>Enter trailer <br>(Embeded video):</td>
      <td><textarea name="youtube_link" style="width:290px; height:100px;"></textarea></td>
     </tr>

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
<?php include 'footer.php';?>
 
</body>
</html>