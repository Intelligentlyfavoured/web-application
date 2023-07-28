<?php

@include 'connection.php';

session_start();

if(!isset($_SESSION['name'])){
   header('location:login_form.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title> Admin Page </title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>
<body>

<header>
	
<nav>
	<div class="logo"> <h1 style="font-size: 20px;"> HEARTLAND </h1> </div>
	<div class="menu">
		<a href="../index.html" style="font-size:56 ">Home</a>
		<a href="Logout.php">Logout</a>
		<a href="https://www.youtube.com/channel/UCwfaAHy4zQUb2APNOGXUCCA" target="_blank">about</a>
		<a href="#">contact</a>
	</div>
</nav>

	<main>
		<section>
      <h1>welcome <span><?php echo $_SESSION['name'] ?></span></h1>
			
			<a href="viewpatients.php" class="btnone"> View users </a>
			<a href="add_drugs.html" class="btntwo"> Add drugs</a>
			
		</section>
	</main>


</header>


</body>
</html>





   

      
   

