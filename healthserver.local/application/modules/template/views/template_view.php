<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<!-- Mirrored from radixtouch.in/templates/admin/smart/source/light/all_students.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Jun 2018 21:34:51 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="PrimeInnovation" />
    <title>Admin | <?php echo $title;?></title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
    <link href="<?php echo base_url();?>public/assets/fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>public/assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url();?>public/assets/fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
	<!--bootstrap -->
    <link href="<?php echo base_url();?>public/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>public/assets/plugins/summernote/summernote.css" rel="stylesheet">
    <!-- inbox style -->
    <link href="<?php echo base_url();?>public/assets/css/pages/inbox.min.css" rel="stylesheet" type="text/css" />
    <!-- data tables -->
    <link href="<?php echo base_url();?>public/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>public/assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>public/assets/css/material_style.css">
	<!-- Theme Styles -->
    <link href="<?php echo base_url();?>public/assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
    <link href="<?php echo base_url();?>public/assets/css/theme/light/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>public/assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>public/assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url();?>public/assets/css/theme/light/theme-color.css" rel="stylesheet" type="text/css" />

    <!-- dropzone -->
    <link href="<?php echo base_url();?>public/assets/plugins/dropzone/dropzone.css" rel="stylesheet" media="screen">
   <!-- Date Time item CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/assets/plugins/material-datetimepicker/bootstrap-material-datetimepicker.css" />

	<!-- favicon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>public/assets/images/favicon.png" /> 


    <style>
        .noticon{
            margin: 0;
            padding: 16px 10px 9px 0;
            display: block;
            position: relative;
            padding-right: 0;
        }

		.removeblue:after{
			background-color : #eef1f5;
		}
    </style>

</head>
<!-- END HEAD -->
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md <?php echo $template_theme->header." ".$template_theme->logo." ".$template_theme->side;?>">
    <div class="page-wrapper">
        <!-- start header -->
		<div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <!-- logo start -->
                <div class="page-logo">
                    <a href="<?php echo base_url();?>dashboard">
                    <span class="logo-icon material-icons fa-rotate-45">school</span>
                    <span class="logo-default" >Aptech </span> </a>
                </div>
                <!-- logo end -->
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
				</ul>
                 <!-- <form class="search-form-opened" action="#" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search..." name="query">
                        <span class="input-group-btn">
                          <a href="javascript:;" class="btn submit">
                             <i class="icon-magnifier"></i>
                           </a>
                        </span>
                    </div>
                </form> -->
                <!-- start mobile menu -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span></span>
                </a>
			   <!-- end mobile menu -->
			   
                <!-- start header menu -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                    	<li><a href="javascript:;" data-fullmode="true" class="fullscreen-btn"><i class="fa fa-arrows-alt"></i></a></li>
						





						<?php if( isset($student_birthday) && count($student_birthday) > 0):?>

						<!-- start notification dropdown -->
                        <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="fa fa-birthday-cake"></i>
                                <span class="badge headerBadgeColor1"> <?=count($student_birthday);?> </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="external">
                                    <h3><span class="bold">Birthdays</span></h3>
                                    <span class="notification-label purple-bgcolor"><?=count($student_birthday);?></span>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
										<?php foreach ($student_birthday as $key):?>
                                        <li>
                                            <a href="javascript:;">
                                                <!-- <span class="time">just now</span> -->
                                                <span class="details">
                                                <span class="notification-icon circle deepPink-bgcolor"><i class="fa fa-birthday-cake"></i></span> <span class="bold"><?=$key["name"];?></span></span>
                                            </a>
										</li>
										<?php endforeach;?>
                                        
                                        
                                    </ul>
                                    <div class="dropdown-menu-footer">
                                        <a href="javascript:void(0)"> All notifications </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- end notification dropdown -->
						<?php endif;?>











                        <!-- start message dropdown -->
 						<li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                            <a href="<?php echo base_url();?>enquiry" class="dropdown-toggle">
                                <i class="fa fa-envelope-o"></i>
								<?php if(isset($unread_enquiries)):?>
									<span class="badge headerBadgeColor2" style="margin-right:-5px;" > <?=$unread_enquiries;?> </span>
								<?php endif;?>
                                
                            </a>
                        </li>
                        <!-- end message dropdown -->
 						<!-- start manage user dropdown -->
 						<li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img style="width:29px;height:29px;" alt="" class="img-circle " src="<?php echo base_url();?>public/uploads/<?=ucfirst($user->img);?>" />
                                <span class="username username-hide-on-mobile"> <?=ucfirst($user->username);?> </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="<?php echo base_url() ?>profile">
                                        <i class="icon-user"></i> Profile </a>
                                </li>
                                <!-- <li>
                                    <a href="#">
                                        <i class="icon-settings"></i> Settings
                                    </a>
                                </li> -->

                                <li>
                                    <a href="<?php echo base_url();?>logout">
                                        <i class="icon-logout"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
		<!-- end header -->
		
	<!-- ================================================================================================================================== -->
	<?php if($title == "Profile"):?>
        <!-- start color quick setting -->
        <div class="quick-setting-main" style="margin-top:300px;">
			<button class="control-sidebar-btn btn" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></button>
			<div class="quick-setting display-none">
				<ul id="themecolors" >
					
					<li>
						<p class="selector-title">Sidebar Color</p>
					</li>
					<li class="complete">
						<div class="theme-color sidebar-theme">
							<a href="#" data-theme="white"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="dark"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="blue"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="indigo"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="cyan"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="green"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="red"><span class="head"></span><span class="cont"></span></a>
						</div>
					</li>

					<li>
						<p class="selector-title">Header Brand color</p>
					</li>
					<li class="theme-option">
						<div class="theme-color logo-theme">
							<a href="#" data-theme="logo-white"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="logo-dark"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="logo-blue"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="logo-indigo"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="logo-cyan"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="logo-green"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="logo-red"><span class="head"></span><span class="cont"></span></a>
						</div>
					</li>


					<li>
						<p class="selector-title">Header color</p>
					</li>
					<li class="theme-option">
						<div class="theme-color header-theme">
							<a href="#" data-theme="header-white"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="header-dark"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="header-blue"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="header-indigo"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="header-cyan"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="header-green"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="header-red"><span class="head"></span><span class="cont"></span></a>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<!-- end color quick setting -->
		<?php endif?>

	<!-- ================================================================================================================================== -->

        <!-- start page container -->
        <div class="page-container">
 			<!-- start sidebar menu -->
 			<div class="sidebar-container">
 				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
	                <div id="remove-scroll" class="left-sidemenu">
	                    <ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
	                        <li class="sidebar-toggler-wrapper hide">
	                            <div class="sidebar-toggler">
	                                <span></span>
	                            </div>
	                        </li>
	                        <li class="sidebar-user-panel">
	                            <div class="user-panel">
	                                <div class="pull-left image">
	                                    <img style="width:75px;height:75px;" src="<?php echo base_url();?>public/uploads/<?=ucfirst($user->img);?>" class="img-circle user-img-circle" alt="User Image" />
	                                </div>
	                                <div class="pull-left info">
	                                    <p><?=ucfirst($user->first_name." ".$user->last_name);?></p>
	                                    <a><span class="txtOnline"> <?=ucfirst($user->role);?> </span></a>
	                                </div>
	                            </div>
	                        </li>
	                        <li class="nav-item start <?php if($title == "Dashboard"){echo "active";}?> ">
	                            <a href="<?php echo base_url() ?>dashboard" class="nav-link">
	                                <i class="material-icons">dashboard</i>
	                                <span class="title">Dashboard</span>
	                            </a>
							</li>

	                        <li class="nav-item <?php if($title == "All Student" || $title =="Add Student" || $title =="View Student"){echo "active";}?> ">
	                            <a href="#" class="nav-link nav-toggle"><i class="material-icons">group</i>
	                            <span class="title">Students</span><span class="selected"></span>
                                	<span class="arrow"></span>
                                </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item <?php if($title == "All Student"){echo "active";}?> ">
	                                    <a href="<?php echo base_url();?>student" class="nav-link "> <span class="title">All Students</span>
	                                    <span class="selected"></span>
	                                    </a>
	                                </li>
	                                <li class="nav-item <?php if($title == "Add Student"){echo "active";}?> ">
	                                    <a href="<?php echo base_url();?>student/add" class="nav-link "> <span class="title">Add Student</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>


	                        <!-- <li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">school</i>
	                                <span class="title">Courses</span> <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="<?php echo base_url();?>course" class="nav-link "> <span class="title">All Courses</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="<?php echo base_url();?>course/add" class="nav-link "> <span class="title">Add Course</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li> -->


	                        <li class="nav-item <?php if($title == "Fees Collection" || $title =="Add Fee" || $title =="View Fee" ){echo "active";}?> ">
	                            <a href="#" class="nav-link nav-toggle"> 
                                    <i class="material-icons">monetization_on</i>
	                                <span class="title">Fees</span> <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item <?php if($title == "Fees Collection"){echo "active";}?>">
	                                    <a href="<?php echo base_url() ?>fee" class="nav-link "> <span class="title">Fees Collection</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item <?php if($title =="Add Fee"){echo "active";}?>">
	                                    <a href="<?php echo base_url() ?>fee/add" class="nav-link "> <span class="title">Add Fees </span>
	                                    </a>
	                                </li>
	                            </ul>
							</li>

                            <li class="nav-item <?php if($title =="Enquiry"){echo "active";}?> ">
	                            <a href="<?php echo base_url() ?>enquiry" class="nav-link">
	                                <i class="material-icons">list</i>
	                                <span class="title">Enquiry</span>
	                            </a>
							</li>
							
	                    </ul>
	                </div>
                </div>
            </div>
			 <!-- end sidebar menu -->


			<!-- start page content -->
            <div class="page-content-wrapper">
				<?php	
					$this->load->view($view_page);
				?>
            </div>
            <!-- end page content -->

        </div>
        <!-- end page container -->
        <!-- start footer -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2018 &copy; Developed by Team Falcon
				<p>
					<a href="mailto:redstartheme@gmail.com" target="_top" class="makerCss">Group D</a>
				</p>
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- end footer -->
    </div>
    <!-- start js include path -->
    <script src="<?php echo base_url();?>public/assets/plugins/jquery/jquery.min.js" ></script>
    <script src="<?php echo base_url();?>public/assets/plugins/popper/popper.js" ></script>
    <script src="<?php echo base_url();?>public/assets/plugins/jquery-blockui/jquery.blockui.min.js" ></script>
	<script src="<?php echo base_url();?>public/assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- bootstrap -->
    <script src="<?php echo base_url();?>public/assets/plugins/bootstrap/js/bootstrap.min.js" ></script>
    <script src="<?php echo base_url();?>public/assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js" ></script>
    <script src="<?php echo base_url();?>public/assets/plugins/sparkline/jquery.sparkline.js" ></script>
	<script src="<?php echo base_url();?>public/assets/js/pages/sparkline/sparkline-data.js" ></script>
    
    <!-- Common js-->
	<script src="<?php echo base_url();?>public/assets/js/app.js" ></script>
    <script src="<?php echo base_url();?>public/assets/js/layout.js" ></script>
	<script src="<?php echo base_url();?>public/assets/js/theme-color.js" ></script>
	
	<!-- Material -->
    <script src="<?php echo base_url();?>public/assets/plugins/material/material.min.js"></script>
    <script src="<?php echo base_url();?>public/assets/js/pages/material-select/getmdl-select.js" ></script>
    <script  src="<?php echo base_url();?>public/assets/plugins/material-datetimepicker/moment-with-locales.min.js"></script>
	<script  src="<?php echo base_url();?>public/assets/plugins/material-datetimepicker/bootstrap-material-datetimepicker.js"></script>
	<script  src="<?php echo base_url();?>public/assets/plugins/material-datetimepicker/datetimepicker.js"></script>

    <!-- chart js -->
    <script src="<?php echo base_url();?>public/assets/plugins/chart-js/Chart.bundle.js" ></script>
    <script src="<?php echo base_url();?>public/assets/plugins/chart-js/utils.js" ></script>
    <script src="<?php echo base_url();?>public/assets/js/pages/chart/chartjs/home-data.js" ></script>
    <!-- summernote -->
    <script src="<?php echo base_url();?>public/assets/plugins/summernote/summernote.js" ></script>
    <script src="<?php echo base_url();?>public/assets/js/pages/summernote/summernote-data.js" ></script>
    

    <!-- data tables -->
    <script src="<?php echo base_url();?>public/assets/plugins/datatables/jquery.dataTables.min.js" ></script>
 	<script src="<?php echo base_url();?>public/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js" ></script>
    <script src="<?php echo base_url();?>public/assets/js/pages/table/table_data.js" ></script>
     
    <!-- dropzone_label -->
    <script src="<?php echo base_url();?>public/assets/plugins/dropzone/dropzone_label.js" ></script>



	
	<script type="text/javascript" src="<?php echo base_url();?>public/assets/plugins/tableexport/jszip.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>public/assets/plugins/tableexport/FileSaver.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>public/assets/plugins/tableexport/excel-gen.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>public/assets/plugins/tableexport/excel.js"></script>


	<script src="<?php echo base_url();?>public/assets/plugins/tableexport/topdf/jspdf.debug.js"></script>

	<script src="<?php echo base_url();?>public/assets/plugins/tableexport/topdf/faker.min.js"></script>
	<script src="<?php echo base_url();?>public/assets/plugins/tableexport/topdf/jspdf.plugin.autotable.js"></script>

	<script src="<?php echo base_url();?>public/assets/plugins/tableexport/topdf/examples.js"></script>
	


	




	<script>
		$(document).ready(function(){


			function demoFromHTML(){
				var doc = new jsPDF('l' , 'pt');

				var res = doc.autoTableHtmlToJson(document.getElementById("example4"));
				doc.autoTable(res.columns , res.data , {margin : {top: 80}});

				

				doc.save("table.pdf");


			}


			$("#generate-pdf").click(function(){

				demoFromHTML();
			});

			$("#themecolors li div.theme-color a").click(function(){
				var tag = $(this).attr("data-theme");
				//var url = "profile/updatetheme/"+tag;

				//window.location = url;
				$.post("profile/updatetheme" , {colour : tag} , function(data){

				});
			});

			

			$("#course").on("change", function(){
				var val = $(this).val().toLowerCase().replace(" " , "");

				var data = "data-"+val;

				var price = $("#course_data").attr(data);

				if(price == ""){
					$("#text5").val(" ");
					$("#text5").parent().removeClass("is-focused");
				}else{
					$("#text5").val(price);
					$("#text5").parent().addClass("is-focused");
				}

			});

			$(".rollno").on("keyup", function(){
				var val = $(this).val().toLowerCase().replace(" " , "");
				var val = parseInt(val);

				var data = "data-student-"+val;

				var price = $("#student-list").attr(data);
				
				//alert(price);

				if(price == ""){
					$(".student_name").val(" ");
					$(".student_name").parent().removeClass("is-focused");
				}else{
					$(".student_name").val(price);
					$(".student_name").parent().addClass("is-focused");
				}

			});

			//=======Date
			$(".mdl-textfield .mdl-textfield__input").on("change", function(){
				if($(this).val() != ""){
					$(this).parent().addClass("is-focused");
				}else{
					$(this).parent().removeClass("is-focused");
				}

			});

			$(".mdl-textfield__input").on('blur', function(){

				if($(this).val() != ""){
					$(this).parent().addClass("is-focused");
					$(this).parent().children(2).addCss("removeblue");
				}else{
					$(this).parent().removeClass("is-focused");
					$(this).parent().children(2).addClass("removeblue");
				}
				
			});

			$(".mdl-textfield__input").on('focusin', function(){

				if($(this).val() != ""){
					$(this).parent().addClass("is-focused");
					$(this).parent().children(2).removeCss("removeblue");
				}else{
					$(this).parent().removeClass("is-focused");
					$(this).parent().children(2).removeClass("removeblue");
				}
				
			});

			if($(".mdl-textfield__input").val() != ""){
				$(this).parent().addClass("is-focused");
			}else{
				$(this).parent().removeClass("is-focused");
			}
			

			$(".todo-check input").on("change" , function(e){
				e.preventDefault();
				var text = $(this).val();
				//alert(text);
				$.post("dashboard/todocheck" , {todoid : text} , function(data){});

			});

			$(".todo-remove").on("click" , function(e){
				e.preventDefault();

				var text = $(this).data("todo-id");
				$.post("dashboard/tododel" , {todoid : text} , function(data){});
			});

			$(".todo-list-button").on("click" , function(e){
				e.preventDefault();
				var text = $(".todo-list-text").val();
				
				$.post("dashboard/todoadd" , {todoid : text} , function(datas){

					
                                       

                                        
                                    
					
			$(".to-do-list").append("<li class='clearfix'><div class='todo-check pull-left'>  <input type='checkbox' value='"+datas+"' id='todo-check-'"+datas+"''> <label for='todo-check-'"+datas+"''></label> </div> <p class='todo-title'>"+text+"</p><div class='todo-actionlist pull-right clearfix'><a href='#' data-todo-id='"+datas+"'  class='todo-remove'><i class='fa fa-times'></i></a></div></li>");
					$(".todo-list-text").val(" ");
					
				});

			});

		});	
     
     
     
     
     
     
     
     
     </script>
     <!-- end js include path -->
</body>

<!-- Mirrored from radixtouch.in/templates/admin/smart/source/light/all_students.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Jun 2018 21:34:55 GMT -->
</html>