<link rel="stylesheet" href="/css/askvalorant.css">
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

<hr>
<div class="patch text-center">
    <h1>21/11/2020 . DEV</h1>
    <p></p>
    <h2 class="display-3">ASK VALORANT #10</h2>
    <p style="text-align:center"><strong>Q</strong></p>
    <p style="text-align:center"><strong>Smurfing is inevitable in ranked games, but I’m curious what you’re doing to discourage smurfs in VALORANT?</strong></p>
    <p style="text-align:center"><strong>A</strong></p>
    <p><em>Smurfing always sucks, especially when you have rank on the line. While it’s hard to stop smurfing entirely in a free-to-play game, we are taking action to combat it. Right now we have a behind-the-scenes system for Unrated as well as one that applies to Iron through Diamond ranked players. The latter tracks an individual’s performance and notices when a player makes a highly disproportionate impact in a game. We then quickly boost them to harder matches and higher ranks in Competitive. </em></p>
    <p><em>We stop leveraging this system for Immortal+ players because there isn&#x27;t a ton of room to smurf or play down when you are already near the top ranks. Longer term, we’re also looking at ways to further accelerate placing smurfs into appropriately skilled matches. But right now we are prioritizing some improvements to our core rank system and leaderboards ahead of that.</em></p>
    <p>—Ian Fielding, Senior Producer</p>
    <p style="text-align:center"><strong>Q</strong></p>
    <p style="text-align:center"><strong>Is VALORANT going to get a test server, like League has PBE?</strong></p>
    <p style="text-align:center"><strong>A</strong></p>
    <p><em>Yes! We will be creating a selectively updated pre-release environment, or PBE, some time in the first half of 2021. Specific features/queues will be advertised or limited and patches will be targeted for a certain length of time in advance of going live. </em></p>
    <p><em>For those that are familiar with the League of Legends PBE, this will serve a similar purpose. We hope to expand on what we have learned and provide an early access experience that does not drastically differ from the live version of VALORANT, but still allows for a glimpse into what we are working on. This will also help us to gather more information so we can capture performance changes and expose bugs early that players might run into.</em></p>
    <p>—Corrie Hardin, Senior Release Manager</p><br />
</div>
<hr>
</hr>
<div class="text container text-center">
    <div class="col-12">
        <p>Missed an Ask VALORANT? Catch up on the previous posts below.</p>
        <a class="btn btn-dark" href="https://playvalorant.com/en-us/news/tags/ask-valorant/" role="button" text-align="center">ASK VALORANT</a>
    </div>
</div>
</section>