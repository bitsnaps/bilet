<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

?>

<!-- main body contents starts here-->
<div class="container" style="margin-top: 2%;">
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
			
				<!-- here is for loop for place search, if there is value we will display it -->
				<?php 
					
					$place_size = sizeof($cultural_place_translation);
					for($p = 0; $p < $place_size; $p++):
					
					$description = substr($cultural_place_translation[$p]->cultural_place_description, 0, 300);
				?>
				<?php if ($place_size > 0): ?>
				
					<?php 
					
						$place_size2 = sizeof($cultural_place);
						for($p1 = 0; $p1 < $place_size2; $p1++){
							if($cultural_place[$p1]->id === $cultural_place_translation[$p]->cultural_place_id){
								$img_path = $cultural_place[$p1]->image_name;
								
								switch($cultural_place[$p1]->category_id){
									case 2:
										$url = ['site/movie', 'p_id' => $cultural_place[$p1]->id];
										break;
									case 3:
										$url = ['site/theatre', 'p_id' => $cultural_place[$p1]->id];
										break;
									case 4:
										$url = ['site/exhibition', 'p_id' => $cultural_place[$p1]->id];
										break;
									case 5:
										$url = ['site/concert', 'p_id' => $cultural_place[$p1]->id];
										break;
									case 6:
										$url = ['site/children', 'p_id' => $cultural_place[$p1]->id];
										break;
									case 7:
										$url = ['site/sport', 'p_id' => $cultural_place[$p1]->id];
										break;
								}
							}
						}
					?>
					<div class="row">
						<div class="col-md-12" style="background-color: whitesmoke;">
							<div class="col-md-4 img-responsive">
								<img class="img-responsive img-rounded" style="width: 80%;" src="img/<?= $img_path; ?>.jpg" alt="<?= $cultural_place_translation[$p]->place_name; ?>Photo" />
							</div>
							<div class="col-md-8">
								<h4 class="text-center">
									<?= Html::a(Html::encode($cultural_place_translation[$p]->place_name), $url) ?>
								</h4>
								<p style="padding-top:2%;"><?= $description, ' ...'; ?></p>
							</div>
						</div>
						</div>
					<hr />
				<?php endif; ?>
				
				<?php endfor;?>
				
				<!-- here is for loop for shows, if there is some value we will display it -->
				<?php 
					
					$show_size = sizeof($show_translation);
					for($s = 0; $s < $show_size; $s++):
					
					$show_description = substr($show_translation[$s]->show_description, 0, 300);
				?>
				<?php if ($show_size > 0): ?>
				
					<?php 
					
						$show_size2 = sizeof($show);
						for($s2 = 0; $s2 < $show_size2; $s2++){
							if($show[$s2]->id === $show_translation[$s]->show_id){
								$show_img_path = $show[$s2]->image_name;
								
								for($p3 = 0; $p3 < $place_size2; $p3++){
									if($cultural_place[$p3]->id === $show[$s2]->cultural_place_id){
										switch($cultural_place[$p3]->category_id){
											case 2:
												$show_url = ['movie/about-movie', 's_id' => $show[$s2]->id];
												break;
											case 3:
												$show_url = ['theatre/about-theatre', 's_id' => $show[$s2]->id];
												break;
											case 4:
												$show_url = ['exhibition/about-exhibition', 's_id' => $show[$s2]->id];
												break;
											case 5:
												$show_url = ['concert/about-concert', 's_id' => $show[$s2]->id];
												break;
											case 6:
												$show_url = ['children/about-children', 's_id' => $show[$s2]->id];
												break;
											case 7:
												$show_url = ['sport/about-sport', 's_id' => $show[$s2]->id];
												break;
										}
									}
								}
							}
						}
					?>
					
					<div class="row">
						<div class="col-md-12" style="background-color: whitesmoke;">
							<div class="col-md-4">
								<img class="img-responsive img-rounded" style="width: 80%;" src="img/<?= $show_img_path; ?>" alt="<?= $show_translation[$s]->show_name; ?>Photo" />
							</div>
							<div class="col-md-8">
								<h4 class="text-center">
									<?= Html::a(Html::encode($show_translation[$s]->show_name), $show_url) ?>
								</h4>
								<p style="padding-top:2%;"><?= $show_description, ' ...'; ?></p>
							</div>
						</div>
					</div>
					<hr />
				
				<?php endif; ?>
				
				<?php endfor;?>
            
		</div>
    </div>
</div> <!-- /container -->