<?php

namespace app\controllers;

use Yii;
use app\models\SearchForm;

class SearchController extends \yii\web\Controller
{
    public function actionIndex()
    {		
		$search = Yii::$app->session->get('search');
		
        return $this->render('index', [
            'search' => $search,
        ]);
    }

}
