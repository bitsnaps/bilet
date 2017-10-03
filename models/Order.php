<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property string $id
 * @property int $user_id
 * @property string $show_id
 * @property int $ticket_count
 * @property string $amount
 * @property string $date_created
 * @property string $confirmation_number
 * @property string $card_holder_name
 * @property int $status
 *
 * @property Show $show
 * @property User $user
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
            [['user_id', 'show_id', 'ticket_count', 'amount', 'confirmation_number', 'card_holder_name', 'status'], 'required'],
            [['user_id', 'show_id', 'ticket_count', 'status'], 'integer'],
            [['amount'], 'number'],
            [['date_created'], 'safe'],
            [['confirmation_number'], 'string', 'max' => 100],
            [['card_holder_name'], 'string', 'max' => 200],
            [['show_id'], 'exist', 'skipOnError' => true, 'targetClass' => Show::className(), 'targetAttribute' => ['show_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'show_id' => Yii::t('app', 'Show ID'),
            'ticket_count' => Yii::t('app', 'Ticket Count'),
            'amount' => Yii::t('app', 'Amount'),
            'date_created' => Yii::t('app', 'Date Created'),
            'confirmation_number' => Yii::t('app', 'Confirmation Number'),
            'card_holder_name' => Yii::t('app', 'Card Holder Name'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShow()
    {
        return $this->hasOne(Show::className(), ['id' => 'show_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTicketHasOrders()
    {
        return $this->hasMany(TicketHasOrder::className(), ['order_id' => 'id']);
    }
}
