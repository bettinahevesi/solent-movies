<?php  

include('database.php');

// retrieve movie id


// get movie data
$records = $conn->query( "SELECT * FROM actors" );


?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Actors</title>
	  
	 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	 <link rel="stylesheet" type="text/css" href="style/style.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script><script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
<style>
.actors{width:100px; height:150px;}

.row{margin:20px;}

</style>
<body>
<!-- HEADER -->
<?php include 'header.php';?>

	<div class="movies-main">
<!-- MOVIES GALLERY m-->
    
	
       <div class="row" id="row1">
      	 <?php foreach ($records as $record){ ?> 

     <div class="col-md-2 col-sm-4 col-xm-6">
	
      <img src="images/<?php echo $record['actor_img']; ?>" class="actors">
	  <a href="view-actor.php?id=<?php echo $record['actor_id']; ?>" ><?php echo $record['actor_name']; ?></a>

 </div>
		  <?php } ?>
	    </div>
				<?php

// Test that the authentication session variable existsm
if ( isset ($_SESSION["user_id"]))
{
    ?>
  		<div class="row" id="row">
		<div class="col-sm-12" align="right">
		<a href="add-actor.php?id=<?php echo $_GET['id'] ?>"  class="btn btn-danger" type="submit"  >Add Actor</a>
		</div>
		</div>	
	<?php
}
?>
	


	   <!--  Friendskjuk
	  <div class="row">
	  
    <div class="col-sm-2">
      <img src="images/janniferaniston.jpg" class="actors">
    </div>
	    <div class="col-sm-2">
      <img src="images/schwimmer.jpg" class="actors">
    </div>
		    <div class="col-sm-2">
      <img src="images/cox.jpg" class="actors">
    </div>
	    <div class="col-sm-2">
     <img src="images/perry.jpg" class="actors">
    </div>
	    <div class="col-sm-2">
      <img src="images/lisa.jpg" class="actors">
    </div>
	    <div class="col-sm-2">
      <img src="images/matt.jpg" class="actors">
    </div>

  </div>
  	<div class="col-sm-12" align="right">
   <a href="add-actor.php"  class="btn btn-danger" type="submit" >Add Actor</a>
    </div> -->
<!-- FOOTER j-->
<?php include 'footer.php';?>
</body>
</html>
