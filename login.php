<!DOCTYPE html>
<html>
<? include('blocks/head.php'); ?>
<body>
<div
    style="background: url('images/stuff/login.jpg'); width: 640px; height: 1136px; position: absolute; z-index: 100; top: -100px; left: 50%; margin-left: -320px; opacity: 0.5;display: none;"></div>
<div class="wrapper js-wrapper">
    <div class="content js-content">
        <? include('blocks/header.php'); ?>

        <main class="white-screen login-page">
            <div class="ribbon">
                <h3>LOGIN</h3>
            </div>
            <section class="white-screen__content">
                <form class="pink-form">
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email"/>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password"/>
                    </div>
                    <button type="submit" class="button button-black">LOGIN <span class="sprite icon icon-check"></span>
                    </button>
                </form>
                <a href="#" class="button button-blue">
                    LOGIN VIA FACEBOOK
                    <span class="sprite icon icon-facebook"></span>
                </a>

                <div class="forgot-password">
                    <a href="#">Forgot your password?</a>
                </div>
                <div class="go-back">
                    <a href="/"><span class="sprite icon icon-back"></span>Tap here to go back</a>
                </div>
            </section>
        </main>
    </div>
</div>
</body>
</html>