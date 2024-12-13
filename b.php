
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<link rel="stylesheet" href="b.css">
<link rel="stylesheet" href="../navbar/nav.css">
<link rel="stylesheet" href="../footer/foot.css">

<body>
<!-- =======Navbar======-->

<?php include '../navbar/nav.php' ?>



<!-- =========first===========-->
<div class='container-fluid firstsection'>
  <div class='row'>
    <div class=col-12''>
    <img src="image/backy.jpg" alt="">
    </div>
  </div>
</div>

<!-- ============second============ -->
<div class="card mb-3 text-center" id='secondsection'>
  <div class="row align-items-center">
    <div class='col-12 col-md-12 col-lg-6' >
      <img src="image/cake.jpeg" alt="Customized Cake" class="img-fluid animated-img" id='firstimage'>
    </div>
    <div class='col-12 col-md-12 col-lg-6' id='secondtext'>
      <h5 class="card-title bold-title animated-text">Customized Cake</h5>
      <p class="card-text bold-text animated-text">
        At Rio Event, we make your birthday celebrations extra special with our customized cakes,
        designed just for you! Whether you're looking for a classic flavor or a unique creation,
        our cakes are crafted to match your theme and preferences.
        Celebrate with a personalized cake that adds a sweet touch to your memorable day!
      </p>
      <p class="card-text">
        <small class="text-muted"></small>
      </p>
      <h5 class="card-title bold-title animated-text">Customized Taste Also</h5>
      <p class="card-text bold-text animated-text">
        Our customized cakes are available in a variety of flavors—from classic favorites like chocolate and vanilla to exotic options like red velvet and fruit cake. Whether you have a taste for something traditional or a flavor adventure in mind, we craft each cake to suit your personal preferences. Let us create the perfect cake that not only looks great but also satisfies your taste buds!
      </p>
      <p class="card-text">
        <small class="text-muted">Choose cake varity</small>
      </p>
    </div>
  </div>
</div>
<!-- =============third=========== -->
  <div class='container '>
    <div class='row'>
      <div class='col-12'id='thirdsection'>
        <h1>Make unforgettable Day</h1>
        <p>Make your birthday unforgettable with Rio Event! From stunning décor to personalized cakes, we handle every detail with care and creativity. Let us bring your dream celebration to life, so you can focus on making memories while we handle the magic. Celebrate in style, because at Rio Event, your happiness is our priority!
        Imagine a birthday celebration designed exclusively for you! At Rio Event, we bring your dreams to life with breathtaking décor and mouthwatering personalized cakes. Our dedicated team ensures that every moment is filled with joy and every detail reflects your style. Celebrate with us, and let your birthday be a day to remember!""</p>
      </div>
    </div>
  </div>
<!-- =============four==================== -->
<div class="card mb-3 text-center" id='secondsection'>
  <div class="row align-items-center">
    <div class='col-6 ' id='secondtext'>
      <h5 class="card-title bold-title animated-text">Ballon Decoration</h5>
      <p class="card-text bold-text animated-text">
      At Rio Event, we understand that the right decorations can transform any birthday celebration into a magical experience. Our stunning balloon decorations are designed to create a vibrant atmosphere that captivates your guests and enhances your theme. Whether you envision elegant balloon arches, whimsical centerpieces, or playful balloon bouquets, we tailor our designs to suit your style and preferences. Our expert team ensures that every detail is perfect, allowing you to relax and enjoy the festivities. With our balloon decorations, your celebration will not only look spectacular but also create lasting memories that you and your guests will cherish forever!"

</p>
      <p class="card-text">
        <small class="text-muted"></small>
      </p>
     
    </div>
    <div class='col-6 '>
      <img src="image/ballon.jpg" alt="Customized Cake" class="img-fluid animated-img ballonimg">
    </div>
  </div>
</div>
<!-- ==============five============= -->
<div class="card mb-3 text-center" id='secondsection'>
  <div class="row align-items-center">
    <div class='col-6'>
      <img src="image/catering.jpeg" alt="Customized Cake" class="img-fluid animated-img" id='cateringmg'>
    </div>
    <div class='col-6' id='secondtext'>
      <h5 class="card-title bold-title animated-text"> Catering by Our Expert Cooks!"</h5>
      <p class="card-text bold-text animated-text">
      "At Rio Event, our catering service is elevated by the skill and creativity of our expert cooks. With years of experience in crafting exquisite dishes, our culinary team is dedicated to bringing your birthday celebration to life through exceptional flavors and presentations. We pride ourselves on using only the freshest, high-quality ingredients to create a diverse menu that caters to all tastes and dietary preferences.      </p>
      <p class="card-text">
        <small class="text-muted">Hello</small>
      </p>
    </div>
  </div>
</div>
<!-- =====button======== -->
<!-- =====button======== -->
<div class="my-footeres">
  <button type="button" class="book-now-btn" onclick="checkLogin()">Book Now</button>
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
  <?php if(!empty($name) && !empty($email)): ?>
    window.location.href='../birthday/birthdays.php';
  <?php  else:?>
    window.location.href='../Resister/resis.php';
  <?php endif?>
}
</script>


</body>
</html>