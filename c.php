<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="c.css">
    <link rel="stylesheet" href="../navbar/nav.css">
    <link rel="stylesheet" href="../footer/foot.css">

</head>
<body>
<!-- =======Navbar======-->
<?php include '../navbar/nav.php'?>

<!-- ======first== -->
<header>
    <img src="image/back.jpg" alt="Contact Us Header" class="header-image">
    <h1>We’d Love to Hear From You!</h1>
</header>

<div class="container">
    <h2>Get in Touch</h2>

    <div class="contact-method">
        <a href="tel:+1234567890" class="contact-link">
            <p>📞 Call Us: +91 123456789</p>
        </a>
    </div>

    <div class="contact-method">
        <a href="mailto:info@example.com" class="contact-link">
            <p>📧 Email Us: rioevent@example.com</p>
        </a>
    </div>

    <div class="contact-method">
        <a href="https://www.socialmedia.com/yourprofile" class="contact-link">
            <p>🌐 Not available!</p>
        </a>
    </div>

    <div class="contact-method">
        <a href="#" class="contact-link" onclick="handleVisitUsClick()">
            <p>📍 Visit Us: Kerala Munnar</p>
        </a>
    </div>
   
    <div class='col-12 col-sm-12'>
    <iframe class='map' src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31425.79928340773!2d77.04353530008865!3d10.080648909170726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b0799794d099a6d%3A0x63250e5553c7e0c!2z4K6u4K-C4K6j4K6-4K6w4K-NLCDgrpXgr4fgrrDgrrPgrr4gNjg1NjEy!5e0!3m2!1sta!2sin!4v1729623752863!5m2!1sta!2sin"  style="border:0;" allowfullscreen="" loading="lazy" width='1100' referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    
</div>

<!-- =======footer============ -->
<?php include '../footer/foot.php' ?>           
</body>
</html>
