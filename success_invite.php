<!DOCTYPE html>
<html>
<?
$title = 'SUCCESS';
include('blocks/head.php');
?>
<body>
<div
    style="background: url('images/stuff/success_invite.jpg'); width: 640px; height: 1136px; position: absolute; z-index: 100; top: -100px; left: 0; opacity: 0.5;display: none;"></div>
<div class="content js-content">
    <? include('blocks/header.php'); ?>

    <main class="white-screen success-page">
        <div class="ribbon">
            <div class="ribbon__content"><? echo $title; ?></div>
        </div>
        <section class="white-screen__content">
            <div class="success-page__well-done">
                <span class="sprite icon icon-success"></span>

                <h1>Well done!</h1>
                <h4>YOU HAVE SUCCESSFULLY<br/>
                    INVITED A PLAYER.</h4>
            </div>
            <a href="/invite.php" class="button button-pink success-page__invite-another">
                INVITE ANOTHER PLAYER
                <span class="sprite icon icon-players"></span>
            </a>
            <a href="#" class="button button-black success-page__go-team-management">
                GO TO TEAM MANAGEMENT
                <span class="sprite icon icon-go"></span>
            </a>
        </section>
    </main>
</div>
</body>
</html>