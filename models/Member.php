<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "member".
 *
 * @property int $member_id
 * @property string $firstname
 * @property string $lastname
 * @property string $address
 * @property string $email
 * @property string $phone
 * @property int $age
 * @property string $gender
 * @property string $username
 * @property string $password
 * @property string|null $ipaddress
 * @property string|null $created
 * @property string|null $updated
 * @property string|null $deleted
 * @property string|null $updated_by
 *
 * @property Schedule[] $schedules
 */
class Member extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'member';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname', 'address', 'email', 'phone', 'age', 'gender', 'username', 'password'], 'required'],
            [['age'], 'integer'],
            [['created', 'updated'], 'safe'],
            [['firstname', 'lastname', 'ipaddress'], 'string', 'max' => 20],
            [['address'], 'string', 'max' => 100],
            [['email'], 'string', 'max' => 50],
            [['phone'], 'string', 'max' => 10],
            [['gender'], 'string', 'max' => 6],
            [['username', 'password', 'updated_by'], 'string', 'max' => 32],
            [['deleted'], 'string', 'max' => 3],
            [['username'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'member_id' => 'Member ID',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'address' => 'Address',
            'email' => 'Email',
            'phone' => 'Phone',
            'age' => 'Age',
            'gender' => 'Gender',
            'username' => 'Username',
            'password' => 'Password',
            'ipaddress' => 'Ipaddress',
            'created' => 'Created',
            'updated' => 'Updated',
            'deleted' => 'Deleted',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * Gets query for [[Schedules]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSchedules()
    {
        return $this->hasMany(Schedule::className(), ['member_id' => 'member_id']);
    }
}
