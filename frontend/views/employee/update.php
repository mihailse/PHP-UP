<?php
/* @var $model frontend\models\Employee */

if ($model->hasErrors()) {
    echo '<pre>';
    print_r($model->getErrors());
    echo '<pre>';
}
?>

<h1>Редактировать Ваши данные</h1>
<form method="post">
    <p>Имя</p>
    <input name = "firstName" type="text" />
    <br><br>

<p>Фамилия</p>
<input name = "lastName" type="text" />
<br><br>

<p>Отчество</p>
<input name = "middleName" type="text" />
<br><br>

<input type="submit" />

</form>
