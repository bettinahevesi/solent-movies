
<!DOCTYPE html>
<html>
<head>
    <title>Add Movie</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style/style.css" />
	<style>
    body{
       margin: 0;
       padding: 0;
       background-size: cover;
       background-position: center;
       font-family: sans-serif;
       } 	
	   .footer{margin-top:620px;}
	   
	   	.login-box{
    width: 320px;
    height: 500px;
    background: rgba(0, 0, 0, 0.8);
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 30px 30px;
	border:solid white 1px;
	border-radius:10px;
}
</style>
</head>

    
	<body background="images/cinema.jpg">
	
			<!-- HEADER -->
		<?php include 'header.php';?>
	
	
   	 
    <div class="login-box">
        <h1>Add movie</h1>
            <form action="process_add_movie.php" method="POST">
            <p>Title</p>
            <input type="text" name="name"  placeholder="Enter title" required>
            <p>Storyline</p>
			<td><textarea name="storyline" style="width:200px; height:80px;" placeholder="Write storyline" ></textarea></td>
            <p>Run time</p>
			<input type="text" name="run_time" placeholder="Add run time" >
			<p>Release date </p>
			<input type="text" name="release_date"  placeholder="Add release date" >
			
            <input type="submit" class="btn btn-danger">Upgrade</a>
               
            </form>
        
        
        </div>

<!-- FOOTER -->
		<?php include 'footer.php';?>
	


    </body>
</html>