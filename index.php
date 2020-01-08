<?php 
	session_start();
?>

<?php  
//connect to database
include('database.php');

// get movies data
$records = $conn->query( "SELECT * FROM movies" );
?>

<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Solent Movies</title>
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
.img-fluid{
    height:auto;
}

.populars{
    5%0%5%5%;
}

.start-button{
    background-color:pink;
    display:none;
}

.welcome{
    color:white;
    text-shadow:1px 1px black;
    text-align:center;
    font-size:50px;
 }
 
 .sub-title{
    color:white;
    text-shadow:1px 1px black;
    text-align:center;
    font-size:30px;
    margin-bottom: 50px;
 }
         
 .home-button{
  background-color: white; 
  border: 2px solid white; 
  border-radius: 3px;
  color: black;
  padding: 20px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
 }

 .home-button:hover{
  background-color: black;
  color:white; 
  text-decoration: none;
  border: 2px solid black; 
 }
 
.welcome-section {
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    flex-direction: column;
    -webkit-box-pack: center;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100vh;
    background-image: url(../images/popcorn.jpg);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
}
         
</style>

</head>
	
<body>

<!-- HEADER -->
	<?php include 'header.php';?>
	
<!-- WElCOME BACKGROUND -->
    <div class="home-main">
     <div class="popcorn-background">
      <img class="home-background" >

        <div class="welcome-section">
         <h2 class="welcome">Welcome to Solent Movies</h2>
           <br>
         <h2 class="sub-title">Source for movie and celebrity content</h2>
         <a href="register.php"  class="home-button">START YOUR JOURNEY NOW</a>
        </div>
      </div>

<div class="movies-main">
<!-- MOVIES GALLERY -->
   <div class = "populars">
     <b>Popular Movies</b><hr>
   </div>
   
   <div class="row" id="row1">
<!--MOVIES-->   
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
		
	
<!-- ROW 2 TV SHOWS 
 <div class = "populars">
    <b>Popular TV Shows</b> <hr>
 </div>
  
 <div class="row" id="row1">
        <div class="col-sm-3">
	     <div class="image-box">
	       <img src="images/friends.jpg" class="img-fluid" alt="Friends cover"> 
		   <div class="overlay">
           <div class="content">
           <a href="movie-view-page.php">Read more</a>
           </div>
           </div>
         </div>
        </div>
        
<!-- MOVIE 6          
        <div class="col-sm-3">
	     <div class="image-box">
	       <img src="images/shameless.jpg" class="img-fluid" alt="Shamless cover"> 
		   <div class="overlay">
           <div class="content">
           <a href="movie-view-page.php">Read more</a>
           </div>
           </div>
         </div>
        </div>
<!-- MOVIE 7
        <div class="col-sm-3">
	     <div class="image-box">
	       <img src="images/walkingdead.jpg" class="img-fluid" alt="Walking Dead cover"> 
		   <div class="overlay">
           <div class="content">
           <a href="movie-view-page.php">Read more</a>
           </div>
           </div>
         </div>
        </div>
<!-- MOVIE 8 
        <div class="col-sm-3">
	     <div class="image-box">
	       <img src="images/archer.jpg" class="img-fluid" alt="Archer cover"> 
		   <div class="overlay">
           <div class="content">
           <a href="movie-view-page.php">Read more</a>
           </div>
           </div>
         </div>
        </div>
		 </div>-->
		
	</div>
   </div>
  </div>

<!-- FOOTER -->
	<?php include 'footer.php';?>

</body>
</html>
	