<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <title><h1> Test Page </h1></title>
  </head>
  <body>
    <p>
      <?php

        $roll1 = rand(1, 6);
        $roll2 = rand(1, 6);

        echo '<p>You rolled a ' . $roll1 . ' and a ' . $roll2 . '.</p>';

        if ($roll1 == 6 && $roll2 == 6) {

          echo '<p> You win! </p>';

        } else {

          echo '<p> Sorry, you didn\'t win, better luck next time! </p>';

        }

        echo '<p> Thank you for playing </p>';

      ?>
    </p>
  </body>
</html>
