<!DOCTYPE html>
<html>
<? include('blocks/head.php'); ?>
<body>
<div
    style="background: url('images/stuff/your-profile.jpg'); width: 640px; height: 1136px; position: absolute; z-index: 100; top: -100px; left: 0; opacity: 0.5;display: none;"></div>
<div class="content js-content">
    <? include('blocks/header.php'); ?>

    <main class="white-screen profile-page">
        <div class="ribbon">
            <div class="ribbon__content">YOUR PROFILE</div>
        </div>
        <section class="white-screen__content">
            <figure class="user-avatar">
                    <span>
                        <img src="images/avatars/coach.jpg" width="170" height="170" alt="Team photo">
                    </span>
                <figcaption>
                    <h2>Andrew Welstead</h2>

                    <h3>TEAM WELLY</h3>
                </figcaption>
            </figure>
            <a href="#" class="button button-black profile-page__dressing-room">
                BACK TO DRESSING ROOM
                <span class="sprite icon icon-go"></span>
            </a>
        </section>
    </main>
<!--    --><?// include('blocks/footer.php'); ?>
</div>
</body>
</html>