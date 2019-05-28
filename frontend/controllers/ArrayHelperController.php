<?php


namespace frontend\controllers;


use frontend\models\Employee;

class ArrayHelperController extends \yii\web\Controller
{
    public function actionDemo()
    {
        $employees = Employee::find();
        return $this->render('demo', [
            'employees' => $employees,
        ]);
    }

}