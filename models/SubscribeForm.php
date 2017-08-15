<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * Subscribe is the model behind the sign up for subscribe.
 */
class SubscribeForm extends Model
{
    public $email;
	public $agree = true;
    public $subject = 'BiletTm';
	public $body = 'Sag Bolun!';


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['email'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
        ];
    }


    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function contact($email)
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo($this->email)
                ->setFrom($email)
                ->setSubject($this->subject)
                ->setTextBody($this->body)
                ->send();

            return true;
        }
        return false;
    }
}
