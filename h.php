<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<link rel="stylesheet" href="h.css">
<link rel="stylesheet" href="../navbar/nav.css">
<link rel="stylesheet" href="../footer/foot.css">

<body>
<!-- =======Navbar======-->

<?php include '../navbar/nav.php' ?>

<!-- =====first=========== -->

<div class='container-fluid firstsection'>
  <div class='row'>
    <div class=col-12''>
    <img src="image/last.jpg" alt="">
    </div>
  </div>
</div>
<!-- ============second============ -->
<div class="card mb-3 text-center" id='secondsection'>
  <div class="row align-items-center">
    <div class='col-6'>
      <img src="image/poojaa.jpg" alt="Customized Cake" class="img-fluid animated-img"id='stageimg'>
    </div>
    <div class='col-6' id='secondtext'>
      <h5 class="card-title bold-title animated-text">"Auspicious Beginnings, Divine Blessings"</h5>
      <p class="card-text bold-text animated-text">
      We at Rio Event bring you a meticulously planned housewarming pooja, ensuring your new home is filled with positive energy and blessings. Our arrangements are crafted with devotion, focusing on the rituals and peace of mind for you and your family.    </p>
      <p class="card-text">
        <small class="text-muted"></small>
      </p>
    </div>
  </div>
</div>
<!-- =============third=========== -->
  <div class='container '>
    <div class='row'>
      <div class='col-12'id='thirdsection'>
        <h1>Make unforgettable Day</h1>
        <p>
        Welcome to an unforgettable housewarming celebration with Rio Event! Our expert team ensures every detail is perfect, from the pooja rituals to creating an atmosphere of peace, joy, and blessings for your new home. Let us make this day a cherished memory for you and your loved ones.         </p>
      </div>
    </div>
  </div>
<!-- =============four==================== -->
<div class="card mb-3 text-center" id='secondsection'>
  <div class="row align-items-center">
    <div class='col-6' id='secondtext'>
      <h5 class="card-title bold-title animated-text">Radiant Light Decorations for a Blessed New Beginning</h5>
      <p class="card-text bold-text animated-text">
      At Rio Event, we ensure your housewarming is not just spiritual but visually stunning with our beautiful light decorations. Our team designs a glowing ambiance with traditional lamps, fairy lights, and warm-toned lighting to create a serene and welcoming atmosphere for your pooja ceremony.</p>
      <p class="card-text">
        <small class="text-muted"></small>
      </p>
     
    </div>
    <div class='col-6'>
      <img src="image/light.jpg" alt="Customized Cake" class="img-fluid animated-img "id='ballonimg'>
    </div>
  </div>
</div>
<!-- ==============five============= -->
<div class="card mb-3 text-center" id='secondsection'>
  <div class="row align-items-center">
    <div class='col-6'>
      <img src="image/flow.jpg" alt="Customized Cake" class="img-fluid animated-img" id='cateringmg'>
    </div>
    <div class='col-6' id='secondtext'>
      <h5 class="card-title bold-title animated-text">Elegant Flower Decorations for a Blessed Home</h5>
      <p class="card-text bold-text animated-text">
 
      At Rio Event, we add beauty and fragrance to your housewarming pooja with our exquisite flower decorations. From garlands to floral rangolis, we create an atmosphere of serenity and divine blessings, making your special day vibrant and refreshing.    </p>
      <p class="card-text">
        <small class="text-muted">Hello</small>
      </p>
    </div>
  </div>
</div>
<!-- ===============six============ -->
<div class="card mb-3 text-center" id='secondsection'>
  <div class="row align-items-center">
    <div class='col-6' id='secondtext'>
      <h5 class="card-title bold-title animated-text">"Exquisite Catering for Your House Warming"</h5>
      <p class="card-text bold-text animated-text">
      Rio Event, we know that great food is the heart of any celebration. Our expert catering services bring a diverse range of delicious cuisines to your child’s puberty ceremony. From traditional delicacies to modern favorites, we curate a menu that satisfies every palate, making your event as memorable for its flavors as it is for its beauty.
    </p>
      <p class="card-text">
        <small class="text-muted"></small>
      </p>
    </div>
    <div class='col-6'>
      <img src="image/catering.jpg" alt="Customized Cake" class="img-fluid animated-img "id='ballonimg'>
    </div>
  </div>
</div>
<!-- =====button======== -->
<div class="my-footeres">
    <button type="submit" class="book-now-btn" onclick="checkLogin()">Book Now</button>
</div>

<!-- =========footer============= -->
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
        function checkLogin() {
            <?php if (!empty($name) && !empty($email)): ?>
                 window.location.href = '../house/house.php';
            <?php else: ?>
                 window.location.href='../Resister/resis.php';
            <?php endif; ?>
        }

</script>


</body>
</html>