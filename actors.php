<?php 
	session_start();
?>

<?php  
// Connect to database 
include('database.php');

// Get actors data
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
	  <link rel="icon" href="images/solentmovies-logo.png">
	  
<style>
.actors{
  width:100px;
  height:150px;
  display: block;
  margin-left: auto;
  margin-right: auto;
}

/*@media only screen and (max-width: 500px) {
.actors  {
  width:100%;
  height:auto;
} */

.actor-name{
  color:black;
  text-align:center;
}

.col-md-2 {
  text-align:center;
  padding-bottom:20px;
}
.row {
  align-items: center;
  justify-content: center;
}
</style>

<body>
<!-- HEADER -->
 <?php include 'header.php';?>
<!-- ACTORS GALLERY -->
 <div class="movies-main"> <!-- container -->

  <div class="row">
    <?php foreach ($records as $record){ ?> 

     <div class="col-xs-6 col-sm-2 col-md-2"> <!-- why does not col-xs work? -->
    
	
      <img src="images/<?php echo $record['actor_img']; ?>" class="actors">
	   <a class="actor-name" href="view-actor.php?id=<?php echo $record['actor_id']; ?>" ><?php echo $record['actor_name']; ?></a>
	      </div>
	       
     
    <?php } ?>
	</div>
  </div>
	  
  
<?php
// Test that the authentication session variable exists
if ( isset ($_SESSION["user_id"]))
{
    ?>
<div class="row">
	  <div class="col-md-2">
		
		<a href="#"  data-toggle="modal" data-target="#exampleModalCenter1" class="btn btn-danger" type="submit"  >Add Actor</a>
	   </div>
	</div>	
	<?php
}
?>

<!-- Modal - Add Actor -->
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Actor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

   <table>
    <form action="process_add_actor.php" method="POST">
    <input type="hidden" name="actor_id" value="<?php echo $actor_id; ?>" />
    
     <tr>
      <td>Name:</td>
      <td><input name="actor_name" type="text" </td>
     </tr>

     <tr>
      <td>Birth date:</td>
      <td><input name="birth_date" type="text" </td>
     </tr>
  
     <tr>
      <td>Country:</td>
      <td><input name="country" type="text"</td>
     </tr>
     
     <tr>
      <td>Partner(s):</td>
      <td><input name="partner" type="text" </td>
     </tr>
     
     <tr>
      <td>Children:</td>
      <td><input name="children" type="text" </td>
     </tr>
     
     <tr>
      <td>Mini bio:</td>
      <td><textarea name="actor_story" style="width:290px; height:100px;"></textarea></td>
     </tr>
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


<!-- TV-Show Actors  -->	


	   <!--  Friends
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
    
<!-- FOOTER -->
<?php include 'footer.php';?>
</body>
</html>
