<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<link rel="stylesheet" href="nav.css">
<body>
  <div class='overall'>
    <nav class="navbar navbar-expand-lg navbar-dark" id="navbar" style="background: linear-gradient(135deg, #3a3d5c, #1e1f33); padding: 0.2rem 1rem;">
        <div class="container-fluid">
            <a class="nav-link" href="../main/main.php" id="home" style="color: #ffb300;">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="background: linear-gradient(135deg, #3a3d5c, #1e1f33);">
                <ul class="navbar-nav ms-auto"> 
                    <li class="nav-item" style="background: linear-gradient(135deg, #3a3d5c, #1e1f33);" >
                        <a class="nav-link active" aria-current="page" href="../about/a.php" style="color: #ffb300; background: linear-gradient(135deg, #3a3d5c, #1e1f33); text-decoration: none;" onmouseover="this.style.color='white';" onmouseout="this.style.color='#ffb300';">About</a>
                    </li>
                    <li class="nav-item" style="background: linear-gradient(135deg, #3a3d5c, #1e1f33); ">
                        <a class="nav-link active" href="../enquiry/e.php" style="color: #ffb300; background: linear-gradient(135deg, #3a3d5c, #1e1f33);" onmouseover="this.style.color='white';" onmouseout="this.style.color='#ffb300';">Enquiry</a>              
                    </li>
                    <li class="nav-item dropdown" style="background: linear-gradient(135deg, #3a3d5c, #1e1f33);">
                        <a class="nav-link dropdown-toggle active" href="#Product" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #ffb300; background: linear-gradient(135deg, #3a3d5c, #1e1f33);" onmouseover="this.style.color='white';" onmouseout="this.style.color='#ffb300';">
                            Events
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../birthday/b.php">Birthday</a></li>
                            <li><a class="dropdown-item" href="../wedding/w.php">Marriage/Wedding</a></li>
                            <li><a class="dropdown-item" href="../puberty/p.php">Puberty Function</a></li>
                            <li><a class="dropdown-item" href="../house/h.php">Housewarming</a></li>
                            <li><a class="dropdown-item" href="../stage/s.php">Stage Events</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="../contact/c.php">Contact-us</a></li>
                        </ul>
                    </li>
                    <li class="nav-item" style="background: linear-gradient(135deg, #3a3d5c, #1e1f33);">
                        <?php if(isset($_SESSION['username']) && isset($_SESSION['email'])): ?>
                        <a class="nav-link active" aria-current="page" href="../profile/pro.php"><i class="fa-solid fa-user" style="color: #ffb300; background: linear-gradient(135deg, #3a3d5c, #1e1f33);" onmouseover="this.style.color='white';" onmouseout="this.style.color='#ffb300';"></i></a>
                        <?php else:?>
                        <a class="nav-link active" aria-current="page" href="../Resister/resis.php" style='color: #ffb300; background: linear-gradient(135deg, #3a3d5c, #1e1f33);'><i class="fa-solid fa-user" style="color: #ffb300;" onmouseover="this.style.color='white';" onmouseout="this.style.color='#ffb300';"></i></a>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
</body>
</html>
