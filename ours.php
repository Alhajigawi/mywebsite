<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="util.css">
  <title>Gallery</title>
</head>
<body>
 <ul>
 <?php  include_once('inc/nav.inc.php');?>
</ul>
  
  
</head>


  <div class="container">
    <div id="arrow-left" class="arrow"></div>
    <div id="slider">
      <div class="slide slide1">
        <div class="slide-content">
          <h3>OUR SERVICES</h3>
        </div>
      </div>
      <div class="slide slide2">
        <div class="slide-content">
          <span>Image Two</span>
        </div>
      </div>
      <div class="slide slide3">
        <div class="slide-content">
          <h3>OUR SERVICES </h3>
          <a href="https://www.velvot.com">Here</a>
          <img src="image/pex1.jpg">
    
        </div>
      </div>

    <div class="slide slide4">
      <div class="slide-content">
        <span>Image Four</span>
      </div>
    </div>
    <div id="arrow-right" class="arrow"></div>
  </div>




  <script>let sliderImages = document.querySelectorAll(".slide"),
    arrowLeft = document.querySelector("#arrow-left"),
    arrowRight = document.querySelector("#arrow-right"),
    current = 0;
  
  // Clear all images
  function reset() {
    for (let i = 0; i < sliderImages.length; i++) {
      sliderImages[i].style.display = "none";
    }
  }
  
  // Init slider
  function startSlide() {
    reset();
    sliderImages[0].style.display = "block";
  }
  
  // Show prev
  function slideLeft() {
    reset();
    sliderImages[current - 1].style.display = "block";
    current--;
  }
  
  // Show next
  function slideRight() {
    reset();
    sliderImages[current + 1].style.display = "block";
    current++;
  }
  
  // Left arrow click
  arrowLeft.addEventListener("click", function() {
    if (current === 0) {
      current = sliderImages.length;
    }
    slideLeft();
  });
  
  // Right arrow click
  arrowRight.addEventListener("click", function() {
    if (current === sliderImages.length - 1) {
      current = -1;
    }
    slideRight();
  });
  
  startSlide();
  </script>
  
  
  
</body>




</html>




</body>
</html>