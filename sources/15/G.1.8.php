public function actionDataCache()
{
    $var5 = "Teks ini akan di simpan di cache tergantung dari db dependency";
    $cache = \Yii::$app->cache;
    $data = $cache->get('var5');
    if ($data === false) {
        $dependency = new \yii\caching\DbDependency([
            'sql'=> 'SELECT count(id) FROM category',
        ]);
        $cache->set('var5', $var5, 0, $dependency);
        $data = $var5;
    }
    echo $data;
}
