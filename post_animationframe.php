<?php
$bmpfile = $_POST["filedata"];
file_put_contents("animation.txt", $bmpfile . "|", FILE_APPEND | LOCK_EX);
//echo("what");
?>