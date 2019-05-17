<?php

namespace console\controllers;

use Yii;
use yii\console\Controller;

class MailerController extends \yii\console\Controller
{
    public function actionSend()
    {
        $result = Yii::$app->mailer->compose()
            ->setFrom('testphpup1@gmail.com')
            ->setTo('testphpup1@gmail.com')
            ->setSubject('Проверка отправки почты' . date(DATE_RFC822))
            ->setTextBody('Это проверка отправки сообщения из Yii2')
            ->setHtmlBody('<b>Это проверка отправки сообщения из Yii2</b>
                </br>')
            ->send();
        var_dump(
            $result
        );
    }
}