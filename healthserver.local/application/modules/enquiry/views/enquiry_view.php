<div class="inbox-body no-pad">
        <section class="mail-list">
            <div class="mail-sender">
                
                <div class="media">
                    <a href="#" class="pull-left"> <img alt=""
                        src="<?php echo base_url();?>public/uploads/students/default.png" class="img-circle" width="40">
                    </a>
                    <div class="media-body">
                        <span class="date pull-right">

                            <?php 
								$time = strtotime($enquiry->date);
								echo date("h:i:a D, d M Y",$time);
							?>
                        </span>
                        <h4 class="text-primary"><?=$enquiry->name;?></h4>
                        <small class="text-muted">From:
                            <?=$enquiry->email;?></small>
                    </div>
                </div>
            </div>





            <div class="view-mail">
                <div>
                               
                                
                                <div class="card">
                                    <div class="card-head card-topline-aqua">
                                        <header>Enquiry Details</header>
                                    </div>
                                    <div class="card-body no-padding height-9">
                                        <ul class="list-group list-group-unbordered">
                                            <li class="list-group-item"  style="border-top:none;" >
                                                <b>Name</b>
                                                <div class="pull-right"><?=$enquiry->name?></div>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Address</b>
                                                <div class="pull-right"><?=$enquiry->address?></div>
                                            </li>
                                             <li class="list-group-item">
                                                <b>Phone</b>
                                                <div class="pull-right"><?=$enquiry->phone?></div>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Gender</b>
                                                <div class="pull-right"><?=$enquiry->gender?></div>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Date of Birth</b>
                                                <div class="pull-right"><?=$enquiry->dob?></div>
                                            </li>
                                            <li class="list-group-item">
                                                <b>E-mail</b>
                                                <div class="pull-right"><?=$enquiry->email?></div>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Parent's Name</b>
                                                <div class="pull-right"><?=$enquiry->p_name?></div>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Parent's Phone</b>
                                                <div class="pull-right"><?=$enquiry->p_phone?></div>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Education Qualification</b>
                                                <div class="pull-right"><?=$enquiry->education_qualification?></div>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Career Field</b>
                                                <div class="pull-right"><?=$enquiry->career_field?></div>
                                            </li>
                                            <li class="list-group-item" style="border-bottom:none;" >
                                                <b>Future Plan</b>
                                                <div class="pull-right"><?=$enquiry->future_plan?></div>
                                            </li>
                                        </ul>
                                        
                                    </div>
                                </div>
                            </div>
            </div>








            <div class="compose-btn pull-left">
                <a href="<?php echo base_url();?>enquiry/remark-send/<?=$enquiry->id;?>" class="btn btn-sm btn-primary"><i
                    class="fa fa-reply"></i> Reply
                </a>

                <a href="<?php echo base_url();?>student/add/<?=$enquiry->id;?>" class="btn btn-sm btn-default">
                    <i class="fa fa-arrow-right"></i> Register Student
                </a>

                <a href="<?php echo base_url();?>enquiry/delete/<?=$enquiry->id;?>" class="btn btn-sm btn-default tooltips" data-original-title="Trash" data-toggle="tooltip" data-placement="top" title="">
                    <i class="fa fa-trash-o"></i>
                </a>
            </div>
        </section>
    </div>
</div>