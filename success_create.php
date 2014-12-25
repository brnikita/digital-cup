<!DOCTYPE html>
<html>
<? include('blocks/head.php'); ?>
<body>
<div
    style="background: url('images/stuff/success_create.jpg'); width: 640px; height: 1136px; position: absolute; z-index: 100; top: -100px; left: 50%; margin-left: -320px; opacity: 0.5;display: none;"></div>
<div class="wrapper js-wrapper">
    <div class="content js-content">
        <? include('blocks/header.php'); ?>

        <main class="white-screen success-page">
            <div class="ribbon">
                <div class="ribbon__content">SUCCESS</div>
            </div>
            <section class="white-screen__content">
                <div class="success-page__well-done">
                    <span class="sprite icon icon-success"></span>

                    <h1>Well done!</h1>
                    <h4>YOU ARE NOW THE OWNER OF</h4>
                </div>
                <div class="ribbon big-ribbon">
                    <figure class="user-avatar clearfix">
                    <span>
                        <img src="images/avatars/coach.jpg" width="108" height="108" alt="Team photo">
                    </span>
                        <figcaption>
                            <h2>The Mad Batters</h2>

                            <h3>PRO-ACTIVE GAMES</h3>
                        </figcaption>
                    </figure>
                </div>
                <button type="submit" class="button button-pink success-page__invite">
                    INVITE PLAYERS
                    <span class="sprite icon icon-players"></span>
                </button>
                <button type="submit" class="button button-black success-page__team-management">
                    GO TO TEAM MANAGEMENT
                    <span class="sprite icon icon-go"></span>
                </button>
            </section>
        </main>
    </div>
</div>
</body>
</html>