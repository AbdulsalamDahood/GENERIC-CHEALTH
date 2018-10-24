<div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Add Session</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url();?>dashboard">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="<?php echo base_url();?>Session">Session</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Add Session</li>
                            </ol>
                        </div>
                    </div>
						<div class="row">
							<div class="col-sm-12">
								<div class="card-box">
									<div class="card-head">
										<header>Add Session</header>
									</div>
									<?php echo form_open(uri_string());?>
										<div class="card-body row">

											<div class="col-lg-6 p-t-20">
											<div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input value="<?php if(isset($std->id)){ echo $std->id; }?>"  name="rollno" class = "mdl-textfield__input rollno" type = "text" id = "txtroll">
												<label class = "mdl-textfield__label">Student Roll No.</label>


												<div id="student-list"
												<?php
													foreach($students as $student)
													{
														echo "data-student-".str_replace(" ","",$student->id)." ='".$student->fullname."'";
													}
												?>></div>


											</div>
											</div>

											<div class="col-lg-6 p-t-20">
											<div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input name="student_name" value="<?php if(isset($std->fullname)){ echo $std->fullname; }?>" class = "mdl-textfield__input student_name" readonly type = "text" id = "txtroll">
												<label class = "mdl-textfield__label">Student Name</label>
											</div>
											</div>

											<div class="col-lg-6 p-t-20">
											<div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input name="date_of_payment" class = "mdl-textfield__input" type = "text" id = "date">
												<label class = "mdl-textfield__label" >Date Of Payment</label>
											</div>
											</div>

											<div class="col-lg-6 p-t-20">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
													<input name="bank" class="mdl-textfield__input" type="text" id="bank" readonly tabIndex="-1">
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
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
													<input name="payment_type" class="mdl-textfield__input" type="text" id="list9" readonly tabIndex="-1">
													<label for="list9" class="pull-right margin-0">
														<i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
													</label>
													<label for="list9" class="mdl-textfield__label">Payment Type</label>
													<ul data-mdl-for="list9" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
														<li class="mdl-menu__item" data-val="DE">Cash</li>
														<li class="mdl-menu__item" data-val="BY">Cheque</li>
														<li class="mdl-menu__item" data-val="BY">Online Transfer</li>
														<li class="mdl-menu__item" data-val="BY">Draft</li>
														<li class="mdl-menu__item" data-val="OT">Other</li>
													</ul>
												</div>
											</div>

											<div class="col-lg-6 p-t-20">
											<div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input name="invoice_number" class = "mdl-textfield__input" type = "text" id = "txtroll">
												<label class = "mdl-textfield__label">Invoice No.</label>
											</div>
											</div>


											<div class="col-lg-6 p-t-20">
											<div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input name="amount" class = "mdl-textfield__input" type = "text" id = "paymentReference">
												<label class = "mdl-textfield__label">Amount</label>
											</div>
											</div>

											<div class="col-lg-6 p-t-20">
											<div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input name="next_installement_date" class = "mdl-textfield__input" type = "text" id = "dateOfBirth">
												<label class = "mdl-textfield__label" >Date Of Next Installation</label>
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
