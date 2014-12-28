<!DOCTYPE html>
<html>
<?
$title = 'STUMP UP PAYMENT';
include('blocks/head.php');
?>
<body>
<div
    style="background: url('images/stuff/payments.jpg'); width: 640px; height: 1136px; position: absolute; z-index: 100; top: -100px; left: 0; opacity: 0.5;display: none;"></div>
<div class="content bg-dressing-room js-content">
    <? include('blocks/dressing_room_header.php'); ?>

    <main class="payments-page">
        <section class="payments-page__profile clearfix">
            <div class="payments-page__profile__content clearfix">
                <div class="payments-page__profile__avatar">
                <span class="profile-avatar-mini">
                    <img src="images/avatars/coach.jpg" width="59" height="59" alt="User's avatar">
                </span>
                </div>
                <div class="payments-page__profile__title">
                    <h2>Andrew Welstead</h2>

                    <h3>$250 TOTAL DONATIONS</h3>
                </div>
            </div>
        </section>
        <section class="payments-page__payments">
            <ul>
                <li class="payments-page__payments__item clearfix payments-page__payments__item-extra">
                    <div class="payments-page__payments__item__title">
                        <h2>$5.00</h2>
                        <h5>1 extra over in Bat</h5>
                    </div>
                    <a href="#" class="payments-page__payments__item__go">
                        <span class="sprite icon icon-white-next"></span>
                    </a>
                </li>
                <li class="payments-page__payments__item clearfix payments-page__payments__item-extra-all">
                    <div class="payments-page__payments__item__title">
                        <h2>$10.00</h2>
                        <h5>1 extra over for all games</h5>
                    </div>
                    <a href="#" class="payments-page__payments__item__go">
                        <span class="sprite icon icon-white-next"></span>
                    </a>
                </li>
                <li class="payments-page__payments__item clearfix payments-page__payments__item-extra-all-double">
                    <div class="payments-page__payments__item__title">
                        <h2>$25.00</h2>
                        <h5>1 extra over for all games<br/>
                            & double points</h5>
                    </div>
                    <a href="#" class="payments-page__payments__item__go">
                        <span class="sprite icon icon-white-next"></span>
                    </a>
                </li>
            </ul>
        </section>
        <section class="payments-page__footer">
            <div class="go-back">
                <a href="/create_profile.php"><span class="sprite icon icon-back"></span>Tap here to go back</a>
            </div>
            <a class="button button-pink" href="#">ASK YOUR FANS FOR SUPPORT <span class="sprite icon icon-mail"></span></a>
        </section>
    </main>

    <? include('blocks/footer.php'); ?>
</div>
</body>
</html>