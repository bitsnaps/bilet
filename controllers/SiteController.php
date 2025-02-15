<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use app\models\LoginForm;
use app\models\SearchForm;
use app\models\ContactForm;
use app\models\SubscribeForm;
use app\models\CulturalPlaceTranslation;
use app\models\CulturalPlace;
use app\models\Show;
use app\models\ShowTranslation;
use app\models\ShowCategoryTranslation;
use app\models\Like;
use app\models\User;
use app\models\Article;
use app\models\ArticleTranslation;
use app\models\ArticleCategory;
use app\models\ArticleCategoryTranslation;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
		
    }

	
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
		$this->setLanguage();
		$id = Yii::$app->session->get('langId');
		
		date_default_timezone_set("Asia/Ashgabat");
		$date_string = Yii::$app->formatter->asDate('now', 'php:Y-m-d') .' 00:00:00';

		//here we get db data about articles news etc.
		$news = Article::find()
								->where(['article_category_id' => 1])
								->all();
		
		//here we get id's so we can get right translation
		$news_size = sizeof($news);	
		$news_ids = array();
		for($n = 0; $n < $news_size; $n++){
			array_push($news_ids, $news[$n]->id);
		}
		
		$news_translation = ArticleTranslation::find()
													->where(['language_id' => $id, 'article_id' => $news_ids])
													->all();
		
		$information = Article::find()
								->where(['article_category_id' => 2])
								->all();
		
		//here we get id's so we can get right translation
		$information_size = sizeof($information);	
		$information_ids = array();
		for($i = 0; $i < $information_size; $i++){
			array_push($information_ids, $information[$i]->id);
		}
		
		$information_translation = ArticleTranslation::find()
													->where(['language_id' => $id, 'article_id' => $information_ids])
													->all();
		
		$advantage = Article::find()
								->where(['article_category_id' => 3])
								->all();
		
		
		//here we get id's so we can get right translation
		$advantage_size = sizeof($advantage);	
		$advantage_ids = array();
		for($a = 0; $a < $advantage_size; $a++){
			array_push($advantage_ids, $advantage[$a]->id);
		}
		
		$advantage_translation = ArticleTranslation::find()
													->where(['language_id' => $id, 'article_id' => $advantage_ids])
													->all();
		
		
		/*$article_category = ArticleCategory::find()
												->where([ ])
												->all();
		
		$article_category_translation = ArticleCategoryTranslation::find()
																		->where(['language_id' => $id, ])
																		->all();*/
		//here we gonna get show for main page as ads
		$show = Show::find()
							->where(['id' => [1, 2, 3, 4]])
							->andWhere(['>', 'begin_date', $date_string])
							->all();
		
		$show_size = sizeof($show);
		if($show_size > 0){
			$show_category = array();
			
			$show_category_1 = ShowCategoryTranslation::find()
													->where(['show_category_id' => $show[0]->show_category_id, 'language_id' => $id])
													->one();
		
			array_push($show_category, $show_category_1);
			
			$show_category_2 = ShowCategoryTranslation::find()
													->where(['show_category_id' => $show[1]->show_category_id, 'language_id' => $id])
													->one();
			array_push($show_category, $show_category_2);
			
			$show_category_3 = ShowCategoryTranslation::find()
													->where(['show_category_id' => $show[2]->show_category_id, 'language_id' => $id])
													->one();
			array_push($show_category, $show_category_3);
			
			$show_category_4 = ShowCategoryTranslation::find()
													->where(['show_category_id' => $show[3]->show_category_id, 'language_id' => $id])
													->one();
			array_push($show_category, $show_category_4);
			
			$show_translation = ShowTranslation::find()
													->where(['language_id' => $id, 'show_id' => [1, 2, 3, 4]])
													->all();
		
			//get like for this show
			$like_count = array();
			$like_count_1 = Like::find()
						->where(['show_id' => 1, 'like_status' => 1])
						->count();
			array_push($like_count, $like_count_1);
			
			$like_count_2 = Like::find()
						->where(['show_id' => 2, 'like_status' => 1])
						->count();
			array_push($like_count, $like_count_2);
			
			$like_count_3 = Like::find()
						->where(['show_id' => 3, 'like_status' => 1])
						->count();
			array_push($like_count, $like_count_3);
			
			$like_count_4 = Like::find()
						->where(['show_id' => 4, 'like_status' => 1])
						->count();
			array_push($like_count, $like_count_4);
		
		}else{
			$show_category = 0;
			$show_translation = 0;
			$like_count = 0;
		}
		
		
		//here we gonna get exhibitions for main page as ads
		$exhibition = Show::find()
								->where(['cultural_place_id' => 5])
								->andWhere(['>=', 'begin_date', $date_string])
								->all();
		
		$exhibition_size = sizeof($exhibition);
		
		$exhibition_ids = array();
		for($e = 0; $e < $exhibition_size; $e++){
			array_push($exhibition_ids, $exhibition[$e]->id);
		}
		
		$exhibition_translation = ShowTranslation::find()
													->where(['language_id' => $id, 'show_id' => $exhibition_ids])
													->all();
		
		return $this->render('index', [
										'news' => $news,
										'information' => $information,
										'advantage' => $advantage,
										'news_translation' => $news_translation, 
										'information_translation' => $information_translation, 
										'advantage_translation' => $advantage_translation,
										'show' => $show,
										'show_translation' => $show_translation,
										'show_category' => $show_category,
										'exhibition' => $exhibition,
										'exhibition_translation' => $exhibition_translation,
										'like_count' => $like_count,
										]);
    }
	
	/**
     * Displays movie main page.
     *
     * @return string
     */
    public function actionList()
    {
		$this->setLanguage();
		
		$id = Yii::$app->session->get('langId');
		
		//here we get id's of current category
		$p_id = Yii::$app->request->get('p_id');
		
		if($p_id !== null){
			
			$cat_id = CulturalPlace::findOne($p_id);
			
			if($cat_id !== null){
				$category_id = $cat_id->category_id;
			}else{
				throw new \yii\web\HttpException(404, \Yii::t('app', 'The requested Item could not be found.'));
			}
			
			//here we get all categories with proper values
			$query = CulturalPlaceTranslation::find()
													->joinWith('culturalPlace')
													->where([
																'cultural_place_translation.language_id' => $id, 
																'cultural_place_translation.cultural_place_id' => $p_id
															]);
			
		}else{
			
			//here we get category id
			$category_id = Yii::$app->request->get('id');
			
			$cat_id = CulturalPlace::find()->where(['category_id' => $category_id])->one();
			
			if($cat_id !== null){
				$category_id = $cat_id->category_id;
			}else{
				throw new \yii\web\HttpException(404, \Yii::t('app', 'The requested Item could not be found.'));
			}
			
			//here we get all categories with proper values
			$query = CulturalPlaceTranslation::find()
													->joinWith('culturalPlace')
													->where([
																'cultural_place_translation.language_id' => $id, 
																'cultural_place.category_id' => $category_id
															]);
		}
		
		$countQuery = clone $query;
		$totalCount = $countQuery->count();
		$pages = new Pagination(['totalCount' => $totalCount]);
		$pages->setPageSize(4);
		$cultural_place_translations = $query->offset($pages->offset)
			->limit($pages->limit)//$pages->limit
			->all();

		switch($category_id){
			case 2:
				$title = \Yii::t('app', 'MOVIE');
				$page_title = \Yii::t('app', 'Movie theatres of the city Ashgabat');
				break;
			case 3:
				$title = \Yii::t('app', 'THEATRE');
				$page_title = \Yii::t('app', 'Theatres of the city Ashgabat');
				break;
			case 4:
				$title = \Yii::t('app', 'EXHIBITION');
				$page_title = \Yii::t('app', 'Exhibitions of the city Ashgabat');
				break;
			case 5:
				$title = \Yii::t('app', 'CONCERT');
				$page_title = \Yii::t('app', 'Concerts of the city Ashgabat');
				break;
			case 6:
				$title = \Yii::t('app', 'CHILDREN');
				$page_title = \Yii::t('app', 'Childrens of the city Ashgabat');
				break;
			case 7:
				$title = \Yii::t('app', 'SPORT');
				$page_title = \Yii::t('app', 'Sport of the city Ashgabat');
				break;
			default:
				throw new \yii\web\HttpException(404, \Yii::t('app', 'The requested Item could not be found.'));
		}
		
		return $this->render('list', [
			 'title' => $title,
			 'page_title' => $page_title,
			 'pages' => $pages,
			 'cultural_place_translations' => $cultural_place_translations,
		]);
		
    }
	
	/**
     * Displays news page.
     *
     * @return Response|string
     */
    public function actionNews()
    {
		$this->setLanguage();
		$id = Yii::$app->session->get('langId');
		$article_id = Yii::$app->request->get('id');
		

		$query = ArticleTranslation::find()
										->joinWith('article')
										->where([
													'article_translation.language_id' => $id, 
													'article.article_category_id' => 1
												]);
		
		//here we get all categories with proper values
		$article_translation = ArticleTranslation::find()
													->joinWith('article')
													->where([
																'article_translation.language_id' => $id, 
																'article_translation.article_id' => $article_id,
																'article.article_category_id' => 1
															])
													->one();
		
		$totalCount = $query->count();
		$all_article = $query->all();
		
		return $this->render('news', [
			 'all_article' => $all_article,
			 'article_translation' => $article_translation,
			 'total_count' => $totalCount,
		]);
    }
	
	/**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
		$this->setLanguage();
		
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }
	
    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
		$this->setLanguage();
		
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
		$this->setLanguage();
		
        Yii::$app->user->logout();

        return $this->goHome();
    }


	/**
     * Handles subscribe footer.
     *
     * @return Response|string
     */
    public function actionSubscribe()
    {
		$this->setLanguage();
		
        $model = new SubscribeForm();
        if ($model->load(Yii::$app->request->post()) && $model->subscriberContact('welcome')) {
            Yii::$app->session->setFlash('subscribeFormSubmitted');

            return $this->refresh();
        }
        return $this->render('subscribe', [
            'model' => $model,
        ]);
    }
	
	
	/**
     * Handles language toggle button action.
     *
     * @return string
     */
    public function actionTranslate(){
	
		if(Yii::$app->request->get('lang') === 'RU'){
			
			Yii::$app->session->set('lang', 'RU');
			Yii::$app->session->set('langId', '1');
			
			Yii::$app->language = 'ru-RU';
		}
		if(Yii::$app->request->get('lang') === 'TM'){
			
			Yii::$app->session->set('lang', 'TM');
			Yii::$app->session->set('langId', '2');
			
			Yii::$app->language = 'tk-TKM';
		}
		
        return $this->goHome();
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
