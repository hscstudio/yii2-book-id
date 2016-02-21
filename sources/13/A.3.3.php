public function actionUpload()
{
    $model = new \app\models\UserPhoto();

    if (\Yii::$app->request->post()) {
        $model->photo = \yii\web\UploadedFile::getInstance($model, 'photo');
        $model->user_id = \Yii::$app->user->id;
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
