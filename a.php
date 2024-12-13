<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<link rel="stylesheet" href="a.css">
<link rel="stylesheet" href="../navbar/nav.css">
<link rel="stylesheet" href="../footer/foot.css">

<body>
<!-- =======Navbar======-->

<?php include '../navbar/nav.php' ?>

<!-- =====first=========== -->

<div class='container-fluid firstsection'>
  <div class='row'>
    <div class=col-12''>
    <img src="image/log.jpg" alt="">
    </div>
  </div>
</div>
<!-- ============second============ -->
<div class="card mb-3 text-center" id='secondsection'>
  <div class="row align-items-center">
    <div class='col-6'>
      <img src="image/about.webp" alt="Customized Cake" class="img-fluid animated-img"id='stageimg'>
    </div>
    <div class='col-6' id='secondtext'>
      <h5 class="card-title bold-title animated-text">" Rio Event Management"</h5>
      <p class="card-text bold-text animated-text">
      Rio Event Management is your dedicated partner in crafting exceptional events across Kerala. With a passion for creativity and a commitment to excellence, we specialize in planning and executing a wide range of occasions, including weddings, corporate functions, birthday parties, and housewarming celebrations. Our expert team brings together years of experience in event management, ensuring that every detail is meticulously handled to meet your unique vision.     </p>
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
        <h1>About Us <b> <span>R</span>io</b></h1>
        <p>
        Welcome to Rio Event Management, your premier partner for creating extraordinary events in Kerala. Our mission is to transform your visions into reality, ensuring that every celebration is unique and unforgettable. With a dedicated team of experienced professionals, we specialize in a wide range of services, from event planning and coordination to exquisite decor and entertainment.

At Rio Event Management, we understand that every detail matters, whether it's a wedding, birthday party, corporate event, or a magical housewarming celebration. We pride ourselves on our commitment to excellence, creativity, and customer satisfaction. Our expert team works closely with you to tailor each event to your specific needs and desires, ensuring a seamless and enjoyable experience.

    </p>
      </div>
    </div>
  </div>
<!-- =============four==================== -->
<div class="card mb-3 text-center" id='secondsection'>
  <div class="row align-items-center">
    <div class='col-6' id='secondtext'>
      <h5 class="card-title bold-title animated-text">"Happy Customers"</h5>
      <p class="card-text bold-text animated-text">
      At Rio Event Management, our greatest pride comes from the satisfaction of our clients. We believe that happy customers are the cornerstone of our success. With every event we manage, our goal is to exceed expectations and create lasting memories. From the initial consultation to the final farewell, we work closely with our clients to understand their unique needs and preferences, ensuring that every detail aligns with their vision. The joy and appreciation expressed by our customers motivate us to continually improve and innovate.     </p>
      <p class="card-text">
        <small class="text-muted"></small>
      </p>
     
    </div>
    <div class='col-6'>
      <img src="image/happy.jpg" alt="Customized Cake" class="img-fluid animated-img "id='ballonimg'>
    </div>
  </div>
</div>
<!-- ==============five============= -->
<div class="card mb-3 text-center" id='secondsection'>
  <div class="row align-items-center">
    <div class='col-6'>
      <img src="image/experience.jpg" alt="Customized Cake" class="img-fluid animated-img" id='cateringmg'>
    </div>
    <div class='col-6' id='secondtext'>
      <h5 class="card-title bold-title animated-text">A Decade of Expertise</h5>
      <p class="card-text bold-text animated-text">
      With over 10 years of experience in the event management industry, Rio Event Management has built a reputation for excellence and innovation. Our extensive expertise allows us to navigate the complexities of planning and executing various events, ensuring that each celebration is seamless and memorable. We have honed our skills in understanding client needs, managing logistics, and coordinating with a diverse range of vendors.      </p>
      <p class="card-text">
        <small class="text-muted"></small>
      </p>
    </div>
  </div>
</div>
<!-- ===============six============ -->
<div class="card mb-3 text-center" id='secondsection'>
  <div class="row align-items-center">
    <div class='col-6' id='secondtext'>
      <h5 class="card-title bold-title animated-text">"Budget-Friendly Solutions"</h5>
      <p class="card-text bold-text animated-text">
      At Rio Event Management, we understand that planning an event can be a significant investment, which is why we are committed to providing budget-friendly solutions without compromising on quality. Our experienced team works closely with you to create a tailored plan that aligns with your vision and financial goals.    </p>
      <p class="card-text">
        <small class="text-muted"></small>
      </p>
    </div>
    <div class='col-6'>
      <img src="image/budget.jpg" alt="Customized Cake" class="img-fluid animated-img "id='ballonimg'>
    </div>
  </div>
</div>
<!-- =====button======== -->
<div class="my-footeres">
  <form id="booking-form" action="" method="POST">
  <button type="button" class="book-now-btn" onclick="window.location.href='../enquiry/e.php'">Enquiry</button>
  </form>
</div>

<!-- =========footer============= -->
 
<?php include '../footer/foot.php' ?>
