<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7 " lang="es"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8 ie7" lang="es"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9 ie8" lang="es"><![endif]-->
<!--[if gt IE 8]> <html class="no-js ie9" lang="es"><![endif]-->
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>VIajeo - Viajeo | Tu agencia de viajes</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
.parallax {
    /* The image used */
    background-image: url("pic/1.jpg");

    /* Set a specific height */
    min-height: 500px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
</head>
<body>
<?php include 'head2.php';?>


<div class=" w3-display">

<div class="w3-display-container mySlides">
  <img src="pic/1.jpg" style="width:100%">
 <div class="w3-display-middle w3-large w3-container w3-padding-16 w3-black">
   <h2>TÚ ELIGE EL DESTINO,<br /><img src="img/cms/viajeo_para_banner.png" alt="" width="400" height="100" style="margin-left:auto;margin-right:auto;" /><br> LO HACE POSIBLE!</h2>
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="pic/2.jpg" style="width:100%">
 <div class="w3-display-middle w3-large w3-container w3-padding-16 w3-black">
   <img src="img/cms/viajeo_para_banner.png" alt="" width="400" height="100" style="margin-left:auto;margin-right:auto;" /></h2>
<h2></h2>
<h2>TU AGENCIA DE VIAJES.</h2>
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="pic/3.jpg" style="width:100%">
 <div class="w3-display-middle w3-large w3-container w3-padding-16 w3-black">
    Mountains!
  </div>
</div>



<button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
<button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>

</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
  


<div class="parallax">
<div class="w3-row">
<div class="w3-col l12 ">
   <div class="w3-col l2  w3-center"><p></p></div>
  <div class="w3-col l4   w3-center">   <div class="w3-col s4">
      <img src="pic/p1.jpg" style="width:585 ">
    </div>
    <div class="w3-col l4 w3-center">
      <img src="pic/p3.jpg" style="width:585 ">
    </div></div>
  <div class="w3-col l2  w3-center"><p></p></div>     
   
 </div>
 <div class="w3-col l12 ">
     <div class="w3-col l2   w3-center"><p></p></div>
  <div class="w3-col l4   w3-center">   <div class="w3-col s4">
      <img src="pic/p4.jpg" style="width:585 ">
    </div>
    <div class="w3-col l4 w3-center">
      <img src="pic/p2.jpg" style="width:585 ">
    </div></div>
  <div class="w3-col l2   w3-center"><p></p></div>   
      
   </div>
  </div>

 </div>

</body>
</html>