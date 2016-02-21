public function actionUpload()
{
    $user_id = \Yii::$app->user->id;
    $model = \app\models\UserPhoto::find()->where([
        'user_id' => $user_id
    ])->one();

    if(!$model){
        $model = new \app\models\UserPhoto([
            'user_id' => $user_id
        ]);
    }

    if (\Yii::$app->request->post()) {
        $model->photo = \yii\web\UploadedFile::getInstance($model, 'photo');
        if($model->validate()){
            $saveTo = 'uploads/' . $model->photo->baseName . '.' . $model->photo->extension;
            if($model->photo->saveAs($saveTo)){
                $model->save(false);
                Yii::$app->session->setFlash('success','Foto berhasil diupload');
            }
        }
    }

    return $this->render('upload', [
        'model' => $model
    ]);
}
