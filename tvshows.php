<!DOCTYPE html>
<html>
	<head>
	 <meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>TV Shows</title>
	 
      
	  
	 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	 <link rel="stylesheet" type="text/css" href="bootstrap.css">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" type="text/css" href="style/style.css">

	 <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script><script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
<style>
.img-fluid{height:450px;}
body{background:white;}

	 #search_results {
  background-color: white;
  position: absolute;
  top: 55px;
  width: 210px;
  color: black;
  margin-top: -1px;
  text-decoration: none;
  text-align: center;
  margin-left: -5px;
}

@media only screen and (max-device-width: 1000px)
{ #search_results {
  top: 345px;
  position: relative,
	}}

#searchContainer {
  padding-bottom: 5px;
  width: 210px;
  height: 165px;
  background-color: white;
}

#searchContainer:hover:not(.header) {
  background-color: #eee;
}


</style>
	</head>
	<body>
	
	<!-- HEADER -->
<?php include 'header.php';?>	 

	<div class="movies-main">
<!-- MOVIES GALLERY -->
    
       <div class="row" id="row1">
<!--ROW 1 MOVIE 1 -->   
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
<!-- MOVIE 2 -->
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

<!-- MOVIE 3 -->
        <div class="col-sm-3">
	     <div class="image-box">
	       <img src="images/walkingdead.jpg" class="img-fluid" alt="Walkig dead cover"> 
		   <div class="overlay">
           <div class="content">
           <a href="movie-view-page.php">Read more</a>
           </div>
           </div>
         </div>
        </div>
<!-- MOVIE 4 -->
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
		 </div>
<!-- ROW 2 MOVIE 5 -->
 <div class="row" id="row1">
        <div class="col-sm-3">
	     <div class="image-box">
	       <img src="images/banshee.jpg" class="img-fluid" alt="The 100
		   cover"> 
		   <div class="overlay">
           <div class="content">
           <a href="movie-view-page.php">Read more</a>
           </div>
           </div>
         </div>
        </div>
<!-- MOVIE 6 -->
        <div class="col-sm-3">
	     <div class="image-box">
	       <img src="images/got.jpg" class="img-fluid" alt="GOT club cover"> 
		   <div class="overlay">
           <div class="content">
           <a href="movie-view-page.php">Read more</a>
           </div>
           </div>
         </div>
        </div>
<!-- MOVIE 7 -->
        <div class="col-sm-3">
	     <div class="image-box">
	       <img src="images/bigbang.jpg" class="img-fluid" alt="The Big Bang Theory cover"> 
		   <div class="overlay">
           <div class="content">
           <a href="movie-view-page.php">Read more</a>
           </div>
           </div>
         </div>
        </div>
<!-- MOVIE 8 -->
        <div class="col-sm-3">
	     <div class="image-box">
	       <img src="images/the100.jpg" class="img-fluid" alt="Banshee cover"> 
		   <div class="overlay">
           <div class="content">
           <a href="movie-view-page.php">Read more</a>
           </div>
           </div>
         </div>
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