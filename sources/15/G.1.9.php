public function actionQueryCaching()
{
    $db = \Yii::$app->db;
    $result = $db->createCommand('SELECT * FROM category WHERE id=1')->cache(1)->queryOne();
    echo $result['title'];
}
