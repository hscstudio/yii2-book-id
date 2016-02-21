public function actionTranslation()
{
    echo \Yii::t('app', 'This is a string to translate!');
    echo "<br>";
    echo \Yii::t('app', 'Only example');
}
