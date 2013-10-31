<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="dcterms.created" content="jeu., 03 oct. 2013 19:34:09 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">

<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.min.js"></script>
<meta charset=utf-8 />
<!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  <style>

 body {
  padding-top: 50px;

}

 
  </style>

    <title>Interlock Roofing</title>
    
    <!--[if IE]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
<body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Interlock Roofing</a>
        </div>
      </div>
    </div>
    
<?php 


	$queryimg = $_GET["imgtrav"];
	$queryimgdecoded = urldecode($queryimg);
	$queryang = $_GET["chosedangle1"];
	$querypente = $_GET["chosedpen1"];
	$queryang2 = $_GET["chosedangle2"];
	$querypente2 = $_GET["chosedpen2"];
	$queryang3 = $_GET["chosedangle3"];
	$querypente3 = $_GET["chosedpen3"];
	$queryang4 = $_GET["chosedangle4"];
	$querypente4 = $_GET["chosedpen4"];
	$queryang5 = $_GET["chosedangle5"];
	$querypente5 = $_GET["chosedpen5"];
	$queryang6 = $_GET["chosedangle6"];
	$querypente6 = $_GET["chosedpen6"];


		
if ($queryang == 1 && $querypente == 1) {
	$imback = imagecreatefrompng("1.png");
} 

elseif ($queryang == 1 && $querypente == 2) {
	    $imback = imagecreatefrompng("2.png");
	
} 

elseif ($queryang == 1 && $querypente == 3) {
	    $imback = imagecreatefrompng("3.png");
	
} 

elseif ($queryang == 1 && $querypente == 4) {
	    $imback = imagecreatefrompng("4.png");
	
} 

elseif ($queryang == 1 && $querypente == 5) {
	    $imback = imagecreatefrompng("5.png");
	
} 

elseif ($queryang == 2 && $querypente == 1) {
	    $imback = imagecreatefrompng("6.png");
	
}

elseif ($queryang == 2 && $querypente == 2) {
	    $imback = imagecreatefrompng("7.png");
	
}

elseif ($queryang == 2 && $querypente == 3) {
	    $imback = imagecreatefrompng("8.png");
	
}

elseif ($queryang == 2 && $querypente == 4) {
	    $imback = imagecreatefrompng("9.png");
	
}

elseif ($queryang == 2 && $querypente == 5) {
	    $imback = imagecreatefrompng("10.png");
	
}

elseif ($queryang == 3 && $querypente == 1) {
	    $imback = imagecreatefrompng("11.png");
	
}

elseif ($queryang == 3 && $querypente == 2) {
	    $imback = imagecreatefrompng("12.png");
	
}

elseif ($queryang == 3 && $querypente == 3) {
	    $imback = imagecreatefrompng("13.png");
	
}

elseif ($queryang == 3 && $querypente == 4) {
	    $imback = imagecreatefrompng("14.png");
	
}

elseif ($queryang == 3 && $querypente == 5) {
	    $imback = imagecreatefrompng("15.png");
	
}

else {
	$message = "Ben oui ton choix existe pas";
echo "<script type='text/javascript'>alert('$message');</script>";
	
}

if ($queryang2 == 1 && $querypente2 == 1) {
	$imback2 = imagecreatefrompng("1.png");
} 

elseif ($queryang2 == 1 && $querypente2 == 2) {
	    $imback2 = imagecreatefrompng("2.png");
	
} 

elseif ($queryang2 == 1 && $querypente2 == 3) {
	    $imback2 = imagecreatefrompng("3.png");
	
} 

elseif ($queryang2 == 1 && $querypente2 == 4) {
	    $imback2 = imagecreatefrompng("4.png");
	
} 

elseif ($queryang2 == 1 && $querypente2 == 5) {
	    $imback2 = imagecreatefrompng("5.png");
	
} 

elseif ($queryang2 == 2 && $querypente2 == 1) {
	    $imback2 = imagecreatefrompng("6.png");
	
}

elseif ($queryang2 == 2 && $querypente2 == 2) {
	    $imback2 = imagecreatefrompng("7.png");
	
}

elseif ($queryang2 == 2 && $querypente2 == 3) {
	    $imback2 = imagecreatefrompng("8.png");
	
}

elseif ($queryang2 == 2 && $querypente2 == 4) {
	    $imback2 = imagecreatefrompng("9.png");
	
}

elseif ($queryang2 == 2 && $querypente2 == 5) {
	    $imback2 = imagecreatefrompng("10.png");
	
}

elseif ($queryang2 == 3 && $querypente2 == 1) {
	    $imback2 = imagecreatefrompng("11.png");
	
}

elseif ($queryang2 == 3 && $querypente2 == 2) {
	    $imback2 = imagecreatefrompng("12.png");
	
}

elseif ($queryang2 == 3 && $querypente2 == 3) {
	    $imback2 = imagecreatefrompng("13.png");
	
}

elseif ($queryang2 == 3 && $querypente2 == 4) {
	    $imback2 = imagecreatefrompng("14.png");
	
}

elseif ($queryang2 == 3 && $querypente2 == 5) {
	    $imback2 = imagecreatefrompng("15.png");
	
}

else {

	
}

if ($queryang3 == 1 && $querypente3 == 1) {
	$imback3 = imagecreatefrompng("1.png");
} 

elseif ($queryang3 == 1 && $querypente3 == 2) {
	    $imback3 = imagecreatefrompng("2.png");
	
} 

elseif ($queryang3 == 1 && $querypente3 == 3) {
	    $imback3 = imagecreatefrompng("3.png");
	
} 

elseif ($queryang3 == 1 && $querypente3 == 4) {
	    $imback3 = imagecreatefrompng("4.png");
	
} 

elseif ($queryang3 == 1 && $querypente3 == 5) {
	    $imback3 = imagecreatefrompng("5.png");
	
} 

elseif ($queryang3 == 2 && $querypente3 == 1) {
	    $imback3 = imagecreatefrompng("6.png");
	
}

elseif ($queryang3 == 2 && $querypente3 == 2) {
	    $imback3 = imagecreatefrompng("7.png");
	
}

elseif ($queryang3 == 2 && $querypente3 == 3) {
	    $imback3 = imagecreatefrompng("8.png");
	
}

elseif ($queryang3 == 2 && $querypente3 == 4) {
	    $imback3 = imagecreatefrompng("9.png");
	
}

elseif ($queryang3 == 2 && $querypente3 == 5) {
	    $imback3 = imagecreatefrompng("10.png");
	
}

elseif ($queryang3 == 3 && $querypente3 == 1) {
	    $imback3 = imagecreatefrompng("11.png");
	
}

elseif ($queryang3 == 3 && $querypente3 == 2) {
	    $imback3 = imagecreatefrompng("12.png");
	
}

elseif ($queryang3 == 3 && $querypente3 == 3) {
	    $imback3 = imagecreatefrompng("13.png");
	
}

elseif ($queryang3 == 3 && $querypente3 == 4) {
	    $imback3 = imagecreatefrompng("14.png");
	
}

elseif ($queryang3 == 3 && $querypente3 == 5) {
	    $imback3 = imagecreatefrompng("15.png");
	
}

else {

	
}

if ($queryang4 == 1 && $querypente4 == 1) {
	$imback4 = imagecreatefrompng("1.png");
} 

elseif ($queryang4 == 1 && $querypente4 == 2) {
	    $imback4 = imagecreatefrompng("2.png");
	
} 

elseif ($queryang4 == 1 && $querypente4 == 3) {
	    $imback4 = imagecreatefrompng("3.png");
	
} 

elseif ($queryang4 == 1 && $querypente4 == 4) {
	    $imback4 = imagecreatefrompng("4.png");
	
} 

elseif ($queryang4 == 1 && $querypente4 == 5) {
	    $imback4 = imagecreatefrompng("5.png");
	
} 

elseif ($queryang4 == 2 && $querypente4 == 1) {
	    $imback4 = imagecreatefrompng("6.png");
	
}

elseif ($queryang4 == 2 && $querypente4 == 2) {
	    $imback4 = imagecreatefrompng("7.png");
	
}

elseif ($queryang4 == 2 && $querypente4 == 3) {
	    $imback4 = imagecreatefrompng("8.png");
	
}

elseif ($queryang4 == 2 && $querypente4 == 4) {
	    $imback4 = imagecreatefrompng("9.png");
	
}

elseif ($queryang4 == 2 && $querypente4 == 5) {
	    $imback4 = imagecreatefrompng("10.png");
	
}

elseif ($queryang4 == 3 && $querypente4 == 1) {
	    $imback4 = imagecreatefrompng("11.png");
	
}

elseif ($queryang4 == 3 && $querypente4 == 2) {
	    $imback4 = imagecreatefrompng("12.png");
	
}

elseif ($queryang4 == 3 && $querypente4 == 3) {
	    $imback4 = imagecreatefrompng("13.png");
	
}

elseif ($queryang4 == 3 && $querypente4 == 4) {
	    $imback4 = imagecreatefrompng("14.png");
	
}

elseif ($queryang4 == 3 && $querypente4 == 5) {
	    $imback4 = imagecreatefrompng("15.png");
	
}

else {

	
}
	
if ($queryang5 == 1 && $querypente5 == 1) {
	$imback5 = imagecreatefrompng("1.png");
} 

elseif ($queryang5 == 1 && $querypente5 == 2) {
	    $imback5 = imagecreatefrompng("2.png");
	
} 

elseif ($queryang5 == 1 && $querypente5 == 3) {
	    $imback5 = imagecreatefrompng("3.png");
	
} 

elseif ($queryang5 == 1 && $querypente5 == 4) {
	    $imback5 = imagecreatefrompng("4.png");
	
} 

elseif ($queryang5 == 1 && $querypente5 == 5) {
	    $imback5 = imagecreatefrompng("5.png");
	
} 

elseif ($queryang5 == 2 && $querypente5 == 1) {
	    $imback5 = imagecreatefrompng("6.png");
	
}

elseif ($queryang5 == 2 && $querypente5 == 2) {
	    $imback5 = imagecreatefrompng("7.png");
	
}

elseif ($queryang5 == 2 && $querypente5 == 3) {
	    $imback5 = imagecreatefrompng("8.png");
	
}

elseif ($queryang5 == 2 && $querypente5 == 4) {
	    $imback5 = imagecreatefrompng("9.png");
	
}

elseif ($queryang5 == 2 && $querypente5 == 5) {
	    $imback5 = imagecreatefrompng("10.png");
	
}

elseif ($queryang5 == 3 && $querypente5 == 1) {
	    $imback5 = imagecreatefrompng("11.png");
	
}

elseif ($queryang5 == 3 && $querypente5 == 2) {
	    $imback5 = imagecreatefrompng("12.png");
	
}

elseif ($queryang5 == 3 && $querypente5 == 3) {
	    $imback5 = imagecreatefrompng("13.png");
	
}

elseif ($queryang5 == 3 && $querypente5 == 4) {
	    $imback5 = imagecreatefrompng("14.png");
	
}

elseif ($queryang5 == 3 && $querypente5 == 5) {
	    $imback5 = imagecreatefrompng("15.png");
	
}

else {

	
}

if ($queryang6 == 1 && $querypente6 == 1) {
	$imback6 = imagecreatefrompng("1.png");
} 

elseif ($queryang6 == 1 && $querypente6 == 2) {
	    $imback6 = imagecreatefrompng("2.png");
	
} 

elseif ($queryang6 == 1 && $querypente6 == 3) {
	    $imback6 = imagecreatefrompng("3.png");
	
} 

elseif ($queryang6 == 1 && $querypente6 == 4) {
	    $imback6 = imagecreatefrompng("4.png");
	
} 

elseif ($queryang6 == 1 && $querypente6 == 5) {
	    $imback6 = imagecreatefrompng("5.png");
	
} 

elseif ($queryang6 == 2 && $querypente6 == 1) {
	    $imback6 = imagecreatefrompng("6.png");
	
}

elseif ($queryang6 == 2 && $querypente6 == 2) {
	    $imback6 = imagecreatefrompng("7.png");
	
}

elseif ($queryang6 == 2 && $querypente6 == 3) {
	    $imback6 = imagecreatefrompng("8.png");
	
}

elseif ($queryang6 == 2 && $querypente6 == 4) {
	    $imback6 = imagecreatefrompng("9.png");
	
}

elseif ($queryang6 == 2 && $querypente6 == 5) {
	    $imback6 = imagecreatefrompng("10.png");
	
}

elseif ($queryang6 == 3 && $querypente6 == 1) {
	    $imback6 = imagecreatefrompng("11.png");
	
}

elseif ($queryang6 == 3 && $querypente6 == 2) {
	    $imback6 = imagecreatefrompng("12.png");
	
}

elseif ($queryang6 == 3 && $querypente6 == 3) {
	    $imback6 = imagecreatefrompng("13.png");
	
}

elseif ($queryang6 == 3 && $querypente6 == 4) {
	    $imback6 = imagecreatefrompng("14.png");
	
}

elseif ($queryang6 == 3 && $querypente6 == 5) {
	    $imback6 = imagecreatefrompng("15.png");
	
}

else {

	
}		
	$im = imagecreatefromjpeg($queryimgdecoded);

imageantialias($imback, true);

if ($queryang2 != '') {
	imageantialias($imback2, true);
} else {
	
}

if ($queryang3 != '') {
	imageantialias($imback3, true);
} else {
	
}
if ($queryang4 != '') {
	imageantialias($imback4, true);
} else {
	
}
if ($queryang5 != '') {
	imageantialias($imback5, true);
} else {
	
}
if ($queryang6 != '') {
	imageantialias($imback6, true);
} else {
	
}

$querypos1 = $_GET["chosedposition1"];
$querypos1 = str_replace("pos.", "", $querypos1);
$position1 = (explode('.', $querypos1, 200));

$numberarray = count($position1)/2;

$fuchia = imagecolorallocate($im, 173, 255, 47);
$black = imagecolorallocate($im, 0, 0, 0);


$w = imagesx( $im ); 
$h = imagesy( $im ); 
$newwidth = $w;
$newheight = $h;
$width = $w;
$height = $h;
$thumb = imagecreatetruecolor($newwidth, $newheight);

imagecopyresized($thumb, $imback, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
imagefilledpolygon($im, $position1, $numberarray, $fuchia);
imagecolortransparent($im, $fuchia);
imagecopymerge($thumb, $im, 0, 0, 0, 0, $w, $h, 100);
imageantialias($thumb, true);
imagepolygon($thumb, $position1, $numberarray, $black);

$querypos2 = $_GET["chosedposition2"];

if (empty($querypos2)) {
	imagepng($thumb, $queryimgdecoded);
	  
}

else{
$querypos2 = str_replace("pos.", "", $querypos2);
$position2 = (explode('.', $querypos2, 200));

$numberarray2 = count($position2)/2;

$fuchia = imagecolorallocate($thumb, 173, 255, 47);
$black = imagecolorallocate($thumb, 0, 0, 0);

$thumb2 = imagecreatetruecolor($newwidth, $newheight);
imagecopyresized($thumb2, $imback2, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
imagefilledpolygon($thumb, $position2, $numberarray2, $fuchia);
imagecolortransparent($thumb, $fuchia);
imagecopymerge($thumb2, $thumb, 0, 0, 0, 0, $w, $h, 100);
imageantialias($thumb2, true);
imagepolygon($thumb2, $position2, $numberarray2, $black);


}

$querypos3 = $_GET["chosedposition3"];

if (empty($querypos3) && ($querypos2 != '') ) {
	imagepng($thumb2, $queryimgdecoded);
}	
	
else if (empty($querypos3) && empty($querypos2) ) {
    imagepng($thumb, $queryimgdecoded);


}	
else {
$querypos3 = str_replace("pos.", "", $querypos3);
$position3 = (explode('.', $querypos3, 200));

$numberarray3 = count($position3)/2;

$fuchia = imagecolorallocate($thumb2, 173, 255, 47);
$black = imagecolorallocate($thumb2, 0, 0, 0);

$thumb3 = imagecreatetruecolor($newwidth, $newheight);
imagecopyresized($thumb3, $imback3, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
imagefilledpolygon($thumb2, $position3, $numberarray3, $fuchia);
imagecolortransparent($thumb2, $fuchia);
imagecopymerge($thumb3, $thumb2, 0, 0, 0, 0, $w, $h, 100);
imageantialias($thumb3, true);
imagepolygon($thumb3, $position3, $numberarray3, $black);	
	
}

$querypos4 = $_GET["chosedposition4"];
if (empty($querypos4) && ($querypos3 != '') ) {
	imagepng($thumb3, $queryimgdecoded);
}	
	
else if (empty($querypos4) && empty($querypos3) && empty($querypos2)) {
    imagepng($thumb, $queryimgdecoded);


}	

else if (empty($querypos4) && empty($querypos3) && ($querypos2 != '')) {
    imagepng($thumb2, $queryimgdecoded);


}		
else{
$querypos4 = str_replace("pos.", "", $querypos4);
$position4 = (explode('.', $querypos4, 200));

$numberarray4 = count($position4)/2;

$fuchia = imagecolorallocate($thumb3, 173, 255, 47);
$black = imagecolorallocate($thumb3, 0, 0, 0);

$thumb4 = imagecreatetruecolor($newwidth, $newheight);
imagecopyresized($thumb4, $imback4, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
imagefilledpolygon($thumb3, $position4, $numberarray4, $fuchia);
imagecolortransparent($thumb3, $fuchia);
imagecopymerge($thumb4, $thumb3, 0, 0, 0, 0, $w, $h, 100);
imageantialias($thumb4, true);
imagepolygon($thumb4, $position4, $numberarray4, $black);


}	

$querypos5 = $_GET["chosedposition5"];
if (empty($querypos5) && ($querypos4 != '')) {
	imagepng($thumb4, $queryimgdecoded);
}	

else if (empty($querypos5) && empty($querypos4) && empty($querypos3) && empty($querypos2)) {
    imagepng($thumb, $queryimgdecoded);


}	

else if (empty($querypos5) && empty($querypos4 )&& empty($querypos3) && ($querypos2 != '')) {
    imagepng($thumb2, $queryimgdecoded);


}

else if (empty($querypos5) && empty($querypos4 ) && ($querypos3 != '')) {
    imagepng($thumb3, $queryimgdecoded);


}
	
else{
$querypos5 = str_replace("pos.", "", $querypos5);
$position5 = (explode('.', $querypos5, 200));

$numberarray5 = count($position5)/2;

$fuchia = imagecolorallocate($thumb4, 173, 255, 47);
$black = imagecolorallocate($thumb4, 0, 0, 0);

$thumb5 = imagecreatetruecolor($newwidth, $newheight);
imagecopyresized($thumb5, $imback5, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
imagefilledpolygon($thumb4, $position5, $numberarray5, $fuchia);
imagecolortransparent($thumb4, $fuchia);
imagecopymerge($thumb5, $thumb4, 0, 0, 0, 0, $w, $h, 100);
imageantialias($thumb5, true);
imagepolygon($thumb5, $position5, $numberarray5, $black);


}
$querypos6 = $_GET["chosedposition6"];
if (empty($querypos6) && ($querypos5 != '')) {
	imagepng($thumb5, $queryimgdecoded);
}	

else if (empty($querypos6) && empty($querypos5) && empty($querypos4) && empty($querypos3) && empty($querypos2)) {
    imagepng($thumb, $queryimgdecoded);


}	

else if (empty($querypos6) && empty($querypos5) && empty($querypos4 )&& empty($querypos3) && ($querypos2 != '')) {
    imagepng($thumb2, $queryimgdecoded);


}

else if (empty($querypos6) && empty($querypos5) && empty($querypos4 ) && ($querypos3 != '')) {
    imagepng($thumb3, $queryimgdecoded);


}	

else if (empty($querypos6) && empty($querypos5) && ($querypos4 != '')) {
    imagepng($thumb4, $queryimgdecoded);


}
else{
$querypos6 = str_replace("pos.", "", $querypos6);
$position6 = (explode('.', $querypos6, 200));

$numberarray6 = count($position6)/2;

$fuchia = imagecolorallocate($thumb5, 173, 255, 47);
$black = imagecolorallocate($thumb5, 0, 0, 0);

$thumb6 = imagecreatetruecolor($newwidth, $newheight);
imagecopyresized($thumb6, $imback6, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
imagefilledpolygon($thumb5, $position6, $numberarray6, $fuchia);
imagecolortransparent($thumb5, $fuchia);
imagecopymerge($thumb6, $thumb5, 0, 0, 0, 0, $w, $h, 100);
imageantialias($thumb6, true);
imagepolygon($thumb6, $position6, $numberarray6, $black);

imagepng($thumb6, $queryimgdecoded);
}
?>


	
<div class="box" id="box">
	<img src="<?php echo $queryimgdecoded ?>" class="img-polaroid" id="testimg"/>
</div>
	
<p id="position"></p>



positions1 : <?php echo $_GET["chosedposition1"]; ?><br>
angle1 : <?php echo $_GET["chosedangle1"]; ?><br>
pente1 : <?php echo $_GET["chosedpen1"]; ?><br>

positions2 : <?php echo $_GET["chosedposition2"]; ?><br>
angle2 : <?php echo $_GET["chosedangle2"]; ?><br>
pente2 : <?php echo $_GET["chosedpen2"]; ?><br>

positions3 : <?php echo $_GET["chosedposition3"]; ?><br>
angle3 : <?php echo $_GET["chosedangle3"]; ?><br>
pente3 : <?php echo $_GET["chosedpen3"]; ?><br>

positions4 : <?php echo $_GET["chosedposition4"]; ?><br>
angle4 : <?php echo $_GET["chosedangle4"]; ?><br>
pente4 : <?php echo $_GET["chosedpen4"]; ?><br>

positions5 : <?php echo $_GET["chosedposition5"]; ?><br>
angle5 : <?php echo $_GET["chosedangle5"]; ?><br>
pente5 : <?php echo $_GET["chosedpen5"]; ?><br>

positions6 : <?php echo $_GET["chosedposition6"]; ?><br>
angle6 : <?php echo $_GET["chosedangle6"]; ?><br>
pente6 : <?php echo $_GET["chosedpen6"]; ?><br>

<script>

$(document).ready(function() {
  $('.box').click(function(e) {
    var offset = $(this).offset();
    $('#position').text((e.clientX - offset.left) + ", " + (e.clientY - offset.top));
  });
});
</script>
  </body>
</html>