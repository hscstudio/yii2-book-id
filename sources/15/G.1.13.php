public function actionQueryCaching()
{
    $db = \Yii::$app->db;
    $expiration = 60;
    $dependency = new \yii\caching\DbDependency([
        'sql'=> 'SELECT count(id) FROM category',
    ]);
    $result = $db->cache(function ($db) {
        return $db->createCommand('SELECT * FROM category WHERE id=1')->queryOne();
    },$expiration, $dependency);
    echo $result['title'];
}
