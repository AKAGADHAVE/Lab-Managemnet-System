<?php
session_start();
include "dbconnect.php";
  $email_err=$pws_err=$success=$error=" ";
   if(isset($_POST['Create']))
  {
    $user=$_POST['user'];
    $pass=$_POST['pass'];
	$cpass=$_POST['cpass'];
	$email=$_POST['email'];
	
	$password=password_hash($pass,PASSWORD_BCRYPT);
	$cpassword=password_hash($cpass,PASSWORD_BCRYPT);
	
	$query="select * from register where email='$email'";
	
	$run=mysqli_query($conn,$query);
	$row=mysqli_num_rows($run);
	
	if($row>0)
	{
	  $email_err="Email id already exists.Please enter another email ";
	  
	}
	else if($pass !==$cpass)
	{
	  $pws_err="your password do not match ";
	}
	else
	{
	  $sql="INSERT INTO register(user,pass,cpass,email)values('$user','$password','$cpassword','$email')";
	  $run=mysqli_query($conn,$sql);
	  
	  if($run)
	  {
	     $success="registerd successfully";
	  }
	  else
	  {
	     $error="unable to submit data. please try again.......";
	  }
    }
  }
?>





<!DOCTYPE html>
<html>
<head>
     <title> project</title>
	 <link rel ="stylesheet" href="style(reg-log).css">
	
</head>
<body>
   <div class="header">
    <h2>Register</h2>
    </div>
	
	<form method="post" action="register.php">
	   <div class="input-group">
         <label>Username</label>
         <input type="text" name="user">
       </div>
	   
	   <div class="input-group">
         <label>Email</label>
         <input type="text" name="email">
		 <span class="float-right text-black font-weight-bold"><?php echo $email_err;?></span>
       </div>
	   
	   <div class="input-group">
         <label>Password</label>
         <input type="password" name="pass" >
       </div>
	   
	   <div class="input-group">
         <label>Confirm Password</label>
         <input type="password" name="cpass">
		 <span class="float-right text-white font-weight-bold"><?php echo $pws_err ;?></span>
       </div>
	   
	   <div>
	   <button name="Create">Create</button>
	   <span class="float-right text-black font-weight-bold"><?php echo $success; echo $error; ?></span>
	   </div>
	   
	   <div class="input_group">
	       <p class="message">Already Registerd? <a href="login.php">Login</a></p>
	   </div>
	   
	</form>
</body>
</html>