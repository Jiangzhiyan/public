<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <title>Test Page</title>
  </head>
  <body>
    <p>
      <?php

        $roll = rand(1, 6);

        echo '<p>You rolled a ' . $roll . '.</p>';

        if ($roll == 6) {
          // code...
          echo '<p> You win! </p>';
        } else {
          // code...
          echo '<p> Sorry, you didn\'t win, better luck next time! </p>';
        }

        echo '<p> Thank you for playing </p>';

      ?>
    </p>
  </body>
</html>
