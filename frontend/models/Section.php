<?php

namespace frontend\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "section".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $updated_at
 * @property string $created_at
 *
 * @property Topic[] $topics
 */
class Section extends \yii\db\ActiveRecord
{
    public $sectionName;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'section';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description', 'url'], 'string'],
            [['updated_at', 'created_at'], 'safe'],
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTopics()
    {
        return $this->hasMany(Topic::className(), ['section_id' => 'id']);
    }

    public function list()
    {
        return ArrayHelper::map(Section::find()->select(['id', 'name'])->all(), 'id', 'name');
    }
}
