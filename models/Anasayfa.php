<?php

namespace frontend\modules\admin\models;

use Yii;

/**
 * This is the model class for table "anasayfa".
 *
 * @property integer $id
 * @property string $aciklama
 * @property string $resimUrl
 */
class Anasayfa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public $file;

    public static function tableName()
    {
        return 'anasayfa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'aciklama', 'resimUrl'], 'required'],
            [['id'], 'integer'],
            [['file'],'file'],
            [['aciklama'], 'string'],
            [['resimUrl'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'aciklama' => 'Aciklama',
            'resimUrl' => 'Resim Url',
            'file' => 'Resim',
        ];
    }
}
