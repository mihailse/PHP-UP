<?php


namespace frontend\controllers;


use yii\web\Controller;

class HtmlHelperController extends Controller
{
    public function actionDemo()
    {
        return $this->render('demo');
    }


    public function actionEscapeOutput()
    {
        $comments = [
            [
                'id' => '10',
                'author' =>'Пидар',
                'text' => 'Привет от пидара!!!',
            ],
            [
                'id' => '11',
                'author' =>'Пидар 2',
                'text' => 'Привет от пидара 2!!!',
            ],
            [
                'id' => '12',
                'author' =>'Пидар 3',
                'text' => 'Привет от пидара 3!!!',
            ],
            [
                'id' => '13',
                'author' =>'Пидар 4',
                'text' => '<b>Привет! </b><script>alert("Спизили нахер все"); </script>',
            ],

        ];
        return $this->render('escape-output',
            ['comments' => $comments]);
    }

}