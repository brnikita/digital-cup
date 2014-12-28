<!DOCTYPE html>
<html>
<?
$title = 'TROPHY CABINET';
include('blocks/head.php');
?>
<body>
<div
    style="background: url('images/stuff/trophy.jpg'); width: 640px; height: 1136px; position: absolute; z-index: 100; top: -100px; left: 0; opacity: 0.5;display: none;"></div>
<div class="content bg-dressing-room js-content">
    <? include('blocks/dressing_room_header.php'); ?>

    <main class="trophy-page">
        <div class="trophy-page__content"></div>
        <div class="go-back">
            <a href="/create_profile.php"><span class="sprite icon icon-back"></span>Tap here to go back</a>
        </div>
    </main>

    <? include('blocks/footer.php'); ?>
</div>
</body>
</html>