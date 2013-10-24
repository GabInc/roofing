<?php

$target_Path = "images/";

$target_Path = $target_Path.basename( $_FILES['userFile']['name'] );
move_uploaded_file( $_FILES['userFile']['tmp_name'], $target_Path );

// Setup an image
$im = imagecreatefromjpeg($target_Path);
$imback = imagecreatefromjpeg("motiftoit.jpg");

$values = array(
            18,  80,  // Point 1 (x, y)
            9,  110, // Point 2 (x, y)
            231,  110,  // Point 3 (x, y)
            214, 80,  // Point 4 (x, y)   
            );



			
// allocate colors
$bg   = imagecolorallocate($imback, 0, 0, 0);
$blue = imagecolorallocate($im, 0, 0, 255);


// draw a polygon
imagefilledpolygon($im, $values, 4,$bg);

imagecopy($imback, $im, 0, 0, 20, 13, 80, 40);


header('Content-type: image/jpeg');
imagejpeg($im);
imagejpeg($imback);
imagedestroy($imback);
imagedestroy($im);
?>