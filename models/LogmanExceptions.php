<?php

namespace nfedoseev\yii2\logman\models;

use Yii;

/**
 * This is the model class for table "{{%logman_exceptions}}".
 *
 * @property integer $id
 * @property string $tag
 * @property string $class
 * @property string $error_group
 * @property integer $line_number
 * @property string $file_name
 * @property string $message
 * @property string $stack_trace
 */
class LogmanExceptions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%logman_exceptions}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['line_number'], 'integer'],
            [['message', 'stack_trace'], 'string'],
            [['tag'], 'string', 'max' => 100],
            [['class', 'error_group', 'file_name'], 'string', 'max' => 255],
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
            'class' => 'Class',
            'error_group' => 'Error Group',
            'line_number' => 'Line Number',
            'file_name' => 'File Name',
            'message' => 'Message',
            'stack_trace' => 'Stack Trace',
        ];
    }
}
