<?php 
	session_start();
?>

<?php  

include('database.php');

// get genres data
$records = $conn->query( "SELECT * FROM genres" );
?>

<!DOCTYPE html>
<html>
<head>
     <meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Genres</title>
     <meta name="description" content="This is a movie website for movie lovers.">
	  
	 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	 <link rel="stylesheet" type="text/css" href="style/style.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script><script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
	 <script src="https://kit.fontawesome.com/adf14f7c14.js" crossorigin="anonymous"></script>
	  <link rel="icon" href="images/solentmovies-logo.png">
	
<style>
.genre-gallery{
   margin:50px 20px 0px 20px;
}
</style>
  
</head>

<body>
<!-- HEADER -->
<?php include 'header.php';?>
<!-- GENRES GALLERY -->
<div class="genre-gallery">	
<div class="row genretabs">
       
  <div class="col-sm-2">
   
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list-genres" data-toggle="list" href="#moviesbygenre" role="tab" aria-controls="home" onclick="movieGenreResults(0)">All Genres</a>

<?php foreach ($records as $record){ ?> 

      <a  href="genre-view-page.php?id=<?php echo $record['genre_id']; ?>" class="list-group-item list-group-item-action"   role="tab" aria-controls="genre"<?php echo $record['genre_id']; ?>" ><?php echo $record['genre_name']; ?></a>
<?php }?>            
            
        </div>
     </div>
  
<?php   
// get data from movies to display movie covers
$records = $conn->query( "SELECT * FROM  movies");
 ?>

  <div class=" col-sm-10">
   <div class="row" id="row1">
    
 <?php foreach ($records as $record){ ?> 
 
      <div class=" col-sm-3">
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
     </div> 
    </div> 
   </div> 
    
<!-- FOOTER -->
<?php include 'footer.php';?>

</body>
</html>