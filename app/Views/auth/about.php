<link rel="stylesheet" type="text/css" href="/css/about.css">
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
                    <a class="nav-link" href="<?= site_url('auth/index') ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= site_url('auth/admin') ?>">Admin</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= site_url('auth/about') ?>">About <span class="sr-only">(current)</span></a>
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
        <h1 class="display-3">ABOUT ME</h1>
        <p class="lead">Computer Science University Of Lampung</p>
        <a href="https://playvalorant.com/en-us/" class="btn btn-danger btn-lg" tabindex="-1" role="button" aria-disabled="true">Play Now</a>
    </div>

</section>

<div class="about" id="about">
    <div class="about-container">
        <img src="/img/profil.jpg" />
        <!--about-me-text-->
        <div class="about-text">
            <p></p>
            <p></p>
            <p>Vindo Rizkiyanto
                <br>
                1817051059
                <br>
                Kelas B
                <br>
                S1 Ilmu Komputer 2018
            </p>
            <a href="https://www.instagram.com/vindo_rizkiyanto/" class="btn btn-dark btn-sm">Instagram</a>
            <a href="https://api.whatsapp.com/send?phone=628997343803&text=AssalamuallaikumVindo%20%3A%0A" class="btn btn-dark btn-sm">Whatsapp</a>
        </div>
    </div>
</div>