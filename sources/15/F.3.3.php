$sum = 42;
echo \Yii::t('app', 'Balance: {0,number}', $sum);
echo "<br>";
$sum = 42;
echo \Yii::t('app', 'Balance: {0,number,currency}', $sum);
