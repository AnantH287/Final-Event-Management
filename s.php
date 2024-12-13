<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<link rel="stylesheet" href="s.css">
<link rel="stylesheet" href="../navbar/nav.css">
<link rel="stylesheet" href="../footer/foot.css">

<body>
<!-- =======Navbar======-->

<?php include '../navbar/nav.php' ?>

<!-- =====first=========== -->

<div class='container-fluid firstsection'>
  <div class='row'>
    <div class='col-12'>
    <img src="image/back2.jpg" alt="">
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
      <h5 class="card-title bold-title animated-text">" Rio Event Management Stage Interaction"</h5>
      <p class="card-text bold-text animated-text">
      The host steps onto the stage, beaming with excitement, and addresses the vibrant audience, “Welcome to the Rio Event Management grand celebration here in beautiful Kerala! We’re thrilled to have you all with us! Who's ready for an unforgettable experience tonight?” A customer in the front row raises their hand and enthusiastically responds, “I can’t wait to see the stunning performances you’ve been promoting!” The host nods eagerly, “That’s fantastic!     </p>
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
        Welcome to an unforgettable celebration with Rio Event Management here in beautiful Kerala! Our dedicated team is committed to making every moment special, from stunning performances to delightful cuisine that showcases the rich flavors of our culture. We aim to create an atmosphere filled with joy, laughter, and cherished memories. Let us make this day truly unforgettable for you and your loved ones!      </p>
      </div>
    </div>
  </div>
<!-- =============four==================== -->
<div class="card mb-3 text-center" id='secondsection'>
  <div class="row align-items-center">
    <div class='col-6' id='secondtext'>
      <h5 class="card-title bold-title animated-text">Expert Singer </h5>
      <p class="card-text bold-text animated-text">
      At Rio Event Management, we pride ourselves on delivering unforgettable experiences, and our expert singer is the heart of our celebrations. With a mesmerizing voice and a diverse repertoire, our singer creates an enchanting atmosphere that resonates with every guest. Whether it's a soulful ballad or an upbeat tune, their performance elevates the event, bringing joy and unforgettable memories to your special day. Let us make your occasion extraordinary with the perfect musical touch!    </p>
      <p class="card-text">
        <small class="text-muted"></small>
      </p>
     
    </div>
    <div class='col-6'>
      <img src="image/singer.jpg" alt="Customized Cake" class="img-fluid animated-img "id='ballonimg'>
    </div>
  </div>
</div>
<!-- ==============five============= -->
<div class="card mb-3 text-center" id='secondsection'>
  <div class="row align-items-center">
    <div class='col-6'>
      <img src="image/audience.jpg" alt="Customized Cake" class="img-fluid animated-img" id='cateringmg'>
    </div>
    <div class='col-6' id='secondtext'>
      <h5 class="card-title bold-title animated-text">Engage Your Audience with Live Music</h5>
      <p class="card-text bold-text animated-text">
 At Rio Event Management, we believe that audience engagement is key to a memorable event, and our expert singer knows just how to captivate your guests. With a dynamic performance that includes sing-alongs, audience participation, and interactive elements, our singer creates an electric atmosphere that invites everyone to join in the fun. From lively tunes that get everyone dancing to heartfelt melodies that resonate, let us transform your event into a vibrant celebration where your guests feel connected and energized!
    </p>
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
      <h5 class="card-title bold-title animated-text">"Magical Experience"</h5>
      <p class="card-text bold-text animated-text">
      At Rio Event Management, we know how to captivate and engage your audience, and our magic show is the perfect addition to your event! With mesmerizing illusions and interactive tricks, our expert magician creates an enchanting atmosphere that leaves guests of all ages spellbound. From mind-boggling feats that challenge perception to delightful interactions that involve the audience, every performance is designed to spark wonder and excitement. Let us bring a touch of magic to your celebration, making it a memorable experience for everyone involved!</p>
      <p class="card-text">
        <small class="text-muted"></small>
      </p>
    </div>
    <div class='col-6'>
      <img src="image/magic.jpg" alt="Customized Cake" class="img-fluid animated-img "id='ballonimg'>
    </div>
  </div>
</div>
<!-- =====button======== -->
<div class="my-footeres">
<button type="submit" class="book-now-btn"onclick="checkLogin()">Book Now</button>
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
function checkLogin(){
  <?php if(!empty($name) && !empty($email)): ?>
    window.location.href='../stage/stage.php';
  <?php  else:?>
    window.location.href='../Resister/resis.php';
  <?php endif?>
}
</script>
