<?php
$target_Path = "images/";
$target_Path = $target_Path.basename( $_FILES['userFile']['name'] );
move_uploaded_file( $_FILES['userFile']['tmp_name'], $target_Path );
$imgtrav = urlencode($target_Path);
?>
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

    <title>Interlock Roofing</title>

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


img{

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
	


<div class="box" id="box">
<img src="<?php echo $target_Path ?>" class="img-polaroid" id="testimg"/><div><span id="spnCursor"></span></div>

<div class="alert alert-info" id="tips">Choisir le premier point, idéalement en bas à gauche</div>



<!-- Showing positions in new div
    ================================================== -->
	
<script>
$(document).ready(function() {
  $('.box').click(function(e) {
    var offset = $('.box').offset();
 	var msg = ((e.clientX - offset.left) + ", ." + (e.clientY - offset.top)); 
 	var msg2 = ("Horizontal Axis : " + (e.clientX - offset.left) + "," + "  Vertical Axis : " + (e.clientY - offset.top));
 	if ( $("#testimg").hasClass("img-polaroid") ) {
  $( ".tabpos" ).append( "<div>" + msg2 + "</div>" );
  $( ".tabpos2" ).append( "<div>" + '.' + msg + ',' + "</div>" );
  $('#eraselast').show(350);
  
  }
  });
});
</script>


<!-- Showing positions to user
    ================================================== -->
    
<script type="text/javascript">
   $(document).ready(function(){
       $(document).mousemove(function(e){
          $('#spnCursor').html("Horizontal Axis : " + e.clientX + "<br/> Vertical Axis : " + (e.clientY-50));
       });
    });
  </script>

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



<div>
<button class="btn btn-danger" id="eraselast">Erase last</button>
</div>

<div class="btn-group" id="versants">
  <div class="btn-group">
  <button type="button" class="btn btn-danger" id ="lastversanterase">erase last versant</button>
  <button type="button" class="btn btn-primary" id ="next">next versant</button>
  </div>
</div>

<div><button type="button" class="btn btn-primary btn-lg btn-block" id ="submitall">Create images</button></div>
<div style="display: none;">
<form action="Result.php" method="get" id="form1">
<input type="submit">
</form>
</div>

<div style="display: none;">
<form enctype="multipart/form-data" ation="Result.php" method="get" id="form2">
<input type="submit">
</form>
</div>

<div class ="tabpos2" id="tabpos2" style="display: none;">
</div>
<div class ="chosedpente" id="chosedpente" style="display: none;">
</div>
<div class ="chosedang" id="chosedang" style="display: none;">
</div>

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
  $('#next').hide(); 
  $('#lastversanterase').hide(); 
});
</script>


<!-- Alert system
    ================================================== -->
    
<script>
$(document).ready(function() {
  $('#testimg').click(function() {
$("#tips").empty();
	if ( $('#tabpos').children().length > 1 ){
     $("#tips").append("Si c'est complet faite submit position sinon choisissez un autre point"); 
	}
	
	 else {
	 	
	 $("#tips").append("Choisissez un autre point"); 
	 }
	
	
  });
});
</script>

<script>
$(document).ready(function() {
  $('#versant').click(function() {
$("#tips").empty();	
   $("#tips").append("Vous devez maintenant choisir un angle ou vous pouvez modifier en appuyant sur..."); 
  });
});
</script>

<script>
$(document).ready(function() {
  $('#editversant').click(function() {
$("#tips").empty();	
   $("#tips").append("Utiliser le bouton rouge pour effacer le dernier point"); 
  });
});
</script>

<script>
$(document).ready(function() {
  $('#eraselast').click(function() {
  	$("#tips").empty();
	if ( $('#tabpos').children().length > 3 ){
     $("#tips").append("Si c'est complet faite submit position sinon choisissez un autre point"); 
	}
	
	 else {
	 	
	 $("#tips").append("Choisissez un autre point"); 
	 }
  });
});
</script>

<script>
$(document).ready(function() {
  $('#boutonangle').click(function() {
$("#tips").empty();	
   $("#tips").append("Vous devez maintenant choisir une pente ou vous pouvez modifier en appuyant sur..."); 
  });
});
</script>

<script>
$(document).ready(function() {
  $('#editangle').click(function() {
$("#tips").empty();	
   $("#tips").append("Vous devez maintenant choisir un angle ou vous pouvez modifier en appuyant sur..."); 
  });
});
</script>

<script>
$(document).ready(function() {
  $('#boutonpente').click(function() {
$("#tips").empty();	
   $("#tips").append("Vous pouvez créer un autre (next versant) ou soumettre pour création d'image (create images)"); 
  });
});
</script>


<script>
$(document).ready(function() {
  $('#next').click(function() {
$("#tips").empty();	
   $("#tips").append("Choisir le premier point, idéalement en bas à gauche"); 
  });
});
</script>

<!-- Enable submit s button after 3 positions
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
        var size = '2px';
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


<!-- Erase last position button
    ================================================== -->
<script>
$(document).ready(function() {
  $('#eraselast').click(function () {
  $('#tabpos').children("div:last").remove();
  $('#tabpos2').children("div:last").remove();
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




<!-- Angle chosing buttons + edit button

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
  $( ".chosedang" ).append( "<div>" + 1 + "</div>" );
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
  $( ".chosedang" ).append( "<div>" + 2 + "</div>" );
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
  $( ".chosedang" ).append( "<div>" + 3 + "</div>" );
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
  $('#chosedang').children("div:last").remove();
  });
}); 
</script>


	
<!-- Create versant on choosing a pente buttons
    ================================================== -->
		


<script>
$(document).ready(function() {
  $('#pente1').click(function () {
  $( ".chosedpente" ).append( "<div>" + 1 +"</div>" );
  });
}); 
</script>

<script>
$(document).ready(function() {
  $('#pente2').click(function () {
  $( ".chosedpente" ).append( "<div>" + 2 +"</div>" );
  });
}); 
</script>

<script>
$(document).ready(function() {
  $('#pente3').click(function () {
  $( ".chosedpente" ).append( "<div>" + 3 +"</div>" );
  });
}); 
</script>

<script>
$(document).ready(function() {
  $('#pente4').click(function () {
  $( ".chosedpente" ).append( "<div>" + 4 + "</div>" );
  });
}); 
</script>

<script>
$(document).ready(function() {
  $('#pente5').click(function () {
  $( ".chosedpente" ).append( "<div>" + 5 + "</div>" );
  });
}); 
</script>

<script>	
$(document).ready(function() {
var n = 0;
var msg = "Versant";
var name = 'Versant'
var name2 = 'chosedangle'
var name3 = 'chosedposition'
var name4 = 'chosedpen'
  $('#boutonpente').click(function () { 
var angle = $('#chosedang').text();  
var position = $('#tabpos2').text();
var pente = $('#chosedpente').text();
var img = '<?php echo $imgtrav; ?>';
  $('#versants').append( '<div class="btn-group"><button class="btn btn-success" id="' + name + (n += 1) + '">' + msg + " " + (n) + '</button></div>' );
  $('#form1').append( '<input type="text" value="' + (angle) + '" name="' + name2 + (n) + '" id="' + name2 + (n) + '"><br>' );
  $('#form1').append( '<input type="text" value="' + "pos" + (position) + '" name="' + name3 + (n) + '" id="' + name3 + (n) + '"><br>' );
  $('#form1').append( '<input type="text" value="' + (pente) + '" name="' + name4 + (n) + '" id="' + name4 + (n) + '"><br>' );
  $('#form1').append( '<input type="text" value="' + (img) + '" name="imgtrav" id="imgtrav"><br>' );
  $('#testimg').removeClass("img-polaroid");
  $('#next').show(500);
  $('#lastversanterase').show(500);
  $('#versant').hide(500);
  });
   $('#lastversanterase').click(function () {
    n = n - 1;
  });  
});
</script>

<!-- Pente buttons
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
  });  
});
</script>

<!-- Erase last versant 
    ================================================== -->
<script>
$(document).ready(function() {
  $('#lastversanterase').click(function () {
  $('#form1').children("input:last").remove();
  $('#form1').children("input:last").remove();
  $('#form1').children("input:last").remove();
  $('#form1').children("input:last").remove();
  $('#form1').children("br:last").remove();
  $('#form1').children("br:last").remove();
  $('#form1').children("br:last").remove();
  $('#form1').children("br:last").remove();
  $('#versants').children("div:last").remove();
  
    if ( $('#form1').children().length == 1 ){
  $('#next').click();
}
  });  
});  
</script>	

<!-- Next versant 
    ================================================== -->
<script>
$(document).ready(function() {
  $('#next').click(function () {
  $('#testimg').addClass("img-polaroid");
  $('#next').hide(500);
  $('#versant').show(500);
  $('#tabpos2').empty();
  $('#chosedang').empty();
  $('#chosedpente').empty();
  });  
});  
</script>	
	

<!-- Send data to result.php                   
================================================= -->
<script>
$(document).ready(function() {
  $('#submitall').click(function () {
  $('#form1').submit()

  
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