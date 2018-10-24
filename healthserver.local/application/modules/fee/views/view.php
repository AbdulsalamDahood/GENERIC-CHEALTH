<div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Sessions Collection</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url() ?>dashboard">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
								<li class="active">
								Sessions Collection&nbsp;
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-box">
                                <div class="card-head">
										<header>Sessions Collection</header>
									</div>
                                <div class="card-body ">

                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-6">
                                        <div class="btn-group">
                                            <a href="<?php echo base_url();?>Session/add" id="addRow" class="btn btn-info">
                                                Add New <i class="fa fa-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-6">
                                        <div class="btn-group pull-right">
                                            <a class="btn deepPink-bgcolor  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-menu pull-right">
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-print"></i> Print </a>
                                                </li>
                                                <li>
                                                    <a id="generate-pdf" href="#" >
                                                        <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                                </li>
                                                <li>
                                                    <a id="generate-csv" href="#">
                                                        <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                 <div class="table-scrollable">
                                    <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
                                        <thead>
                                            <tr>
                                                <th class="center">Session ID</th>
                                                <th class="center"> Student Name </th>
                                                <th class="center"> Date </th>
                                                <th class="center"> Invoice Number </th>
                                                <th class="center"> Payment Type </th>
                                                 <!-- <th class="center"> Payment Type </th> -->
                                                <th class="center"> Amount </th>
                                                <th class="center"> Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php foreach($Sessions_detail as $Session):?>
											<tr class="odd gradeX">
												<td class="center"><?=$Session["Session_id"];?></td>
												<td class="center"><?=$Session["student_name"];?></td>
												<td class="center"><?=$Session["date"];?></td>
												<td class="center"><?=$Session["invoice_number"];?></td>
												<td class="center"><?=$Session["payment_type"];?></td>
												<!-- <td class="center">cash</td> -->
												<td class="center"><?=$Session["amount"];?></td>
												<!-- <td class="center"><span class="label label-sm label-success">paid</span></td> -->
												<td class="center">
													<a href="<?=base_url()."Session/view/".$Session["Session_id"];?>" class="btn btn-primary btn-xs">
														<i class="fa fa-pencil"></i>
													</a>

													<a href="<?=base_url()."Session/delete/".$Session["Session_id"];?>" class="btn btn-danger btn-xs">
														<i class="fa fa-trash-o"></i>
													</a>
												</td>
											</tr>
										<?php endforeach;?>


										</tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
