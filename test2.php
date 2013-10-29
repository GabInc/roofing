<?php 

$target_Path = "images/";

$target_Path = $target_Path.basename( $_FILES['userFile']['name'] );
move_uploaded_file( $_FILES['userFile']['tmp_name'], $target_Path );

$im = imagecreatefrompng($target_Path);
$imback = imagecreatefrompng("Motif_kagome_01(1).png");


$blue = imagecolorallocate($im, 0, 0, 255);
$transparent = imagecolorallocate($im, 0, 0, 255);
$fuchia = imagecolorallocate($im, 173, 255, 47);
$black = imagecolorallocate($im, 0, 0, 0);

$values = array(
            343, 70,  // Point 1 (x, y)
            288, 160, // Point 2 (x, y)
            199, 160, // Point 3 (x, y)
            269, 226, // Point 4 (x, y)  
            229, 297,   
            356, 258,
            457, 307,
            426, 225,
            497, 173,
            407, 154,
            );

$w = imagesx( $im ); 
$h = imagesy( $im ); 
$newwidth = $w;
$newheight = $h;
$width = $w;
$height = $h;
$thumb = imagecreatetruecolor($newwidth, $newheight);

imagecopyresized($thumb, $imback, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
imagefilledpolygon($im, $values, 10, $fuchia);
imagecolortransparent($im, $fuchia);
imagecopymerge($thumb, $im, 0, 0, 0, 0, $w, $h, 100);




// OUTPUT IMAGE: 
header("Content-Type: image/png"); 
imagepng($thumb); 
