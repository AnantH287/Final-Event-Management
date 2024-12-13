
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<link rel="stylesheet" href="p.css">
<link rel="stylesheet" href="../navbar/nav.css">
<link rel="stylesheet" href="../footer/foot.css">

<body>
<!-- =======Navbar======-->

<?php include '../navbar/nav.php' ?>

<!-- =====first========= -->
<div class='container-fluid firstsection'>
  <div class='row'>
    <div class=col-12''>
    <img src="image/girlll.jpg" alt="">
    </div>
  </div>
</div>
<!-- ============second============ -->
<div class="card mb-3 text-center" id='secondsection'>
  <div class="row align-items-center">
    <div class='col-6'>
      <img src="image/stage.jpg" alt="Customized Cake" class="img-fluid animated-img"id='stageimg'>
    </div>
    <div class='col-6' id='secondtext'>
      <h5 class="card-title bold-title animated-text">"Celebrating the Journey into Adulthood with Elegance"</h5>
      <p class="card-text bold-text animated-text">
      "Welcome to Rio Event's special Puberty Ceremony services! We understand that this is a monumental occasion, symbolizing the transition into adulthood. At Rio Events, we offer a fantastic stage that blends tradition with elegance. Our stage setups are designed to create a breathtaking backdrop, perfect for celebrating this important milestone. From vibrant lighting to stunning floral arrangements, every detail is curated to enhance the beauty of this special day.      </p>
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
        <p>Rio Event, we believe that every milestone should be celebrated in a way that leaves lasting memories. With our unique and fantastic stage setups, we ensure that your child's puberty ceremony becomes an unforgettable day. From the moment guests arrive, they'll be captivated by the vibrant décor, intricate designs, and the warm ambiance we create.    </p>
      </div>
    </div>
  </div>
<!-- =============four==================== -->
<div class="card mb-3 text-center" id='secondsection'>
  <div class="row align-items-center">
    <div class='col-6' id='secondtext'>
      <h5 class="card-title bold-title animated-text">"Stunning Lighting for Your Puberty Ceremony"</h5>
      <p class="card-text bold-text animated-text">
Rio Event, we know that the right lighting can transform an ordinary celebration into something truly magical. For your child’s puberty ceremony, we offer dazzling light decorations that set the perfect mood for this once-in-a-lifetime event. From elegant ambient lighting to vibrant spotlights that highlight the fantastic stage, we create an atmosphere filled with warmth and brilliance.
</p>
      <p class="card-text">
        <small class="text-muted"></small>
      </p>
     
    </div>
    <div class='col-6'>
      <img src="image/lighty.webp" alt="Customized Cake" class="img-fluid animated-img "id='ballonimg'>
    </div>
  </div>
</div>
<!-- ==============five============= -->
<div class="card mb-3 text-center" id='secondsection'>
  <div class="row align-items-center">
    <div class='col-6'>
      <img src="image/photo.jpg" alt="Customized Cake" class="img-fluid animated-img" id='cateringmg'>
    </div>
    <div class='col-6' id='secondtext'>
      <h5 class="card-title bold-title animated-text"> "Picture-Perfect Photoshoots for Your Puberty Ceremony"</h5>
      <p class="card-text bold-text animated-text">
      Rio Event, we understand the importance of capturing every precious moment of this significant day. Our professional photography services are designed to turn each memory into a work of art. Whether it's the grand stage setup, the beautifully lit decorations, or candid family moments, we make sure that no detail is missed.</p>
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
      <h5 class="card-title bold-title animated-text">"Exquisite Catering for Your Puberty Ceremony"</h5>
      <p class="card-text bold-text animated-text">
      Rio Event, we know that great food is the heart of any celebration. Our expert catering services bring a diverse range of delicious cuisines to your child’s puberty ceremony. From traditional delicacies to modern favorites, we curate a menu that satisfies every palate, making your event as memorable for its flavors as it is for its beauty.
    </p>
      <p class="card-text">
        <small class="text-muted"></small>
      </p>
     
    </div>
    <div class='col-6'>
      <img src="image/cat.jpg" alt="Customized Cake" class="img-fluid animated-img "id='ballonimg'>
    </div>
  </div>
</div>
<!-- =====button======== -->
<div class="my-footer">
    <button type="submit" class="book-now-btn" onclick="checkLogin()">Book Now</button>
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
        function checkLogin() {
            <?php if (!empty($name) && !empty($email)): ?>
                 window.location.href = '../puberty/puberty.php';
            <?php else: ?>
                 window.location.href='../Resister/resis.php';
            <?php endif; ?>
        }

</script>


</body>
</html>