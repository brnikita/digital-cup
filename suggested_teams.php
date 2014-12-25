<!DOCTYPE html>
<html>
<? include('blocks/head.php'); ?>
<body>
<div
    style="background: url('images/stuff/suggested_teams.jpg'); width: 640px; height: 1136px; position: absolute; z-index: 100; top: -100px; left: 0; opacity: 0.5;display: none;"></div>
<div class="content js-content">
    <? include('blocks/header.php'); ?>

    <main class="white-screen suggested-teams-page">
        <div class="ribbon">
            <div class="ribbon__content">SUGGESTED TEAMS</div>
        </div>
        <section class="white-screen__content">
            <figure class="user-avatar clearfix">
                    <span>
                        <img src="images/avatars/coach.jpg" width="108" height="108" alt="Team photo">
                    </span>
                <figcaption>
                    <h2>The Mad Batters</h2>

                    <h3>PRO-ACTIVE GAMES</h3>
                </figcaption>
            </figure>
            <figure class="user-avatar clearfix">
                    <span>
                        <img src="images/avatars/coach.jpg" width="108" height="108" alt="Team photo">
                    </span>
                <figcaption>
                    <h2>Team Welly</h2>

                    <h3>FLIP CREATIVE</h3>
                </figcaption>
            </figure>
            <figure class="user-avatar clearfix">
                    <span>
                        <img src="images/avatars/coach.jpg" width="108" height="108" alt="Team photo">
                    </span>
                <figcaption>
                    <h2>Team Rob</h2>

                    <h3>PRO-ACTIVE GAMES</h3>
                </figcaption>
            </figure>

            <a href="/join_team.php" type="submit" class="button button-black suggested-teams-page__more">SUGGEST MORE TEAMS<span
                    class="sprite icon icon-magnifier"></span>
            </a>

            <div class="go-back">
                <a href="/join_team.php"><span class="sprite icon icon-back"></span>Tap here to go back</a>
            </div>
        </section>
    </main>
</div>
</body>
</html>