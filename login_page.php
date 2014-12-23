<!DOCTYPE html>
<html>
<? include('blocks/head.php'); ?>
<body>
<div style="background: url('images/stuff/digital-cup.jpg'); width: 640px; height: 1136px; position: absolute; z-index: 100; top: -74px; left: 50%; margin-left: -319px; opacity: 0.5;display: none;"></div>
<div class="content bg-start">
    <? include('blocks/header.php'); ?>

    <main class="white-screen">
        <section class="start-screen-welcome">
            <div class="ribbon">
                <h3>WELCOME TO THE GAME</h3>
            </div>
            <a href="#" class="sprite start-screen-welcome__previous"></a>
            <a href="#" class="sprite start-screen-welcome__next"></a>

            <p>Lorem ipsum dolor sit amet, <strong>consectetur</strong> adipiscing elit, phasellus maximus.</p>
        </section>
        <section class="start-screen-navigation">
            <a href="#" class="button button-big button-transparent">CREATE A TEAM</a>
            <h4>HAVE YOU BEEN INVITED TO JOIN A TEAM?</h4>

            <div class="clearfix start-screen-navigation__join">
                <a href="#" class="button button-big button-transparent">YES</a>
                <a href="#" class="button button-big button-transparent">NO</a>
            </div>
            <a href="#" class="button button-big button-transparent">EXISTING USER LOGIN</a>
            <a href="#" class="button button-big button-grey">ABOUT MCGRATH FOUNDATION</a>
        </section>
    </main>
</div>
</body>
</html>