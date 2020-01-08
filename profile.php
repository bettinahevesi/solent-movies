<?php 
	session_start();
?>

<?php  
// Include database file so that I can do database operations
include('database.php');

// Retrieve user id
$user_id = $_SESSION['user_id'];

// Get user data
$records = $conn->query( "SELECT * FROM users WHERE user_id=$user_id" );
$record = $records->fetch();
?>
<!DOCTYPE html>
<html>
<head>
   	 <meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Profile</title>
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
.row{
    margin:5%;
}
</style>  

</head>
<body>
<!-- HEADER -->
<?php include 'header.php';?>	
<!-- USER DATA-->
    <div class="row">
     <div class="col-sm-3">
      <img src="images/user.png" class="users">
      <b>Name:</b> <?php echo $record['user_real_name']; ?><br>
      <b>User Name:</b>  <?php echo $record['user_name']; ?><br>
	  <b>Email:</b> <?php echo $record['email']; ?><br>
	  <b>Location:</b><?php echo $record['location']; ?><br>
	  <b>About:</b> <?php echo $record['about']; ?><br>
	 </div>
	 
	<div class="col-sm-9">
	  <b>Favorite Movies:</b>
    </div>	
    
	</div>	

<!-- Modal Edit User data  -->
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

</body>
</html>