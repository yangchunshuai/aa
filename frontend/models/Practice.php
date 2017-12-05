<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "practice".
 *
 * @property string $id
 * @property string $uname
 * @property string $default
 * @property string $type
 * @property string $option
 * @property string $fill
 * @property string $rule
 * @property string $range
 */
class Practice extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'practice';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uname', 'default', 'type', 'option', 'fill', 'rule', 'range'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'uname' => 'Uname',
            'default' => 'Default',
            'type' => 'Type',
            'option' => 'Option',
            'fill' => 'Fill',
            'rule' => 'Rule',
            'range' => 'Range',
        ];
    }
}
