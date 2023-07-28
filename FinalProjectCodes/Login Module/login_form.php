<?php
    require_once("connection.php");
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Name = $_POST['name'];
        $Password = $_POST['password'];
    
        // Use prepared statement to prevent SQL injection
        $stmt = mysqli_prepare($conn, "SELECT SSN, Name, Password, user_type FROM user_form WHERE Name = ? AND Password = ?");
        mysqli_stmt_bind_param($stmt, "ss", $Name, $Password);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
    
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
    
        if ($count == 1) {
            $_SESSION['name'] = $Name;
            $_SESSION['password'] = $Password;
            $_SESSION['SSN'] = $row['SSN'];
    
            // Redirect based on user_type
            if ($row['user_type'] == 'admin') {
                header("Location: ../Admin/AdminLanding.php");
                exit;
            } elseif ($row['user_type'] == 'Patient') {
                header("Location: ../Patient/PatientLanding.php");
                exit;
            } elseif ($row['user_type'] == 'Doctor') {
                header("Location: ../Doctor/DoctorLanding.php");
                exit;
            } elseif ($row['user_type'] == 'Pharmacist') {
                header("Location: ../Pharmacist/PharmacistLanding.php");
                exit;
            } else {
                // Handle other user types or invalid user_type values
                // For now, we'll redirect to a generic error page
                header("Location: ErrorPage.html");
                exit;
            }
        } else {
            $error = "Your Login Name or Password is invalid";
        }
    }
    

?>








<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/styling.css">
 <style>
 body{background-image: url("images/staff2.jpg") ;}</style> 
</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
    
      <input type="name" name="name" required placeholder="enter your username">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="register_form.php">register now</a></p>
   </form>

</div>

</body>
</html>
