<?php

namespace app\models;

/**
 * ContactForm is the model behind the contact form.
 */
class Order
{
    private $name;
    private $email;
	
    private $show_id;
    private $show_name;
    private $show_date;
	private $show_time;
	
    private $cultural_place_id;
    private $cultural_place_category;
	private $place_name;
	
	private $seat_id;
	private $seat_row;
	private $seat_col;
	private $seat_value;
	private $auditorium_id;
	private $screening_id;
	
	private $ticket_id;
	private $ticket_regular_price;
	private $ticket_vip_price;

	public function __construct(
								$name, 
								$email, 
								$show_id,
								$lang_id){
		
		$this->name = $name;
		$this->email = $email;
		
		$this->getOrderData($show_id, $lang_id);
	}
	
	private function getOrderData($show_id, $lang_id){
		
		//here we get proper shows*******************************************
		$show = Show::find()
						->where(['id' => $show_id])
						->all();
		
		$show_translation = ShowTranslation::find()
												->where(['language_id' => $lang_id, 'show_id' => $show[0]->id])
												->all();
		
		if($show[0]->start_min === 0){
			$min = '00';
		}else{
			$min = $show[0]->start_min;
		}
		
		$this->show_name = $show_translation[0]->show_name;
		$this->show_id = $show[0]->id;
		$this->show_time = $show[0]->start_hour .':'. $min;
		$this->show_date = $show[0]->begin_date;
		
		//here we get all categories with proper values**********************************
		$cultural_place = CulturalPlace::find()
											->where(['id' => $show[0]->cultural_place_id])
											->all();
											
		$this->cultural_place_id = $cultural_place[0]->id;
		$this->cultural_place_category = $cultural_place[0]->category_id;
		
		$cultural_place_translation = CulturalPlaceTranslation::find()
																	->where(['language_id' => $lang_id, 'cultural_place_id' => $show[0]->cultural_place_id])
																	->all();
		
		$this->place_name = $cultural_place_translation[0]->place_name;
		
		
		//*************************SEAT VALUES************************************************
		$this->auditorium_id = Auditorium::find()
												->where(['cultural_place_id' => $this->cultural_place_id])
												->all()[0]->id;
		
		$screening = Screening::find()
									->where(['auditorium_id' => $this->auditorium_id, 'show_id' => $this->show_id])
									->all();
		
		
		if(sizeof($screening) > 0){
			
			$this->screening_id = $screening[0]->id;
			
		}else{
			$this->screening_id = 0;
		}
		
		$seats = Seat::find()
							->where(['auditorium_id' => $this->auditorium_id])
							->all();
							
		if(sizeof($seats) > 0){
			
			$this->seat_id = $seats[0]->id;
			$this->seat_row = $seats[0]->row;
			$this->seat_col = $seats[0]->number;
			
		}else{
			$this->seat_id = 0;
			$this->seat_row = 0;
			$this->seat_col = 0;
		}
		
		
		
		//***********************TICKET DATA*************************************
		$ticket = Ticket::find()
								->where(['show_id' => $show_id])
								->all();
		
		if(sizeof($ticket) > 0){
			
			$this->ticket_id = $ticket[0]->id;
			
			
			$ticket_option = TicketOptionData::find()
													->where(['ticket_id' => $this->ticket_id])
													->all()[0]->id;
			
			$ticket_option_data_regular = TicketOptionData::find()
														->where(['ticket_id' => $this->ticket_id, 'ticket_option_id' => 1])
														->all();
			
			
			if(sizeof($ticket_option_data_regular) > 0){
				$this->ticket_regular_price = TicketDataOptionTranslation::find()
															->where(['ticket_option_data_id' => $ticket_option_data_regular[0]->id, 'language_id' => $lang_id])
															->all()[0]->option_value;
			}else{
				$this->ticket_regular_price = 0;
			}
			
			$ticket_option_data_vip = TicketOptionData::find()
														->where(['ticket_id' => $this->ticket_id, 'ticket_option_id' => 2])
														->all();
			
			if(sizeof($ticket_option_data_vip) > 0){
				$this->ticket_vip_price = TicketDataOptionTranslation::find()
															->where(['ticket_option_data_id' => $ticket_option_data_vip[0]->id, 'language_id' => $lang_id])
															->all()[0]->option_value;
			}else{
				$this->ticket_vip_price = 0;
			}
			
		}else{
			$this->ticket_id = 0;
			$this->ticket_regular_price = 0;
			$this->ticket_vip_price = 0;
		}
	}
	
	//getters and setters
	public function getName(){
		return $this->name;
	}
	
	public function getEmail(){
		return $this->email;
	}
	
	public function getShowId(){
		return $this->show_id;
	}
	
	public function getShowName(){
		return $this->show_name;
	}
	
	public function getShowDate(){
		return $this->show_date;
	}
	
	public function getShowTime(){
		return $this->show_time;
	}
	
	public function getCulturalPlaceId(){
		return $this->cultural_place_id;
	}
	
	public function getCulturalPlaceCategory(){
		return $this->cultural_place_category;
	}
	
	public function getPlaceName(){
		return $this->place_name;
	}
	
	public function getAuditoriumId(){
		return $this->auditorium_id;
	}
	
	public function getScreeningId(){
		return $this->screening_id;
	}
	
	public function getSeatId(){
		return $this->seat_id;
	}
	
	public function getSeatRow(){
		return $this->seat_row;
	}
	
	public function getSeatCol(){
		return $this->seat_col;
	}
	
	
	public function setSeatValue($seat_row, $seat_col){
		$this->seat_value = $seat_row .\Yii::t('app', 'row') .'-'. $seat_col .\Yii::t('app', 'col');
	}
	
	public function getSeatValue(){
		return $this->seat_value;
	}
	
	public function getTicketId(){
		return $this->ticket_id;
	}
	
	public function getRegularPrice(){
		return $this->ticket_regular_price;
	}
	
	public function getVipPrice(){
		return $this->ticket_vip_price;
	}
}
