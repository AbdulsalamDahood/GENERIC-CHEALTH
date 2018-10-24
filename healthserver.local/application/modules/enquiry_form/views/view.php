<!DOCTYPE html>
<!-- saved from url=(0033)http://www.crypthealthlekkicentre.com/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="keywords" content="crypthealth, I.T, I T, Education, Programming, Web Design, App Development, DISM, CPISM, ADSE, C, C++, C#, Arena,Graphics Design, MS Office Suite, Ethical Hacking, Java I and II, Animation, Networking, PHP, MySQL, ASP.NET, Oracle DB, Computer Programming, Computer Science, Study abroad, top up school, Android App Development, Website Development, Web Application">
    <meta name="description" content="crypthealth Lekki Centre is a franchise of crypthealth Computer Education, headquartered in Mumbai, India. We equip you with IT Skills in Software/Web Development, Networking and Multimedia.">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0" name="viewport">
	<title>Welcome to Crypthealth</title>

    <!-- icons -->
    <link href="<?php echo base_url();?>public/assets/fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>public/assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url();?>public/assets/fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />

	<!-- bootstrap css library-->
    <link href="<?php echo base_url();?>public/assets/enquiry_form/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>public/assets/enquiry_form/style.css" rel="stylesheet">

    <!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>public/assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>public/assets/css/material_style.css">

    <!-- Theme Styles -->
    <link href="<?php echo base_url();?>public/assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
    <link href="<?php echo base_url();?>public/assets/css/theme/light/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>public/assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>public/assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url();?>public/assets/css/theme/light/theme-color.css" rel="stylesheet" type="text/css" />

     <!-- Date Time item CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/assets/plugins/material-datetimepicker/bootstrap-material-datetimepicker.css" />

	<!-- favicon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>public/assets/images/favicon.png" />



 <!-- Begin MailChimp Signup Form -->
<link href="<?php echo base_url();?>public/assets/enquiry_form/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#000; clear:left; font:1.2em "Lucida Console", Monaco, monospace; width:100%;}
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>

  </head>
  <body data-spy="scroll" data-target=".navbar-collapse" data-offset="90">
<header id="myScrollspy"><!-- header --><nav class="navbar navbar-inverse navbar-fixed-top"><!-- navigation bar -->
<div class="container"><!-- container-->
<div class="navbar-header">
<!-- toggle button -->
<button class="navbar-toggle" style="background-color: #000;" type="button" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle Navigation</span> </button> <a class="navbar-brand" href="http://www.crypthealthlekkicentre.com/index.html"><img src="<?php echo base_url();?>public/assets/enquiry_form/crypthealth.png" alt="" width="180px" height="50px"></a></div>
<div class="collapse navbar-collapse navbar-right">
<ul class="nav navbar-nav">
<li class=""><a href="http://www.crypthealthlekkicentre.com/#myScrollspy">Home</a></li>
<li class="active"><a href="http://www.crypthealthlekkicentre.com/#why-crypthealth">Why crypthealth</a></li>
<li class=""><a href="http://www.crypthealthlekkicentre.com/#testimonials">Testimonials</a></li>
<li class=""><a href="http://www.crypthealthlekkicentre.com/#gallery">Gallery</a></li>
<li class=""><a href="http://www.crypthealthlekkicentre.com/#courses">Courses</a></li>
<li class=""><a href="http://www.crypthealthlekkicentre.com/#about">Contact Us</a></li>
<li><a class="on" href="http://www.onlinevarsity.com/" target="_blank">ONLINE<strong class="var">VARSITY</strong></a></li>
</ul>
</div>
</div>
<!-- /container --></nav><!-- /navigation bar--></header><!-- / header-->





<div class="container" style="margin-top:100px;" >

<div class="row">
    <?php echo form_open_multipart(uri_string());?>
        <div class="col-sm-12">
            <div class="card-box">


                <div class="card-head">
                    <header>Enquiry Form</header>
                    <div class="pull-right"><?php
                        if(isset($form_status)){echo $form_status;} ?></div>
                </div>


                <div class="card-body row">


                    <div class="col-lg-6 p-t-20">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                        <input class="mdl-textfield__input" name="title" type="text" id="title" required readonly tabIndex="-1">
                        <label for="title" class="pull-right margin-0">
                            <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                        </label>
                        <label for="title" class="mdl-textfield__label">Title (Mr. / Miss / Mrs) </label>
                        <ul data-mdl-for="title" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                            <li class="mdl-menu__item" data-val="DE">Mr.</li>
                            <li class="mdl-menu__item" data-val="BY">Miss</li>
                            <li class="mdl-menu__item" data-val="BY">Mrs</li>
                        </ul>
                    </div>
                    </div>

                    <div class="col-lg-6 p-t-20">
                    <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class = "mdl-textfield__input" name="name" type = "text" id = "txtFirstName">
                        <label class = "mdl-textfield__label">Name ( Firstname Middlename Lastname ) </label>
                    </div>
                    </div>

                    <div class="pull-left col-lg-6 p-t-20">
                    <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class = "mdl-textfield__input" name="email" type = "email" id = "txtemail">
                        <label class = "mdl-textfield__label" >Email</label>
                        <span class = "mdl-textfield__error">Enter Valid Email Address!</span>
                    </div>
                    </div>

                    <div class="col-lg-6 p-t-20">
                    <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class = "mdl-textfield__input" name="phone" type = "text" id = "txtRollNo">
                        <label class = "mdl-textfield__label" >Mobile No.</label>
                    </div>
                    </div>

                    <div class="col-lg-6 p-t-20">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                            <input class="mdl-textfield__input" name="gender" type="text" id="sample2" value="" readonly tabIndex="-1">
                            <label for="sample2" class="pull-right margin-0">
                                <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                            </label>
                            <label for="sample2" class="mdl-textfield__label">Gender</label>
                            <ul data-mdl-for="sample2" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                <li class="mdl-menu__item" data-val="DE">Male</li>
                                <li class="mdl-menu__item" data-val="BY">Female</li>
                            </ul>
                        </div>
                    </div>


                    <div class="col-lg-6 p-t-20">
                    <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class = "mdl-textfield__input" value="" name="dob" type = "text" id = "dateOfBirth">
                        <label class = "mdl-textfield__label" >Date Of Birth</label>
                    </div>
                    </div>



                    <div class="col-lg-6 p-t-20">
                    <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class = "mdl-textfield__input" name="p_name" type = "text" id = "txtRollNo">
                        <label class = "mdl-textfield__label" >Parent / Gaurdian Name</label>
                    </div>
                    </div>

                    <div class="col-lg-6 p-t-20">
                    <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class = "mdl-textfield__input" name="p_phone" type = "text" id = "txtRollNo">
                        <label class = "mdl-textfield__label" >Parent / Gaurdian Mobile No.</label>
                    </div>
                    </div>





                    <div class="col-lg-12 p-t-20">
                    <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <textarea class = "mdl-textfield__input" name="address" row="4"
                            id = "text7" ></textarea>
                        <label class = "mdl-textfield__label" for = "text7">Address / Location</label>
                    </div>
                    </div>



                    <div class="col-lg-6 p-t-20">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                            <input class="mdl-textfield__input" name="education_qualification" type="text" id="course" value="" tabIndex="-1">
                            <label for="course" class="pull-right margin-0">
                                <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                            </label>
                            <label for="course" class="mdl-textfield__label">Qualification (If Others Type It) </label>
                            <ul data-mdl-for="course" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                               <li class="mdl-menu__item" data-val="DE">GRADUATED</li>
                                <li class="mdl-menu__item" data-val="BY">UNGRADUATED</li>
                                <li class="mdl-menu__item" data-val="BY">SECONDARY</li>
                                <li class="mdl-menu__item" data-val="BY">HIGH SCHOOL</li>
                                <li class="mdl-menu__item" data-val="OT">VOCATIONAL STUDIES</li>
                            </ul>

                        </div>
                    </div>




                    <div class="col-lg-6 p-t-20">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                            <input class="mdl-textfield__input" name="career_field" type="text" id="paytype" value="" tabIndex="-1">

                            <label for="paytype" class="mdl-textfield__label">Career field</label>
                        </div>
                    </div>

                     <div class="col-lg-6 p-t-20">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                            <input class="mdl-textfield__input" name="future_plan" type="text" id="paytype" value="" tabIndex="-1">

                            <label for="paytype" class="mdl-textfield__label">Future Plan</label>
                        </div>
                    </div>

                    <div class="col-lg-12 p-t-20 text-center">
                        <button class="btn btn-pink">submit</button>
                    </div>
                </div>

            </div>
        </div>
    <?php echo form_close();?>
</div>
</div>




















</footer>
<script src="<?php echo base_url();?>public/assets/enquiry_form/jquery-2.1.1.min.js.download"></script>
<script src="<?php echo base_url();?>public/assets/enquiry_form/bootstrap.min.js.download"></script>

<!-- Material -->
    <script src="<?php echo base_url();?>public/assets/plugins/material/material.min.js"></script>
    <script src="<?php echo base_url();?>public/assets/js/pages/material-select/getmdl-select.js" ></script>
    <script  src="<?php echo base_url();?>public/assets/plugins/material-datetimepicker/moment-with-locales.min.js"></script>
	<script  src="<?php echo base_url();?>public/assets/plugins/material-datetimepicker/bootstrap-material-datetimepicker.js"></script>
	<script  src="<?php echo base_url();?>public/assets/plugins/material-datetimepicker/datetimepicker.js"></script>
