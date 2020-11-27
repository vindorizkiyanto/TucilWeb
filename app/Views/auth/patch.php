<link rel="stylesheet" href="/css/patch.css">
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
    <div class="patch text-center">
        <h1>21/11/2020 . GAME UPDATES</h1>
        <p></p>
        <h2 class="display-3">VALORANT PATCH NOTES 1.11</h2>
        <h3>
            <p class="center">[UPDATE: Patch 1.11 is currently on hold for all regions until further notice.
                VALORANT will roll back to Patch 1.10 until we can redeploy later in the week with a solution, and at a less disruptive time for the VALORANT First Strike Qualifiers.
                If you started the Skye character contract, you won't be able to progress until we patch again.Thanks for sticking with us.]</p>
            <p class="center">Skye enters VALORANT and will be available to play in all queues.(Recently, one of you asked, “how can she be ‘Skye’ if she’s on the ground?” Well, just repeat to yourself, “it’s just a game, I should really just relax.”)
                All of our Sentinels and Initiators are getting role and abilities-specific tuning, with the start of First Strike in mind.
                Read the deeper dive below for our thinking here. Updates to our match economy ruleset (the way credits are distributed after a round) should alter decision-making when the round or your loadout is on the line.
                Did anyone even want this? Anyway, here's the Left-hand view model.</p>
        </h3>
    </div>
</section>

<section>
    <div class="img text-center">
        <h4>21/11/2020 . GAME HIGHLIGHT</h4>
        <h5>HIGHLIGHT</h5>
    </div>
</section>