<!DOCTYPE html>
<html>
<head>
    <title>CarDealer</title>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/main.css">

</head>
<body>
<nav class="navbar navbar-inverse">
<div class="container">
      <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php"><?php echo SITE_TITLE; ?></a>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <?php 
            if(isset($_SESSION['u_id'])){
              echo '<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                  <li role="presentation"><a href="index.php">Home</a></li>
                  <li role="presentation"><a href="create.php">Create Listing</a></li>
              </ul>
              <form action="includes/logout.inc.php" method="POST">
                <button type="submit" name="logout-submit">Logout</button>
                </form>';
            } else {
                echo '<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li role="presentation"><a href="index.php">Home</a></li>
                </ul>
                <form action="includes/login.inc.php" method="POST">
                <input type="text" name="mailuid" placeholder="Username/e-mail">
                <input type="password" name="pwd" placeholder="Pasword">
                <button type="submit" name="login-submit">Login</button>
                </form>';          
              }
          ?>
        </ul>
        <div>
    </nav>
      <?php displayMessage(); ?>