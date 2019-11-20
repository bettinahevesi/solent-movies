<?php  

include('database.php');

// retrieve movie id
$actor_id = $_GET['id'];

// get movie data
$records = $conn->query( "SELECT * FROM actors WHERE actor_id=$actor_id" );
$record = $records->fetch();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Actor page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style/style.css" />
  
<style>
.actors{width:100px; height:150px;}
.row{margin:20px;}
</style>  
</head>
<body>
<!-- HEADER -->
<?php include 'header.php';?>	

<div class="row">
    <div class="col">
      <img src="images/<?php echo $record['actor_img']; ?>" class="actors">
    
	
	 Actor Name: <?php echo $record['actor_name']; ?><br>
	 Birth date:<?php echo $record['birth_date']; ?><br>
	 Country: <?php echo $record['country']; ?><br>
	 Story: <?php echo $record['actor_story']; ?><br>
	 </div>
	 </div>	
	   <div class="row" id="row">
		<div class="col-sm-12  col-xm-2">
		<a href="#"  class="btn btn-danger" type="submit" data-toggle="modal" data-target="#exampleModalCenter"> Edit Actor</a>
		</div>
		</div>	
	</div>	



<!-- Modal Edit Actor  -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Actor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="add-movie-box">
		<form action="process_edit_actor.php" method="POST">
        <input type="hidden" name="actor_id" value="<?php echo $actor_id; ?>" />
          <table>
            <tr>
            <th><p>Actor name</p>
            <th><input type="text" name="actor_name"  value="<?php echo $record['actor_name']; ?>"</th></th>
			</tr>
			<tr>
            <th><p>Birth date</p></th>
			<th><input type="text" name="birth_date" value="<?php echo $record['birth_date']; ?>"></th>
			</tr>
			<tr>
			<th><p>Country </p></th>
			<th><input type="text" name="country"  value="<?php echo $record['country']; ?>"></th>
			</tr>
			<tr>
			<th><p>Story </p></th>
			<td><textarea name="actor_story" style="width:200px; height:80px;"><?php echo $record['actor_story']; ?></textarea></td>
			</tr>
			<tr>
			<th><p>Photo</p></th>
            <th><input type="file" name="pic" accept="image/*"> </br> </th>
			</tr>  
         </table>			
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-danger"></input>
		  </form>
      </div>
    </div>
  </div>
</div>
	
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
	
</body>
</html>
