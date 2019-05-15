<!DOCTYPE html>
<html class="home" lang="en">
<head>
    <meta charset="UTF-8">
    <title>Uppal Transport</title>
  <link rel="stylesheet" href="css.css">
</head>
<body>
   <div class="flex-container">
   <div class="hometitle">
    <h1>Uppal Transport</h1>
    </div>
<div class="homepage1"><p><strong>Welcome!</strong> We are Uppal Transport. We specialize in the transportation of goods.</p>
 </div>
  <div class="homepage2">
      <p>To use our serves you can send us an email through either your personal computer, laptop, phone etc...We also use a reefer trailer to keep items cold or frozen for long period of time and for temperature-sensitive items. They can also be used for heated items too.We also provide dry van transportation to keep your items nice and dry through the rain or any other conditions and to keep it safe obviously.</p></div>
      <div class="paragraph">
   <p>We also are located in the Fresno city and contact you if we any question about the cargo you need carried.For more information there is a link here.</p>
    </div>
       <div class="header2">
   <h2>Our Purpose</h2>
       </div>
       <div class="paragraph">
    <p>We strive to get the job well done in a well fashion, so you can be happy and we know we did good.We also wanted to provide a great deal of service to many people as we can so it won't be a hassle for those that need things to get moved faster and safely.</p>
      </div>
     <!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 5</div>
    <img src="slide%20show1.jpg" style="width:100%">
    <div class="text"></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 5</div>
    <img src="slide%20show2.jpg" style="width:100%">
    <div class="text"></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 5</div>
    <img src="slide%20show3.jpg" style="width:100%">
    <div class="text"></div>
  </div>
  
  <div class="mySlides fade">
    <div class="numbertext">4 / 5</div>
    <img src="slide%20show4.jpg" style="width:100%">
    <div class="text"></div>
  </div>

<div class="mySlides fade">
    <div class="numbertext">5 / 5</div>
    <img src="slide%20show%205.jpg" style="width:100%">
    <div class="text"></div>
  </div>
  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> <span class="dot" onclick="currentSlide(5)"></span> 
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
     <script>
         var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none"; 
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1} 
  slides[slideIndex-1].style.display = "block"; 
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
       </script>
    <div class="image1">
        <image ></image>
    </div>
    <div class="header3">
    <h2>Extra Information</h2>
    </div>
    <div class="extra">
    <p>If you want more information about our service take a look at our other page.</p>
    </div>
    </div>
    <?php
  
   
    ?>
   
    
</body>
</html>
