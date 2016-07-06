<?php

namespace nfedoseev\yii2\logman\models;

use Yii;

/**
 * This is the model class for table "{{%logman_requests}}".
 *
 * @property integer $id
 * @property string $tag
 * @property string $url
 * @property string $site
 * @property string $time
 * @property integer $status
 * @property string $method
 * @property string $user_ip
 * @property integer $user_id
 *
 * @property LogmanTraces[] $logmanTraces
 */
class LogmanRequests extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%logman_requests}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['time'], 'required'],
            [['time'], 'safe'],
            [['status', 'user_id'], 'integer'],
            [['tag', 'user_ip'], 'string', 'max' => 100],
            [['url', 'site'], 'string', 'max' => 255],
            [['method'], 'string', 'max' => 10],
            [['tag'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tag' => 'Tag',
            'url' => 'Url',
            'site' => 'Site',
            'time' => 'Time',
            'status' => 'Status',
            'method' => 'Method',
            'user_ip' => 'User Ip',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLogmanTraces()
    {
        return $this->hasMany(LogmanTraces::className(), ['request_tag' => 'tag']);
    }
}
