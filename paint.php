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

.lien{
	cursor: pointer;
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
	


<div class="box" id="box">
<img src="<?php echo $target_Path ?>" class="img-polaroid" id="testimg"/>
</div>



<div class="table">
  <button class="btn btn-primary" id="versant" disabled="disabled">Submit positons</button>
  <button class="btn btn-mini" id="editversant"><span class="glyphicon glyphicon-arrow-left"></span></button>
    <div class="btn-group-vertical" id="boutonangle">
      <button type="radio" class="btn btn-primary" id="angle1">45°</button>
      <button type="radio" class="btn btn-primary" id="angle2">90°</button>
      <button type="radio" class="btn btn-primary" id="angle3">135°</button>
    </div>
  <button class="btn btn-mini" id="editangle"><span class="glyphicon glyphicon-arrow-left"></span></button>
    <div class="btn-group-vertical" id="boutonpente">
      <button type="radio" class="btn btn-primary" id="pente1">4/12</button>
      <button type="radio" class="btn btn-primary" id="pente2">6/12</button>
      <button type="radio" class="btn btn-primary" id="pente3">8/12</button>
      <button type="radio" class="btn btn-primary" id="pente4">10/12</button>
      <button type="radio" class="btn btn-primary" id="pente5">12/12</button>
    </div>
  <button class="btn btn-mini" id="editpente"><span class="glyphicon glyphicon-arrow-left"></span></button>
    <div class="btn-group-vertical" id="boutonsubmit">
      <button class="btn btn-primary" id ="addversant">Add a Versant</button>
    </div>
</div>


<div class ="tabpos" id="tabpos">
</div>

<div></div>

<div>
<button class="btn btn-danger" id="eraselast">Erase last</button>
</div>

<div class="btn-group" id="versants">
  <div class="btn-group">
  </div>
</div>

<div><button type="button" class="btn btn-primary btn-lg btn-block" id ="submitall">Create images</button></div>

<!-- Button hidding on page load
    ================================================== -->
	
<script type="text/javascript">
$(document).ready(function() {
  $('#boutonangle').hide();
  $('#boutonpente').hide();
  $('#boutonsubmit').hide();
  $('#editversant').hide();
  $('#editangle').hide();
  $('#editpente').hide();
  $('#eraselast').hide();  
  $('#submitall').hide();   
});
</script>

<!-- Enable submit positions button after 3 positions
Il faut vérifier pourquoi c'est pas plus >2 qui fonctionne ?????
    ================================================== -->
	
<script>
$(document).ready(function() {
  $('#testimg').click(function(e) {
    if (( $('#tabpos').children().length > 1 )&&( $("#testimg").hasClass("img-polaroid") )){
     $('#versant').removeAttr('disabled'); 
	 }
  });
});
</script>

<!-- Add point on the image on click
    ================================================== -->
	
<script type="text/javascript">
    $("#testimg").click(function (ev) {
        mouseX = ev.pageX;
        mouseY = ev.pageY;
        var color = '#000000';
        var size = '3px';
		if ( $("#testimg").hasClass("img-polaroid") ) {
        $("body").append(
            $('<div class="point"></div>')
                .css('position', 'absolute')
                .css('top', mouseY + 'px')
                .css('left', mouseX + 'px')
                .css('width', size)
                .css('height', size)
                .css('background-color', color));
				}
    });
</script>

<!-- Showing positions in new div
Il faut faire en sorte qu'il les enregistre
    ================================================== -->
	
<script>
$(document).ready(function() {
  $('#testimg').click(function(e) {
    var offset = $(this).offset();
	var msg = "";
 msg += event.pageX + ", " + event.pageY;
 if ( $("#testimg").hasClass("img-polaroid") ) {
  $( ".tabpos" ).append( "<div>" + msg + "</div>" );
  $('#eraselast').show(350);
  }
  });
});
</script>

<!-- Erase last button
    ================================================== -->
<script>
$(document).ready(function() {
  $('#eraselast').click(function () {
  $('#tabpos').children("div:last").remove();
  $("body").children("div:last").remove();  
  if ( $('#tabpos').children().length == 0 ){
  $('#eraselast').hide(); }
  if ( $('#tabpos').children().length < 3 ){
  $('#versant').prop("disabled", true);}
  });
}); 
</script>



<!--Position Buttons, submit and edit 
    ================================================== -->
<script>
$(document).ready(function() {
  $('#versant').click(function () {
  $('#editversant').show(500);
  $('#boutonangle').show(500);
  $('#eraselast').hide(500);
  $('#versant').attr('class','btn');  
  $('#versant').prop("disabled", true);
  $('#editversant').prop("disabled", false);
  $('.img-polaroid').removeClass("img-polaroid");
  });
}); 
</script>  

<script>
$(document).ready(function() {
  $('#editversant').click(function () {
  $('#editversant').hide(500);
  $('#boutonangle').hide(500);
  $('#eraselast').show(500);
  $('#versant').attr('class','btn btn-primary');  
  $('#versant').prop("disabled", false);
  $('#testimg').addClass("img-polaroid");
  });
}); 
</script>  




<!-- Angle chosing buttons
Il va falloir enregistrer le choix d'angle
    ================================================== -->
<script>
$(document).ready(function() {
  $('#angle1').click(function () {
  $('#editangle').show(500);
  $('#boutonpente').show(500);
  $('#angle').attr('class','btn');  
  $('#angle1').prop("disabled", true);
  $('#angle2').prop("disabled", true);
  $('#angle3').prop("disabled", true);
  $('#editversant').prop("disabled", true);
  $('#editangle').prop("disabled", false);
  });
}); 
</script>

<script>
$(document).ready(function() {
  $('#angle2').click(function () {
  $('#editangle').show(500);
  $('#boutonpente').show(500);
  $('#angle').attr('class','btn');  
  $('#angle1').prop("disabled", true);
  $('#angle2').prop("disabled", true);
  $('#angle3').prop("disabled", true);
  $('#editversant').prop("disabled", true);
  $('#editangle').prop("disabled", false);
  });
}); 
</script>

<script>
$(document).ready(function() {
  $('#angle3').click(function () {
  $('#editangle').show(500);
  $('#boutonpente').show(500);
  $('#angle').attr('class','btn');  
  $('#angle1').prop("disabled", true);
  $('#angle2').prop("disabled", true);
  $('#angle3').prop("disabled", true);
  $('#editversant').prop("disabled", true);
  $('#editangle').prop("disabled", false);
  });
}); 
</script>

<script>
$(document).ready(function() {
  $('#editangle').click(function () {
  $('#editangle').hide(500);
  $('#boutonpente').hide(500);
  $('#angle1').prop("disabled", false);
  $('#angle2').prop("disabled", false);
  $('#angle3').prop("disabled", false);
  $('#editversant').prop("disabled", false);
  });
}); 
</script>


	
<!-- Create versant on choosing a pente
    ================================================== -->
		
<script>	
$(document).ready(function() {
var n = 0;
var msg = "Versant";
var name = 'Versant'
var x = 'ul'
var y = 'li'
  $('#boutonpente').click(function () { 
  $('#versants').append( '<div class="btn-group"><button class="btn btn-success dropdown-toggle" data-toggle="dropdown" id="' + name + (n += 1) + '">' + msg + " " +(n += 0) + '<span class="caret"></span></button><ul class="dropdown-menu" role="menu" id="' + x + (n += 0) + '"><li class="lien" id="' + y + (n += 0) + '"><a>delete</a></li></ul></div>' );
  });  
});
</script>

<!-- Create versant on choosing a pente (Max 20 versants)
    ================================================== -->
	
<script>
$('#li1').live('click', function() {
 $('#Versant1').remove();
 $('#li1').remove();
 $('#ul1').remove();
});
</script>

<script>
$('#li2').live('click', function() {
 $('#Versant2').remove();
 $('#li2').remove();
 $('#ul2').remove();
});
</script>

<script>
$('#li3').live('click', function() {
 $('#Versant3').remove();
 $('#li3').remove();
 $('#ul3').remove();
});
</script>

<script>
$('#li4').live('click', function() {
 $('#Versant4').remove();
 $('#li4').remove();
 $('#ul4').remove();
});
</script>

<script>
$('#li5').live('click', function() {
 $('#Versant5').remove();
 $('#li5').remove();
 $('#ul5').remove();
});
</script>

<script>
$('#li6').live('click', function() {
 $('#Versant6').remove();
 $('#li6').remove();
 $('#ul6').remove();
});
</script>

<script>
$('#li7').live('click', function() {
 $('#Versant7').remove();
 $('#li7').remove();
 $('#ul7').remove();
});
</script>

<script>
$('#li8').live('click', function() {
 $('#Versant8').remove();
 $('#li8').remove();
 $('#ul8').remove();
});
</script>

<script>
$('#li9').live('click', function() {
 $('#Versant9').remove();
 $('#li9').remove();
 $('#ul9').remove();
});
</script>

<script>
$('#li10').live('click', function() {
 $('#Versant10').remove();
 $('#li10').remove();
 $('#ul10').remove();
});
</script>

<script>
$('#li11').live('click', function() {
 $('#Versant11').remove();
 $('#li11').remove();
 $('#ul11').remove();
});
</script>

<script>
$('#li12').live('click', function() {
 $('#Versant12').remove();
 $('#li12').remove();
 $('#ul12').remove();
});
</script>

<script>
$('#li13').live('click', function() {
 $('#Versant13').remove();
 $('#li13').remove();
 $('#ul13').remove();
});
</script>

<script>
$('#li14').live('click', function() {
 $('#Versant14').remove();
 $('#li14').remove();
 $('#ul14').remove();
});
</script>

<script>
$('#li15').live('click', function() {
 $('#Versant15').remove();
 $('#li15').remove();
 $('#ul15').remove();
});
</script>

<script>
$('#li16').live('click', function() {
 $('#Versant16').remove();
 $('#li16').remove();
 $('#ul16').remove();
});
</script>

<script>
$('#li17').live('click', function() {
 $('#Versant17').remove();
 $('#li17').remove();
 $('#ul17').remove();
});
</script>

<script>
$('#li18').live('click', function() {
 $('#Versant18').remove();
 $('#li18').remove();
 $('#ul18').remove();
});
</script>

<script>
$('#li19').live('click', function() {
 $('#Versant19').remove();
 $('#li19').remove();
 $('#ul19').remove();
});
</script>

<script>
$('#li20').live('click', function() {
 $('#Versant20').remove();
 $('#li20').remove();
 $('#ul20').remove();
});
</script>

<!-- Pente buttons
Il va falloir enregister le choix de pente
    ================================================== -->
<script>
$(document).ready(function() {
  $('#pente1').click(function () {
  $('#pente1').prop("disabled", true);
  $('#pente2').prop("disabled", true);
  $('#pente3').prop("disabled", true);
  $('#pente4').prop("disabled", true);
  $('#pente5').prop("disabled", true);
  $('#editangle').prop("disabled", true);
  });
}); 
</script>

<script>
$(document).ready(function() {
  $('#pente1').click(function () {
  $('#editversant').hide(500);
  $('#boutonangle').hide(500);
  $('#editangle').hide(500);
  $('#boutonpente').hide(500);
  $('#submitall').show(500);
  $('#tabpos').empty(500);
  $('#versant').attr('class','btn btn-primary');
  $('#versant').prop("disabled", true);
  $('#angle1').prop("disabled", false);
  $('#angle2').prop("disabled", false);
  $('#angle3').prop("disabled", false);
  $('#pente1').prop("disabled", false);
  $('#pente2').prop("disabled", false);
  $('#pente3').prop("disabled", false);
  $('#pente4').prop("disabled", false);
  $('#pente5').prop("disabled", false);
  $('.point').remove(); 
  $('#testimg').addClass("img-polaroid");
  });  
});
</script>

<script>
$(document).ready(function() {
  $('#pente2').click(function () {
  $('#pente1').prop("disabled", true);
  $('#pente2').prop("disabled", true);
  $('#pente3').prop("disabled", true);
  $('#pente4').prop("disabled", true);
  $('#pente5').prop("disabled", true);
  $('#editangle').prop("disabled", true);
  });
}); 
</script>

<script>
$(document).ready(function() {
  $('#pente2').click(function () {
  $('#editversant').hide(500);
  $('#boutonangle').hide(500);
  $('#editangle').hide(500);
  $('#boutonpente').hide(500);
  $('#submitall').show(500);
  $('#tabpos').empty(500);
  $('#versant').attr('class','btn btn-primary');
  $('#versant').prop("disabled", true);
  $('#angle1').prop("disabled", false);
  $('#angle2').prop("disabled", false);
  $('#angle3').prop("disabled", false);
  $('#pente1').prop("disabled", false);
  $('#pente2').prop("disabled", false);
  $('#pente3').prop("disabled", false);
  $('#pente4').prop("disabled", false);
  $('#pente5').prop("disabled", false);
  $('.point').remove(); 
  $('#testimg').addClass("img-polaroid");
  });  
});
</script>

<script>
$(document).ready(function() {
  $('#pente3').click(function () {
  $('#pente1').prop("disabled", true);
  $('#pente2').prop("disabled", true);
  $('#pente3').prop("disabled", true);
  $('#pente4').prop("disabled", true);
  $('#pente5').prop("disabled", true);
  $('#editangle').prop("disabled", true);
  });
}); 
</script>

<script>
$(document).ready(function() {
  $('#pente3').click(function () {
  $('#editversant').hide(500);
  $('#boutonangle').hide(500);
  $('#editangle').hide(500);
  $('#boutonpente').hide(500);
  $('#submitall').show(500);
  $('#tabpos').empty(500);
  $('#versant').attr('class','btn btn-primary');
  $('#versant').prop("disabled", true);
  $('#angle1').prop("disabled", false);
  $('#angle2').prop("disabled", false);
  $('#angle3').prop("disabled", false);
  $('#pente1').prop("disabled", false);
  $('#pente2').prop("disabled", false);
  $('#pente3').prop("disabled", false);
  $('#pente4').prop("disabled", false);
  $('#pente5').prop("disabled", false);
  $('.point').remove(); 
  $('#testimg').addClass("img-polaroid");
  });  
});
</script>

<script>
$(document).ready(function() {
  $('#pente4').click(function () {
  $('#pente1').prop("disabled", true);
  $('#pente2').prop("disabled", true);
  $('#pente3').prop("disabled", true);
  $('#pente4').prop("disabled", true);
  $('#pente5').prop("disabled", true);
  $('#editangle').prop("disabled", true);
  });
}); 
</script>

<script>
$(document).ready(function() {
  $('#pente4').click(function () {
  $('#editversant').hide(500);
  $('#boutonangle').hide(500);
  $('#editangle').hide(500);
  $('#boutonpente').hide(500);
  $('#submitall').show(500);
  $('#tabpos').empty(500);
  $('#versant').attr('class','btn btn-primary');
  $('#versant').prop("disabled", true);
  $('#angle1').prop("disabled", false);
  $('#angle2').prop("disabled", false);
  $('#angle3').prop("disabled", false);
  $('#pente1').prop("disabled", false);
  $('#pente2').prop("disabled", false);
  $('#pente3').prop("disabled", false);
  $('#pente4').prop("disabled", false);
  $('#pente5').prop("disabled", false);
  $('.point').remove(); 
  $('#testimg').addClass("img-polaroid");
  });  
});
</script>

<script>
$(document).ready(function() {
  $('#pente5').click(function () {
  $('#pente1').prop("disabled", true);
  $('#pente2').prop("disabled", true);
  $('#pente3').prop("disabled", true);
  $('#pente4').prop("disabled", true);
  $('#pente5').prop("disabled", true);
  $('#editangle').prop("disabled", true);
  });
}); 
</script>

<script>
$(document).ready(function() {
  $('#pente5').click(function () {
  $('#editversant').hide(500);
  $('#boutonangle').hide(500);
  $('#editangle').hide(500);
  $('#boutonpente').hide(500);
  $('#submitall').show(500);
  $('#tabpos').empty(500);
  $('#versant').attr('class','btn btn-primary');
  $('#versant').prop("disabled", true);
  $('#angle1').prop("disabled", false);
  $('#angle2').prop("disabled", false);
  $('#angle3').prop("disabled", false);
  $('#pente1').prop("disabled", false);
  $('#pente2').prop("disabled", false);
  $('#pente3').prop("disabled", false);
  $('#pente4').prop("disabled", false);
  $('#pente5').prop("disabled", false);
  $('.point').remove(); 
  $('#testimg').addClass("img-polaroid");
  });  
});
</script>

<!-- Create images
    ================================================== -->
<script>

</script>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>