public function actionGetCities($province_id)
{
    $cities = (new \yii\db\Query())
        ->select('*')
        ->from('city')
        ->where([
            'province_id'=>$province_id,
        ])
        ->all(\yii::$app->db);
    \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
    return [
        'cities' => $cities,
    ];
}
