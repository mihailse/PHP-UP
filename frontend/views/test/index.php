<?php
  foreach ($list as $item): ?>
      <h1>
          <a href=
             " <?php echo Yii::$app->urlManager->createUrl(['test/view', 'id' =>
      $item['id']]); ?>">
              <?php echo $item['title'] ?>
          </a>
      </h1>

      <p><?php echo $item['content'] ?>
            <b>...Далее  Статус:<?php echo $item['status'] ?></b> </p>
      <hr>
<?php endforeach; ?>

<?php echo Yii::$app->urlManager->createUrl(['test/index']); ?></b>





