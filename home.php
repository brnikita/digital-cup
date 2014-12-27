<!DOCTYPE html>
<html>
<?
$title = 'dressing room';
include('blocks/head.php');
?>
<body>
<div
    style="background: url('images/stuff/home.jpg'); width: 640px; height: 1136px; position: absolute; z-index: 100; top: -100px; left: 0; opacity: 0.5;display: none;"></div>
<div class="content bg-dressing-room js-content">
    <? include('blocks/dressing_room_header.php'); ?>

    <main>
        <section class="donations-level">
            <div class="donations-level__content">
                <h5>YOUR DONATIONS</h5>

                <div class="donations-level__progress">
                    <div class="donations-level__progress__filler" style="width: 109px;">
                        <div class="donations-level__progress__filler__color"></div>
                        <div class="donations-level__progress__filler__point"></div>
                        <div class="donations-level__progress__filler__amount">$17</div>
                    </div>
                </div>
                <div class="donations-level__start">$0</div>
            </div>
        </section>
        <ul class="play-levels">
            <li class="clearfix">
                <div class="sprite icon icon-big-batting play-levels__icon"></div>
                <div class="play-levels__points">
                    <h3>PLAY BATTING</h3>

                    <div>
                        <ul class="play-levels-points">
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                        <span class="sprite icon icon-attention"></span>
                    </div>
                </div>
                <a href="#" class="play-levels__continue">
                    <span class="sprite icon icon-white-next"></span>
                    <em>
                        STUMP UP<br/>
                        TO PLAY<br/>
                        AGAIN
                    </em>
                </a>
            </li>
        </ul>
        <a href="#">TEAM MANAGEMENT <span class="sprite icon icon-list"></span></a>
        <a href="#">VIEW MESSAGES
            <span class="sprite icon icon-message">
                <span class="">5</span>
            </span>
        </a>
    </main>

    <? include('blocks/footer.php'); ?>
</div>
</body>
</html>