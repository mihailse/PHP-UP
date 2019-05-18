<?php

namespace console\controllers;

use Yii;
use console\models\News;
use console\models\Subscriber;
use console\models\Sender;
use yii\helpers\Console;

class MailerController extends \yii\console\Controller
{
    public function actionSend()
    {
        $newsList = News::getList();
        $subscribers = Subscriber::getList();

        $count = Sender::run($subscribers, $newsList);

        Console::output("\nОтправлено писем: {$count}");

    }
}