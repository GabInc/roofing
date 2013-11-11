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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.min.js"></script>
<meta charset=utf-8 />

    <title>Interlock Roofing</title>


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


img{
	cursor: crosshair;

   
}

.box{

   
}


#versants {
	float:right;


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
   
<div class="container"> 
  <div class="row-fluid">	
	<div class="alert alert-info" id="tips">Choisir le premier point, idéalement en bas à gauche</div> 
  </div> 
  <div class="row-fluid">	
   <div class="box" id="box">			
    <img src="<?php echo $target_Path ?>" class="img-responsive imgready" alt="Responsive image" id="testimg"/>
   </div>
  
  </div>
  <div class="row-fluid table">	
  
   <div class=".col-md-12">
      <button class="btn btn-primary" id="versant" disabled="disabled">Submit positons</button>
      <button class="btn btn-mini" id="editversant"><span class="glyphicon glyphicon-arrow-left"></span></button>
   <div class="btn-group-vertical" id="boutondist">
      <button type="radio" class="btn btn-primary" id="dist1">près</button>
      <button type="radio" class="btn btn-primary" id="dist2">moyen</button>
      <button type="radio" class="btn btn-primary" id="dist3">loin</button>
   </div>
      <button class="btn btn-mini" id="editdist"><span class="glyphicon glyphicon-arrow-left"></span></button>  
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
   <div class="btn-group-vertical" id="versants">
      <button type="button" class="btn btn-danger" id ="lastversanterase">erase last</button>
      
   </div> 
   </div> 

   

 </div>   
 <div class="row-fluid">
   <div class ="tabpos" id="tabpos">
   </div>
   <div>
      <button class="btn btn-danger" id="eraselast">Erase last</button>
   </div>
 
 </div>  
 <div class="row-fluid">
   <div class="create"><button type="button" class="btn btn-primary btn-lg btn-block" id ="submitall">Create images</button></div>
 </div>
</div>
  
  
<div><span id="spnCursor"></span></div>
    


    

    

     


</div>

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
<div class ="choseddist" id="choseddist" style="display: none;">
</div>

<div class ="rien" id="rien" style="display: none;">
<button type="button" class="btn btn-primary" id ="next">next versant</button>
<button class="btn btn-mini" id="editpente"><span class="glyphicon glyphicon-arrow-left"></span></button>
       <div class="btn-group-vertical" id="boutonsubmit">
         <button class="btn btn-primary" id ="addversant">Add a Versant</button>
      </div>
</div>



<!-- Showing positions in new div
    ================================================== -->
<script>
$(document).ready(function() {
  $('#testimg').click(function(e) {
  	var pos_x = event.offsetX?(event.offsetX):event.pageX-document.getElementById("pointer_div").offsetLeft;
    var pos_y = event.offsetY?(event.offsetY):event.pageY-document.getElementById("pointer_div").offsetTop;
    var offset = $('#testimg').offset();
 	var msg = (pos_x + ", ." + pos_y); 
 	var msg2 = ("Horizontal Axis : " + pos_x + "," + "  Vertical Axis : " + pos_y);
 	if ( $("#testimg").hasClass("imgready") ) {
  $( ".tabpos" ).append( "<div>" + msg2 + "</div>" );
  $( ".tabpos2" ).append( "<div>" + '.' + msg + ',' + "</div>" );
  $('#eraselast').show(350);
  $('#submitall').prop("disabled", true);
  
  }
  });
});
</script>


<!-- Showing positions to user
    ================================================== -->
    
<script type="text/javascript">
   $(document).ready(function(){
       $(document).mousemove(function(e){
       	  	var pos_x = event.offsetX?(event.offsetX):event.pageX-document.getElementById("pointer_div").offsetLeft;
            var pos_y = event.offsetY?(event.offsetY):event.pageY-document.getElementById("pointer_div").offsetTop;
              $('#spnCursor').html("Horizontal Axis : " + pos_x + "<br/> Vertical Axis : " + pos_y);
       });
    });
  </script>

<!-- Button hidding on page load
    ================================================== -->
	
<script type="text/javascript">
$(document).ready(function() {
  $('#boutondist').hide();
  $('#boutonangle').hide();
  $('#boutonpente').hide();
  $('#boutonsubmit').hide();
  $('#editdist').hide();
  $('#editversant').hide();
  $('#editangle').hide();
  $('#editpente').hide();
  $('#eraselast').hide();  
  $('#submitall').hide(); 
  $('#next').hide(); 
  $('#lastversanterase').hide(); 
});
</script>

<script>
$(document).ready(function() {
  $('#testimg').click(function() {
    $('#submitall').hide(); 

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
   $("#tips").append("Vous devez maintenant la dsitance ou vous pouvez modifier en appuyant sur..."); 
  });
});
</script>

<script>
$(document).ready(function() {
  $('#editdist').click(function() {
$("#tips").empty();	
   $("#tips").append("Utiliser le bouton rouge pour effacer le dernier point"); 
  });
});
</script>

<script>
$(document).ready(function() {
  $('#boutondist).click(function() {
$("#tips").empty();	
   $("#tips").append("Vous devez maintenant choisir un angle ou vous pouvez modifier en appuyant sur..."); 
  });
});
</script>

<script>
$(document).ready(function() {
  $('#editversant').click(function() {
$("#tips").empty();	
   $("#tips").append("Vous devez maintenant choisir un angle ou vous pouvez modifier en appuyant sur..."); 
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
	
	 else if ($('#tabpos').children().length == 1){
	 	$("#tips").append("Choisir le premier point, idéalement en bas à gauche");
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
    if (( $('#tabpos').children().length > 1 )&&( $("#testimg").hasClass("imgready") )){
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
		if ( $("#testimg").hasClass("imgready") ) {
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
  $('#eraselast').hide();
  $('#submitall').show();  }
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
  $('#boutondist').show(500);
  $('#eraselast').hide(500);
  $('#versant').attr('class','btn');  
  $('#versant').prop("disabled", true);
  $('#editversant').prop("disabled", false);
  $('.img-responsive').removeClass("imgready");
  });
}); 
</script>  

<script>
$(document).ready(function() {
  $('#editversant').click(function () {
  $('#editversant').hide(500);
  $('#boutondist').hide(500);
  $('#eraselast').show(500);
  $('#versant').attr('class','btn btn-primary');  
  $('#versant').prop("disabled", false);
  $('#testimg').addClass("imgready");
  });
}); 
</script>  

<!-- Distance chosing buttons + edit button

    ================================================== -->

<script>
$(document).ready(function() {
  $('#dist1').click(function () {
  $('#editdist').show(500);
  $('#boutonangle').show(500);
  $('#dist1').prop("disabled", true);
  $('#dist2').prop("disabled", true);
  $('#dist3').prop("disabled", true);
  $('#editversant').prop("disabled", true);
  $('#editdist').prop("disabled", false);
  $( ".choseddist" ).append( "<div>" + 0 + "</div>" );
  });
}); 
</script>

<script>
$(document).ready(function() {
  $('#dist2').click(function () {
  $('#editdist').show(500);
  $('#boutonangle').show(500);
  $('#dist1').prop("disabled", true);
  $('#dist2').prop("disabled", true);
  $('#dist3').prop("disabled", true);
  $('#editversant').prop("disabled", true);
  $('#editdist').prop("disabled", false);
  $( ".choseddist" ).append( "<div>" + 100 + "</div>" );
  });
}); 
</script>

<script>
$(document).ready(function() {
  $('#dist3').click(function () {
  $('#editdist').show(500);
  $('#boutonangle').show(500);
  $('#dist1').prop("disabled", true);
  $('#dist2').prop("disabled", true);
  $('#dist3').prop("disabled", true);
  $('#editversant').prop("disabled", true);
  $('#editdist').prop("disabled", false);
  $( ".choseddist" ).append( "<div>" + 200 + "</div>" );
  });
}); 
</script>

<script>
$(document).ready(function() {
  $('#editdist').click(function () {
  $('#editdist').hide(500);
  $('#boutonangle').hide(500);
  $('#dist1').prop("disabled", false);
  $('#dist2').prop("disabled", false);
  $('#dist3').prop("disabled", false);
  $('#editversant').prop("disabled", false);
  $('#choseddist').children("div:last").remove();
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
  $('#editdist').prop("disabled", true);
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
  $('#editdist').prop("disabled", true);
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
  $('#editdist').prop("disabled", true);
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
  $('#editdist').prop("disabled", false);
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
var name5 = 'choseddistan'
$('#boutonpente').click(function () { 
var angle = $('#chosedang').text();  
var position = $('#tabpos2').text();
var pente = $('#chosedpente').text();
var distance = $('#choseddist').text();
var img = '<?php echo $imgtrav; ?>';
  $('#versants').append( '<div class="btn-group"><button class="btn btn-success" id="' + name + (n += 1) + '">' + msg + " " + (n) + '</button></div>' );
  $('#form1').append( '<input type="text" value="' + (angle) + '" name="' + name2 + (n) + '" id="' + name2 + (n) + '"><br>' );
  $('#form1').append( '<input type="text" value="' + "pos" + (position) + '" name="' + name3 + (n) + '" id="' + name3 + (n) + '"><br>' );
  $('#form1').append( '<input type="text" value="' + (pente) + '" name="' + name4 + (n) + '" id="' + name4 + (n) + '"><br>' );
  $('#form1').append( '<input type="text" value="' + (distance) + '" name="' + name5 + (n) + '" id="' + name5 + (n) + '"><br>' );
  $('#form1').append( '<input type="text" value="' + (img) + '" name="imgtrav" id="imgtrav"><br>' );
  $('#testimg').removeClass("imgready");
  $('#lastversanterase').show(500);
  $('#versant').hide(500);
  });
   $('#lastversanterase').click(function () {
    n = n - 1;
  });  
});
</script>
<script>
$(document).ready(function() {
var img2 = document.getElementById('testimg'); 
var width = img2.clientWidth;
var height = img2.clientHeight;
	$('#boutonpente').click(function (){

  $('#form1').append( '<input type="text" value="' + (width) + '" name="imgsizeX" id="imgsizeX"><br>' );
  $('#form1').append( '<input type="text" value="' + (height) + '" name="imgsizeY" id="imgsizeY"><br>' );
 });  
}); 
</script>
  
<script>
$(document).ready(function() {
  $('#boutonpente').click(function () { 
   $('#submitall').prop("disabled", false);
  });
});

</script>
<script>
$(document).ready(function() {
  $('#boutonpente').click(function () { 
   $('#next').click();
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
  $('#boutondist').hide(500);
  $('#editdist').hide(500);
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
  $('#dist1').prop("disabled", false);
  $('#dist2').prop("disabled", false);
  $('#dist3').prop("disabled", false);
  
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
  $('#boutondist').hide(500);
  $('#editdist').hide(500);
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
  $('#dist1').prop("disabled", false);
  $('#dist2').prop("disabled", false);
  $('#dist3').prop("disabled", false);
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
  $('#boutondist').hide(500);
  $('#editdist').hide(500);
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
  $('#dist1').prop("disabled", false);
  $('#dist2').prop("disabled", false);
  $('#dist3').prop("disabled", false);
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
  $('#boutondist').hide(500);
  $('#editdist').hide(500);
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
  $('#dist1').prop("disabled", false);
  $('#dist2').prop("disabled", false);
  $('#dist3').prop("disabled", false);
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
  $('#boutondist').hide(500);
  $('#editdist').hide(500);
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
  $('#dist1').prop("disabled", false);
  $('#dist2').prop("disabled", false);
  $('#dist3').prop("disabled", false);
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
  $('#form1').children("input:last").remove();
  $('#form1').children("input:last").remove();
  $('#form1').children("input:last").remove();
  $('#form1').children("br:last").remove();
  $('#form1').children("br:last").remove();
  $('#form1').children("br:last").remove();
  $('#form1').children("br:last").remove();
  $('#form1').children("br:last").remove();
  $('#form1').children("br:last").remove();
  $('#form1').children("br:last").remove();
  $('#versants').children("div:last").remove();
  
    if ( $('#form1').children().length == 1 ){
  $('#next').click();
}
    if ( $('#form1').children().length = 1 ){
  $('#submitall').hide();
}
  });  
});  
</script>	

<!-- Next versant 
    ================================================== -->
<script>
$(document).ready(function() {
  $('#next').click(function () {
  $('#testimg').addClass("imgready");
  $('#next').hide(500);
  $('#versant').show(500);
  $('#tabpos2').empty();
  $('#chosedang').empty();
  $('#chosedpente').empty();
  $('#choseddist').empty();
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
    <script src="/static/js/bootstrap.min.js"></script>
  </body>
</html>