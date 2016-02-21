public function actionDataCache()
{
    $var1 = "Teks ini akan di simpan di cache";
    $cache = \Yii::$app->cache;
    $data = $cache->get('var1');
    if ($data === false) {
        $cache->set('var1', $var1);
        $data = $var1;
    }
    echo $data;
}
