<?php
public function actionTranslation()
{
  $username = 'Hafid';
  echo \Yii::t('app', 'Hello, {username}, how are you?', [
      'username' => $username,
  ]);
  echo "<br>";
  $username = 'Budi';
  echo \Yii::t('app', 'Hello, {username}, how are you?', [
        'username' => $username,
  ]);

}
