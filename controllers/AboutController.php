<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\db\Query;
use yii\data\Pagination;
use app\models\CulturalPlaceTranslation;
use app\models\CulturalPlace;
use app\models\Show;
use app\models\ShowTranslation;
use app\models\Like;
use app\models\User;
use app\models\Comment;
use app\models\UserComment;
use app\models\Ticket;


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
		
		//Yii::$app->request->userIP;
		
		//here we get todays date
		$today = Yii::$app->formatter->asDate('now', 'php:Y-m-d');
		if(!is_null($ids)){
			$search = false;
			
			//here we get all categories with proper values
			$cultural_place_translation = CulturalPlaceTranslation::find()
																		->joinWith('culturalPlace')
																		->where([
																					'cultural_place_translation.language_id' => $id, 
																					'cultural_place_translation.cultural_place_id' => $ids
																				])->one();
			
			if($cultural_place_translation === null){
				throw new \yii\web\HttpException(404, \Yii::t('app', 'The requested Item could not be found.'));
			}
			
			$query = ShowTranslation::find()
											->joinWith('show')
											->where([
														'show_translation.language_id' => $id, 
														'show.cultural_place_id' => $ids
													])
											->andWhere(['>=', 'end_date', $today]);
			
			//here we get all categories with proper values
			/*$query->select(['show_translation.*', 'show.*', 'cultural_place.category_id', 'cultural_place_translation.place_name', 'cultural_place_translation.cultural_place_description'])
								->from('show_translation')
								->join('LEFT JOIN', 'show', 'show_translation.show_id = show.id')
								->join('LEFT JOIN', 'cultural_place', 'cultural_place.id = show.cultural_place_id')
								->join('LEFT JOIN', 'cultural_place_translation', 
										'cultural_place_translation.cultural_place_id = cultural_place.id 
											AND cultural_place_translation.language_id = show_translation.language_id')
								->where([
											'show_translation.language_id' => $id, 
											'show.cultural_place_id' => $ids
										])
								->andWhere(['>=', 'end_date', $today]);*/
			
		}else{// here we get data according to search
			$search = true;
			//here we get id's of current category
			$s_id = Yii::$app->request->get('s_id');
			
			$cat_id = Show::findOne($s_id);
			
			if($cat_id === null){
				throw new \yii\web\HttpException(404, \Yii::t('app', 'The requested Item could not be found.'));
			}
			
			//here we get all categories with proper values
			$cultural_place_translation = CulturalPlaceTranslation::find()
																		->joinWith('culturalPlace')
																		->where([
																					'cultural_place_translation.language_id' => $id, 
																					'cultural_place_translation.cultural_place_id' => $cat_id->id
																				])->one();
			
			$query = ShowTranslation::find()
											->joinWith('show')
											->where([
														'show_translation.language_id' => $id, 
														'show.id' => $cat_id->id
													]);
			
			/*$query->select(['show_translation.*', 'show.*', 'cultural_place.category_id', 'cultural_place_translation.place_name', 'cultural_place_translation.cultural_place_description'])
								->from('show_translation')
								->join('LEFT JOIN', 'show', 'show_translation.show_id = show.id')
								->join('LEFT JOIN', 'cultural_place', 'cultural_place.id = show.cultural_place_id')
								->join('LEFT JOIN', 'cultural_place_translation', 
										'cultural_place_translation.cultural_place_id = cultural_place.id 
											AND cultural_place_translation.language_id = show_translation.language_id')
								->where([
											'show_translation.language_id' => $id, 
											'show.id' => $s_id
										]);*/
		}
		
		$countQuery = clone $query;
		$totalCount = $countQuery->count();
		$pages = new Pagination(['totalCount' => $totalCount]);
		$pages->setPageSize(3);
		$show_translations = $query->offset($pages->offset)
														->limit($pages->limit)//$pages->limit
														->all();
			
			
		//here we render the view and pass data
		return $this->render('about', [
										'show_translations' => $show_translations,
										'cultural_place_translation' => $cultural_place_translation,
										'pages' => $pages,
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
												
		$query = new Query;
		$query->select(['show_translation.*', 'show.*', 'cultural_place.category_id', 'cultural_place_translation.place_name'])
								->from('show_translation')
								->join('LEFT JOIN', 'show', 'show_translation.show_id = show.id')
								->join('LEFT JOIN', 'cultural_place', 'cultural_place.id = show.cultural_place_id')
								->join('LEFT JOIN', 'cultural_place_translation', 
										'cultural_place_translation.cultural_place_id = cultural_place.id 
											AND cultural_place_translation.language_id = show_translation.language_id')
								->where([
											'show_translation.language_id' => $id, 
											'show.id' => $ids
										]);
		$data = $query->one();
		
		if($data === null or $data === ''){
			throw new \yii\web\HttpException(404, \Yii::t('app', 'The requested Item could not be found.'));
		}
		
		//get like for this show
		$like_count = Like::find()
					->where(['show_id' => $ids, 'like_status' => 1])
					->count();
		
		$comment = Comment::find()
								->where(['show_id' => $ids])
								->all();
		
		$all_shows_translation = ShowTranslation::find()
											->where(['language_id' => $id, 'show_name' => $data['show_name']])
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
			'all_shows' => $all_shows,
			'comment' => $comment,
			'like_count' => $like_count,
			'data' => $data,
        ]);
    }
	
	/**
     * Creates a new Comment model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionUserComment()
    {
		$this->setLanguage();
		
        $model = new UserComment();

		$ids = Yii::$app->request->get('id');
		
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
			
            return $this->redirect(['about-show', 'id' => $ids]);
			
        } else {
			
			$model->show_id = $ids;
			$model->user_id = Yii::$app->user->identity->id;
			$model->name = Yii::$app->user->identity->username;
			
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
		$user_id = Yii::$app->user->identity->id;
		
		$like = Like::find()
					->where(['show_id' => $id, 'user_id' => $user_id])
					->one();
		
		
		if($like !== null){
			
			if($like->like_status === 0){
				$like->like_status = 1;
			}else{
				$like->like_status = 0;
			}
			
			$like->update();
			
		}else{
			$like = new Like();
			$like->like_status = 1;
			$like->user_id = $user_id;
			$like->show_id = $id;
			$like->save();
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
