<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tariff_zone".
 *
 * @property integer $id
 * @property string $name
 *
 * @property PromotionalCode[] $promotionalCodes
 */
class TariffZone extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tariff_zone';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPromotionalCodes()
    {
        return $this->hasMany(PromotionalCode::className(), ['tariff_zone_id' => 'id']);
    }
}
