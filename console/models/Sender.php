<?php


namespace console\models;

use Yii;

class Sender
{
    public static function run($subscribers, $newsList)
    {
        foreach ($subscribers as $subscriber) {


            $result = Yii::$app->mailer->compose('/mailer/newslist', [
                'newsList' => $newsList,
            ])
                ->setFrom('testphpup1@gmail.com')
                ->setTo($subscriber['email'])
                ->setSubject('Проверка отправки почты' . date(DATE_RFC822))
                ->send();
            var_dump($result);
        }
    }
}