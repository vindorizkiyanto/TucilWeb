<link rel="stylesheet" href="/css/skye.css">
<section>
    <div class="db">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">

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
    </div>
</section>

<section>
    <div class="skye text-center">
        <h1>21/11/2020 . ANNOUNCEMENTS</h1>
        <p></p>
        <h2 class="display-3">COMMUNITY SPOTLIGHT: MEET SKYE</h2>
        <h3>You can play Skye, our newest Agent, right now. But if you want to get ahead of the competition we’ve got a collection of intros and tips created by a handful of the best and brightest from the VALORANT community all over.
            These should help you get a handle on how to play Skye and begin to master her abilities. Let’s get started.</h3>
    </div>
</section>