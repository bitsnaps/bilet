<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\SubscribeForm;
use app\models\CulturalPlaceTranslation;
use app\models\CulturalPlace;

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

        return $this->render('index');
    }
	
	/**
     * Displays movie main page.
     *
     * @return string
     */
    public function actionMovie()
    {
		$this->setLanguage();
		
		$id = Yii::$app->session->get('langId');
		
				$cultural_place = CulturalPlace::find()
													->where(['category_id' => '2'])
													->all();
				
				//here we get id's of current category
				$placeSize = sizeof($cultural_place);	
				$ids = array();
				for($x = 0; $x < $placeSize; $x++){
					array_push($ids, $cultural_place[$x]->id);
				}
				//Yii::$app->session->set('cultural_place', $cultural_place);
				
				//here we get all categories with proper values
				$cultural_place_translation = CulturalPlaceTranslation::find()
																		->where(['language_id' => $id, 'cultural_place_id' => $ids])
																		->all();
		
		//$model = new CulturalPlaceTranslation();
        return $this->render('movie', [
            'cultural_place' => $cultural_place,
			'cultural_place_translation' => $cultural_place_translation,
        ]);
    }

	/**
     * Displays Theatre main page.
     *
     * @return string
     */
    public function actionTheatre()
    {
		$this->setLanguage();
		
		$id = Yii::$app->session->get('langId');
		
				$cultural_place = CulturalPlace::find()
													->where(['category_id' => '3'])
													->all();
				
				//here we get id's of current category
				$placeSize = sizeof($cultural_place);	
				$ids = array();
				for($x = 0; $x < $placeSize; $x++){
					array_push($ids, $cultural_place[$x]->id);
				}
				//Yii::$app->session->set('cultural_place', $cultural_place);
				
				//here we get all categories with proper values
				$cultural_place_translation = CulturalPlaceTranslation::find()
																		->where(['language_id' => $id, 'cultural_place_id' => $ids])
																		->all();
		
		//$model = new CulturalPlaceTranslation();
        return $this->render('theatre', [
            'cultural_place' => $cultural_place,
			'cultural_place_translation' => $cultural_place_translation,
        ]);
    }
	
	/**
     * Displays Exhibitions main page.
     *
     * @return string
     */
    public function actionExhibition()
    {
		$this->setLanguage();
		
		$id = Yii::$app->session->get('langId');
		
				$cultural_place = CulturalPlace::find()
													->where(['category_id' => '4'])
													->all();
				
				//here we get id's of current category
				$placeSize = sizeof($cultural_place);	
				$ids = array();
				for($x = 0; $x < $placeSize; $x++){
					array_push($ids, $cultural_place[$x]->id);
				}
				//Yii::$app->session->set('cultural_place', $cultural_place);
				
				//here we get all categories with proper values
				$cultural_place_translation = CulturalPlaceTranslation::find()
																		->where(['language_id' => $id, 'cultural_place_id' => $ids])
																		->all();
		
		//$model = new CulturalPlaceTranslation();
        return $this->render('exhibition', [
            'cultural_place' => $cultural_place,
			'cultural_place_translation' => $cultural_place_translation,
        ]);
    }
	
	/**
     * Displays Concert main page.
     *
     * @return string
     */
    public function actionConcert()
    {
		$this->setLanguage();
		
		$id = Yii::$app->session->get('langId');
		
				$cultural_place = CulturalPlace::find()
													->where(['category_id' => '5'])
													->all();
				
				//here we get id's of current category
				$placeSize = sizeof($cultural_place);	
				$ids = array();
				for($x = 0; $x < $placeSize; $x++){
					array_push($ids, $cultural_place[$x]->id);
				}
				//Yii::$app->session->set('cultural_place', $cultural_place);
				
				//here we get all categories with proper values
				$cultural_place_translation = CulturalPlaceTranslation::find()
																		->where(['language_id' => $id, 'cultural_place_id' => $ids])
																		->all();
		
		//$model = new CulturalPlaceTranslation();
        return $this->render('concert', [
            'cultural_place' => $cultural_place,
			'cultural_place_translation' => $cultural_place_translation,
        ]);
    }
	
	/**
     * Displays Children main page.
     *
     * @return string
     */
    public function actionChildren()
    {
		$this->setLanguage();
		
		$id = Yii::$app->session->get('langId');
		
				$cultural_place = CulturalPlace::find()
													->where(['category_id' => '6'])
													->all();
				
				//here we get id's of current category
				$placeSize = sizeof($cultural_place);	
				$ids = array();
				for($x = 0; $x < $placeSize; $x++){
					array_push($ids, $cultural_place[$x]->id);
				}
				//Yii::$app->session->set('cultural_place', $cultural_place);
				
				//here we get all categories with proper values
				$cultural_place_translation = CulturalPlaceTranslation::find()
																		->where(['language_id' => $id, 'cultural_place_id' => $ids])
																		->all();
		
		//$model = new CulturalPlaceTranslation();
        return $this->render('children', [
            'cultural_place' => $cultural_place,
			'cultural_place_translation' => $cultural_place_translation,
        ]);
    }
	
	/**
     * Displays Sport main page.
     *
     * @return string
     */
    public function actionSport()
    {
		$this->setLanguage();
		
		$id = Yii::$app->session->get('langId');
		
				$cultural_place = CulturalPlace::find()
													->where(['category_id' => '7'])
													->all();
				
				//here we get id's of current category
				$placeSize = sizeof($cultural_place);	
				$ids = array();
				for($x = 0; $x < $placeSize; $x++){
					array_push($ids, $cultural_place[$x]->id);
				}
				//Yii::$app->session->set('cultural_place', $cultural_place);
				
				//here we get all categories with proper values
				$cultural_place_translation = CulturalPlaceTranslation::find()
																		->where(['language_id' => $id, 'cultural_place_id' => $ids])
																		->all();
		
        return $this->render('sport', [
            'cultural_place' => $cultural_place,
			'cultural_place_translation' => $cultural_place_translation,
        ]);
    }
	
	 /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
		$this->setLanguage();
		
        return $this->render('about');
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
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
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
			
			\Yii::$app->language = 'ru-RU';
		}
		if(Yii::$app->request->get('lang') === 'TM'){
			
			Yii::$app->session->set('lang', 'TM');
			Yii::$app->session->set('langId', '2');
			
			\Yii::$app->language = 'tk-TKM';
		}
		
		
        return $this->render('index');
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
