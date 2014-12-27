<!DOCTYPE html>
<html>
<? include('blocks/head.php'); ?>
<body>
<div
    style="background: url('images/stuff/sidebar.jpg'); width: 640px; height: 1136px; position: absolute; z-index: 100; top: -100px; left: 0; opacity: 0.5;display: none;"></div>
<div
    style="background: url('images/stuff/footer.jpg'); width: 640px; height: 1136px; position: absolute; z-index: 100; top: -117px; left: 0; opacity: 0.5;display: none;"></div>
<div class="content js-content">
    <? include('blocks/header.php'); ?>
    <? include('blocks/sidebar.php'); ?>
    <? include('blocks/footer.php'); ?>
</div>
</body>
</html>