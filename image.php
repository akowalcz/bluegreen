<?php
// Create a 55x30 image
$im = imagecreatetruecolor(200, 200);
$white = imagecolorallocate($im, 255, 255, 255);



// Draw a filled rectangle
imagefilledrectangle($im, 0, 0, 0, 0, $color);

// Save the image
header('Content-Type: image/png');
imagePNG($im);
imagedestroy($im);
?>
