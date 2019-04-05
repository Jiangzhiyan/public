<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <title> Test Page </title>
  </head>
  <body>
    <h1> Test Page For Rolling </h1>
    <p>
      <?php

        $roll1 = 0;
        $roll2 = 0;

        for ($i = 0; $i < 10; $i++) {

          $roll1 = rand(1, 6);
          $roll2 = rand(1, 6);

          echo '<p>You rolled a ' . $roll1 . ' and a ' . $roll2 . '.</p>';

          if ($roll1 == 6 && $roll2 == 6) {

            echo '<p> You win! </p>';

          } else {

            echo '<p> Sorry, you didn\'t win, better luck next time! </p>';

          }
        }



        echo '<p> Thank you for playing </p>';

      ?>
    </p>
  </body>
</html>
