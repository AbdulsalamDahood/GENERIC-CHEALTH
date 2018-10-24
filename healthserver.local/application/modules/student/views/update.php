<div class="page-content">
	<div class="page-bar">
		<div class="page-title-breadcrumb">
			<div class=" pull-left">
				<div class="page-title">Update Record Information</div>
			</div>
			<ol class="breadcrumb page-breadcrumb pull-right">
				<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url();?>dashboard">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
				</li>
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url();?>Record">Record</a>&nbsp;<i class="fa fa-angle-right"></i>
				</li>
				<li class="active">Record Information</li>
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
								<img style="width:130px;height:130px;" src="<?php echo base_url();?>public/uploads/Records/<?=$Record_data->image;?>" class="img-responsive" alt=""> </div>
						</div>
						<div class="profile-usertitle">
							<div class="profile-usertitle-name"> <?=$Record_data->fullname;?> </div>
							<div class="profile-usertitle-job"> <?=$Record_data->course;?> </div>
						</div>
						<ul class="list-group list-group-unbordered">
							<li class="list-group-item">
								<b>E - mail  </b> <a class="pull-right"><?=$Record_data->email;?></a>
							</li>
							<li class="list-group-item">
								<b>Phone  </b> <a class="pull-right"><?=$Record_data->phone;?></a>
							</li>
                            <li class="list-group-item">
                                <b>Gender</b> <a class="pull-right"><?=$Record_data->gender;?></a>
							</li>
                            <li class="list-group-item">
								<b>Gaurdian Name  </b> <a class="pull-right"><?=$Record_data->parent_name;?></a>
							</li>

                            <li class="list-group-item" style="border-bottom:none;">
								<b>Gaurdian Phone Number  </b> <a class="pull-right"><?=$Record_data->parent_number;?></a>
							</li>


							<!-- <li class="list-group-item" style="border-bottom:none;">
								<b>Gender</b> <a class="pull-right">Male</a>
							</li> -->
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
                                <p><?=$Record_data->address;?>
                                </p>
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
							<header>Update <?=$Record_data->fullname;?> Information</header>
						</div>

						<div class="white-box">

							<?php echo form_open_multipart(uri_string());?>
								<div class="col-sm-12">

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

                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                                <input class="mdl-textfield__input" name="title" value="<?=$form_info["title"];?>" type="text" id="title" readonly tabIndex="-1">
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
                                            <input class = "mdl-textfield__input" value="<?=$form_info["fullname"];?>" name="fullname" type = "text" id = "txtFirstName">
                                            <label class = "mdl-textfield__label">Name ( Firstname Middlename Lastname ) </label>
                                        </div>
                                        </div>

                                        <div class="col-lg-6 p-t-20">
                                        <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                            <input class = "mdl-textfield__input" value="<?=$form_info["email"];?>" name="email" type = "email" id = "txtemail">
                                            <label class = "mdl-textfield__label" >Email</label>
                                            <span class = "mdl-textfield__error">Enter Valid Email Address!</span>
                                        </div>
                                        </div>

                                        <div class="col-lg-6 p-t-20">
                                        <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                            <input class = "mdl-textfield__input" value="<?=$form_info["phone"];?>" name="phone" type = "text" id = "txtRollNo">
                                            <label class = "mdl-textfield__label" >Mobile No.</label>
                                        </div>
                                        </div>

                                        <div class="col-lg-6 p-t-20">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                                <input class="mdl-textfield__input" value="<?=$form_info["gender"];?>" name="gender" type="text" id="sample2" value="" readonly tabIndex="-1">
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
                                            <input class = "mdl-textfield__input" value="<?=$form_info["dob"];?>" name="dob" type = "text" id = "dateOfBirth">
                                            <label class = "mdl-textfield__label" >Date Of Birth</label>
                                        </div>
                                        </div>



                                        <div class="col-lg-6 p-t-20">
                                        <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                            <input class = "mdl-textfield__input" value="<?=$form_info["parent_name"];?>" name="parent_name" type = "text" id = "txtRollNo">
                                            <label class = "mdl-textfield__label" >Parent / Gaurdian Name</label>
                                        </div>
                                        </div>

                                        <div class="col-lg-6 p-t-20">
                                        <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                            <input class = "mdl-textfield__input" value="<?=$form_info["parent_number"];?>" name="parent_number" type = "text" id = "txtRollNo">
                                            <label class = "mdl-textfield__label" >Parent / Gaurdian Mobile No.</label>
                                        </div>
                                        </div>





                                        <div class="col-lg-12 p-t-20">
                                        <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                            <textarea class = "mdl-textfield__input" name="address" row="4"
                                                id = "text7" ><?=$form_info["address"];?></textarea>
                                            <label class = "mdl-textfield__label" for = "text7">Address / Location</label>
                                        </div>
                                        </div>

                                        <div class="col-lg-6 p-t-20">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                                <input class="mdl-textfield__input" value="<?=$form_info["source"];?>" name="source" type="text" id="source" value="" tabIndex="-1">
                                                <label for="source" class="pull-right margin-0">
                                                    <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                                </label>
                                                <label for="source" class="mdl-textfield__label">Source (If Others Type It)</label>
                                                <ul data-mdl-for="source" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                                    <?php foreach($sources as $source):?>
                                                        <li class="mdl-menu__item" data-val="BY"><?=ucfirst($source->name);?></li>
                                                    <?php endforeach;?>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 p-t-20">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                                <input id="course" class="mdl-textfield__input" value="<?=$form_info["course"];?>" name="course" type="text" id="course" value="" tabIndex="-1">
                                                <label for="course" class="pull-right margin-0">
                                                    <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                                </label>
                                                <label for="course" class="mdl-textfield__label">Course (If Others Type It) </label>
                                                <ul data-mdl-for="course" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                                    <?php foreach($Record_courses as $Record_course):?>
                                                    <!-- <li class="mdl-menu__item" data-val="DE">Computer</li> -->
                                                    <li class="mdl-menu__item" data-val="BY"><?=ucfirst($Record_course->name);?></li>

                                                    <?php endforeach;?>
                                                </ul>

                                                <div id="course_data"
													<?php
														foreach($Record_courses as $Record_course)
														{
															echo "data-".str_replace(" ","",$Record_course->name)." ='".$Record_course->price."'";
														}
													?>
												></div>
                                            </div>
                                        </div>


                                        <div class="col-lg-6 p-t-20">
                                        <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                            <input name="invoice_number" value="<?=$form_info["invoice_number"];?>" class = "mdl-textfield__input" type = "text" id = "txtRollNo">
                                            <label class = "mdl-textfield__label" >Invoice / Roll No.</label>
                                        </div>
                                        </div>

                                        <div class="col-lg-6 p-t-20">
                                        <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                            <input class = "mdl-textfield__input" value="<?=$form_info["date_of_enrollement"];?>" name="date_of_enrollement" type = "text" id = "date1">
                                            <label class = "mdl-textfield__label" >Date Of Enrollement</label>
                                        </div>
                                        </div>

                                        <div class="col-lg-6 p-t-20">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                                <input class="mdl-textfield__input" type="text" value="<?=$form_info["status"];?>" name="status" id="status" value="" readonly tabIndex="-1">
                                                <label for="status" class="pull-right margin-0">
                                                    <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                                </label>
                                                <label for="status" class="mdl-textfield__label">Status</label>
                                                <ul data-mdl-for="status" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                                    <?php foreach($Record_status as $status):?>
                                                        <li class="mdl-menu__item" data-val="BY"><?=ucfirst($status->name);?></li>
                                                    <?php endforeach;?>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 p-t-20">
                                        <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                            <input class = "mdl-textfield__input" value="<?=$form_info["installation_amount"];?>" name="installation_amount" type = "text"
                                                pattern = "-?[0-9]*(\.[0-9]+)?" id = "text5">
                                            <label class = "mdl-textfield__label" for = "text5">Installation Amount</label>
                                            <span class = "mdl-textfield__error">Number required!</span>
                                        </div>
                                        </div>

                                        <div class="col-lg-6 p-t-20">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                                <input class="mdl-textfield__input" name="payment_type" type="text" id="paytype" value="<?=$form_info["payment_type"];?>" readonly tabIndex="-1">
                                                <label for="paytype" class="pull-right margin-0">
                                                    <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                                </label>
                                                <label for="paytype" class="mdl-textfield__label">Payment Type</label>
                                                <ul data-mdl-for="paytype" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                                    <li class="mdl-menu__item" data-val="DE">Cash</li>
                                                    <li class="mdl-menu__item" data-val="BY">Cheque</li>
                                                    <li class="mdl-menu__item" data-val="BY">Online Transfer</li>
                                                    <li class="mdl-menu__item" data-val="BY">Draft</li>
                                                    <li class="mdl-menu__item" data-val="OT">Other</li>
                                                </ul>
                                            </div>
                                        </div>


                                        <div class="col-lg-6 p-t-20">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                                <input class="mdl-textfield__input" type="text" name="bank" id="bank" value="<?=$form_info["bank"];?>" tabIndex="-1">
                                                <label for="bank" class="pull-right margin-0">
                                                    <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                                </label>
                                                <label for="bank" class="mdl-textfield__label">Bank</label>
                                                <ul data-mdl-for="bank" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                                    <li class="mdl-menu__item" data-val="DE">UBA</li>
                                                    <li class="mdl-menu__item" data-val="BY">First Bank</li>
                                                    <li class="mdl-menu__item" data-val="BY">Zenith</li>
                                                </ul>
                                            </div>
                                        </div>


                                        <div class="col-lg-6 p-t-20">
                                        <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                            <input name="initial_deposite" value="<?=$form_info["initial_deposite"];?>" class = "mdl-textfield__input" type = "text"
                                                pattern = "-?[0-9]*(\.[0-9]+)?" id = "text5">
                                            <label class = "mdl-textfield__label" for = "text5">Initial Deposit</label>
                                            <span class = "mdl-textfield__error">Number required!</span>
                                        </div>
                                        </div>

                                        <div class="col-lg-6 p-t-20">
                                        <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                            <input name="next_installement_date" value="<?=$form_info["next_installement"];?>" class = "mdl-textfield__input" type = "text" id = "date">
                                            <label class = "mdl-textfield__label" >Next Installement Date</label>
                                        </div>
                                        </div>

                                        <div class="col-lg-12 p-t-20 text-center">
                                            <button class="btn btn-pink">submit</button>
                                            <!-- <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Submit</button> -->
                                            <!-- <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">Cancel</button> -->
                                        </div>
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
