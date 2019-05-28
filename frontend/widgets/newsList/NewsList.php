<?php

namespace frontend\widgets\newsList;

use frontend\models\Test;
use Yii;
use yii\base\Widget;

class NewsList extends Widget
{
    public $showLimit = null;
    public $shortTextLimit = null;
    public function run()
    {
        $max = Yii::$app->params['maxNewsInList'];
        if ($this->showLimit) {
            $max = $this->showLimit;
        }

        $list = Test::getNewsList($max);
        return $this->render('block',
            ['list' => $list,
            ]);
    }
}