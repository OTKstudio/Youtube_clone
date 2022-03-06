<?php 
    $apiManager = new ApiManager;
    $videoManager = new VideoManager;
    $count = 0;
    $userid = "Brecht";

 if(isset($_POST['save'])){
     $channel_id = "UC5husyZ7HE5RN4xrg6WwrcA";
    // $channel_id = $_POST['channel_id'];
    //  $apiManager->saveApi();

     $videoManager->postChaine($tab);

 }

?>

<section class="add_channel">
    <div class="channel_container">
      <form action="" method="post" enctype="multipart/form-data" >
          <div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-border table-striped custom-table datatable mb-0">
								<thead>
									<tr>
										<th>Numero</th>
										<th>ChannelId</th>
										<th>channelTitle</th>
										<th>VideoCount</th>
										<th>AbonneCount</th>
										<th class="text-right">Action</th>
									</tr>
								</thead>
								<tbody>
						<?php
						$count=1;
						foreach($channels as $video): ?>
											<tr>
												<td><?= $count ?></td>
												<td><?= $video->channelId() ?></td>
												<td><?= $video->channelTitle() ?></td>
												<td><?= $video->videoCount() ?></td>
												<td><?= 0 ?></td>
												<td class="text-right">
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="edit-patient.html"><i class="fa fa-pencil m-r-5"></i> Edit</a>
															<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
														</div>
													</div>
												</td>
											</tr>  
						<?php  $count++;endforeach;?>
								</tbody>
							</table>
						</div>
					</div>
          </div>
     </form>
    </div>
</section>