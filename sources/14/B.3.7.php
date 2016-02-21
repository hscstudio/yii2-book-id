public function actionCekOngkir()
{
    $model = new \yii\base\DynamicModel([
        'origin', 'destination', 'weight', 'courier',
    ]);
    $model->addRule(['origin', 'destination', 'weight', 'courier',], 'required');
    $model->addRule(['weight'], 'integer');
    $model->addRule(['courier'], 'in', ['range' => ['jne','pos','tiki']]);
    return $this->render('cek-ongkir',['model'=>$model]);
}
