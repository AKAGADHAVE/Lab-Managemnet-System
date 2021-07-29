<?php
    session_start();
	include "dbconnect.php";
	
	if(isset($_POST['submit']))
    {
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
	$lname=$_POST['lname'];
	$DOB=$_POST['DOB'];
	$Mnum=$_POST['Mnum'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	$state=$_POST['state'];
	$city=$_POST['city'];
	$country=$_POST['country'];
	$course=$_POST['course'];
	
	$query = mysqli_query($conn,"insert into registration(fname, mname,lname,DOB,Mnum,gender,address,state,city,country,course) values('".$fname."','".$mname."','".$lname."','".$DOB."','".$Mnum."','".$gender."','".$address."','".$state."','".$city."','".$country."','".$course."')");
   
   $run=mysqli_query($conn,$query);
   if($run){
	   echo"record submited";
   }
   else{
	   echo"";
   }
 }
?>

<html>
<head>
  <title>Registration</title>
  <style>
 *{
	margin:0;
	padding:0;
	box-sizing:border-box;
}
body{
	background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url("reg.jpg");
    height:100%;
	background-size:cover;
    background-position:center;
    font-size:120%; 
}


.header{
	 z-index:1;
	position:relative;
	width:40%;
	margin:50px auto 0px;
	color:white;
	background:;
	text-align:center;
	border-bottom:none;
	border-radius:10px 10px 0px 0px;
	padding:20px;
	font-size:120%;
	text-align:-webkit-center
}

form{
	width:40%;
	margin:0px auto;
	padding:20px;
	border:1p solid #bc4de;
	border-radius:0px 0px 10px 10px;
	text-color=white;
	color:white;
	
	
}

.input-group{
	margin:15px 0px 15px 0px;
}

..input-group label1{
	display:block;
	text-align:left;
	margin:3px;
	width:40%;
}

.input-group input{
	height:30px;
	width:10%;
	padding:0px 5px;
	font-size:16px;
	border-radius:5px;
	border:1px solid grey;
	
	
	
}

.btn{
	padding:10px;
	font-size:15px;
	color:white;
	background:#5f9ea0;
	border:none;
	border-radius:5px;
}

#name{
	width:40%;
	padding:5px;
	border-radius:5%;
	outline:0;
	border:1px solid lightgrey
	
    
}


h1{
	text-align: center;
	position:center;
	color:white;
	height:70;
}


  </style>
</head>
<body>
  <div class="header">
    <h2>Student Registration</h2>
    </div>
	
	<form method="post" action="registartion1.php">
	   <div class="input-group">
         <label>First Name     :</label>
         <input type="text" id="name" name="fname" placeholder="enter your name">
       </div>
	   
	   <div class="input-group">
         <label>Middle Name</label>
         <input type="text" id="name" name="mname" placeholder="enter your middle name">
       </div>
	   
	   <div class="input-group">
         <label>Last Name</label>
         <input type="text" id="name" name="lname" placeholder="enter your last name">
       </div>
	   
	   <div class="input-group">
         <label>Date of Birth</label>
         <input type="date" id="name" name="DOB">
       </div>
	   
	   <div class="input-group">
         <label>Mobile No</label>
        <input type="number" id="name" name="Mnum" placeholder="enter your name">
       </div>
	   
	   <div class="input-group">
         <label>Gender:</label>
         <input type="radio"  name="gender" value="male">Male
         <input type="radio"  name="gender" value="female">Female
	     <input type="radio" name="gender" value="other">Other
       </div>
	   
	   <div class="input-group">
         <label>Address:</label>
         <input type="textarea" id="name" name="address" placeholder="enter your address">
       </div>
	   
	   <div class="input-group">
         <label>State:</label>
         <input type="text" id="name" name="state" placeholder="enter your state">
       </div>
	   
	   <div class="input-group">
         <label>City:</</label>
         <input type="text" id="name" name="city" placeholder="enter your city">
       </div>
	   
	   <div class="input-group">
         <label>Country:</label>
         <input type="text" id="name" name="country" placeholder="enter your country">
       </div>
	   
	   <div class="input-group">
         <label>Course:</label>
        <input type="radio" name="course" value="bsc">BSc
        <input type="radio" name="course" value="bcom">BCom
	    <input type="radio" name="course" value="ba">BA
       </div>
	   
	   
	   <div>
	   <button name="submit">Submit</button>
	   </div>
	   
	 
	   
	
  </form> 
  
</body>
</html>