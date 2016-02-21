public function behaviors()
{
    return [
       [
         'class' => 'yii\filters\PageCache',
         'only' => ['index'],
         'duration' => 60,
         'variations' => [
             \Yii::$app->language,
         ],
         'dependency' => [
           'class' => 'yii\caching\DbDependency',
           'sql' => 'SELECT COUNT(*) FROM category',
         ],
       ],
    ];
}
