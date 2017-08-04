<?php 
namespace app\components; 
use yii\base\Widget; 
use app\models\SubscribeForm;

class FooterSign extends Widget 
{ 
    public function init() 
    { 
        parent::init();
    } 
 
    public function run(){ 
        $model = new SubscribeForm();// code to create model

        return $this->render('subscribe', [
            'model' => $model
        ]); 
    } 
} 
?> 