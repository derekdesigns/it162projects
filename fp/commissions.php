<?php include 'includes/header.php';?>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 5</div>
  <img src="images/blackandwhitedogrestingresized.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 /5</div>
  <img src="images/browndogcloseupresized.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
  <img src="images/huskyresized.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 5</div>
  <img src="images/whitedogredballresized.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 5</div>
  <img src="images/whitedogprofileresized.jpg" style="width:100%">
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

<img src="images/twokittens.jpg" class="center" alt="twocats">
<br />
<img src="images/twodogs.jpg" class="center" alt="twodogs"
</body>

 </section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>

  <h1>Placeholder</h1>

  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam elementum euismod tortor eget semper. Ut bibendum posuere dignissim. Proin mollis pulvinar urna, vel aliquam tellus tincidunt non. Suspendisse posuere dui eget ornare viverra. Sed suscipit maximus magna, ac interdum risus pretium vitae. Nullam sit amet sapien non mauris laoreet hendrerit. Aliquam aliquam dapibus sapien, et mollis arcu placerat non. Maecenas malesuada risus at ante fringilla, a tempor nulla iaculis. Morbi volutpat vulputate laoreet. Nullam feugiat feugiat risus, vitae molestie enim dapibus sit amet.</p>

  <p>Sed interdum ullamcorper neque. Praesent vitae cursus nisi, vitae posuere arcu. Nulla nec aliquam nunc. Mauris id purus ac nisi semper vulputate at in metus. Aenean eu magna nec sapien gravida placerat dictum sed magna. Quisque ultrices eleifend mauris, a luctus nulla finibus ac. Maecenas quis sem at arcu dignissim laoreet ac sit amet nisl. Vivamus id laoreet velit, at auctor ligula. Donec aliquet lectus felis, sit amet volutpat lacus ultrices at.</p>
  <br />

  <img src="images/wendywithcat.jpg" class="center" alt="wendywithcat">
  <br /><br />

  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam elementum euismod tortor eget semper. Ut bibendum posuere dignissim. Proin mollis pulvinar urna, vel aliquam tellus tincidunt non. Suspendisse posuere dui eget ornare viverra. Sed suscipit maximus magna, ac interdum risus pretium vitae. Nullam sit amet sapien non mauris laoreet hendrerit. Aliquam aliquam dapibus sapien, et mollis arcu placerat non. Maecenas malesuada risus at ante fringilla, a tempor nulla iaculis. Morbi volutpat vulputate laoreet. Nullam feugiat feugiat risus, vitae molestie enim dapibus sit amet.</p>

  </aside>
<!-- END RIGHT COL -->
 
<?php include 'includes/footer.php';?> 