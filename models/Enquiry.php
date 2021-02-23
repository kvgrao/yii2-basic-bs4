<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "enquiry".
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string $city
 * @property string $subject
 * @property string $details
 * @property string|null $status
 * @property string $ipaddress
 * @property string|null $created
 * @property string|null $updated
 * @property string|null $deleted
 * @property string|null $updated_by
 */
class Enquiry extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'enquiry';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name', 'phone', 'email', 'city', 'subject', 'details', 'ipaddress'], 'required'],
            [['id'], 'integer'],
            [['created', 'updated'], 'safe'],
            [['name', 'city', 'subject', 'ipaddress'], 'string', 'max' => 20],
            [['phone', 'status'], 'string', 'max' => 10],
            [['email'], 'string', 'max' => 50],
            [['details'], 'string', 'max' => 200],
            [['deleted'], 'string', 'max' => 3],
            [['updated_by'], 'string', 'max' => 32],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'phone' => 'Phone',
            'email' => 'Email',
            'city' => 'City',
            'subject' => 'Subject',
            'details' => 'Details',
            'status' => 'Status',
            'ipaddress' => 'Ipaddress',
            'created' => 'Created',
            'updated' => 'Updated',
            'deleted' => 'Deleted',
            'updated_by' => 'Updated By',
        ];
    }
}
