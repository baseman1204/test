<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "activities".
 *
 * @property integer $id
 * @property string $activityName
 * @property string $activityDescription
 * @property string $activityImage
 */
class Activities extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'activities';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['activityName', 'activityDescription'], 'required'],
            [['activityDescription'], 'string'],
            [['activityName'], 'string', 'max' => 250],
            [['activityImage'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'activityName' => 'Activity Name',
            'activityDescription' => 'Activity Description',
            'activityImage' => 'Activity Image',
        ];
    }
}
