<?php

session_start();

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../includes/style.inc.css">
    <!--link rel="stylesheet" href="../includes/reset.inc.css"-->
    <link rel="icon" href="../img/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <header class="header">
      <nav class="navbar">
        <img src="../img/logo.png" alt="logo" class="logo">
        <ul class="menu">
          <li><a href="../home">Home</a></li>
          <li><a href="../games">Games</a></li>
          <li><a href="../about">About</a></li>
          <li><a href="../contact">Contact</a></li>
        </ul>
        <?php
          /*if ($_SESSION['userid']) {
            echo '<div class="loginform">
            <p class="loginstatus">You are logged in as '.$_SESSION['useruid'].'</p>
            <form action="../includes/logout.inc.php" method="post">
              <button type="submit" name="logout-submit" class="logininput">Logout</button>
            </form></div>';
          } else {
            echo '<div class="loginform">
            <form action="../includes/login.inc.php" method="post">
              <input type="text" name="uid" placeholder="Username" id="username" class="logininput"/>
              <input type="password" name="password" placeholder="Password" id="password" class="logininput"/>
              <button type="submit" name="login-submit" class="logininput">Login</button>
            </form>
            <form action="../signup">
              <button type="submit" name="signup" class="logininput">Sign up</button>
            </form></div>';

            if (isset($_GET['error'])) {
              if ($_GET['error'] == 'wrongpassword') {
                echo '<script type="text/javascript">
                  document.getElementById("password").placeholder = "Wrong password!";
                  document.getElementById("username").value = "'.$_GET["emailuid"].'";
                </script>
                <style>
                  #password::placeholder {
                    color: #FF0000;
                  }
                </style>';
              }
            }
          }*/
        ?>
      </nav>
    </header>
  </body>
</html>
