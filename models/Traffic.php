<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

/**
 * This is the model class for table "traffic".
 *
 * @property integer $id
 * @property string $week
 * @property integer $traffic
 * @property string $whenSubmitted
 */
class Traffic extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'traffic';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['week', 'traffic', 'whenSubmitted'], 'required'],
            [['week', 'whenSubmitted'], 'safe'],
            [['traffic'], 'integer'],
            [['week'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'week' => 'Week',
            'traffic' => 'Traffic',
            'whenSubmitted' => 'When Submitted',
        ];
    }

    // Stack overflow solution for submitting current time into database
    //https://stackoverflow.com/questions/27378264/how-to-add-current-timestamp-in-the-database-what-is-the-format
    
  /*
    public function behaviors()
{
    return [
        // Other behaviors
        [
            'class' => TimestampBehavior::className(),
            'createdAtAttribute' => 'whenSubmitted',
            'updatedAtAttribute' => false,
            'value' => new Expression('NOW()'),
        ],
    ];   
}
*/



}
