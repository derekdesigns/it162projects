<?php include 'includes/header.php';?>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 5</div>
  <img src="images/owlresized.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 5</div>
  <img src="images/greeneyeresized.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
  <img src="images/frogresized.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 5</div>
  <img src="images/twoowlsresized.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 5</div>
  <img src="images/totempoleresized.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>

</body>

 </section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>

  <h1>Placeholder</h1>

  <p>Nullam dolor lacus, pharetra sit amet nisl pellentesque, hendrerit bibendum velit. Nunc pharetra mauris nec leo interdum mattis. Fusce purus ex, pulvinar ut odio at, suscipit convallis purus. Nulla sed massa nisl. Donec laoreet mattis neque, a egestas diam pharetra at. Phasellus tempor facilisis justo, eget sagittis sapien viverra ac. Nam gravida nisi justo, sit amet posuere leo condimentum ac. Sed fringilla, erat eget mollis accumsan, orci nunc imperdiet felis, nec mattis nunc dolor nec ipsum. Phasellus fringilla sed orci at congue. Vestibulum urna ligula, porttitor cursus iaculis dictum, suscipit quis massa. Curabitur vel rutrum ante. Vivamus ultrices volutpat mi, eu gravida velit luctus fermentum. Fusce ac felis vel enim gravida fermentum. Phasellus fermentum rutrum velit sed semper. Ut feugiat nunc id dolor faucibus, ut blandit diam aliquet.</p>
  
</aside>
<!-- END RIGHT COL -->
 
<?php include 'includes/footer.php';?> 