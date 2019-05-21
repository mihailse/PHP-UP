<?php
/* @var $model frontend\models\Subscribe */

//if (Yii::$app->session->hasFlash('subscribeStatus')){
//    echo Yii::$app->session->getFlash('subscribeStatus');
//}

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