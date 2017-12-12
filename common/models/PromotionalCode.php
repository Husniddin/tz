<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "promotional_code".
 *
 * @property integer $id
 * @property string $name
 * @property integer $tariff_zone_id
 * @property integer $customer_reward
 * @property string $start_dt
 * @property string $end_dt
 * @property string $status
 *
 * @property TariffZone $tariffZone
 */
class PromotionalCode extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'promotional_code';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'customer_reward', 'tariff_zone_id', 'start_dt', 'end_dt', 'status'], 'required'],
            [['tariff_zone_id', 'customer_reward'], 'integer'],
            [['start_dt', 'end_dt'], 'safe'],
            [['status'], 'string'],
            [['name'], 'string', 'max' => 255],
            [['tariff_zone_id'], 'exist', 'skipOnError' => true, 'targetClass' => TariffZone::className(), 'targetAttribute' => ['tariff_zone_id' => 'id']],
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
            'tariff_zone_id' => 'Tariff Zone ID',
            'customer_reward' => 'Customer Reward',
            'start_dt' => 'Start Dt',
            'end_dt' => 'End Dt',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTariffZone()
    {
        return $this->hasOne(TariffZone::className(), ['id' => 'tariff_zone_id']);
    }
}
