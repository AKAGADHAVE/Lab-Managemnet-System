<!DOCTYPE html>
 
<?php
include "dbconnect.php";

  if(isset($_POST['login']))
  {
	  $email = $_POST['email'];
	  $pass = $_POST['pass'];
	  $sql="select * from register where email='$email' and pass='$pass'";
	  $run = mysqli_query($conn,$sql);
	  if(!$run){
		  echo "query failed\n";
	  }
	  $row=mysqli_fetch_array($run);
	  $count=mysqli_fetch_array($run);
	  
	  
	  if($count==1){
		  echo"<script>window.open('main.php?success=Loggedin successfully','_self')</script>";
	  }
	  else{
		  echo"<script>window.open('login.php?error=username or password is incorrect','_self')</script>";
	  }
  }
  ?>

<html>
<head>
     <title> project</title>
	 <link rel ="stylesheet" href="style(reg-log).css">
	
</head>
<body>
   <div class="header">
    <h2>Login</h2>
   </div>
   <form method="post" action="main.php">
       <div class="input-group">
         <label>Email</label>
         <input type="text" name="email">

       </div>
	   
	   <div class="input-group">
         <label>Password</label>
         <input type="text" name="pass">
       </div>
	   
	   <div>
	     <button name="login">login</button>

	   </div>
	    
		<div class="input_group">
	       <p class="message">Already Registerd? <a href="register.php">Sign  Up</a></p>
	   </div>
	</form>
</body>
</html>