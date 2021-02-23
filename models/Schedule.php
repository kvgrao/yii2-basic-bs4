<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "schedule".
 *
 * @property int $id
 * @property int $member_id
 * @property string $date
 * @property int $service_id
 * @property int $slot_id
 * @property string $status
 * @property string|null $feedback
 * @property string|null $ipaddress
 * @property string|null $created
 * @property string|null $updated
 * @property string|null $deleted
 * @property string|null $updated_by
 *
 * @property Member $member
 * @property Slot $slot
 * @property Service $service
 */
class Schedule extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'schedule';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['member_id', 'date', 'service_id', 'slot_id'], 'required'],
            [['member_id', 'service_id', 'slot_id'], 'integer'],
            [['date', 'created', 'updated'], 'safe'],
            [['status', 'feedback'], 'string', 'max' => 10],
            [['ipaddress'], 'string', 'max' => 20],
            [['deleted'], 'string', 'max' => 3],
            [['updated_by'], 'string', 'max' => 32],
            [['member_id'], 'exist', 'skipOnError' => true, 'targetClass' => Member::className(), 'targetAttribute' => ['member_id' => 'member_id']],
            [['slot_id'], 'exist', 'skipOnError' => true, 'targetClass' => Slot::className(), 'targetAttribute' => ['slot_id' => 'slot_id']],
            [['service_id'], 'exist', 'skipOnError' => true, 'targetClass' => Service::className(), 'targetAttribute' => ['service_id' => 'service_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'member_id' => 'Member ID',
            'date' => 'Date',
            'service_id' => 'Service ID',
            'slot_id' => 'Slot ID',
            'status' => 'Status',
            'feedback' => 'Feedback',
            'ipaddress' => 'Ipaddress',
            'created' => 'Created',
            'updated' => 'Updated',
            'deleted' => 'Deleted',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * Gets query for [[Member]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMember()
    {
        return $this->hasOne(Member::className(), ['member_id' => 'member_id']);
    }

    /**
     * Gets query for [[Slot]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSlot()
    {
        return $this->hasOne(Slot::className(), ['slot_id' => 'slot_id']);
    }

    /**
     * Gets query for [[Service]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getService()
    {
        return $this->hasOne(Service::className(), ['service_id' => 'service_id']);
    }
}
