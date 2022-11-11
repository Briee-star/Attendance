<?php
//This includes the session file. This file contains code that starts/resume a session.
//By having it in the header file, it will be included on every page , allowing session capability to be used on every page across the website.

include_once 'includes/session.php'
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

   <link rel="stylesheet" href="css/site.css" /> 
    
   <title>Attendance - <?php echo $title ?></title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-primary bg-primary">
  <div class="container">
  <a class="navbar-brand" href="index.php">IT Conference</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link active" aria-current="Home" href="index.php">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="View Attendees" href="viewrecords.php">View Attendees</a>
        </li>
      </ul>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php 
            if(!isset($_SESSION['userid'])){
         ?>
            <a class="nav-link active" aria-current="Login" href="login.php">Login</a>
          <?php } else { ?>
            <a class="nav-item nav-link" href="#"><span>Hello <?php echo $_SESSION['username'] ?>! </span></a>
            <a class="nav-link active" aria-current="Logout" href="logout.php">Logout</a>
            <?php } ?>
        
        
        </li>
      </ul>
    </div>
  </div>
</nav>
  
<br>

<div class="container">