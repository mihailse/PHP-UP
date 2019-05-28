<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;


$emails = ArrayHelper::getColumn($employees, 'email');

echo implode(', ', $emails);
echo '<hr>';

$array = [
    '1' => 'Москва',
    '2' => 'Кишинев',
    '3' => 'Волгоград',
    '4' => 'Звенигород',
];

$listData = ArrayHelper::map($employees, 'first_name', 'email');

echo '<pre>';
print_r($listData);
echo '<pre>';

echo Html::dropDownList('emails', [], $listData);
