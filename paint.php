<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="dcterms.created" content="jeu., 03 oct. 2013 19:34:09 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
	
	<?php
$target_Path = "images/";
$target_Path = $target_Path.basename( $_FILES['userFile']['name'] );
move_uploaded_file( $_FILES['userFile']['tmp_name'], $target_Path );
?>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.min.js"></script>
<meta charset=utf-8 />

    <title>CrÃ©er les pentes</title>

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
  </head>

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
<div class="box">
<img src="<?php echo $target_Path ?>" class="img-polaroid" /></div>
<script>
$(document).ready(function() {
  $('.box').click(function(e) {
    var offset = $(this).offset();
  $('#position').text((e.clientX - offset.left) + ", " + (e.clientY - offset.top));
  });
});
</script>

<script type="text/javascript" language="javascript">
$(document).ready(function() {
//  $('.box').click(function(e) {
    $("div").click(function () {
    var offset = $(this).offset();
	$(this).append('<div class="inner"><p id="position"></p></div>' );
//  $( ".inner" ).append('#position').text((e.clientX - offset.left) + ", " + (e.clientY - offset.top));
	//});
  });
});
</script>
</div>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>

<div class="container">
  <div class="inner"></div>

  
</div>



  


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>