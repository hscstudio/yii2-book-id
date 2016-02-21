public function actionGallery()
{
    $model = new \app\models\Gallery();
    if (\Yii::$app->request->post()) {
        $model->image = \yii\web\UploadedFile::getInstances($model, 'image');
        if ($model->validate()) {
            foreach ($model->image as $file) {
                $saveTo = 'uploads/' . $file->baseName . '.' . $file->extension;
                if ($file->saveAs($saveTo)) {
                    $model2 = new \app\models\Gallery([
                        'image' => $file->baseName . '.' . $file->extension,
                    ]);
                    $model2->save(false);
                }
            }
            \Yii::$app->session->setFlash('success', 'Image berhasil diupload');
        }
    }

    return $this->render('gallery', [
        'model' => $model
    ]);
}
