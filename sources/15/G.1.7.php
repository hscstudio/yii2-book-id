public function actionDataCache()
{
    $var4 = "Teks ini akan di simpan di cache tergantung dari file dependency.txt";
    $cache = \Yii::$app->cache;
    $data = $cache->get('var4');
    if ($data === false) {
        $dependency = new \yii\caching\FileDependency([
            'fileName' => '@runtime/cache/dependency.txt',
        ]);
        $cache->set('var4', $var4, 0, $dependency);
        $data = $var4;
    }
    echo $data;
}
