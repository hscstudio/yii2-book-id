public function actionDepdrop()
{
    $model = new \yii\base\DynamicModel([
        'province_id', 'city_id',
    ]);
    $model->addRule(['province_id'], 'integer');
    $model->addRule(['city_id'], 'integer');

    return $this->render('depdrop', [
        'model' => $model,
        'provinces' => $this->getProvinces(),
    ]);
}
