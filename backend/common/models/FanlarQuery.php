<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[Fanlar]].
 *
 * @see Fanlar
 */
class FanlarQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Fanlar[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Fanlar|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
