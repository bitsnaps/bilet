<?php 
namespace app\components; 
use yii\base\Widget; 
use app\models\SearchForm;

class SearchField extends Widget 
{ 
    public function init() 
    { 
        parent::init();
    } 
 
    public function run(){ 
        $model = new SearchForm();// code to create model

        return $this->render('search', [
            'model' => $model
        ]); 
    } 
} 
?> 