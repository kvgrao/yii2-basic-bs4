<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "slot".
 *
 * @property int $slot_id
 * @property string $slot_code
 * @property string $slot_time
 * @property string|null $ipaddress
 * @property string|null $created
 * @property string|null $updated
 * @property string|null $deleted
 * @property string|null $updated_by
 */
class Slot extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'slot';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['slot_id', 'slot_code', 'slot_time'], 'required'],
            [['slot_id'], 'integer'],
            [['created', 'updated'], 'safe'],
            [['slot_code', 'deleted'], 'string', 'max' => 3],
            [['slot_time'], 'string', 'max' => 8],
            [['ipaddress'], 'string', 'max' => 20],
            [['updated_by'], 'string', 'max' => 32],
            [['slot_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'slot_id' => 'Slot ID',
            'slot_code' => 'Slot Code',
            'slot_time' => 'Slot Time',
            'ipaddress' => 'Ipaddress',
            'created' => 'Created',
            'updated' => 'Updated',
            'deleted' => 'Deleted',
            'updated_by' => 'Updated By',
        ];
    }
}
