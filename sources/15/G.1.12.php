public function actionQueryCaching()
{
    $db = \Yii::$app->db;
    $expiration = 60;
    $dependency = new \yii\caching\DbDependency([
        'sql'=> 'SELECT count(id) FROM category',
    ]);
    $result = $db->createCommand('SELECT * FROM category WHERE id=1')
        ->cache($expiration,$dependency)->queryOne();
    echo $result['title'];
}
