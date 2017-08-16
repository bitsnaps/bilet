<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Order;
use app\models\SeatForm;
use app\models\Reservation;
use app\models\SeatReserved;

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
		$order = Yii::$app->session->get('order');
		
		if (Yii::$app->request->post()) {
			
			$model = Yii::$app->request->post('SeatForm');
			
			/*for($m = 0; $m < sizeof($model['seats']); $m++){
				$row = substr($model['seats'][$m], 0, strpos($model['seats'][$m], '/'));
				$col = substr($model['seats'][$m], (strlen($row) + 1));
				
				$order->setSeatValue($row, $col);
			}*/
			
			date_default_timezone_set("Asia/Ashgabat");
			
			$reserv = new Reservation();
			
			$reserv->reservation_type_id = 1;
			$reserv->user_id = 1;
			$reserv->screening_id = $order->getScreeningId();
			$reserv->reserved = 1;
			$reserv->paid = 0;
			$reserv->active = 0;
			$reserv->reserv_hour = date('H');
			$reserv->reserv_min = date('i');
			
			$reserv->save();
			
			
			for($m = 0; $m < sizeof($model['seats']); $m++){
				$row = substr($model['seats'][$m], 0, strpos($model['seats'][$m], '/'));
				$col = substr($model['seats'][$m], (strlen($row) + 1));
				
				$seat_reserverd = new SeatReserved();
				
				$seat_reserverd->reservation_id = $reserv->id;
				$seat_reserverd->screening_id = $order->getScreeningId();
				$seat_reserverd->seat_id = $order->getSeatId();
				$seat_reserverd->row = $row;
				$seat_reserverd->colum = $col;
				
				$seat_reserverd->save();
				
				$order->setSeatValue($row, $col);
			}
			
            return $this->render('seat2', ['model' => $model]);
        }else{
			$model = new SeatForm();
			
			$category = $order->getCulturalPlaceCategory();
			
			switch($category){
				case 4:
					return $this->render('seat2', ['model' => $model]);
			}
			//here we render the view and pass data
			return $this->render('seat', ['model' => $model]);
		}
		
		
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
     * Display seat selection view and get price.
     *
     */
	public function actionPay()
    {
		//here we set language code and get it from session
		$this->setLanguage();
		
		
		$order_id = Yii::$app->request->get('id');
		
		
		//here we render the view and pass data
        return $this->render('ecomregister', ['orderId' => 1, 'description' => 'Payment', 'originalOrderId' => 1]);
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
