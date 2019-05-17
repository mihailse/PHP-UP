<?php

namespace frontend\models;

use Yii;

class Test
{
    /**
     * @param $max
     * @return array
     * @throws \yii\db\Exception
     */
    public static function getNewsList($max)
    {
        $max = intval($max);
        $sql = 'SELECT * FROM news LIMIT ' . $max;

        $result = Yii::$app->db->createCommand($sql)->queryAll();

        //$helper = Yii::$app->stringHelper;

        if (!empty($result) && is_array($result)) {
            foreach ($result as &$item) {
                $item['content'] = Yii::$app->stringHelper->getShort($item['content']);
            }
        }
        return $result;
    }

    public static function getItem($id)
    {
        $id = intval($id);

        $sql = 'SELECT * FROM news WHERE id = ' . $id;

        $result = Yii::$app->db->createCommand($sql)->queryOne();
        return $result;
    }
}