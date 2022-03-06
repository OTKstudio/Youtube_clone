<!-- 
<?php
    $count = 0;
    $a = 0;
    $s = 0;
    $ff = null;
    foreach($videos as $video):
     $unique_channelId[$count] = $video->channelId();
     $unique_channelTitle[$count] = $video->channelTitle();
     $count++;
     $s+=1;
     $pos = array($count);
    endforeach;
    $result1 = array_unique($unique_channelId);
    $result2 = array_unique($unique_channelTitle);
    $j=0;
    if(isset($_POST['add_channel'])){
      
        while ($a <= $s) {
            if(empty($result2[$a])){
                echo"";
            }else{
                $CIdResult[$j] = $result1[$a];
                $CTleResult[$j] = $result2[$a];
                $j++;
            }
            $a++;
        }
        $x = count($CIdResult);
        $i=0;
        $Count=0;
        while ($i < $x) {
            $tab['cid'] = $CIdResult[$i];
            $tab['ctitle'] = $CTleResult[$i];
            // $this->_adminChannelManager->postChaine($tab);
            $getId =  $this->_adminChannelManager->getVideobyId('all_video','channelid',$CIdResult[$i],'Video');
            $idCount[$i] = count($getId);
            $this->_adminChannelManager->upbyId('channels','videocount',$idCount[$i],'channelid',$CIdResult[$i]);
            $i++;
        }
        $j=0;
        foreach($videos as $video):
            if($video->channelId() == $result1[$j]){
                $ff[$j]=$video->channelTitle();
            }else{
                $tab['cid'] = $result1[$i];
                $tab['ctitle'] = $result1[$i];
                $this->_adminChannelManager->postChaine($tab);
            }
            $j++;
        endforeach;
    }


?> -->
<section class="add_channel">
    <div class="channel_container">
      <form action="" method="post" enctype="multipart/form-data" >
          <div class="row d-flex">
                <div class="col-md-8">
						<div class="table-responsive">
							<table class="table table-border table-striped custom-table datatable mb-0">
								<thead>
									<tr>
										<th>Numero</th>
										<th>ChannelId</th>
										<th>channelTitle</th>
										<th class="text-right">Action</th>
									</tr>
								</thead>
								<tbody>
						<?php

						$count=1;
                        print_r($idCount[0] );
						foreach($channels as $video): ?>
											<tr>
												<td><?= $count ?></td>
												<td><?= $video->channelId() ?></td>
												<td><?= $video->channelTitle() ?></td>
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
			    <div class="col-md-3">
                   <div>
                       <p>Cliquer sur Actualiser lorsque vous venez d'inserer de nouvelle video</p>
                       <button name="add_channel" class="btn btn-primary">Actualiser</button>
                   </div>
				</div>
			</div>
     </form>
    </div>
</section>