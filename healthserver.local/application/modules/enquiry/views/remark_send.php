
						<div class="row">
							<div class="col-sm-12">
								<div class="card-box">
									<div class="card-head">
										<header>Send Remark</header>
                                        <span class="pull-right" style="margin-right:20px;">Enquiry ID : <?=$enquiry_id?></span>
									</div>
									<?php echo form_open(uri_string());?>
										<div class="card-body row">


                                            <div class="col-lg-6 p-t-20"> 
												<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
													<input class="mdl-textfield__input" name="course_recommended" type="text" id="course" required value="" tabIndex="-1">
													<label for="course" class="pull-right margin-0">
														<i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
													</label>
													<label for="course" class="mdl-textfield__label">Course (If Others Type It) </label>
													<ul data-mdl-for="course" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
														<?php foreach($student_courses as $student_course):?>
														<li class="mdl-menu__item" data-val="BY"><?=ucfirst($student_course->name);?></li>
														<?php endforeach;?>
													</ul>

												</div>
											</div>

											<div class="col-lg-6 p-t-20"> 
											<div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input value=""  name="time_preferred" class = "mdl-textfield__input rollno" type = "text" id = "txtroll">
												<label class = "mdl-textfield__label">Time Preferred</label>
											</div>
											</div>

											<div class="col-lg-12 p-t-20"> 
											<div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<textarea required class = "mdl-textfield__input" name="remark_result" row="4"  
													id = "text7" ></textarea>
												<label class = "mdl-textfield__label" for = "text7">Remark</label>
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
                </div>