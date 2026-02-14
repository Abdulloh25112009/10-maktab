<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "Fanlar".
 *
 * @property int $id
 * @property string $fan
 * @property string $malaka
 * @property string $reyting
 * @property string $ishfaol
 * @property string $rasm
 */
class Fanlar extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Fanlar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fan', 'malaka', 'reyting', 'ishfaol', 'rasm'], 'required'],
            [['fan', 'malaka', 'reyting', 'ishfaol', 'rasm'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fan' => 'Fan',
            'malaka' => 'Malaka',
            'reyting' => 'Reyting',
            'ishfaol' => 'Ishfaol',
            'rasm' => 'Rasm',
        ];
    }

    /**
     * {@inheritdoc}
     * @return FanlarQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new FanlarQuery(get_called_class());
    }

}
