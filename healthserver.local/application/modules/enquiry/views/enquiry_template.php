<div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title"><?=$main_title;?></div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url();?>dashboard">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
								<?php
									if($title == "Enquiry"){
										echo '<li class="active">Enquiry</li>';
									}else{
										echo '<li><i class="fa fa-list"></i>&nbsp;<a class="parent-item" href="'. base_url().'Enquiry">Enquiry</a>&nbsp;<i class="fa fa-angle-right"></i></li>';
										$scatter = explode("-",$title);
										echo '<li class="active">'.$scatter[1].'</li>';
									}
								?>
                            </ol>
                        </div>
                    </div>
                      <div class="row">
                        <div class="col-md-12">
                            <div class="card card-topline-gray">
                                <div class="card-body no-padding height-9">
									<div class="inbox">
				                       <div class="row">
				                            <div class="col-md-3">
				                                <div class="inbox-sidebar">
				                                    <span data-title="Compose" class="btn red compose-btn btn-block">
				                                        <i class="fa fa-edit"></i> Enquiry </span>
				                                    <ul class="inbox-nav inbox-divider">
				                                        <li class="<?php if($title == "Enquiry"){echo "active";}?>"><a href="<?php echo base_url();?>enquiry"><i
																class="fa fa-inbox"></i> Enquiries 
																<?php if(isset($unread_enquiries)):?>
																<span
																class="label mail-counter-style label-danger pull-right"><?=$unread_enquiries;?></span>
																<?php endif;?>
																</a>
				                                        </li>
				                                        <li class="<?php if($title == "Enquiry - Remark"){echo "active";}?>"><a href="<?php echo base_url();?>enquiry/remark"><i
																class="fa fa-envelope"></i> Remark </a>
				                                        </li>
				                                        
				                                        <li class="<?php if($title == "Enquiry - Draft"){echo "active";}?>" ><a href="<?php echo base_url();?>enquiry/draft"><i
																class=" fa fa-external-link"></i> Drafts 
																	<?php if(isset($remark_draft)):?>
																		<span
																		class="label mail-counter-style label-info pull-right"><?=$remark_draft;?></span>
																	<?php endif;?>
															</a>
				                                        </li>
				                                        <li class="<?php if($title == "Enquiry - Trash"){echo "active";}?>" ><a href="<?php echo base_url();?>enquiry/trash"><i
																class=" fa fa-trash-o"></i> Trash

																	<?php if(isset($deleted_enquiries)):?>
																	<span
																	class="label mail-counter-style label-danger pull-right"><?=$deleted_enquiries;?></span>
																	<?php endif;?>

																</a>
				                                        </li>
				                                    </ul>
				                                </div>
				                            </div>


				                            <div class="col-md-9 scrollable">
				                                
                                            <?php
                                                $this->load->view($email_template);
                                            ?>


				                            </div>
				                        </div> 
                        			</div>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>