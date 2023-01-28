<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home.css">


    <title>Welcome</title>
</head>
<body>
<nav class="navbar navbar-expand-xl navbar-light   ">
 <a class="navbar-brand" href="welcome.php">Rasa Nusantara</a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="navbarNav">
   <ul class="navbar-nav ml-auto">
    <li class="nav-item"><a class="nav-link Anmol" style="color:black;" href="welcome.php">Home</a></li>
    <li class="nav-item"><a class="nav-link Anmol" style="color:black;" href="menu.php">Menu</a></li>
    <li class="nav-item"><a class="nav-link Anmol" style="color:black;" href="contact.php">Contact Us</a></li>
    <li class="nav-item"><a class="nav-link Anmol" style="color:black;" href="logout.php">Logout</a></li>
   </ul>
 </div>
</nav>
<h2 style="text-align:center;color:rgb(0, 0, 0)">Welcome to My Restaurants</h2>

<div class="row">
  <div class="column">
    <center><img src="img (2).jpg" class="images rounded" alt="food" style="width: 50%" width="100" height="300"></center>
  </div>

<section id="about-us">
    <div class="row">
        <div class="col-lg-12">
            <div class="about-us-contents">
                <h3>About us</h3>
                <p>Restoran kami terkenal dengan berbagai macam jenis masakan kekinian, layanan staf yang luar biasa
                    Di Restoran kami, kami menyiapkan semuanya menggunakan bahan-bahan berkualitas terbaik
                    dan sayuran segar. Setiap hidangan mewakili rasa, kesenangan, kasih sayang, dan esensi.
                    Di Rasa Nusantara, kami memadukan rasa dan emosi menjadi salah satu pengalaman yang 
                    menyenangkan. Restoran kami menawarkan makan siang, prasmanan, makan malam, takeout untuk pelanggan berharga kami.</p>
            </div>
        </div>
    </div>
</section>

<hr class="footer">
      <div class="container">
        <div class="row footer-body">
          <div class="col-md-3">
          <div class="copyright">
          <label class="font-weight-bold"> Hanifa Almira Giovanni</label>
          </div>
          </div>

          <div class="col-md-6 d-flex justify-content-end">
          <label class="font-weight-bold"> XII RPL A </label>
        </div>
          </div>
        </div>
      </div>

</body>
</html>
