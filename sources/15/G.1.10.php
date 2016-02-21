public function actionQueryCaching()
{
    $db = \Yii::$app->db;
    $result = $db->cache(function ($db) {
        return $db->createCommand('SELECT * FROM category WHERE id=1')->queryOne();
    });
    echo $result['title'];
}
