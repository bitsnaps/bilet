<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Order;
use app\models\SeatForm;

class ShopController extends \yii\web\Controller
{
    public function actionBuyTicket()
    {
		$this->setLanguage();
		
		$lang_id = Yii::$app->session->get('langId');
				
		//here we get id's of current category
		$show_id = Yii::$app->request->get('id');
		
		
		$email = 'shagy@gmail.com';
		$name = Yii::$app->user->identity->username;
		
		$order = new Order(
							$name,
							$email, 
							$show_id, 
							$lang_id);
		
		Yii::$app->session->set('order', $order);
		
		//here we render the view and pass data
        return $this->render('buy-ticket');
    }

	/**
     * Display seat selection view and get price.
     *
     */
	public function actionSeat()
    {
		//here we set language code and get it from session
		$this->setLanguage();
		
		$model = new SeatForm();
		if ($model->load(Yii::$app->request->post())) {
			$s = $model->seats;
            return $this->render('checkout', ['s' => $s]);
        }
		
		//here we render the view and pass data
        return $this->render('seat', ['model' => $model]);
    }
	
	/**
     * Display seat selection view and get price.
     *
     */
	public function actionCheckout()
    {
		//here we set language code and get it from session
		$this->setLanguage();
		
		//here we render the view and pass data
        return $this->render('checkout', ['s' => 1]);
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
