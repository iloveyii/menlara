<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "vocabulary".
 *
 * @property integer $id
 * @property string $word
 * @property string $meaning
 * @property string $lang
 * @property string $updated_at
 * @property string $created_at
 * @property integer $subtopic_id
 *
 * @property Subtopic $subtopic
 */
class Vocabulary extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vocabulary';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['updated_at', 'created_at'], 'safe'],
            [['subtopic_id'], 'integer'],
            [['word', 'meaning'], 'string', 'max' => 150],
            [['lang'], 'string', 'max' => 2],
            [['subtopic_id'], 'exist', 'skipOnError' => true, 'targetClass' => Subtopic::className(), 'targetAttribute' => ['subtopic_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'word' => 'Word',
            'meaning' => 'Meaning',
            'lang' => 'Lang',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
            'subtopic_id' => 'Subtopic ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubtopic()
    {
        return $this->hasOne(Subtopic::className(), ['id' => 'subtopic_id']);
    }
}
