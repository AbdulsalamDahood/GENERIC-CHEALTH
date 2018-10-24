<div class="page-content">
	<div class="page-bar">
		<div class="page-title-breadcrumb">
			<div class=" pull-left">
				<div class="page-title">Profile</div>
			</div>
			<ol class="breadcrumb page-breadcrumb pull-right">
				<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url();?>dashboard">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
				</li>
				<li class="active">Profile</li>
			</ol>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<!-- BEGIN PROFILE SIDEBAR -->
			<div class="profile-sidebar">
				<div class="card card-topline-aqua">
					<div class="card-body no-padding height-9">
						<div class="row">
							<div class="profile-userpic">
								<img style="width:130px;height:130px;" src="<?php echo base_url();?>public/uploads/<?=ucfirst($user->img);?>" class="img-responsive" alt=""> </div>
						</div>
						<div class="profile-usertitle">
							<div class="profile-usertitle-name"> <?=ucfirst($user->first_name." ".$user->last_name);?> </div>
							<div class="profile-usertitle-job"> <?=ucfirst($user->role);?> </div>
						</div>
						<ul class="list-group list-group-unbordered">
							<li class="list-group-item">
								<b>E - mail : </b> <a class="pull-right"><?=ucfirst($user->email);?></a>
							</li>
							<li class="list-group-item">
								<b>Phone : </b> <a class="pull-right"><?=ucfirst($user->phone);?></a>
							</li>
							<li class="list-group-item" style="border-bottom:none;">
								<b>Gender</b> <a class="pull-right"><?=ucfirst($user->gender);?></a>
							</li>
						</ul>
						<!-- END SIDEBAR USER TITLE -->
					</div>
				</div>
				

				<div class="card">
					<div class="card-head card-topline-aqua">
						<header>Address</header>
					</div>
					<div class="card-body no-padding height-9">
						<div class="row text-center m-t-10">
					<div class="col-md-12">
						<p><?=ucfirst($user->address);?></p>
					</div>
				</div>
					</div>
				</div>
				
			</div>
			<!-- END BEGIN PROFILE SIDEBAR -->


			<!-- BEGIN PROFILE CONTENT -->
		
			<div class="profile-content">
				<div class="row">
						<div class="card card-topline-aqua">
						<div class="card-head">
							<header>Update Your Profile</header>	
						</div>
						
						<div class="white-box">
							<?php echo form_open_multipart(uri_string());?>
								<div class="card-body row">

									<div class="col-lg-12 p-t-20">
										<div class="col-lg-3 p-t-20 pull-right">
											<div class="col-md-12">
												<label for="image" id="id_dropzone" class="dropzone">
												<input id="image" name="image" type="file" style="display:none;" />
													Click Hear to upload file
												</label>
											</div>
										</div>
									</div>

									<div class="col-lg-6 p-t-20"> 
									<div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<input class = "mdl-textfield__input" name="first_name" value="<?=$user->first_name?>" type = "text" id = "txtFirstName">
										<label class = "mdl-textfield__label">First Name</label>
									</div>
									</div>

									<div class="col-lg-6 p-t-20"> 
									<div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<input class = "mdl-textfield__input" name="last_name" value="<?=$user->last_name?>" type = "text" id = "txtLastName">
										<label class = "mdl-textfield__label" >Last Name</label>
										<span class = "mdl-textfield__error">Last Name</span>
									</div>
									</div>

									<div class="col-lg-6 p-t-20"> 
									<div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<input class = "mdl-textfield__input" name="phone" value="<?=$user->phone?>" type = "text" id = "txtRollNo">
										<label class = "mdl-textfield__label" >Mobile No.</label>
									</div>
									</div>

									<div class="col-lg-6 p-t-20"> 
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<input class="mdl-textfield__input" name="gender" type="text" id="sample2" value="<?=$user->gender?>" readonly tabIndex="-1">
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

									<div class="col-lg-12 p-t-20"> 
									<div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<textarea class = "mdl-textfield__input" name="address" row="4"  
											id = "text7" ><?=$user->address?></textarea>
										<label class = "mdl-textfield__label" for = "text7">Address / Location</label>
									</div>
									</div>

									<div class="col-lg-6 p-t-20"> 
									<div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<input class = "mdl-textfield__input" name="password" type = "text" id = "txtRollNo">
										<label class = "mdl-textfield__label" >Enter New Password</label>
									</div>
									</div>

									<div class="col-lg-6 p-t-20"> 
									<div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<input class = "mdl-textfield__input" name="password_confirm" type = "text" id = "txtRollNo">
										<label class = "mdl-textfield__label" > Confirm New Password </label>
									</div>
									</div>

									<div class="col-lg-12 p-t-20 text-center"> 
										<button class="btn btn-pink">submit</button>
									</div>

								</div>
							<?php echo form_close();?>
						</div>
					</div>
				</div>
			</div>
			<!-- END PROFILE CONTENT -->
		</div>
	</div>
</div>
<!-- end page content -->