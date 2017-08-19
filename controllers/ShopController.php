<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\OrderModel;
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
		
		$order = new OrderModel(
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
			$reserv->active = 1;
			$reserv->reserv_hour = date('H');
			$reserv->reserv_min = date('i');
			
			$reserv->save();
			//$order->setReservationId($reserv->id);//we set here reservation_id for order, so later we can find and update paid value
			
			/*for($m = 0; $m < sizeof($model['seats']); $m++){
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
			}*/
			
			for($m = 0; $m < sizeof($model['seats2']); $m++){
				$row = substr($model['seats2'][$m], 0, strpos($model['seats2'][$m], '/'));
				$col = substr($model['seats2'][$m], (strlen($row) + 1));
				
				if($model['seats2'][$m] > 0){
					$seat_reserverd = new SeatReserved();
				
					$seat_reserverd->reservation_id = $reserv->id;
					$seat_reserverd->screening_id = $order->getScreeningId();
					$seat_reserverd->seat_id = $order->getSeatId();
					$seat_reserverd->row = $row;
					$seat_reserverd->colum = $col;
				
					$seat_reserverd->save();
				
					$order->setSeatValue($row, $col);
				}
			}
			
			$order->setTotalAmount();
			
            return $this->render('seat2', ['model' => $model, 'r_id' => $reserv->id]);
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
		
		$lang_id = Yii::$app->session->get('langId');
		if($lang_id === 1){
			$lang = 'ru';
		}else{
			$lang = 'tk';
		}
		
		//get order from session
		$order = Yii::$app->session->get('order');
		
		$uname = "test";
		$pass = "test";
		$orderId = '1';//$oder->getReservationId(); reservation_id (reservation table's paid amount set to 0, after succesifully payment just update table and set paid value to 1, then isnsert original order)
		$originalOrderId = '1';//???   $oder->getReservationId();
		$amount = $order->getTotalAmount();//120
		$description = 'Toleg';
		$failUrl= Yii::$app->urlManager->createAbsoluteUrl(['shop/fail']);//"http://failurl";
		$sign = sha1("$orderId:$amount:$description:$description:$orderId:$amount");
		$returnUrl = Yii::$app->urlManager->createAbsoluteUrl(['shop/success']);//"http://sucessurl";
		
		//$url = "https://mpi.gov.tm/payment/rest/register.do?currency=934&language=".$lang."&pageView=DESKTOP&description=Toleg&orderNumber=".urlencode($orderId)."&failUrl=".$failUrl."&userName=".urlencode($uname)."&password=".urlencode($pass)."&amount=".urlencode($amount)."&returnUrl=".urlencode($returnUrl.'&sign='.$sign."&origOrderId=".$originalOrderId);
		$url = "http://localhost/payment/register.php?currency=934&language=ru&pageView=DESKTOP&description=Toleg&orderNumber=".urlencode($orderId)."&failUrl=".$failUrl."&userName=".urlencode($uname)."&password=".urlencode($pass)."&amount=".urlencode($amount)."&returnUrl=".urlencode($returnUrl.'&sign='.$sign."&origOrderId=".$originalOrderId);
		return $this->redirect($url);
		
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_FAILONERROR,true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION,true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
		curl_setopt($ch, CURLOPT_TIMEOUT, 15);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		$retValue = curl_exec($ch);          
		curl_close($ch);
		$receivedData = json_decode($retValue,TRUE);
        
        if($receivedData !== null)
        {
            $response_status = $receivedData["errorCode"];
            $ext_order_id = $receivedData["orderId"];
			$form_url = $receivedData["formUrl"];
			//ƒелаешь что-то с заказом
			
			//here we render the view and pass data
			return $this->render('success', ['received_data' => $receivedData]);
			
		}else{
			//here we render the view and pass data
			return $this->render('fail', ['received_data' => $receivedData]);
		}
		
		/*if(Yii::$app->session->get('errorCode') !== null and Yii::$app->session->get('orderId') !== null and Yii::$app->session->get('formUrl') !== null){
			return $this->redirect('http://localhost/payment/merchant.php?formUrl='.Yii::$app->session->get('formUrl'));
		}*/
    }
	
	/**
     * Display seat selection view and get price.
     *
     */
	public function actionPayed()
    {
		//here we set language code and get it from session
		$this->setLanguage();
		
		$model->load(Yii::$app->request->post());
		
		$item = $this->model_checkout_order->getOrder($this->request->get["origOrderId"]);
		$order_id = Yii::$app->request->get('id');
		$sign = Yii::$app->request->get('id');
		$origOrderId = Yii::$app->request->get('id');
		
		$verifySign = sha1("$orderId:$amount:$description:$description:$orderId:$amount");
		
		//here we render the view and pass data
        return $this->render('success');
    }
	
	
	/**
     * Display seat selection view and get price.
     *
     */
	public function actionFail()
    {
		//here we set language code and get it from session
		$this->setLanguage();
		
		//here we render the view and pass data
        return $this->render('fail');
    }
	
	
	/**
     * Display seat selection view and get price.
     *
     */
	public function actionSuccess()
    {
		//here we set language code and get it from session
		$this->setLanguage();
		
		//here we render the view and pass data
        return $this->render('success');
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
