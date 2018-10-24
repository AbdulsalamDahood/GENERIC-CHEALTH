
	<div class="inbox-body no-pad table-responsive">
		<table class="table table-inbox table-hover">
			<tbody>
				<?php if(sizeof($remark_details) > 0 ):?>
					<?php foreach($remark_details as $remark_detail):?>
					
					<tr class="read?>">
						<td>
							<a href="#" class="pull-left"> <img alt=""
                        		src="<?php echo base_url();?>public/uploads/students/default.png" class="img-circle" width="40">
                   			 </a>
						</td>
						
						<td>
							<a href="enquiry/remark-view/<?=$remark_detail["id"];?>" class="avatar">
								<span class="bg-success"><?=$remark_detail["name"][0];?></span>
							</a>
						</td>

						<td class="view-message  dont-show"><a href="enquiry/remark-view/<?=$remark_detail["id"];?>"><?=$remark_detail["name"];?></a></td>

						<td class="view-message " ><?=ucfirst($remark_detail["email"]);?></td>

                        <td class="view-message " ><?=ucfirst($remark_detail["course"]);?></td>

						<td class="view-message  inbox-small-cells"><a href="enquiry/delete-remark/<?=$remark_detail["id"];?>"> <i class="fa fa-trash-o"></i> </a>
						</td>
						
						<td class="view-message " >
							<?php 
								$time = strtotime($remark_detail["date"]);
								echo date("D, d M Y",$time);
							?>
						</td>
						<td class="view-message  text-right">
						<?php 
							$time = strtotime($remark_detail["date"]);
							echo date("h : i a",$time);
						?>
						</td>	
					</tr>
					
					<?php endforeach;?>
				<?php endif;?>

				<?php if(sizeof($remark_details) < 1 ):?>
                    <div>No Remark Found</div>
                <?php endif;?>
			</tbody>
		</table>
	</div>
