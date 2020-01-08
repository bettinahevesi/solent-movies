<?php 
	session_start();
?>

<?php  
//Connect to databade
include('database.php');

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
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="icon" href="images/solentmovies-logo.png">
    
<style>
.movie-cover-fightclub {
    background-image: url("<?php echo $record['movie_cover']; ?>");
    height: 92vh;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

a {
   color:black;
}

.list-group {
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    flex-direction: column;
    padding-left: 50px;
    margin-bottom: 0;
}

.list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color: black !important;
    border-color: black;
}

.justify-content-center {height:50px;}
.nav-link {
    display: block;
    padding:  .75rem 1.25rem;;
}

.movie-info-title{
    margin-left:20px;
    color:white;
    font-weight: 100;
    padding: .75rem 1.25rem;
}

.menu-title{
    background-color:#1f1f21;
    height:50px; !important
}

#filminfo {
    margin-bottom:5%;
}

.actors{
    width:50px; 
    height:auto; 
    display: inline;
}

.movie-container{
    margin:0px 50px;
}

.info{
    margin:20px 0px
}

.carousel{
    margin:40px 50px;
}

#trailer-title{
    margin-right:50px;
}
.story{ 
    text-align: justify;
}
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
      <p id="movie_view_subtext">R | <?php echo $record['run_time']; ?> | Drama |  Release date: <?php echo $record['release_date']; ?></p>
    </div>
<?php

// Test that the authentication session variable exist (LOGGED IN STATUS NEDDED)
if ( isset ($_SESSION["user_id"]))
{
?>
	
<!-- SECOND NAVBAR -->
  <ul class="nav justify-content-center">
     <li class="nav-item ">
     <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModalCenter1">Edit Movie</a></li> 
     <li class="nav-item">
     <a class="nav-link" href="#"  data-toggle="modal" data-target="#exampleModalCenter2"  >Add Review</a></li>
     <li class="nav-item">
                 
		<!-- 	 <a class="nav-link disabled"  href="#"  data-toggle="modal" data-target="#exampleModalCenter3" >Delete Movie</a></li>
              <li class="nav-item">-->
     <a class="nav-link"  href="#" data-toggle="modal" data-target="#exampleModalCenter4"  >Change History</a></li>
  </ul>
<?php
}
?>
  
<!-- MOVIE INFO --> 
  <div class="col-12 col-md-12" id="b">
   <div class= "menu-title">
	  <p class="movie-info-title"><b>Gallery</b></p>
   </div> 
<!-- CAROUSEL -->
   <div class="carousel">
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
         <img src="images/<?php echo $record['img4']; ?>" class="img-f">
        </div>
   
        <div class="item">
         <img src="images/<?php echo $record['img5']; ?>" class="img-f">
        </div>
   
        <div class="item">
         <img src="images/<?php echo $record['img6']; ?>" class="img-f">
        </div>
        <div class="item">
         <img src="images/<?php echo $record['img7']; ?>" class="img-f">
        </div>
   
        <div class="item">
         <img src="images/<?php echo $record['img8']; ?>" class="img-f">
        </div>
   
        <div class="item">
         <img src="images/<?php echo $record['img9']; ?>" class="img-f">
        </div>
      </div>
     </div>
	 </div>
    </div>
<!-- MOVIE DETAILS--> 
    <div class="movie-details-trailer">
     <div class="row filminfo" id="filminfo">
      <div class="col-sm-12 col-md-4">
       <div class="list-group" id="list-tab" role="tablist">
        <a class="list-group-item list-group-item active"   href=#  >Details</a>
         
        <a class="list-group-item list-group-item"> <b>Title: </b> <?php echo $record['name']; ?> </a>
      
        <a class="list-group-item list-group-item"><b>Run time: </b> <?php echo $record['run_time']; ?></a>
      
        <a class="list-group-item list-group-item"> <b>Release date: </b> <?php echo $record['release_date']; ?></a>
        
        <a class="list-group-item list-group-item"><b>Director:</b> <?php echo $record['director']; ?> </a>
        
        <a class="list-group-item list-group-item"><b>Writer:</b> <?php echo $record['writer']; ?> </a>
        
        <a class="list-group-item list-group-item"><b>Language:</b> English </a>
       </div>
      </div>
<!-- MOVIE TRAILER --> 
  <div class="col-sm-12 col-md-8">
    <div class="col-12 col-md-12" > 
          <div class= "menu-title" id="trailer-title">
           <p class="movie-info-title"><b>Trailer</b></p>
    </div>
	  <div class="info">
	   <div align="center">
        <?php echo $record['youtube_link']; ?>
	   </div>
      </div>
     </div>
    </div> 
   </div>
  </div>
<!-- MOVIE STORYLINE --> 
 <div class= "movie-container"> 
   
<?php   
$records = $conn->query( "SELECT * FROM movies WHERE movie_id=$movie_id" );
?>

   <div class= "menu-title">
	  <p class="movie-info-title"><b>Storyline</b></p>
   </div> 
	 <div class= "info">
	  <div class= "story-container">  
	   <?php foreach ($records as $record){ ?> 
	   <div class="story"><?php echo $record['storyline']; ?></div> 
<?php } ?>
      </div> 
     </div> 
 	 
<!--  CAST --> 
    <div class= "menu-title">
     <p class="movie-info-title"><b>Cast</b></p>
	</div>
    <div class= "info">
   
<?php   
// get data FROM MOVIES_ACTORS
$records = $conn->query( "SELECT * FROM movies_actors, actors WHERE movie_id=$movie_id AND movies_actors.actor_id = actors.actor_id");
?>
   
    <table align="center">
     <tr>
      <th>Actor</th>
      <th>Role</th>
     </tr>
     <?php foreach ($records as $record){ ?> 
     <tr>
      <td> <img src="images/<?php echo $record['actor_img']; ?>" class="actors">
       <a href="view-actor.php?id=<?php echo $record['actor_id']; ?>" ><?php echo $record['actor_name']; ?></a></td>
      <td><?php echo $record['role']; ?></td>
     </tr>
<?php } ?>

    </table>

<?php
// Test that the authentication session variable exists
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
    
<!-- Retrive Reviews -->
        
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
    <th>Review</th>
  </tr>
  
  	 <?php foreach ($records as $record){ ?> 
  	 
  <tr>
    <td> <?php echo $record['user_name']; ?> </td>
    <td> <?php echo $record['rating']; ?> </td>
    <td> <?php echo $record['review_text']; ?> </td>
  </tr>


<?php } ?> 
 </table> 

<!-- Add Reviews........................................................................................................
<?php  
// retrieve movie id
$movie_id = $_GET['id'];
$user_id = $_SESSION['user_id'];

$records = $conn->query( "SELECT * FROM reviews, users WHERE movie_id=$movie_id  AND reviews.user_id = users.user_id");
?>

<?php foreach ($records as $record){ ?>

    <form action="process_add_review.php" method="POST">
    <input type="hidden" name="movie_id" value="<?php echo $movie_id; ?>" />
     <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" />
  <table>  
     <tr>
      <td>Enter review:</td>
      <td><input name="review_text" type="text" ></td>
     </tr>
  </table>
<?php
}
?>

<?php  
if ( isset ($_SESSION["user_id"]))
{
?>
		<div class="col-sm-1">
		     <input type="submit" class="btn btn-danger" value="Submit"></input>
		</div>
	</form>
<?php
}
?>		  
-->
	
     </div> 
    </div> 
   </div>
  </div>
 </div>

<!-- Edit Moovie Modal-->
<?php   
$records = $conn->query( "SELECT * FROM movies WHERE movie_id=$movie_id" );
?>

<!-- Modal 1- Edit Movie-->
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

  <?php foreach ($records as $record){ ?>
  <table>
    <form action="process_edit_details.php" method="POST">
    <input type="hidden" name="movie_id" value="<?php echo $movie_id; ?>" />
    
    <tr>
      <td>Enter title:</td>
      <td><input name="name" type="text" value="<?php echo $record['name']; ?>"></td>
    </tr>

    <tr>
      <td>Enter release date:</td>
      <td><input name="release_date" type="text" value="<?php echo $record['release_date']; ?>"></td>
    </tr>
  
    <tr>
      <td>Enter run time:</td>
      <td><input name="run_time" type="text" value="<?php echo $record['run_time']; ?>"></td>
    </tr>
     
    <tr>
      <td>Enter storyline:</td>
      <td><textarea name="storyline" style="width:290px; height:100px;"><?php echo $record['storyline']; ?></textarea></td>
    </tr>
     
    <tr>
      <td>Enter trailer <br>(Embeded video):</td>
      <td><textarea name="youtube_link" style="width:290px; height:100px;"><?php echo $record['youtube_link']; ?></textarea></td>
    </tr>
  </table>
  
    </div>
     <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-danger" value="Submit"></input>
     </div>
	</form>
   </div>
  </div>
</div> 

<?php } ?> 
    
<!-- Add Reviews Modal-->
<?php  
// retrieve movie id  $user_id = $_SESSION['user_id'];
$movie_id = $_GET['id'];

$records = $conn->query( "SELECT * FROM reviews, users WHERE movie_id=$movie_id  AND reviews.user_id = users.user_id");
?>

<?php foreach ($records as $record){ ?>

<!-- Modal 2-->
 <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Review</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

     <form action="process_add_review.php" method="POST">
      <input type="hidden" name="movie_id" value="<?php echo $movie_id; ?>" />
      <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" />
    <table>  
  
     <tr>
      <td>Add rate:</td>
      <td><input name="rating" type="text" ></td>
     </tr>
 
     <tr>
      <td>Add review:</td>
      <td><textarea name="review_text" style="width:290px; height:100px;"></textarea></td>
     </tr>
     
    </table>

     </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-danger"  value="Submit"></input>
      </div>
	  </form>
    </div>
  </div>
</div> 

<?php
}
?>	

<!-- Modal 3 - Delete Movie-->
<div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
        <input type="submit" class="btn btn-danger"  value="Submit" ></input>
      </div>
	  	</form>
    </div>
  </div>
</div>

<!-- Modal 4- View Change History-->
 <div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
        <input type="submit" class="btn btn-danger" value="Submit" ></input>
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
        <input type="submit" class="btn btn-danger"  value="Submit"></input>
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