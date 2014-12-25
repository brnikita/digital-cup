<!DOCTYPE html>
<html>
<? include('blocks/head.php'); ?>
<body>
<div
    style="background: url('images/stuff/join-team.jpg'); width: 640px; height: 1136px; position: absolute; z-index: 100; top: -100px; left: 0; opacity: 0.5;display: none;"></div>
<div class="content js-content">
    <? include('blocks/header.php'); ?>

    <main class="white-screen join-team-page">
        <div class="ribbon">
            <div class="ribbon__content">JOIN A TEAM</div>
        </div>
        <section class="white-screen__content">
            <form class="pink-form">
                <div class="form-group">
                    <label for="code">Enter invitation code</label>
                    <input type="text" name="code" id="code"/>
                </div>
                <div class="form-group">
                    <label for="email">Search by email</label>
                    <input type="email" name="email" id="email"/>
                </div>
                <button type="submit" class="button button-black profile-page__upload-photo">SEARCH<span
                        class="sprite icon icon-magnifier"></span>
                </button>
            </form>
            <div class="join-team-page__or">
                or
            </div>
            <a href="/player_donation.php" class="button button-pink join-team-page__suggest">SUGGEST A TEAM <span
                    class="sprite icon icon-players"></span></a>

            <div class="go-back profile-page__go-back">
                <a href="/"><span class="sprite icon icon-back"></span>Tap here to go back</a>
            </div>
        </section>
    </main>
</div>
</body>
</html>