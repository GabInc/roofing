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
.position{  
    width:100px;
    border-width: 1px; 
	border-style: solid; 
	border-color: #000000;


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
  $('#boutonangle').hide();
  $('#pente').hide();
  $('#submitall').hide();
  $('#editversant').hide();
  $('#editangle').hide();
  $('#editpente').hide();
  $('#eraselast').hide();  
  
  
});

</script>

<script>
$(document).ready(function() {
  $('#testimg').click(function(e) {
    if ( $('#tabpos').children().length > 2 ) {
     $('#versant').removeAttr('disabled'); 
	 }
  });
});


</script>
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
  $('#testimg').click(function(e) {
    var offset = $(this).offset();
	var msg = "";
 msg += event.pageX + ", " + event.pageY;
  $( ".tabpos" ).append( "<div>" + msg + "</div>" );
  $('#eraselast').show(350);
  });
});
</script>
<div class="table">


<button class="btn btn-primary" id="versant" disabled="disabled">Submit positons</button>
<button class="btn btn-mini" id="editversant"><span class="glyphicon glyphicon-arrow-left"></span></button>
<div class="btn-group-vertical" id="boutonangle">
<button type="radio" class="btn btn-primary" id="angle" disabled="disabled">Submit angle</button>
<button type="radio" class="btn btn-primary" id="angle1">45°</button>
<button type="radio" class="btn btn-primary" id="angle2">90°</button>
<button type="radio" class="btn btn-primary" id="angle3">135°</button>
</div>
<button class="btn btn-mini" id="editangle"><span class="glyphicon glyphicon-arrow-left"></span></button>
<button class="btn btn-primary" id ="pente" disabled="disabled">Submit pente</button>
<button class="btn btn-mini" id="editpente"><span class="glyphicon glyphicon-arrow-left"></span></button>
<button class="btn btn-primary" id ="submitall">Create images</button>

<!--Versant
    ================================================== -->
<script>
$(document).ready(function() {
  $('#versant').click(function () {
  $('#editversant').show(500);
  $('#boutonangle').show(500);
  $('#eraselast').hide(500);
  $('#versant').attr('class','btn');  
  $('#versant').prop("disabled", true);
  });
}); 
</script>  

<script>
$(document).ready(function() {
  $('#angle').click(function () {
  $('#editangle').show(500);
  $('#pente').show(500);
  $('#angle').attr('class','btn');  
  $('#angle1').prop("disabled", true);
  $('#angle2').prop("disabled", true);
  $('#angle3').prop("disabled", true);
  $('#angle').prop("disabled", true);
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
  $('#boutonangle').hide(500);
  $('#editangle').hide(500);
  $('#pente').hide(500);
  $('#editpente').hide(500);
  $('#submitall').hide(500);
  $('#tabpos').empty(500);
  $('#versant').attr('class','btn btn-primary');
  $('#angle').attr('class','btn btn-primary');
  $('#pente').attr('class','btn btn-primary');
  });
}); 
</script>

<!-- Angle
    ================================================== -->
<script>
$(document).ready(function() {
  $('#angle1').click(function () {
  $('#angle').removeAttr('disabled');

  });
}); 
</script>

<script>
$(document).ready(function() {
  $('#angle2').click(function () {
  $('#angle').removeAttr('disabled'); 
  });
}); 
</script>

<script>
$(document).ready(function() {
  $('#angle3').click(function () {
  $('#angle').removeAttr('disabled');
  
  });
}); 
</script>


</div>
<div class ="tabpos" id="tabpos">

</div>
<div></div>
<div>
<button class="btn btn-danger" id="eraselast">Erase last</button>
<script>
$(document).ready(function() {
  $('#eraselast').click(function () {
  $('#tabpos').children("div:last").remove();
  $("body").children("div:last").remove();  
  });
}); 
</script>



</div>





    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>