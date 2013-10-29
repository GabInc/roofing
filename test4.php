<?php

$target_Path = "images/";

$target_Path = $target_Path.basename( $_FILES['userFile']['name'] );
move_uploaded_file( $_FILES['userFile']['tmp_name'], $target_Path );

// Setup an image
$im = imagecreatefrompng($target_Path);
$imback = imagecreatefrompng("Motif_kagome_01(1).png");

$values = array(
            17,  80,  // Point 1 (x, y)
            9,  110, // Point 2 (x, y)
            231,  110,  // Point 3 (x, y)
            214, 80,  // Point 4 (x, y)   
            );



			
// allocate colors
$blue = imagecolorallocate($im, 0, 0, 255);
$transparent = imagecolorallocate($im, 0, 0, 255);
$fuchia = imagecolorallocate($im, 255, 0, 255);
$black = imagecolorallocate($im, 0, 0, 0);

imagecolortransparent($im, $fuchia);
imagefilledpolygon($im, $values, 4, $fuchia);
imagecopy($imback, $im, 0, 0, 0, 0, 400, 400);


header('Content-type: image/png');
imagepng($imback);
imagedestroy($imback);
imagedestroy($im);
?>