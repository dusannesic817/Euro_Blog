<?php
  require_once 'app/database/DbConnection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/3f1d14d928.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="public/main.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light ">
    <a class="navbar-brand" href="#">
        <img src="public/images/logo_euro_nav.png" width="260" height="90" class="d-inline-block align-top" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link" href="#" style="color:white;">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="color:white;">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="color:white;">About2</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="color:white;">Tickets</a>
            </li>
        </ul>     
        <ul class="navbar-nav">
          <?php
            if(isset($_SESSION['id'])){
          ?>
            <li class="nav-item">
              <a class="nav-link" href="create_post.php" style="color:white;">Create</a>
            </li>
          <?php
          }
          ?>

            <li class="nav-item">
              <a class="nav-link" href="javascript:void(0)" id="loginLink" data-bs-toggle="modal" data-bs-target="#logModal" style="color:white;">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:void(0)" id="registerLink" data-bs-toggle="modal" data-bs-target="#regModal" style="color:white;">Register</a>
            </li>
        </ul>
    </div>
</nav>
