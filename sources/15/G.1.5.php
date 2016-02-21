public function actionDataCache()
{
    $var2 = "Teks ini akan di simpan di cache dengan metode array";
    $cache = \Yii::$app->cache;
    $data = $cache['var2'];
    if ($data === false) {
        $cache['var2'] = $var2;
        $data = $var2;
    }
    echo $data;
}
