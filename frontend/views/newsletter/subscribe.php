<?php
/* @var $model frontend\models\Subscribe */

//if (Yii::$app->session->hasFlash('subscribeStatus')){
//    echo Yii::$app->session->getFlash('subscribeStatus');
//}

$this->title = 'Подпишитесь на новости!';
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Описание статьи'
]);

$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'Здесь содержатся кейворды'
]);

$this->params['breadcrumbs'] = [
    'Test 1',
    ['label' => 'Test 2', 'url' => '/site/index'],
    'Test3 ',
    'Test4 ',
];

if ($model->hasErrors()) {
    echo '<pre>';
    print_r($model->getErrors());
    echo '<pre>';
}
?>

<form method="post">
    <p>Email:</p>
    <div class="row">
        <div class="col-md-2">
            <input type="text" name="email" class="form-control" placeholder="Введите Email"/>
        </div>
        <div class="col-md-2">
            <input type="submit" class='form-control btn-success'/>
        </div>
    </div>
</form>