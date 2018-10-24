<div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">All Recordss List</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url();?>dashboard">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Recordss</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tabbable-line">
                                <ul class="nav customtab nav-tabs" role="tablist">
	                                <li class="nav-item"><a href="#tab1" class="nav-link active"  data-toggle="tab" >List View</a></li>
	                                <li class="nav-item"><a href="#tab2" class="nav-link" data-toggle="tab">Grid View</a></li>
	                            </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active fontawesome-demo" id="tab1">
                                        <div class="row">
					                        <div class="col-md-12">
					                            <div class="card card-box">
					                                <div class="card-head">
					                                    <header>All Recordss List</header>

					                                </div>
					                                <div class="card-body ">
					                                    <div class="row">
					                                        <div class="col-md-6 col-sm-6 col-6">
					                                            <div class="btn-group">
					                                                <a href="<?php echo base_url();?>Records/add" id="addRow" class="btn btn-info">
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

																<div class="btn-group pull-right" >
					                                                <form action="">
																		<label style="margin-right:10px;" for="uploadfile" class="btn btn-primary" >
																		<i class="fa fa-file-excel-o"></i> Upload file</label>
																		<input type="file" id="uploadfile" style="display:none;" />
																	</form>
					                                            </div>

					                                        </div>
					                                    </div>

					                                    <div class="table-scrollable">
					                                    <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
					                                        <thead>
					                                            <tr>
					                                                <th> Roll No </th>
					                                                <th> Name </th>
					                                                <th> Course </th>
					                                                <th> Mobile </th>
					                                                <th> Email </th>
					                                                <th>Admission Date</th>
																	<th>Payment Status</th>
					                                                <th> Action </th>
					                                            </tr>
					                                        </thead>
					                                        <tbody>
																<?php foreach($Recordss as $Records):?>
																<!-- <?php print_r($Records)?> -->
																	<tr class="odd gradeX">
																		<td class="left"><?=$Records->id;?></td>
																		<td><span data-image="<?=$Records->image;?>"><?=ucfirst($Records->title." ".$Records->fullname);?></span></td>
																		<td class="left"><?=$Records->course;?></td>
																		<td><a href="tel:<?=$Records->phone;?>">
																				<?=$Records->phone;?> </a></td>
																		<td><a href="mailto:<?=$Records->email;?>">
																				<?=$Records->email;?> </a></td>
																		<td class="left"><?=$Records->date_of_enrollement;?></td>
																		<td class="center">
																			<?php
																				if($due_detail[$Records->id] == "complete"){
																					echo "<span class='label label-sm label-success'>COMPLETE</span>";
																				}else if($due_detail[$Records->id] == "ok"){
																					echo "<span class='label label-sm label-warning'>ACTIVE</span>";
																				}else{
																					echo "<span class='label label-sm label-danger'>DUE</span>";
																				}
																			?>
																		</td>
																		<td>
																			<a href="<?=base_url()."Records/view/".$Records->id;?>" class="btn btn-primary btn-xs">
																				<i class="fa fa-pencil"></i>
																			</a>

																			<a href="<?=base_url()."fee/add/".$Records->id;?>" class="btn btn-danger btn-xs">
																				<i class="fa fa-bitcoin"></i>
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



                                    <div class="tab-pane" id="tab2">
                                        <div class="row">
											<?php foreach($Recordss as $Records):?>
					                        <div class="col-md-4">
				                                <div style="width:414px; height:318px;" class="card card-box">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img style="width:112px; height:112px;" src="<?=base_url()."public/uploads/Recordss/".$Records->image;?>" class="doctor-pic" alt="">
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name"> <?=$Records->fullname;?> </div>
					                                            <div class="name-center"> <?=$Records->course;?> </div>
					                                        </div>
				                                                <p><?=$Records->address;?></p>
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:<?=$Records->phone;?>"> <?=$Records->phone;?> </a></p> </div>
					                                        <div class="profile-userbuttons">
					                                            <a href="<?=base_url()."Records/view/".$Records->id;?>" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
											<?php endforeach;?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
