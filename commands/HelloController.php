<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\commands;

use yii\console\Controller;
use app\models\Reservation;

/**
 * This command echoes the first argument that you have entered.
 *
 * This command is provided as an example for you to learn how to create console commands.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class HelloController extends Controller
{
    /**
     * This command echoes what you have entered as the message.
     * @param string $message the message to be echoed.
     */
    public function actionIndex($message = 'hello world')
    {
		$h = date('H');
		$m = date('i');
		
		if($h < 10){
			
			if($h === 0){
				$hr = 23;
				$date_string = \Yii::$app->formatter->asDate('yesterday', 'php:Y-m-d') .' ' .$hr.':'.$m.':00';
			}else{
				$hr = '0'.($h - 1);
				$date_string = \Yii::$app->formatter->asDate('now', 'php:Y-m-d') .' ' .$hr.':'.$m.':00';
			}
			
		}else{
			$hr = ($h - 1);
			$date_string = \Yii::$app->formatter->asDate('now', 'php:Y-m-d') .' ' .$hr.':'.$m.':00';
		}
		
		$x = Reservation::find()->where(['paid' => 0, 'active' => 1, 'reserved' => 1])->andWhere(['>', 'reserv_date', $date_string])->all();
		
        echo $message . "\n";
		echo $date_string . "\n";
		echo $h .':'. $m . "\n";
		echo \Yii::$app->formatter->asDatetime('now', 'php:Y-m-d H:i:s') .' barlag '."\n";
		var_dump($x);
		
    }
}
