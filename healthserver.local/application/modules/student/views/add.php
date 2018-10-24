<div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Add Student</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url();?>dashboard">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="<?php echo base_url();?>student">Student</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Add Student</li>
                            </ol>
                        </div>
                    </div>
						<div class="row">
							<?php echo form_open_multipart(uri_string());?>
								<div class="col-sm-12">
									<div class="card-box">

									
										<div class="card-head">
											<header>Add Student</header>
											<div class="pull-right"><?php
												if(isset($form_status)){echo $form_status;} ?></div>	
										</div>


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
													<input value="<?php if(isset($enq_detail)){echo $enq_detail->title;}?>" class="mdl-textfield__input" name="title" type="text" id="title" readonly tabIndex="-1">
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
												<input value="<?php if(isset($enq_detail)){echo $enq_detail->name;}?>" class = "mdl-textfield__input" name="fullname" type = "text" id = "txtFirstName">
												<label class = "mdl-textfield__label">Name ( Firstname Middlename Lastname ) </label>
											</div>
											</div>

											<div class="col-lg-6 p-t-20"> 
											<div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input value="<?php if(isset($enq_detail)){echo $enq_detail->email;}?>" class = "mdl-textfield__input" name="email" type = "email" id = "txtemail">
												<label class = "mdl-textfield__label" >Email</label>
												<span class = "mdl-textfield__error">Enter Valid Email Address!</span>
											</div>
											</div>

											<div class="col-lg-6 p-t-20"> 
											<div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input value="<?php if(isset($enq_detail)){echo $enq_detail->phone;}?>" class = "mdl-textfield__input" name="phone" type = "text" id = "txtRollNo">
												<label class = "mdl-textfield__label" >Mobile No.</label>
											</div>
											</div>

											<div class="col-lg-6 p-t-20"> 
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
													<input value="<?php if(isset($enq_detail)){echo $enq_detail->gender;}?>" class="mdl-textfield__input" name="gender" type="text" id="sample2" readonly tabIndex="-1">
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
												<input value="<?php if(isset($enq_detail)){echo $enq_detail->dob;}?>" class = "mdl-textfield__input" value="" name="dob" type = "text" id = "dateOfBirth">
												<label class = "mdl-textfield__label" >Date Of Birth</label>
											</div>
											</div>

											

											<div class="col-lg-6 p-t-20"> 
											<div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input value="<?php if(isset($enq_detail)){echo $enq_detail->p_name;}?>" class = "mdl-textfield__input" name="parent_name" type = "text" id = "txtRollNo">
												<label class = "mdl-textfield__label" >Parent / Gaurdian Name</label>
											</div>
											</div>

											<div class="col-lg-6 p-t-20"> 
											<div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input value="<?php if(isset($enq_detail)){echo $enq_detail->phone;}?>" class = "mdl-textfield__input" name="parent_number" type = "text" id = "txtRollNo">
												<label class = "mdl-textfield__label" >Parent / Gaurdian Mobile No.</label>
											</div>
											</div>



											

											<div class="col-lg-12 p-t-20"> 
											<div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<textarea class = "mdl-textfield__input" name="address" row="4"  
													id = "text7" ><?php if(isset($enq_detail)){echo $enq_detail->address;}?></textarea>
												<label class = "mdl-textfield__label" for = "text7">Address / Location</label>
											</div>
											</div>

											<div class="col-lg-6 p-t-20"> 
												<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
													<input  class="mdl-textfield__input" name="source" type="text" id="source" value="" tabIndex="-1">
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
													<input class="mdl-textfield__input" name="course" type="text" id="course" value="" tabIndex="-1">
													<label for="course" class="pull-right margin-0">
														<i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
													</label>
													<label for="course" class="mdl-textfield__label">Course (If Others Type It) </label>
													<ul data-mdl-for="course" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
														<?php foreach($student_courses as $student_course):?>
														<li class="mdl-menu__item" data-val="BY"><?=ucfirst($student_course->name);?></li>
														<?php endforeach;?>
													</ul>
													<div id="course_data" 
													<?php 
														foreach($student_courses as $student_course)
														{
															echo "data-".str_replace(" ","",$student_course->name)." ='".$student_course->price."'";
														}
													?>
													></div>

												</div>
											</div>


											<div class="col-lg-6 p-t-20">
											<div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input name="invoice_number" class = "mdl-textfield__input" type = "text" id = "txtRollNo">
												<label class = "mdl-textfield__label" >Invoice / Roll No.</label>
											</div>
											</div>

											<div class="col-lg-6 p-t-20"> 
											<div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input class = "mdl-textfield__input" name="date_of_enrollement" type = "text" id = "date1">
												<label class = "mdl-textfield__label" >Date Of Enrollement</label>
											</div>
											</div>

											<div class="col-lg-6 p-t-20"> 
												<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
													<input class="mdl-textfield__input" type="text" name="status" id="status" value="" readonly tabIndex="-1">
													<label for="status" class="pull-right margin-0">
														<i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
													</label>
													<label for="status" class="mdl-textfield__label">Status</label>
													<ul data-mdl-for="status" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
														<?php foreach($student_status as $status):?>
															<li class="mdl-menu__item" data-val="BY"><?=ucfirst($status->name);?></li>
														<?php endforeach;?>
													</ul>
												</div>
											</div>

											<div class="col-lg-6 p-t-20">
											<div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input class = "mdl-textfield__input amount" name="installation_amount" type = "text" 
													pattern = "[0-9]*(\.[0-9]+)?" id = "text5">
												<label class = "mdl-textfield__label" for = "text5">Installation Amount</label>
												<span class = "mdl-textfield__error">Number required!</span>
											</div>
											</div>

											<div class="col-lg-6 p-t-20"> 
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
													<input class="mdl-textfield__input" name="payment_type" type="text" id="paytype" value="" readonly tabIndex="-1">
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
													<input class="mdl-textfield__input" type="text" name="bank" id="bank" value="" tabIndex="-1">
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
												<input name="initial_deposite" class = "mdl-textfield__input" type = "text" 
													pattern = "-?[0-9]*(\.[0-9]+)?" id = "text5">
												<label class = "mdl-textfield__label" for = "text5">Initial Deposit</label>
												<span class = "mdl-textfield__error">Number required!</span>
											</div>
											</div>

											<div class="col-lg-6 p-t-20"> 
											<div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input name="next_installement_date" class = "mdl-textfield__input" type = "text" id = "date">
												<label class = "mdl-textfield__label" >Next Installement Date</label>
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
                </div>

				