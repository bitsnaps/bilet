<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property string $id
 * @property int $user_id
 * @property int $ticket_count
 * @property string $amount
 * @property string $date_created
 * @property int $confirmation_number
 *
 * @property Client $user
 * @property TicketHasOrder[] $ticketHasOrders
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'ticket_count', 'amount', 'confirmation_number'], 'required'],
            [['user_id', 'ticket_count', 'confirmation_number'], 'integer'],
            [['amount'], 'number'],
            [['date_created'], 'safe'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Client::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'ticket_count' => 'Ticket Count',
            'amount' => 'Amount',
            'date_created' => 'Date Created',
            'confirmation_number' => 'Confirmation Number',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Client::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTicketHasOrders()
    {
        return $this->hasMany(TicketHasOrder::className(), ['order_id' => 'id']);
    }
}
