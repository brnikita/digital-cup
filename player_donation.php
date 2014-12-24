<!DOCTYPE html>
<html>
<? include('blocks/head.php'); ?>
<body>
<div
    style="background: url('images/stuff/coach-donation.jpg'); width: 640px; height: 1136px; position: absolute; z-index: 100; top: -100px; left: 50%; margin-left: -320px; opacity: 0.5;display: none;"></div>
<div class="wrapper js-wrapper">
    <div class="content js-content">
        <? include('blocks/header.php'); ?>

        <main class="white-screen donation-page">
            <div class="ribbon">
                <h3>DONATE</h3>
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
                <form class="pink-form">
                    <div class="form-group">
                        <label for="donation">Player donation</label>
                        <input type="text" name="donation" id="donation" value="$10.00"/>
                    </div>
                    <button type="submit" class="button button-pink donation-page__donate">
                        DONATE AND CREATE TEAM
                        <span class="sprite icon icon-check-white"></span>
                    </button>
                </form>
                <div class="go-back donation-page__donate">
                    <a href="/"><span class="sprite icon icon-back"></span>Tap here to go back</a>
                </div>
            </section>
        </main>
    </div>
</div>
</body>
</html>