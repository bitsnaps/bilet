<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comment".
 *
 * @property string $id
 * @property string $show_id
 * @property string $name
 * @property string $comment
 * @property string $comment_date
 * @property double $star_count
 *
 * @property Show $show
 */
class Comment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['show_id', 'name', 'comment', 'star_count'], 'required'],
            [['show_id'], 'integer'],
            [['comment'], 'string'],
            [['comment_date'], 'safe'],
            [['star_count'], 'number'],
            [['name'], 'string', 'max' => 45],
            [['show_id'], 'exist', 'skipOnError' => true, 'targetClass' => Show::className(), 'targetAttribute' => ['show_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'show_id' => 'Show ID',
            'name' => 'Name',
            'comment' => 'Comment',
            'comment_date' => 'Comment Date',
            'star_count' => 'Star Count',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShow()
    {
        return $this->hasOne(Show::className(), ['id' => 'show_id']);
    }
}
