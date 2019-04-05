<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <title> Test Page </title>
  </head>
  <body>
    <h1> Test Page of For </h1>
    <p>
      <?php

        $roll1 = 0;
        $roll2 = 0;

        $en = [
          1 => 'one',
          2 => 'two',
          3 => 'three',
          4 => 'four',
          5 => 'five',
          6 => 'six'
        ];

        $roll1 = rand(1, 6);
        $roll2 = rand(1, 6);

        echo '<p>You rolled a ' . $en[$roll1] . ' and a ' . $en[$roll2] . '.</p>';

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
