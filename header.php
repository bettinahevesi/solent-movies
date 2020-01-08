<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solent Movies</title>
    <meta name="description" content="Solent Movies is a web-based system that can be used by movie lovers to learn about and rate movies.">
    <link rel="stylesheet" href="style/style.css">
    <script src="https://kit.fontawesome.com/adf14f7c14.js" crossorigin="anonymous"></script>
    <link rel="icon" href="images/solentmovies-logo.png">
 
<style>
.bg-light {
    background-color: red !important;
}
.navbar {
    box-shadow: 0px 2px 2px #fc0019;
}

.container1{
    background-color:white;
    padding:3px;
    border-radius: 5px;
}

#livesearch{
    color: black;
    background-color: white;
    border:0px;
    border-radius: 0px 0px 5px 5px ;
    position: absolute;
    width: 280px;
    top: 75%;
   }
   
.form-control {
    border: 0px;
    padding:0px;
   }
</style>

</head>

<body>
<!-- NAVBAR -->
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">SOLENT MOVIES</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
       <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
         <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
         <a class="nav-link" href="movies.php">Movies</a>
        </li>
	    <li class="nav-item">
		 <a class="nav-link" href="genres.php">Genres</a>
        </li>
	    <li class="nav-item">
		 <a class="nav-link" href="actors.php">Actors</a>
        </li>
       </ul>
<!-- SEARCH STYLE -->
    <div class="container1">
      <form class="form-inline my-2 my-lg-0">
       <input class="form-control mr-sm-2"  type="search" placeholder="Search " size="30" onkeyup="showResult(this.value)">
       <i class="fas fa-search"></i>
       <div id="livesearch"></div>
      </form>
    </div>
	  
<!--LOGIN OR LOGGED IN-->	  
<?php

// Test that the authentication session variable exists
if ( isset ($_SESSION["user_id"])):?>

 <div class="dropdown">
  <button class="fas fa-user fa-5x" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fas fa-user fa-5x"></i>
  </button>

    <div class="dropdown-menu dropdown-menu-right">
     <a class="dropdown-item" href="#">Watchlist</a>
	 <a class="dropdown-item" href="profile.php">Profile</a>
	<div class="dropdown-divider"></div>
     <a class="dropdown-item" href="movie-add.php">Add movie</a>
	 <a class="dropdown-item" href="view_history.php">View history</a>
	<div class="dropdown-divider"></div>
	 <a class="dropdown-item" href="#">Settings</a>
     <a class="dropdown-item" href="process_logoff.php">Sign out</a>
	</div>
 </div>
    
<?php

 else:?>
     <div id="login">
	    <a href="login.php">Log in</a>
	  </div>
	     
	  <div id="login">
	      <a href="register.php">| Sign up</a>
	  </div>
<?php 
endif
?>   
<!--collapse navbar-collapse div-->
     </div>
    </nav>
    
<!--JavaScript - Livesearch -->   
<script>
function showResult(str) {
  if (str.length==0) { 
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>

</body>
</html>