<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "service".
 *
 * @property int $service_id
 * @property string $service_code
 * @property string|null $description
 * @property string|null $sales
 * @property string|null $repairs
 * @property string|null $duration
 * @property string|null $price
 * @property string|null $ipaddress
 * @property string|null $created
 * @property string|null $updated
 * @property string|null $deleted
 * @property string|null $updated_by
 */
class Service extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'service';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['service_id', 'service_code'], 'required'],
            [['service_id'], 'integer'],
            [['created', 'updated'], 'safe'],
            [['service_code', 'deleted'], 'string', 'max' => 3],
            [['description', 'sales', 'repairs'], 'string', 'max' => 100],
            [['duration', 'ipaddress'], 'string', 'max' => 20],
            [['price'], 'string', 'max' => 10],
            [['updated_by'], 'string', 'max' => 32],
            [['service_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'service_id' => 'Service ID',
            'service_code' => 'Service Code',
            'description' => 'Description',
            'sales' => 'Sales',
            'repairs' => 'Repairs',
            'duration' => 'Duration',
            'price' => 'Price',
            'ipaddress' => 'Ipaddress',
            'created' => 'Created',
            'updated' => 'Updated',
            'deleted' => 'Deleted',
            'updated_by' => 'Updated By',
        ];
    }
}
