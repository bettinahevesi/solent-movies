<html>
<head>
<meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Register</title>
	  
	 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	 <link rel="stylesheet" type="text/css" href="style/style.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script><script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
<style>	
    body{
       margin: 0;
       padding: 0;
       background-size: cover;
       background-position: center;
       font-family: sans-serif;
       } 	
	   .footer{margin-top:600px;}
	   
	.login-box{
    width: 320px;
    height: 420px;
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
        <h1>Create an account</h1>
            <form method="post" action="process_register.php">
            <p>Username</p>
            <input type="text" name="user_name" placeholder="Enter Username" required>
			<p>Email</p>
			<input type="email" name="email" placeholder="Enter Email " required>
			<p>Password</p>
			<input type="password" name="password" placeholder="Enter Password" required>
<!--        <p> Confirm Password</p>
            <input type="password" name="confirmpassword" placeholder="Confirm Password"> -->
            <input type="submit" name="submit" value="Register">
               
            </form>
        
        
        </div>

<!-- FOOTER -->
	<?php include 'footer.php';?>		
    
    </body>
</html>