<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\CulturalPlaceTranslation;
use app\models\CulturalPlace;
use app\models\Show;
use app\models\ShowTranslation;

class ShopController extends \yii\web\Controller
{
    public function actionBuyTicket()
    {
		$this->setLanguage();
		
		$id = Yii::$app->session->get('langId');
				
		//here we get id's of current category
		$ids = Yii::$app->request->get('id');
		//Yii::$app->session->set('cultural_place', $cultural_place);
			
		//here we get proper shows
		$show = Show::find()
							->where(['id' => $ids])
							->all();
		
		//here we get all categories with proper values
		$cultural_place = CulturalPlace::find()
											->where(['id' => $show[0]->cultural_place_id])
											->all();
											
		$cultural_place_translation = CulturalPlaceTranslation::find()
																	->where(['language_id' => $id, 'cultural_place_id' => $show[0]->cultural_place_id])
																	->all();
		
		//here we get id's so we can get right translation
		$showSize = sizeof($show);	
		$show_ids = array();
		for($x = 0; $x < $showSize; $x++){
			array_push($show_ids, $show[$x]->id);
		}
		
		$show_translation = ShowTranslation::find()
												->where(['language_id' => $id, 'show_id' => $show_ids])
												->all();
																	
		//here we render the view and pass data
        return $this->render('buy-ticket', [
            'cultural_place' => $cultural_place,
			'cultural_place_translation' => $cultural_place_translation,
			'show' => $show,
			'show_translation' => $show_translation,
        ]);
    }

	public function actionSeat()
    {
		$this->setLanguage();
		
		$id = Yii::$app->request->get('id');
		$cultural_place_id = Yii::$app->request->get('cultural_place_id');
		$cultural_place_category = Yii::$app->request->get('cultural_place_category');
		$show_name = Yii::$app->request->get('show_name');
		$show_time = Yii::$app->request->get('show_time');
		$place_name = Yii::$app->request->get('place_name');
		

		switch($cultural_place_category){
			case 2:
				$url_place = 'site/movie';
				$url_show_time = 'movie/about-movie';
				break;
		} 
		//here we render the view and pass data
        return $this->render('seat', [
            'id' => $id,
			'cultural_place_id' => $cultural_place_id,
			'cultural_place_category' => $cultural_place_category,
			'show_name' => $show_name,
			'show_time' => $show_time,
			'place_name' => $place_name,
			'url_place' => $url_place,
			'url_show_time' => $url_show_time,
        ]);
    }
	
	/**
     * Sets display Language.
     *
     */
    public function setLanguage(){
	
		if(Yii::$app->session->has('lang')){
			if(Yii::$app->session->get('lang') === 'RU'){
				Yii::$app->language = 'ru-RU';
			}else{
				Yii::$app->language = 'tk-TKM';
			}
		}else{
			Yii::$app->language = 'ru-RU';
			Yii::$app->session->set('langId', '1');
		}
    }
}
