<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "show".
 *
 * @property string $id
 * @property string $show_category_id
 * @property string $cultural_place_id
 * @property string $begin_date
 * @property string $end_date
 *
 * @property CulturalPlace $culturalPlace
 * @property ShowCategory $showCategory
 * @property ShowTranslation[] $showTranslations
 * @property Language[] $languages
 * @property Ticket[] $tickets
 */
class Show extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'show';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['show_category_id', 'cultural_place_id', 'begin_date', 'end_date'], 'required'],
            [['show_category_id', 'cultural_place_id'], 'integer'],
            [['begin_date', 'end_date'], 'safe'],
            [['cultural_place_id'], 'exist', 'skipOnError' => true, 'targetClass' => CulturalPlace::className(), 'targetAttribute' => ['cultural_place_id' => 'id']],
            [['show_category_id'], 'exist', 'skipOnError' => true, 'targetClass' => ShowCategory::className(), 'targetAttribute' => ['show_category_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'show_category_id' => 'Show Category ID',
            'cultural_place_id' => 'Cultural Place ID',
            'begin_date' => 'Begin Date',
            'end_date' => 'End Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCulturalPlace()
    {
        return $this->hasOne(CulturalPlace::className(), ['id' => 'cultural_place_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShowCategory()
    {
        return $this->hasOne(ShowCategory::className(), ['id' => 'show_category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShowTranslations()
    {
        return $this->hasMany(ShowTranslation::className(), ['show_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLanguages()
    {
        return $this->hasMany(Language::className(), ['id' => 'language_id'])->viaTable('show_translation', ['show_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTickets()
    {
        return $this->hasMany(Ticket::className(), ['show_id' => 'id']);
    }
}
