<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\CulturalPlaceTranslation;
use app\models\CulturalPlace;
use app\models\Show;
use app\models\ShowTranslation;
use app\models\Comment;

class MovieController extends Controller
{
	
	/**
     * Displays homepage.
     *
     * @return string
     */
    public function actionAboutMovie()
    {
		$this->setLanguage();
		
		$id = Yii::$app->session->get('langId');
		
		$cultural_place = CulturalPlace::find()
											->where(['category_id' => '2'])
											->all();
				
		//here we get id's of current category
		$ids = Yii::$app->request->get('id');
		//Yii::$app->session->set('cultural_place', $cultural_place);
				
		//here we get all categories with proper values
		$cultural_place_translation = CulturalPlaceTranslation::find()
																	->where(['language_id' => $id, 'cultural_place_id' => $ids])
																	->all();
		
		//here we get proper shows
		$show = Show::find()
							->where(['cultural_place_id' => $ids])
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
        return $this->render('aboutMovie', [
            'cultural_place' => $cultural_place,
			'cultural_place_translation' => $cultural_place_translation,
			'show' => $show,
			'show_translation' => $show_translation,
        ]);
    }
	
	/**
     * Displays homepage.
     *
     * @return string
     */
    public function actionAboutShow()
    {
		$this->setLanguage();
		
		$id = Yii::$app->session->get('langId');
		
		$cultural_place = CulturalPlace::find()
											->where(['category_id' => '2'])
											->all();
				
		//here we get id's of current category
		$ids = Yii::$app->request->get('id');
		//Yii::$app->session->set('cultural_place', $cultural_place);
			
		//here we get proper shows
		$show = Show::find()
							->where(['id' => $ids])
							->all();
		
		$comment = Comment::find()
								->where(['show_id' => $ids])
								->all();
								
		//here we get all categories with proper values
		$cultural_place_translation = CulturalPlaceTranslation::find()
																	->where(['language_id' => $id, 'cultural_place_id' => $show[0]->cultural_place_id])
																	->all();
		
		$show_translation = ShowTranslation::find()
												->where(['language_id' => $id, 'show_id' => $show[0]->id])
												->all();
												
		$all_shows_translation = ShowTranslation::find()
											->where(['language_id' => $id, 'show_name' => $show_translation[0]->show_name])
											->all();
											
		$show_size = sizeof($all_shows_translation);	
		$show_ids = array();
		for($x = 0; $x < $show_size; $x++){
			array_push($show_ids, $all_shows_translation[$x]->show_id);
		}
		
		//here we get proper shows
		$all_shows = Show::find()
							->where(['id' => $show_ids])
							->all();
								
		//here we render the view and pass data
        return $this->render('aboutShow', [
            'cultural_place' => $cultural_place,
			'cultural_place_translation' => $cultural_place_translation,
			'show' => $show,
			'show_translation' => $show_translation,
			'all_shows' => $all_shows,
			'comment' => $comment,
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