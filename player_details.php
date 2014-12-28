<!DOCTYPE html>
<html>
<?
$title = 'TEAM MANAGEMENT';
include('blocks/head.php');
?>
<body>
<div
    style="background: url('images/stuff/player-details.jpg'); width: 640px; height: 1136px; position: absolute; z-index: 100; top: -100px; left: 0; opacity: 0.5;display: none;"></div>
<div class="content bg-dressing-room js-content">
    <? include('blocks/dressing_room_header.php'); ?>

    <main class="player-details-page">
        <div class="profile-mini-signs clearfix">
            <div class="profile-mini-signs__avatar">
                        <span class="avatar-mini">
                            <img src="images/avatars/coach.jpg" width="59" height="59" alt="User's avatar">
                        </span>
            </div>
            <div class="profile-mini-signs__sign">
                <span class="sprite icon icon-mini-batting"></span>
            </div>
            <div class="profile-mini-signs__title">
                <h2>Andrew Welstead</h2>

                <h3>Total donations:
                    <span>$250</span>
                </h3>
            </div>
            <div class="profile-mini-signs__bonus">
                <div class="profile-mini-signs__bonus__sign">
                    <span class="sprite icon icon-crown"></span>
                </div>
                <div class="profile-mini-signs__bonus__title">SET AS<br />CAPTAIN</div>
            </div>
        </div>
        <a href="/success_create.php" class="button button-pink">
            CURRENTLY BATTING
            <span class="sprite icon icon-reload"></span>
        </a>

        <a href="/suggested_teams.php" type="submit" class="button button-white">
            MESSAGE PLAYER<span class="sprite icon icon-small-message"></span>
        </a>

        <div class="go-back">
            <a href="/create_profile.php"><span class="sprite icon icon-back"></span>Tap here to go back</a>
        </div>
    </main>

    <? include('blocks/footer.php'); ?>
</div>
</body>
</html>