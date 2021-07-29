<?php
    include "dbconnect.php";
	
	if(isset($_POST['submit']))
    {
    $f_name=$_POST['f_name'];
    $m_name=$_POST['m_name'];
	$l_name=$_POST['l_name'];
	$Date=$_POST['Date'];
	$M_um=$_POST['M_um'];
	$te_gender=$_POST['te_gender'];
	$te_address=$_POST['te_address'];
	$te_state=$_POST['te_state'];
	$te_city=$_POST['te_city'];
	$te_country=$_POST['te_country'];
	$sub=$_POST['sub'];
	
	$query= mysqli_query($conn,"insert into teacher_reg(f_name, m_name,l_name,Date,M_um, te_gender,te_address, te_state,te_city,te_country,sub)values('".$f_name."','".$m_name."','".$l_name."','".$Date."','".$M_um."','".$te_gender."','".$te_address."','".$te_state."','".$te_city."','".$te_country."','".$sub."')");
   
   $run=mysqli_query($conn,$query);
   if($run){
	   echo"record submited";
   }
   else{
	   echo"unscesses";
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
	background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url("https://cdn.mos.cms.futurecdn.net/PES6US4DGQsJVRQmnqkzCZ.jpg");
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
    <h2>teacher Registration</h2>
    </div>
	
	<form method="post" action="teacher.php">
	   <div class="input-group">
         <label>First Name:</label>
         <input type="text" id="name" name="f_name" placeholder="enter your name">
       </div>
	   
	   <div class="input-group">
         <label>Middle Name</label>
         <input type="text" id="name" name="m_name" placeholder="enter your middle name">
       </div>
	   
	   <div class="input-group">
         <label>Last Name</label>
         <input type="text" id="name" name="l_name" placeholder="enter your last name">
       </div>
	   
	   <div class="input-group">
         <label>Date of Birth</label>
         <input type="date" id="name" name="Date">
       </div>
	   
	   <div class="input-group">
         <label>Mobile No</label>
        <input type="number" id="name" name="M_um" placeholder="enter your name">
       </div>
	   
	   <div class="input-group">
         <label>Gender:</label>
         <input type="radio"  name="te_gender" value="male">Male
         <input type="radio"  name="te_gender" value="female">Female
	     <input type="radio" name="te_gender" value="other">Other
       </div>
	   
	   <div class="input-group">
         <label>Address:</label>
         <input type="textarea" id="name" name="te_address" placeholder="enter your address">
       </div>
	   
	   <div class="input-group">
         <label>State:</label>
         <input type="text" id="name" name="te_state" placeholder="enter your state">
       </div>
	   
	   <div class="input-group">
         <label>City:</</label>
         <input type="text" id="name" name="te_city" placeholder="enter your city">
       </div>
	   
	   <div class="input-group">
         <label>Country:</label>
         <input type="text" id="name" name="te_country" placeholder="enter your country">
       </div>
	   
	   <div class="input-group">
         <label>Course:</label>
        <input type="radio" name="sub" value="bsc">BSc
        <input type="radio" name="sub" value="bcom">BCom
	    <input type="radio" name="sub" value="ba">BA
       </div>
	   
	   
	   <div>
	   <button name="submit">Submit</button>
	   </div>
	   
	 
	   
	
  </form> 
  
</body>
</html>