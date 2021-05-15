<?php
    include("connection.php");
    error_reporting(0);
    session_start();

    if(!$_SESSION['auth']) {
      header('location:index.php');
    }
    else {
      $currentTime = time();
      if($currentTime > $_SESSION['expire']) {
        session_unset();
        session_destroy();
        header('location:logout.php');
      }
      else {
  ?>
    
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Home Page</title>
    </head>
    <body>
      <div class="row no-gutters d-flex justify-content-end pr-3">
        <a href="logout.php" class="logout">
          <input type="submit" name="login" class="btn btn-secondary mt-3"  
           value="Log Out">
     </a>
      </div>
      <h1 class="text-center">Welcome to the Home Page</h1> 
    </body>
    <?php
        }
      }
    ?>
  </html>