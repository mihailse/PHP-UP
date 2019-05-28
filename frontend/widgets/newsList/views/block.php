<?php
foreach ($list as $item): ?>
    <h4>
        <a href=
           " <?php echo Yii::$app->urlManager->createUrl(['test/view', 'id' =>
               $item['id']]); ?>">
            <?php echo $item['title'] ?>
        </a>
    </h4>

    <p><?php echo $item['content'] ?>
        <b>... Статус:<?php echo ' ' . $item['status'] ?></b></p>
    <hr>
<?php endforeach; ?>
