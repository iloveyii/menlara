<?php

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;


/**
 * This is the model class for table "vocabulary".
 *
 * @property integer $id
 * @property string $word
 * @property string $meaning
 * @property string $lang
 * @property string $updated_at
 * @property string $created_at
 */
class Vocabulary extends ActiveRecord
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
            [['word', 'meaning'], 'string', 'max' => 150],
            [['lang'], 'string', 'max' => 2],
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
        ];
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                'value' => new Expression('NOW()'),
            ],
        ];
    }

}
