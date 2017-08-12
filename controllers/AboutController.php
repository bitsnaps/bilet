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
use app\models\Like;
use app\models\User;
use app\models\Comment;
use app\models\UserComment;


class AboutController extends \yii\web\Controller
{

	/**
     * Displays homepage.
     *
     * @return string
     */
    public function actionAbout()
    {
		$this->setLanguage();
		
		$id = Yii::$app->session->get('langId');
		
		//here we get id's of current category
		$ids = Yii::$app->request->get('id');
		
		
		if(!is_null($ids)){
			
			$search = false;
			
			$cultural_place = CulturalPlace::find()
											->where(['id' => $ids])
											->all();
			
			//here we get all categories with proper values
			$cultural_place_translation = CulturalPlaceTranslation::find()
																	->where(['language_id' => $id, 'cultural_place_id' => $ids])
																	->all();
			
			//here we get proper shows
			$show = Show::find()
							->where(['cultural_place_id' => $ids])
							->all();
		}else{
			
			$search = true;
			
			//here we get id's of current category
			$s_id = Yii::$app->request->get('s_id');
			
			//here we get proper shows
			$show = Show::find()
							->where(['id' => $s_id])
							->all();
			
			$cultural_place = CulturalPlace::find()
											->where(['id' => $show[0]->cultural_place_id])
											->all();
			
			//here we get all categories with proper values
			$cultural_place_translation = CulturalPlaceTranslation::find()
																	->where(['language_id' => $id, 'cultural_place_id' => $show[0]->cultural_place_id])
																	->all();
			
		}
		
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
        return $this->render('about', [
            'cultural_place' => $cultural_place,
			'cultural_place_translation' => $cultural_place_translation,
			'show' => $show,
			'show_translation' => $show_translation,
			'search' => $search,
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
				
		//here we get id's of current category
		$ids = Yii::$app->request->get('id');//shu gelen show_id
		
		//get like for this show
		$like_count = Like::find()
					->where(['show_id' => $ids, 'like_status' => 1])
					->count();
		
		//here we get proper shows
		$show = Show::find()
							->where(['id' => $ids])
							->all();
		
		//here we get cultural_place_di to get proper cultural_place
		$cultural_pl_id = $show[0]->cultural_place_id;
		$cultural_place = CulturalPlace::find()
											->where(['id' => $cultural_pl_id])
											->all();
		
		$date = Yii::$app->formatter->asDate($show[0]->begin_date, 'php:d.m.Y');
		
		//here we see if show expire or not
		date_default_timezone_set("Asia/Ashgabat");
		$today = Yii::$app->formatter->asDate('now', 'php:d.m.Y');
		
		$time = date('H:i');

		//here we convert server system(php.ini -berlin time-) time to local turkmenistan time
		$local_time = strtotime($time .':00');
			
		$movie_time = strtotime($show[0]->start_hour .':'. $show[0]->start_min. ':00');
		
		if(($today < $date) or ($today === $date and $movie_time > $local_time)){
			//show is not expire yet
			$expire = false;
		}else{
			//show is expire
			$expire = true;
		}
		
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
			'like_count' => $like_count,
			'expire' => $expire,
        ]);
    }
	
	/**
     * Creates a new Comment model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionUserComment()
    {
        $model = new UserComment();

		$ids = Yii::$app->request->get('id');
		
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['about-show', 'id' => $ids]);
        } else {
			$model->show_id = $ids;
            return $this->render('userComment', [
                'model' => $model,
            ]);
        }
    }
	
	/**
     * handles user like or unlike action.
     *
     */
    public function actionLike(){
		
		//here we get id's of current show to be liked
		$id = Yii::$app->request->get('id');
		
		$like = Like::find()
					->where(['show_id' => $id])
					->all();
		
		$user = User::findIdentity(Yii::$app->user->id)->username;
		
		$like_size = sizeof($like);
		$flag = false;
		for($y = 0; $y < $like_size; $y++){
			if($like[$y]->user_id === 1){
				if($like[$y]->like_status === 0){
					Yii::$app->db->createCommand()
												->update(Like::tableName(), ['like_status' => 1], ['user_id' => 1, 'show_id' => $id])
												->execute();
					//udate like_status = 1
				}else{
					Yii::$app->db->createCommand()
												->update(Like::tableName(), ['like_status' => 0], ['user_id' => 1, 'show_id' => $id])
												->execute();
					//update like_status = 0
				}
				
				$flag = true;
			}
		}
		if(!$flag){
			Yii::$app->db->createCommand()
										->insert(Like::tableName(), ['like_status' => 1, 'user_id' => 1, 'show_id' => $id])
										->execute();
			//insert like_status = 1
		}
		return $this->redirect(['about/about-show', 'id' => $id]);
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
