<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\CulturalPlaceTranslation;
use app\models\CulturalPlace;
use app\models\Show;
use app\models\ShowTranslation;
use app\models\Ticket;
use app\models\TicketOptionData;
use app\models\TicketDataOptionTranslation;
use app\models\Seat;
use app\models\Auditorium;

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
		

		if($show[0]->start_min === 0){
			$min = '00';
		}else{
			$min = $show[0]->start_min;
		}
		
		Yii::$app->session->set('show_id', $show[0]->id);
		Yii::$app->session->set('show_name', $show_translation[0]->show_name);
		Yii::$app->session->set('show_date', $show[0]->begin_date);
		Yii::$app->session->set('show_time', $show[0]->start_hour .':'. $min);
		Yii::$app->session->set('cultural_place_id', $cultural_place[0]->id);
		Yii::$app->session->set('cultural_place_category', $cultural_place[0]->category_id);
		Yii::$app->session->set('place_name', $cultural_place_translation[0]->place_name);
		
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
		$id = Yii::$app->session->get('langId');
		
		//here we get show_id to get proper price of tht show
		$show_id = Yii::$app->session->get('show_id');
		
		$ticket_id = Ticket::find()
								->where(['show_id' => $show_id])
								->all();
								
		$ticket_option_data_regular = TicketOptionData::find()
													->where(['ticket_id' => $ticket_id[0]->id, 'ticket_option_id' => '1'])
													->all();
													
		$ticket_option_data_vip = TicketOptionData::find()
													->where(['ticket_id' => $ticket_id[0]->id, 'ticket_option_id' => '2'])
													->all();
		
		$regular_price = TicketDataOptionTranslation::find()
														->where(['ticket_option_data_id' => $ticket_option_data_regular[0]->id, 'language_id' => $id])
														->all();
		
		//here we check if vip price is exist for the choosen show, if not we set it to 0
		if(sizeof($ticket_option_data_vip) === 0){
			Yii::$app->session->set('vip_price', 0);
			
		}else{
			$vip_price = TicketDataOptionTranslation::find()
													->where(['ticket_option_data_id' => $ticket_option_data_vip[0]->id, 'language_id' => $id])
													->all();
			
			Yii::$app->session->set('vip_price', $vip_price[0]->option_value);
		}
		
		
		Yii::$app->session->set('regular_price', $regular_price[0]->option_value);
		
		//here we get seat info from db
		$cultural_place_id = Yii::$app->session->get('cultural_place_id');
		
		$auditorium = Auditorium::find()->where(['cultural_place_id' => $cultural_place_id])->all();
		
		$seat = Seat::find()->where(['auditorium_id' => $auditorium[0]->id])->all();
		
		//here we render the view and pass data
        return $this->render('seat', [
                'seat' => $seat,
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
