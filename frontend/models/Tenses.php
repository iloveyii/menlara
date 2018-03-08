<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tenses".
 *
 * @property integer $id
 * @property string $english
 * @property string $infinitiv
 * @property string $presens
 * @property string $preteritum
 * @property string $supinum
 * @property string $imperativ
 */
class Tenses extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tenses';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['english', 'infinitiv', 'presens', 'preteritum', 'supinum', 'imperativ'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'english' => 'English',
            'infinitiv' => 'Infinitiv',
            'presens' => 'Presens',
            'preteritum' => 'Preteritum',
            'supinum' => 'Supinum',
            'imperativ' => 'Imperativ',
        ];
    }
}
