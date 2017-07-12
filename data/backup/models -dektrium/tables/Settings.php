<?php

namespace common\models\tables;

use Yii;

/**
 * This is the model class for table "{{%settings}}".
 *
 * @property integer $id
 * @property string $type
 * @property string $section
 * @property string $key
 * @property string $value
 * @property integer $active
 * @property string $created
 * @property string $modified
 */
class Settings extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%settings}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'section', 'key'], 'required'],
            [['value'], 'string'],
            [['active'], 'integer'],
            [['created', 'modified'], 'safe'],
            [['type', 'section', 'key'], 'string', 'max' => 255],
            [['section', 'key'], 'unique', 'targetAttribute' => ['section', 'key'], 'message' => 'The combination of Section and Key has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'section' => 'Section',
            'key' => 'Key',
            'value' => 'Value',
            'active' => 'Active',
            'created' => 'Created',
            'modified' => 'Modified',
        ];
    }
}
