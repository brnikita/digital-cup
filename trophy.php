<!DOCTYPE html>
<html>
<?
$title = 'TROPHY CABINET';
include('blocks/head.php');
?>
<body>
<div class="content-bg bg-dressing-room js-content-bg"></div>
<div class="content bg-dressing-room js-content">
    <? include('blocks/dressing_room_header.php'); ?>

    <main class="trophy-page">
        <div class="trophy-page__content"></div>
        <div class="go-back">
            <a href="/create_profile.php"><span class="sprite icon icon-back"></span>Tap here to go back</a>
        </div>
    </main>

</div>
<? include('blocks/footer.php'); ?>
</body>
</html>