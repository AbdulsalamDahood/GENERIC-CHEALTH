<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bulkit.cssninja.io/landing-v3-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Mar 2018 16:32:12 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Crypthealth | Forgot Password</title>
        <link rel="icon" type="image/png" href="<?php echo base_url();?>public/assets/images/favicon.png" />
        <!-- Core css -->
        <link rel="stylesheet" id="bulma" href="<?php echo base_url();?>public/assets/css/bulma.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/assets/css/core_lemonade.css">
        <!-- Icons -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/assets/css/icons.min.css">
        <!-- Google fonts -->
        <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Lato:300,400,700'>
    </head>

    <body>
        <!-- Pageloader -->
        <div class="pageloader"></div>
        <div class="infraloader is-active"></div>

        <!-- Wrapper -->
        <div class="login-wrapper columns is-gapless">

            <!-- Form section -->
            <div class="column is-7">
                <div class="hero is-fullheight">
                    <div class="hero-heading">
                        <!-- Logo -->
                        <div class="section has-text-centered">
                            <a href="<?php echo base_url();?>"><img class="top-logo" src="<?php echo base_url();?>public/assets/images/logos/bulkit-logo-lemonade.png" alt="Bulkit logo"></a>
                        </div>
                        <!-- Don't have an account yet -->
                        <div class="no-account-link has-text-centered">
                            <a>

                                <?php
                                    if (isset($message)) {
                                        echo $message;
                                    } else {
                                        echo "<i class=\"sl sl-icon-question pr-10\"></i>Enter E-mail To Send Reset Link";
                                    }

                                ?>


                        </a>
                        </div>
                    </div>
                    <div class="hero-body">
                        <div class="container">
                            <div class="columns">
                                <div class="column"></div>
                                <div class="column is-5">
                                    <!-- Forget Form Form -->



                                    <?php echo form_open("forgot-password");?>

                                        <div id="signin-form" class="login-form animated preFadeInLeft fadeInLeft">
                                            <!-- Input -->
                                            <div class="field pb-10">
                                                <div class="control">
                                                    <?php echo form_input($email);?>
                                                </div>
                                            </div>

                                            <!-- Submit -->
                                            <p class="control login">
                                                <button class="button button-cta primary-btn btn-align-lg btn-outlined is-bold is-fullwidth rounded raised no-lh">Send Reset Message</button>
                                            </p>
                                        </div>
                                    <?php echo form_close();?>
                                    <!-- </form> -->
                                    <!-- /Login Form -->


                                    <!-- Toggles -->
                                    <div id="recover" class="section forgot-password animated preFadeInLeft fadeInLeft">
                                        <p class="has-text-centered">
                                            <a href="<?php echo base_url();?>login">Go Back Login</a>
                                        </p>
                                    </div>

                                    <!-- /Toggles -->
                                </div>
                                <div class="column"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Form section -->

            <!-- Image section (hidden on mobile) -->
            <div class="column login-column is-5 is-hidden-mobile hero-banner">
                <div class="hero is-fullheight is-theme-primary is-relative">
                    <div class="columns has-text-centered">
                        <div class="column">
                            <h2 class="title is-2 light-text">
                                Start managing now
                            </h2>
                            <h3 class="subtitle is-5 light-text">
                                Stop struggling with common tasks and focus on the real choke points. Discover a full featured HR management platform.
                            </h3>
                            <!-- <div class="mt-30 has-text-centered">
                                <a href="landing-v3-signup.html" class="button button-cta btn-outlined is-bold light-btn rounded">Get started Free</a>
                            </div> -->
                        </div>
                    </div>
                    <img class="login-city" src="<?php echo base_url();?>public/assets/images/illustrations/drawings/city.svg" alt="">
                </div>
            </div>
            <!-- /Image section -->
        </div>
        <!-- /Wrapper -->


        <!-- Core js -->
        <script src="<?php echo base_url();?>public/assets/js/core/jquery.min.js"></script>
        <script src="<?php echo base_url();?>public/assets/js/core/modernizr.min.js"></script>
        <!-- Bulkit js -->
        <script src="<?php echo base_url();?>public/assets/js/main.js"></script>
        <!-- Page specific js -->
        <script src="<?php echo base_url();?>public/assets/js/pages/auth.js"></script>

    </body>

<!-- Mirrored from bulkit.cssninja.io/landing-v3-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Mar 2018 16:32:12 GMT -->
</html>
