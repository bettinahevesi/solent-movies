<?php  

session_start();

// Include database file so that I can do database operations
include('database.php');

// retrieve user id
$user_id = $_SESSION['user_id'];

// get user data
$records = $conn->query( "SELECT * FROM users WHERE user_id=$user_id" );
$record = $records->fetch();
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Profil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style/style.css" />
  
<style>

</style>  
</head>
<body>
<!-- HEADER -->
<?php include 'header.php';?>	
     
	 User Name: <?php echo $record['user_name']; ?><br>
	 Email:<?php echo $record['email']; ?><br>
	 
<!-- FOOTER -->
<?php include 'footer.php';?>

</body>
</html>