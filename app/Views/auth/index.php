<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/style.css">

    <title>Valorant</title>
    <link rel="icon" href="/img/logo.jpg">
  </head>
  <body>
    <section>
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-">
 
  <a class="navbar-brand" href="https://playvalorant.com/">
      <img src="https://cdn.steamgriddb.com/logo/1b31a4f23c784d5b162a3066fa9aaf4f.png" width="150" height="30">
  </a>
 
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
 
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
 
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?= site_url('auth/admin') ?>">Admin</a>
        </li>
        <li class="nav-item active dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Contact
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="https://www.instagram.com/vindo_rizkiyanto/">Instagram</a>
            <a class="dropdown-item" href="https://api.whatsapp.com/send?phone=628997343803&text=AssalamuallaikumVindo%20%3A%0A">Whatsapp</a>
          </div>
        </li>
      </ul>
 
    <ul class="navbar-nav ml-auto">
        <?php if (session()->has('logged_in') and session()->get('logged_in') == true) : ?>
            <li class="nav-item active">
            <a class="nav-link" href="<?= site_url('auth/logout') ?>">Logout</a>
            </li>
        <?php else : ?>
            <li class="nav-item active">
            <a class="nav-link" href="<?= site_url('auth/login') ?>">Logout</a>
        </li>
        <?php endif; ?>
    </ul>
   </div>
</nav>


            <div class="text-container text-center">
              <h1 class="display-3">VALORANT</h1>
              <p class="lead">Riot Games’ competitive 5v5 character-based tactical shooter</p>
              <a href="https://auth.riotgames.com/login" class="btn btn-danger btn-lg" tabindex="-1" role="button" aria-disabled="true">Play Now</a>
            </div>
            
        
    </section>

    <!--Awal Sesi Konten-->
        <div class="about-container">
        <img src="/img/1.png"/>
	    <!--about-me-text-->
        <div class="about-text">
        <p>About Me</p>
        <p></p>
        <p>Hello,My name is Vindo Rizkiyanto. I am a student from the computer science department of Lampung University, I am in 2018 and now I am in semester 5. My hobby is playing games.</p>
        <a href="https://www.instagram.com/vindo_rizkiyanto/" class="btn btn-dark btn-sm" >Instagram</a>
		</div>
	</div>
        </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    
  </body>
</html>