<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exo3</title>
  </head>
  <body>
    <?php
      $min = 0;
      $max = 300;
      $chiffresPairs = '';
      for ($i = $min; $i <= $max; $i++) {
          if ( $i % 2 == 0 ) {
              $chiffresPairs .= $i.' ';
          }
      }
      echo "Les chiffres pairs compris entre $min et $max sont: $chiffresPairs";
    ?>

  </body>
</html>
