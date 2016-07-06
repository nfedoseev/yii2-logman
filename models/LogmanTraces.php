<?php

namespace nfedoseev\yii2\logman\models;

use Yii;

/**
 * This is the model class for table "{{%logman_traces}}".
 *
 * @property integer $id
 * @property string $request_tag
 * @property string $message
 * @property string $message_full
 * @property string $message_short
 * @property string $message_all
 * @property integer $line
 * @property string $file
 * @property string $additional
 * @property integer $level
 * @property string $category
 * @property string $time
 * @property string $traces
 *
 * @property LogmanRequests $requestTag
 */
class LogmanTraces extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%logman_traces}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['request_tag', 'message', 'level', 'category', 'time'], 'required'],
            [['message', 'message_full', 'message_short', 'message_all', 'additional', 'traces'], 'string'],
            [['line', 'level'], 'integer'],
            [['time'], 'safe'],
            [['request_tag'], 'string', 'max' => 100],
            [['file', 'category'], 'string', 'max' => 255],
            [['request_tag'], 'exist', 'skipOnError' => true, 'targetClass' => LogmanRequests::className(), 'targetAttribute' => ['request_tag' => 'tag']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'request_tag' => 'Request Tag',
            'message' => 'Message',
            'message_full' => 'Message Full',
            'message_short' => 'Message Short',
            'message_all' => 'Message All',
            'line' => 'Line',
            'file' => 'File',
            'additional' => 'Additional',
            'level' => 'Level',
            'category' => 'Category',
            'time' => 'Time',
            'traces' => 'Traces',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequestTag()
    {
        return $this->hasOne(LogmanRequests::className(), ['tag' => 'request_tag']);
    }
}
