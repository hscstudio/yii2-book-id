if(\Yii::$app->user->isGuest){
    throw new \yii\web\NotFoundHttpException('File tidak ditemukan.');
}
else{
    $response->sendFile($file_download, $fake_filename,['inline'=>$inline]);
}
