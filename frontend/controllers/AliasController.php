<?php


namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class AliasController extends Controller
{
    public function actionExample()
    {
        Yii::setAlias('@files', '/var/www/project/frontend/web/files');
        $result = mkdir(Yii::getAlias('@files') . '/test2');
        var_dump($result);
        $result = mkdir(Yii::getAlias('@files') . '/test3');
        var_dump($result);
        $result = mkdir(Yii::getAlias('@files') . '/test4');
        var_dump($result);
        $result = mkdir(Yii::getAlias('@files') . '/test5');
        var_dump($result);
    }
}