public function actionDataCache()
{
    $var3 = "Teks ini akan di simpan di cache dalam waktu 60 detik";
    $cache = \Yii::$app->cache;
    $data = $cache->get('var3');
    if ($data === false) {
        $cache->set('var3', $var3, 60);
        $data = $var3;
    }
    echo $data;
}
