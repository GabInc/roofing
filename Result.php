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
.starter-template {
  padding: 40px 15px;
  text-align: center;
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
	$query = $_GET["imgtrav"];
	
	foreach (explode('&', $query) as $chunk) {
    $param = explode("=", $chunk);

    if ($param) {
       printf("\"%s\"<br/>\n", urldecode($param[0]), urldecode($param[1]));
    }
}?>
<div class="box" id="box">

	</div>

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


  </body>
</html>