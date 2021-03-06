<?php

namespace app\models;



use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "com_type".
 *
 * @property integer $com_type_id
 * @property string $com_type_name
 */
class ComType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'com_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['com_type_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'com_type_id' => 'Com Type ID',
            'com_type_name' => 'Com Type Name',
        ];
    }
    public static function GetList() {
        return ArrayHelper::map(self::find()->all(), 'com_type_id', 'com_type_name');
    }
}
