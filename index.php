<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="target-densitydpi=device-dpi, initial-scale=1.0, user-scalable=no" />
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.min.js"></script>
    <title>Interlock Roofing</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
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
#tips {
	margin-top:10px;


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
          <a class="navbar-brand" href="http://www.lfhs.ca/roofing/">Interlock Roofing</a>
        </div>
      </div>
    </div>

<div class="container">
	  <div class="row-fluid">	
	<div class="alert alert-info" id="tips">Choisir une image ou prendre une photo</div> 
  </div> 
	<form role="form"  enctype="multipart/form-data" action="paint.php" method="POST">
  <div class="form-group choosefile">
   <br> <label for="exampleInputFile">File input</label> </br>
    <input type="file" name="userFile" id="exampleInputFile">
    <p class="help-block">Choose the image you want to work on</p>

  <button type="submit" class="btn btn-default btn-lg soumettre">Submit</button>
    </form>
  </div>

</div>
<div class="test" id="test">
</div>
<script>
$(document).ready(function() { 
	$("#exampleInputFile").change(function(){
		$("#tips").empty();
        $("#tips").append("Vous pouvez maintenant soumettre votre image... ou en chosir une autre...");
    });
});
</script>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>