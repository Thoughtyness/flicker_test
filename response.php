<?php
  $z=$_GET["z"];
  $x=$_GET["x"];
  $y=$_GET["y"];

  header("Content-type: image/png");
  readfile("https://localhost/flicker_test/tiles_with_alpha/".$z."-".$x."-".$y.".png");
?>