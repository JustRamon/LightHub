<body>
  <?php
  function rgb2html($r, $g=-1, $b=-1)
  {
  if (is_array($r) && sizeof($r) == 3)
      list($r, $g, $b) = $r;

    $r = intval($r); $g = intval($g);
    $b = intval($b);

    $r = dechex($r<0?0:($r>255?255:$r));
    $g = dechex($g<0?0:($g>255?255:$g));
    $b = dechex($b<0?0:($b>255?255:$b));

    $color = (strlen($r) < 2?'0':'').$r;
    $color .= (strlen($g) < 2?'0':'').$g;
    $color .= (strlen($b) < 2?'0':'').$b;
    return '#'.$color;
  }
    exec ("pigs gdc 17", $oldred);
    exec ("pigs gdc 22", $oldgreen);
    exec ("pigs gdc 24", $oldblue);

    $oldcolor = rgb2html($oldred[0], $oldgreen[0], $oldblue[0]);

    if(isset($_POST['color']))
    {
      $newcolor = $_POST['color'];
      $red = hexdec(substr($_POST['color'], 1, 2));
      $green = hexdec(substr($_POST['color'], 3, 2));
      $blue = hexdec(substr($_POST['color'], 5, 2));
      system ( "pigs p 17 " . $red );
      system ( "pigs p 22 " . $green );
      system ( "pigs p 24 " . $blue );
    }
   ?>
  <h1>Ledstrip - Controller</h1>
  <form method ="post">
   Select a color: <input type="color" name="color" onchange="this.form.submit();" <?php if(!isset($_POST['color'])){echo("value=\"" . $oldcolor . "\"" );}else{echo("value=\"" . $newcolor . "\"" );} ?> >
  </form>
  <p>Version 0.5</p>
</body>
