<!DOCTYPE html>
<html>
<? include('blocks/head.php'); ?>
<body>
<div
    style="background: url('images/stuff/create_team.jpg'); width: 640px; height: 1136px; position: absolute; z-index: 100; top: -100px; left: 50%; margin-left: -320px; opacity: 0.5;display: none;"></div>
<div class="wrapper js-wrapper">
    <div class="content js-content">
        <? include('blocks/header.php'); ?>

        <main class="white-screen create-team-page">
            <div class="ribbon">
                <h3>CREATE A TEAM</h3>
            </div>
            <section class="white-screen__content">
                <form class="pink-form">
                    <div class="form-group">
                        <label>Team Type (select one)</label>

                        <div class="radio-group">
                            <input type="radio" name="team_type" value="individual" id="individual" checked="checked"/>
                            <label for="individual">Individual</label>
                            <input type="radio" name="team_type" value="corporate" id="corporate"/>
                            <label for="corporate">Corporate</label>
                        </div>
                    </div>
                    <div class="form-groups-inline clearfix">
                        <div class="form-group create-team-page__field-title">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title"/>
                        </div>
                        <div class="form-group create-team-page__field-first-name">
                            <label for="first_name">First Name</label>
                            <input type="text" name="first_name" id="first_name"/>
                        </div>
                        <div class="form-group create-team-page__field-last-name">
                            <label for="last_name">Last Name</label>
                            <input type="text" name="last_name" id="last_name"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email"/>
                    </div>
                    <div class="form-group">
                        <label for="text">Team Name</label>
                        <input type="text" name="team_name" id="team_name"/>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password"/>
                    </div>
                    <div class="form-group">
                        <label for="password">Confirm Password</label>
                        <input type="password" name="confirm_password" id="confirm_password"/>
                    </div>
                    <button type="submit" class="button button-pink create-team-page__upload-photo">UPLOAD TEAM PHOTO<span
                            class="sprite icon icon-photo"></span>
                    </button>
                </form>
                <a href="/coach_donation.php" class="button button-black create-team-page__make-donation">MAKE A DONATION TO CREATE TEAM <span
                        class="sprite icon icon-go"></span></a>

                <div class="go-back create-team-page__go-back">
                    <a href="/"><span class="sprite icon icon-back"></span>Tap here to go back</a>
                </div>
            </section>
        </main>
    </div>
</div>
</body>
</html>