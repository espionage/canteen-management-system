<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name"viewport" content="width=device-width , initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="css/instyle.min.css">
  </head>
  <body>
    <div class="navbar">
      <div class="container">
        <a class="logo" href="#">CMS</a>
        <img id="mobile-cta" class="mobile-menu" src="images/menu.svg" alt="Navigation menu">

        <nav>
          <img id="mobile-exit" class="mobile-menu-exit" src="images/exit.svg" alt="Exit Navigation">
          <ul class="primary-navbar">
            <li><a href="#">Food</a></li>
            <li><a href="#">Items</a></li>
            <li><a href="#">Orders</a></li>
            <li><a href="#">Bill</a></li>
          </ul>
          <ul class="secondary-navbar">
            <li><a href="#"> <img class="accimg" src="images/acc.png"</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </nav>
      </div>
    </div>
    <section class="hero">
      <div class="container">
        <div class="left-col">
          <p class="subhead">Efficient and Reliable</p>
          <h1>Canteen Management System</h1>
        </div>
      </div>
      <img src="images/illustration.svg" class="hero-img" alt="Illustration">
    </section>
    <section class="features-section">
      <div class="container">
        <ul class="features-list">
          <li>Robust Database</li>
          <li>Fast access</li>
          <li>Manage food effectively</li>
          <li>Manage orders</li>
          <li>Handle Bills with ease</li>
        </ul>
      </div>
    </section>
    <script type="text/javascript">
      const mobileBtn=document.getElementById('mobile-cta')
        nav=document.querySelector('nav')
        mobileBtnExit=document.getElementById('mobile-exit');
      mobileBtn.addEventListener('click',() => {
        nav.classList.add('menu-btn');
      })
      mobileBtnExit.addEventListener('click',() => {
        nav.classList.remove('menu-btn');
      })
    </script>
  </body>
</html>
