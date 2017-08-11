<?php

namespace app\controllers;

use Yii;
use app\models\SearchForm;
use app\models\CulturalPlaceTranslation;
use app\models\CulturalPlace;
use app\models\Show;
use app\models\ShowTranslation;

class SearchController extends \yii\web\Controller
{
    public function actionIndex()
    {	
		$this->setLanguage();
		$id = Yii::$app->session->get('langId');
		$search = Yii::$app->session->get('search');
		
		//here we search all needed tables for given search string
		$cultural_place_translation = CulturalPlaceTranslation::find()
																	->where(['like', 'place_name', $search, 'language_id' => $id])
																	->all();
	    
		$show_translation = ShowTranslation::find()
												->where(['like', 'show_name', $search, 'language_id' => $id])
												->all();
		
		//here we get id's so we can get right translation
		$place_size = sizeof($cultural_place_translation);	
		$cultural_place_ids = array();
		for($x = 0; $x < $place_size; $x++){
			array_push($cultural_place_ids, $cultural_place_translation[$x]->cultural_place_id);
		}
		
		$cultural_place = CulturalPlace::find()
											->where(['id' => $cultural_place_ids])
											->all();
        
		
		//here we get id's so we can get right translation
		$show_size = sizeof($show_translation);	
		$show_ids = array();
		for($s = 0; $s < $show_size; $s++){
			array_push($show_ids, $show_translation[$s]->show_id);
		}
		
		$show = Show::find()
						->where(['id' => $show_ids])
						->all();
		
		return $this->render('index', [
            'cultural_place_translation' => $cultural_place_translation,
			'cultural_place' => $cultural_place,
			'show_translation' => $show_translation,
			'show' => $show,
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
