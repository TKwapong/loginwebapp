<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="stylesheet.css" rel="stylesheet" />
    
</head>
<body>
<nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">LoginApp</label>
      <ul>
        <li><a href="reset-password.php">Password Reset</a></li>
        <li><a href="logout.php">Sign Out</a></li>
      </ul>
    </nav>
    <div class="center">
        <p>
        <h1>Hello, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.</h1>
    <h2> Welcome to my site. Stay tuned for more...😊</h2>

        </p>
    

    </div>
    
</body>
</html>