<?php

use yii\helpers\Html;

echo Html::tag('b', 'Какая-то хуйня в теге болда') . '<br>'. '<br>';

$array = [
    '1' => 'Москва',
    '2' => 'Кишинев',
    '3' => 'Волгоград',
    '4' => 'Звенигород',
];

echo Html::dropDownList('city_id', [], $array);

echo Html::radioList('city_id', [], $array);

echo Html::checkboxList('city_id', [], $array);

$options = [
    'class' => [
        'btn',
        'theme' => 'btn-default',
    ]
];

Html::addCssClass($options, ['theme' => 'btn-alert btn']);
  // ключ 'theme' уже использован

echo Html::tag('div', 'Сохранить', $options);
// отобразит '<div class="btn btn-default">Сохранить</div>'

echo '<br>';

echo Html::img("@images/burger.jpg", ['alt' => 'Гамбургер']);
