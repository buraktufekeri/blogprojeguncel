<?php

namespace frontend\modules\admin\models;

use Yii;

/**
 * This is the model class for table "resim".
 *
 * @property integer $id
 * @property string $resimad
 * @property string $resimicerik
 */
class Resim extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'resim';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['resimad', 'resimicerik'], 'required'],
            [['resimad', 'resimicerik'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'resimad' => 'Resimad',
            'resimicerik' => 'Resimicerik',
        ];
    }
}
