<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "schedule_view".
 *
 * @property int $id
 * @property string $date
 * @property string|null $appointment
 * @property int $member_id
 * @property string|null $member_name
 * @property string $phone
 * @property string|null $service_description
 * @property string|null $updated_by
 * @property string $status
 * @property string|null $deleted
 * @property string|null $feedback
 * @property string|null $ipaddress
 */
class ScheduleView extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'schedule_view';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'member_id'], 'integer'],
            [['date', 'phone', 'status'], 'required'],
            [['date'], 'safe'],
            [['appointment'], 'string', 'max' => 14],
            [['member_name'], 'string', 'max' => 41],
            [['phone', 'status', 'feedback'], 'string', 'max' => 10],
            [['service_description'], 'string', 'max' => 106],
            [['updated_by'], 'string', 'max' => 32],
            [['deleted'], 'string', 'max' => 3],
            [['ipaddress'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'appointment' => 'Appointment',
            'member_id' => 'Member ID',
            'member_name' => 'Member Name',
            'phone' => 'Phone',
            'service_description' => 'Service Description',
            'updated_by' => 'Updated By',
            'status' => 'Status',
            'deleted' => 'Deleted',
            'feedback' => 'Feedback',
            'ipaddress' => 'Ipaddress',
        ];
    }
}
