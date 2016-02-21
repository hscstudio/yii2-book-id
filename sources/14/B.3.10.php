public function actionCekOngkir()
{
    $model = new \yii\base\DynamicModel([
        'origin', 'destination', 'weight', 'courier',
    ]);
    $model->addRule(['origin', 'destination', 'weight', 'courier',], 'required');
    $model->addRule(['weight'], 'integer');
    $model->addRule(['courier'], 'in', ['range' => ['jne','pos','tiki']]);
    $results = [];
    if ($model->load(Yii::$app->request->post())) {
        $client = new Client();
        $response = $client->createRequest()
            ->setMethod('post')
            ->setUrl('http://api.rajaongkir.com/starter/cost')
            ->addHeaders([
                'key' => 'API_KEY',
            ])
            ->setData([
                'origin' => $model->origin,
                'destination' => $model->destination,
                'weight' => $model->weight,
                'courier' => $model->courier,
            ])
            ->send();
        if ($response->isOk) {
            $results = json_decode($response->content);
        }
    }
    return $this->render('cek-ongkir',[
        'model'=>$model,
        'results'=>$results,
    ]);
}
