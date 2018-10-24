
	<div class="inbox-body no-pad table-responsive">
		<table class="table table-inbox table-hover">
			<tbody>
				<?php if($deleted_enquiries > 0 ):?>
					<?php foreach($enquiries as $enquiry):?>
					
					<tr class="<?php if($enquiry->enquiry_status == 0){echo "unread";}else{echo "read";}?>">
						<td>
							<a href="#" class="pull-left"> <img alt=""
                        		src="<?php echo base_url();?>public/uploads/students/default.png" class="img-circle" width="40">
                   			 </a>
						</td>
						<td>
							<a class="avatar">
								<span class="<?php if($enquiry->enquiry_status == 0){echo "bg-danger";}else{echo "bg-success";}?>"><?=$enquiry->name[0];?></span>
							</a>
						</td>
						<td class="view-message  dont-show"><a><?=$enquiry->name;?></a></td>
						<td class="view-message " ><?=ucfirst($enquiry->email);?></td>
						<td class="view-message  inbox-small-cells"><a href="enquiry/restore/<?=$enquiry->id;?>"> <i class="fa fa-refresh"></i> </a>
						</td>
						<td class="view-message " >
							<?php 
								$time = strtotime($enquiry->date);
								echo date("D, d M Y",$time);
							?>
						</td>
						<td class="view-message  text-right">
						<?php 
							$time = strtotime($enquiry->date);
							echo date("H : i a",$time);
						?>
						</td>	
					</tr>
					
					<?php endforeach;?>
				<?php endif;?>

                <?php if($deleted_enquiries < 1 ):?>
                    <div>To Deleted Enquiry Found</div>
                <?php endif;?>

			</tbody>
		</table>
	</div>