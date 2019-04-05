<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1> Test Pages of Get </h1>
    <?php

      $firstname = $_GET['firstname'];
      $lastname = $_GET['lastname'];
      
      echo 'Welcome to our website, ' .
        htmlspecialchars($firstname, ENT_QUOTES, 'UTF-8') . ' ' .
        htmlspecialchars($lastname, ENT_QUOTES, 'UTF-8') . '!';

    ?>

  </body>
</html>
