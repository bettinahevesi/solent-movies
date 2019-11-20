<?php  

include('database.php');
session_start();
// retrieve movie id
$movie_id = $_GET['id'];

// get movie data
$records = $conn->query( "SELECT * FROM movies WHERE movie_id=$movie_id" );
$record = $records->fetch();

/*  $director_records = $conn->query( "SELECT * FROM directors WHERE director_id=$record[director_id]" );
$director_record = $director_records->fetch();  */
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Solent Movies</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="style/owl.carousel.css">
    <link rel="stylesheet" href="style/style.css" />
  <style>
  .movie-cover-fightclub {
    background-image: url("<?php echo $record['movie_cover']; ?>");
    height: 92vh;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
a {color:black;}
  </style>
</head>

<body>

<!-- HEADER -->
<?php include 'header.php';?>

<!--MOVIE VIEW PAGE MAIN -->
	 

  <main class="view-page">
    <div class="movie-cover-fightclub">
<!-- MOVIE TITLE -->
     <h1 id="movie_view_title"><?php echo $record['name']; ?></h1>
      <p id="movie_view_subtext">R |<?php echo $record['run_time']; ?> Drama|  1999 (USA)</p>
    </div>
	
<!-- SECOND NAVBAR -->
  <ul class="nav justify-content-center">
  <!--      <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModalCenter1">Edit</a></li> -->
             <li class="nav-item">
			 <a class="nav-link" href="#"  data-toggle="modal" data-target="#exampleModalCenter2" >Delet</a></li>
              <li class="nav-item">
            <a class="nav-link"  href="#" data-toggle="modal" data-target="#exampleModalCenter3"  >Change History</a></li>
  </ul>
<!-- MOVIE INFO --> 
   <div class="col-12 col-md-12" id="b">
  <div class= "menu-title">
	  <p class="movie-info-title"><b>Gallery</b></p>
   </div> 
   <div class="info">
      <div class="fighclub-carousel">
       <div class="owl-carousel owl-theme">
        <div class="item">
         <img src="images/<?php echo $record['img1']; ?>" class="img-f"> 
        </div>
        <div class="item">
	     <img src="images/<?php echo $record['img2']; ?>" class="img-f">
        </div>
   
        <div class="item">
         <img src="images/<?php echo $record['img3']; ?>" class="img-f">
        </div>
   
        <div class="item">
         <img src="images/fc4.jpg" class="img-f">
        </div>
   
        <div class="item">
         <img src="images/fc5.jpg" class="img-f">
        </div>
   
        <div class="item">
         <img src="images/fc6.jpg" class="img-f">
        </div>
        <div class="item">
         <img src="images/fc7.jpg" class="img-f">
        </div>
   
        <div class="item">
         <img src="images/fc8.jpg" class="img-f">
        </div>
   
        <div class="item">
         <img src="images/fc9.jpg" class="img-f">
        </div>
      </div>
     </div>
	 </div>
    </div>
<!-- Trailer -->
     <div class="col-12 col-md-12" >
      <div class= "menu-title">
       <p class="movie-info-title"><b>Trailer</b></p>
      </div>
	  <div class="info">
	  <div align="center">
      <?php echo $record['youtube_link']; ?>
	  </div>
     </div>
	 </div>
<!-- Details -->
   <div class="col-12 col-md-12" >
    <div class= "menu-title">
     <p class="movie-info-title"><b>Details</b></p>
   </div>
    <div class="info">
    <p><b>Title: </b> <?php echo $record['name']; ?>
	   <b>Run time: </b> <?php echo $record['run_time']; ?>
	   <b>Release date: </b> <?php echo $record['release_date']; ?>


	   
  </div> 
       
	
 </div>

<!-- Storylinelék --> 
   <div class="col-12 col-md-12" >
  <div class= "menu-title">
	  <p class="movie-info-title"><b>Storyline</b></p>
   </div> 
   </div>
    <div class= "info">
      <?php echo $record['storyline']; ?>
   </div>
  	
		
		
		<?php

// Test that the authentication session variable existsm
if ( isset ($_SESSION["user_id"]))
{
    ?>
	<div class="col-sm-12" align="right">
   <a href="#"  class="btn btn-danger" type="submit" data-toggle="modal" data-target="#exampleModalCenterDetails">Edit Details & Storyline</a>
    </div>
	<?php
}
?>
		</div>	
   </div>
   <!-- Genres --> 
<!--    <div class="col-12 col-md-12" >
       <div class= "menu-title">
     <p class="movie-info-title"><b>Genre</b></p>
   </div>
    <div class="info">
  <b>Genre: </b> <a href="edit-genre.php" ><?php echo $record['genre_name']; ?></a>
     </div>
	 
		<div class="col-sm-12" align="right">
		<a href="view-genres.php?id=<?php echo $record['genre_name']; ?>"  class="btn btn-danger" type="submit"  >Edit genre</a>
		</div>
		</div -->  
	   
<!-- Cast h--> 
   <div class="col-12 col-md-12" >
    <div class= "menu-title">
     <p class="movie-info-title"><b>Cast</b></p>
	</div>
   <div class= "info">
   
   <?php   
// get datanmjm
$records = $conn->query( "SELECT * FROM movies_actors, actors WHERE movie_id=$movie_id AND movies_actors.actor_id = actors.actor_id");
 ?>
   
     <table align="center">
   <tr>
    <th>Actor</th>
    <th>Role</th>
  </tr>
  <?php foreach ($records as $record){ ?> 
  <tr>
    <td><a href="view-actor.php?id=<?php echo $record['actor_id']; ?>" ><?php echo $record['actor_name']; ?></a></td>
    <td><?php echo $record['role']; ?></td>
  </tr>
  <?php } ?>

</table>

		<?php

// Test that the authentication session variable existsm
if ( isset ($_SESSION["user_id"]))
{
    ?>
  		<div class="row" id="row">
		<div class="col-sm-12" align="right">
		<a href=""  class="btn btn-danger" type="submit"  data-toggle="modal" data-target="#exampleModalCenter5">Edit Cast</a>
		</div>
		</div>	
	<?php
}
?>
  </div>
  </div>

  
    <div class="col-12 col-md-12" >
     <div class= "menu-title">
       <p class="movie-info-title"><b>Reviews</b></p>
     </div>
    <div class= "info">
	   <?php   
// get data
$records = $conn->query( "SELECT * FROM reviews, users WHERE movie_id=$movie_id  AND reviews.user_id = users.user_id");
 ?>
<table>
  <tr>
    <th>User</th>
    <th>Rate</th>
    <th>Comment</th>
  </tr>
  	 <?php foreach ($records as $record){ ?> 
  <tr>
    <td> <?php echo $record['user_name']; ?> </td>
    <td> <?php echo $record['rate']; ?></td>
    <td> <?php echo $record['review_text']; ?> </td>
  </tr>
   <?php } ?> 

</table>


		<?php

// Test that the authentication session variable exismnj
if ( isset ($_SESSION["user_id"]))
{
    ?>
	<div class="row">
  <div class=" col-md-11" >
  <form action="process_add_review.php" method="POST">
  <input type="hidden" name="movie_id" value="<?php echo $movie_id; ?>" />
 <textarea name="review_text" style="width:100%; height:40px;" placeholder="Add review here"><?php echo $record['review_text']; ?></textarea>
  </div> 
 <div class=" col-md-1" >
	
		<input type="submit" class="btn btn-danger">Add Review</input>
		</div>
			 </div>  
		  
	<?php
}
?>
	</form>	
  </div> 
</div>  
  
  <!-- Modal 1-->
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
<form action="process_edit_movie.php" method="POST">
<input type="hidden" name="movie_id" value="<?php echo $movie_id; ?>" />
  <tr>
    <td>Enter title:</td>
     <td><input name="name" type="text" value="<?php echo $record['name']; ?>"></td>
	 
  </tr>
 
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

  <tr>
    <td>Enter storyline:</td>
     <td><textarea name="storyline" style="width:200px; height:80px;"><?php echo $record['storyline']; ?></textarea></td>
     
  </tr>



  <tr>
    <td>Enter release date:</td>
    <td><input name="release_date" type="text"‎ value="<?php echo $record['release_date']; ?>"></td>
  </tr>
  <tr>
    <td>Enter run time:</td>
    <td><input name="run_time" type="text" value="<?php echo $record['run_time']; ?>"></td>
    
  </tr>

<!-- <form action="process_edit_director.php" method="POST">
 <input type="hidden" name="movie_id" value="<?php echo $movie_id; ?>" /> -->
  <tr>
    <td>Enter director name</td>
<!--     <td><input name="director_name" type="text" value="<?php echo $director_record['director_name']; ?>"></td> -->
	
    <td> <fieldset>
       <input type="text" name="director_name" class="text-input" id="director_name" value="<?php echo $director_record['director_name']; ?>" />
        <span id="filter-count"></span>
    </fieldset>


<div id="directors_list"></div>

	</td>
	 
  </tr> 

</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-danger">Submitt</input>
      </div>
	  </form>
    </div>
  </div>
</div> -->

<!-- Modal 2-->
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Delete Movie</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <form action="process_delete_movie.php" method="POST">
      <input type="hidden" name="movie_id" value="<?php echo $movie_id; ?>" />
      <p>Are you sure that you want to delete this movie? :(<p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-danger"></input>
      </div>
	  	</form>
    </div>
  </div>
</div>

<!-- Modal 3-->
<div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">View Change History</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  
<?php   
// get history 
$records = $conn->query( "SELECT * FROM history, users WHERE movie_id=$movie_id  AND history.user_id = users.user_id");
 ?>

  <table>
  <tr>
    <th>Date</th>
    <th>Action</th>
	<th>User</th>
  </tr>

<?php foreach ($records as $record){ ?> 
  <tr>
    <td><?php echo $record['history_date']; ?> </td>
    <td><?php echo $record['history_action']; ?></td>
	<td><?php echo $record['user_name']; ?></td>
  </tr>
  <?php } ?>
</table>


      </div>
    </div>
  </div>
</div>
  <!-- Modal Details-->
<div class="modal fade" id="exampleModalCenterDetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<table>
<form action="process_edit_details.php" method="POST">
<input type="hidden" name="movie_id" value="<?php echo $movie_id; ?>" />
  <tr>
    <td>Enter title:</td>
     <td><input name="name" type="text" value="<?php echo $record['name']; ?>"></td> 
  </tr>
    <td>Enter release date:</td>
    <td><input name="release_date" type="text"‎ value="<?php echo $record['release_date']; ?>"></td>
  </tr>
  <tr>
    <td>Enter run time:</td>
    <td><input name="run_time" type="text" value="<?php echo $record['run_time'];?>"></td>
  </tr>
    <tr>
    <td>Enter storyline:</td>
     <td><textarea name="storyline" style="width:200px; height:80px;"><?php echo $record['storyline']; ?></textarea></td>  
  </tr>
  <tr>
  
  
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


<!-- Modal Actors-->
<div class="modal fade" id="exampleModalCenter5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Cast</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  <table>
<form action="process_edit_actors.php" method="POST">
<input type="hidden" name="movie_id" value="<?php echo $movie_id; ?>" />  

     <?php   
// get datanmjm
$records = $conn->query( "SELECT * FROM movies_actors, actors WHERE movie_id=$movie_id AND movies_actors.actor_id = actors.actor_id");
 ?>
  <tr>
    <th>Edit Actors</th>
    <th>Edit Roles</th>
  </tr>

 <?php foreach ($records as $record){ ?> 
  <tr>
    <td>
	 <fieldset>
       <input type="text" name="actor_name" class="text-input" id="actor_name" value="<?php echo $actor_record['actor_name']; ?>" />
        <span id="filter-count"></span>
          </fieldset>
	   <div id="actors_list"></div>
	 </td>
    <td><input name="role_name" type="text"‎ value="<?php echo $record['role_name']; ?>"></td>
  </tr>
   <?php } ?>
   </table>
    </div>
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-danger"></input>
      </div>
	  	</form>
     

      </div>
    </div>
  </div>
</div>


</main>

<!-- FOOTER -->
<?php include 'footer.php';?>






<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script><script src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script><script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>


<script src="js/owl.carousel.js"></script>
<script src="js/jquery.js"></script>



<script>
$(document).ready(function(){
    $("#director_name").keyup(function(){
 
  	// Retrieve the input field text 
        var director_name = $(this).val();
 	
	// Get data from database 
        jQuery.get("process_get_directors.php", {director: director_name}, function( data ) {
            $("#directors_list").html(data)
	});
        
    });
});


function set_director_name(director_name) {
	document.getElementById("director_name").value = director_name;
}

</script>

</body>
</html>
