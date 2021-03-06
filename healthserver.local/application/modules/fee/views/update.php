<div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Update Session</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url();?>dashboard">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="<?php echo base_url();?>Session">Session</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Update Session</li>
                            </ol>
                        </div>
                    </div>
						<div class="row">
                            <div class="col-sm-6">



                            <div class="white-box">
	                            <h3><b>INVOICE</b> <span class="pull-right">#<?=$Session_other["invoice_number"];?></span></h3>
	                            <hr>
	                            <div class="row">
	                                <div class="col-md-12">
										<div class="pull-left">
											<address>
												<img style="width:100px;height:40px;" src="<?php echo base_url()?>public/uploads/invoice_logo.png" alt="logo" class="logo-default" />
												<p class="text-muted m-l-5">
													Plot 13, Yomi Ajetunmobi Avenue, <br> Off Alfa Bus Stop, Sangotedo, <br>
													Lekki-Epe Expressway, Lagos <br> Tel - 081097645577
												</p>
											</address>
										</div>
										<div class="pull-right text-right">
											<address>
												<!-- <p class="addr-font-h3">To,</p> -->
												<p class="font-bold addr-font-h4"><?=$Session_other["student_name"];?></p>
												<p class="text-muted m-l-30">
													<?=$Session_other["student_table"]->address;?> <br> Tel - <?=$Session_other["student_table"]->phone;?>
												</p>
												<p class="m-t-30">
													<b>Invoice Date :</b> <i class="fa fa-calendar"></i> <?=$Session_other["date"];?>
												</p>
												<p>
													<b>Course  :</b> <?=$Session_other["student_table"]->course;?>
												</p>
												<p>
													<b>Payment Type  :</b> <?=$Session_other["payment_type"];?>
												</p>
												<p>
													<b>Amount  : N <?=$Session_other["amount"];?></b>
												</p>
											</address>
										</div>
									</div>
	                                <!-- <div class="col-md-12">
	                                    <div class="table-responsive m-t-40">
	                                        <table class="table table-hover">
	                                            <thead>
	                                                <tr>
	                                                    <th class="text-right">Payment Type</th>
	                                                    <th class="text-right">Amount</th>
	                                                </tr>
	                                            </thead>
	                                            <tbody>
	                                                <tr>
	                                                    <td class="text-right"><?=$Session_other["payment_type"];?></td>
	                                                    <td class="text-right">N<?=$Session_other["amount"];?></td>
	                                                </tr>
	                                            </tbody>
	                                        </table>
	                                    </div>
	                                </div> -->
	                            </div>
	                        </div>

                            </div>





							<div class="col-sm-6">
								<div class="card-box">
									<div class="card-head">
										<header>Update Session</header>
									</div>

									<?php echo form_open(uri_string());?>
									<div class="card-body row">

											<div class="col-lg-6 p-t-20">
											<div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input name="rollno" value="<?=$Session_other["student_id"];?>" class = "rollno mdl-textfield__input" type = "text" id = "txtroll">
												<label class = "mdl-textfield__label">Student Roll No.</label>
											</div>


												<div id="student-list"
												<?php
													foreach($students as $student)
													{
														echo "data-student-".str_replace(" ","",$student->id)." ='".$student->fullname."'";
													}
												?>></div>

											</div>

											<div class="col-lg-6 p-t-20">
											<div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input readonly name="student_name" value="<?=$Session_other["student_name"];?>" class = "student_name mdl-textfield__input" type = "text" id = "txtroll">
												<label class = "mdl-textfield__label">Student Name</label>
											</div>
											</div>

											<div class="col-lg-6 p-t-20">
											<div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input name="date_of_payment" value="<?=$Session_other["date"];?>" class = "mdl-textfield__input" type = "text" id = "date">
												<label class = "mdl-textfield__label" >Date Of Payment</label>
											</div>
											</div>

											<div class="col-lg-6 p-t-20">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
													<input value="<?=$full_Session->bank;?>" name="bank" class="mdl-textfield__input" type="text" id="bank" readonly tabIndex="-1">
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
													<input name="payment_type" value="<?=$Session_other["payment_type"];?>" class="mdl-textfield__input" type="text" id="list9" readonly tabIndex="-1">
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
												<input name="invoice_number" value="<?=$Session_other["invoice_number"];?>" class = "mdl-textfield__input" type = "text" id = "txtroll">
												<label class = "mdl-textfield__label">Invoice No.</label>
											</div>
											</div>


											<div class="col-lg-6 p-t-20">
											<div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input name="amount" value="<?=$Session_other["amount"];?>" class = "mdl-textfield__input" type = "text" id = "paymentReference">
												<label class = "mdl-textfield__label">Amount</label>
											</div>
											</div>

											<div class="col-lg-6 p-t-20">
											<div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input value="<?=$full_Session->next_installement;?>" name="next_installement_date" class = "mdl-textfield__input" type = "text" id = "dateOfBirth">
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
