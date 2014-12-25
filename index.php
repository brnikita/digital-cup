<!DOCTYPE html>
<html>
<? include('blocks/head.php'); ?>
<body>
<div
    style="background: url('images/stuff/digital-cup.jpg'); width: 640px; height: 1136px; position: absolute; z-index: 100; top: -74px; left: 50%; margin-left: -319px; opacity: 0.5;display: none;"></div>
    <div class="content bg-start js-content">
        <header class="start-screen-header clearfix">
            <a href="/" class="start-screen-header__logo sprite icon icon-big-logo"></a>

            <div class="start-screen-header__title">
                <h2>McGrath Foundation</h2>

                <h1>Digital Cup</h1>
            </div>
        </header>
        <main class="start-screen-content">
            <section class="start-screen-welcome">
                <div class="ribbon">
                    <div class="ribbon__content">WELCOME TO THE GAME</div>
                </div>
                <a href="#" class="sprite icon icon-previous start-screen-welcome__previous"></a>
                <a href="#" class="sprite icon icon-next start-screen-welcome__next"></a>

                <p>Lorem ipsum dolor sit amet, <strong>consectetur</strong> adipiscing elit, phasellus maximus.</p>
            </section>
            <section class="start-screen-navigation">
                <a href="/create_team.php" class="button button-big button-transparent">CREATE A TEAM</a>
                <h4>HAVE YOU BEEN INVITED TO JOIN A TEAM?</h4>

                <div class="clearfix start-screen-navigation__join">
                    <a href="/create_profile.php" class="button button-big button-transparent">YES</a>
                    <a href="#" class="button button-big button-transparent">NO</a>
                </div>
                <a href="/login.php" class="button button-big button-transparent">EXISTING USER LOGIN</a>
                <a href="#" class="button button-big button-grey">ABOUT MCGRATH FOUNDATION</a>
            </section>
        </main>
        <footer class="start-screen-footer">
            <a href="#">VIEW SCOREBOARD</a>
        </footer>
    </div>
</body>
</html>