public function actionDownload($inline=false){
    $user_id = \Yii::$app->user->id;
    $model = \app\models\UserPhoto::find()->where([
        'user_id' => $user_id
    ])->one();
    $path = Yii::getAlias("@app") . '/uploads/';
    $file_download = $path . $model->photo;
    $fake_filename = $model->photo;
    $response = Yii::$app->getResponse();
    $response->sendFile($file_download, $fake_filename,['inline'=>$inline]);
}
