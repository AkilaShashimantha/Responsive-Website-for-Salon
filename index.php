<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Saloon Nehara</title>
  <link rel="icon" href="images/Nehara.svg" type="image/svg">

  <link href="bootstrap.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

  <div class=" container-fluid">
    <div class=" row">

      <?php
      require "header.php"
      ?>
      <hr class=" mt-0 my-0">
<!-- Carousel -->
      <div class=" col-lg-8 col-10 offset-lg-2 offset-1 mt-3 overflow-hidden" id="home">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
              <img src="images/3.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="images/2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/1.png" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
<!-- About Us -->
      <div class=" col-12 mt-2 overflow-hidden" style="background-color: #CAF9CB;" id="aboutus">
        <div class=" row">

          <div class=" col-12 d-flex justify-content-center overflow-hidden">
            <h2 class="title-font ">About US</h2>
          </div>

          <div class=" col-12">
            <div class=" row">

              <div class="col-6 col-lg-4 overflow-hidden ">
                <img src="images/banner1.png" alt="banner image1" class="banner-img">
              </div>
              <div class="col-6 col-lg-8 overflow-hidden">

                <div class=" col-12 title-font d-flex justify-content-center overflow-hidden">Our Vision and Mission</div>
                <div class="col-12">
                  <p class="para-font"><b>Our vision</b> is to set the standard for beauty and wellness in Sri Lanka by combining cutting-edge techniques

                    with a personalized touch. We are dedicated to continually improving our services and facilities to meet the evolving
                    needs of our clients.
                    <br><br>
                    <b>Our mission</b> is to provide exceptional beauty services that enhance the natural beauty
                    of our clients. We strive to create a welcoming and relaxing environment where every
                    client feels valued and pampered.
                  </p>
                </div>

                <div class=" col-12 d-flex justify-content-center ">
                  <img src="images/Nehara.svg" alt="" class="svg-img">
                </div>

              </div>

            </div>
          </div>

        </div>
      </div>

      <!-- services -->

      <div class=" col-12" id="services">
<div class=" row">

<div class="col-6 col-lg-3">
<img src="images/service-img1.png" alt="" class="col-12">
</div>
<div class="col-6 col-lg-3">
<img src="images/service-img2.png" alt="" class=" col-12">
</div>
<div class="col-6 col-lg-3">
<img src="images/service-img3.png" alt="" class=" col-12">
</div>
<div class="col-6 col-lg-3">
<img src="images/service-img4.png" alt="" class=" col-12">
</div>
<div class=" col-6 col-lg-3">
<img src="images/service-img5.png" alt="" class=" col-12">
</div>
<div class=" col-6 col-lg-3">
<img src="images/service-img6.png" alt="" class=" col-12">
</div>
<div class=" col-6 col-lg-3">
<img src="images/service-img7.png" alt="" class=" col-12">
</div>
<div class=" col-6 col-lg-3">
<img src="images/service-img8.png" alt="" class=" col-12">
</div>
</div>
      </div>

<!-- contact Us -->

<div class=" col-12" style="background-image: radial-gradient(circle, #011804, #052e0f, #004611, #00600e, #017a00);" id="contactus">

<div class=" row">

<div class="col-12 d-flex justify-content-center"><h2 class=" text-white">Contact Us</h2></div>
<!-- send mail -->
<div class=" col-lg-6 col-12 ">

<form action="contactProcess.php" method="post">


    <div class=" col-12 "><label for="" class=" form-label text-white">Enter Your Email</label></div>
   <div class=" col-12"> <input type="email" name="email" id="email" class=" form-control text-center" placeholder="your email" required></div>

<div class=" col-12 d-flex justify-content-center ">
<div class=" col-12"><Label class=" form-label text-white">Enter Your Message</Label></div>
</div>
<div class=" col-12">
<textarea name="message" id="message" class=" form-control message-area col-12 my-3" placeholder="Enter your message here" rows="8" required></textarea>
</div>
 <div class=" col-12 d-flex justify-content-center my-5"><button class=" btn btn-outline-primary col-8 col-lg-8" type="submit" name="send">Send</button></div>

</form>

</div>
<!-- social media -->
 <div class=" col-lg-6 col-12">

<div class=" col-12 d-flex justify-content-center">

  <div class=" fs-2 col-6 text-white-50"> Facebook :
<a href="https://www.facebook.com/your-page-name" target="_blank" class="text-decoration-none">
        <i class="bi bi-facebook" style="font-size: 30px; color: #4267B2;"></i>
    </a>

<br>
WhatsApp :
<a href="https://wa.me/+94719886557" target="_blank" class="text-decoration-none">
        <i class="bi bi-whatsapp" style="font-size: 24px; color: #25D366;"></i>
    </a>

  <br>
  Email Address:
  <a href="mailto:example@example.com" class="text-decoration-none">
        <i class="bi bi-envelope fs-3 text-primary"></i>
    </a>
  
    </div>
    
</div>

 </div>

</div>

</div>

<!-- Location -->

<div class=" col-12 mb-5 mt-5">

<div class=" col-12 d-flex justify-content-center fs-1">Our Location</div>
<iframe width="100%" height="500px"
 src="https://www.openstreetmap.org/export/embed.html?bbox=80.21733194589616%2C6.033572625368036%2C80.2198424935341%2C6.035309067992124&amp;layer=mapnik" style="border: 1px solid black">
</iframe>


</div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>



</html>