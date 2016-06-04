<html>
  <body>
    <?php
      $red = hexdec(substr($_POST['color'], 1, 2));
      $green = hexdec(substr($_POST['color'], 3, 2));
      $blue = hexdec(substr($_POST['color'], 5, 2));
      system ( "pigs p 17 " . $red );
      system ( "pigs p 22 " . $green );
      system ( "pigs p 24 " . $blue );
      print_r ("Set colors to: " . $red . ", " . $green . ", " . $blue . ".");
    ?>
  </body>
</html>
