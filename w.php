<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<link rel="stylesheet" href="w.css">
<link rel="stylesheet" href="../navbar/nav.css">
<link rel="stylesheet" href="../footer/foot.css">

<body>
<!-- =======Navbar======-->

<?php include '../navbar/nav.php' ?>

<!-- =====first========= -->
<div class='container-fluid firstsection'>
  <div class='row'>
    <div class=col-12''>
    <img src="image/blue.jpg" alt="">
    </div>
  </div>
</div>

<!-- ============second============ -->
<div class="card mb-3 text-center" id='secondsection'>
  <div class="row align-items-center">
    <div class='col-6'>
      <img src="image/venue.jpg" alt="Customized Cake" class="img-fluid animated-img" id='venueimg'>
    </div>
    <div class='col-6' id='secondtext'>
      <h5 class="card-title bold-title animated-text">"Your Dream Wedding, Perfectly Planned"</h5>
      <p class="card-text bold-text animated-text">
      "At Rio Event, we make your special day unforgettable with our elegant and personalized wedding planning. From the grand décor to every intricate detail, we design your wedding to reflect your unique love story. Whether you're dreaming of a traditional ceremony or a modern celebration, our expert team ensures your vision comes to life. Celebrate love with Rio Event, where every moment is crafted to perfection for the start of your beautiful journey together!"      </p>
      <p class="card-text">
        <small class="text-muted"></small>
      </p>
      <h5 class="card-title bold-title animated-text">"Your Love, Our Passionate Touch"</h5>
      <p class="card-text bold-text animated-text">
      Rio Event, we believe every love story deserves a grand celebration. From the first look to the final dance, we craft your wedding day with love and attention to detail. Whether it's an intimate gathering or a grand affair, we make sure your special day reflects the beauty of your bond.      </p>
      <p class="card-text">
        <small class="text-muted">Hello</small>
      </p>
    </div>
  </div>
</div>
<!-- =============third=========== -->
  <div class='container '>
    <div class='row'>
      <div class='col-12'id='thirdsection'>
        <h1>Make unforgettable Day</h1>
        <p> Rio Event, we turn your wedding into an unforgettable day that you and your loved ones will cherish forever. From breathtaking décor to seamless coordination, we handle every detail with care and precision. Your special day deserves nothing less than perfection, and we ensure that every moment is filled with joy, beauty, and memories that last a lifetime. Let Rio Event make your wedding day truly extraordinary."

</p>
      </div>
    </div>
  </div>
<!-- =============four==================== -->
<div class="card mb-3 text-center" id='secondsection'>
  <div class="row align-items-center">
    <div class='col-6' id='secondtext'>
      <h5 class="card-title bold-title animated-text">"Timeless Wedding Moments Captured Forever"</h5>
      <p class="card-text bold-text animated-text">
      "Capture the magic of your special day with Rio Event's exclusive wedding photoshoot services. From candid moments to stunning portraits, our expert photographers ensure every cherished memory is beautifully preserved. Whether it's the joy of the ceremony or the romance of the first dance, we create timeless images that tell the story of your unforgettable day. Let us turn your wedding moments into lasting works of art."
</p>
      <p class="card-text">
        <small class="text-muted"></small>
      </p>
     
    </div>
    <div class='col-6'>
      <img src="image/shoot.jpg" alt="Customized Cake" class="img-fluid animated-img ballonimg" id='shoot'>
    </div>
  </div>
</div>
<!-- ==============five============= -->
<div class="card mb-3 text-center" id='secondsection'>
  <div class="row align-items-center">
    <div class='col-6'>
      <img src="image/car.avif" alt="Customized Cake" class="img-fluid animated-img" id='cateringmg'>
    </div>
    <div class='col-6' id='secondtext'>
      <h5 class="card-title bold-title animated-text"> "Luxury Wedding Rides for Your Special Day"</h5>
      <p class="card-text bold-text animated-text">
      "Arrive in style on your special day with Rio Event’s premium wedding car service. Whether you prefer classic elegance or modern luxury, we provide a range of vehicles to suit your taste. Our professional chauffeurs ensure a smooth, comfortable ride, so you can focus on enjoying every moment of your big day. Let Rio Event add a touch of class and sophistication to your wedding journey."        </p>
      <p class="card-text">
        <small class="text-muted">Hello</small>
      </p>
    </div>
  </div>
</div>
<!-- =====six============== -->

<div class="card mb-3 text-center" id='secondsection'>
  <div class="row align-items-center">
    <div class='col-6' id='secondtext'>
      <h5 class="card-title bold-title animated-text">"Exquisite Wedding Catering by Rio Event"</h5>
      <p class="card-text bold-text animated-text">
"Delight your guests with Rio Event’s exquisite catering service, crafted to elevate your wedding feast. Our expert chefs prepare a customized menu to suit your tastes and preferences, ensuring every dish is a culinary masterpiece. From traditional favorites to gourmet creations, we provide a dining experience that complements the joy of your celebration. Let Rio Event make your wedding meal as memorable as the day itself."
</p>
      <p class="card-text">
        <small class="text-muted"></small>
      </p>
    </div>
    <div class='col-6'>
      <img src="image/catering.webp" alt="Customized Cake" class="img-fluid animated-img ballonimg" id='catering'>
    </div>
  </div>
</div>

<!-- ======button===== -->
<div class="my-footeres">
  <button type="submit" class="book-now-btn"onclick="checkLogin()">Book Now</button>
</div>


<!-- ==========footer======== -->
<?php 
if(session_status() === PHP_SESSION_NONE){
  session_start();
}

if(isset($_SESSION['username']) && isset($_SESSION['email'])){
  $name = $_SESSION['username'];
  $email = $_SESSION['email'];
}
?>

<?php include '../footer/foot.php' ?>

<script>
  function checkLogin(){
    <?php if(!empty($name) && !empty($email)):?>
      window.location.href ='../wedding/wedding.php';
    <?php else: ?>
      window.location.href='../Resister/resis.php';
    <?php endif?>
  }
</script>

</body>
</html>
