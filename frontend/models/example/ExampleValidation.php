<?php

namespace frontend\models\example;

class ExampleValidation extends \yii\base\Model
{
       public $testAttribute;

    public function rules()
    {
        return [
            [['testAttribute'],  'required'],
            [['testAttribute'],  'url', 'defaultScheme' => 'http'],
        ];

    }
}