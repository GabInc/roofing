<?php
$target_Path = "images/";
$img_Path = $target_Path.basename( $_FILES['userFile']['name'] );
move_uploaded_file( $_FILES['userFile']['tmp_name'], $img_Path );


$width=900; 
        $size=GetimageSize($img_Path);
        $height=round($width*$size[1]/$size[0]);
        $images_orig = ImageCreateFromJPEG($img_Path);
        $photoX = ImagesX($images_orig);
        $photoY = ImagesY($images_orig);
        $images_fin = ImageCreateTrueColor($width, $height);
        ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width+1, $height+1, $photoX, $photoY);
        ImageJPEG($images_fin,$img_Path);
        ImageDestroy($images_orig);


$imgtrav = urlencode($img_Path);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="dcterms.created" content="jeu., 03 oct. 2013 19:34:09 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="target-densitydpi=device-dpi, initial-scale=1.0, user-scalable=no" />
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

.boite {
	
min-height:249px;
   
}


#erase {

}
#versants {


}

.vers{
  
}

#tips {
	margin-top:10px;
    min-height:150px;
    font-size:20px;

}

#tips2 {
	margin-top:10px;
    min-height:150px;
    font-size:20px;

}

.table {
	margin-top:10px;


}

.jumbotron {
	position:relative; 


}

.tableau {
	position: absolute;
    left:    15;
    bottom:   0;


}

.boite {
	max-width:900px;
	


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
          <a class="navbar-brand" href="http://www.lfhs.ca/roofing/">Interlock Roofing</a>
        </div>
      </div>
    </div>
   
<div class="container"> 
  <div class="row-fluid">	
	<div class="alert alert-info" id="tips">Now it's time to create a side, if you need to do more than one side, the first one should ideally be the one behind the others.
		 Now click on the first corner of your side.</div> 
  </div> 
</div>
  <div class="container jumbotron"> 
  <div class="row-fluid">	
   <div class="box" id="box">			
    <img src="<?php echo $img_Path ?>" class="roofimage" id="testimg"/>
   </div>
  
  </div>
 

  <div class="row-fluid table">	
  
   <div class=".col-md-12">
      <button class="btn btn-primary" id="versant" disabled="disabled">Next step <span class="glyphicon glyphicon-circle-arrow-right"></button>
      <button class="btn btn-mini" id="editversant"><span class="glyphicon glyphicon-arrow-left"></span></button>
   <div class="btn-group-vertical" id="boutondist">
   	<h4><span class="label label-default">Distance :</h4></span>
      <button type="radio" class="btn btn-primary" id="dist1">Near</button>
      <button type="radio" class="btn btn-primary" id="dist2">Middle</button>
      <button type="radio" class="btn btn-primary" id="dist3">Far</button>
   </div>
      <button class="btn btn-mini" id="editdist"><span class="glyphicon glyphicon-arrow-left"></span></button>  
   <div class="btn-group-vertical" id="boutonangle">
   	  <h4><span class="label label-default">Angle :</h4></span>
      <button type="radio" class="btn btn-primary" id="angle1">In front</button>
      <button type="radio" class="btn btn-primary" id="angle2">45°</button>
      <button type="radio" class="btn btn-primary" id="angle3">135°</button>
   </div>
     <button class="btn btn-mini" id="editangle"><span class="glyphicon glyphicon-arrow-left"></span></button>
   <div class="btn-group-vertical" id="boutonpente">
   	  <h4><span class="label label-default">Slope :</h4></span>
      <button type="radio" class="btn btn-primary" id="pente1" style="display: none;">4/12</button>
      <button type="radio" class="btn btn-primary" id="pente2">6/12</button>
      <button type="radio" class="btn btn-primary" id="pente3" style="display: none;">8/12</button>
      <button type="radio" class="btn btn-primary" id="pente4" style="display: none;">10/12</button>
      <button type="radio" class="btn btn-primary" id="pente5" style="display: none;">12/12</button>
   </div>
     <button type="button" class="btn btn-primary" id ="next">Next side <span class="glyphicon glyphicon-circle-arrow-right"></span></button>
  
   </div> 

        
 </div>
 
 <div class="row-fluid panel panel-default boite">
 	<div class="panel-body">
   <div class ="col-md-2 tabpos" id="tabpos">
   	<div class ="titre" id="titre"><h4><span class="label label-primary">Positions :</h4></span></div>
   	
   </div>
   
   <div class ="col-md-2 tabdist" id="tabdist">
   	<div class ="titre2" id="titre2"><h4><span class="label label-primary">Distance :</h4></span></div>
 </div>
 <div class ="col-md-2 tabang" id="tabang">
   	<div class ="titre3" id="titre3"><h4><span class="label label-primary">Angle :</h4></span></div>
 </div>
 <div class ="col-md-4 tabpente" id="tabpente">
   	<div class ="titre4" id="titre4"><h4><span class="label label-primary">Slope :</h4></span></div>
 </div>

 	<div class="btn-group-vertical">
 <div class=".col-md-2 vers" id="vers"> 
 	<div class="versants" id="versants">
    </div>
 	<div class="erase" id="erase">  
 	<button type="button" class="btn btn-danger" id ="lastversanterase">Erase last side <span class="glyphicon glyphicon-remove-circle"></span></button> 		
 </div>
</div>
 </div>
  </div> 
</div> 
 <div class="row-fluid tableau"><button class="btn btn-danger" id="eraselast">Erase last position <span class="glyphicon glyphicon-remove-circle"></span></button>
 </div>
 <div class="row-fluid">
   <div class="create"><button type="button" class="btn btn-primary btn-lg btn-block" id ="submitall">Create images <span class="glyphicon glyphicon-save"></span></button></div>
 </div>
 
 
</div>
<div class="container">

  <div class="row-fluid">	
	<div class="alert alert-info" id="tips2">Now it's time to create a side, if you need to do more than one side, the first one should ideally be the one behind the others. 
		Now click on the first corner of your side.</div> 
  </div>
</div> 
  

    


    

    

     


</div>
<div style="display: none;"><span id="spnCursor"></span></div>
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
<div class ="ready" id="ready" style="display: none;">
</div>
<div class ="rien" id="rien" style="display: none;">

<button class="btn btn-mini" id="editpente"><span class="glyphicon glyphicon-arrow-left"></span></button>
       <div class="btn-group-vertical" id="boutonsubmit">
         <button class="btn btn-primary" id ="addversant">Add a side</button>
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
 	var msg2 = (pos_x + "," + pos_y);
 	if ( $("#ready").hasClass("ready") ) {
  $( ".tabpos" ).append( '<div class="posit">' + msg2 + '</div>' );
  $( ".tabpos2" ).append( "<div>" + '.' + msg + ',' + "</div>" );
  $('#eraselast').show(350);
  $('#submitall').prop("disabled", true);
  $('#lastversanterase').prop("disabled", true);
  
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
  $('#angle3').hide();
  $('#angle2').hide(); 
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
  $('#titre').hide();
  $('#titre2').hide();
  $('#titre3').hide();
  $('#titre4').hide();
});
</script>

<script>
$(document).ready(function() {
  $('#testimg').click(function() {
    $('#submitall').hide(); 
    $('#titre').show(); 
 });
});

</script>
<!-- Alert system
    ================================================== -->
    
<script>
$(document).ready(function() {
  $('#testimg').click(function() {
$("#tips").empty();
	if ( $('#tabpos').children().length > 3 ){
     $("#tips").append("If your side is complete press the next step button. If not, choose another corner of your side. Remember, you must choose the corners in a logical way for the program to draw your side.You can always erase your last corner by pressing the erase last position button."); 
	}
	
	 else {
	 	
	 $("#tips").append("Now you have to choose another corner of your side (you need at least 3 to complete it). Remember, you must choose the corners in a logical way for the program to draw your side.You can always erase your last corner by pressing the erase last position button."); 
	 }
	
	
  });
});
</script>

<script>
$(document).ready(function() {
  $('#testimg').click(function() {
$("#tips2").empty();
	if ( $('#tabpos').children().length > 3 ){
     $("#tips2").append("If your side is complete press the next step button. If not, choose another corner of your side. Remember, you must choose the corners in a logical way for the program to draw your side.You can always erase your last corner by pressing the erase last position button."); 
	}
	
	 else {
	 	
	 $("#tips2").append("Now you have to choose another corner of your side (you need at least 3 to complete it). Remember, you must choose the corners in a logical way for the program to draw your side.You can always erase your last corner by pressing the erase last position button."); 
	 }
	
	
  });
});
</script>

<script>
$(document).ready(function() {
  $('#eraselast').click(function() {
  	$("#tips").empty();
	if ( $('#tabpos').children().length > 4 ){
     $("#tips").append("If your side is complete press the next step button. If not, choose another corner of your side. Remember, you must choose the corners in a logical way for the program to draw your side.You can always erase your last corner by pressing the erase last position button."); 
	}
	
	 else if ($('#tabpos').children().length == 2 && $('#versants').children().length > 0 ){
	 	$("#tips").append("Now it's time to create another side. Now click on the first corner of your side. If you don't need another side you can press the create images button to finish or you can also delete the last created side by pressing the erase last side button.");
	 }
	 
	 else if ($('#tabpos').children().length == 2 && $('#versants').children().length == 0 ){
	 	$("#tips").append("Now it's time to create a side, if you need to do more than one side, the first one should ideally be the one behind the others. Now click on the first corner of your side.");
	 }
	 else {
	 	
	 $("#tips").append("Now you have to choose another corner of your side (you need at least 3 to complete it). Remember, you must choose the corners in a logical way for the program to draw your side.You can always erase your last corner by pressing the erase last position button."); 
	 }
  });
});
</script>

<script>
$(document).ready(function() {
  $('#eraselast').click(function() {
  	$("#tips2").empty();
	if ( $('#tabpos').children().length > 4 ){
     $("#tips2").append("If your side is complete press the next step button. If not, choose another corner of your side. Remember, you must choose the corners in a logical way for the program to draw your side.You can always erase your last corner by pressing the erase last position button."); 
	}
	
	 else if ($('#tabpos').children().length == 2 && $('#versants').children().length > 0 ){
	 	$("#tips2").append("Now it's time to create another side. Now click on the first corner of your side. If you don't need another side you can press the create images button to finish or you can also delete the last created side by pressing the erase last side button.");
	 }
	 
	 else if ($('#tabpos').children().length == 2 && $('#versants').children().length == 0 ){
	 	$("#tips2").append("Now it's time to create a side, if you need to do more than one side, the first one should ideally be the one behind the others. Now click on the first corner of your side.");
	 }
	 else {
	 	
	 $("#tips2").append("Now you have to choose another corner of your side (you need at least 3 to complete it). Remember, you must choose the corners in a logical way for the program to draw your side.You can always erase your last corner by pressing the erase last position button."); 
	 }
  });
});
</script>

<script>
$(document).ready(function() {
  $('#versant').click(function() {
$("#tips").empty();	
   $("#tips").append("Now you have to select the distance from witch the image as been taken. If you only see the roof, choose near. If you the house and the roof, choose middle. And if you see the house and the some yard, choose far. You can also come back to the side part by pressing the arrow left to the distances buttons."); 
  });
});
</script>

<script>
$(document).ready(function() {
  $('#versant').click(function() {
$("#tips2").empty();	
   $("#tips2").append("Now you have to select the distance from witch the image as been taken. If you only see the roof, choose near. If you the house and the roof, choose middle. And if you see the house and the some yard, choose far. You can also come back to the side part by pressing the arrow left to the distances buttons."); 
  });
});
</script>


<script>
$(document).ready(function() {
  $('#boutondist').click(function() {
$("#tips").empty();	
   $("#tips").append("Now you have to select the angle of the side you've made. (...to be determine) You can also come back to the distance part by pressing the arrow left to the angles buttons."); 
  });
});
</script>

<script>
$(document).ready(function() {
  $('#boutondist').click(function() {
$("#tips2").empty();	
   $("#tips2").append("Now you have to select the angle of the side you've made. (...to be determine) You can also come back to the distance part by pressing the arrow left to the angles buttons."); 
  });
});
</script>

<script>
$(document).ready(function() {
  $('#boutonangle').click(function() {
$("#tips").empty();	
   $("#tips").append("Now you have to select a slope for the side you've create. Chose the nearest slope possible. You can also come back to the angle part by pressing the arrow left to the slopes buttons."); 
  });
});
</script>

<script>
$(document).ready(function() {
  $('#boutonangle').click(function() {
$("#tips2").empty();	
   $("#tips2").append("Now you have to select a slope for the side you've create. Chose the nearest slope possible. You can also come back to the angle part by pressing the arrow left to the slopes buttons."); 
  });
});
</script>

<script>
$(document).ready(function() {
  $('#boutonpente').click(function() {
$("#tips").empty();	
   $("#tips").append("Now it's time to create another side or to submit your(s) to create the images. To create a new side, click the next side button. If you have finish and want to see the results click on the create images button. You can also delete the last created side by pressing the erase last side button."); 
  });
});
</script>

<script>
$(document).ready(function() {
  $('#boutonpente').click(function() {
$("#tips2").empty();	
   $("#tips2").append("Now it's time to create another side or to submit your(s) to create the images. To create a new side, click the next side button. If you have finish and want to see the results click on the create images button. You can also delete the last created side by pressing the erase last side button."); 
  });
});
</script>

<script>
$(document).ready(function() {
  $('#editversant').click(function() {
$("#tips").empty();	
   $("#tips").append("Press the erase last position button to erase the last corner created or press the next step button if your side is complete."); 
  });
});
</script>

<script>
$(document).ready(function() {
  $('#editversant').click(function() {
$("#tips2").empty();	
   $("#tips2").append("Press the erase last position button to erase the last corner created or press the next step button if your side is complete."); 
  });
});
</script>

<script>
$(document).ready(function() {
  $('#editdist').click(function() {
$("#tips").empty();	
   $("#tips").append("Now you have to select the distance from witch the image as been taken. If you only see the roof, choose near. If you the house and the roof, choose middle. And if you see the house and the some yard, choose far. You can also come back to the side part by pressing the arrow left to the distances buttons."); 
  });
});
</script>

<script>
$(document).ready(function() {
  $('#editdist').click(function() {
$("#tips2").empty();	
   $("#tips2").append("Now you have to select the distance from witch the image as been taken. If you only see the roof, choose near. If you the house and the roof, choose middle. And if you see the house and the some yard, choose far. You can also come back to the side part by pressing the arrow left to the distances buttons."); 
  });
});
</script>



<script>
$(document).ready(function() {
  $('#editangle').click(function() {
$("#tips").empty();	
   $("#tips").append("Now you have to select the angle of the side you've made. (...to be determine) You can also come back to the distance part by pressing the arrow left to the angles buttons."); 
  });
});
</script>

<script>
$(document).ready(function() {
  $('#editangle').click(function() {
$("#tips2").empty();	
   $("#tips2").append("Now you have to select the angle of the side you've made. (...to be determine) You can also come back to the distance part by pressing the arrow left to the angles buttons."); 
  });
});
</script>








<script>
$(document).ready(function() {
  $('#next').click(function() {
$("#tips").empty();	
   if ( $('#versants').children().length > 0 ){
     $("#tips").append("Now it's time to create another side. Now click on the first corner of your side. If you don't need another side you can press the create images button to finish or you can also delete the last created side by pressing the erase last side button."); 
	}

 else {
 	$("#tips").append("Now it's time to create a side, if you need to do more than one side, the first one should ideally be the one behind the others. Now click on the first corner of your side."); 
 }
  });
});
</script>

<script>
$(document).ready(function() {
  $('#next').click(function() {
$("#tips2").empty();	
   if ( $('#versants').children().length > 0 ){
     $("#tips2").append("Now it's time to create another side. Now click on the first corner of your side. If you don't need another side you can press the create images button to finish or you can also delete the last created side by pressing the erase last side button."); 
	}

 else {
 	$("#tips2").append("Now it's time to create a side, if you need to do more than one side, the first one should ideally be the one behind the others. Now click on the first corner of your side."); 
 }
  });
});
</script>

<script>
$(document).ready(function() {
  $('#lastversanterase').click(function() {
$("#tips").empty();	

if ( $('#versants').children().length > 1 ){
     $("#tips").append("Now it's time to create another side. Now click on the first corner of your side. If you don't need another side you can press the create images button to finish or you can also delete the last created side by pressing the erase last side button."); 
	}

 else {
 	$("#tips").append("Now it's time to create a side, if you need to do more than one side, the first one should ideally be the one behind the others. Now click on the first corner of your side."); 
 }
  });
});
</script>

<script>
$(document).ready(function() {
  $('#lastversanterase').click(function() {
$("#tips2").empty();	

if ( $('#versants').children().length > 1 ){
     $("#tips2").append("Now it's time to create another side. Now click on the first corner of your side. If you don't need another side you can press the create images button to finish or you can also delete the last created side by pressing the erase last side button."); 
	}

 else {
 	$("#tips2").append("Now it's time to create a side, if you need to do more than one side, the first one should ideally be the one behind the others. Now click on the first corner of your side."); 
 }
  });
});
</script>

<!-- Enable submit s button after 3 positions
Il faut vérifier pourquoi c'est pas plus >2 qui fonctionne ?????
    ================================================== -->
	
<script>
$(document).ready(function() {
  $('#testimg').click(function(e) {
    if (( $('#tabpos').children().length > 3 )&&( $("#ready").hasClass("ready") )){
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
		if ( $("#ready").hasClass("ready") ) {
        $("body").append(
            $('<img class="target" src="target2.png">')
                .css('position', 'absolute')
                .css('top', (mouseY - 14) + 'px')
                .css('left', (mouseX - 14) + 'px')
);
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
  $("body").children("img:last").remove();  
  if ( $('#tabpos').children().length == 1 ){
  $('#eraselast').hide();
  $('#titre').hide();
  $('#lastversanterase').prop("disabled", false);
  }
  if ( $('#tabpos').children().length < 4 ){
  $('#versant').prop("disabled", true);
  }
  if($('#tabpos').children().length == 1 && $('#versants').children().length != 0){
  $('#submitall').show();
  $('#submitall').prop("disabled", false);
  }
  });
}); 
</script>



<!--Position Buttons, submit and edit 
    ================================================== -->
<script>
$(document).ready(function() {
  $('#versant').click(function () {
  $('#editversant').show();
  $('#boutondist').show();
  $('#eraselast').hide();
  $('#versant').attr('class','btn');  
  $('#versant').prop("disabled", true);
  $('#editversant').prop("disabled", false);
  $('#ready').removeClass("ready");
  });
}); 
</script>  

<script>
$(document).ready(function() {
  $('#editversant').click(function () {
  $('#editversant').hide();
  $('#boutondist').hide();
  $('#eraselast').show();
  $('#versant').attr('class','btn btn-primary');  
  $('#versant').prop("disabled", false);
  $('#ready').addClass("ready");
  });
}); 
</script>  

<!-- Distance chosing buttons + edit button

    ================================================== -->

<script>
$(document).ready(function() {
  $('#dist1').click(function () {
  $('#editdist').show();
  $('#boutonangle').show();
  $('#dist1').prop("disabled", true);
  $('#dist2').prop("disabled", true);
  $('#dist3').prop("disabled", true);
  $('#editversant').prop("disabled", true);
  $('#editdist').prop("disabled", false);
  $( ".choseddist" ).append( "<div>" + 100 + "</div>" );
  $( ".tabdist" ).append( '<div class="dis">Near</div>' );
  $('#titre2').show();
  });
}); 
</script>

<script>
$(document).ready(function() {
  $('#dist2').click(function () {
  $('#editdist').show();
  $('#boutonangle').show();
  $('#dist1').prop("disabled", true);
  $('#dist2').prop("disabled", true);
  $('#dist3').prop("disabled", true);
  $('#editversant').prop("disabled", true);
  $('#editdist').prop("disabled", false);
  $( ".choseddist" ).append( "<div>" + 200 + "</div>" );
  $( ".tabdist" ).append( '<div class="dis">Middle</div>' );
  $('#titre2').show();
  });
}); 
</script>

<script>
$(document).ready(function() {
  $('#dist3').click(function () {
  $('#editdist').show();
  $('#boutonangle').show();
  $('#dist1').prop("disabled", true);
  $('#dist2').prop("disabled", true);
  $('#dist3').prop("disabled", true);
  $('#editversant').prop("disabled", true);
  $('#editdist').prop("disabled", false);
  $( ".choseddist" ).append( "<div>" + 400 + "</div>" );
  $( ".tabdist" ).append( '<div class="dis">Far</div>' );
  $('#titre2').show();
  });
}); 
</script>

<script>
$(document).ready(function() {
  $('#editdist').click(function () {
  $('#editdist').hide();
  $('#boutonangle').hide();
  $('#dist1').prop("disabled", false);
  $('#dist2').prop("disabled", false);
  $('#dist3').prop("disabled", false);
  $('#editversant').prop("disabled", false);
  $('#choseddist').children("div:last").remove();
  $('#tabdist').children("div:last").remove();
  $('#titre2').hide();
  });
}); 
</script>

<!-- Angle chosing buttons + edit button

    ================================================== -->
<script>
$(document).ready(function() {
  $('#angle1').click(function () {
  $('#editangle').show();
  $('#boutonpente').show();
  $('#titre3').show();
  $('#angle').attr('class','btn');  
  $('#angle1').prop("disabled", true);
  $('#angle2').prop("disabled", true);
  $('#angle3').prop("disabled", true);
  $('#editdist').prop("disabled", true);
  $('#editangle').prop("disabled", false);
  $( ".chosedang" ).append( "<div>" + 1 + "</div>" );
  $( ".tabang" ).append( '<div class="ang">In Front</div>' );
  });
}); 
</script>

<script>
$(document).ready(function() {
  $('#angle2').click(function () {
  $('#editangle').show();
  $('#boutonpente').show();
  $('#titre3').show();
  $('#angle').attr('class','btn');  
  $('#angle1').prop("disabled", true);
  $('#angle2').prop("disabled", true);
  $('#angle3').prop("disabled", true);
  $('#editdist').prop("disabled", true);
  $('#editangle').prop("disabled", false);
  $( ".chosedang" ).append( "<div>" + 2 + "</div>" );
  $( ".tabang" ).append( '<div class="ang">45°</div>' );
  });
}); 
</script>

<script>
$(document).ready(function() {
  $('#angle3').click(function () {
  $('#editangle').show();
  $('#boutonpente').show();
  $('#titre3').show();
  $('#angle').attr('class','btn');  
  $('#angle1').prop("disabled", true);
  $('#angle2').prop("disabled", true);
  $('#angle3').prop("disabled", true);
  $('#editdist').prop("disabled", true);
  $('#editangle').prop("disabled", false);
  $( ".chosedang" ).append( "<div>" + 3 + "</div>" );
  $( ".tabang" ).append( '<div class="ang">135°</div>' );
  });
}); 
</script>

<script>
$(document).ready(function() {
  $('#editangle').click(function () {
  $('#editangle').hide();
  $('#boutonpente').hide();
  $('#titre3').hide();
  $('#angle1').prop("disabled", false);
  $('#angle2').prop("disabled", false);
  $('#angle3').prop("disabled", false);
  $('#editdist').prop("disabled", false);
  $('#chosedang').children("div:last").remove();
  $( ".tabang" ).children("div:last").remove();
  });
}); 
</script>


	
<!-- Create versant on choosing a pente buttons
    ================================================== -->
		


<script>
$(document).ready(function() {
  $('#pente1').click(function () {
  $( ".chosedpente" ).append( "<div>" + 1 +"</div>" );
  $( ".tabpente" ).append( '<div class="pen">4/12</div>' );
  $('#titre4').show();
  });
}); 
</script>

<script>
$(document).ready(function() {
  $('#pente2').click(function () {
  $( ".chosedpente" ).append( "<div>" + 2 +"</div>" );
  $( ".tabpente" ).append( '<div class="pen">6/12</div>' );
  $('#titre4').show();
  });
}); 
</script>

<script>
$(document).ready(function() {
  $('#pente3').click(function () {
  $( ".chosedpente" ).append( "<div>" + 3 +"</div>" );
  $( ".tabpente" ).append( '<div class="pen">8/12</div>' );
  $('#titre4').show();
  });
}); 
</script>

<script>
$(document).ready(function() {
  $('#pente4').click(function () {
  $( ".chosedpente" ).append( "<div>" + 4 + "</div>" );
  $( ".tabpente" ).append( '<div class="pen">10/12</div>' );
  $('#titre4').show();
  });
}); 
</script>

<script>
$(document).ready(function() {
  $('#pente5').click(function () {
  $( ".chosedpente" ).append( "<div>" + 5 + "</div>" );
  $( ".tabpente" ).append( '<div class="pen">12/12</div>' );
  $('#titre4').show();
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
  $('#versants').append( '<h3><span class="label label-success" id="' + name + (n += 1) + '">' + msg + " " + (n) + '</span></h3>' );
  $('#form1').append( '<input type="text" value="' + (angle) + '" name="' + name2 + (n) + '" id="' + name2 + (n) + '"><br>' );
  $('#form1').append( '<input type="text" value="' + "pos" + (position) + '" name="' + name3 + (n) + '" id="' + name3 + (n) + '"><br>' );
  $('#form1').append( '<input type="text" value="' + (pente) + '" name="' + name4 + (n) + '" id="' + name4 + (n) + '"><br>' );
  $('#form1').append( '<input type="text" value="' + (distance) + '" name="' + name5 + (n) + '" id="' + name5 + (n) + '"><br>' );
  $('#form1').append( '<input type="text" value="' + (img) + '" name="imgtrav" id="imgtrav"><br>' );
  $('#ready').removeClass("ready");
  $('#lastversanterase').show();
  $('#versant').hide();
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
   $('#lastversanterase').prop("disabled", false);
  });
});

</script>
<script>
$(document).ready(function() {
  $('#boutonpente').click(function () { 
   $('#next').show();
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
  $('#editversant').hide();
  $('#boutondist').hide();
  $('#editdist').hide();
  $('#boutonangle').hide();
  $('#editangle').hide();
  $('#boutonpente').hide();
  $('#submitall').show();
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
  $('#editversant').hide();
  $('#boutonangle').hide();
  $('#editangle').hide();
  $('#boutondist').hide();
  $('#editdist').hide();
  $('#boutonpente').hide();
  $('#submitall').show();
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
  $('#editversant').hide();
  $('#boutonangle').hide();
  $('#editangle').hide();
  $('#boutondist').hide();
  $('#editdist').hide();
  $('#boutonpente').hide();
  $('#submitall').show();
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
  $('#editversant').hide();
  $('#boutonangle').hide();
  $('#editangle').hide();
  $('#boutondist').hide();
  $('#editdist').hide();
  $('#boutonpente').hide();
  $('#submitall').show();
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
  $('#editversant').hide();
  $('#boutonangle').hide();
  $('#editangle').hide();
  $('#boutondist').hide();
  $('#editdist').hide();
  $('#boutonpente').hide();
  $('#submitall').show();
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
  $('#versants').children("h3:last").remove();
  
    if ( $('#form1').children().length == 1 ){
  $('#next').click();
}
    if ( $('#versants').children().length == 0 ){
  $('#submitall').hide();
  $('#lastversanterase').hide();
}
  });  
});  
</script>	

<!-- Next versant 
    ================================================== -->
<script>
$(document).ready(function() {
  $('#next').click(function () {
  $('#ready').addClass("ready");
  $('#next').hide();
  $('#versant').show();
  $('#tabpos2').empty();
  $('#chosedang').empty();
  $('#chosedpente').empty();
  $('#choseddist').empty();
  $('#titre').hide();
  $('#titre2').hide();
  $('#titre3').hide();
  $('#titre4').hide();
  $('.target').remove(); 
  $('.posit').remove();
  $('.dis').remove();
  $('.ang').remove();
  $('.pen').remove();
  
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