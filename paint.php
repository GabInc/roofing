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

    <title>Créer les pentes</title>

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

img{
    max-width:640px;
	cursor: crosshair;
}
 
  </style>
  </head>

  <body onmousemove="capmouse(event)">

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
<script type="text/javascript">
 
$(document).ready(function() {
  $('#angle').hide();
  $('#pente').hide();
  $('#submitall').hide();
  $('#editversant').hide();
  $('#editangle').hide();
  $('#editpente').hide();
  
});

</script>



</div>	
<div class="box" id="box">

<img src="<?php echo $target_Path ?>" class="img-polaroid" id="testimg"/>
<script type="text/javascript">
        $("#testimg").click(function (ev) {
        mouseX = ev.pageX;
        mouseY = ev.pageY
        //alert(mouseX + ' ' + mouseY);
        var color = '#000000';
        var size = '3px';
        $("body").append(
            $('<div></div>')
                .css('position', 'absolute')
                .css('top', mouseY + 'px')
                .css('left', mouseX + 'px')
                .css('width', size)
                .css('height', size)
                .css('background-color', color)
        );
    })
</script>

</div>

<script>
$(document).ready(function() {
  $('.box').click(function(e) {
    var offset = $(this).offset();
  $('#position').text((e.clientX - offset.left) + ", " + (e.clientY - offset.top));
  $('.tabpos').append('<div class="position"><p id="position"></p></p></div>' );
  });
});
</script>
<div class="table">


<button class="btn btn-primary" id="versant">Submit versant</button>
<button class="btn btn-mini" id="editversant"><span class="glyphicon glyphicon-arrow-left"></span></button>
<button class="btn btn-primary" id="angle">Submit angle</button>
<button class="btn btn-mini" id="editangle"><span class="glyphicon glyphicon-arrow-left"></span></button>
<button class="btn btn-primary" id ="pente">Save versant</button>
<button class="btn btn-mini" id="editpente"><span class="glyphicon glyphicon-arrow-left"></span></button>
<button class="btn btn-primary" id ="submitall">Create images</button>
<script>
$(document).ready(function() {
  $('#versant').click(function () {
  $('#editversant').show(500);
  $('#angle').show(500);
  $('#versant').attr('class','btn');  
  });
}); 
</script>  

<script>
$(document).ready(function() {
  $('#angle').click(function () {
  $('#editangle').show(500);
  $('#pente').show(500);
  $('#angle').attr('class','btn');  
  });
}); 
</script>

<script>
$(document).ready(function() {
  $('#pente').click(function () {
  $('#editpente').show(500);
  $('#submitall').show(500);
  $('#pente').attr('class','btn');  
  });
}); 
</script>
<script>
$(document).ready(function() {
  $('#submitall').click(function () {
  $('#editversant').hide(500);
  $('#angle').hide(500);
  $('#editangle').hide(500);
  $('#pente').hide(500);
  $('#editpente').hide(500);
  $('#submitall').hide(500);
  });
}); 
</script>





</div>
<div class ="tabpos">

</div>


  <!--<p id="position"></p> 
<script>
$(document).ready(function() {
   $(".box").click(function(e) { 
   $('#position').text((e.clientX - offset.left) + ", " + (e.clientY - offset.top));
   });
});

</script>
<script>
$(document).ready(function() {
   $("div").click(function() {    
      $(this).append('<div class="div"><p id="position"></p></div>' );
	 // $('#position').text((e.clientX - offset.left) + ", " + (e.clientY - offset.top));

// var offset = $(this).offset();
 // $( "#target" ).click(function() {
  //  alert( "Handler for .click() called." );
//});
 // $('.box').click(function(e) {
    
 // $('#position').text((e.clientX - offset.left) + ", " + (e.clientY - offset.top));
     
   });
});
//<p id="position"></p>
</script>




<script src="http://code.jquery.com/jquery-1.9.1.js"></script>




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>